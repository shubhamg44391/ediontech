/* Edion Web Technologies — progressive enhancement only.
   Everything below is optional: the site is fully usable with JS disabled. */
(function () {
  "use strict";
  document.documentElement.classList.remove("no-js");

  /* --- Mobile drawer ----------------------------------------------------- */
  var burger = document.querySelector(".burger");
  var drawer = document.getElementById("drawer");
  var masthead = document.querySelector(".masthead");
  if (burger && drawer) {
    burger.addEventListener("click", function () {
      var open = burger.getAttribute("aria-expanded") === "true";
      burger.setAttribute("aria-expanded", String(!open));
      drawer.setAttribute("data-open", String(!open));
      if (masthead) masthead.setAttribute("data-drawer-open", String(!open));
      document.body.style.overflow = open ? "" : "hidden";
    });
    drawer.addEventListener("click", function (e) {
      if (e.target.closest("a")) {
        burger.setAttribute("aria-expanded", "false");
        drawer.setAttribute("data-open", "false");
        if (masthead) masthead.setAttribute("data-drawer-open", "false");
        document.body.style.overflow = "";
      }
    });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && burger.getAttribute("aria-expanded") === "true") {
        burger.click();
        burger.focus();
      }
    });
  }

  /* --- Scroll reveal ----------------------------------------------------- */
  var targets = document.querySelectorAll("[data-reveal]");
  if (targets.length) {
    if (!("IntersectionObserver" in window) ||
      window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
      targets.forEach(function (el) { el.classList.add("is-in"); });
    } else {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-in");
            io.unobserve(entry.target);
          }
        });
      }, { rootMargin: "0px 0px -8% 0px", threshold: 0.08 });
      targets.forEach(function (el) { io.observe(el); });
    }
  }

  /* --- Infinite rail: duplicate track content once for seamless loop ---- */
  document.querySelectorAll(".rail__track").forEach(function (track) {
    if (track.dataset.cloned) return;
    track.dataset.cloned = "1";
    track.innerHTML += track.innerHTML;
    track.setAttribute("aria-hidden", "false");
  });

  /* --- Pricing billing toggle ------------------------------------------- */
  var toggle = document.querySelector("[data-billing-toggle]");
  if (toggle) {
    toggle.addEventListener("click", function (e) {
      var btn = e.target.closest("button[data-cycle]");
      if (!btn) return;
      toggle.querySelectorAll("button").forEach(function (b) {
        b.setAttribute("aria-pressed", String(b === btn));
      });
      var yearly = btn.dataset.cycle === "yearly";

      // Update price numbers from dataset
      document.querySelectorAll("[data-monthly]").forEach(function (el) {
        var val = yearly ? el.dataset.yearly : el.dataset.monthly;
        el.textContent = "$" + parseFloat(val).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
      });

      // Update cycle labels
      document.querySelectorAll("[data-cycle-label]").forEach(function (el) {
        el.textContent = yearly ? el.dataset.yearlyLabel : el.dataset.monthlyLabel;
      });

      // Toggle discount badges
      document.querySelectorAll(".plan-discount-badge").forEach(function (badge) {
        badge.style.display = yearly ? "inline-block" : "none";
      });
    });
  }

  /* --- Blog category filter --------------------------------------------- */
  var filter = document.querySelector("[data-filter]");
  if (filter) {
    filter.addEventListener("click", function (e) {
      var chip = e.target.closest("[data-cat]");
      if (!chip) return;
      e.preventDefault();
      var cat = chip.dataset.cat;
      filter.querySelectorAll("[data-cat]").forEach(function (c) {
        c.setAttribute("aria-current", String(c === chip));
      });
      document.querySelectorAll("[data-post-cat]").forEach(function (post) {
        var show = cat === "all" || post.dataset.postCat === cat;
        post.hidden = !show;
      });
    });
  }

  /* --- Article reading progress + active TOC ---------------------------- */
  var bar = document.getElementById("read-bar");
  if (bar) {
    var onScroll = function () {
      var h = document.documentElement;
      var pct = h.scrollTop / (h.scrollHeight - h.clientHeight) * 100;
      bar.style.width = Math.min(100, Math.max(0, pct)) + "%";
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  /* --- Forms: client-side validation feedback only (no backend here) ---- */
  document.querySelectorAll("form[data-validate]").forEach(function (form) {
    form.addEventListener("submit", function (e) {
      if (!form.checkValidity()) return; // let the browser show messages
      e.preventDefault();
      var note = form.querySelector("[data-form-note]");
      if (note) {
        note.hidden = false;
        note.textContent = "Form validated. Connect this form to your backend endpoint to start receiving submissions.";
      }
    });
  });

  /* --- Current year ------------------------------------------------------ */
  document.querySelectorAll("[data-year]").forEach(function (el) {
    el.textContent = new Date().getFullYear();
  });
})();

/* ==========================================================================
   v2 — mega menu + rental software cost calculator
   ========================================================================== */
(function () {
  "use strict";

  /* --- Mega menu: hover to open, click outside to close ------------------- */
  var items = document.querySelectorAll("[data-mega]");
  if (items.length) {
    var closeAll = function (except) {
      items.forEach(function (it) {
        if (it === except) return;
        it.dataset.open = "false";
        it.querySelector(".nav__trigger").setAttribute("aria-expanded", "false");
      });
    };
    items.forEach(function (item) {
      var trigger = item.querySelector(".nav__trigger");
      var open = function () {
        closeAll(item);
        item.dataset.open = "true";
        trigger.setAttribute("aria-expanded", "true");
      };
      var close = function () {
        item.dataset.open = "false";
        trigger.setAttribute("aria-expanded", "false");
      };
      trigger.addEventListener("click", function (e) {
        e.stopPropagation();
        item.dataset.open === "true" ? close() : open();
      });
      if (window.matchMedia("(hover: hover)").matches) {
        item.addEventListener("mouseenter", open);
      }
    });
    document.addEventListener("click", function (e) {
      if (!e.target.closest("[data-mega]")) closeAll(null);
    });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") closeAll(null);
    });
  }

  /* --- Rental software cost calculator ----------------------------------- */
  var mods = document.querySelectorAll("[data-mod]");
  if (mods.length) {
    var HOURS_PER_WEEK = 35;
    var rate = 35;
    var team = 3;

    var fmt = function (n) {
      return "$" + Math.round(n).toLocaleString("en-US");
    };

    var render = function () {
      var lo = 0, hi = 0, count = 0;
      mods.forEach(function (m) {
        if (!m.checked) return;
        count++;
        lo += parseFloat(m.dataset.low);
        hi += parseFloat(m.dataset.high);
      });

      var out = document.querySelector("[data-out-cost]");
      var note = document.querySelector("[data-out-cost-note]");

      if (!count) {
        out.textContent = "$0";
        note.textContent = "Select modules to begin";
        document.querySelector("[data-out-count]").textContent = "0";
        document.querySelector("[data-out-weeks]").textContent = "\u2014";
        document.querySelector("[data-out-cal]").textContent = "\u2014";
        return;
      }

      // Sequential module weeks are person-weeks; a larger team compresses
      // the calendar but adds ~12% coordination overhead per extra person.
      var overhead = 1 + (team - 2) * 0.12;
      var costLo = lo * HOURS_PER_WEEK * rate * overhead;
      var costHi = hi * HOURS_PER_WEEK * rate * overhead;
      var calLo = Math.ceil(lo / team);
      var calHi = Math.ceil(hi / team);

      out.textContent = fmt(costLo) + " \u2013 " + fmt(costHi);
      note.textContent = "Estimated build cost, excluding licences and support";
      document.querySelector("[data-out-count]").textContent = String(count);
      document.querySelector("[data-out-weeks]").textContent = lo + "\u2013" + hi + " person-weeks";
      document.querySelector("[data-out-cal]").textContent = calLo + "\u2013" + calHi + " weeks";
      document.querySelector("[data-out-rate]").textContent = "$" + rate + "/hr";
    };

    mods.forEach(function (m) {
      m.addEventListener("change", function () {
        if (m.hasAttribute("data-locked")) { m.checked = true; return; }
        render();
      });
    });

    var seg = function (sel, attr, fn) {
      var box = document.querySelector(sel);
      if (!box) return;
      box.addEventListener("click", function (e) {
        var b = e.target.closest("button[" + attr + "]");
        if (!b) return;
        box.querySelectorAll("button").forEach(function (x) {
          x.setAttribute("aria-pressed", String(x === b));
        });
        fn(parseFloat(b.getAttribute(attr)));
        render();
      });
    };
    seg("[data-rate]", "data-rate-val", function (v) { rate = v; });
    seg("[data-team]", "data-team-val", function (v) { team = v; });

    var reset = document.querySelector('[data-preset="mvp"]');
    if (reset) {
      reset.addEventListener("click", function () {
        mods.forEach(function (m) { m.checked = m.hasAttribute("data-locked"); });
        render();
      });
    }

    render();
  }
})();

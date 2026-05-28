@extends('admin.layouts.app')
@section('main-content')

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-10">
                        <h4 class="py-3 mb-4">Post List</h4>
                    </div>
                    <div class="col-md-2">
                        <div class="table-btn-css">
                            <a href="#">
                                <button style="position:relative;left:40px;" type="button"
                                    class="btn btn-primary waves-effect waves-light mt-3" data-bs-toggle="modal"
                                    data-bs-target="#addModal">
                                    <span class="ti-xs ti ti-plus me-1"></span>Add
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                @if(session('success'))
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: '{{ session('success') }}',
                                        showConfirmButton: false,
                                        timer: 2000
                                    });
                                @endif
                                                                  });
                        </script>
                        <!-- Button trigger modal -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Serial </th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Meta Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($result->count() > 0)
                                    @foreach ($result as $index => $lead)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>

                                            <td><img style="width: 100px;height: 100px;border-radius: 57px;"
                                                    src="{{ asset('storage/' . str_replace('public/', '', $lead->image)) }}"
                                                    alt="Website Logo_dark" width="200"></td>
                                            <td>{{ $lead->title }}</td>
                                            <td>{{ Str::limit($lead->meta_title, 30) ?? 'N/A' }}</td>
                                            <td class=" justify-content-between">
                                                <button type="button" class="btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#editPostModal{{ $lead->id }}">
                                                    <i class='bx bx-edit bx-sm'></i>
                                                </button>
                                                <button type="button" class="btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#confirmDeleteModal{{ $lead->id }}">
                                                    <i class='bx bx-trash bx-sm'></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Edit Link Modal -->
                                        <div class="modal fade" id="editPostModal{{ $lead->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="editLinkModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <form method="POST" action="{{ route('post.update', ['post' => $lead->id]) }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="modal-body">

                                                            <!-- Title Input -->
                                                            <div class="mb-3">
                                                                <label for="title" class="form-label">Post Title</label>
                                                                <input type="text" class="form-control" id="title" name="title"
                                                                    required value="{{ $lead->title }}">
                                                            </div>

                                                            <!-- Image Input -->
                                                            <div class="mb-3">
                                                                <label for="image" class="form-label">Post Banner Image</label>
                                                                <input type="file" class="form-control" id="image" name="image">
                                                            </div>

                                                            <!-- Display Existing Image -->
                                                            @if ($lead->image)
                                                                <img style="width: 212px;height: 100px;margin-left: 30%;"
                                                                    src="{{ asset('storage/' . str_replace('public/', '', $lead->image)) }}"
                                                                    alt="Website Logo_dark" width="200">
                                                            @endif

                                                            <!-- Description Textarea -->
                                                            <div class="mb-3">
                                                                <label for="description_{{ $lead->id }}"
                                                                    class="form-label">Description</label>
                                                                <textarea class="form-control summernote"
                                                                    id="description_{{ $lead->id }}"
                                                                    name="description">{{ $lead->description }}</textarea>
                                                            </div>

                                                            <!-- Meta Fields -->
                                                            <div class="mb-3">
                                                                <label for="meta_title_{{ $lead->id }}" class="form-label">Meta
                                                                    Title</label>
                                                                <input type="text" class="form-control"
                                                                    id="meta_title_{{ $lead->id }}" name="meta_title"
                                                                    value="{{ $lead->meta_title }}" maxlength="255">
                                                                <div class="form-text">
                                                                    Recommended: 50-60 characters
                                                                    <span id="meta_title_{{ $lead->id }}_counter"
                                                                        class="float-end">0/60 characters</span>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="meta_description_{{ $lead->id }}"
                                                                    class="form-label">Meta Description</label>
                                                                <textarea class="form-control" id="meta_description_{{ $lead->id }}"
                                                                    name="meta_description" rows="2"
                                                                    maxlength="500">{{ $lead->meta_description }}</textarea>
                                                                <div class="form-text">
                                                                    Recommended: 150-160 characters
                                                                    <span id="meta_description_{{ $lead->id }}_counter"
                                                                        class="float-end">0/160 characters</span>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="meta_keywords_{{ $lead->id }}" class="form-label">Meta
                                                                    Keywords</label>
                                                                <textarea class="form-control" id="meta_keywords_{{ $lead->id }}"
                                                                    name="meta_keywords" rows="2"
                                                                    maxlength="500">{{ $lead->meta_keywords }}</textarea>
                                                                <div class="form-text">
                                                                    Comma separated keywords
                                                                    <span id="meta_keywords_{{ $lead->id }}_counter"
                                                                        class="float-end">0/500 characters</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Delete Confirmation Modal -->
                                        <div class="modal fade" id="confirmDeleteModal{{ $lead->id }}" tabindex="-1"
                                            aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this post?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <form id="deleteSubscriberForm" method="POST"
                                                            action="{{ route('post.destroy', $lead->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center">No posts found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $result->links('custom-pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">


                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Post Banner Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descriptions</label>
                            <textarea class="form-control" id="summernote" name="description" required></textarea>
                        </div>

                        <!-- Meta Fields -->
                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title" maxlength="255">
                            <div class="form-text">
                                Recommended: 50-60 characters
                                <span id="meta_title_counter" class="float-end">0/60 characters</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control" id="meta_description" name="meta_description" rows="2"
                                maxlength="500"></textarea>
                            <div class="form-text">
                                Recommended: 150-160 characters
                                <span id="meta_description_counter" class="float-end">0/160 characters</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="meta_keywords" class="form-label">Meta Keywords</label>
                            <textarea class="form-control" id="meta_keywords" name="meta_keywords" rows="2"
                                maxlength="500"></textarea>
                            <div class="form-text">
                                Comma separated keywords
                                <span id="meta_keywords_counter" class="float-end">0/500 characters</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Initialize Summernote
        $('#summernote').summernote({
            height: 300,
            minHeight: null,
            maxHeight: null,
            focus: true
        });

        // Initialize Summernote for each edit modal
        try {
            $('.summernote').each(function () {
                var id = $(this).attr('id');
                var description = $('#' + id).val();

                console.log('Initializing Summernote for:', id);
                $('#' + id).summernote({
                    height: 300,
                    focus: true
                });
                $('#' + id).summernote('code', description);
            });
        } catch (error) {
            console.error('Error initializing Summernote:', error);
        }

        // Character counter for meta fields
        document.addEventListener('DOMContentLoaded', function () {
            // Function to update character count
            function updateCharCount(inputId, counterId, maxLength) {
                const input = document.getElementById(inputId);
                const counter = document.getElementById(counterId);

                if (input && counter) {
                    input.addEventListener('input', function () {
                        const length = this.value.length;
                        counter.textContent = `${length}/${maxLength} characters`;

                        if (length > maxLength) {
                            counter.classList.add('text-danger');
                        } else {
                            counter.classList.remove('text-danger');
                        }
                    });

                    // Trigger on page load
                    const event = new Event('input');
                    input.dispatchEvent(event);
                }
            }

            // Initialize character counters for add modal
            updateCharCount('meta_title', 'meta_title_counter', 60);
            updateCharCount('meta_description', 'meta_description_counter', 160);
            updateCharCount('meta_keywords', 'meta_keywords_counter', 500);

            // For edit modals (they might be loaded dynamically)
            document.addEventListener('shown.bs.modal', function (event) {
                const modal = event.target;
                const metaTitle = modal.querySelector('[id^="meta_title_"]');
                const metaDesc = modal.querySelector('[id^="meta_description_"]');
                const metaKeywords = modal.querySelector('[id^="meta_keywords_"]');

                if (metaTitle) {
                    const id = metaTitle.id;
                    updateCharCount(id, id + '_counter', 60);
                }

                if (metaDesc) {
                    const id = metaDesc.id;
                    updateCharCount(id, id + '_counter', 160);
                }

                if (metaKeywords) {
                    const id = metaKeywords.id;
                    updateCharCount(id, id + '_counter', 500);
                }
            });
        });

        // Sync Summernote content to textarea before form submit
        $('form').on('submit', function () {
            if ($('#summernote').length) {
                $('#summernote').val($('#summernote').summernote('code'));
            }
            $('.summernote').each(function () {
                $(this).val($(this).summernote('code'));
            });
        });
    </script>

@endsection
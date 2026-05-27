<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{


    public function show_blog()
    {
        // this is the query builder 
        $blogs = DB::table('blogs')->orderBy('id', 'DESC')->get();



        return view('frontend.blogs')->with(compact('blogs'));
    }


    public function add_blog()
    {
        return view('frontend.add_blog');
    }
    // dd($request->all()); 
    public function save_blog(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'author' => 'required|max:255',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048', // optional image
            'title' => 'required',
            'meta_title' => 'required',
        ];

        // if ($request->image != "") {
        //     $rules['image'] = 'image';
        // }
        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            return redirect()->route('add.blog')->withErrors($validator)->withInput();
        }


        // insert record in db
        // echo "Validated";

        $blog = new Blog();

        $blog->name = $request->name;
        $blog->author = $request->author;
        $blog->category = $request->category;
        $blog->title = $request->title;
        $blog->meta_title = $request->meta_title;
        $blog->save();

        // if ($request->hasFile('image')) {

        //     //  Here image will store
        //     $image = $request->image;
        //    $ext = $image->getClientOriginalExtension();
        //     $imageName = time() . '.' . $ext;  // unique image name

        //     // upload folder in drive 

        //     $image->move(public_path('uploads/blogs'), $imageName);

        //     // save image through unique name
        //     $blog->image = $imageName;
        //     $blog->save();
        // }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/blogs'), $imageName);
            $blog->image = $imageName;
            $blog->save();
        }

        return redirect()->route('blogs.list')->with('success', 'Blog Saved Successfully');
    }

    public function edit_blog($id, Request $request)
    {

        $blog = Blog::where('id', $id)->first();
        if (!$blog) {
            $request->session()->flash('errorMsg', 'Record Not Found');
            return Redirect('blogs');
        }
        return view('frontend.edit', compact('blog'));
    }


       public function update_blog($id,Request $request)
    {
        $blog=Blog::findOrFail($id);
        $rules = [
            'name' => 'required|max:255',
            'author' => 'required|max:255',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048', // optional image
            'title' => 'required',
            'meta_title' => 'required',
        ];

        // if ($request->image != "") {
        //     $rules['image'] = 'image';
        // }
        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
           return redirect()
                ->route('blogs.edit', $blog->id)
                ->withErrors($validator)
                ->withInput();
        }


        // update record in db
        // echo "Validated";

      

        $blog->name = $request->name;
        $blog->author = $request->author;
        $blog->category = $request->category;
        $blog->title = $request->title;
        $blog->meta_title = $request->meta_title;
        $blog->save();

          // Upload New Image

    if ($request->hasFile('image')) {

        // Delete old image

        if ($blog->image != "" && file_exists(public_path('uploads/blogs/' . $blog->image))) {

            unlink(public_path('uploads/blogs/' . $blog->image));
        }

        // Upload new image

        $image = $request->file('image');

        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('uploads/blogs'), $imageName);

        // Save new image name

        $blog->image = $imageName;
    }

    $blog->save();

    return redirect()
            ->route('blogs.list')
            ->with('success', 'Blog Updated Successfully');
    }

    

    public function delete_blog($id, Request $request)
    {

        $blog = Blog::where('id', $id)->first();
        if (!$blog) {
            $request->session()->flash('errorMsg', 'Record not found.');
            return redirect('blogs');
        }

        blog::where('id', $id)->delete();
        $request->session()->flash('successMsg', 'Record has been deleted Successfully.');
        return redirect('blogs');
    }
}

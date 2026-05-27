@extends('Frontend.Layouts.main')


@section('main-container')
    <main id="mxd-page-content" class="mxd-page-content inner-page-content">
        <div>

            <div class="" style="margin-top:20px; height:;">
                {{--  Posts heading --}}
                <div class="gap row">
                    {{-- Left side Navbar --}}
                    <div class="col-3"></div>
                    {{-- left side navbar end --}}
                    <div class="col-9">
                        <div class="container px-5 py-5">
                            <div class="py-2 text-white bg-dark card d-flex align-items-center">
                                <div class="py-2 card col-9 ">
                                    Add blog
                                </div>
                                <div class="col-3"><a href="/blogs" class="p-1 bg-primary">back</a> </div>
                            </div>

                            {{-- table start here --}}
                            <form  enctype="multipart/form-data" class="row g-3" action="{{ route('blog.add') }}" method="post">
                                @csrf
                                <div class="mt-10px bg-light">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            id="exampleFormControlInput1" placeholder="Name"
                                            class="@error('name') is-invalid @enderror form-control-lg">

                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror


                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput2" class="form-label">Author</label>
                                        <input type="text" name="author" value="{{ old('author') }}"
                                            id="exampleFormControlInput2" placeholder="author"
                                            class="@error('author') is-invalid  @enderror form-control-lg">
                                        @error('author')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                     <div class="mb-3">
                                        <label for="exampleFormControlInput2" class="form-label">Category</label>
                                        <input type="text" name="category" value="{{ old('category') }}"
                                            id="exampleFormControlInput2" placeholder="Category"
                                            class="@error('category') is-invalid  @enderror form-control-lg">
                                        @error('category')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea3" class="form-label">Image</label>
                                        <input class="form-control" name="image" type="file"
                                            id="exampleFormControlTextarea3">
                                        {{-- @if ($errors->any())
                                        <p>{{$errors->first('image')}} </p>

                                        @endif --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea4" class="form-label">Title </label>
                                        <textarea name="title" value="{{ old('title') }}" class="@error('title') is-invalid  @enderror form-control-lg"
                                            id="exampleFormControlTextarea4" rows="3"></textarea>
                                        @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput5" class="form-label">Meta Title</label>
                                        <input type="text" name="meta_title" value="{{ old('meta-title') }}"
                                            class="@error('meta_title') is-invalid @enderror form-control-lg"
                                            id="exampleFormControlInput5" placeholder="Meta Title">
                                        @error('meta_title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <button class="form-label bg-primary" type="submit">Save Blog</button>

                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </main>
@endsection

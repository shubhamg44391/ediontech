@extends('Frontend.Layouts.main')


@section('main-container')
    <main id="mxd-page-content" class="mxd-page-content inner-page-content">
        <div>

            <div class="" style="margin-top:20px; height:;">
                {{--  Posts heading --}}
                <div class="gap row">
                    {{-- Left side Navbar --}}
                    <div class="col-3">Dashboard</div>
                    {{-- left side navbar end --}}
                    <div class="col-9">
                        <div class="container">
                            
                            {{-- success message for form submission --}}
                            @if (Session::has('success'))
                                <div class="col-md-12">
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                </div>
                            @endif
                            {{-- error message for form submission --}}
                            @if (Session::has('errorMsg'))
                                <div class="col-md-12">
                                    <div class="alert alert-danger">{{ Session::get('errorMsg') }}</div>
                                </div>
                            @endif
                            <div class="py-2 mx-1 text-white row bg-dark card">
                                <div class="text-white col-9 text-start">
                                  <span> Post Lists</span> 
                                </div>
                                <div class="col-3"> <a href="/add-blog" class="p-1 bg-primary">Add</a></div>
                            </div>



                            {{-- table start here --}}
                            <div class="py-5 bg-light">
                                <table class="table table-striped">

                                    <thead>
                                        <tr>
                                            <th class="px-5" scope="col">Serial</th>
                                            <th class="px-5" scope="col">Author</th>
                                            <th class="px-5" scope="col">Category</th>
                                            <th class="px-5" scope="col">Image</th>
                                            <th class="px-5" scope="col">Title</th>
                                            <th class="px-5" scope="col">Meta Title</th>
                                            <th class="px-5" scope="col">Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($blogs)
                                            @foreach ($blogs as $blog)
                                                <tr>
                                                    <th class="px-5 " scope="row">{{ $blog->id }}</th>
                                                    <td class="px-5 d-flex align-item-center">{{ $blog->name }}</td>
                                                    <td class="px-5 d-flex align-item-center">{{ $blog->author }}</td>
                                                    <td class="px-5 d-flex align-item-center">{{ $blog->category }}</td>
                                                    
                                                  
                                                    <td class="px-5">
                                                        @if($blog->image!="")
                                                            <img style="height:50px; width:50px " class=" d-flex align-item-center" src="{{asset('/uploads/blogs/'.$blog->image)}}" alt="">
                                                        
                                                        @endif
                                                    </td>
                                                      <td class="px-5">{{ $blog->title }}</td>
                                                    <td class="px-5">{{ $blog->meta_title }}</td>
                                                    <td class="px-5">
                                                        <a class="bg-success"
                                                            href="{{ route('blogs.edit', $blog->id) }}">edit</a></td>

                                                    <td class="px-5"><a href="#" onclick="deleteBlog({{$blog->id}})" class="bg-danger">delete</a></td>

                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6"> Blog not added yet.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>



            </div>
        </div>
    </main>
    <script type="text/javascript">

    function deleteBlog(id){
if(confirm('Are you sure you want to delete?'))
window.location.href='{{url('delete-blog')}}/'+id;
    }

    </script>
@endsection

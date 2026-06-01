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
                        <h4 class="py-3 mb-4">Services List</h4>
                    </div>
                    <div class="col-md-2">
                        <div class="table-btn-css">
                            <a href="#">
                                <button style="position:relative;left:40px;" type="button"
                                    class="mt-3 btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                                    data-bs-target="#addModal">
                                    <span class="ti-xs ti ti-plus me-1"></span>Add
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                @if (session('success'))
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
                                    <th>Service Name</th>
                                    <th>Type1</th>
                                    <th>Type2</th>
                                    <th>Type3</th>
                                    <th>Type4</th>
                                    <th>Type5</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if ($result->count() > 0)
                                    @foreach ($result as $index => $lead)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $lead->service_name }}</td>
                                            <td>{{ $lead->type1 }}</td>
                                            <td>{{ $lead->type2 }}</td>
                                            <td>{{ $lead->type3 }}</td>
                                            <td>{{ $lead->type4 }}</td>
                                            <td>{{ $lead->type5 }}</td>
                                            <td>{{ $lead->title }}</td>
                                            <td>{{ $lead->Description }}</td>
                                            <td><img style="width: 100px;height: 100px;border-radius: 57px;"
                                                    src="{{ asset('storage/' . str_replace('public/', '', $lead->image)) }}"
                                                    alt="Website Logo_dark" width="200"></td>
                                            {{-- <td>{{ Str::limit($lead->meta_title, 30) ?? 'N/A' }}</td> --}}
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
 

                                       
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center">No Service found.</td>
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



@endsection

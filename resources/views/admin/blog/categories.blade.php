@extends('layouts.app')
@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="card">
         <div class="row row-bordered g-0">
            <div class="col-md-10">
               <h4 class="py-3 mb-4">Category List</h4>
            </div>
            <div class="col-md-2">
               <div class="table-btn-css">
                  <a href="#">
                  <button style="position:relative;left:40px;" type="button" class="btn btn-primary waves-effect waves-light mt-3" data-bs-toggle="modal" data-bs-target="#addModal">
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
                        <th>Name</th>
                        <th>Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                     @if ($result->count() > 0)
                     @foreach ($result as $index=> $lead)
                     <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $lead->name }}</td>
                        <td class=" justify-content-between">
                           <button type="button" class="btn-primary" data-bs-toggle="modal"
                              data-bs-target="#editCategoryModal{{ $lead->id }}">
                           <i class='bx bx-edit bx-sm'></i>
                           </button>
                           <button type="button" class="btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-subscriber-id="{{ $lead->id }}">
                           <i class='bx bx-trash bx-sm'></i>
                           </button>
                        </td>
                     </tr>
                     <!-- Edit Link Modal -->
                     <div class="modal fade" id="editCategoryModal{{ $lead->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <form method="POST" action="{{ route('category.update', ['category' => $lead->id]) }}"
                                 enctype="multipart/form-data">
                                 @csrf
                                 @method('PUT') <!-- Use the PUT method for updating -->
                                 <div class="modal-body">
                                    <!-- Add fields here to update header -->
                                    <div class="mb-3">
                                       <label for="update_website_name" class="form-label">Updated Category Name</label>
                                       <input type="text" class="form-control" id="name"
                                          name="name" required value="{{ $lead->name }}">
                                    </div>
                                    
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     @endforeach
                     @else
                     <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>No Category found.</td>
                        <td></td>
                        <td></td>
                        <td></td>
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
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
               <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" required>
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


@if ($result->count() > 0)
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this Category?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteSubscriberForm" method="POST" action="{{ route('category.destroy', $lead->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endif
@endsection
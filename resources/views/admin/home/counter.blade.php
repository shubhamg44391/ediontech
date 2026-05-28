@extends('layouts.app')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <h5 class="card-header m-0 me-2 pb-3">Home Counter</h5>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            @if(session('success'))
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: '{{ session('success') }}',
                                showConfirmButton: false,
                                timer: 2000 // Set the timer to close the alert after 2 seconds
                            });
                            @endif
                        });
                    </script>
                    <!-- Button trigger modal -->
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                @foreach ($counters as $index => $counter)
                                <tr>
                                    <th scope="row">Serial</th>
                                    <td>{{ $index + 1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Counter Title</th>
                                    <td>{{ $counter->title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Counter Description</th>
                                    <td>{{ $counter->description }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Counter 1</th>
                                    <td>{{ $counter->counter_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Counter Title-1</th>
                                    <td>{{ $counter->counter_title_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Counter -2</th>
                                    <td>{{ $counter->counter_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Counter title-2</th>
                                    <td>{{ $counter->counter_title_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Counter -3</th>
                                    <td>{{ $counter->counter_3 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Counter Title-3</th>
                                    <td>{{ $counter->counter_title_3 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Actions</th>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editLinkModal{{ $counter->id }}">Edit</button>
                                    </td>
                                </tr>
                    
                                <!-- Edit Link Modal -->
                                <div class="modal fade" id="editLinkModal{{ $counter->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('counter.update', ['counter' => $counter->id]) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Use the PUT method for updating -->
                                            
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="update_counter_title" class="form-label">Updated Counter Title</label>
                                                        <input type="text" class="form-control" id="update_counter_title" name="title" required value="{{ $counter->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_counter_subtitle" class="form-label">Updated Counter Description</label>
                                                        <input type="text" class="form-control" id="update_counter_description" name="description" value="{{ $counter->description }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_counter_title_1" class="form-label">Updated Counter 1</label>
                                                        <input type="text" class="form-control" id="update_counter_title_1" name="counter_1" value="{{ $counter->counter_1 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_counter_title_1" class="form-label">Updated Counter Title 1</label>
                                                        <textarea class="form-control" id="update_counter_title_1" name="counter_title_1" rows="3">{{ $counter->counter_title_1 }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_counter_title_2" class="form-label">Updated counter 2</label>
                                                        <input type="text" class="form-control" id="update_counter_title_2" name="counter_2" value="{{ $counter->counter_title_2 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_counter_title_2" class="form-label">Updated Counter Description 2</label>
                                                        <textarea class="form-control" id="update_counter_title_2" name="counter_title_2" rows="3">{{ $counter->counter_title_2 }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_counter_title_3" class="form-label">Updated Counter 3</label>
                                                        <input type="text" class="form-control" id="update_counter_title_3" name="counter_3" value="{{ $counter->counter_title_3 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_counter_title_3" class="form-label">Updated counter Description 3</label>
                                                        <textarea class="form-control" id="update_counter_title_3" name="counter_title_3" rows="3">{{ $counter->counter_title_3 }}</textarea>
                                                    </div>
                                                </div>
                                            
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update Counter</button>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


@endsection

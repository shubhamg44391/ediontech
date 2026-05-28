<!-- resources/views/subscribers/index.blade.php -->

@extends('layouts.app')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <h5 class="card-header m-0 me-2 pb-3">Subscribers List</h5>
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($subscribers->count() > 0)
                            @foreach ($subscribers as $index => $subscriber)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $subscriber->email }}</td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-subscriber-id="{{ $subscriber->id }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
    <tr>
        <td></td>
        <td>No subscribers found.</td>
        <td></td>
        </tr>
@endif
                        </tbody>
                    </table>
                    {{ $subscribers->links('custom-pagination') }}

                </div>
            </div>
        </div>
    </div>

</div>
@if ($subscribers->count() > 0)
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this subscriber?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteSubscriberForm" method="POST" action="{{ route('subscribers.destroy', $subscriber->id) }}">
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

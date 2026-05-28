@extends('layouts.app')
@section('main-content')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row">
      <div class="card">
         <div class="row row-bordered g-0">
            <div class="col-md-10">
               <h4 class="py-3 mb-4">Payment List</h4>
            </div>
            <div class="col-md-2">
               <div class="table-btn-css">
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
               <div style="overflow-x: auto; max-width: 100%;">
    <table class="table" style="min-width: 800px;">
        <thead>
            <tr>
                <th>Serial</th>
                <th>Package Name</th>
                <th>Amount</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>City</th>
                <th>Postal Code</th>
                <th>Country</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @if ($result->count() > 0)
                @foreach ($result as $index => $lead)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $lead->package_name }}</td>
                        <td>{{ $lead->amount }}</td>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->phone }}</td>
                        <td>{{ $lead->city }}</td>
                        <td>{{ $lead->postalCode }}</td>
                        <td>{{ $lead->country }}</td>
                        <td>
                            @if($lead->payment_status=='PAYMENT_SUCCESS')
                                <button type="button" class="btn btn-sm btn-primary">Payment Success</button>
                            @elseif($lead->payment_status=='PAYMENT_PENDING')
                                <button type="button" class="btn btn-sm btn-danger">Payment Pending</button>
                            @else
                                <button type="button" class="btn btn-sm btn-info">No Report</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10" class="text-center">No Data found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
               {{ $result->links('custom-pagination') }}
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   $('#summernote').summernote({
       height: 300,
       minHeight: null,
       maxHeight: null,
       focus: true
   });
   
   
</script>
@endsection
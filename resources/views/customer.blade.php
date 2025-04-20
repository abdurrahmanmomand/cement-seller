@extends('layouts.admin')

@section('main')

  <div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section mt-5" style=" position: relative; z-index: 9999;" >
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div style="width: 100%; display:flex; flex-direction: row; align-items:center">

                <a href="{{ route('show-all.create') }}"><button class="mt-4 mb-4 btn btn-sm btn-primary">Add New Record</button></a>
                <div class="search-bar" style="margin-left:20%;">
                    <form class="search-form d-flex align-items-center" method="POST" action="{{ route('customer-search') }}">
                        @csrf
                      <input type="varchar" name="customer" placeholder="Search" title="Enter search keyword">
                      <button type="submit" name="submit" title="Search"><i class="bi bi-search"></i></button>
                    </form>
                  </div>
            </div>


            <!-- Table with stripped rows -->
            <style>
              .custom-table th, .custom-table td {
                border-left: 2px solid #00bfff;    /* Light Blue - vertical borders */
                border-bottom: 2px solid #90ee90;  /* Light Green - horizontal borders */
                padding: 8px;
                text-align: center;
              }

              .custom-table {
                border-collapse: collapse;
                width: 100%;
              }

              .custom-table thead {
                background-color: #f8f9fa;
              }
            </style>

            <table class="custom-table mb-2">
              <thead>
                <tr>
                  <th>Customer_Name</th>
                  <th>Total_Trucks</th>
                  <th>Recieved_Cash</th>
                  <th>Remaining_Amount</th>


                </tr>
              </thead>
              <tbody>
                @foreach ($allrecords as $record)
                  {{-- @dd($record); --}}
                <tr>
                    <td>{{ $record->customer_name}}</td>
                    <td>{{ $record->total_trucks }}</td>
                    <td>$ {{ $record->total_paid }}</td>
                  <td>$ {{ $record->total_due }}</td>
                </tr>

                @endforeach

                <!-- Add more rows here -->
              </tbody>
            </table>
         {{ $allrecords->links() }}



            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection

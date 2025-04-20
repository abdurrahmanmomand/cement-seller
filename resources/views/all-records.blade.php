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

  <section class="section mt-5" style="width:180%; position: relative; z-index: 9999;" >
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div style="width: 100%; display:flex; flex-direction: row; align-items:center">

                <a href="{{ route('show-all.create') }}"><button class="mt-4 mb-4 btn btn-sm btn-primary">Add New Record</button></a>
                <div class="search-bar" style="margin-left:20%;">
                    <form class="search-form d-flex align-items-center" method="POST" action="{{ route('search') }}">
                        @csrf
                      <input type="varchar" name="query" placeholder="Search" title="Enter search keyword">
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
                  <th>Vendor_Name</th>
                  <th>Customer_Name</th>
                  <th>Customer_Location</th>
                  <th>Trucks NO</th>
                  <th>Tons</th>
                  <th>Price / Ton</th>
                  {{-- <th>Rent / Truck</th> --}}
                  <th>Rent / Ton</th>
                  <th>Tax / Ton</th>
                  <th>Total Price / Ton</th>
                  <th>Selling Price / Ton</th>
                  <th>Profit / Ton</th>
                  <th>Profit / Truck</th>
                  <th>Cash Received</th>
                  <th>Remaining Amount</th>
                  <th>Created_At</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($allrecords as $record)
                  {{-- @dd($record); --}}
                <tr>
                    <td>{{ $record->vendor_name }}</td>
                    <td>{{ $record->customer_name }}</td>
                    <td>{{ $record->customer_location }}</td>
                  <td>{{ $record->truck_number }}</td>
                  <td>{{ $record->tuns_in_a_truck }}</td>
                  <td>{{ $record->price_per_tun }}</td>
                  {{-- <td>{{ $record->rent_per_truck }}</td> --}}
                  <td>{{ $record->rent_per_tun }}</td>
                  <td>{{ $record->tax_per_tun }}</td>
                  <td>{{ round($record->price_per_tun + $record->rent_per_tun + $record->tax_per_tun, 3) }}</td>
                  <td>{{ round($record->price_per_tun + $record->rent_per_tun + $record->tax_per_tun+ $record->profit_per_ton,3) }}</td>
                  <td>{{ $record->profit_per_ton }}</td>
                  <td>{{ round( $record->tuns_in_a_truck* $record->profit_per_ton, 3) }}</td>
                  <td>{{ $record->recieved_amount_from_customer }}</td>
                  <td>{{ $record->remaining_amount_to_customer }}</td>
                  <td>{{ $record->created_at->format('Y-m-d') }}</td>
                  <td><a href="{{ route('show-all.edit',$record->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                  <td><form action="{{ route('show-all.destroy', $record->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">
                        Delete
                    </button>
                </form>
                </td>
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

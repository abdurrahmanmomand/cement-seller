@extends('layouts.admin')

@section('main')

  <div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section" style="width:120%;" >
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datatables</h5>
            

            <!-- Table with stripped rows -->
            <style>
              .custom-table th, .custom-table td {
                border-left: 2px solid #00bfff;  /* Light Blue - vertical borders */
                border-bottom: 2px solid #90ee90; /* Light Green - horizontal borders */
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
            
            <table class="custom-table">
              <thead>
                <tr>
                  <th><b>Trucks NO</b></th>
                  <th>Rent/Truck</th>
                  <th>Tons</th>
                  <th>Rent / Ton</th>
                  <th>Price</th>
                  <th>Tax</th>
                  <th>Total Price</th>
                  <th>Selling Price</th>
                  <th>Profit / Tun</th>
                  <th>Profit / Truck</th>
                  <th>Cash Received</th>
                  <th>Remaining Amount</th>
                  <th>Created At</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Unity Pugh</td><td>9958</td><td>Curicó</td><td>2005/02/11</td><td>37%</td><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td>
                </tr>
                <tr>
                  <td>Kelly Cameron</td><td>4836</td><td>Fontaine-Valmont</td><td>1999/02/07</td><td>24%</td><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td>
                </tr>
                <!-- Add more rows here -->
              </tbody>
            </table>
            
            
            
            
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection

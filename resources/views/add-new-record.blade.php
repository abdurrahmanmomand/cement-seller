@extends('layouts.admin')

@section('main')
<div class="pagetitle">
  <h1>Form Layouts</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Layouts</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">


      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Multi Columns Form</h5>

          <!-- Multi Columns Form -->
          <form action="{{ route('show-all.store') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-3">
              <label  class="form-label">Vendor Name</label>
              <input type="text" name="vendor_name" class="form-control">
            </div>
            <div class="col-md-3">
              <label  class="form-label">Truck Number</label>
              <input type="varchar" name="truck_number" class="form-control">
            </div>
            <div class="col-md-3">
              <label  class="form-label"> Tuns </label>
              <input type="number" name="tuns_in_a_truck" class="form-control">
            </div>
            <div class="col-md-3">
              <label  class="form-label"> Price Per Ton </label>
              <input type="number" name="price_per_tun" class="form-control" placeholder="$">
            </div>
            <div class="col-md-3 my-5">
              <label  class="form-label"> Profit Per Tun </label>
              <input type="number" name="profit_per_ton" class="form-control" placeholder="$">
            </div>
            <div class="col-md-3 my-5">
              <label  class="form-label"> Cash Paid To Vender </label>
              <input type="number" name="amount_paid_to_vendor" class="form-control" placeholder="$">
            </div>
            <div class="col-md-3 my-5">
              <label  class="form-label"> Customer Name </label>
              <input type="text" name="customer_name" class="form-control">
            </div>
            <div class="col-md-3 my-5">
              <label  class="form-label"> Rent Per Truck </label>
              <input type="number" name="rent_per_truck" class="form-control" placeholder="$" >
            </div>
            <div class="col-md-4">
              <label  class="form-label"> Tax Per Truck </label>
              <input type="number" name="tax_per_truck" class="form-control" placeholder="$">
            </div>
            <div class="col-md-4">
              <label  class="form-label"> Customer Location </label>
              <input type="address" name="customer_location" class="form-control">
            </div>
            <div class="col-md-4">
              <label  class="form-label"> Cash Recieved From Customer </label>
              <input type="number" name="recieved_amount_from_customer" class="form-control" placeholder="$">
            </div>

                <input style="width:7rem; display:block; margin:auto;"class="mt-4 btn btn-primary btn-sm" type="submit" name="submit">
          </form><!-- End Multi Columns Form -->

        </div>
      </div>

    </div>


  </div>
</section>
@endsection

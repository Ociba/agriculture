<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('layouts.stylecss')
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice mr-3">
    <!-- title row -->
    <div class="row m-2">
      <div class="col-12">
      @foreach($display_permits as $permit)
          <h3 class="text-center text-justify">This permit serves as Evidence that the Product is approved by the responsible person under Ministry of Agriculture</h3>
          <h2 class="page-header row invoice-info">
          <div class="col-4 invoice-col">
            <i class="fa fa-leaf"></i> Permit.
          </div>
          <div class="col-4 invoice-col">
            <img src="{{asset('assets/images/arms.png')}}" style="width:60px" height="30px" alt="">
          </div>
          <div class="col-4 invoice-col">
            {{$permit->created_at}}
          </div>
          </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row m-2 invoice-info">
      <div class="col-4 invoice-col">
      <strong>From</strong>
        <address>
        <strong>{{$permit->sellers_name}}</strong><br>
        <strong>District:</strong>{{$permit->district}}<br>
        <strong>ID No:</strong> {{$permit->sellers_ID}}<br>
        <strong>Phone:</strong> {{$permit->contact}}<br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-4 invoice-col">
      <strong>To</strong>
        <address>
        <strong>{{$permit->buyers_name}}</strong><br>
        <strong>District:</strong> {{$permit->to_destination}}<br>
        <strong>ID No:</strong> {{$permit->buyer_ID}}<br>
        <strong>Phone:</strong> {{$permit->buyers_contact}}<br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-4 invoice-col">
        <b>Invoice <span style="color:red;">{{$permit->receipt_number}}</span></b><br>
        <br>
        <b>Item No.:</b> {{$permit->Number_of_items}}<br>
          <b>Item:</b> <img src="{{asset('images/profile_pictures/'.$permit->item_image)}}" style="width:60px" height="30px" alt=""><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row m-2">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Qty</th>
            <th>Product</th>
            <th>Number</th>
            <th>Description</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>{{$permit->product}}</td>
              <td>{{$permit->Number_of_items}}</td>
              <td>{{$permit->description}}</td>
              <td>cleared</td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row m-2">
      <!-- accepted payments column -->
      <div class="col-6">
      <p class="lead"><strong>Local Council:</strong></p>
          <p><strong>Name of LC1:</strong> {{$permit->local_council_one_name}}</p>
          <p><strong>Phone Number:</strong> {{$permit->phone_number}}</p>
          <p><strong>Stamp:</strong></p>
          <p><strong>Date & sign:</strong></p>
      </div>
      <!-- /.col -->
      <div class="col-6">
      <p class="lead"><strong>{{auth()->user()->getUsersRole()}}</strong></p>
          <p><strong>Officers'Name:</strong> {{$permit->name}}</p>
          <p><strong>Phone Number:</strong> {{$permit->contact}}</p>
          <p><strong>Stamp:</strong></p>
          <p><strong>Date & sign:</strong></p>
        </div>
      </div>
      <!-- /.col -->
    </div>
    @endforeach
    <div class="row m-2">
      <div class="col-2 invoice-col"></div>
      <div class="col-8 invoice-col">
      <button type="button" class="btn btn-warning offset-2">
              <i class="fa fa-warning" style="color:red; text-align:center;"></i> Note:&nbsp;This Permit is Valid with original Stamp and sign from responsible person
        </button><br></br>
        <span class="text-center font-weight-bold offset-4" style="font-style: italic;"><i class="fa fa-registered"></i> {{ date('Y') }} {{auth()->user()->getUsersRole()}}</span>
      </div>
      <div class="col-2 invoice-col"></div>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 13:15:58 GMT -->
</html>
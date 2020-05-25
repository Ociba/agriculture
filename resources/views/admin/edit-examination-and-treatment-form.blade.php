<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.stylecss')
  <title>Uganda | Agriculture system</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
  @include('layouts.topnavbar')
 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @include('layouts.sidebartoptext')

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Breadcrumbs -->
    @include('layouts.breadcrumb')
    <!-- /.Breadcrumbs -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        
        <!-- /.row -->

        

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <section class="content">
        <div class="row">
        @include('layouts.successfulmessage')
            <div class="col-12">
        <div class="card">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Examination and Treatment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($edit_examination_and_treatment as $examine)
              <form class="form-horizontal mt-3" method="post" action="/update-examine-treatment/{{$examine->id}}">
              @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product</label>
                    <div class="col-sm-10">
                    <select class="form-control" style="width: 100%;" name="product" value="{{$examine->product}}" required>
                    <option value="">Select Product</option>
                    @foreach($product as $pick_from_products_table)
                    <option selected="selected" value="{{$pick_from_products_table->id}}">{{ $pick_from_products_table->product }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sign and Symptom</label>
                    <div class="col-sm-10">
                    <select class="form-control" style="width: 100%;" name="signs_symptoms" value="{{$examine->signs_symptoms}}" required>
                    <option value="">Select Sign and Symptom</option>
                    @foreach($get_signs_symptomss as $pick_from_signs_table)
                    <option selected="selected" value="{{$pick_from_signs_table->id}}">{{ $pick_from_signs_table->signs_symptoms }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Disease</label>
                    <div class="col-sm-10">
                    <select class="form-control" style="width: 100%;" name="disease_name" value="{{$examine->disease_name}}" required>
                    <option value="">Select Disease</option>
                    @foreach($get_diseasess as $pick_from_disease_table)
                    <option selected="selected" value="{{$pick_from_disease_table->id}}">{{ $pick_from_disease_table->disease_name }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Drug</label>
                    <div class="col-sm-10">
                    <select class="form-control" style="width: 100%;" name="drug_name" value="{{$examine->drug_name}}" required>
                    <option value="">Select Drug</option>
                    @foreach($get_drugg as $pick_from_drug_table)
                    <option selected="selected" value="{{$pick_from_drug_table->id}}">{{ $pick_from_drug_table->drug_name }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Week</label>
                    <div class="col-sm-10">
                    <select class="form-control" style="width: 100%;" name="week" value="{{$examine->week}}" required>
                    <option value="">Select Week</option>
                    @foreach($get_weeks as $pick_from_weeks_table)
                    <option selected="selected" value="{{$pick_from_weeks_table->id}}">{{ $pick_from_weeks_table->week }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Month</label>
                    <div class="col-sm-10">
                    <select class="form-control" style="width: 100%;" name="month" value="{{$examine->month}}" required>
                    <option value="">Select Month</option>
                    @foreach($get_months as $pick_from_months_table)
                    <option selected="selected" value="{{$pick_from_months_table->id}}">{{ $pick_from_months_table->month }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Weight</label>
                    <div class="col-sm-10">
                    <select class="form-control" style="width: 100%;" name="weight" value="{{$examine->weight}}" required>
                    <option value="">Select Weight</option>
                    @foreach($get_weights as $pick_from_weights_table)
                    <option selected="selected" value="{{$pick_from_weights_table->id}}">{{ $pick_from_weights_table->weight }} 
                    </option>
                    @endforeach
                   </select>
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Bill</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="bill" value="{{$examine->bill}}" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Deposit</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="deposit" value="{{$examine->deposit}}" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Balance</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="balance" value="{{$examine->balance}}" placeholder="" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="text-center mb-3">
                <a href="/display-examine-treatment"><button type="button" class="btn btn-warning">Back</button></a>
                  <button type="submit" class="btn btn-success ">Save</button>
                </div>
                <!-- /.card-footer -->
              </form>
              @endforeach
            </div>
        </div>
            <!-- /.card -->
            </div>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layouts.javascript')
</body>
</html>

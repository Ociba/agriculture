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
    <section class="content">
        <div class="row">
        @include('layouts.message')
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Create Examination and Treatment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal mt-3" method="post" action="/save-examine-treatment">
              @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product</label>
                    <div class="col-sm-10 col-xs-10 col-lg-10 col-md-10">
                    <input type="text" name="product" list="products" class="form-control" autocomplete="off">
                    <datalist id="products" style="width: 100%;">
                        @foreach($products as $pick_from_product_table)
                        <option selected="selected" value="{{$pick_from_product_table->product}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sign and Symptom</label>
                    <div class="col-sm-10 col-xs-10 col-lg-10 col-md-10">
                    <input type="text" name="signs_symptoms" list="signs_symptoms" class="form-control" autocomplete="off">
                    <datalist id="signs_symptoms" style="width: 100%;">
                        @foreach($get_signs_symptom as $pick_from_signs_symptoms_table)
                        <option selected="selected" value="{{$pick_from_signs_symptoms_table->signs_symptoms}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Disease</label>
                    <div class="col-sm-10 col-xs-10 col-lg-10 col-md-10">
                    <input type="text" name="disease_name" list="disease" class="form-control" autocomplete="off">
                    <datalist id="disease" style="width: 100%;">
                        @foreach($get_diseases as $pick_from_disease_table)
                        <option selected="selected" value="{{$pick_from_disease_table->disease_name}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Drug</label>
                    <div class="col-sm-10 col-xs-10 col-lg-10 col-md-10">
                    <input type="text" name="drug_name" list="drugs" class="form-control" autocomplete="off">
                    <datalist id="drugs" style="width: 100%;">
                        @foreach($get_drugs as $pick_from_drug_table)
                        <option selected="selected" value="{{$pick_from_drug_table->drug_name}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Week</label>
                    <div class="col-sm-10 col-xs-10 col-lg-10 col-md-10">
                    <input type="text" name="week" list="weeks" class="form-control" autocomplete="off">
                    <datalist id="weeks" style="width: 100%;">
                        @foreach($get_week as $pick_from_week_table)
                        <option selected="selected" value="{{$pick_from_week_table->week}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Month</label>
                    <div class="col-sm-10 col-xs-10 col-lg-10 col-md-10">
                    <input type="text" name="month" list="months" class="form-control" autocomplete="off">
                    <datalist id="months" style="width: 100%;">
                        @foreach($get_month as $pick_from_month_table)
                        <option selected="selected" value="{{$pick_from_month_table->month}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Weight</label>
                    <div class="col-sm-10 col-xs-10 col-lg-10 col-md-10">
                    <input type="text" name="weight" list="weights" class="form-control" autocomplete="off">
                    <datalist id="weights" style="width: 100%;">
                        @foreach($get_weight as $pick_from_weight_table)
                        <option selected="selected" value="{{$pick_from_weight_table->weight}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Bill</label>
                    <div class="col-sm-10 col-xs-10 col-lg-10 col-md-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="bill"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Deposit</label>
                    <div class="col-sm-10 col-xs-10 col-lg-10 col-md-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="deposit"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Balance</label>
                    <div class="col-sm-10 col-xs-10 col-lg-10 col-md-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="balance"  placeholder="" required>
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

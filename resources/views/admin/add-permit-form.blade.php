<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.stylecss')
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
        @include('layouts.successfulmessage')
            <div class="col-12">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Create Permit details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal mt-3" method="post" action="/save-print-information" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product</label>
                    <div class="col-sm-10">
                    <input type="text" name="product" list="products" class="form-control" autocomplete="off">
                    <datalist id="products" style="width: 100%;">
                        @foreach($pick_product_details as $pick_from_products_table)
                        <option selected="selected" value="{{$pick_from_products_table->product}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sellers name</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="sellers_name"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">contact</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="contact"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Buyers name</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="buyers_name"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Buyers contact</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="buyers_contact"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sellers id</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="sellers_ID"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Buyers id</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="buyer_ID"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="description"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No. of items</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="Number_of_items"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Lc 1 Name</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="local_council_one_name"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone number</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="phone_number"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">District</label>
                    <div class="col-sm-10">
                    <input type="text" name="district" list="district" class="form-control" autocomplete="off">
                    <datalist id="district" style="width: 100%;">
                        @foreach($get_district as $pick_from_district)
                        <option selected="selected" value="{{$pick_from_district->district}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Officers Title</label>
                    <div class="col-sm-10">
                    <input type="text" name="role" list="roles" class="form-control" autocomplete="off">
                    <datalist id="roles" style="width: 100%;">
                        @foreach($get_role as $pick_from_role)
                        <option selected="selected" value="{{$pick_from_role->role}}"></option>
                        @endforeach
                    </datalist>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">To District</label>
                    <div class="col-sm-10">
                    <input type="text" selected="selected" class="form-control" id="inputEmail3" name="to_destination"  placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Upload Image</label>
                    <div class="col-sm-10">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                            <span class="btn btn-theme02 btn-file">
                            <span class="fileupload-new btn btn-success"><i class="fa fa-paperclip"></i> Select image</span>
                            <span class="fileupload-exists btn-purple"><i class="fa fa-undo"></i> Change</span>
                            <input type="file" class="default" name="item_image" accept=".png, .jpg, jpeg"/>
                            </span>
                            
                    </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="text-center mb-3">
                <a href="/display-permit"><button type="button" class="btn btn-warning">Back</button></a>
                  <button type="submit" class="btn btn-success ">Save</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
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

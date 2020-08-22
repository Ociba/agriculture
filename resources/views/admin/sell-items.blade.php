<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @include('layouts.stylecss')
        <link rel="stylesheet" href="{{asset('css/buttons.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/select.dataTables.min.css')}}">
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
                @include('layouts.errormessage')
                @include('layouts.message')
                <section class="content" id="file-export">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">

                                    <h4 class="card-title pull-right">
                                    <a href="/make-payment" button type="button" class="btn btn-warning">Make payment</button></a>
                                        <a href="/display-sell-item-form" button type="button" class="btn btn-primary">Add Item Details</button></a>
                                    </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap table-responsive">
                                        <table class="table table-bordered table-hover file-export">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Breed</th>
                                                    <th>Weight</th>
                                                    <th>Ditrict</th>
                                                    <th>Category</th>
                                                    <th>Price(Shs)</th>
                                                    <th>Number</th>
                                                    @if(in_array('Can see item action', auth()->user()->getUserPermisions()))
                                                    <th>Action</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($display_all_items_to_sell as $index =>$items)
                                                <tr>
                                                    <td>{{ $items->product }}</td>
                                                    <td><img src="{{asset('items/images/'.$items->item_image)}}" class="thumbnail responsive" height="30" width="60" alt=""></td>
                                                    <td>{{ $items->name }}</td>
                                                    <td>{{ $items->breed }}</td>
                                                    <td>{{ $items->weight }}</td>
                                                    <td>{{ $items->district }}</td>
                                                    <td>{{ $items->category }}</td>
                                                    <td>{{ number_format($items->price) }}</td>
                                                    <td>{{ $items->number }}</td>
                                                    <td>
                                                        @if(auth()->user()->id == $items->user_id)
                                                        <a href="/edit-sell-item-form/{{ $items->id }}" data-widget="edit" data-toggle="tooltip" title="edit">
                                                        <span style="color:blue;"><i class="fa fa-edit"></i></span></a>
                                                        <a href="/delete-item/{{ $items->id }}" data-widget="deny" data-toggle="tooltip" title="delete">
                                                        <span style="color:red;"><i class="fa fa-trash"></i></span></a><br>
                                                        <a href="/view-conscent-form/{{ $items->id }}" data-widget="view conscent" data-toggle="tooltip" title="write conscent">
                                                        <span style="color:orange;"><i class="fa fa-plus-circle"></i></span></a>
                                                        @endif
                                                        <a href="/view-conscent/{{ $items->id }}" data-widget="view conscent" data-toggle="tooltip" title="view conscent and Doctors Report">
                                                        <span style="color:green;"><i class="fa fa-eye"></i></span></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
        <script src="{{asset('plugins/datatables/datatable-advanced.min.js')}}"></script>
        <!-- BEGIN: Page Vendor JS-->
        <script src="{{asset('plugins/datatables/datatables.min.js')}}"></script>
        <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('plugins/datatables-buttons/js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{asset('plugins/pdfmake/pdfmake.js.map')}}"></script>
        <script src="{{asset('plugins/pdfmake/pdfmake.min.js.map')}}"></script>
        <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/footer.min.js')}}"></script>
    </body>
</html>
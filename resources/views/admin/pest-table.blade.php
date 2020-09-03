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
                <section class="content" id="file-export">
                    <div class="row m-2">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title pull-right">
                                        @if(in_array('Can add pest', auth()->user()->getUserPermisions()))
                                        <a href="/add-pest-form" button type="button" class="btn btn-primary">Add Pest</button></a>
                                        @endif
                                    </h4>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
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
                                                    <th>Pest</th>
                                                    @if(in_array('Can see pest created by', auth()->user()->getUserPermisions()))
                                                    <th>Created By</th>
                                                    @endif
                                                    @if(in_array('Can see pest action', auth()->user()->getUserPermisions()))
                                                    <th>Action</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($display_pests as $index =>$pest)
                                                <tr>
                                                    <td>{{ $pest->pest }}</td>
                                                    @if(in_array('Can see pest created by name', auth()->user()->getUserPermisions()))
                                                    <td>{{ $pest->name }}</td>
                                                    @endif
                                                    @if(in_array('Can edit pest', auth()->user()->getUserPermisions()))
                                                    <td>
                                                        <a href="/edit-pest-form/{{ $pest->id }}" data-widget="edit" data-toggle="tooltip" title="edit">
                                                        <span class="btn btn-success btn-xs"><i class="fa fa-edit"></i></span></a>
                                                        @endif
                                                        @if(in_array('Can delete pest', auth()->user()->getUserPermisions()))
                                                        <a href="/delete-pest/{{ $pest->id }}" data-widget="deny" data-toggle="tooltip" title="delete">
                                                        <span class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></span></a>
                                                    </td>
                                                    @endif
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @include('layouts.stylecss')
        <link rel="stylesheet" href="{{asset('css/buttons.bootstrap4.min.css')}}">
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
                <!-- File export table -->
                <section id="file-export">
                    <div class="row m-2">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title pull-right">
                                        @if(in_array('Can add profile', auth()->user()->getUserPermisions()))
                                        <a href="/display-profile-form" button type="button" class="btn btn-primary">Add Image</button></a>
                                        @endif
                                    </h4>
                                </div>
                             </div>   
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title pull-right">
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
                                                    <th>Image</th>
                                                    @if(in_array('Can see profile created by', auth()->user()->getUserPermisions()))
                                                    <th>Created By</th>
                                                    @endif
                                                    @if(in_array('Can see profile action', auth()->user()->getUserPermisions()))
                                                    <th>Action</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($show_all_profiles as $index =>$profiles)
                                                <tr>
                                                    <td>
                                                        <a target="_blank" href="{{asset('images/profile_pictures/'.$profiles->image)}}" style="width:200px" height="100px" alt="">
                                                        <img src="{{asset('images/profile_pictures/'.$profiles->image)}}" style="width:60px" height="30px" alt="">
                                                        </a>
                                                    </td>
                                                    @if(in_array('Can see profile createdby name', auth()->user()->getUserPermisions()))
                                                    <td>{{ $profiles->name }}</td>
                                                    @endif
                                                    @if(in_array('Can edit profile', auth()->user()->getUserPermisions()))
                                                    <td>
                                                        <a href="/change-profile-form" data-widget="edit" data-toggle="tooltip" title="edit">
                                                        <span class="btn btn-success btn-sm"><i class="fa fa-edit"></i></span></a>
                                                        @endif
                                                        @if(in_array('Can delete profile', auth()->user()->getUserPermisions()))
                                                        <a href="/delete-profile/{{ $profiles->id }}" data-widget="deny" data-toggle="tooltip" title="delete">
                                                        <span class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></span></a>
                                                    </td>
                                                    @endif
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- File export table -->
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
        <!-- END: Page Vendor JS-->
</body>
</html>
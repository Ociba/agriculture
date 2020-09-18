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
                <section>
                    <div class="row m-2">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title pull-right">
                                        @if(in_array('Can add profile', auth()->user()->getUserPermisions()))
                                        <a href="/display-profile-form" button type="button" class="btn btn-primary">Change Profile Image</button></a>
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
                                                        <img src="{{asset('images/profile_pictures/'.$profiles->image)}}" class="responsive" width="60" height="30" alt="">
                                                        </a>
                                                    </td>
                                                    @if(in_array('Can see profile createdby name', auth()->user()->getUserPermisions()))
                                                    <td>{{ $profiles->name }}</td>
                                                    @endif
                                                    @if(in_array('Can edit profile', auth()->user()->getUserPermisions()))
                                                    <td>
                                                        <a href="/change-profile-form" data-widget="edit" data-toggle="tooltip" title="edit profile">
                                                        <span class="btn btn-success btn-xs">edit</span></a>
                                                        @endif
                                                        @if(in_array('Can delete profile', auth()->user()->getUserPermisions()))
                                                        <a href="/delete-profile/{{ $profiles->id }}" data-widget="deny" data-toggle="tooltip" title="delete image">
                                                        <span class="btn btn-danger btn-xs">delete</span></a>
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
        
</body>
</html>
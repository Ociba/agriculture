<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        @include('layouts.stylecss')
   </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            @include('layouts.topnavbar')
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            @include('layouts.sidebartoptext')

            <!-- Sidebar -->
            @include('layouts.sidebar')
            <!-- /.sidebar -->
            </aside>
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @include('layouts.breadcrumb')
                @include('layouts.message')
                <section class="content">
                    <div class="row m-2">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="row m-2">
                               {{-- @include('layouts.errorsmgs')--}}
                            </div>
                        <section class="content">
                            <div class="row m-2">
                            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
        <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title" style="color:blue;">Selected Role</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        @foreach($get_selected_role as $role)
        <h2 style="text-transform:capitalize">{{$role->role}}</h2>
        @endforeach
        <a href="/roles">
        <li class="fa fa-arrow-left"> <span style="color:blue;">back</span></li>
        </a>
        </div>
        </div> 
        <!-- /.col -->
        </div>
                                <!-- /.col -->
        <div class="col-lg-8 col-md-8 col-xs-8 col-sm-8">
        <div class="box">
        <div class="box-header with-border">
        <h3 class="box-title" style="color:blue;">Permissions
        <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 pull-right">
        <a href="/checkbox_permissions/{{request()->route()->id}}" button type="text" name="permission" class="form-control  btn btn-primary">
        <li class="fa fa-plus"> Permissions</li>
        </button>
        </a>
        </div>
        </h3>
        </div>
        <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
        <tr>
        <th>Number</th>
        <th>Permission(s)</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if ($get_all_permissions->currentPage() > 1)
        @php($i =  1 + (($get_all_permissions->currentPage() - 1) * $get_all_permissions->perPage()))
        @else
        @php($i = 1)
        @endif
        @foreach ($get_all_permissions as $permission)
        <tr>
        <td>{{ $i++ }}</td>
        <td>{{$permission->permission}}</td>
        <td>
        <a href="/unsign-permission/{{$permission->id}}" button type="submit" class="btn btn-primary"><span class="text-white">Remove</span></button></a>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        <div class="row m-2">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="col-lg-8 col-md-8 col-xs-8 col-sm-8">
        @if(isset($search_query))
        {{ $get_all_permissions->appends(['name' => $search_query])->links() }}
        @else
        {{ $get_all_permissions->links() }}
        @endif
        </div>
        </div>
        </div>
        </div>
        <!-- /.box-body -->
        </div>
                                </div>
                               </div>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            </div>
            <!-- /.content-wrapper -->
            @include('layouts.footer')
            <!-- Control Sidebar -->
        </div>
        <!-- ./wrapper -->
        @include('layouts.javascript')
    </body>
</html>
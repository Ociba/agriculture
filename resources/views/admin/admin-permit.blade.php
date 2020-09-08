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
                            {{--
                                <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title pull-right">
                                    @if(in_array('Can add vet reports', auth()->user()->getUserPermisions()))
                                    <a href="/display-doctor-reports-form" button type="button" class="btn btn-primary">Add Vet Report</button></a>
                                    @endif
                                    </h4>
                                </div>
                            </div>
                            --}}
                            <div class="card">
                            <span class="text-primary m-2">Note: View Permit Details By Clicking Permit Number</span>
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
                                                <th>Permit No.</th>
                                                <th>Product</th>
                                                <th>Photo</th>
                                                <th>Farmer</th>
                                                <th>contact</th>
                                                <th>District</th>
                                                <th>SellersID</th>
                                                <th>BuyersName</th>
                                                <th>Contact</th>
                                                <th>BuyersID</th>
                                                <th>District</th>
                                                <th>Number</th>
                                                <th>LC1</th>
                                                <th>Contact</th>
                                                <th>DoctorsName</th>
                                                <th>Contact</th>
                                                <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($display_permits as $reports)
                                                <tr>
                                                    <td class="font-weight-bold"><a href="/view-permit/{{$reports->id}}">{{$reports->receipt_number}}</a></td>
                                                    <td>{{ $reports->product }}</td>
                                                    <td><img src="{{asset('images/profile_pictures/'.$reports->item_image)}}" class="thumbnail responsive" width="60" height="30" alt=""></td>
                                                    <td>{{ $reports->sellers_name }}</td>
                                                    <td>{{ $reports->contact }}</td>
                                                    <td>{{ $reports->district }}</td>
                                                    <td>{{ $reports->sellers_ID }}</td>
                                                    <td>{{ $reports->buyers_name }}</td>
                                                    <td>{{ $reports->buyers_contact }}</td>
                                                    <td>{{ $reports->buyer_ID }}</td>
                                                    <td>{{ $reports->to_destination }}</td>
                                                    <td>{{ $reports->Number_of_items }}</td>
                                                    <td>{{ $reports->local_council_one_name	}}</td>
                                                    <td>{{ $reports->phone_number }}</td>
                                                    <td>{{ $reports->name }}</td>
                                                    <td>{{ $reports->contact }}</td>
                                                    <td>{{ date('F d, Y', strtotime($reports->created_at)) }}</td>
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








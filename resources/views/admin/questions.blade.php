<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @include('layouts.stylecss')
        <link rel="stylesheet" href="{{asset('css/buttons.bootstrap4.min.css')}}">
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
                <section  id="file-export">
                    <div class="row m-2">
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                           <div class="card">
                                <div class="card-header">
                                   <h4 class="card-title pull-right">
                                   @if(in_array('Can add question', auth()->user()->getUserPermisions()))
                                    <a href="/display-question-form" button type="button" class="btn btn-primary">Add FAQ</button></a>
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
                                                <th>Question</th>
                                                <th>Reply</th>
                                                <th>Created By</th>
                                                @if(in_array('Can see question action', auth()->user()->getUserPermisions()))
                                                <th style="padding:30px;">Action</th>
                                                @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($display_frequently_asked_questions as $index =>$question)
                                              <tr>
                                                  <td>{{ $question->question }}</td>
                                                  <td>{{ $question->reply }}</td>
                                                  <td>{{ $question->name }}</td>
                                                  <td>
                                                  @if(in_array('Can edit question', auth()->user()->getUserPermisions()))
                                                  <a href="/display-edit-question/{{ $question->id }}" data-widget="edit" data-toggle="tooltip" title="edit question">
                                                  <span class="btn btn-success btn-xs">edit</span></a>
                                                  @endif
                                                  @if(in_array('Can reply question', auth()->user()->getUserPermisions()))
                                                  <a href="/reply-question/{{ $question->id }}" data-widget="reply" data-toggle="tooltip" title="reply question">
                                                  <span class="btn btn-primary btn-xs">reply</span></a><br>
                                                  @endif
                                                  @if(in_array('Can delete question', auth()->user()->getUserPermisions()))
                                                  <a href="/delete-question/{{ $question->id }}" data-widget="deny" data-toggle="tooltip" title="delete question">
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



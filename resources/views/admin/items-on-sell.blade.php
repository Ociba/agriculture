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

                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body pb-0">
                    <div class="row d-flex align-items-stretch">
                    @if ($display_all_items_to_be_bought->currentPage() > 1)
                    @php($i =  1 + (($display_all_items_to_be_bought->currentPage() - 1) * $display_all_items_to_be_bought->perPage()))
                    @else
                    @php($i = 1)
                    @endif
                    @foreach($display_all_items_to_be_bought as $items_to_be_bought)
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                            <b>{{$items_to_be_bought->product}}</b><span style="color:blue;"> UGX: {{ $items_to_be_bought->price}}</span>
                            </div>
                            <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                <h2 class="lead"><b>{{$items_to_be_bought->name}}</b></h2>
                                <p class="text-muted text-sm"><b>Category:</b> {{$items_to_be_bought->category}} </p>
                                <p class="small"><span class="fa-li"></span> <b>District:</b> {{$items_to_be_bought->district}}</p>
                                <p class="small"><span class="fa-li"></span> <b>Phone No:</b> {{$items_to_be_bought->contact}}</p>
                                </div>
                                <div class="col-5 text-center">
                                <img src="{{asset('items/images/'.$items_to_be_bought->item_image)}}" width="60" height="30" alt="" class="img-square thumbnail responsive">
                                </div>
                            </div>
                            </div>
                            <div class="card-footer">
                            <div class="text-right">
                                <a href="/send-message/{{$items_to_be_bought->id}}" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i> Send Message
                                </a>
                                <a href="/buyer-view_conscent/{{$items_to_be_bought->id}}" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i> View Conscent
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    @if(isset($search_query))
                    {{ $display_all_items_to_be_bought->appends(['name' => $search_query])->links() }}
                    @else
                    {{ $display_all_items_to_be_bought->links() }}
                    @endif
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->

                </section>
                <!-- /.content -->
            </div>
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
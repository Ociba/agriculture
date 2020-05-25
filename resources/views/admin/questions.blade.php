<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.stylecss')
  <title>Uganda| Agriculture system</title>
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
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
    <div class="card">
            <div class="card-header">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
            
            </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                @if(in_array('Can search question', auth()->user()->getUserPermisions()))
                <form action="/search-question" method="get">
                        <div class="input-group ">
                          <input class="form-control"  selected="selected" placeholder="Search By question" name="question" id="srch-term" aria-label="Search" required>
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                </form>
                @endif
               </div>
               <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
               @if(in_array('Can add question', auth()->user()->getUserPermisions()))
               <a href="/display-question-form" button type="button" class="btn btn-primary">Add FAQ</button></a>
               @endif
            </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive no-padding">
              <table  class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Question</th>
                  <th>Created By</th>
                  @if(in_array('Can see question action', auth()->user()->getUserPermisions()))
                  <th>Action</th>
                  @endif
                </tr>
                </thead>
                <tbody>
                @if ($display_frequently_asked_questions->currentPage() > 1)
                      @php($i =  1 + (($display_frequently_asked_questions->currentPage() - 1) * $display_frequently_asked_questions->perPage()))
                      @else
                      @php($i = 1)
                      @endif
              @foreach ($display_frequently_asked_questions as $index =>$question)
                  <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $question->question }}</td>
                      <td>{{ $question->name }}</td>
                      <td>
                      @if(in_array('Can edit question', auth()->user()->getUserPermisions()))
                      <a href="/display-edit-question/{{ $question->id }}" data-widget="edit" data-toggle="tooltip" title="edit">
                      <span style="color:green;"><i class="fa fa-edit"></i></span></a>
                      @endif
                      @if(in_array('Can delete question', auth()->user()->getUserPermisions()))
                      <a href="/delete-question/{{ $question->id }}" data-widget="deny" data-toggle="tooltip" title="delete">
                      <span style="color:red;"><i class="fa fa-trash"></i></span></a>
                           
                      </td>
                      @endif
                  </tr>
                 @endforeach
                </tbody>
              </table>
              <div class="row ml-3">
              @if(isset($search_query))
              {{ $display_frequently_asked_questions->appends(['name' => $search_query])->links() }}
              @else
              {{ $display_frequently_asked_questions->links() }}
              @endif
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
          </div>
          </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  @include('layouts.footer')
</div>
@include('layouts.javascript')
</body>
</html>

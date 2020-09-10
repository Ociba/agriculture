<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" >
            
          </div><!-- /.col -->
          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
          <span style="color:blue;">Hi {{auth()->user()->name}} !!</span>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li  class="breadcrumb-item active">{{\Request::route()->getName()}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
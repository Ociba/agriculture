<div class="row m-0">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon"><i class="fa fa-sitemap"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">No. Items on sale</span>
                <span class="info-box-number text-center">{{ auth()->user()->countItemsOnSale() }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon"><i class="fa fa-user" style="color:yellow;"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Employees</span>
                <span class="info-box-number text-center">{{ auth()->user()->numberOfEmployees() }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon"><i class="fa fa-plus-square" style="color:red;"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Emergency Reports Total</span>
                <span class="info-box-number text-center">{{ auth()->user()->getNumberOfEmergencies() }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon"><i class="fa fa-bank" style="color:green;"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">No. of Markets</span>
                <span class="info-box-number text-center">{{ auth()->user()->getNumberOfMarkets() }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
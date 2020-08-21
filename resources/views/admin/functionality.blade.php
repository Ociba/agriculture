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
    @include('layouts.breadcrumb')
    <section class="content">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
    <div class="box box-primary">
            <!-- /.card-header -->
            <div class="card-body table-responsive no-padding">
            <section class="content">
            <div class="row">
        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
          <a href="/display-documentation" class="btn btn-success btn-block margin-bottom">Menu Functionality</a>

          <div class="box box-solid card pt-2 mb-2 p-2 pl-2">
            <div class="box-header with-border">
              <h5 class="box-title">Table of content</h5>
            </div>
            <div class="box-body">
              <ul class="list-unstyled list-group list-group-unbordered">
                <li class="list-group-item"><a href="/display-login" class="btn-default"><i class="fa fa-user"></i> Registration & Login
                  </a></li>
                <li class="list-group-item"><a href="/display-documentation-dashboard" class="btn-default"><i class="fa fa-envelope-o"></i> Documentation Dashboard
                  <span class="pull-right text-success"></span></a></li>
                <li class="list-group-item"><a href="/display-menu-description" class="btn-default"><i class="fa fa-file-text-o"></i> Menu Description
                   <span class="pull-right text-primary"></span></a></li>
                <li class="list-group-item"><a href="/display-functionality" class="btn-default"><i class="fa fa-filter"></i> Functionality
                 </a>
                </li>
                <li class="list-group-item"><a href="/display-front-pages" class="btn-default"><i class="fa fa-map-o"></i>  Front pages
                <span class="pull-right text-dangers"></span></a></li>
                <li class="list-group-item"><a href="/display-conclusion" class="btn-default"><i class="fa  fa-gg"></i> Conclusion
                <span class="pull-right text-danger"></span></a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class=" card col-lg-9 col-md-9 col-xs-9 col-sm-9 table-responsive no-padding">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-center"><u>Each Menu Functionality</u></h3>
            </div>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding m-4">
            <p class=""><b>Home</b></p>
            <p>User views Summary of Number of items, Number of markets,Average Price for Cereal crops, Animals Vegetables,Poultry, Products, emergency reports, Breeds, and others in pie-chart, Line graph and bar Graph.</p>
            <p class=""><b>Users</b></p>
            <p class=""><b>Profile</b>-System user should add his profile image through clicking add image,He should also see his photo uploaded, This means even the default image on the top side changes to what has been uploaded.</p>
            <p class=""><b>Change Paaword</b>-system user should change his password by entering the current password used for login the system, put the new password he/ she feels like using, confirm it. This should trigger the system to logout then you can now use the new password for login again.</p>
            <p class=""><b>Registered Users</b>-system user should view all the users of the system.This displays all details of users registerd.The authourized user can edit, delete user (s), can search user.This is a point any users' role (s) can be changed to the right one.</p>
            <p class=""><b>Employees</b>-system user should view all employees details, qualifications and experience.Employee is  added by clicking add employee,can be edit and deleted.</p>
            <p class=""><b>Items</b></p>
            <p class=""><b>Products</b>-system user should view product(s),search particular product,authorized users can add product,delete,and edit product</p>
            <p class=""><b>Breeds</b>-system user should view types of breed(s), Search breed,Authorized users can delete breed,edit breed or add breed to the system.</p>
            <p class=""><b>Categories</b>system user should view All categories, search category, Authorized user(s) can add category, delete and edit any category.</p>
            <p class=""><b>Feeds</b>-system user should view types of common feeds, search feed, Authorized user(s) can delete,add feed and edit feeds.</p>
            <p class=""><b>Sell & Buy</b></p>
            <p class=""><b>Market items</b>-system user should view this interface,should search item,should add item he/she wants to sell,view conscent ,Authorized users can view conscent,write conscent, edit item details,and can delete item.</p>
            <p class=""><b>Doctors Request Form</b>-system user should view doctors request form, this form entails what user should fill when requesting qualified veterenary doctor to treat his/her animal (s).</p>
            <p class=""><b>Market prices</b>-system user should view prices in the markets.Authorized user(s) can edit, delete, and add price details.</p>
            <p class=""><b>Permit Form</b>-system user view form that entails all the details needed in the permit.Authorized user can enter the right details of animal(s) to be sold or transported to other places.</p>
            <p class=""><b>Permit</b>-system user should view the permit details entered by the authorized person, it is only the authorized user who can print the Permit.</p>
            <p class=""><b>Veterenary Services</b></p>
            <p class=""><b>Signs & Symptoms</b>-system should view the signs and symptoms of common diseases which attack farming.Authorized user (s) can add signs and symptoms, delete and edits signs and symptoms.</p>
            <p class=""><b>Diseses</b>-System user should view the diseases that commonly attack farming,should search disease, authorized user(s) can add disease, delete and edit disease.</p>
            <p class=""><b>Pests</b>-system user should view the pest that commonly affect farming, should search pest, authorized user can add pest, edit and delete pest.</p>
            <p class=""><b>Examination & treatment</b>-system user should view Examinanation and treatment for item (s) treated by recognized vetenary doctor, search treatment, authorized user can add treatment and examination details, can delete and can edit. </p>
            <p class=""><b>Period</b></p>
            <p class=""><b>Month</b>-system user should view month, search month, These is list of months in a year, authorized user can add month, edit month and deletes month.</p>
            <p class=""><b>Week</b>-system user should view weeks, search week, These is list of weeks in a month, authorized user can add week, edit week and deletes week.</p>
            <p class=""><b>Day</b>-system user should view day, search day, These is list of days in a week, authorized user can add day, edit day and deletes day.</p>
            <p class=""><b>Location</b></p>
            <p class=""><b>Districts</b>-system user should view districts in Uganda, search districts,authorized user can add district, edit district and delete district.</p>
            <p class=""><b>Counties</b>-system user should view Counties in Uganda, search county,authorized user can add county, edit county and delete County.</p>
            <p class=""><b>Subcounties</b>-system user should view subcounties in Uganda, search subcounties,authorized user can add subcounties, edit subcounties and delete subcounties.</p>
            <p class=""><b>Weight</b></p>
            <p class=""><b></b>-System user should view weights. These weights are arranged in fives or group of five kilograms, uses should search weight, authorized user can add weight, coan edit weight and can delete weight.</p>
            <p class=""><b>Reports</b></p>
            <p class=""><b>Emergency Reports</b>-system user should view emergency reports, search reports, These reports are disasters that affects farming in various places, authorized user can add report, can edit report and can delete report.</p>
            <p class=""><b>Doctors Report</b>-system user should view doctors report, search doctors report, This report is report given by veterenary doctor(s) for the times he/ she treats and examines farmers animals for esy folloe up. Auhtorized user can add report, can edit report and can delete report.</p>
            <p class=""><b>User Accounts</b></p>
            <p class=""><b></b>-Authorized system user view user accounts.This is where access to the system menu is controlled who to view what, who is to do what in the system. Authorized user can add role(s), Can assign permissin, Can delete permission</p>
           
            </div>
          </div>
          <!-- /. box -->
        </div>
            </div>
            </section>
            <!-- /.card-body -->
          </div>
          
          <!-- /.card -->
          </div>
          </div>
          </section>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  @include('layouts.footer')
</div>
@include('layouts.javascript')
</body>
</html>

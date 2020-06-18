<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
       <img src="{{ asset('images/profile_pictures/'.auth()->user()->getLoggedInUserLogo()) }}" alt="User Image" class="iimg-circle elevation-2" style="border-radius:100%; width:55px;height:60px;">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
          <a href="#" class="text-primary">{{auth()->user()->getUsersRole()}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(in_array('Can view dashboard', auth()->user()->getUserPermisions())) 
          <li class="nav-item has-treeview menu-open" @if(\Request::route()->getName() == "home")class="active" @endif>
            <a href="/home-dash" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
               </p>
               </a>
          </li>
         @endif
         @if(in_array('Can view users', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Users 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @if(in_array('Can view profile', auth()->user()->getUserPermisions()))
            <ul class="nav nav-treeview">
              <li class="nav-item" @if(\Request::route()->getName() == "Registered Members")class="active" @endif>
                <a href="/display-profile" class="nav-link">
                  <i class="fa fa-user-circle-o nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
             @endif
             @if(in_array('Can view change password', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview" @if(\Request::route()->getName() == "Change Password")class="active" @endif>
            <a href="/change-passwords" class="nav-link">
              <i class="nav-icon fa fa-lock"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>
          @endif
            @if(in_array('Can view registered users', auth()->user()->getUserPermisions())) 
            <li class="nav-item" @if(\Request::route()->getName() == "Registered Users")class="active" @endif>
                <a href="/all_users" class="nav-link">
                  <i class="far fa-registered nav-icon"></i>
                  <p>Registered Users</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view employees', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Employee")class="active" @endif>
                <a href="/display-employees-details" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Employees</p>
                </a>
              </li>
              @endif
            </ul> 
          </li>
          @endif
          @if(in_array('Can view items', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-object-group"></i>
              <p>
                Items 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @if(in_array('Can view products', auth()->user()->getUserPermisions()))
            <ul class="nav nav-treeview">
            <li class="nav-item" @if(\Request::route()->getName() == "All Products")class="active" @endif>
                <a href="/display-product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view breeds', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Breed")class="active" @endif>
                <a href="/display-breed" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Breeds</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view categories', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Categories")class="active" @endif>
                <a href="/display-categories" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view feeds', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Feeds")class="active" @endif>
                <a href="/display-feed" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Feeds</p>
                </a>
              </li>
              @endif
            </ul> 
          </li>
          @endif
          @if(in_array('Can view sell and buy', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Sell & Buy 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @if(in_array('Can view market items', auth()->user()->getUserPermisions()))
            <ul class="nav nav-treeview">
            <li class="nav-item" @if(\Request::route()->getName() == "View All Savings")class="active" @endif>
            <a href="/display-items-on-sell" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Market Items 
              </p>
            </a>
            </li>
            @endif
            @if(in_array('Can view doctors request form', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "My Savings")class="active" @endif>
            <a href="/display-doctor-req" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Doctors Request Form 
              </p>
            </a>
            </li>
            @endif
            @if(in_array('Can view standard prices', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "My Savings")class="active" @endif>
            <a href="/display-prices" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Market Prices 
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view Permit form', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Permit")class="active" @endif>
            <a href="/display-permit-form" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Permit Permit Form
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view Permit', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Permit")class="active" @endif>
            <a href="/display-permit" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Permit 
              </p>
            </a>
            </li>
           @endif
            </ul>
          </li>
          @endif
          @if(in_array('Can view vetenery services', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Vetenary Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            @if(in_array('Can view signs and symptoms', auth()->user()->getUserPermisions()))
            <ul class="nav nav-treeview">
            <li class="nav-item" @if(\Request::route()->getName() == "Pests")class="active" @endif>
                <a href="/show-signs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Signs & Symptoms</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view veterinary doctors', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Pests")class="active" @endif>
                <a href="/show-veterinary-doctors" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Veterinary Doctors</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view disease', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "View All Loans")class="active" @endif>
                <a href="/display-all-diseases" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diseases</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view pest', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Pests")class="active" @endif>
                <a href="/display-pest-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pests</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view drugs', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Drugs")class="active" @endif>
                <a href="/display-all-drugs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Drugs</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view E & T', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Cleared Loans")class="active" @endif>
                <a href="/display-examine-treatment" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Examination & Treatment</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          @endif
          @if(in_array('Can view period', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa  fa-calendar"></i>
              <p>
                Period
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @if(in_array('Can view months', auth()->user()->getUserPermisions()))
            <ul class="nav nav-treeview">
              <li class="nav-item" @if(\Request::route()->getName() == "Accepted Benefits")class="active" @endif>
                <a href="/display-months" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Months</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view weeks', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Unaccepted Benefit")class="active" @endif>
                <a href="/display-all-weeks" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Weeks</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view Days', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Unaccepted Benefit")class="active" @endif>
                <a href="/display-days" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Days</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          @endif
          @if(in_array('Can view location', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-map-marker"></i>
              <p>
                Location
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @if(in_array('Can view districts', auth()->user()->getUserPermisions()))
            <ul class="nav nav-treeview">
              <li class="nav-item" @if(\Request::route()->getName() == "Accepted Benefits")class="active" @endif>
                <a href="/display-districts" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Districts</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view counties', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Unaccepted Benefit")class="active" @endif>
                <a href="/display-counties" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Counties</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view sub-counties', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Unaccepted Benefit")class="active" @endif>
                <a href="/display-sub-counties" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub counties</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          @endif
          @if(in_array('Can view weight', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview" @if(\Request::route()->getName() == "Weight")class="active" @endif>
            <a href="/display-weight" class="nav-link">
              <i class="nav-icon fa fa-balance-scale"></i>
              <p>
                Weight
                {{--<i class="fas fa-angle-left right"></i>--}}
              </p>
            </a>
          </li>
          @endif
          @if(in_array('Can view reports', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-medkit"></i>
              <p>
               Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @if(in_array('Can view emrgency report', auth()->user()->getUserPermisions()))
            <ul class="nav nav-treeview">
              <li class="nav-item" @if(\Request::route()->getName() == "Emergency Reports")class="active" @endif>
                <a href="/display-emergency-reports" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Emergency Report</p>
                </a>
              </li>
              @endif
              @if(in_array('Can view doctors treatment records', auth()->user()->getUserPermisions()))
              <li class="nav-item" @if(\Request::route()->getName() == "Doctors report")class="active" @endif>
                <a href="/display-doctors-report" class="nav-link">
                  <i class="fa fa-linux nav-icon"></i>
                  <p>Doctors Report</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          @endif
          @if(in_array('Can view user account', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview" @if(\Request::route()->getName() == "User Accounts")class="active" @endif>
            <a href="/roles" class="nav-link">
              <i class="nav-icon fa fa-key"></i>
              <p>
                User Account
              </p>
            </a>
          </li>
          @endif
          {{--
            @if(in_array('Can view register user', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview" @if(\Request::route()->getName() == "Register User")class="active" @endif>
            <a href="/capture-user" class="nav-link">
              <i class="nav-icon fa fa-registered"></i>
              <p>
                Register User
              </p>
            </a>
          </li>
          @endif
           --}}
         
          @if(in_array('Can view front pages', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon fa fa-save"></i>
              <p>
                Front Pages 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @if(in_array('Can view blog details', auth()->user()->getUserPermisions()))
            <ul class="nav nav-treeview">
            <li class="nav-item" @if(\Request::route()->getName() == "Blog Details")class="active" @endif>
            <a href="/display-blog-detail" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Blog Details 
              </p>
            </a>
            </li>
            @endif
            @if(in_array('Can view comments', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Comments ")class="active" @endif>
            <a href="/display-comments-for approval" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Comments
              </p>
            </a>
            </li>
            @endif
            @if(in_array('Can view messages', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Messages")class="active" @endif>
            <a href="/display-messages" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Messages 
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view faq', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Freuently Asked Questions")class="active" @endif>
            <a href="/display-faq-questions" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                FAQ
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view farms', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Farmers")class="active" @endif>
            <a href="/display-farm" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Farms
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view farmers', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Farmers")class="active" @endif>
            <a href="/display-farmers" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Farmers
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view features', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Features")class="active" @endif>
            <a href="/display-feature" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Features
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view feedback', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Feedback")class="active" @endif>
            <a href="/display-feedback" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Feedback
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view gallery', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Gallery")class="active" @endif>
            <a href="/display-gallery" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Gallery
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view market products', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Market Products")class="active" @endif>
            <a href="/display-market-product" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Market Products
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view news', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "News")class="active" @endif>
            <a href="/display-news" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              News
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view others', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Others")class="active" @endif>
            <a href="/display-others" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Others
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view project gallery', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Project Gallery")class="active" @endif>
            <a href="/display-project-gallery" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Project Gallery
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view recent news', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Recent news")class="active" @endif>
            <a href="/display-recent-news" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Recent news
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view reply', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Reply")class="active" @endif>
            <a href="/display-reply" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Reply
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view services', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Services")class="active" @endif>
            <a href="/display-feature_service" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
             Services
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view we do service', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "We do services")class="active" @endif>
            <a href="/display-service-we-do" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              We do services
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view sponsors', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Sponsor")class="active" @endif>
            <a href="/display-sponsor" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Sponsor
              </p>
            </a>
            </li>
           @endif
           @if(in_array('Can view subscription', auth()->user()->getUserPermisions()))
            <li class="nav-item" @if(\Request::route()->getName() == "Subscription")class="active" @endif>
            <a href="/display-subscription" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
              Subscription
              </p>
            </a>
            </li>
           @endif
            </ul>
          </li>
          @endif
          @if(in_array('Can view documentation', auth()->user()->getUserPermisions()))
          <li class="nav-item has-treeview" @if(\Request::route()->getName() == "documentation")class="active" @endif>
            <a href="/display-documentation" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Documentation
                {{--<i class="fas fa-angle-left right"></i>--}}
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
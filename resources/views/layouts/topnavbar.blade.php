<nav class="main-header navbar navbar-expand navbar-blue navbar-light">
    <!-- Left navbar links -->
    
      
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><span style="color:white"><i class="fas fa-bars"></i></span></a>
      </li> 
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      @if(in_array('Can view notification messages', auth()->user()->getUserPermisions()))
      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <span style="color:white;"><i class="far fa-comments"></i></span>
          <span class="badge badge-danger navbar-badge">{{auth()->user()->getNumberOfApprovedFeedback()}}</span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            @foreach(auth()->user()->getFeedBack() as $feedback)
            <div class="media">
              <img src="{{asset('assets/images/'.$feedback->image)}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  {{$feedback->name}}
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">{{ substr($feedback->feedback,0,20)}}....</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>{{ date('g:ia', strtotime($feedback->created_at))}} </p>
              </div>
            </div>
      @endforeach
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="/display-feedback" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      @endif
      <!-- Notifications Dropdown Menu -->
      @if(in_array('Can view notifications', auth()->user()->getUserPermisions()))
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <span style="color:white"><i class="far fa-bell"></i></span>
          <span class="badge badge-success navbar-badge text-white">{{auth()->user()->totalAllNotifications()}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">{{auth()->user()->totalAllNotifications()}} Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="/display-messages" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> {{auth()->user()->getNumberOfMessages()}} new message(s)
            <span class="float-right text-muted text-sm">{{ date('g:ia', strtotime(auth()->user()->timeForMessages()))}}</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="/display-subscription" class="dropdown-item">
            <i class="fa fa-sticky-note-o mr-2" style="color:green;"></i> {{auth()->user()->getNumberOfSubscription()}} subscription(s)
            <span class="float-right text-muted text-sm">{{ date('g:ia', strtotime(auth()->user()->timeForSubscription()))}}</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="display-emergency-reports" class="dropdown-item">
            <i class="fa fa-plus-square mr-2" style="color:red;"></i>{{auth()->user()->getNumberOfEmergencyReports()}} emergncy reports
            <span class="float-right text-muted text-sm">{{ date('g:ia', strtotime(auth()->user()->timeForEmergency()))}}</span>
          </a>
          <div class="dropdown-divider"></div>
          {{--<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
        </div>
      </li>
      @endif
      <!-- Logout Dropdown Menu --> 
      <li class="dropdown user user-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <img src="{{ asset('images/profile_pictures/'.auth()->user()->getLoggedInUserLogo())}}" class="user-image" alt="User Image">
              <span class="hidden-xs text-white">Logout</span>
        </a>
        <ul class="dropdown-menu dropdown-usermenu">
            <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <span style="color:green;">{{ __('Logout') }}</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        </li> 
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><span style="color:white"><i class="fas fa-th-large"></i></span></a>
      </li>
    </ul>
  </nav>
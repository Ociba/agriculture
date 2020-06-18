<section class="project-details-area pt-130">
        <div class="container">
            <div class="">
            <b><h2>Here are some of the farms in Uganda</h2></b>
            </div>
            @foreach($display_farms as $farms)
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="project-details-thumb pb-25">
                        <img src="{{asset('assets/images/'.$farms->image)}}" alt="project">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="project-box mt-30">
                        <div class="project-content">
                            <h3 class="title">{{$farms->activity}}</h3>
                            <p class="justify-center text-justify">{{$farms->statement}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="project-sidebar-box mt-35">
                        <div class="item">
                            <span>Farms Name</span>
                            <p>{{$farms->farm_name}}</p>
                        </div>
                        <div class="item">
                            <span>Activity</span>
                            <p>{{$farms->activity}}</p>
                        </div>
                        <div class="item">
                            <span>District & County</span>
                            <p>{{$farms->district}} &nbsp; {{$farms->county}}</p>
                        </div>
                        <div class="item">
                            <span>Subcounty</span>
                            <p>{{$farms->village}}</p>
                        </div>
                    </div>
                </div>
            </div>
             @endforeach
            
        </div>
    </section>
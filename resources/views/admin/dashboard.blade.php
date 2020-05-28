<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.stylecss')
  <title>Uganda | Agriculture system</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.topnavbar')
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Agriculture System</span>
    </a>

    
    @include('layouts.sidebar')
    
  </aside>

  
  <div class="content-wrapper">
    
    @include('layouts.breadcrumb')
    <section class="content">
    <div class="row">
    <div class="card m-3">
      <div class="container-fluid">
        @include('layouts.cards')
      </div>
      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6" style="background-color:white;">
                            <!-- AREA CHART -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                <h3 class="box-title">Average Price fo Vegetables Per Month</h3> 
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body chart-responsive">
                                    <canvas id="lineChart"></canvas>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                            <!-- DONUT CHART -->
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Average Price for Animals Per Month</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body chart-responsive">
                                <canvas id="barchart" style="height: 300px;"></canvas>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Employees | no. of emergency</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body chart-responsive">
                                <canvas id="piechart" style="height: 300px;"></canvas>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col (LEFT) -->
                        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6" style="background-color:white;">
                            <!-- Bar CHART -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Average Price Of Cereals Per Month</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body chart-responsive">
                                    <canvas id="barChart"></canvas>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                            <!-- BAR CHART -->
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Average Price for Poultry Per Month</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body chart-responsive">
                                    <canvas id="poultry"></canvas>
                                </div>
                            </div>
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Products|Farms|Markets|Sponsors|Breeds</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body chart-responsive">
                                    <canvas id="product"></canvas>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->
@include('layouts.javascript')
<script>
            //Line Graph for Vegetables
             var ctxL = document.getElementById("lineChart").getContext('2d');
            var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
            labels: {!! json_encode(auth()->user()->getVegetablesAveragePricePerMonths()) !!},
            datasets: [{
            label: "Average Vegetable Prices per month",
            data: [{!! auth()->user()->getJanuaryPrices() !!},{!! auth()->user()->getFebrauryPrices() !!},{!! auth()->user()->getMarchPrices() !!},
            {!! auth()->user()->getAprilPrices() !!},{!! auth()->user()->getMayPrices() !!},{!! auth()->user()->getJunePrices() !!},
            {!! auth()->user()->getJulyPrices() !!},{!! auth()->user()->getAugustPrices() !!}
        ,{!! auth()->user()->getSeptemberPrices() !!},{!! auth()->user()->getOctoberPrices() !!},{!! auth()->user()->getNovemberPrices() !!},{!! auth()->user()->getDecemberPrices() !!}],
            backgroundColor: [
            'rgb(255, 0, 0, 0)',
            ],
            borderColor: [
            'rgba(200, 99, 132, .7)',
            ],
            borderWidth: 2
            },
            ]
            },
            options: {
            responsive: true
            }
            });
            
          //Bar graph for Cereals
            var ctxB = document.getElementById("barChart").getContext('2d');
            var myBarChart = new Chart(ctxB, {
            type: 'bar',
            data: {
            labels: {!! json_encode(auth()->user()->getAveragePricePerMonth()) !!},
            datasets: [{
            label: 'Average Cereal Price per month',
            data: [{!! auth()->user()->getPriceInJanuary() !!},{!! auth()->user()->getPriceInFebruary() !!},{!! auth()->user()->getPriceInMarch() !!},
            {!! auth()->user()->getPriceInApril() !!},{!! auth()->user()->getPriceInMay() !!},{!! auth()->user()->getPriceInJune() !!},{!! auth()->user()->getPriceInjuly() !!},{!! auth()->user()->getPriceInAugust() !!}
             ,{!! auth()->user()->getPriceInSeptember() !!},{!! auth()->user()->getPriceInOctober() !!},{!! auth()->user()->getPriceInNovember() !!},{!! auth()->user()->getPriceInDecember() !!}],
            backgroundColor: [
            'rgb(255, 0, 0, 0)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
            }]
            },
            options: {
            scales: {
            yAxes: [{
            ticks: {
            beginAtZero: true
            }
            }]
            }
            }
            });

            //Bar graph for Animals
            var ctxB = document.getElementById("barchart").getContext('2d');
            var myBarChart = new Chart(ctxB, {
            type: 'bar',
            data: {
            labels: {!! json_encode(auth()->user()->getAverageAnimalPricePerMonth()) !!},
            datasets: [{
            label: 'Average Price for animals per month',
            data: [{!! auth()->user()->getAnimalPriceInJanuary() !!},{!! auth()->user()->getAnimalPriceInFebruary() !!},{!! auth()->user()->getAnimalPriceInMarch() !!},
            {!! auth()->user()->getAnimalPriceInApril() !!},{!! auth()->user()->getAnimalPriceInMay() !!},{!! auth()->user()->getAnimalPriceInJune() !!},{!! auth()->user()->getAnimalPriceInjuly() !!},{!! auth()->user()->getAnimalPriceInAugust() !!}
             ,{!! auth()->user()->getAnimalPriceInSeptember() !!},{!! auth()->user()->getAnimalPriceInOctober() !!},{!! auth()->user()->getAnimalPriceInNovember() !!},{!! auth()->user()->getAnimalPriceInDecember() !!}],
            backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
            }]
            },
            options: {
            scales: {
            yAxes: [{
            ticks: {
            beginAtZero: true
            }
            }]
            }
            }
            });
           
            //Line Graph for Poultry
            var ctxL = document.getElementById("poultry").getContext('2d');
            var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
            labels: {!! json_encode(auth()->user()->getPoultryAveragePricePerMonths()) !!},
            datasets: [{
            label: "Average Poultry Prices per month",
            data: [{!! auth()->user()->getJanuaryPoultryPrices() !!},{!! auth()->user()->getFebrauryPoultryPrices() !!},{!! auth()->user()->getMarchPoultryPrices() !!},
            {!! auth()->user()->getAprilPoultryPrices() !!},{!! auth()->user()->getMayPoultryPrices() !!},{!! auth()->user()->getJunePoultryPrices() !!},
            {!! auth()->user()->getJulyPrices() !!},{!! auth()->user()->getAugustPrices() !!}
        ,{!! auth()->user()->getSeptemberPoultryPrices() !!},{!! auth()->user()->getOctoberPoultryPrices() !!},{!! auth()->user()->getNovemberPoultryPrices() !!},{!! auth()->user()->getDecemberPoultryPrices() !!}],
            backgroundColor: [
            'rgba(105, 0, 132, .2)',
            ],
            borderColor: [
            'rgba(200, 99, 132, .7)',
            ],
            borderWidth: 2
            },
            ]
            },
            options: {
            responsive: true
            }
            });
            

            //Pie chart 1
            $(function () {
            var ctxP = document.getElementById("piechart").getContext('2d');
            var myPieChart = new Chart(ctxP, {
            plugins: [ChartDataLabels],
            type: 'pie',
            data: {
            labels: ["Emergency Report(s)", "Vetenary Doctor(s)","Fisheries Officer(s)","Agriculture Officer(s)",
                     "Forestry Officer(s)","Ministry Official(s)"],
            datasets: [{
                data: [{!! auth()->user()->getNumberOfEmergencies()!!},{!! auth()->user()->getNumberOfVetenaryDoctors()!!},
                {!! auth()->user()->getNumberOfFisheriesOfficers()!!},{!! auth()->user()->getNumberOfAgricultureOfficers()!!},
                {!! auth()->user()->getNumberOfForestryOfficers()!!},{!! auth()->user()->getNumberOfMinistryOfficials()!!}],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#00A65A", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }]
            },
            options: {
            responsive: true,
            legend: {
                position: 'right',
                labels: {
                padding: 20,
                boxWidth: 10
                }
            },
            plugins: {
                datalabels: {
                    formatter: (value, ctx) => {
                    let sum = 0;
                    let dataArr = ctx.chart.data.datasets[0].data;
                    dataArr.map(data => {
                        sum += data;
                    });
                    let percentage = (value * 100 / sum).toFixed(1) + "%";
                    return percentage;
                },
                color: 'white',
                labels: {
                    title: {
                        font: {
                        size: '16'
                        }
                    }
                    }
                }
            }
            }
            })
          })

          var ctxP = document.getElementById("product").getContext('2d');
            var myPieChart = new Chart(ctxP, {
            plugins: [ChartDataLabels],
            type: 'pie',
            data: {
            labels: ["Products", "Breeds","Markets","Farms","Sponsors"],
            datasets: [{
                data: [{{ auth()->user()->getNumberOfProducts()}},{{ auth()->user()->getNumberOfBreeds()}},{{ auth()->user()->getNumberOfMarkets()}},
                {{ auth()->user()->getNumberOfFarms()}},{{ auth()->user()->getNumberOfSponsors()}}],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }]
            },
            options: {
            responsive: true,
            legend: {
                position: 'right',
                labels: {
                padding: 20,
                boxWidth: 10
                }
            },
            plugins: {
                datalabels: {
                formatter: (values, ctx) => {
                    let sum = 0;
                    let dataArr = ctx.chart.data.datasets[0].data;
                    dataArr.map(data => {
                    sum += data;
                    });
                  let percentage = (values * 100 / sum).toFixed(2) + "%";
                    return percentage;
                },
                color: 'white',
                labels: {
                title: {
                font: {
                    size: '16'
                }
                }
            }
            }
            }
            }
            });
       
      </script>
</body>
</html>

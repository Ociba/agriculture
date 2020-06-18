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
        <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="background-color:white;">
            <!-- Bar CHART -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h5 class="box-title">Average Price Of Products as Reported from various markets in all the regions in uganda</h5>
                </div>
                <div class="box-body chart-responsive">
                <canvas id="myChart"></canvas>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- BAR CHART -->
                            
        </div>
        </div>
      <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6" style="background-color:white;">
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h5 class="box-title">Employees | no. of emergency</h5>
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
                            
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h5 class="box-title">Products|Farms|Markets|Sponsors|Breeds</h5>
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
          //Bar graph for all products
          var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                labels: {!! auth()->user()->getItemsNames() !!},
                datasets: [{
                label: 'Average price in the market',
                data: {!! auth()->user()->getItemsAveragePrice() !!},
                backgroundColor: [
                'rgba(255, 0, 0)',
                'rgba(0, 0, 255)',
                'rgba(60, 179, 113)',
                'rgba(238, 130, 238)',
                'rgba(255, 165, 0)',
                'rgba(255, 99, 71)',
                'rgba(128, 0, 0)',
                'rgba(220, 20, 60)',
                'rgba(255, 215, 0)',
                'rgba((255, 255,0)',
                'rgba(0, 100, 0)',
                'rgba(0, 250, 154)',
                'rgba(0, 128, 128)',
                'rgba(255, 0, 255)',
                'rgba(255, 20, 147)',
                'rgba(106, 90, 205)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 0.05
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

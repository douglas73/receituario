@extends('layouts.template')

@section('head_links_scripts')

@append

@section('js_links')
    <script src="{{ asset ("media/js/Chartjs.js") }}"></script>
@append

@section('js_scripts')
    /*
    function explode(){
        $("#myModal").modal();
    }
    setTimeout(explode, 2000);
    */
    $(function () {
    /* ChartJS
    * -------
    * Here we will create a few charts using ChartJS
    */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = {
    labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
    datasets: [
    {
    label: "Electronics",
    fillColor: "rgba(255,0,0,0.5)",
    strokeColor: "rgba(210, 214, 222, 1)",
    pointColor: "rgba(210, 214, 222, 1)",
    pointStrokeColor: "#c1c7d1",
    pointHighlightFill: "#fff",
    pointHighlightStroke: "rgba(220,220,220,1)",
    data: [65, 59, 80, 81, 56, 55, 40]
    },
    {
    label: "Digital Goods",
    fillColor: "rgba(0,255,0,0.3)",
    strokeColor: "rgba(60,141,188,0.8)",
    pointColor: "#3b8bba",
    pointStrokeColor: "rgba(60,141,188,1)",
    pointHighlightFill: "#fff",
    pointHighlightStroke: "rgba(60,141,188,1)",
    data: [28, 48, 40, 19, 86, 27, 90]
    }
    ]
    };

    var areaChartOptions = {
    //Boolean - If we should show the scale at all
    showScale: true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines: false,
    //String - Colour of the grid lines
    scaleGridLineColor: "rgba(0,0,0,.05)",
    //Number - Width of the grid lines
    scaleGridLineWidth: 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,
    //Boolean - Whether the line is curved between points
    bezierCurve: true,
    //Number - Tension of the bezier curve between points
    bezierCurveTension: 0.3,
    //Boolean - Whether to show a dot for each point
    pointDot: false,
    //Number - Radius of each point dot in pixels
    pointDotRadius: 4,
    //Number - Pixel width of point dot stroke
    pointDotStrokeWidth: 1,
    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius: 20,
    //Boolean - Whether to show a stroke for datasets
    datasetStroke: true,
    //Number - Pixel width of dataset stroke
    datasetStrokeWidth: 2,
    //Boolean - Whether to fill the dataset with a color
    datasetFill: true,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: true,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true
    };

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas);
    var lineChartOptions = areaChartOptions;
    lineChartOptions.datasetFill = false;
    lineChart.Line(areaChartData, lineChartOptions);

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
    {
    value: 700,
    color: "#f56954",
    highlight: "#f56954",
    label: "ASMA & DPOC"
    },
    {
    value: 500,
    color: "#00a65a",
    highlight: "#00a65a",
    label: "ANEMIA"
    },
    {
    value: 400,
    color: "#f39c12",
    highlight: "#f39c12",
    label: "ANTI ALÉRGICOS"
    },
    {
    value: 600,
    color: "#00c0ef",
    highlight: "#00c0ef",
    label: "ANTIBIÓTICOS"
    },
    {
    value: 300,
    color: "#3c8dbc",
    highlight: "#3c8dbc",
    label: "HIPERTENSÃO ARTERIAL"
    },
    {
    value: 100,
    color: "#d2d6de",
    highlight: "#d2d6de",
    label: "DIABETES"
    }
    ];
    var pieOptions = {
    //Boolean - Whether we should show a stroke on each segment
    segmentShowStroke: true,
    //String - The colour of each segment stroke
    segmentStrokeColor: "#fff",
    //Number - The width of each segment stroke
    segmentStrokeWidth: 2,
    //Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    //Number - Amount of animation steps
    animationSteps: 100,
    //String - Animation easing effect
    animationEasing: "easeOutBounce",
    //Boolean - Whether we animate the rotation of the Doughnut
    animateRotate: true,
    //Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale: false,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: true,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[1].fillColor = "#00a65a";
    barChartData.datasets[1].strokeColor = "#00a65a";
    barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero: true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines: true,
    //String - Colour of the grid lines
    scaleGridLineColor: "rgba(0,0,0,.05)",
    //Number - Width of the grid lines
    scaleGridLineWidth: 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,
    //Boolean - If there is a stroke on each bar
    barShowStroke: true,
    //Number - Pixel width of the bar stroke
    barStrokeWidth: 2,
    //Number - Spacing between each of the X value sets
    barValueSpacing: 5,
    //Number - Spacing between data sets within X values
    barDatasetSpacing: 1,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
    //Boolean - whether to make the chart responsive
    responsive: true,
    maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
    });


@append

@section('content')
            <!-- Content Wrapper. Contains page content -->
        <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow-gradient"><i class="fa fa-tasks"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Categorias</span>
                        <span class="info-box-number">13<small>unidades</small></span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-orange"><i class="fa fa-medkit"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Medicação</span>
                        <span class="info-box-number">101</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-hotel"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Pacientes</span>
                        <span class="info-box-number">120</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-light-blue-gradient"><i class="fa fa-hospital-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Receitas</span>
                        <span class="info-box-number">344</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <!-- DONUT CHART -->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Receitas por Categorias</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <canvas id="pieChart" style="height:250px"></canvas>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                    <!-- AREA CHART -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Agendamentos: Presenças x Faltosos</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <canvas id="areaChart" style="height:250px"></canvas>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->



                </div><!-- /.col (LEFT) -->
                <div class="col-md-6">
                    <!-- LINE CHART -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Receitas por mês</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <canvas id="lineChart" style="height:250px"></canvas>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                    <!-- BAR CHART -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Outro índice</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <canvas id="barChart" style="height:230px"></canvas>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                </div><!-- /.col (RIGHT) -->
            </div><!-- /.row -->
            <div class="callout callout-danger">
                <h4>Aviso!</h4>
                <p>Os dados exibidos nesta tela são meramente fictícios. O dono do sistema definirá quais os gráficos são necessários e quais dados serão relevantes para exibição de gráficos totalmente dinâmicos</p>
            </div>
        </section><!-- /.content -->

    </section><!-- /.content -->

@stop
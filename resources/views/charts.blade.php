@extends('layouts.master')

@section('content')
<!-- Breadcrumb -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>

    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
            <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
        </div>
    </li>
</ol>


<div class="container-fluid">



    <div class="animated fadeIn">
        <div class="card-columns cols-2">
            <div class="card">
                <div class="card-header">
                    Line Chart
                    <div class="card-actions">
                        <a href="http://www.chartjs.org">
                            <small class="text-muted">docs</small>
                        </a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="chart-wrapper">
                        <canvas id="canvas-1"></canvas>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Bar Chart
                    <div class="card-actions">
                        <a href="http://www.chartjs.org">
                            <small class="text-muted">docs</small>
                        </a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="chart-wrapper">
                        <canvas id="canvas-2"></canvas>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Doughnut Chart
                    <div class="card-actions">
                        <a href="http://www.chartjs.org">
                            <small class="text-muted">docs</small>
                        </a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="chart-wrapper">
                        <canvas id="canvas-3"></canvas>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Radar Chart
                    <div class="card-actions">
                        <a href="http://www.chartjs.org">
                            <small class="text-muted">docs</small>
                        </a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="chart-wrapper">
                        <canvas id="canvas-4"></canvas>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Pie Chart
                    <div class="card-actions">
                        <a href="http://www.chartjs.org">
                            <small class="text-muted">docs</small>
                        </a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="chart-wrapper">
                        <canvas id="canvas-5"></canvas>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Polar Area Chart
                    <div class="card-actions">
                        <a href="http://www.chartjs.org">
                            <small class="text-muted">docs</small>
                        </a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="chart-wrapper">
                        <canvas id="canvas-6"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.conainer-fluid -->
@endsection
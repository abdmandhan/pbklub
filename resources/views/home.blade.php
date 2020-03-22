@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<p>Welcome to this beautiful admin panel.</p>
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Default Card Example</h3>
      </div>
      <div class="card-body">
        <canvas id="mycanvas2" height="400vw" width="600vw"></canvas>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Default Card Example</h3>
      </div>
      <div class="card-body">
        <canvas id="mycanvas" height="400vw" width="600vw"></canvas>
      </div>
    </div>
  </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  var ctx_live2 = document.getElementById("mycanvas2");
var myChart2 = new Chart(ctx_live2, {
  type: 'bar',
  data: {
    labels: [],
    datasets: [{
      data: [],
      borderWidth: 1,
      borderColor:'#00c0ef',
      label: 'Jumlah',
    }]
  },
  options: {
    responsive: true,
    title: {
      display: true,
      text: "Chart.js - Dynamically Update Chart Via Ajax Requests",
    },
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
        }
      }]
    }
  }
});

    var ctx_live = document.getElementById("mycanvas");
var myChart = new Chart(ctx_live, {
  type: 'bar',
  data: {
    labels: [],
    datasets: [{
      data: [],
      borderWidth: 1,
      borderColor:'#00c0ef',
      label: 'Harga',
    }]
  },
  options: {
    responsive: true,
    title: {
      display: true,
      text: "Chart.js - Dynamically Update Chart Via Ajax Requests",
    },
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
        }
      }]
    }
  }
});

// this post id drives the example data
var postId = 1;

// logic to get new data
var getData = function() {
  $.ajax({
    url: "{{ route('chartBahan')}}",
    success: function(data) {
        $.each(data, function(k, v) {
            myChart.data.labels.push(v['Nama']);
            myChart.data.datasets[0].data.push(v['Harga']);

            myChart2.data.labels.push(v['Nama']);
            myChart2.data.datasets[0].data.push(v['Jumlah']);
        });
      myChart.update();
      myChart2.update();
    }
  });
};

getData();
</script>
@stop
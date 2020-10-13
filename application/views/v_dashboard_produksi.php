
<style>
@import 'https://code.highcharts.com/css/highcharts.css';

/* piechart */
.highcharts-pie-series .highcharts-point {
	stroke: #EDE;
	stroke-width: 2px;
}
.highcharts-pie-series .highcharts-data-label-connector {
	stroke: silver;
	stroke-dasharray: 2, 2;
	stroke-width: 2px;
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 320px; 
  max-width: 600px;
  margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

/* meterchart */
.highcharts-figure .chart-container {
	width: 300px;
	height: 200px;
	float: left;
}

.highcharts-figure, .highcharts-data-table table {
	width: 600px;
	margin: 0 auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

@media (max-width: 600px) {
	.highcharts-figure, .highcharts-data-table table {
		width: 100%;
	}
	.highcharts-figure .chart-container {
		width: 300px;
		float: none;
		margin: 0 auto;
	}

}
</style>
<div class="container-fluid">
    <div class="card mr-3 ml-3">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ml-2 mb-2">
                <h3>Production Dashboard</h3>
            </div>
        </div>
    </div>
</div>

<br>
<div class="container-fluid">
<div class="row">
<div class="col-12">
     <div class="row">
         <div class="col-3">
         <div class="card ml-3">
            <div class="row">
                <div class="col-8">
                     <span class="text-secondary ml-2" style="font-size: 12px;">Total Vaccine Received</span>
                </div>
                <div class="col-4">
                    <a class="text-secondary mr-2" style="font-size: 12px;">weekly</a>
                </div>
            </div>

            <div class="row">
                  <div class="col-12">
                  <h3 class="ml-2">10.000 Vials</h3>
                  </div>
            </div>
            <div class="row">
                  <div class="col-12">
                  <h6 class="text-secondary ml-2" style="font-size: 12px;">On Storage 9.000 Vials</h6>
                  </div>
              </div>
            <div class="row">
                  <div class="col-12">
                  <h6 class="text-secondary ml-2" style="font-size: 12px;">On Storage 9.000 Vials</h6>
                  </div>
              </div>
              <hr>
              <div class="row">
                    <div class="col-12">
                    <h6 class="text-secondary ml-2" style="font-size: 12px;">Vaccines 23%</h6>
                    </div>
                </div>
         </div>
         </div>
         
         <div class="col-3">
         <div class="card">
         <div class="row">
                  <div class="col-8">
                    <span class="text-secondary ml-2" style="font-size: 12px;">Total Rejected Vaccines</span>
                  </div>
                  <div class="col-4">
                    <a class="text-secondary mr-2" style="font-size: 12px;">weekly</a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                  <h3 class="ml-2">1.000 Vials</h3>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                  <h6 class="text-secondary ml-2" style="font-size: 12px;">Damaged 280 Vials</h6>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                  <h6 class="text-secondary ml-2" style="font-size: 12px;">Defected 320 Vials</h6>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                  <h6 class="text-secondary ml-2" style="font-size: 12px; padding-bottom: 35px;">Others 400 Vials</h6>
                  </div>
              </div>
          
         </div>
         </div>

         <div class="col-3">
         <div class="card">
         <div class="row">
                  <div class="col-8">
                    <span class="text-secondary ml-2" style="font-size: 12px;">Total Delivery Order</span>
                  </div>
                  <div class="col-4">
                    <a class="text-secondary mr-2" style="font-size: 12px;">weekly</a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                  <h3 class="ml-2">34.500 Vials</h3>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                  <h6 class="text-secondary ml-2" style="font-size: 12px;">On Delivery 320 DOs</h6>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                  <h6 class="text-secondary ml-2" style="font-size: 12px;">Delivered 33.450 DOs</h6>
                  </div>
              </div>
              <hr>
              <div class="row">
                    <div class="col-12">
                    <h6 class="text-secondary ml-2" style="font-size: 12px;">All-time DO 6.400.000 DOs</h6>
                    </div>
                </div>
         </div>
         </div>

         <div class="col-3">
         <div class="card mr-3">
         <div class="row">

                  <div class="col-8">
                    <span class="text-secondary ml-2" style="font-size: 12px;">Total Canceled Order</span>
                  </div>
                  <div class="col-4">
                    <a class="text-secondary mr-2" style="font-size: 12px;">weekly</a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                  <h3 class="ml-2">320 DOs</h3>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                  <h6 class="text-secondary ml-2" style="font-size: 12px;">Canceled by User 300 DOs</h6>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                  <h6 class="text-secondary ml-2" style="font-size: 12px;">Canceled by Courier 20 DOs</h6>
                  </div>
              </div>
              <hr>
              <div class="row">
                    <div class="col-12">
                    <h6 class="text-secondary ml-2" style="font-size: 12px;">All-time Canceled Delivery 6.400.000 DOs</h6>
                    </div>
                </div>
         </div>
         </div>
   
    </div>
</div>
</div>
</div>    

<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-9">
                    <div class="card ml-3">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-secondary ml-2" style="font-size: 16px;">The Proportion Of Vaccines</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <figure class="highcharts-figure">
                                    <div id="container"></div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card mr-3">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-secondary ml-2" style="font-size: 16px;">Production Rate</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <figure class="highcharts-figure">
                                    <div id="container-speed" class="chart-container"></div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// piechart
Highcharts.chart('container', {

chart: {
  styledMode: true
},

title: {
  text: ''
},

xAxis: {
  categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
},

series: [{
  type: 'pie',
  allowPointSelect: true,
  keys: ['name', 'y', 'selected', 'sliced'],
  data: [
    ['Rejected', 50, false],
    ['MineralPro', 60, false],
    ['Vidvac', 106.4, false],
    ['BioThemaDl', 129.2, false],
    ['VACVID123', 144.0, false],
    ['Peaches', 176.0, false],
    ['Defected', 135.6, true, true],
    ['Biofarma', 148.5, false]
  ],
  showInLegend: true,
}]
});

// chartmeter
var gaugeOptions = {
  chart: {
    type: 'solidgauge'
  },

  title: null,

  pane: {
    center: ['50%', '85%'],
    size: '140%',
    startAngle: -90,
    endAngle: 90,
    background: {
      backgroundColor:
        Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
      innerRadius: '60%',
      outerRadius: '100%',
      shape: 'arc'
    }
  },

  exporting: {
    enabled: false
  },

  tooltip: {
    enabled: false
  },

  // the value axis
  yAxis: {
    stops: [
      [0.1, '#55BF3B'], // green
      [0.5, '#DDDF0D'], // yellow
      [0.9, '#DF5353'] // red
    ],
    lineWidth: 0,
    tickWidth: 0,
    minorTickInterval: null,
    tickAmount: 2,
    title: {
      y: -70
    },
    labels: {
      y: 16
    }
  },

  plotOptions: {
    solidgauge: {
      dataLabels: {
        y: 5,
        borderWidth: 0,
        useHTML: true
      }
    }
  }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
  yAxis: {
    min: 0,
    max: 200,
    title: {
      text: ''
    }
  },

  credits: {
    enabled: false
  },

  series: [{
    name: 'Speed',
    data: [80],
    dataLabels: {
      format:
        '<div style="text-align:center">' +
        '<span style="font-size:25px">{y}</span><br/>' +
        '<span style="font-size:12px;opacity:0.4">Utiliy</span>' +
        '</div>'
    },
    tooltip: {
      valueSuffix: 'Utility'
    }
  }]

}));

// Bring life to the dials
setInterval(function () {
  // Speed
  var point,
    newVal,
    inc;

  if (chartSpeed) {
    point = chartSpeed.series[0].points[0];
    inc = Math.round((Math.random() - 0.5) * 100);
    newVal = point.y + inc;

    if (newVal < 0 || newVal > 200) {
      newVal = point.y - inc;
    }

    point.update(newVal);
  }

}, 2000);

</script>
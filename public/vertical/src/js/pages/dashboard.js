//[Dashboard Javascript]

//Project:	CRMi - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
		var options = {
          series: [76],
          chart: {
		  height: 279,
          type: 'radialBar',
          sparkline: {
            enabled: true
          }
        },
		colors:['#ffa800'],
        plotOptions: {
          radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
              background: "#e7e7e7",
              strokeWidth: '97%',
              margin: 5, // margin is in pixels
            },
            dataLabels: {
              name: {
                show: false
              },
              value: {
                offsetY: -20,
                fontSize: '22px'
              }
            }
          }
        },
        grid: {
          padding: {
            top: -0
          }
        },
        labels: ['Average Results'],
        };

        var chart = new ApexCharts(document.querySelector("#overall_progress"), options);
        chart.render();
	
	
	
		var options = {
          series: [67],		 
          chart: {
          height: 130,
          type: 'radialBar',
        },
		colors:['#7047ee'],
        plotOptions: {
          radialBar: {
            hollow: {
              size: '50%',
            },
		  dataLabels: {
			name: {
				show: false,
			 },
			  value: {
                offsetY: 0,
              }
			},
          },
        },        
        };

        var chart = new ApexCharts(document.querySelector("#development_progress"), options);
        chart.render();
	
	
	
		var options = {
          series: [{
          data: [5.38, 4, 6.60, 5.20, 4.98]
        }],
          chart: {
          type: 'bar',
          height: 85,
		  toolbar: {
            show: false
          },
			 offsetX: -10,
			  offsetY: -15,
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
          },
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: false,      
		},
		colors:['#ffa800'],
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Project 1', 'Project 2', 'Project 3', 'Project 4', 'Project 5'],
			labels: {
          		show: false,
			},
        },
        yaxis: {          
			labels: {
          		show: false,
			},
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " k"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#revenue_progress"), options);
        chart.render();
	
	
	
	
		var options = {
          series: [{
          data: [61, 45, 69, 59, 62]
        }],
          chart: {
          type: 'bar',
          height: 100,
		  toolbar: {
            show: false
          },
			 offsetX: -10,
			  offsetY: -15,
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
          },
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: false,      
		},
		colors:['#05825f'],
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Project 1', 'Project 2', 'Project 3', 'Project 4', 'Project 5'],
			labels: {
          		show: false,
			},
        },
        yaxis: {          
			labels: {
          		show: false,
			},
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#projects_progress"), options);
        chart.render();
	
	
	
	
		var options = {
          series: [{
          name: 'Total Budget',
          data: [52]
        }, {
          name: 'Budget Amount Used',
          data: [43]
        }, {
          name: 'Target Amount Used',
          data: [40]
        }],
          chart: {
          type: 'bar',
          height: 260,
		  toolbar: {
            show: false
          },
        },
		grid: {
			show: false,      
		},
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 5,
          colors: ['transparent']
        },
		colors:['#3596f7', '#ffa800', '#ee3158'],
        xaxis: {
          categories: ['Budget'],
			labels: {
          		show: false,
			},
        },
        yaxis: {
          title: {
            text: '$ (thousands)'
          }
        },
        fill: {
          opacity: 1
        },
		legend: {
		  position: 'bottom',
		  horizontalAlign: 'left',
		  offsetY: 10,
		},
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " k"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#project_budget"), options);
        chart.render();
	
		
	
		
	
		var options = {
          series: [{
			  name: 'Revenue',
			  data: [61, 45, 69, 59, 62, 65, 51]
		  }],
          chart: {
          type: 'bar',
		  foreColor:"#172b4c",
          height: 295,
			  toolbar: {
        		show: false,
			  },
			  
			  offsetY: -15,
        },
        plotOptions: {
          bar: {
			horizontal: true,
          },
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: true,			
		},
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
		colors: ['#05825f'],
        xaxis: {
          categories: ['Project 1', 'Project 2', 'Project 3', 'Project 4', 'Project 5', 'Project 6', 'Project 7'],
			
        },
		 annotations: {
          xaxis: [{
            x: 60,
            borderColor: '#00E396',
            label: {
              borderColor: '#00E396',
              style: {
                color: '#fff',
                background: '#00E396',
              },
              text: '60',
            }
          }],
		 },
        fill: {
          opacity: 1
        },
		 legend: {
          position: 'top',
          horizontalAlign: 'left',
          offsetX: 40
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + "k"
            }
          },
			marker: {
			  show: false,
		  },
        }
        };

        var chart = new ApexCharts(document.querySelector("#project_hours"), options);
        chart.render(); 
	
	
		
		
		
	
		var options = {
          series: [{
			  name: 'Revenue',
			  data: [2.70, 2.60, 2.55, 2.30, 2.10, 1.65, 1.30]
		  }],
          chart: {
          type: 'bar',
		  foreColor:"#172b4c",
          height: 295,
			  toolbar: {
        		show: false,
			  },
			  
			  offsetY: -15,
        },
        plotOptions: {
          bar: {
			horizontal: true,
          },
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: true,			
		},
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
		colors: ['#ffa800'],
        xaxis: {
          categories: ['Mark', 'Jhone', 'Tanya', 'Paton', 'Mody', 'Anderson', 'Robinson'],
			
        },
		 annotations: {
          xaxis: [{
            x: 3,
            borderColor: '#00E396',
            label: {
              borderColor: '#00E396',
              style: {
                color: '#fff',
                background: '#00E396',
              },
              text: '3.00k',
            }
          }],
		 },
        fill: {
          opacity: 1
        },
		 legend: {
          position: 'top',
          horizontalAlign: 'left',
          offsetX: 40
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + "k"
            }
          },
			marker: {
			  show: false,
		  },
        }
        };

        var chart = new ApexCharts(document.querySelector("#project_employee"), options);
        chart.render(); 
	
	
	
	
		var options = {
          series: [{
          name: 'Violet Hours (SUM)',
          data: [11, 0, 8, 8, 11]
        }, {
          name: 'Tom Hours (SUM)',
          data: [15, 8, 11, 8, 9]
        }, {
          name: 'Tanya Hours (SUM)',
          data: [0, 8, 15, 0, 0]
        }, {
          name: 'Matt Hours (SUM)',
          data: [12, 11, 8, 7, 8]
        }, {
          name: 'Mark Hours (SUM)',
          data: [5, 9, 5, 9, 6]
        }, {
          name: 'Mandy Hours (SUM)',
          data: [0, 0, 0, 4, 8]
        }, {
          name: 'Katrina Hours (SUM)',
          data: [5, 4, 4, 5, 4]
        }, {
          name: 'John Hours (SUM)',
          data: [7, 2, 3, 12, 4]
        }, {
          name: 'Jane Hours (SUM)',
          data: [6, 3, 15, 9, 12]
        }],
          chart: {
          type: 'bar',
          height: 338,
          stacked: true,
          toolbar: {
            show: true
          },
          zoom: {
            enabled: true
          }
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: true,			
		},
        plotOptions: {
          bar: {
            horizontal: false,
            borderRadius: 10
          },
        },
		colors:['#7047ee', '#2d5be3', '#3596f7', '#05825f', '#ffa800', '#ee3158', '#bcc2c8', '#f26522', '#6cc644'],
        xaxis: {
          categories: ['Project 1', 'Project 2', 'Project 3', 'Project 4', 'Project 5'],
        },
        legend: {
          position: 'top',
      	horizontalAlign: 'left',
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#contribution_employee"), options);
        chart.render();
	
	
	
		var options = {
          series: [120, 107, 69],
          chart: {
          height: 345,
          type: 'pie',
        },
        labels: ['Mark', 'Robinson', 'Anderson'],
		colors:['#7047ee', '#3596f7', '#ee3158'],
        legend: {
		  position: 'top',
		  horizontalAlign: 'center',
		},
        tooltip: {
          y: {
            formatter: function (val) {
              return val + "h"
            }
          },
        }
        };

        var chart = new ApexCharts(document.querySelector("#pro_manager"), options);
        chart.render();
	
	
}); // End of use strict

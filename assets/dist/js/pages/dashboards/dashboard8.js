/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function() {
    "use strict";
    // ============================================================== 
    // Earnings
    // ============================================================== 
    var data1 = {
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
        series: [
            ['Kurva Daya PV', 0, 0, 0, 0, 0, 0, 162, 216, 324, 324, 522, 522, 360, 342, 288],
            ['Kurva Daya Beban', 123, 98, 98, 156, 212, 143, 154, 98, 98, 289, 413, 378, 421, 276, 156]
        ]
    };

    var options1 = {
        low: 0,
        high: 530,
        showArea: true,
        fullWidth: true,
        chartPadding: {
            top: 15,
            right: 15,
            bottom: 5,
            left: 40
        },
        plugins: [
            Chartist.plugins.tooltip()
        ],
        axisY: {
            onlyInteger: true,
            scaleMinSpace: 40,
            offset: 20,
            labelInterpolationFnc: function(value) {
                return (value) + 'KWh';
            }
        }
    };

    var responsiveOptions1 = [
        ['screen and (max-width: 1023px)', {
            chartPadding: {
                top: 15,
                right: 12,
                bottom: 5,
                left: 10
            }
        }]
    ];

    var chart = new Chartist.Line('.earnings', data1, options1, responsiveOptions1);

    // Offset x1 a tiny amount so that the straight stroke gets a bounding box
    // Straight lines don't get a bounding box 
    // Last remark on -> http://www.w3.org/TR/SVG11/coords.html#ObjectBoundingBox
    chart.on('draw', function(ctx) {
        if (ctx.type === 'area') {
            ctx.element.attr({
                x1: ctx.x1 + 0.001
            });
        }
    });

    // Create the gradient definition on created event (always after chart re-render)
    chart.on('created', function(ctx) {
        var defs = ctx.svg.elem('defs');
        defs.elem('linearGradient', {
            id: 'gradient',
            x1: 0,
            y1: 1,
            x2: 0,
            y2: 0
        }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(255, 255, 255, 1)'
        }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(64, 196, 255, 1)'
        });
    });
    var chart = [chart];

    // ============================================================== 
    // product-sales
    // ============================================================== 
    var chart = c3.generate({
        bindto: '.product-sales',
        size: {
            height:350
        },
        data: {
            columns: [
                ['Daya Real', 1052.14, 912.83, 1120.9, 136.02, 0, 0, 0, 0, 0, 0, 0, 0],
                ['Daya Prediksi', 1054, 914, 1128, 1025, 0, 0, 0, 0, 0, 0, 0, 0]
            ],
            type: 'bar'
        },
        axis: {
            y: {
                show: true,
                tick: {
                    count: 5,
                    outer: false
                }
            },
            x: {
                show: true,
            }
        },
        bar: {

            width: 8

        },
        padding: {
            top: 40,
            right: 10,
            bottom: 0,
            left: 20,
        },
        point: {
            r: 0,
        },
        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#2961ff', '#40c4ff', '#ff821c', '#7e74fb']
        }
    });
    // ============================================================== 
    // Conversation Rate
    // ============================================================== 
    var chart = c3.generate({
        bindto: '.rate',
         size: {
            width:250
        },
        data: {
            columns: [
                ['Conversation', 85],
                ['other', 15],
            ],
            
            type : 'donut'
        },
        donut: {
            label: {
                show: false
              },
            title:"Conversation",
            width:10,
            
        }
        , padding: {
            top:10,
             bottom:-20
            
        , },
        legend: {
          hide: true
          //or hide: 'data1'
          //or hide: ['data1', 'data2']
        },
        color: {
              pattern: ['#2961ff', '#dadada', '#ff821c', '#7e74fb']
        }
    });
    // ============================================================== 
    // Revenue
    // ============================================================== 
    
    var chart = c3.generate({
        bindto: '.status',
        size: {
            width:250
        },
        data: {
            columns: [
                ['Success', 65],
                ['Pending', 15],
                ['Failed', 17]
            ],
            
            type : 'donut'
        },
        donut: {
            label: {
                show: false
              },
            title:"Sessions",
            width:35,
            
        },
        
        legend: {
          hide: true
          //or hide: 'data1'
          //or hide: ['data1', 'data2']
        },
        color: {
              pattern: ['#40c4ff', '#2961ff', '#ff821c', '#7e74fb']
        }
    });
    
    // ============================================================== 
    // income
    // ============================================================== 
    var data = {
        labels: ['1', '2', '3', '4', '5', '6', '7'],
        series: [
            [51, 61, 43, 66.71, 56.2, 49.2, 33]
        ]
    };

    var options = {
        axisX: {
            showGrid: false
        },
        seriesBarDistance: 5,
        chartPadding: {
            top: 15,
            right: 15,
            bottom: 5,
            left: 0
        },
        plugins: [
            Chartist.plugins.tooltip()
        ],
        width: '100%'
    };

    var responsiveOptions = [
        ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
                labelInterpolationFnc: function(value) {
                    return value[0];
                }
            }
        }]
    ];
    new Chartist.Bar('.net-income', data, options, responsiveOptions);

    // ============================================================== 
    // Our Visitor
    // ============================================================== 

    var chart = c3.generate({
        bindto: '#visitor',
        data: {
            columns: [
                ['Desktop', 40],
                ['Tablet', 12],
                ['Mobile', 28],
                ['None', 60]
            ],

            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "Variations",
            width: 25,

        },

        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#40c4ff', '#2961ff', '#ff821c', '#e9edf2']
        }
    });

    // ============================================================== 
    // sales
    // ============================================================== 

    var chart = c3.generate({
        bindto: '#sales',
        data: {
            columns: [
                ['2011', 45],
                ['2012', 15],
                ['2013', 27]
            ],

            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            width: 15,
        },

        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#40c4ff', '#2961ff', '#ff821c']
        }
    });

    // ============================================================== 
    // Foo1
    // ============================================================== 
    var opts = {
        angle: 0, // The span of the gauge arc
        lineWidth: 0.32, // The line thickness
        radiusScale: 1, // Relative radius
        pointer: {
            length: 0.44, // // Relative to gauge radius
            strokeWidth: 0.04, // The thickness
            color: '#000000' // Fill color
        },
        limitMax: false, // If false, the max value of the gauge will be updated if value surpass max
        limitMin: false, // If true, the min value of the gauge will be fixed unless you set it manually
        colorStart: '#40c2ff', // Colors
        colorStop: '#2a65ff', // just experiment with them
        strokeColor: '#E0E0E0', // to see which ones work best for you
        generateGradient: true,
        highDpiSupport: true // High resolution support
    };
    var target = document.getElementById('foo'); // your canvas element
    var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
    gauge.maxValue = 3000; // set max gauge value
    gauge.setMinValue(0); // Prefer setter over gauge.minValue = 0
    gauge.animationSpeed = 45; // set animation speed (32 is default value)
    gauge.set(2700); // set actual value 
});
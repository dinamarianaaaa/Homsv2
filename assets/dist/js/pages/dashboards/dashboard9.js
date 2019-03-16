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
    new Chartist.Bar('.chart1', {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        series: [
            [987.5, 1000.5, 971.21, 100.42, 0, 0, 0, 0, 0, 0, 0, 0],
            [694.41, 602.47, 739.79, 104.69, 0, 0, 0, 0, 0, 0, 0, 0]
        ]
    }, {
        stackBars: true,
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value / 1) + 'kW';
            }
        },
        axisX: {
            showGrid: false
        },
        plugins: [
            Chartist.plugins.tooltip()
        ],
        seriesBarDistance: 1,
        chartPadding: {
            top: 15,
            right: 15,
            bottom: 5,
            left: 0
        }
    }).on('draw', function(data) {
        if (data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 25px'
            });
        }
    });

    // ============================================================== 
    // Our Visitor
    // ============================================================== 

    var chart = c3.generate({
        bindto: '#visitor',
        data: {
            columns: [
                ['Air Conditioner', 34],
                ['Pump', 17],
                ['Other', 26],
                ['Heater', 23],
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
            title: "Rasio",
            width: 35,

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
});
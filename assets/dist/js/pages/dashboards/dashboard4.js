/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
    "use strict";
    // ============================================================== 
    // Overview
    // ============================================================== 
    var chart = c3.generate({
        bindto: '.overview1'
        , data: {
            columns: [
                ['Produksi PV selama 4 Hari', 0, 0, 0, 0, 0, 0, 0, 450, 738, 1386, 1512, 1494, 2898, 1854, 1152, 1260, 306, 108, 54, 36, 0, 0, 0, 0, 0]
                , ['Beban Rumah Tangga selama 4 Hari', 420, 420, 338, 338, 642, 704, 578, 831, 530, 412, 845.2, 1049.8, 1001.3, 1378, 889, 762, 606, 452, 430, 588, 1038, 529, 697, 584.9, 522.54]
            ]
            , type: 'line'
        }
        , axis: {
            y: {
                show: true
                , tick: {
                    count: 3
                    , outer: false
                }
            }
            , x: {
                show: true
            , }
        }
        , padding: {
            top: 40
            , right: 10
            , bottom: 40
            , left: 20
        , }
        , point: {
            r: 0
        , }
        , legend: {
            hide: true
                //or hide: 'data1'
                //or hide: ['data1', 'data2']
        }
        , color: {
            pattern: ['#2961ff', '#dadada', '#ff821c', '#7e74fb']
        }
    });
    // ============================================================== 
    // Revenue
    // ============================================================== 
    
    var chart = c3.generate({
        bindto: '.revenue',
        data: {
            columns: [
                ['Email', 45],
                ['Website', 15],
                ['Mobile', 27],
                ['Other', 18],
            ],
            
            type : 'donut',
            onclick: function (d, i) { console.log("onclick", d, i); },
            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
            onmouseout: function (d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
              },
            title:"Revenue",
            width:35,
            
        },
        
        legend: {
          hide: false
          //or hide: 'data1'
          //or hide: ['data1', 'data2']
        },
        color: {
              pattern: ['#40c4ff', '#2961ff', '#ff821c', '#7e74fb']
        }
    });
    
    // ============================================================== 
    // Conversation
    // ============================================================== 
    var chart = c3.generate({
        bindto: '.conversation'
        , data: {
            columns: [
                ['Site A', 5, 6, 3, 7, 9, 10, 14, 12, 11, 9, 8, 7, 10, 6, 12, 10, 10]
                , ['Site B', 1, 2, 8, 3, 4, 5, 7, 6, 5, 6, 4, 3, 3, 12, 5, 6, 3]
            ]
            , type: 'spline'
        }
        , axis: {
            y: {
                show: true
                , tick: {
                    count: 0
                    , outer: false
                }
            }
            , x: {
                show: true
            , }
        }
        , padding: {
            top: 40
            , right: 10
            , bottom: 40
            , left: 20
        , }
        , point: {
            r: 0
        , }
        , legend: {
            hide: false
                //or hide: 'data1'
                //or hide: ['data1', 'data2']
        }
        , color: {
            pattern: ['#2961ff', '#ff821c', '#ff821c', '#7e74fb']
        }
    });
    
    // ============================================================== 
    // Conversation Rate
    // ============================================================== 
    var chart = c3.generate({
        bindto: '.rate',
        data: {
            columns: [
                ['Conversation', 0.47],
                ['other', 99.53],
            ],
            
            type : 'donut',
            onclick: function (d, i) { console.log("onclick", d, i); },
            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
            onmouseout: function (d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
              },
            title:"Balik Modal",
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
    // Our Visitor
    // ============================================================== 
    var sparklineLogin = function () {
        $('#activeu').sparkline([6, 10, 9, 11, 9, 10, 12, 11, 10, 9, 11, 9, 10], {
            type: 'bar'
            , height: '122'
            , barWidth: '4'
            , width: '100%'
            , resize: true
            , barSpacing: '11'
            , barColor: '#fff'
        });
        
    };
    var sparkResize;
    $(window).resize(function (e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();
    
    // ============================================================== 
    // EArnings
    // ============================================================== 
    var chart = c3.generate({
        bindto: '.earnings'
        , data: {
            columns: [
                ['Site A', 0, 6, 3, 7, 9, 10, 14, 12, 11, 9, 8, 7, 10, 6, 12, 10, 8]
                
            ]
            , type: 'spline'
        }
        , axis: {
            y: {
                show: false
                , tick: {
                    count: 0
                    , outer: false
                }
            }
            , x: {
                show: false
            , }
        }
        , padding: {
            top: 0
            , right: 10
            , bottom: 0
            , left: 20
        , }
        , point: {
            r: 0
        , }
        , legend: {
            hide: true
                //or hide: 'data1'
                //or hide: ['data1', 'data2']
        }
        , color: {
            pattern: ['#fff', '#ff821c', '#ff821c', '#7e74fb']
        }
    });
});
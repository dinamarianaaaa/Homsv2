/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(window).on("load", function() {
    "use strict";
    
   
    // ============================================================== 
    // product-sales
    // ============================================================== 
    var chart = c3.generate({
        bindto: '.product-sales', 
        data: {
            columns: [
                ['Daya Real', 10524.14, 912.83, 1120.9, 136.02, 9, 10, 14, 12, 11, 9, 8, 7, 10, 6, 12, 10, 8],
                ['Daya Prediksi', 1, 2, 8, 3, 4, 5, 7, 6, 5, 6, 4, 3, 3, 12, 5, 6, 3]
            ]
            , type: 'bar'
        }
        , axis: {
            y: {
                show: true
                , tick: {
                    count: 1
                    , outer: false
                }
            }
            , x: {
                show: true
            , }
        },bar: {
          
          width: 8
            
        }
        , padding: {
            top: 30
            , right: 10
            , bottom: 0
            , left: 20
        , }
        , point: {
            r: 1
        , }
        , legend: {
            hide: true
                //or hide: 'data1'
                //or hide: ['data1', 'data2']
        }
        , color: {
            pattern: ['#2961ff', '#40c4ff', '#ff821c', '#7e74fb']
        }
    });
    
    
    });
    $(".sidebartoggler").on("click", function() { chart.resize() });
        
    /*
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
    });*/
});
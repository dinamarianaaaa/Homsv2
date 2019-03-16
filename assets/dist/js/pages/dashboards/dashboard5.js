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
});
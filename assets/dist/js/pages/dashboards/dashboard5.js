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
        bindto: '.product-sales'
        , data: {
            columns: [
                
            ]
            , type: 'bar'
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
        },bar: {
          
          width: 8
            
        }
        , padding: {
            top: 40
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
            pattern: ['#2961ff', '#40c4ff', '#ff821c', '#7e74fb']
        }
    });
    
    
/*
Template Name: Material Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
    "use strict";
    // ============================================================== 
    // Last month earning
    // ==============================================================
    var sparklineLogin = function() {
        $('.crypto').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '5',
            barColor: '#ffffff'
        });

    };
    var sparkResize;

    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();
    
    // ============================================================== 
    // BitCoin / Ethereum / Ripple
    // ==============================================================
    Morris.Area({
        element: 'btc-eth-rip',
        data: [{
                    period: '2018-01',
                    btc: 101,
                    eth: 0,
                    rip: 0
                }, {
                    period: '2018-02',
                    btc: 89,
                    eth: 35,
                    rip: 15
                }, {
                    period: '2018-03',
                    btc: 115,
                    eth: 30,
                    rip: 15
                }, {
                    period: '2018-04',
                    btc: 116,
                    eth: 60,
                    rip: 38
                }, {
                    period: '2018-05',
                    btc: 121,
                    eth: 20,
                    rip: 8
                }, {
                    period: '2018-06',
                    btc: 119,
                    eth: 80,
                    rip: 40
                }, {
                    period: '2018-07',
                    btc: 123,
                    eth: 50,
                    rip: 20
                }, {
                    period: '2018-08',
                    btc: 124,
                    eth: 180,
                    rip: 100
                }, {
                    period: '2018-09',
                    btc: 121,
                    eth: 150,
                    rip: 70
                }, {
                    period: '2018-10',
                    btc: 118,
                    eth: 50,
                    rip: 20
                }, {
                    period: '2018-11',
                    btc: 116,
                    eth: 180,
                    rip: 100
                }, {
                    period: '2018-12',
                    btc: 110,
                    eth: 150,
                    rip: 70
                }, {
                    period: '2019-01',
                    btc: 105.21,
                    eth: 180,
                    rip: 100
                }, {
                    period: '2019-02',
                    btc: 91.28,
                    eth: 150,
                    rip: 70
                }, {
                    period: '2019-03',
                    btc: 112.09,
                    eth: 50,
                    rip: 20
                }, {
                    period: '2019-04',
                    btc: 118.33,
                    eth: 180,
                    rip: 100
                }
                


                ],
                lineColors: ['#1240c2', '#40c4ff','#edf3f7'],
                xkey: 'period',
                ykeys: ['btc'],
                labels: ['Energi Surya'],
                pointSize: 0,
                lineWidth: 0,
                resize:true,
                fillOpacity: 1,
                behaveLikeLine: true,
                gridLineColor: '#e0e0e0',
                hideHover: 'auto'
        
    });
    
 });
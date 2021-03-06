$(document).ready(function(){
            
    $(function () { 
        $('#chartPreferences').highcharts({
            title: {
                text: 'Campaign Statistics',
                x: -20 //center
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'USD'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valuePrefix: '$'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'CTR',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'RPC',
                data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
            }, {
                name: 'CPM',
                data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
            }, {
                name: 'RPM',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });
    });



    $(function () { 
        $('#campChart').highcharts({
            title: {
                text: 'Campaign Statistics',
                x: -20 //center
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'USD'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valuePrefix: '$'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Campaign 1',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'Campaign 2',
                data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
            }, {
                name: 'Campaign 3',
                data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
            }, {
                name: 'Campaign 4',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });
    });



//     var json = [{
//     "key": "Apples",
//     "value": "4"
// }, {
//     "key": "Pears",
//     "value": "7"
// }, {
//     "key": "Bananas",
//     "value": "9"
// }];
// var processed_json = new Array(); 
// $.map(json, function(obj, i) {
//     processed_json.push([obj.key, parseInt(obj.value)]);
// });

// $('#campChart1').highcharts({
//         chart: {
//             type: 'column'
//         },
//         xAxis: {
//             type: "category"
//         },
//         series: [{
//             data: processed_json
//         }]
//     });
    $(function () {

            var processed_json = new Array();
           
            $.getJSON('campaign.json', function(data) {
                // Populate series

                var len=data.length;
                
                for (i = 0; i < data.length; i++){
                    alert(i);
                    processed_json.push([data['campaign']['info'].camp_name]);

                }

               
              
                // draw chart
                $('#campChart1').highcharts({
                chart: {
                    type: "column"
                },
                title: {
                    text: "Total Opens"
                },
                xAxis: {
                    type: 'category',
                    allowDecimals: true,
                    title: {
                        text: ""
                    }
                },
                yAxis: {
                    title: {
                        text: "Opens"
                    }
                },
                series: [{
                    name: 'Campaigns',
                    data: processed_json
                }]
            }); 
        });
    });

  
});



<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Trivver</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">
$(function () {
        $('#container').highcharts({
    
            chart: {
                type: 'column'
            },
    
            title: {
                text: 'Behavior Patterns'
            },
    
            xAxis: {
                categories: ['Coke vs Pepsi', 'Nike vs Adidas', 'Samsung vs Apple', 'Ford vs Toyota']
            },
    
            yAxis: {
                allowDecimals: false,
                min: 0,
                title: {
                    text: 'Number of choices'
                }
            },
    
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.x +'</b><br/>'+
                        this.series.name +': '+ this.y +'<br/>'+
                        'Total: '+ this.point.stackTotal;
                }
            },
            plotOptions: {
                column: {
                    stacking: 'normal'
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Choice 1',
                data: [5, 3, 4, 7],
                stack: 'choice1'
            }, {
                name: 'Choice 2',
                data: [7, 2, 6, 2],
                stack: 'choice2'
            }]
        });
    });
    

        </script>
    </head>
    <body>
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    </body>
</html>

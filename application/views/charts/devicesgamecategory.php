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
                text: 'Devices and Game Genre'
            },
            xAxis: {
                categories: [
                    'Strategy',
                    'Puzzle',
                    'Family',
                    'Adventure',
                    'RPG',
                    'Action',
                    'Trivia'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Gamers'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} gamers</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Smartphones',
                data: [49, 71, 106, 129, 144, 176, 135]
    
            }, {
                name: 'Tablets',
                data: [83, 78, 98, 93, 106, 84, 105]
    
            }, {
                name: 'Desktop Browser',
                data: [48, 38, 39, 41, 47, 48, 59]
    
            }, {
                name: 'Xbox',
                data: [42, 33, 34, 39, 52, 75, 57]
    
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

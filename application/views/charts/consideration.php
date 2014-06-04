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
                text: 'Consideration / Advocacy / Purchase Intent'
            },
            xAxis: {
                categories: ['Smob', 'Smob', 'Smob', 'Smob', 'Smob']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total engagement'
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                    }
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
                    stacking: 'normal',
                    dataLabels: {
                        enabled: true,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                    }
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Consideration',
                data: [5, 3, 4, 7, 2]
            }, {
                name: 'Advocacy',
                data: [2, 2, 3, 2, 1]
            }, {
                name: 'Purchase Intent',
                data: [3, 4, 4, 2, 5]
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

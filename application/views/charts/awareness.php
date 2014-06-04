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
                type: 'bar'
            },
            title: {
                text: 'Awareness'
            },
            xAxis: {
                categories: ['Smob', 'Smob', 'Smob', 'Smob', 'Smob']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total engagement'
                }
            },
            legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
            credits: {
                enabled: false
            },
                series: [{
                name: 'Awareness 2 (>20% screen coverage)',
                data: [5, 3, 4, 7, 2]
            }, {
                name: 'Awareness 1 (<20% screen coverage)',
                data: [2, 2, 3, 2, 1]
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

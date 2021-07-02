<?php require_once './data.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tafee Dataset</title>
    <link rel="stylesheet" href="./src/css/style.css" />
    <script src="./src/js/jquery-3.5.1.min.js"></script>
    <script src="./src/js/app.js"></script>
    <!-- plugins -->
    <script type="text/javascript" src="./src/js/regression.min.js"></script>
    <script type="text/javascript" src="./src/js/chartjs/Chart.min.js"></script>
    <script type="text/javascript" src="./src/js/chartjs/utils.js"></script>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="logo"><img src="./src/images/logo.png" /></a>
        <a href="about.php">ABOUT US</a>
        <a href="dataset.php" class="active">DATASET</a>
        <a href="predict.php">PREDICT</a>
        <a href="javascript:void(0);" style="font-size: 15px" class="icon" onclick="showNav()">&#9776;</a>
    </div>
    <div class="main">
        <div class="data-set-container">
            <p>The sign of the correlation coefficient represents the direction of the relationship.
                Positive coefficients indicate that when the value of one variable increases, the value of the other variable also tends to increase. Positive relationships produce an upward slope on a scatterplot.
                Negative coefficients represent cases when the value of one variable increases, the value of the other variable tends to decrease. Negative relationships produce a downward slope.</p>
            <canvas id="data"></canvas>
            <div class="bottom-section">
                <p>Data we're based on the fare rate per kilometer of different public transportation.</p>
            </div>
        </div>
        <div class="footer">LSPU-SPCC CSEL-302(INTELLIGENT SYSTEMS)</div>
    </div>
    <script type="text/javascript">
        var color = Chart.helpers.color;

        function Person_and_Price() {
            var data = <?php echo getNumberofPersonandPrice(); ?>;
            return data;
        }

        function Kilometer_and_Price() {
            var data = <?php echo getKilometersandPrice(); ?>;
            return data;
        }
        const getdata_Pp = Person_and_Price();
        const getdata_Dp = Kilometer_and_Price();

        var targ = <?php echo count($targ); ?>;
        console.log(targ);

        var samp = <?php echo count($samp); ?>;
        console.log(samp);

        console.log("Total no. of data : ", getdata_Dp.length);
        const cleandata_Pp = getdata_Pp.filter(({
            x,
            y
        }) => {
            return (
                typeof x === typeof y &&
                !isNaN(x) && !isNaN(y) &&
                Math.abs(x) !== Infinity &&
                Math.abs(y) !== Infinity);
        }).map(({
            x,
            y
        }) => {
            return [x, y];
        })

        const cleandata_Dp = getdata_Dp.filter(({
            x,
            y
        }) => {
            return (
                typeof x === typeof y &&
                !isNaN(x) && !isNaN(y) &&
                Math.abs(x) !== Infinity &&
                Math.abs(y) !== Infinity);
        }).map(({
            x,
            y
        }) => {
            return [x, y];
        })

        const linear_regression_Pp = regression.linear(cleandata_Pp);
        const linear_regression_Dp = regression.linear(cleandata_Dp);

        const usefulpoints_Pp = linear_regression_Pp.points.map(([x, y]) => {
            return {
                x,
                y
            };
        })
        const usefulpoints_Dp = linear_regression_Dp.points.map(([x, y]) => {
            return {
                x,
                y
            };
        })

        var scatterChartData = {
            datasets: [{
                type: 'scatter',
                label: 'Person and price',
                borderColor: 'rgba(0, 0, 0, 1)',
                backgroundColor: 'rgba(0, 0, 0, 1)',
                data: Person_and_Price(),
                showLine: false
            }, {
                type: 'scatter',
                label: 'Distance and price',
                borderColor: 'rgba(255, 0, 0, 1)',
                backgroundColor: 'rgba(255, 0, 0, 1)',
                data: Kilometer_and_Price(),
                showLine: false
            }, {
                type: 'line',
                label: 'Regression line - Person count and Price',
                borderColor: 'rgba(62,196,244,1)',
                backgroundColor: 'rgba(62,196,244,1)',
                data: usefulpoints_Pp,
                showLine: true,
                fill: false,
            }, {
                type: 'line',
                label: 'Regression line - Distance and Fare rate',
                borderColor: 'rgba(0, 191, 0, 1)',
                backgroundColor: 'rgba(0, 191, 0, 1)',
                data: usefulpoints_Dp,
                showLine: true,
                fill: false,
            }]
        };

        window.onload = function() {
            var ctx = document.getElementById('data').getContext('2d');
            window.myScatter = Chart.Scatter(ctx, {
                data: scatterChartData,
                options: {
                    title: {
                        display: true,
                        text: ''
                    },
                    plugins: {
                        zoom: {
                            wheel: {
                                enabled: true
                            },
                            pinch: {
                                enabled: true
                            },
                            drag: {
                                enabled: true
                            },
                            mode: 'xy'
                        }
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Kilometer'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Fee'
                            }
                        }]
                    }
                }
            });
        };
    </script>
</body>

</html>
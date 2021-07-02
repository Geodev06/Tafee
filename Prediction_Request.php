<?php

use Phpml\Regression\LeastSquares;

include './data.php';

$samples = Xvalues();
$targets = Yvalues();

$Multiple_Linear_Regression = new LeastSquares();

$Multiple_Linear_Regression->train($samples, $targets);

$PERSONS = $_POST['persons'];
$KILOMETERS = 0;
$KILOMETERS = $_POST['kilometers'];

if ($PERSONS > 0) {
    if ($KILOMETERS > 0) {
        echo round($Multiple_Linear_Regression->predict([$KILOMETERS, $PERSONS]), 2);
    } else {
        echo "0";
    }
} else {
    echo "0";
}

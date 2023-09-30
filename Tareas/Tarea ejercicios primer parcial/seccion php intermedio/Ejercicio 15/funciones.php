<?php
function fibonacci($n) {
    if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function sumatoria($n) {
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        $sum += fibonacci($i);
    }
    return $sum;
}
?>



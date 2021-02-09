<?php

$score_1 = 10;

if ($score_1 >= 60 ) {
    echo '合格です';
} elseif ($score_1 >= 30 && $score_1 < 60) {
    echo '追試です';
} else {
    echo '不合格です';
}
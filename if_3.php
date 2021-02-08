<?php

$score_1 = 50;

if ($score_1 >= 60 ) {
    echo '合格です';
} elseif ($score_1 >= 30 && $score_6 <= 59){
    echo '追試です';
} elseif ($score_1 <= 29) {
    echo '不合格です';
}
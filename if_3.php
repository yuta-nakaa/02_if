<?php

$score_1 = 29;

if ($score_1 >= 60 ) {
    echo '合格です';
} elseif ($score_1 >= 30 && $score_6 < 60){
    echo '追試です';
} elseif ($score_1 < 30) {
    echo '不合格です';
}
<?php
$count = 0;

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        echo 'aaa' . $count . '</br>';
        $count++;
        continue;
    }
    echo $count . '</br>';
    $count++;
}
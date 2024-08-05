<?php
$file = fopen("orders.txt", "r");
$orders = [];

if ($file) {
    while (($line = fgets($file)) !== false) {
        $orders[] = json_decode($line, true);
    }
    fclose($file);
    echo json_encode($orders);
} else {
    echo json_encode([]);
}
?>
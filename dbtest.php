<?php
try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=erplive_printingcell",
        "erplive_printingcell",
        "W3#e3@#fY"
    );
    echo "DB CONNECTED";
} catch (Exception $e) {
    echo $e->getMessage();
}

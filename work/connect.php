<?php
$conn = new mysqli('localhost', 'root', '', 'dukundumurimo');
if (!$conn) {
    echo 'not connected';
} else {
    echo 'connected';
}

?>

<?php

    $conn = new mysqli('localhost','root','','db');

    if ($conn->connect_errno) {
        die('Coneection Error'. $conn->connect_errno);
    }


?>
<?php

if(isset($_GET['select'])) {
    $color = $_GET['select'];
    $_SESSION['color'] = $color;
}

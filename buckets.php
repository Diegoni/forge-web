<?php

include_once "index.php";

$klein->respond('GET', '/forge-web/buckets.php', function () {
    echo 'test';
});
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/3/15
 * Time: 11:46 PM
 */
$json = file_get_contents("php://input");
$file = fopen('/test.json','w+');
fwrite($file,$json);
fclose($file);

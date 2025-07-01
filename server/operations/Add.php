<?php
require_once(__DIR__ .'/../TasksServices');
require_once(__DIR__. '/../services/TasksServices.php');

$service = new TasksServices();

$description = $_POST['task'];
$service->create_task($description);

go_back();
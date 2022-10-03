<?php

require_once(dirname(__DIR__) . '/models/wines.php');

$model = new Wines();

$sql = $model->list();

echo json_encode($sql->fetchAll());
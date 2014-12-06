<?php

require './backend/User.php';
require './backend/Service.php';

$service = new Service();

$service->getAllServices();

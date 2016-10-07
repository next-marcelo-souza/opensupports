<?php
require_once 'staff/get.php';
require_once 'staff/assign-ticket.php';

$systemControllerGroup = new ControllerGroup();
$systemControllerGroup->setGroupPath('/staff');

$systemControllerGroup->addController(new GetStaffController);
$systemControllerGroup->addController(new AssignStaffController);

$systemControllerGroup->finalize();
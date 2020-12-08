<?php

declare(strict_types=1);

require_once './models/Form.php';
require_once './models/FormManager.php';

$formManager = new FormManager;
$formManager->addForm($pdo);


require './views/homepage.phtml';
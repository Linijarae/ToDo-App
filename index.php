<?php

require_once 'controllers/TaskController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'add':
        $controller->createTask();
        break;
    case 'update':
        $controller->updateTask();
        break;
    case 'delete':
        $controller->deleteTask();
        break;
    case 'index':
    default:
        $controller->listTasks();
        break;
}

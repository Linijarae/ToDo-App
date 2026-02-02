<?php
require_once 'controllers/TaskController.php';

$controller = new TaskController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'add':
        $controller->add();
        break;

    case 'delete':

        if (isset($_GET['id'])) {
            $controller->delete($_GET['id']);
        } else {
            header('Location: index.php');
        }
        break;

    case 'edit':
        if (isset($_GET['id'])) {
            $task = $controller->getTask($_GET['id']);
            include 'views/edit.php';
        } else {
            header('Location: index.php');
        }
        break;

    case 'update':
        $controller->update();
        break;

    case 'index':
    default:
        $controller->listTasks();
        break;
}
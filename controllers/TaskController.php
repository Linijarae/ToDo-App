<?php
require_once 'models/TaskModel.php';

class TaskController {
    private $model;

    public function __construct() {
        $this->model = new TaskModel();
    }

    public function listTasks() {
        $tasks = $this->model->getAllTasks();
        include 'views/list.php';
    }

    public function add() {
        if (!empty($_POST['title'])) {
            $this->model->createTask(htmlspecialchars($_POST['title']));
        }
        header('Location: index.php');
    }

    public function update() {
        if (!empty($_POST['id']) && !empty($_POST['title'])) {
            $this->model->updateTask($_POST['id'], htmlspecialchars($_POST['title']));
        }
        header('Location: index.php');
    }

    public function delete($id) {
        $this->model->deleteTask($id);
        header('Location: index.php');
    }
    public function getTask($id) {
    return $this->model->getTaskById($id);
    }
}
<?php

require_once 'models/TaskModel.php';

class TaskController {
    private $model;
    public function __construct() {
        $this->model = new TaskModel();
    }
    public function listTasks() {
        return $this->model->getAllTasks();
    }
    public function getTask($id) {
        return $this->model->getTaskById($id);
    }
    public function createTask($title, $description) {
        return $this->model->createTask($title, $description);
    }
    public function updateTask($id, $title, $description) {
        return $this->model->updateTask($id, $title, $description);
    }
    public function deleteTask($id) {
        return $this->model->deleteTask($id);
    }
}
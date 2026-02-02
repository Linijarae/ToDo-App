<?php
require_once 'classes/Database.php';

class TaskModel {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAllTasks() {
        $stmt = $this->db->query("SELECT * FROM tasks ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTaskById($id) {
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createTask($title) {
        $stmt = $this->db->prepare("INSERT INTO tasks (title) VALUES (:title)");
        $stmt->execute(['title' => $title]);
    }

    public function updateTask($id, $title) {
        $stmt = $this->db->prepare("UPDATE tasks SET title = :title WHERE id = :id");
        $stmt->execute([
            'title' => $title,
            'id' => $id
        ]);
    }

    public function deleteTask($id) {
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
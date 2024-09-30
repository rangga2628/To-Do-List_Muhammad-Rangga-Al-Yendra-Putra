<?php
require_once 'controllers/taskController.php';

// Jika ada task yang ditambahkan
if (isset($_POST['add_task'])) {
    $task = $_POST['task'];
    addTask($task);
}

// Memuat tampilan
require 'views/index.php';
?>

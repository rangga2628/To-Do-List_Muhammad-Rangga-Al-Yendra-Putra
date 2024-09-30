<?php
require_once '../controllers/taskController.php';

if (isset($_GET['index'])) {
    deleteTask($_GET['index']);
}

header('Location: ../index.php');
exit();
?>

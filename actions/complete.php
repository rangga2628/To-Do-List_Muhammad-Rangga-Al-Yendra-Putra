<?php
require_once '../controllers/taskController.php';

if (isset($_GET['index'])) {
    completeTask($_GET['index']);
}

header('Location: ../index.php');
exit();
?>

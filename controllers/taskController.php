<?php
session_start();

// Inisialisasi daftar tugas dalam session jika belum ada
if (!isset($_SESSION['todo_list'])) {
    $_SESSION['todo_list'] = [];
}

// Fungsi untuk menambah task
function addTask($task) {
    $_SESSION['todo_list'][] = ['task' => $task, 'completed' => false];
}

// Fungsi untuk menandai task sebagai selesai
function completeTask($index) {
    $_SESSION['todo_list'][$index]['completed'] = true;
}

// Fungsi untuk menghapus task
function deleteTask($index) {
    array_splice($_SESSION['todo_list'], $index, 1);
}
?>

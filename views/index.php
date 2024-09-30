<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="styles\styles.css">
</head>
<body>
    <div class="container">
        <h1>TO-DO LIST</h1>
        
        <!-- Form untuk menambah task -->
        <form method="POST" action="index.php">
            <input type="text" name="task" placeholder="Enter task..." required>
            <button type="submit" name="add_task">+ ADD</button>
        </form>

        <!-- Menampilkan daftar tugas -->
        <ul>
            <?php foreach ($_SESSION['todo_list'] as $index => $todo): ?>
                <li>
                    <span class="task"><?php echo $todo['completed'] ? "<s>{$todo['task']}</s>" : $todo['task']; ?></span>
                    <div class="actions">
                        <?php if (!$todo['completed']): ?>
                            <a href="actions/complete.php?index=<?php echo $index; ?>" class="complete">✔</a>
                        <?php endif; ?>
                        <a href="actions/delete.php?index=<?php echo $index; ?>" class="delete">❌</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>

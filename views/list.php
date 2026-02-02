<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Todo App</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        .task { margin-bottom: 10px; padding: 10px; border-bottom: 1px solid #ccc; }
        .delete-btn { color: red; text-decoration: none; margin-left: 10px; }
        .edit-btn { color: blue; text-decoration: none; margin-left: 10px; }
    </style>
</head>
<body>

    <h1>Ma Liste de Tâches</h1>

    <form action="index.php?action=add" method="POST">
        <input type="text" name="title" placeholder="Quelle tâche faire ?" required>
        <button type="submit">Ajouter</button>
    </form>

    <hr>

    <?php if (empty($tasks)): ?>
        <p>Aucune tâche pour le moment.</p>
    <?php else: ?>
        <?php foreach ($tasks as $task): ?>
            <div class="task">
                <strong><?php echo htmlspecialchars($task['title']); ?></strong>
                
                <a href="index.php?action=edit&id=<?php echo $task['id']; ?>" class="edit-btn">Modifier</a>
                
                <a href="index.php?action=delete&id=<?php echo $task['id']; ?>" 
                   class="delete-btn" 
                   onclick="return confirm('Supprimer cette tâche ?')">Supprimer</a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>
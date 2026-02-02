<?php
<h1>Modifier la tâche</h1>

<form action="index.php?action=update" method="POST">
    <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
    
    <input type="text" name="title" value="<?php echo htmlspecialchars($task['title']); ?>" required>
    
    <button type="submit">Enregistrer les modifications</button>
    <a href="index.php">Annuler</a>
</form>
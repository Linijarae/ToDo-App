# Cheminement d'une requête.

### L'utilisateur clique sur le lien "Supprimer" qui pointe vers ```index.php?action=delete&id=5```.

### ```index.php``` (qui fait office de routeur) reçoit la requête, voit ```action=delete```, et dit au Contrôleur : "Exécute la méthode delete avec l'ID 5".

### ```TaskController``` reçoit l'ordre et dit au Modèle : "Supprime la ligne 5 dans la base de données".

### ```TaskModel``` exécute la requête SQL sécurisée ```DELETE FROM tasks WHERE id = 5```.

### ```TaskController``` voit que c'est fini et dit au navigateur : "Maintenant, retourne à l'accueil (index.php)".

### ```index.ph``` est rappelé, cette fois sans action. Il appelle ```listTasks()```.

### ```TaskController``` demande la nouvelle liste au Modèle, l'envoie à la Vue, et l'utilisateur voit sa liste mise à jour.

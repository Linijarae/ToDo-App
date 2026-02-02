# Todo App - Architecture MVC PHP

Ce projet est une application de gestion de tâches (Todo List) réalisée en PHP, sans framework. Il a pour but de mettre en pratique les concepts d'architecture logicielle et de sécurité backend.

## 🚀 Fonctionnalités
- **Afficher** la liste des tâches.
- **Ajouter** une tâche via un formulaire sécurisé.
- **Supprimer** une tâche de la base de données.
- **Modifier** une tâche de la base de données.
- **Sécurité** : Protection contre les injections SQL (requêtes préparées) et les failles XSS (échappement des données).

## 🛠️ Concepts appliqués
- **Architecture MVC** : Séparation stricte entre le Modèle (données), la Vue (HTML) et le Contrôleur (logique).
- **Front Controller & Routage** : Point d'entrée unique (`index.php`) qui aiguille les requêtes.
- **Pattern Singleton** : Instance unique de la connexion PDO pour optimiser les ressources.
- **PDO (PHP Data Objects)** : Utilisation de requêtes préparées (`prepare` et `execute`) pour la communication avec MySQL.

## 📂 Structure du projet
- `index.php` : Front Controller et système de routage.
- `classes/` : Contient le Singleton pour la connexion à la base de données.
- `controllers/` : Logique de traitement des actions utilisateur.
- `models/` : Interactions avec la base de données (Requêtes SQL).
- `views/` : Fichiers d'affichage (HTML/PHP).

## 🔧 Installation

1. **Base de données** :
   Créez une base de données nommée `todo_db` et exécutez la requête suivante :
   ```sql
   CREATE TABLE tasks (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

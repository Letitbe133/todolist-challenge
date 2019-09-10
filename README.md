# Steps

## Création de la structure de fichiers

> index.php
>
> > Affichage

> process.php
>
> > Routing

> functions.php
>
> > Logique

## Inclusion des différents fichiers

## Création de la BDD et de la table

> todolist
>
> > todo

## Création de la connexion à la BDD

> PDO

## Création d'un jeu de données

> INSERT INTO

## Création de la structure du CRUD

> Create

> Read

> Update

> Delete

## Création des fonctions "models"

> getTodos()
>
> Rècupère toutes les tâches dans la BDD

> getTodo(id)

Récupère une tâche dans la BDD par son id

> createTodo()

Crée une tâche dans la BDD

> updateToto()

Met à jour une tâche dans la BDD

## Récupération des données dans la BDD et affichage dans la page

> SELECT

## Création du routing

> Save

> Update

> Delete

# Améliorations

## utiliser une classe pour la connexion PDO à la BDD

- la classe aura des propriétés **private** telles que le **host**, **nom de la BDD**, **nom d'utilisateur** **mot de passe**
- on aura aussi 2 méthodes pour la **connexion** et la **fermeture** de la connexion

## sécuriser les inputs utilisateurs

- **nettoyer** et **sécuriser** tout ce qui est entré par un utilisateur avant l'écriture en BDD pour éviter les **injections SQL**

## utiliser des requêtes SQL préparées (déjà mis en place)

- ne pas écrire directement les données en BDD mais utiliser des **placeholders** dans des requêtes préparées et leur attribuer les **valeurs** correspondantes

## à vous de voir pour les autres améliorations possibles comme par exemple la gestion des erreurs...

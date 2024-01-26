## Préambule

Le but de l'exercice est de manipuler les bases de symfony et de Bootstrap à partir de sources existantes (mais simples).  
Il est recommandé de ne pas y passer plus de deux ou trois heures, et de rendre tel quel une fois le délai atteint.

### Vous trouverez dans ce repository 
* les sources de l'exercice, un Symfony 6.3 tout à fait basique
* un composer.phar pour pouvoir utiliser composer



## Installation:

#### En local

⚠️ Pré-requis:
* PHP8.2 & les modules nécessaires (dont sqlite)
* de quoi lancer le serveur (recommandé: https://symfony.com/doc/current/setup/symfony_server.html)

```shell
php composer.phar install
php bin/console doctrine:database:create
php bin/console doc:migrations:migrate -n
symfony server:start
# ouvrir l'URL affichée dans le terminal
```

#### Avec docker
Un Dockerfile ainsi qu'un fichier Docker Compose sont mis à disposition, avec de quoi lancer le projet


⚠️ Pré-requis:
* Docker, Docker compose

```shell
docker compose up -d app
docker compose run --rm app chmod -R 777 .
docker compose run --rm app php bin/console doctrine:database:create 
docker compose run --rm app php bin/console doc:migrations:migrate -n
docker compose run --rm app chmod -R 777 .
```

### Etat des lieux
* un CRUD basique a été mis en place avec l'utilitaire de Symfony
* il s'agit d'une Todolist avec des Todo (nom, détails, et complet OUI/NON)
* Bootstrap CSS est installé
* mais le site n’est pas encore très beau ni très pratique


### Pour le rendre plus utilisable, il faudrait...
1. styliser la page avec Tailwind selon votre envie pour que ce soit plus présentable 
   * TailwindCSS est installé, ainsi que [Tailwind Elements](https://tw-elements.com/)
2. ajouter un bouton dans la liste pour pouvoir compléter une TODO plus rapidement
3. implémenter une recherche sur la liste des todos
4. rajouter un champ "Date limite" de type Date sur l'entité Todo, l'afficher dans la liste & dans le détail

### Et si on veut aller plus loin... (tâches bonus optionnelles)
1. afficher au dessus de la liste des todos `[nombre de todos complétés] / [Nombre de todos total]`
2. ajouter un filtre de type checkbox "Afficher uniquement les TODOs dépassées" au niveau de la barre de recherche
3. ajouter la possibilité de trier par Date limite (croissant/décroissant)
4. *[Si utilisation de Docker]* installer automatiquement les dépendance PHP lors du lancement du container


##  ⚠️ Livrables attendus
les sources du projet terminé sous forme d'archive zip ou d'un lien vers un repository git  
un compte rendu sommaire (**maximum 1 page**):
* du temps passé dessus
* les tâches effectuées
* les tâches non effectuées, et pourquoi
* éventuellement, des problèmes rencontrés ou des questions


N’hésitez pas à revenir vers nous si vous repérez des coquilles.
Bon courage !

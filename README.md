SFR ByPass API
========================

Bienvenue sur la simulation d'API de la SFRBox
Cette bibliothèque permet de la simulation de l'API d'une box SFR dans
le cadre d'un ByPass, c'est à dire d'un remplacement de la box par un routeur plus performant

Installation
----------------------------------

 - Cloner le dépot
 - `composer install`
 - remplir les parametres
 - `php bin/console doctrine:database:create`
 - `php bin/console doctrine:schema:create`
 - Créer dans la base de données la liste des décodeurs (Interface prévu pour la prochaine version)
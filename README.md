# Fun My Project

## Installation

```shell
composer install
npm install
```

Créer la connection à la base de données (fichier .env.local avec DATABASE_URL).

```shell
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

Générer les fixtures :

```shell
php bin/console doctrine:fixtures:load
```

Puis mettre les images dynamiques dans le dossier public/uploads

```shell
symfony serve
npm run watch
```
# Fund my project

## 1. Création d'un projet Symfony

```shell
composer create-project symfony/website-skeleton fundmyproject
npm install
composer require symfony/webpack-encore-bundle
npm install
```

Décommenter la ligne suivante du fichier webpack.config.js
```shell
.enableSassLoader()
```

Renommer le fichier assets/css/style.css en assets/css/style.scss

Modifier la ligne suivante dans le fichier assets/js/app.js
```shell
import '../css/app.scss';
```

Installer les dépendances pour SASS puis compiler les fichiers
```shell
npm install sass-loader@^7.0.1 node-sass --save-dev
npm run watch
```

## 2. 


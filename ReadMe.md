# CakePHP4 AdminLTE4 Theme

### Add repo into composer.json

```
  "minimum-stability": "dev",
  "prefer-stable": true,
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/mahankals/CakePHP-AdminLte"
    }
  ],
```

or define repository globally

```
composer config --global repositories.cakephp-adminlte vcs https://github.com/mahankals/CakePHP-AdminLte
```

### Installation

You can install using [composer](http://getcomposer.org).

```
composer require mahankals/cakephp-adminlte:dev-master
```

### Copy Assets

After above command Run this command

```
bin/cake plugin assets symlink
```

### Loading Plugins

```
bin/cake plugin load AdminLte
```

This will load plugins in your config/bootstrap.php.


## Enjoy
You are now ready to use AdminLte4 theme into your application
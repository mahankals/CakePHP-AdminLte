# CakePHP4 AdminLTE4 Theme

CakePHP 5 plugin for AdminLTE 4 theme

### Add repo into composer.json

```json
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

```bash
composer config --global repositories.cakephp-adminlte vcs https://github.com/mahankals/CakePHP-AdminLte
```

### Installation

You can install using [composer](http://getcomposer.org).

```bash
composer require mahankals/cakephp-adminlte:dev-main
```

<!-- ### Copy Assets

After above command Run this command

```
bin/cake plugin assets symlink --plugin AdminLte
``` -->

### Loading Plugins

```bash
bin/cake plugin load AdminLte
```

This will load plugins in your config/plugins.php.

### Publish config file

```bash
bin/cake AdminLte publish_config
```

## Send Flash Message
1) Default message
    ```php
    $this->Flash->set('Default Message', ['plugin' => 'AdminLte']);
    ```
1) Error message
    ```php
    $this->Flash->error('Error Message', ['plugin' => 'AdminLte']);
    ```
1) Info message
    ```php
    $this->Flash->info('Info Message', ['plugin' => 'AdminLte']);
    ```
1) Success message
    ```php
    $this->Flash->success('Success Message', ['plugin' => 'AdminLte']);
    ```
1) Warning message
    ```php
    $this->Flash->warning('Warning Message', ['plugin' => 'AdminLte']);
    ```

## Enjoy
You are now ready to use AdminLte4 theme into your application

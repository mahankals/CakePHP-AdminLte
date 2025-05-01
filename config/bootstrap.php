<?php
declare(strict_types=1);

use Cake\Core\Configure;
use Cake\Utility\Hash;

// Load plugin default config
$pluginConfig['admin-lte'] = require __DIR__ . '/admin-lte.php';

// Load app config if exists
$appConfigPath = CONFIG . 'admin-lte.php';
$appConfig['admin-lte'] = file_exists($appConfigPath) ?
  require $appConfigPath : [];

// Merge app config (overrides plugin default)
$config = Hash::merge($pluginConfig, $appConfig);

// Set it to global config
Configure::write($config);

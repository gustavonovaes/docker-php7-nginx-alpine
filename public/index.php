<?php

$actions = [
  'development' => fn () => phpinfo(),
  'production' => fn () => die('Production'),
  'default' => fn () => die('APP_ENV not defined!')
];

$actions[$_SERVER['APP_ENV'] ?? 'default']();
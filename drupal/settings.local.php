<?php

$databases['default']['default'] = array (
    'database' => 'default',
    'username' => 'user',
    'password' => 'user',
    'host' => 'db',
    'driver' => 'mysql',
);

$config_directories = array(
  CONFIG_SYNC_DIRECTORY => '../config/sync',
);

$config['config_split.config_split.dev']['status'] = TRUE;

$config['system.file']['path']['temporary'] = '/tmp';
$settings['hash_salt'] = 'Q-a2zwWJlShuIi5x_GM93H8zIaIS93WxHGpxNF77uLNgvw9fRVF3dPUw3Ef4WhqxG2t29pnliQ';

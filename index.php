<?php

    define('DATAS_DIR', __DIR__.'/datas');
    define('CONFIGS_DIR', __DIR__.'/configs');
    define('CONTROLLERS_DIR', __DIR__.'/controllers');
    define('VIEWS_DIR', __DIR__.'/views');
    define('MODELS_DIR', __DIR__.'/models');

    set_include_path(get_include_path().PATH_SEPARATOR.DATAS_DIR.PATH_SEPARATOR.CONFIGS_DIR.PATH_SEPARATOR.CONTROLLERS_DIR.PATH_SEPARATOR.VIEWS_DIR.PATH_SEPARATOR.MODELS_DIR);

    include('controllers/controller.php');
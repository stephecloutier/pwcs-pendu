<?php

define('CONFIGS_DIR', __DIR__.'/configs');
define('CONTROLLERS_DIR', __DIR__.'/controllers');
define('VIEWS_DIR', __DIR__.'/views');
define('DATAS_DIR', __DIR__.'/datas');

set_include_path(get_include_path().PATH_SEPARATOR.CONFIGS_DIR.PATH_SEPARATOR.CONTROLLERS_DIR.PATH_SEPARATOR.VIEWS_DIR);

include('controller.php');

// voir les strings function dans la doc php

// Modification pour la nouvelle structure de fichiers

/*
 * include('configs/settings.php');
 * include('models/model.php');
 * include('controllers/controller.php');
 *
 * include('views/view.php');
 */

<?php
/**
 * @author Duncan Chiang <duncan.c@inwinstack.com>
 *
 * @copyright Copyright (c) 2017, inwinStack, Inc.
 * @license AGPL-3.0
 *
 */
namespace OCA\Setting_Default_Avatar\AppInfo;

use \OCP\AppFramework\App;

use \OCA\Setting_Default_Avatar\UserHooks;

class Application extends App {

    public function __construct(array $urlParams=array()){
        parent::__construct('setting_default_avatar', $urlParams);

        $container = $this->getContainer();

        /**
         * Controllers
         */
        $container->registerService('UserHooks', function($c) {
            return new UserHooks(
                $c->query('ServerContainer')->getUserSession()
            );
        });
    }
}

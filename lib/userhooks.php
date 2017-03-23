<?php
/**
 * @author Duncan Chiang <duncan.c@inwinstack.com>
 * 
 * @copyright Copyright (c) 2017, inwinStack, Inc.
 * @license AGPL-3.0
 *
 */
namespace OCA\Setting_Default_Avatar;

use OCP\User;
use OC\Files;
use OC_App;
class UserHooks {
    private $userManager;
    private $UserFolder;
    private $UserRole;

    public function __construct($userManager){
        $this->userManager = $userManager;
    }

   
    public function register() {
        $loginRecord = function($user) {            
            $view = new \OC\Files\View('/'.$user->getUID());
            if (!$view->file_exists('avatar.png')){
                $view->file_put_contents('avatar.png',file_get_contents(\OC_App::getAppPath('setting_default_avatar').'/img/avatar.png'));
            }
            
        };

        $this->userManager->listen('\OC\User', 'postLogin', $loginRecord);

        }
}



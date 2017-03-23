<?php
/**
 * @author Duncan Chiang <duncan.c@inwinstack.com>
 *
 * @copyright Copyright (c) 2017, inwinStack, Inc.
 * @license AGPL-3.0
 *
 */

namespace OCA\Setting_Default_Avatar\AppInfo;

$app = new Application();  
$app->getContainer()->query('UserHooks')->register(); 

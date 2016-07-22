<?php
/**
 * Example file for Web src
 * @author: Alpha Lab
 * @since: 22.07.2016
 */
 
namespace GB;
use GB\App\GData\Defines as Defines;

\GB\App\Router\RoutingManager::GetInstance()->StartSurf(\Defines\SAFE_MODE);
\GB\App\Security\SafeManager::GetInstance()->SetListenSwitch();
\GB\App\Security\SafeManager::GetInstance()->SetTypeSZones(RU, "GMT+12");
\GB\App\Misc\CacheManager::GetInstance()->ClearCache(12);
?>

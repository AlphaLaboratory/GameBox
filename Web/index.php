<?php

/**
 * Example file for Web src
 * @author: Alpha Lab | AL
 * @since: 22.07.2016 | 11:20
 */
namespace App;

RoutingManager::GetInstance()->StartSurf(SAFE_MODE);
SafeManager::GetInstance()->SetListenSwitch();
SafeManager::GetInstance()->SetTypeSZones(RU, "GMT+12");
CacheManager::GetInstance()->ClearCache(12);
?>

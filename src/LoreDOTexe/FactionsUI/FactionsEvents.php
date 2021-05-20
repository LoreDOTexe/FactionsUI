<?php

namespace LoreDOTexe\FactionsUI;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;

use LoreDOTexe\FactionsUI\FactionsManager;

class FactionsEvents implements Listener{
    
    public function onJoin(PlayerJoinEvent $event) {
        
    }

    public function onQuit(PlayerQuitEvent $event) {
        
    }

    public function onPlace(BlockPlaceEvent $event){

    }

    public function onBreak(BlockBreakEvent $event){

    }

    public function onAttack(EntityDamageEvent $event) {
        $damaged = $event->getEntity();
        if($damaged instanceof Player){
            $cause = event->getCause();
            if($cause instanceof EntityDamageByEntityEvent){
                $damager = $cause->getDamager();
                if(FactionsManager::getFaction($damaged) == FactionsManager::getFaction($damager) && FactionsManager::getFaction($damaged) !== ""){
                    $event->setCancelled();
                }
            }
        }
    }
}

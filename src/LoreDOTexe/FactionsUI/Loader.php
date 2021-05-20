<?php

namespace LoreDOTexe\FactionsUI;

use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;

use LoreDOTexe\FactionsUI\FactionsCommand;
use LoreDOTexe\FactionsUI\FactionsManager;
use LoreDOTexe\FactionsUI\FactionsEvents;

class Loader extends PluginBase{

    private $config;    

    public function onEnable(){

        $this->saveDefaultConfig();
        $config = $this->getConfig();
      
        $this->getServer()->getPluginManager()->registerEvents(new FactionsEvents($this), $this);
        $this->getServer()->getCommandMap()->register($config->get("command-name"), new FactionsCommand($this));

    }
}

<?php

namespace LoreDOTexe\FactionsUI;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;

class FactionsCommand extends PluginCommand{

    public $plugin;

    public function __construct(Loader $plugin){
        $this->plugin = $plugin;
        parent::__construct("f", $plugin);
        $this->setDescription("Main command for factions!");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){

    }
}

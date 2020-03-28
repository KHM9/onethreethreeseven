<?php

namespace KHM9/onethreethreeseven;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class main extends PluginBase {
    
    public function onLoad(): void{
        $this->getLogger()->info(C::GOLD . "PLugin is almost done loading!");
    }
    public function onEnable(): void{
        $this->getLogger()->info(C::GREEN . "Plugin is now enabled! :D");
    }
    public function onDisable(): void{
        $this->getLogger()->info(C::RED . "ERROR: Plugin has been disabled :( Contact KHM9 for more info...");
    }
    public function onCommand(CommandSender $sender, Command $cmd, String $Label, array $args): bool{
        if($cmd->getName()){
            switch($args(count) === 0){
              case "example":
                $player->sendMessage(C::GREEN . "ONETHREETHREESEVEN - DEVELOPED BY KHM9 - IN DEVELOPMENT");
                break;
            }
        return true;
        }
    }
}

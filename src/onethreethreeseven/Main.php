<?php

Namespace: oneonethreeseven

# Base
use pocketmine\plugin\PluginBase;

# Command
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getLogger()->info("Hello World!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "example":
				$sender->sendMessage("Example command output");
				return true;
			default:
				return false;
		}
	}

	public function onDisable(){
		$this->getLogger()->info("Bye!");
	}
}

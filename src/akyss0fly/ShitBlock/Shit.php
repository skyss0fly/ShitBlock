<?php
namespace skyss0fly\ShitBlock;


use pocketmine\plugin\PluginBase;
use pocketmine\{command\Command , command\CommandSender , player\Player};

class main extends PluginBase {
 
public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
  switch ($command->getName()) {
            case "shit":
$x = $sender->getPosition()->getX();
$y = $sender->getPosition()->getY();
$z = $sender->getPosition()->getZ();
 $block = $world->getBlockAt($sender->getPosition()->getFloorX(),$sender->getPosition()->getFloorY() - 1, $sender->getPosition()->getFloorZ())
}
}
}

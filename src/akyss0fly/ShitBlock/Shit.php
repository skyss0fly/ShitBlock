<?php
namespace skyss0fly\ShitBlock;


use pocketmine\plugin\PluginBase;
use pocketmine\{command\Command , command\CommandSender , player\Player};

class main extends PluginBase {
$x = $sender->getPosition()->getX();
$y = $sender->getPosition()->getY();
$z = $sender->getPosition()->getZ();
 $block = $world->getBlockAt($sender->getPosition()->getFloorX(),$sender->getPosition()->getFloorY() - 1, $sender->getPosition()->getFloorZ())
}

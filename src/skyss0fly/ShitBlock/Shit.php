<?php
namespace skyss0fly\ShitBlock;


use pocketmine\plugin\PluginBase;
use pocketmine\{command\Command ,utils\TextFormat, world\WorldManager, block\VanillaBlocks, command\CommandSender , player\Player};

class main extends PluginBase {
 
public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
  switch ($command->getName()) {
            case "shit":
   $player = $sender->getPlayer();
   if ($sender->hasPermission("ShitBlock.TakaAFatShit")){
$x = $player->getPosition()->getX();
$y = $player->getPosition()->getY();
$z = $player->getPosition()->getZ();
    $world = $this->getServer()->getWorldManager()->getWorld();
 $block = $world->getBlockAt($player->getPosition()->getFloorX(),$player->getPosition()->getFloorY() - 1, $player->getPosition()->getFloorZ());
    $world->setBlock($block, VanillaBlocks::MUD_BLOCK());
    $this->getServer()->broadcastMessage(TEXTFORMAT::BOLD . TEXTFORMAT::YELLOW . $sender->getName() . " Took a Fat Shit at " . $x . " " . $y . " " . $z . " !");
    return true;
}
   else {
$sender->sendMessage(TEXTFORMAT::RED . "Bruh no perms");
    return false;
   }
   return false;
}
}
}

<?php
namespace skyss0fly\ShitBlock;


use pocketmine\plugin\PluginBase;
use pocketmine\{ utils\TextFormat, world\WorldManager, block\VanillaBlocks};
se pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\world\Position;
class Shit extends PluginBase {
 
public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
  switch ($command->getName()) {
            case "shit":
   if (!$sender->hasPermission("ShitBlock.TakaAFatShit")){
    $sender->sendMessage(TEXTFORMAT::RED . "Bruh no perms");
    return false;
   }
   else {
      $x = $sender->getPosition()->getX();
        $y = $sender->getPosition()->getY();
        $z = $sender->getPosition()->getZ();
    

 $block = $this->getServer()->getWorldManager()->getWorld()->getBlockAt($x . $y -1 . $z);
     $this->getServer()->getWorldManager()->getWorld()->setBlock($block, VanillaBlocks::MUD_BLOCK());
    $this->getServer()->broadcastMessage(TEXTFORMAT::BOLD . TEXTFORMAT::YELLOW . $sender->getName() . " Took a Fat Shit at " . $x . " " . $y . " " . $z . " !");
    return true;
}
}
 return false;
}
}

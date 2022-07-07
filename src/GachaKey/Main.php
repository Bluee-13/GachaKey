<?php
declare(strict_types=1);

namespace GachaKey;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command; 
use pocketmine\command\CommandSender;
use pocketmine\console\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

use GachaKey\Form\SimpleForm;

use onebone\economyapi\EconomyAPI;

class Main extends PluginBase implements Listener {
    public function onEnable() : void {
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      $this->saveResource("config.yml");
      $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array());
    }
  
    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
    
      if($cmd->getName() == "gachakey"){
          $this->GachaKey($sender);
      }
    
      return true;
    }
  
    public function GachaKey($player){
      $form = new SimpleForm(function(Player $player, int $data = null){
        if($data === null){
          return true;
        }
    
        $money = EconomyAPI::getInstance()->myMoney($player);
        switch ($data){
          case 0:
            if($money >= $this->config->get("0")["GachaKey"]["Harga"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("0")["GachaKey"]["Harga"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("0")["GachaKey"]["Nama"] . " 1 " . $player->getName());
              $player->sendMessage($this->config->get("0")["Message"]["Berhasil Membeli Key"]);
            } else {
              $player->sendMessage($this->config->get("0")["Message"]["Gagal Membeli Key"]);
            }
          break;
          
          case 1:
            if($money >= $this->config->get("1")["GachaKey"]["Harga"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("1")["GachaKey"]["Harga"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("1")["GachaKey"]["Nama"] . " 1 " . $player->getName());
              $player->sendMessage($this->config->get("1")["Message"]["Succes"]);
            } else {
              $player->sendMessage($this->config->get("1")["Message"]["Failed"]);
            }
          break;
          
          case 2:
            if($money >= $this->config->get("2")["GachaKey"]["Harga"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("2")["GachaKey"]["Harga"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("2")["GachaKey"]["Nama"] . " 1 " . $player->getName());
              $player->sendMessage($this->config->get("2")["Message"]["Succes"]);
            } else {
              $player->sendMessage($this->config->get("2")["Message"]["Failed"]);
            }
          break;
          
          case 3:
            if($money >= $this->config->get("3")["GachaKey"]["Harga"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("3")["GachaKey"]["Harga"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("3")["GachaKey"]["Nama"] . " 1 " . $player->getName());
              $player->sendMessage($this->config->get("3")["Message"]["Succes"]);
            } else {
              $player->sendMessage($this->config->get("3")["Message"]["Failed"]);
            }
          break;
          
          case 4:
            if($money >= $this->config->get("4")["GachaKey"]["Harga"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("4")["GachaKey"]["Harga"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("4")["GachaKey"]["Nama"] . " 1 " . $player->getName());
              $player->sendMessage($this->config->get("4")["Message"]["Succes"]);
            } else {
              $player->sendMessage($this->config->get("4")["Message"]["Failed"]);
            }
          break;
          
          case 5:
            if($money >= $this->config->get("5")["GachaKey"]["Harga"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("5")["GachaKey"]["Harga"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("5")["GachaKey"]["Nama"] . " 1 " . $player->getName());
              $player->sendMessage($this->config->get("5")["Message"]["Succes"]);
            } else {
              $player->sendMessage($this->config->get("5")["Message"]["Failed"]);
            }
          break;
          
          case 6:
            if($money >= $this->config->get("6")["GachaKey"]["Harga"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("6")["GachaKey"]["Harga"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("6")["GachaKey"]["Nama"] . " 1 " . $player->getName());
              $player->sendMessage($this->config->get("6")["Message"]["Succes"]);
            } else {
              $player->sendMessage($this->config->get("6")["Message"]["Failed"]);
            }
          break;
          
          case 7:
            if($money >= $this->config->get("7")["GachaKey"]["Harga"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("7")["GachaKey"]["Harga"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("7")["GachaKey"]["Nama"] . " 1 " . $player->getName());
              $player->sendMessage($this->config->get("7")["Message"]["Succes"]);
            } else {
              $player->sendMessage($this->config->get("7")["Message"]["Failed"]);
            }
          break;
          
          case 8:
            if($money >= $this->config->get("8")["GachaKey"]["Harga"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("8")["GachaKey"]["Harga"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("8")["GachaKey"]["Nama"] . " 1 " . $player->getName());
              $player->sendMessage($this->config->get("8")["Message"]["Succes"]);
            } else {
              $player->sendMessage($this->config->get("8")["Message"]["Failed"]);
            }
          break;
          
          case 9:
            if($money >= $this->config->get("9")["GachaKey"]["Harga"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("9")["GachaKey"]["Harga"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("9")["GachaKey"]["Nama"] . " 1 " . $player->getName());
              $player->sendMessage($this->config->get("9")["Message"]["Berhasil Membeli Key"]);
            } else {
              $player->sendMessage($this->config->get("9")["Message"]["Gagal Membeli Key"]);
            }
          break;
        }
      });
      $mymoney = $this->getServer()->getPluginManager()->getPlugin("EconomyAPI")->myMoney($player);
      $form->setTitle($this->config->get("Title"));
      $form->setContent($this->config->get("Content"). $player->getName() . "\n§r" . $this->config->get("Content1") . $mymoney);
      for($i = 0;$i <= 9;$i++){
          if($this->config->exists($i)){
              $form->addButton($this->config->get($i)["Button"]["Nama"] . "\n§r" . $this->config->get($i)["Button"]["Sub-Nama"]);
          }
      }
      $form->sendToPlayer($player);
      return $form;
    
    }
  
}
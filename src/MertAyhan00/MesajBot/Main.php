<?php

/*
*
* Bu eklenti Mert Ayhan tarafından kodlanmıştır eklentiye edit yapılıp veya satılması durumunda gerekli işlemler yapılacaktır.
*
* This plugin is coded by Mert Ayhan if the plugin is edited or sold, the necessary operations will be done.
*
* @author Mert Ayhan (MertAyhan00)
* @version 1.0
* @api 3.11.3
* Plugin Language: Turkish
* Coded Date: 28/01/2020
*
*/

namespace MertAyhan\MesajBot;

use pocketmine\plugin\PluginBase;
use pocketmine\{Player, Server};
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getLogger()->info("Plugin Aktif");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function mesaj(PlayerChatEvent $e){
		$player = $e->getPlayer();
		if($e->getMessage() == "sa"){
			$e->setMessage("Selamün Aleyküm");
		}
		if($e->getMessage() == "Sa"){
			$e->setMessage("Selamün Aleyküm");
		}
		if($e->getMessage() == "sA"){
			$e->setMessage("Selamün Aleyküm");
		}	
		if($e->getMessage() == "SA"){
			$e->setMessage("Selamün Aleyküm");
		}	
		if($e->getMessage() == "as"){
			$e->setMessage("Aleyküm Selam");
		}
		if($e->getMessage() == "As"){
			$e->setMessage("Aleyküm Selam");
		}
		if($e->getMessage() == "aS"){
			$e->setMessage("Aleyküm Selam");
		}	
		if($e->getMessage() == "AS"){
			$e->setMessage("Aleyküm Selam");
		}	
		if($e->getMessage() == "hg"){
			$e->setMessage("Hoşgeldin");
		}
		if($e->getMessage() == "Hg"){
			$e->setMessage("Hoşgeldin");
		}
	    if($e->getMessage() == "hG"){
			$e->setMessage("Hoşgeldin");
		}
		if($e->getMessage() == "HG"){
			$e->setMessage("Hoşgeldin");
		}
	    if($e->getMessage() == "hb"){
			$e->setMessage("Hoşbulduk");
		}
	    if($e->getMessage() == "Hb"){
			$e->setMessage("Hoşbulduk");
		}
	    if($e->getMessage() == "hB"){
			$e->setMessage("Hoşbulduk");
		}
		if($e->getMessage() == "HB"){
			$e->setMessage("Hoşbulduk");
		}
	}
}
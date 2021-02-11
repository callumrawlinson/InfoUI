<?php

namespace callum;

use pocketmine\{Server, Player};
use pocketmine\command\{Command, CommandSender};
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use libs\jojoe77777\{FormAPI, SimpleForm};

class Main extends PluginBase implements Listener {
	
	public function onEnable(){
		$this->getLogger()->info("Plugin Activated");
		@mkdir($this->getDataFolder());
        $this->saveResource("config.yml");
        $this->getConfig = new Config($this->getDataFolder() . "config.yml", Config::YAML);
     }
     
     public function onDisable(){
     	$this->getLogger()->info("Plugin Deactivated");
     }
     
     public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
     	switch($cmd->getName()){
     	case "helperui":
     if($sender instanceof Player){
     	$this->openHelper($sender); 
     }else{
     	$sender->sendMessage("In Game Only");
     }
  }
  return true; 
  }
  
  public function openHelper($sender){
        $form = new SimpleForm(function (Player $sender, $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                $this->info($sender);
                break;
                case 1:
                $this->rules($sender);
                break;
                case 2:
                $this->rank($sender);
                break;
                case 3:
                $this->staff($sender);
                break;
                case 4:

                break;
            }
        });
        $form->setTitle($this->getConfig()->get("Title"));
        $form->setContent($this->getConfig()->get("Content"));
        $form->addButton($this->getConfig()->get("Button1-Category"));
        $form->addButton($this->getConfig()->get("Button2-Category"));
        $form->addButton($this->getConfig()->get("Button3-Category"));
        $form->addButton($this->getConfig()->get("Button4-Category"));
        $form->addButton($this->getConfig()->get("Exit-Category"));
        $form->sendToPlayer($sender);
    }
    
    public function rank($sender){
        $form = new SimpleForm(function (Player $sender, $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                $this->rank1($sender);
                break;
                case 1:
                $this->rank2($sender);
                break;
                case 2:
                $this->rank3($sender);
                break;
                case 3:
                $this->rank4($sender);
                break;
                case 4:
                $this->rank5($sender);
                break;
                case 5:
                $this->openHelper($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("Title-Rank"));
        $form->setContent($this->getConfig()->get("Content-Rank"));
        $form->addButton($this->getConfig()->get("Rank1-Category"));
        $form->addButton($this->getConfig()->get("Rank2-Category"));
        $form->addButton($this->getConfig()->get("Rank3-Category"));
        $form->addButton($this->getConfig()->get("Rank4-Category"));
        $form->addButton($this->getConfig()->get("Rank5-Category"));
        $form->addButton($this->getConfig()->get("Button-Category"));
        $form->sendToPlayer($sender);
    }
    
    public function rank1($sender){
        $form = new SimpleForm(function (Player $sender, $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                $this->rank($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("Title-Rank1"));
        $form->setContent($this->getConfig()->get("Content-Rank1"));
        $form->addButton($this->getConfig()->get("Back-Rank1"));
        $form->sendToPlayer($sender);
    }
    
    public function rank2($sender){
        $form = new SimpleForm(function (Player $sender, $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                $this->rank($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("Title-Rank2"));
        $form->setContent($this->getConfig()->get("Content-Rank2"));
        $form->addButton($this->getConfig()->get("Back-Rank2"));
        $form->sendToPlayer($sender);
    }
    
    public function rank3($sender){
        $form = new SimpleForm(function (Player $sender, $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                $this->rank($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("Title-Rank3"));
        $form->setContent($this->getConfig()->get("Content-Rank3"));
        $form->addButton($this->getConfig()->get("Back-Rank3"));
        $form->sendToPlayer($sender);
    }
    
    public function rank4($sender){
        $form = new SimpleForm(function (Player $sender, $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                $this->rank($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("Title-Rank4"));
        $form->setContent($this->getConfig()->get("Content-Rank4"));
        $form->addButton($this->getConfig()->get("Back-Rank4"));
        $form->sendToPlayer($sender);
    }
    
    public function rank5($sender){
        $form = new SimpleForm(function (Player $sender, $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                $this->rank($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("Title-Rank5"));
        $form->setContent($this->getConfig()->get("Content-Rank5"));
        $form->addButton($this->getConfig()->get("Back-Rank5"));
        $form->sendToPlayer($sender);
    }
    
    public function info($sender){
        $form = new SimpleForm(function (Player $sender, $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                $this->openHelper($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("Title-Info"));
        $form->setContent($this->getConfig()->get("Content-Info"));
        $form->addButton($this->getConfig()->get("Button-Info"));
        $form->sendToPlayer($sender);
    }
    
    public function rules($sender){
        $form = new SimpleForm(function (Player $sender, $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                $this->openHelper($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("Title-Rules"));
        $form->setContent($this->getConfig()->get("Content-Rules"));
        $form->addButton($this->getConfig()->get("Button-Rules"));
        $form->sendToPlayer($sender);
    }
    
    public function staff($sender){
        $form = new SimpleForm(function (Player $sender, $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                $this->openHelper($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("Title-Staff"));
        $form->setContent($this->getConfig()->get("Content-Staff"));
        $form->addButton($this->getConfig()->get("Button-Staff"));
        $form->sendToPlayer($sender);
    }
}

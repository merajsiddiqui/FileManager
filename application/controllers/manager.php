<?php

/**
 * Manager Clas that actually manages the file
 * 
 * @author Meraj Ahmad Siddiqui
 */

class Manager extends Controller {

	protected $_base_directory = "/var/www/html/filemanager/";

    public function createfolder($folder){
    	if(!file_exists($this->_base_directory.$folder)){
    		mkdir($this->_base_directory.$folder, 0777, true);
    	}else{
    		return false;
    	}
    }

    public function createfile($name){
    	if(!file_exists($this->_base_directory.$name)){

    	}else{
    		return false;
    	}
    }

    public function directory($dir){
    	$result = scandir($this->_base_directory.$dir);
    	$directories = array();
    	$files = array();
    	foreach($res in $result){
    		if(is_dir($res)){
    			$directories= $res;
    		}else{
    			$files =$res;
    		}
    	}
    }

    



}

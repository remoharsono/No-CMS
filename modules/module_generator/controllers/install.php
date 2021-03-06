<?php

class Install extends CMS_Module_Installer{
	protected $DEPENDENCIES = array();
	protected $NAME = 'gofrendi.noCMS.moduleGenerator';
	
	//this should be what happen when user install this module
	protected function do_install(){
		$this->remove_all();
		$this->build_all();
	}
	//this should be what happen when user uninstall this module
	protected function do_uninstall(){
		$this->remove_all();
	}
	
	private function remove_all(){
		$this->remove_navigation("module_generator_index");
	}
	
	private function build_all(){
		$this->add_navigation("module_generator_index","Module Generator", $this->cms_module_path()."/module_generator/index", 4, 'main_management');
	}
}
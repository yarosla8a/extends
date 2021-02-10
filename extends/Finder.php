<?php
require_once "Worker .php";
class Finder extends Worker  {
	public static function find($email){

		foreach (self::$workers as $worker) {
			if($worker['email']!==$email){
				
   				continue;
			}else{
				print_r($worker);

				
			}
		}
	}
}


	
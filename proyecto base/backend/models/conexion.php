<?php

class Conexion{

	public function connect(){

		$link = new PDO("mysql:host=localhost;dbname=cms","root","");
		return $link;

	}

}
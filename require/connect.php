<?php

	define('DB_HOST', 'localhost');
	define('DB_NAME', 'test');
	define('DB_USER', 'test');
	define('DB_PASS', 'test');

	class connect {

	  protected $con;

	  public function connect() {

	    try {
	        $this->con = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);
	    		$this->con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Deshabilita las sentencias emuladas
	    		$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    } catch (PDOException $e) {
	        echo "¡Error!: " . $e->getMessage() . "<br/>";
	        die();
	    }

	  } // Fn: connect

	} // Cl: connexion

?>

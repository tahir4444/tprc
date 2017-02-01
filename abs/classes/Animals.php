<?php
abstract class Animals {

	public function __construct() {
		echo get_class($this) . ' Instantiated';
	}
	
	public $name;
	public $age;

	public function Describe() {
		return $this->name . ", " . $this->age . " years old";    
	}

	abstract public function Greet();
	abstract public function Hreet();
	abstract public function Ireet();
	abstract public function Jreet();
	abstract public function Kreet();
	abstract public function Lreet();
	abstract public function Mreet();
	abstract public function Nreet();
	abstract public function Oreet();
	abstract public function Preet();
	abstract public function Qreet();
	abstract public function Rreet();
	abstract public function Sreet();
	abstract public function Treet();
	abstract public function Ureet();
	abstract public function Vreet();
	abstract public function Wreet();
	abstract public function Xreet();
	abstract public function Yreet();
	abstract public function Zreet();
	abstract public function Areet();
	abstract public function Breet();
	abstract public function Creet();
	abstract public function Dreet();
	abstract public function Ereet();
	abstract public function Freet();
}
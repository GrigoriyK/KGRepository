<?php
interface Ispeak {
	public function say();
}
 
class Boy implements Ispeak {
	private $age;
	public $name;
	const boy=true;
	
	public function__construct($name){
		$this->name=$name;	
	}
	
	public function setAge($age){
		$this->age = $age;
	}
	public function getAge() {
		return $this->age;
	}
	
	public function say() {
		echo 'Hello, I am boy';
	}		
 
}
 
class Girl extends Boy{
	const girl=true; 
	
	public function say() {
		echo 'Hello, I am girl';
	}		
 
}

$boys=array("Tom","Jon","Bil","Sam","Den");
$girls=array("Vika","Anna","Tina","Sara","Masha");


for($i=0;$i<5;$i++){
	$BoyName=$boys[rand(0,4)]
	$children[] = new Boy("$BoyName");

}

for($i=0;$i<5;$i++){
	$GirlName=$girls[rand(0,4)];
	$children[]=new Girl("$GirlName");	
}

?>
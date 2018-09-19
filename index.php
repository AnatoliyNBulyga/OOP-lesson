<?php 

// Persone 1
/*$persone_name = 'Peter';
$persone_spaciality = 'Programmer';
$persone_age = 25;

function person1_hello($name, $spec, $age) {
	echo "Hello! My name is $name. I am $spec and $age years old.";
}

person1_hello($persone_name, $persone_spaciality, $persone_age);
echo "<br>";
echo "<br>";*/

// Persone 2
/*$person2_name = 'Jane';
$persone_spaciality = 'Web-designer';
$persone_age = 23;

function person2_hello($name, $spec, $age) {
	echo "Hello! My name is $name. I am $spec and $age years old.";
}

person2_hello($persone_name, $persone_spaciality, $persone_age);*/

class Persone {
	public $name;
	public $speciality;
	public $age;

	public function __construct($name, $spec, $age){
		$this->name = $name;
		$this->speciality = $spec;
		$this->age = $age;
	}

	public function greeting() {
		echo "Hello! My name is ".$this->name.". I am ".$this->speciality." and ".$this->age." years old.";
	}
}

$person1 = new Persone('Peter', 'programmer', '25');

$person2 = new Persone('Jane', 'web-designer','23');

echo $person1->name;
echo "<br><br>";
$person1->greeting();
echo "<br><br>";
echo $person2->name;
echo "<br><br>";
$person2->greeting();

$person1->name = 'Peter';
$person1->speciality = 'Programmer';
$person1->age = 25;

// $persone1->greeting($persone1->name, $persone1->speciality, $persone1->age);
// $person1->greeting();

/*echo $persone1 -> name;
echo $persone1 -> speciality;
echo $persone1 -> age;*/

 ?>
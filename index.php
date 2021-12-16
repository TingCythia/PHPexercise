<?php
/* 	$color =array('red','blue','green');
	print_r($color);

	echo '<p>' . $color[1] .'</p>';

	$color[]='yellow';

	print_r ($color);

	// Associate arrays
	$home_towns = array(
		'Joe' => 'Middletown, NY',
		'Erin' => 'West Chester, PA'
	);

	echo '<pre>';
	print_r($home_towns);

	echo '<p>' . $home_towns['Joe'] . '</p>' */
	
	// multidimentional array
/* 	$brothers = array(
		'Joe' => array(
        'Job' => 'teacher',
		'age' => '34',
		'state' => 'PA',
		),
		'Paul' => array(
		'Job' => 'logistics',
		'age' => '32',
		'state' => 'NY',
		),
	);

	echo '<pre>';
	print_r( $brothers );
	echo '</pre>';

	echo '<p>' . $brothers['Paul']['age'] . '</p>'; */

/* function my_sort($a,$b)
{
if ($a==$b) return 0;
  return ($a<$b)?-1:1;
}

$a=array(-4,2,8,6);
usort($a,"my_sort");

$arrlength=count($a);
for($x=0;$x<$arrlength;$x++)
  {
  echo $a[$x];
  echo "<br>";
  } */

  class Person {
	  var $name;
	  var $age;
	  var $birthday = false; // any person birthday we set as false first and use it later

	  function __construct( $name, $age ) {
		  $this->name = $name;
		  $this->age = $age;
	  }

	  public function get_name(){
		  return $this->name;
	  }

	  public function get_age(){
		  return $this->age;
	  }

	  public function set_name( $new_name ){
		  $this->name = $new_name;
	  }

	  public function set_birthday ( $b ){
		 $this->age = $b;
		 $this->update_age();
	  }

	  private function update_age() {
		  $this->age = ($this->birthday) ? ++$this->age : $this->age;
	  }

  }

  $joe = new Person ( 'joe', 35 );
  $rob = new Person ( 'rob', 30 );

  echo $joe->get_name() . '<br/>';
  echo $rob->get_name() . '<br/>';
  
  $joe->set_birthday(true);
  echo $joe->get_age();
 ?>



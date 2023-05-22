
<?php
class Student {
  // Properties
  public $name;
  public $Rollno;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_roll($Rollno) {
    $this->Rollno = $Rollno;
  }
  function get_roll() {
    return $this->Rollno;
  }
}

$detail = new Student();
$detail->set_name('Rasika');
$detail->set_roll('4');
echo "Name: " . $detail->get_name();
echo "<br>";
echo "Roll Number: " .  $detail->get_roll();
?>
 

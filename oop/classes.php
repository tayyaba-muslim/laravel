<h1>single value insert(OOp)</h1>
<?php
//classes first work for oop

class names{
    public $a, $b;
public function display(){
    // echo "$this->a and $this->b";
    echo"welcome to my website </br>";
    echo "$this->a and $this->b";
}    
}
//single value insert
$object= new names();
$object->a="sawera";
$object->b="ansari";
$object->display();
// multiple values insert
// $object->a="shibra";
// $object->b="ansari";
// $object->display();
?>
<!-- form -->
<br>
<br>
<h1>form (OOP)</h1>
<form action="classes.php" method="POST">
<label for="fname" class="form-label">first name</label>
<input type="text" class="form-control" name="fname">
<br>
<br>
<label for="lname" class="form-label">last name</label>
<input type="text" class="form-control" name="lname">
<br>
<br>
<button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
</form>
<?php
if(isset($_POST['submit'])){

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
class submit{
    public $name, $kname;
public function display(){
    // echo "$this->a and $this->b";
    echo "$this->name and $this->kname <br><br>";
}    
}
$object= new submit();
$object->name = $firstname;
$object->kname = $lastname;
$object->display();
}
?>
<h1>constructor function</h1>
<?php
//constructor function for multiple values
class Persons{
    public function __construct($fname,$lname){
        echo "your firstname is: $fname <br>
              your second name is: $lname<br>";
    }
}
$firstperson= new Persons("sawera","ansari");
$secondperson= new Persons("shibra","ansari");
$thirsperson= new Persons("midhat","ansari");

?>
<h1>with age, email</h1>
<?php
//constructor function for multiple values
class Per{
    public function __construct($fname,$lname,$age,$email){
        echo "your firstname is: $fname <br>
              your second name is: $lname<br>
              your age is: $age<br>
              your email is: $email<br>";
            
    }
}
$firstperson= new Per("sawera","ansari","19","saw@gmail.com");
$secondperson= new Per("shibra","ansari","22","shib@gmail.com");
$thirsperson= new Per("midhat","ansari","26","mid@gmail.com");

?>
<h1>inheritance</h1>
<?php
// inheritance 
class Parents{
    public function display_parent(){
        echo"parent method <br>";
    }
}
class childs extends Parents{
    public function display_child(){
        echo "child method <br>";
    }
}
$parent= new Parents();
$parent->display_parent();
$parent= new childs();
$parent->display_child();
?>
<?php
// inheritance (values insert)
class Parents1{
    public $father;
    public function display_parent(){
        echo"i am your $this->father <br>";
    }
}
class child extends Parents1{
    public function display_child(){
        echo "child method";
    }
}
$parent= new Parents1();
$parent->father= "father";
// $parent->display_parent();
$child= new child();
$child->father= "child";
$child->display_parent();
 $parent->display_parent();
?>

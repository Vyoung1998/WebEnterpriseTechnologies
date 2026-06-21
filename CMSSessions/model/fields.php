<!--text is inspired by the Register User section from
Murach, J., Harris, R., & Dlamater, M. (2022). Murach’s PHP and MySQL (A. Boehm & L. Cooper, Eds.; 4th ed.) [Paperback]. Mike Murach & Associates, Inc.
I used this to help me with the classes below. It is modified to be much more simple than their examples to fit
the requirements of this application.
I also used this textbook for the cart/checkout system from their other section on their cart programming.

The following is the object oriented approach to validation.
-->

<?php 
class Field {
    //creating variables
    private $hasError = false; //will only be triggered if problem
    private $value; //fulfilled later

    //constructor (similar to java :D )
    public function __construct(
        private $name,
        private $message = '',
        private $required = true,
    ) { }
    //get functions to get all of the values if needed
    public function getName() {return $this->name;}
    public function getMessage() {return $this->message;}
    public function hasError() {return $this->hasError;}
    public function isEmpty() {return empty($this->value);}

    //set functions so the get functions work
    public function setValue($value) {
        $this->value = $value;
    }

    public function setErrorMessage($message) {
        $this->message = $message;
        $this->hasError = true;
    }

    public function clearErrorMessage(){
        $this->message = '';
        $this->hasError = false;
    }

    public function getHTML() {
        $message = htmlspecialchars($this->message);
        if ($this->hasError()) {
            return '<span class="error">' . $message . '</span>';
        }  else {
            return '<span>' . $message . '</span>';
        }
    }
}//end field class
//add password later when we get this to work

//fields class adds new person with the fields above
class Fields  {
    private $fields = [];
    //adding username field
    public function addField ($name, $message = '', $required = true){
        $field = new Field($name, $message, $required);
        $this->fields[$field->getName()] = $field; 
    }
    public function getField($name){
        return $this->fields[$name];
    }
    public function hasErrors() {
        foreach($this->fields as $field) {
            if ($field->hasError()) { return true;}
        }
        return false;
    }
}//end fields class
//add password when we get this working first
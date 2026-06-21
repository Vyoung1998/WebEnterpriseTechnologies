<!--text is inspired by the Register User section from
Murach, J., Harris, R., & Dlamater, M. (2022). Murach’s PHP and MySQL (A. Boehm & L. Cooper, Eds.; 4th ed.) [Paperback]. Mike Murach & Associates, Inc.
I used this to help me with the classes below. It is modified to be much more simple than their examples to fit
the requirements of this application.
I also used this textbook for the cart/checkout system from their other section on their cart programming.

The following is the object oriented approach to validation.
-->

<?php 

class Validate {
    public $fields;

    //constructor
    public function _construct(){
        $this->fields = new Fields();
}
    //get function
    public function getFields() {
        return $this->fields;
}

//Validate a genertic text field and return the Field Object
    public function text($name, $value, $min =1, $max = 255){

    //get field object and set its value
    $field = $this->fields->getFields($name);
    $field->setValue($value);

    //after this gets to work, add password in here too?

    //check field and set or clear error message
    if ($field->isRequired() && $field->isEmpty()) {
            $field->setErrorMessage('Required.');
    } else if (strlen($value) < $min && !$field->isEmpty()) {
        $field->setErrorMessage('Too Short.');
    } else if (strlen($value) > $max) {
        $field->setErrorMessage('Too Long.');
    } else {
        $field->clearErrorMessage();
    }
    return $field;
} //end text function

//validate a field with a generic pattern
    public function pattern($name, $value, $pattern, $message) {
        //get Field  object and do basic text field check
        $field= $this->text($name, $value); //add password later!

        //if okay after text check, move on to pattern check
        if (!$field->hasError() && !$field->isEmpty()) {
            $match = preg_match($pattern, $value);
            if ($match===false){
                $field->setErrorMessage('Error testing field');
            } else if ($match != 1) {
                $field->setErrorMessage($message);
            } else {
                $field->clearErrorMessage();
            }
        }
    }

//validate password
//this one was completely written by myself, and inspired by the textbook above
//in the textbook, they do a phone number and an email, which we don't do in this assignment
    public function password($name, $value){
    
    //set password from session input as $password variable
    $password = '';
    $_SESSION['password'] = $password;
    
    //get field object and do basic text field check
        //for this assignment, require one capital letter, 3 numbers and one special character
        $field = $this->text($name, $value);
        //check pattern here
        if (!$field->hasError() && !$field->isEmpty()){
            //calling pattern method to verify password
            $pattern = '/^(?=.*[a-z](?=.*[A-Z])(?=.*/ddd)(?=.*[\W_]).{8,}$/';
            if(preg_match($pattern,$password)){
                echo "Valid Password";
            } else {
                echo "Invalid Password";
            }
        }
    }//end password function

//validate username
//this one was completely written by myself, and inspired by the textbook above
    public function username($name, $value){
    
    //set password from session input as $password variable 
    $username = '';
    $_SESSION['username'] = $username;
    
    //get field object and do basic text field check
        //for this assignment, require one capital letter, 3 numbers and one special character
        $field = $this->text($name, $value);
        //check pattern here
        if (!$field->hasError() && !$field->isEmpty()){
            //calling pattern method to verify password
            $pattern = '/^(?=.*[a-z]';
            if(preg_match($pattern,$username)){
                echo "Valid Username";
            } else {
                echo "Invalid Username";
            }
        }
    }//end username function

}
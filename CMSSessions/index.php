<!--the controller for validation
Calls on model folder for both the fields and validate files to check inputs for 'registeruser.php'.
text is inspired by the Register User section from
Murach, J., Harris, R., & Dlamater, M. (2022). Murach’s PHP and MySQL (A. Boehm & L. Cooper, Eds.; 4th ed.) [Paperback]. Mike Murach & Associates, Inc.
I used this to help me with the classes below. It is modified to be much more simple than their examples to fit
the requirements of this application.
I also used this textbook for the cart/checkout system from their other section on their cart programming.

The following program loads everything from fields and validate objects and sees if its valid
uses a switch statement to execute the appropriate action based on the entered information
-->

<?php
//the following code is altered to fit this applications needs and inspired by the textbook above :)
require_once('model/fields.php');
require_once('model/validate.php');

//Add fields with optional message
$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('username');//adding username and password
$fields->addField('password');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'reset';
} else {
    $action = strtolower($action); //checks for input, if there are text it will make lowercase to test it
}

//switch case here to check and test, then respond depending on what happens :)
    switch($action) {
        case 'reset': 
            //reset values for variables
            $username = '';
            $password = '';

            //load view 
            include 'view/register.php';
            break;
        case 'register':
            //Copy form values to local variables
            $username = trim(filter_input(INPUT_POST, 'username'));
            $password = trim(filter_input(INPUT_POST, 'password'));

            //validate
            $validate->text('username', $username);
            $validate->text('password', $password);

            //load appropriate messages based on noErrors
            if ($fields->hasErrors()) {
                include 'registeruser.php'; //sends back to page to start again
            } else {
                include 'home.php';//send home
            }
            break;
    }
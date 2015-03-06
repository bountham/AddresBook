<?php
class Contact
 {
    private $name;
    private $phone_number;
    private $address;

    //delcare --Contructor
    function __construct($first_name, $phone_numbers, $address){
        $this->name = $first_name;
        $this->phone_number = $phone_numbers;
        $this->address = $address;
    }

    //getter
    function getName(){
        return $this->name;
    }
    function getPhoneName(){
        return $this->phonNumber;
    }
    function getAddress(){
        return $this->address;
    }


    //setter
    function setName($new_name){
        $this->name = $new_name;
    }
    function setPhoneName($new_phoneNumber){
        $this->phon_number = $new_phoneNumber;
    }
    function setAddress($new_address){
        $this->address = $new_address;
    }


    //saving function
    function save(){
        array_pusk($_SESSION['list_of_contact'], $this);
    }

    //static method for session
    static function getAll(){
        return $_SESSION['list_of_contact'];
    }

 } //ending class contact

?>

<?php
    class Contact
    {
        private $name;
        //private $phone;
        //private $address;

        function __construct($name)
        {
            $this->name = $name;
            //$this->phone = $phone;
        //    $this->address = $address;

        }


        function setName($new_name)
        {
            $this->name = $new_name;
        }
        // function setPhone($new_phone)
        // {
        //     $this->phone = $new_phone;
        // }
        // function setAddress($new_address)
        // {
        //     $this->address = $new_address;
        // }


        function getName()
        {
            return $this->name;
        }
        // function getPhone()
        // {
        //     return $this->phone;
        // }
        // function getAddress()
        // {
        //     return $this->address;
        // }




        function save()
        {
            array_push($_SESSION['list_of_contact'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_contact'];
        }
        static function deleteAll()
        {
            $_SESSION['list_of_contact'] = array();
        }
    }
?>

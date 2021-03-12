<?php


class Contacts
{
    public $id;
    public $name;
    public $mobileNumber;
    public $homeNumber;
    public $email;
    public $reserveEmail;

    private $conn;

    public function __construct($id, $name, $mobileNumber, $homeNumber, $email, $reserveEmail)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mobileNumber = $mobileNumber;
        $this->homeNumber = $homeNumber;
        $this->email = $email;
        $this->reserveEmail = $reserveEmail;
    }

    public function save()
    {
            if ($this->id > 0) {
                $query = "UPDATE `contacts` set 
                    `name` = '" . $this->name . "', 
                    `mobile_number` = '" . $this->mobileNumber . "', 
                    `home_number` = '" . $this->homeNumber . "', 
                    `email` = '" . $this->email . "', 
                    `reserve_email` = '". $this->reserveEmail . "' where id=" . $this->id . " ";
            } else {
                $query = "INSERT INTO `contacts` (
                    `id`, 
                    `name`, 
                    `mobile_number`, 
                    `home_number`, 
                    `email`, 
                    `reserve_email`) VALUES (
                    null,
                    '" . $this->name . "', 
                    '" . $this->mobileNumber . "', 
                    '" . $this->homeNumber . "', 
                    '" . $this->email . "', 
                    '" . $this->reserveEmail . "')";
            }
            mysqli_query($this->conn, $query);
    }
}
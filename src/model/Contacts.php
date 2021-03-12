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

    public function __construct(
        $id = null,
        $name = null,
        $mobileNumber = null,
        $homeNumber = null,
        $email = null,
        $reserveEmail = null)
    {
        $this->conn = mysqli_connect('localhost', 'root', 'root', 'mytask');

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
            }
            else {
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
                        '" . $this->reserveEmail . "'
                    )";
            }
            mysqli_query($this->conn, $query);
    }

    public function all()
    {
        $result = mysqli_query($this->conn, "SELECT * from contacts ORDER by id desc");
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $result = mysqli_query($this->conn, "select * from contacts where id = $id");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($one);
    }

    public function deleteById($id)
    {
        mysqli_query($this->conn, "delete from contacts where id = $id");
    }
}
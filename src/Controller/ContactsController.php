<?php


class ContactsController
{
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', 'root', 'mytask');
    }

    public function create()
    {
        $one = [];

        include_once __DIR__ . "/../../views/contacts/form.php";
    }

    public function read()
    {
        $result = mysqli_query($this->conn, "SELECT * from contacts ORDER by id desc");
        $all = mysqli_fetch_all($result,MYSQLI_ASSOC);

        include_once __DIR__ . "/../../views/contacts/list.php";

    }

    public function update()
    {
        $id = (int) $_GET['id'];

        if (empty($id)) die('Undefined ID');

        $result = mysqli_query($this->conn, "select * from contacts where id = $id");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $one = reset($one);

        if (empty($one)) die('Contact not found');

        include_once __DIR__ . "/../../views/contacts/form.php";
    }

    public function delete()
    {
        $id = (int) $_GET['id'];
        mysqli_query($this->conn, "delete from contacts where id = $id");

        return $this->read();
    }

    public function save()
    {
        if (!empty($_POST))
        {
            $id = intval($_POST['id']);
            $name = ($_POST['name']);
            $mobileNumber = $_POST['mobile_number'];
            $homeNumber = $_POST['home_number'];
            $email = $_POST['email'];
            $reserveEmail = $_POST['reserve_email'];

            $contacts = new Contacts($id, $name, $mobileNumber, $homeNumber, $email, $reserveEmail);
            $contacts->save();
        }
        return $this->read();
    }
}
<?php

include_once __DIR__ . "/../model/Contacts.php";

class ContactsController
{
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', 'root', 'mytask');
    }

    public function create()
    {
        include_once __DIR__ . "/../../views/contacts/form.php";
    }

    public function read()
    {
        $all = (new Contacts())->all();
        include_once __DIR__ . "/../../views/contacts/list.php";
    }

    public function update()
    {
        $id = (int) $_GET['id'];

        if (empty($id)) die('Undefined ID');

        $one = (new Contacts())->getById($id);

        if (empty($one)) die('Contact not found');

        include_once __DIR__ . "/../../views/contacts/form.php";
    }

    public function delete()
    {
        $id = (int) $_GET['id'];
        (new Contacts())->deleteById($id);

        return $this->read();
    }

    public function save()
    {
        if (!empty($_POST))
        {
            $contacts = new Contacts(
                intval($_POST['id']),
                ($_POST['name']),
                $_POST['mobile_number'],
                $_POST['home_number'],
                $_POST['email'],
                $_POST['reserve_email']
        );
            $contacts->save();
        }
        return $this->read();
    }
}
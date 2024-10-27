<?php
require_once 'app/models/User.php';

class UserController
{
    private $userModel;

    public function __construct($dbConnection)
    {
        $this->userModel = new User($dbConnection);
    }

    public function show()
    {
        $users = $this->userModel->getAllUsers();
        require_once 'app/views/userView.php';
    }

}


?>
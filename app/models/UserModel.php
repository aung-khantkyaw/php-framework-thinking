<?php

class UserModel
{
    private $dbModel;

    public function __construct()
    {
        // Establish a database connection
        $this->dbModel = new DBModel();
    }

    public function register($username, $password)
    {
        // Hash the password before storing it in the database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $data = [
            'username' => $username,
            'password' => $hashedPassword
        ];
        $this->dbModel->insert('auth', $data);
    }

    public function login($username, $password)
    {
        // Retrieve user data from the database based on the username

        $user = fetchAssoc($this->dbModel->selectWhere('auth', "username = '$username'"));

        // Verify the password
        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            return true; // Authentication successful
        } else {
            return false; // Authentication failed
        }
    }

    public function logout()
    {
        // Destroy the session to log the user out
        session_destroy();
    }
}

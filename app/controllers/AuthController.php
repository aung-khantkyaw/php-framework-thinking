<?php

class AuthController
{
    private $userModel;

    public function __construct()
    {
        // Create an instance of the UserModel
        $this->userModel = new UserModel();
    }

    public function register()
    {
        // Handle registration form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validate input (e.g., check for unique username, strong password)

            // Register the user
            $this->userModel->register($username, $password);

            // Redirect to login page or dashboard
            header('Location: /');
            exit;
        }

        // Display registration form
        view('register');
    }

    public function login()
    {
        // Handle login form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validate input and authenticate user
            if ($this->userModel->login($username, $password)) {
                // Redirect to the dashboard
                header('Location: /');
                exit;
            } else {
                // Display login form with an error message
                // $errorMessage = 'Invalid username or password.';
                view('login');
            }
        } else {
            // Display login form
            view('login');
        }
    }

    public function logout()
    {
        // Handle logout
        $this->userModel->logout();
        // Redirect to the login page
        header('Location: /login');
        exit;
    }
}

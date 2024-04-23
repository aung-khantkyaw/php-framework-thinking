<?php

class PageController
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard($matches)
    {
        if (empty($matches['uri'])) {
            return view('dashboard');
        } elseif ($matches['uri'] == 'profile') {
            return dashboardView('profile');
        }
    }
}

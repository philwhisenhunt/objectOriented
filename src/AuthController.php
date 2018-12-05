<?php namespace Acme;

class AuthController {
    public function register()
    {
        $user = User::create();
        return Redirect;
    }
}
<?php namespace Acme;

class AuthController {

    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }



    public function register()
    {
        $this->$registration->execute([], $this);
    }

    public function userRegisteredSuccessfully()
    {

    }

    public function userRegisteredFailed()
    {

    }
}
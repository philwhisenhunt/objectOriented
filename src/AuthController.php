<?php namespace Acme;

class AuthController {

    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }



    public function register()
    {
        $this->registration->execute([], $this);

    }

    public function userRegisteredSuccessfully()
    {
        var_dump('created successfully. Redirect somewhere');
    }

    public function userRegisteredFailed()
    {
        var_dump('created unsuccessfully. Redirect back');

    }
}

<?php
interface Logger {}

class LogToFile {
    public function execute($message)
    {
        var_dump('log the message to a file');
    }
}

class LogToDatabase {
    public function execute($message)
    {
        var_dump('log the message to a database');
    }
}

//...
class UsersController {

    protected $logger;
    public function __construct(LogToFile $logger)
    {

    }
    public function show()
    {
        $user = 'JohnDoe';

        //log this information 
        $this->logger->execute($user);
    }
}

$controller = new UsersController(new LogToFile);
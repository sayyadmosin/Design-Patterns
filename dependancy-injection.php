<?php
//dependancy Injection


class logger{

public function log($message)
{
    echo "Logging message:$message";
}

}


class userProfile{

    private $logger;

    public function __construct(logger $logger)
    {
        $this->logger=$logger;
    }


    public function createUser()
    {
        $this->logger->log("User Created");
    }

    public function updateUser()
    {
        $this->logger->log("User Updated");
    }

    public function deleteUser()
    {
        $this->logger->log("user Deleted");
    }
    
}

$logger= new logger();

$userProfile= new userProfile($logger);

$userProfile->createUser();
echo "<br>";
$userProfile->updateUser();
echo "<br>";
$userProfile->deleteUser();
echo "<br>";


?>
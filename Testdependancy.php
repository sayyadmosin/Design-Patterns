<?php



class dbconn {

public function connect() 
{
    echo "Database Connected";
}

}


class checkb {

    private $connection;

    public function __construct(dbconn $connection) // applying injection
    {
        $this->connection=$connection;
    }

    public function showconnection()
    {

        $this->connection->connect();

    }

 }

 $dbcon =new dbconn();

 $checkdb=new checkb($dbcon); // injecting obj here in checkdb class

 $checkdb->showconnection();


?>
<?php 

declare(strict_types=1);

interface DBConnectionInterface
{
    public function connect();
}

class MySQLConnection implements DBConnectionInterface
{
    public function connect()
    {}
}

class OracleConnection implements DBConnectionInterface
{
    public function connect()
    {}
}

class InMemoryMysql implements DBConnectionInterface
{
    public function connect()
    {}
}

class PasswordReminderRefatored
{
    private $dbConnection;
    
    public function __construct(DBConnectionInterface $dbConnection)
    {       
        $this->dbConnection = $dbConnection;           
    }
    
    // Faz alguma coisa
}

new PasswordReminderRefatored(new MySQLConnection());
new PasswordReminderRefatored(new OracleConnection());
new PasswordReminderRefatored(new InMemoryMysql());
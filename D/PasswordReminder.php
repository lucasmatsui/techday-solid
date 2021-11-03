<?php 

declare(strict_types=1);

class PasswordReminder
{
    private $dbConnection;
    
    public function __construct()
    {       
        $this->dbConnection = new MySQLConnection();           
    }
    
    // Faz alguma coisa
}

class PasswordReminderInjection
{
    private $dbConnection;
    
    public function __construct(MySQLConnection $dbConnection)
    {       
        $this->dbConnection = $dbConnection;           
    }
    
    // Faz alguma coisa
}

new PasswordReminderInjection(new MySQLConnection());
new PasswordReminderInjection(new OracleConnection());
<?php
use Dframe\Session;
use Dframe\Messages;
use Dframe\Token;
use Dframe\Database\Database;

include_once dirname(__DIR__).'/web/config.php';
class Bootstrap
{
    
    public function __construct(){
        try {
            if(!empty(DB_HOST)){
                $dbConfig = array(
                    'host' => DB_HOST, 
                    'dbname' => DB_DATABASE, 
                    'username' => DB_USER, 
                    'password' => DB_PASS,
                );
                $this->db = new Database($dbConfig);
                $this->db->setErrorLog(setErrorLog); // Debugowanie
            }

        }catch(DBException $e) {
            echo 'The connect can not create: ' . $e->getMessage();
            exit();
        }

        $this->session  = new Session('session_name'); // Best to set projectName
        $this->msg = new Messages($this->session);     // Default notify class
        $this->token  = new Token($this->session);     // Default csrf token

        return $this;
    }

}
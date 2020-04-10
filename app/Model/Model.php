<?php
/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

namespace Model;

use Dframe\Database\Database;
use Exception;
use PDO;

/**
 * This class includes methods for models.
 *
 * @abstract
 */
abstract class Model extends \Dframe\Model
{
    /**
     * @var Database
     */
    protected $db;

    /**
     * Start function
     *
     * @return void
     */
    public function start()
    {
        try {
            if (!empty(DB_HOST)) {
                // Debug Config
                $config = [
                    'logDir' => APP_DIR . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR,
                    'options' => [
                        //PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        //PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
                        // Set pdo error mode silent
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        // If you want to Show Class exceptions on Screen, Uncomment below code
                        //PDO::ATTR_EMULATE_PREPARES => false, // Use this setting to force PDO to either always emulate prepared statements (if TRUE), or to try to use native prepared statements (if FALSE).
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                        // Set default pdo fetch mode as fetch assoc
                    ]
                ];
                $dsn = [
                    'host' => DB_HOST,
                    'dbname' => DB_DATABASE,
                    'dbtype' => 'mysql'
                ];
                $this->db = new Database($dsn, DB_USER, DB_PASS, $config);
                $this->db->setErrorLog(false); // Debug
            }
        } catch (Exception $e) {
            echo 'The connect can not create: ' . $e->getMessage();
            exit();
        }
    }
}

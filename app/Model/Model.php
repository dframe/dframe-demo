<?php

/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

namespace Model;

use Dframe\Database\Database;

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
                $dbConfig = [
                    'host' => DB_HOST,
                    'dbname' => DB_DATABASE,
                    'username' => DB_USER,
                    'password' => DB_PASS,
                ];

                $this->db = new Database($dbConfig);
                $this->db->setErrorLog(setErrorLog); // Debugowanie
            }
        } catch (\PDOException $e) {
            echo 'The connect can not create: ' . $e->getMessage();
            exit();
        }
    }
}

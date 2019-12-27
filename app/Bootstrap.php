<?php

/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

use Dframe\Messages;
use Dframe\Router;
use Dframe\Session;
use Dframe\Token;

require_once __DIR__ . '/../web/config.php';

/**
 * Here is a description of what this file is for.
 *
 * @author First Name <adres@email>
 */
class Bootstrap
{
    /**
     * @var array
     */
    public $providers;

    /**
     * @var Session
     */
    public $session;

    /**
     * @var Token
     */
    public $token;

    /**
     * Bootstrap constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        $this->providers = [
            'core' => [
                'router' => Router::class
            ]
        ];

        $this->session = new Session('session_name'); // Best to set projec
        $this->msg = new Messages($this->session);     // Default notify cl
        $this->token = new Token($this->session);     // Default csrf token

        return $this;
    }
}

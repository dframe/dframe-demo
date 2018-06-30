<?php

/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

use Dframe\Session;
use Dframe\Messages;
use Dframe\Token;


require_once dirname(__DIR__) . '/web/config.php';

/**
 * Here is a description of what this file is for.
 *
 * @author First Name <adres@email>
 */

class Bootstrap
{

    public function __construct()
    {

        $this->providers['core'] = [
            'router' => \Dframe\Router::class,
        ];

        $this->providers['baseClass'] = [
            'session' => \Dframe\Session::class, // Best to set projec
            'msg' => \Dframe\Messages::class,     // Default notify cl
            'token' => \Dframe\Token::class,     // Default csrf token
        ];

        $this->providers['modules'] = [
        ];

        return $this;
    }

}

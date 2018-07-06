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

        $this->session = new \Dframe\Session('session_name'); // Best to set projec
        $this->msg = new \Dframe\Messages($this->session);     // Default notify cl
        $this->token = new \Dframe\Token($this->session);     // Default csrf token

        return $this;
    }

}

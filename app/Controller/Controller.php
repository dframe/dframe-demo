<?php

/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

namespace Controller;

/**
 * Class Controller
 *
 * @package Controller
 */
abstract class Controller extends \Dframe\Controller
{
    /**
     * Initial function call working like __construct
     *
     * @return void
     */
    public function start()
    {
        // For example you can check Auth
    }
}

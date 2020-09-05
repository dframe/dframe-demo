<?php

/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

namespace View;

/**
 * Here is a description of what this file is for.
 *
 * @author First Name <adres@email>
 */

use Dframe\View\SmartyView;

/**
 * Class View
 *
 * @package View
 */
abstract class View extends \Dframe\View\View
{
    /**
     * @var SmartyView
     */
    public $view;

    /**
     * Constructor
     */
    public function start()
    {
        $this->view = new SmartyView();
    }
}

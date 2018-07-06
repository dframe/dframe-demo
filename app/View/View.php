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

abstract class View extends \Dframe\View
{

    public function start()
    {
        $this->view = new \Dframe\View\SmartyView();
    }

}
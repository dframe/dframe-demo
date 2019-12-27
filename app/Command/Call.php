<?php

/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

namespace Command;

use Dframe\Cli\Command;

/**
 * Here is a description of what this file is for.
 *
 * @author First Name <adres@email>
 */
class CallCommand extends Command
{
    /**
     * @param string $first
     * @param string $second
     */
    public function help($first = '', $second = '')
    {
        echo 'This is example call Command from cli' . PHP_EOL;
        echo 'Args: ' . $first . ', ' . $second;
    }
}

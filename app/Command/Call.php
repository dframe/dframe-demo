<?php

/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

namespace Command;

use Dframe\Console\Command;
use Dframe\Console\InputInterface;
use Dframe\Console\OutputInterface;

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
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $options = $input->getOptions();
        $output->writeln('Example ' . json_encode($options));
    }
}

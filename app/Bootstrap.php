<?php
/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

use Dframe\Router\Router;

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

        return $this;
    }
}

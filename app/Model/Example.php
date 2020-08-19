<?php

/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

namespace Model;

/**
 * Here is a description of what this file is for.
 *
 * @author First Name <adres@email>
 */
class ExampleModel extends Model
{
    /**
     * Example function
     *
     * @return array
     */
    public function example()
    {
        $results = []; //Mysql query results
        return $this->methodResult(true, ['data' => $results]);
    }
}

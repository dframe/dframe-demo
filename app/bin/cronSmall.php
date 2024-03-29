<?php

use Dframe\Cron\Task;
use Dframe\Router\Response;

set_time_limit(0);
ini_set('max_execution_time', "0");
date_default_timezone_set('Europe/Warsaw');

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../web/config.php';

/**
 * Self Anonymous Cron class
 */
return (new class () extends Task {
    /**
     * @return Response
     */
    public function init()
    {
        try {
            $lockTime = $this->lockTime('Mail', 59);
        } catch (Exception $e) {
            return Response::renderJSON(['code' => 200, 'message' => $e->getMessage()]);
        }

        if ($lockTime) {
            /**
             * Your Code
             */
            return Response::renderJSON(['code' => 200, 'message' => 'Cron Complete']);
        }

        return Response::renderJSON(['code' => 403, 'message' => 'Cron in Lock'])->status(403);
    }
}
)->init()->display();

<?php
set_time_limit(0);
ini_set('max_execution_time', 0);
date_default_timezone_set('Europe/Warsaw');

require_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../../web/config.php';

/**
 * Self Aonymous Cron class
 */
return (new class() extends \Dframe\Cron\Task {
    public function init()
    {
        $this->dirLog = __DIR__ . '/../View/cache/logs/cronSmall.txt';

        if (file_exists($this->dirLog) and filemtime($this->dirLog) + 59 > time()) {
            echo filemtime($this->dirLog) . "\n\r";
            echo time() . "\n\r";
            die('Time Limit. Max 59 request on seconds.');
        }

        $this->mailCron();
    }

    private function mailCron()
    {
        // Example Cron for Mail
        echo '#Example Updating mailCron' . "\n\r";
        // $mailModel = $this->loadModel('Mail');
        // $mailModel->sendMails();
    }
}
)->init();

<?php

namespace View;

/**
 * Class IndexView
 *
 * @package View
 */
class IndexView extends View
{
    /**
     * Initial function call working like __construct
     *
     * @return void
     */
    public function init()
    {
        if (isset($this->router)) {
            $this->assign('router', $this->router);
        }
    }
}

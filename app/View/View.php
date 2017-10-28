<?php
namespace View;

abstract class View extends \Dframe\View
{

    public function __construct($baseClass)
    {
        $this->setView(new \Dframe\View\SmartyView());
        parent::__construct($baseClass);
    }

}

<?php

/**
 * Project Name
 * Copyright (c) Firstname Lastname
 *
 * @license http://yourLicenceUrl/ (Licence Name)
 */

namespace Controller;

use Dframe\Config\Config;
use Dframe\Router\Response;

/**
 * Here is a description of what this file is for.
 *
 * @author First Name <adres@email>
 */
class PageController extends Controller
{
    /**
     * Initial function call working like __construct
     *
     * @return void
     */
    public function init()
    {
    }

    /**
     * Error function
     *
     * @param $code
     *
     * @return Response
     */
    public function error($code)
    {
        $view = $this->loadView('Index');

        $errorsTypes = ['404'];
        if (!isset($code) or !in_array($code, $errorsTypes)) {
            return $this->router->redirect(':task/:action?task=page&action=index');
        }

        return Response::create($view->fetch('errors/' . $code))->status($code);
    }

    /**
     * Index function
     *
     * @return Response
     */
    public function index()
    {
        $view = $this->loadView('Index');

        $modelExample = $this->loadModel('Example');
        $view->assign('contents', 'Example assign');

        return $view->render('index');
    }

    /**
     * ResponseExample function
     *
     * @return Response
     */
    public function responseExample()
    {
        $view = $this->loadView('Index');
        $view->assign('contents', 'Example assign');

        return Response::create($view->fetch('index'));
    }

    /**$patchController
     * Json function
     *
     * @return Response
     */
    public function json()
    {
        return Response::renderJSON(['code' => 200, 'data' => []]);
    }

    /**
     * Catch-all method for requests that can't be matched.
     *
     * @param string  $method
     * @param         $test
     *
     * @return Response
     */
    public function __call($method, $test)
    {
        $smartyConfig = Config::load('view/smarty');
        $view = $this->loadView('Index');

        $patchController = $smartyConfig->get(
            'setTemplateDir',
            APP_DIR . 'View/templates'
        ) . '/page/' . htmlspecialchars($_GET['action']) . $smartyConfig->get('fileExtension', '.html.php');

        if (!file_exists($patchController)) {
            return $this->router->redirect(':task/:action?task=page&action=index');
        }

        return Response::create($view->fetch('page/' . htmlspecialchars($_GET['action'])));
    }
}

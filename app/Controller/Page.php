<?php
namespace Controller;
use Dframe\Config;
use Dframe\Router\Response;

class PageController extends \Controller\Controller
{
    /** 
     * Dynamiczny loader stron wykrywa akcje jako plik i stara sie go za ładować
     */
    public function init()
    {
        if(method_exists($this, $_GET['action'])) { // Skip dynamic page if method in controller exist
            return;
        }

        $smartyConfig = Config::load('view/smarty');
        $view = $this->loadView('Index');

        $patchController = $smartyConfig->get('setTemplateDir', APP_DIR.'View/templates').'/page/'.htmlspecialchars($_GET['action']).$smartyConfig->get('fileExtension', '.html.php');
        
        if (!file_exists($patchController)) {  
            return $this->router->redirect('page/index');
        }

        return Response::create($view->fetch('page/'.htmlspecialchars($_GET['action'])));
        
    }

    public function error()
    {
        $view = $this->loadView('Index');

        $errorsTypes = array('404');
        if(!isset($_GET['type']) OR !in_array($_GET['type'], $errorsTypes)){
            return $this->router->redirect('page/index');
        }
        return Response::create($view->fetch('errors/'.$_GET['type']))->status('404');
        
    }

    public function index() 
    {
        $view = $this->loadView('Index');
        $view->assign('contents', 'Example assign');
        return $view->render('index');
    }


    public function responseExample() 
    {
        $view = $this->loadView('Index');
        $view->assign('contents', 'Example assign');
        return Response::create($view->fetch('index'));
    }


    public function json() 
    {
        $view = $this->loadView('Index');
        return $view->renderJSON(array('return' => '1')); 
    }

}

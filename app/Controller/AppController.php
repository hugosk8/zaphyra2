<?php

namespace App\Controller;

use Core\Controller\Langue;
use Core\Controller\NavLangue;
use App\App;
use Core\Controller\Controller;

class AppController extends Controller
{

    protected $template = 'default';
    protected $contact_template;
    protected $langue = 'fr';
    protected $recaptcha = "";
    protected $event;
    protected $article;
    protected $categorie;

    public function __construct()
    {
        $this->viewPath = ROOT . '/app/Views/';
        $this->template = 'front/template';
        $this->contact_template = 'front/contact_template';
        $this->recaptcha = URL;
    }

    protected function loadModel($model_name)
    {
        $this->$model_name  =  App::getInstance()->getTable($model_name);
    }
}

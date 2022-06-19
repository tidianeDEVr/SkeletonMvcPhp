<?php
namespace ism\controllers;

use ism\lib\Request;
use ism\lib\Response;
use ism\models\AnnuaireModel;
use ism\lib\AbstractModel;
use ism\lib\AbstractController;

class AnnuaireController extends AbstractController {

    private AbstractModel $model;
    public function __construct(){
        parent::__construct();
        $this->model= new AnnuaireModel();
    }

    public function accueil(){
        $data= $this->model->selectAll();
        $this->render("annuaire/index", ["entreprises"=> $data]);
    }

    public function results(){
        $data= $this->model->selectAll();
        $this->render("annuaire/results", ["entreprises"=> $data]);
    }
}

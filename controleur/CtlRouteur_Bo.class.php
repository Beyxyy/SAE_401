<?php

require "ctlPage.class.php";
require "ctlClient.class.php";
require "ctlAventure.class.php";
require 'ctlCadeaux.class.php';
require 'CtlConnexion.class.php';
require 'CtlPanier.class.php';
require 'CtlResa.class.php';
require 'ctlBo.class.php';

class ctlRouteurBo
{

    

    private $ctlBo;
    private $ctlEscGame;
    private $ctlClient;
    private $ctlCPage;
    private $ctlCadeau;
    private $ctlConnexion;
    private $ctlPanier;
    private $ctlResa;


    public function __construct()
    {
        $this->ctlClient = new ctlClient();
        $this->ctlEscGame = new ctlAventure();
        $this->ctlPage = new ctlPage();
        $this->ctlCadeau= new ctlCadeau();
        $this->ctlConnexion= new ctlConnexion();
        $this->ctlPanier= new ctlPanier();
        $this->ctlResa= new CtlResa();
        $this->ctlBo = new ctlBo();
    }


    public function Routage_Bo(){

        if (isset($_GET["action"])) {
            switch ($_GET["action"]) {
                case 'resa':
                    $this->ctlBo->getResas();
                    break;

                case 'modif_game':
                    $this->ctlBo->modif_game($_GET['game']);
                break;
                case 'new_game':
                    $this->ctlBo->new_game();
                    break;

                case 'client':
                    $this->ctlBo->getClients();
                    break;
                break;

                case 'del_user':
                    $this->ctlBo->del_user($_GET["user"]);
                break;

                case 'game':
                    $this->ctlBo->getGames();
                break;

                case 'modif_game':
                    $this->ctlBo->modif_game($_GET['game']);
                break;
                case 'delete_game':
                    $this->ctlBo->del_game($_GET['game']);
                break;

                default : 
                    $this->ctlPage->Bo();
                    break;


            }}
        else{
            $this->ctlPage->Bo();
        }}
    }


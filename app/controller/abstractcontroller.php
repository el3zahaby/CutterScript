<?php
namespace MVC\Controller;

//includere
use MVC\MODEL\SignModel;
use MVC\LIB\MyFunction;
use MVC\MODEL\UrlModel;
//END includere



class abstractController{
    
    protected $_controller;
    protected $_action;
    protected $_params;
    protected $_Lcode;
    protected $_CAT;
    
    //includere
    public $user_login;
    public $url;
    public $myFunction;
    //END includere
    
    public $Urow;
    public $Lname;
    public $Fname;
    
    
    
            
    function __construct() {
        //includere
        $this->user_login  = new SignModel();
        $this->url  = new UrlModel();
        $this->myFunction  = new MyFunction(); //echo $this->myFunction->functionName();
        //END includere
        
        
        if($this->user_login->is_logged_in()!=""){
            $Ustmt = $this->user_login->runQuery("SELECT * FROM users WHERE u_id=:uid");
            $Ustmt->execute(array(":uid"=>$_SESSION['userSession']));
            $this->Urow = $Ustmt->fetch(\PDO::FETCH_ASSOC);
            $nameOfUser = explode(" ", $this->Urow['u_name']);
            $this->Lname = $nameOfUser[1];
            $this->Fname = $nameOfUser[0];
        }
        
        if(isset($_POST['supnavlogin'])){
            $uemail= $this->myFunction->security_input($_POST['navemail']);
            $upass = $this->myFunction->security_input($_POST['navpass']);
            
            if($this->user_login->login($uemail,$upass)){
                $this->myFunction->redirect('/');
            }
         }
    }
    
    public function NotFoundAction(){
        $this->_view();
    }
    
    public function setController($controllerName) {
        $this->_controller = $controllerName;
    }
    public function setAction($actionName) {
        $this->_action = $actionName;
    }
    public function setParams($params) {
        $this->_params = $params;
    }
    public function setCode($code) {
        $this->_Lcode = $code;
    }
    public function setCategory($code) {
        $this->_CAT = $code;
    }
    protected function _view(){
        require_once  headerV_PATH;
        if($this->_action == \MVC\LIB\FrontController::NOT_FOUND_ACTION){
            require_once  VIEWS_PATH . 'notfound' . DS .'notfound.view.php';
        }  else {
            $view = VIEWS_PATH . $this->_controller . DS .$this->_action .'.view.php';
            if(file_exists($view)){
                require_once $view;
            }  else {
                require_once  VIEWS_PATH . 'notfound' . DS .'no.view.php';
            }
        }
        if($this->_controller != "to"){require_once  footerV_PATH;}
    }
}

<?php
require_once "base_controller.php";
class PagesController extends BaseController
{
    function __construct(){
        $this->folder = 'pages';
    }
    public function home()
    {
        $data = array(
            'name' => 'Tuan',
            'age' => 19
        );
        $this->render('home',$data);
    }
    public function error()
    {
        $this->render('error');
    }
}
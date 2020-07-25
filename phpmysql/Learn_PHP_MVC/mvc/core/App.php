<?php
class App{

    //KHAI BÁO VÀ ĐẶT GIÁ TRỊ MẶC ĐỊNH
    protected $controller="Home";
    protected $action="SayHi";
    protected $params=[];

    //contructor tự định nghĩa
    function __construct()
    {
         $arr = $this->UrlProcess();

         //kIỂM TRA FILE CÓ TỒN TẠI HAY KHÔNG & XỬ LÍ CONTROLLER
        if (file_exists("./controllers/".$arr[0].".php")){
            $this->controller = $arr[0];
            unset($arr[0]); //HỦY CONTROLLERS
        }

        require_once "./controllers/".$this->controller.".php";

        //XỬ LÍ ACTION VÀ KIỂM TRA XEM FUNCTION CÓ TỒN TẠI HAY KHÔNG
        if (method_exists($this->controller,$arr[1])){
            $this->action = $arr[1];
        }
        unset($arr[1]); //HỦY ACTION

        //XỬ LÍ PARAMS
        $this->params = $arr?array_values($arr):[];

        call_user_func_array([$this->controller,$this->action], $this->params);
    }

    //Xủ lí Url
    function UrlProcess(){
        if (isset($_GET['url'])){
            //Cắt Url
            return explode("/",filter_var(trim($_GET['url'], "/")));
            //Loại bỏ những khoảng trống
            //filter_var(trim($_GET['url'], "/"));
        }
    }
}
?>
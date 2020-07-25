<?php
class BaseController{
    protected $folder; // Biến có giá trị là thư mục nào đó trong thư mục views, chứa các file view template của phần đang truy cập.
    //Hàm hiển thị cho người dùng kết quả
    function render($file, $data = array()){
        //Kiểm tra file gọi đến có tồn tại không
        $view_file = 'view/'.$this->folder.'/'.$file.'.php';
        if (is_file($view_file)){
            //Nếu tồn tại file đó thì tọa ra các biến chứa giá trị truyền vào lúc gọi hàm
            extract($data);
            //Sau đố lưu giá trị trả về khi chạy file view template với các dữ liệu đó vào 1 biến chứ chưa hiển thị luôn ra trình duyệt
            ob_start();
            require_once ($view_file);
            $connect = ob_get_clean();
            //Sau khi có kết quả lưu vào biến $connect, gọi ra template chung của hệ thống để hiện thị cho người dùng
            require_once ('view/layouts/application.php');
        }else{
            //Nếu file muốn gọi ra không tồn tại thì chuyển hướng đến báo lỗi.
            header('Locaion" index.php?controller=pages&action=error');
        }
    }
}
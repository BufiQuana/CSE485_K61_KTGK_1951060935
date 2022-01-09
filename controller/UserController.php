<?php
    require_once 'model/UserModel.php';
    class UserController{
        
        function index()
        {
           
            $userModel = new UserModel();
            $users = $userModel->getAllUsers();

            require_once 'view/user/index.php';
        }

        function add()
        {
            $userModel = new UserModel();
            
            if(isset($_POST['txtHoTen'])){
                $hovaten = $_POST['txtHoTen'];
            }
            
            $gioitinh = $_POST['txtgioitinh'];
            $namsinh = $_POST['txtnamsinh'];
            $nghenghiep = $_POST['txtnghenghiep'];
            $ngaycapthe = $_POST['txtngaycapthe'];
            $ngayhethan = $_POST['txtngayhethan'];
            $diachi = $_POST['txtdiachi'];
            
            if($user_add = $userModel->addUser($hovaten,$gioitinh,$namsinh,$nghenghiep,$ngaycapthe,$ngayhethan,$diachi))
            {
                $users = $userModel->getAllUsers();
                require_once 'view/user/index.php';
            }
            else{
                    header("location: error.php");
                }
        }
        function update(){
            $userModel = new UserModel();
            
            if(isset($_POST['txtmadg'])){
                $madg = $_POST['txtmadg'];
            }
            
            $hovaten = $_POST['txtHoten'];
            $gioitinh = $_POST['txtgioitinh'];
            $namsinh = $_POST['txtnamsinh'];
            $nghenghiep = $_POST['txtnghenghiep'];
            $ngaycapthe = $_POST['txtngaycapthe'];
            $ngayhethan = $_POST['txtngayhethan'];
            $diachi = $_POST['txtdiachi'];
            
            if($user_add = $userModel->updateUser($madg,$hovaten,$gioitinh,$namsinh,$nghenghiep,$ngaycapthe,$ngayhethan,$diachi))
            {
                $users = $userModel->getAllUsers();
                require_once 'view/user/index.php';
            }
            else{
                    header("location: error.php");
                }
        }
    }



?>
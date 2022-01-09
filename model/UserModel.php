<?php
    require_once 'config/db.php';

    class UserModel{
        private $madg;
        private $hovaten;
        private $gioitinh;
        private $namsinh;
        private $nghenghiep;
        private $ngaycapthe;
        private $ngayhethan;
        private $diachi;

        public function connectDb(){
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if(!$connection){
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }

            return $connection;
        }

        public function getAllUsers(){
            $conn = $this->connectDb();
          
            $sql = "SELECT * FROM docgia";
            $result = mysqli_query($conn,$sql);
            $arr_user = [];

            if(mysqli_num_rows($result) > 0){

                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC); 
            }
            return $arr_users;
        }

        public function getUser($madg){
            $conn = $this->connectDb();
          
            $sql = "SELECT * FROM docgia where madg=".$madg.
            $result = mysqli_query($conn,$sql);
            
            return $result;
        }


        public function updateUser($madg,$hovaten,$gioitinh,$namsinh,$nghenghiep,$ngaycapthe,$ngayhethan,$diachi)
        {
            $conn = $this->connectDb();
          
            $sql = "Update docgia 
            set hovaten=N'".$hovaten."',
            gioitinh='".$gioitinh."',
            namsinh='".$namsinh."',
            nghenghiep=N'".$nghenghiep."',
            ngaycapthe='".$ngaycapthe."',
            ngayhethan='".$ngayhethan."',
            diachi='".$diachi."'
            where madg=".$madg;
            
            return $result = mysqli_query($conn,$sql);
            
        }

        public function addUser($hovaten,$gioitinh,$namsinh,$nghenghiep,$ngaycapthe,$ngayhethan,$diachi)
        {
            $conn = $this->connectDb();
          
            $sql = "insert into docgia(hovaten,gioitinh,namsinh,nghenghiep,ngaycapthe,ngayhethan,diachi)
            values(N'".$hovaten."','".$gioitinh."','".$namsinh."',N'".$nghenghiep."','".$ngaycapthe."','".$ngayhethan."',N'".$diachi."')";

            return $result = mysqli_query($conn,$sql); 
        }

        public function closeDb($connection = null) {
            mysqli_close($connection);
        }
    }

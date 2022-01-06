<?php
    require_once 'configs/databasa.php';
    class User{
        private $magv; 
        private $hovaten;
        private $ngaysinh;
        private $gioitinh;
        private $trinhdo;
        private $chuyenmon;
        private $hocham;
        private $hocvi;
        private $coquan;

        public function connectDB(){
            $connection = mysqli_connect(DB_HOST,
            DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;

        }
        public function closeDB($connection =null){
            mysqli_close($connection);
        }

        public function GetallDB(){

            $conn = $this->connectDB();
            $query = "SELECT * FROM giangvien";
            $result = $conn->query($query);
            $arrDB = [];
            if(mysqli_num_rows($result)>0){
                $arrDB = mysqli_fetch_all($result,MYSQLI_ASSOC);
            }
            $this->closeDB($conn);
            return $arrDB;

        }

        public function DeleteUser($id = null){
            $conn = $this->connectDB();
            $query = "DELETE FROM giangvien Where magv = $id";
            $conn->query($query);
            header('localhost:http://localhost/CSE485_K61_KTGK_1951060964/src/index.php');
            exit();
        }
        
        public function addGV($magv,$hovaten,$ngaysinh,$gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan){
            
            $conn = $this->connectDB();
            $query = "INSERT INTO giangvien VALUES($magv,'$hovaten','$ngaysinh','$gioitinh','$trinhdo','$chuyenmon','$hocham','$hocvi','$coquan')";
            $conn->query($query); 
            header('localhost:http://localhost/CSE485_K61_KTGK_1951060964/src/index.php');          
           exit();

        }

    }
?>
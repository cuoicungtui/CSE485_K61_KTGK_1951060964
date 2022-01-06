<?php
    require_once 'models/Usermodel.php';
    class UserController{
        public function index(){

            $usermodel = new User();
            $arr_user = $usermodel->GetallDB();
            require_once 'views/UserView.php';
        }
        public function delete(){
            $delete = new User();
            $delete->DeleteUser(number_format($_GET['delete']));
            header('localhost:http://localhost/CSE485_K61_KTGK_1951060964/src/index.php');
        }
        public function add(){
            if(isset($_POST['submit'])){
                $magv = number_format($_POST['magv']);
                $hovaten = $_POST['hovaten'];
                $ngaysinh= $_POST['ngaysinh'];
                $gioitinh= $_POST['gioitinh'];
                $trinhdo = $_POST['trinhdo'];
                $chuyenmon = $_POST['chuyenmon'];
                $hocham = $_POST['hocham'];
                $hocvi = $_POST['hocvi'];
                $coquan = $_POST['coquan'];
                $addGV= new User();
                $addGV->addGV($magv,$hovaten,$ngaysinh,$gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan);
                header('localhost:http://localhost/CSE485_K61_KTGK_1951060964/src/');
            }else{
                require_once 'views/UserAddview.php';
            }
        }

        public function edit(){

            if(isset($_POST['submit'])){
                $magv = number_format($_POST['magv']);
                $hovaten = $_POST['hovaten'];
                $ngaysinh= $_POST['ngaysinh'];
                $gioitinh= $_POST['gioitinh'];
                $trinhdo = $_POST['trinhdo'];
                $chuyenmon = $_POST['chuyenmon'];
                $hocham = $_POST['hocham'];
                $hocvi = $_POST['hocvi'];
                $coquan = $_POST['coquan'];
            }else{
                require_once 'views/Usereditview.php';
            }
        
        }
        

   } 
?>
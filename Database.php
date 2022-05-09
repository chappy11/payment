<?php 

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "tourmo";
    $conn = "";
    
    
    public function __construct(){
        $this->conn = mysqli_connect($servername,$username,$password,$dbname);
    }


    public function execute($sql){
        return $this->mysqli_query($this->conn,$sql);
    }

    public function insert($user_id,$trans_id,$amount,$receipt_link){
        $sql = "INSERT INTO payment (user_id,trans_id,amount,receipt_link) VALUES ('$user_id','$trans_id','$amount','$receipt_link')";
        return $this->execute($sql);
    }

    public function topup($motor_id,$amount){
        $sql = "UPDATE vehicle SET tourmopoints='$amount' WHERE motor_i='$motor_id'";
        return $this->execute($sql);
    }

    public function insert_history(){
        $en = str_replace("-","",date('Y-m-d'));
        $rand = mt_rand(1111,9999);
        $trn = "TRN-".$en."-".$rand;
        $sql = "INSERT INTO history(ref_no,amount,his_type,motor_id,booking_id,rec_id) VALUES ('$trn','$amount','')";

    }



?>
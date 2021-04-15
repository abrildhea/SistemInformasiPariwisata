<?php
class loginUser {
    private $kon;

    public function __construct(){
        $this->kon = new PDO("mysql:host=" . LOCALHOST . ";dbname=" . DATABASE, USERNAME, PASSWORD, array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ));
    }

    function getDetailLoginUser($id){
        $sql = $this->kon->prepare("SELECT * FROM user WHERE id_user='$id'");
        $query->execute(array($id_user));
        $hasil = $query->fetch();
    }
    
    function cekLoginUser($email,$pass)
    {
        // untuk password kita enkrip dengan md5
        $row = $this->kon->prepare("SELECT * FROM user WHERE email='$email' AND password='$pass'");
        $row->execute(array($email,$pass));
        $count = $row->rowCount();
        if($count > 0)
        {
            $hasil = $row->fetch();
            // $_SESSION['user'] = $hasil;
            // // status yang diberikan sukses dan berhasil masuk
            // return "sukses";
            return $hasil;
        }else{
            // status yang diberikan gagal dan loginUser ulang
            // return "gagal";
            return false;
        }
    }
}
?>

<?php
class login {
    private $kon;

    public function __construct(){
        $this->kon = new PDO("mysql:host=" . LOCALHOST . ";dbname=" . DATABASE, USERNAME, PASSWORD, array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ));
    }

    function getDetailLogin($id){
        $sql = $this->kon->prepare("SELECT * FROM admin WHERE id_admin='$id'");
        $query->execute(array($id_admin));
        $hasil = $query->fetch();
    }

    function cekLogin($username,$pass)
    {
        // untuk password kita enkrip dengan md5
        $row = $this->kon->prepare("SELECT * FROM admin WHERE username='$username' AND password='$pass'");
        $row->execute(array($username,$pass));
        $count = $row->rowCount();
        if($count > 0)
        {
            $hasil = $row->fetch();
            // $_SESSION['admin'] = $hasil;
            // // status yang diberikan sukses dan berhasil masuk
            // return "sukses";
            return $hasil;
        }else{
            // status yang diberikan gagal dan login ulang
            // return "gagal";
            return false;
        }
    }
}
?>

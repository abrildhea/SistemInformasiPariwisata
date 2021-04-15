<?php
error_reporting(0);
$adm= $_REQUEST["adm"];
switch ($adm) {

    case 'i':
        require "i.php";
    break;

    case 'v':
        require "v.php";
    break;

    case 'inf':
        require "inf.php";
    break;

    case 'e':
        require "e.php";
    break;

    case 'add':
            $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            // enkripsi password
            // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $profil = $_POST['profil'];
            $password=md5($_POST['password']);
            $konfirmPassword = md5($_POST['konfirmPassword']);
            // $password = $_POST['password'];

            if($password == $konfirmPassword) {
            try {
                $sql = "INSERT INTO admin SET nama = :nama, email = :email, username = :username, profil = :profil, password = :password";
                        $stmt = $kon->prepare($sql);
                        $stmt->bindParam(':nama', $nama);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':username', $username);
                        $stmt->bindParam(':profil', $profil);
                        $stmt->bindParam(':password', $password);
                        $stmt->execute();
                    }
                catch(PDOException $e) {
                    echo $e->getMessage();
                }
                if($stmt) {
                    echo "<script type=\"text/javascript\">alert('Data Berhasil Disimpan');document.location='?admin=ad&adm=v';</script>";
                }
            }else{
                echo "<script type=\"text/javascript\">alert('Password Tidak Sama');document.location='?admin=ad&adm=v';</script>";
            }
            // $query = $kon->prepare("insert into admin (nama, email, username, profil, password) values (:nama, :email, :username, :profil, :password)");
            // $dataAdmin = array(
            //     ':nama' => "$nama",
            //     ':email' => "$email",
            //     ':username' => "$username",
            //     ':profil' => "$profil",
            //     ':password' => "$password"
            // );
            // $query->execute($dataAdmin);
            // echo "<script type=\"text/javascript\">alert('Data Berhasil Disimpan');document.location='?admin=ad&adm=v';</script>";

        // } catch (PDOException $e) {
        //     echo "Error! gagal menyimpan data admin:".$e->getMessage();  
        // }
        // if ($query) {
        //     echo "<script type=\"text/javascript\">alert('Data Berhasil Disimpan');document.location='?admin=ad&adm=v';</script>";
        // }else{
        //     echo "<script type=\"text/javascript\">alert('Password Tidak Sama');document.location='?admin=ad&adm=v';</script>";
        // }
        break;
   
    case 'edit':
        try{
            $id_tipe_wisata = $_POST['id_tipe_wisata'];
            $tipe_wisata = $_POST['tipe_wisata'];
            $query = $kon->prepare("update tipe_wisata set tipe_wisata = :tipe_wisata where id_tipe_wisata = :id_tipe_wisata");

            $data = array(
                ':tipe_wisata' => "$tipe_wisata",
                ':id_tipe_wisata' => "$id_tipe_wisata"
            );

            $query->execute($data);

            echo "<script type=\"text/javascript\">alert('Berhasil Di Edit');document.location='?admin=ad&adm=v';</script>";
        } catch (PDOException $e){
            echo "Error! gagal mengedit data admin:".$e->getMessage();
        }
        break;

    case 'hapus':
            $id_tw = $_GET['id'];
            try {
                $sql = "DELETE FROM tipe_wisata WHERE id_tipe_wisata = '$id_tw'";
             
                // use exec() because no results are returned
                $kon->exec($sql);

                echo "<script type=\"text/javascript\">alert('Berhasil Dihapus');document.location='?admin=ad&adm=v';</script>";
            } catch (PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
        break;
}
?>
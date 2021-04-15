<?php
$id_user = $_GET['id'];
$cho = $kon->prepare("SELECT * FROM user WHERE `id_user` = $id_user");
$cho->execute([$id_user]);
$user = $cho->fetch(PDO::FETCH_ASSOC);
?>
<style type="text/css">
    img.usr {
  max-width: 300px;
  max-height: 400px;
border-radius: 50%;
}
input.form-control.tx{
    color: #282323;
    font-family: "Playfair Display", serif;
}
</style>
<!-- Contact Area Start -->
    <section class="akame-contact-area bg-gray section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h3>Informasi Akun</h3>
                        <!-- <p>Our staff will call back later and answer your questions.</p> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <!-- <form action="#" method="post" class="akame-contact-form border-0 p-0"> -->
                        <div class="row">
                            <div class="col-lg-12" style="margin-bottom: 20px;">
                                <center><!-- Foto :<br> --><?php echo "<img class='usr' src='data_user/foto_user/".$user['image_user']."' width='150px' alt='Foto User'>"?></center>
                            </div>
                            <div class="col-lg-6">
                                <input readonly type="text" name="message-name" class="form-control tx" value="Nama          : <?php echo $_SESSION[nama_lengkap]; ?>"><br>
                            </div>
                            <div class="col-lg-6">
                                <input readonly type="email" name="message-email" class="form-control tx"  value="Email         : <?php echo $_SESSION[email]; ?>">
                            </div>
                            <div class="col-lg-6">
                                <input readonly type="text" name="message-name" class="form-control tx" value="Username  : <?php echo $_SESSION[username]; ?>">
                            </div>
                            <!--<div class="col-lg-6">-->
                            <!--    <input readonly type="text" name="message-name" class="form-control tx" value="Password  : <?php echo $_SESSION[password]; ?>">-->
                            <!--</div>-->
                            <!-- <div class="col-12">
                                <textarea name="message" class="form-control mb-30" placeholder="Start the discussion..."></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn akame-btn btn-3 mt-15 active">Post Comment</button>
                            </div> -->
                        </div><br>
                    <!-- </form> -->
                    <div class="book-now-btn col-12">
                        <a href="?kwb=logout" class="btn akame-btn">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
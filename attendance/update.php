<!DOCTYPE html>
<html>
   <head>
   <title>Form Pendaftaran Anggota</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
   </head>

   <body>
      <div class="container">
         <?php
         //Include file koneksi, untuk koneksikan ke database
         include "koneksi.php";

         //Fungsi untuk mencegah inputan karakter yang tidak sesuai
         function input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
         }

         //cek apakah ada nilai yang dikirim menggunakan method GET dengan nama id_peserta
         if (isset($_GET['id_peserta'])){
            $id_peserta=input($_GET['id_peserta']);

            $sql="select * from peserta where id_peserta=$id_peserta";
            $hasil=mysqli_query($kon, $sql);
            $data=mysqli_fetch_assoc($hasil);
         }

         if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $id_peserta=htmlspecialchars($_POST["id_peserta"]);
            $nama=input($_POST["nama"]);

            $sql="update peserta set
            nama='$nama',
            where id_peserta=$id_peserta";

            $hasil=mysqli_query($kon,$sql);

            if ($hasil) {
                header("location:index.php");
            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

            }
            }

        ?>
        <h2>Update Data</h2>

        <form action="<?php echo htmlspesialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
        </div>

        <input type="hidden" name="id_peserta" value="<?php echo $data ['id_peserta']; ?>" />
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>
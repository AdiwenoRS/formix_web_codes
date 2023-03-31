<!DOCTYPE html>
<html>
   <head>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">   </head>
   <body>
      <div class="container">
         <?php
         //Include file koneksi, untuk koneksikan ke database
         include "koneksi.php";

         //Fungsi untuk mencegah inputan karakter yang tidak sesuai
         function input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
         //cek apakah ada kiriman form dari method post
         if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $name=input($_POST["name"]); 
            //Query input menginput data kedalam tabel anggota
            $sql="insert into attendance (name) values ('$name') ";

            //Mengeksekusi/menjalankan query diatas
            $hasil=mysqli_query($kon,$sql);

            //Kondisi apakah berahsil atau tidak dalam mengeksekusi query diatas
            if($hasil){
               header("Location:index.php");
            }else{
               echo "<div class='alert alert-danger'> Data Gagal Disimpan.</div>";

                  }
            }
            ?>
            <h2>Input Data</h2>

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
               <div class="form-group">
                  <label>Name:</label>
                  <input type="text" name="name" class="form-control" placeholder="Input your name" required />
               </div>
               <button type="submit" name="submit" class="btn btn-primary">submit</button>
            </form>
         </div>
   </body>

</html>
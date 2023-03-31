<!DOCTYPE html>
<html>
   <head>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
   <title>Attendance</title>
   <style> 
        html{
         font-family: sans-serif;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
          "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
          "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
        .topnav{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background-color: rgba(37, 31, 138, 1);
        }

        .topnav a {
            float: left;
            color: goldenrod;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
            
        }

   </style> 
   </head>
   <body>
    <!-- navigation bar-->
    <div class="topnav">
        <div class="image"> 
            <img src="formix.png" alt="Formix" width="200px" style="margin: 10px auto 0 10px;"> 
        </div>
    </div>

    <!--<center><h1  style="font-size:50px; color:rgba(37, 31, 138, 1); margin-top:3cm; font-family:'Courier New', Courier, monospace;"><b>Attendance</b></h1></center>-->
      <div class="container">
         <br>
      <?php

         include "koneksi.php";

         //cek apakah ada kiriman form dari method post
         if (isset($_GET['att_id'])){
            $att_id=htmlspecialchars($_GET["att_id"]);

            $sql="delete from attendance where att_id='$att_id' ";
            $hasil=mysqli_query($kon,$sql);

            //konsidi apakah berhasil atau tidak
            if($hasil){
               header("Location:index.php");   
            }else{
               echo "<div class='alert alert-danger'> Data Gagal dihapus.<div";
            }
         }
      ?>

      <tr class="table-danger">
         <br>
         <thead>
            <tr>
               <table class="my-5 table table-bordered">
                  <tr class="table-primary">
                     <th>No</th>
                     <th>Attendance Code</th>
                     <th>Name</th>
                     <th colspan='2'>Option</th>
                  </tr>
            </tr>
         </thead>
         

         <?php 
         include "koneksi.php";
         $sql="select * from attendance order by att_id desc";

         $hasil=mysqli_query($kon,$sql);
         $no=0;
         while ($data = mysqli_fetch_array($hasil)){
            $no++;
            ?>
            <tbody>
               <tr>
                  <td><?php echo $no ;?></td>
                  <td><?php echo $data["att_id"]; ?></td>
                  <td><?php echo $data["name"]; ?></td>
                  <td>
                     <a href="<?php echo htmlspecialchars($_SERVER ["PHP_SELF"]);?>?att_id=<?php echo $data ['att_id']; ?>" class="btn btn-primary">Delete</a>
                  </td>
            </tr>
            </tbody>
            <?php
         }
         ?>
         </table>
         <a href="create.php" class="btn btn-primary" role="button">Add Attendance</a>
      </div>   
            
            
         
   </body>
</html>
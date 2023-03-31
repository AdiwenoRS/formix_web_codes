<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>

    <!-- stylesheets -->
    <style type="text/css">

        html{
            font-family: sans-serif;
        }

        body{
            background-color: white;
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
        
        .card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          margin-top: 4cm;
          /*margin-left: auto;
          margin-right: auto;*/
          width: 25%;
          border-radius: 5px;
        }
        /*
        .cardblock{
            display:inline-block;
            vertical-align: top;
        }

        .cardblock2{
            display:inline-block;
        }    

        .card:hover {
          box-shadow: 0 15px 30px 0 rgba(0,0,0,0.2);
        }
        
        /* Add some padding inside the card container */
        .container {
          padding: 2px 16px;
          background-color: white;
        }


        img {
            border-radius: 5px 5px 0 0 ;
        }

        @media only screen and (max-width: 600px) {
           .topnav{
                width: 100%;
            }
        }
        
  

    </style>
</head> 

<body>
 
    <!-- navigation bar-->
    <div class="topnav">
        <div class="image"> 
            <img src="formix.png" alt="Formix" width="200px" style="margin-top:10px; margin-left:10px;"> 
        </div>
    </div>
<!--
    <div class="card">
    -->
    <table>
        <!-- Card 1 -->

    <tr>
        <th>
    <div class="card">
      <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>John Doe</b></h4>
        <p>Architect & Engineer</p>
      </div>
    </div>
        </th>
    </tr>

    
      <!-- Card 2 -->
      <tr>
      <th>
      <div class="card">
      <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:100%;"> 
      <div class="container">
        <h4><b>John Doe</b></h4>
        <p>Architect & Engineer</p>
      </div>
      </div>
      </th>
      </tr>
       <!-- Card 3 -->

       <tr>
       <th>
       <div class="card">

      <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>John Doe</b></h4>
        <p>Architect & Engineer</p>
      </div>
       </div>
       </th>
       </tr>
    <!--</div> -->

</body>

</html>
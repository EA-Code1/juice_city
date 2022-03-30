<?php  

 session_start();

  if($_SERVER['QUERY_STRING']   == 'noname'){
    unset($_SESSION['name']);
  }
// null coalesce
   $name = $_SESSION['name'] ?? 'Guest';

   // get cookie  // null coalesce also (??)
   $gender = $_COOKIE['gender'] ?? 'Unknown';

?>

<head>
 	<!--meta charset="utf-8"-->
 	<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
 	<title>Juice City</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #75b7b1 !important;
        }
        .brand-text{
            color: #75b7b1 !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .juice{
            width: 56px;
            margin: 58px auto -55px;
            display: block;
            position: relative;
            top: -60px;
        }
        .card{
            max-width: 460px;
            border-radius: 20px;
        }
        .card-action{
                    top: 2.5px;
        }

    </style>
 </head>
 <body class="teal lighten-5">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Juice City</a>
            <ul id="nav=mobile" class="right hide-on-small-and-down">
              <li class="grey-text">Hello <?php echo htmlspecialchars($name); ?></li>
               <li class="grey-text">(<?php echo htmlspecialchars($gender); ?>)</li>
              <li><a href="add.php" class="btn brand z-depth-0">Add a Juice drink</a></li> 
            </ul>
        </div>
    </nav>


  
    

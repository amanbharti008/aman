    hello world 

 <?php
 
$con=mysqli_connect("localhost","root","","newservice");
// date_default_timezone_set('asia/Kolkata');
// $ip=$_SERVER['REMOTE_ADDR'];
// $alphabeta=date('Y-m-d H:i:s');

// // $query="insert into formip (ip,date) value ('$ip','$alphabeta')";
// // $upsdkfja=mysqli_query($con,$query) or die(mysql_error());

// echo "oh boi";

// if(isset($_POST['username']))
//     $username=addslashes($_POST['username']);

// else
//      $username="alpha beta gamma delta theta phi archemedes";

// if(isset($_POST['pass']))
//     $password=addslashes($_POST['pass']);

// else $password="aayi re aayi re milke dhoom machayi re";
    
// if($username!=addslashes("ssp")||$password!=addslashes("ssp")){

//     echo '<html>

//     <head>
//     <title>New Services List</title>    
//     <link rel="shortcut icon" type="image/x-icon" href="./images/favi.ico"/>
//     <link rel="icon" type="image/x-icon" href="./images/favi.ico"/>
//     </head>
    
//     <body class="container">

//     <form method="POST" action="newservicelist.php">

//     User name:<input type="text" name="username" /><br>
//     Password:<input type="password" name="pass"/><br>

//     <input type="submit" name="submit"/>
//     </form>    
//     </body>
//     </html>';
// }


// else {
//     session_start();

//         $_SESSION['messuser']=$username;

//         $_SESSION['messpasswd']="lukkha";


 
        $result = mysqli_query($con,"SELECT * FROM main");
        mysqli_query($con,"SET ANSI_WARNINGS OFF") ;

        $events = array();

        $x=0;

        while($row = mysqli_fetch_array($result))

        {
            $events[$x] = NULL;
            $events[$x]->Name=$row['Name'];  

            $events[$x]->Email=$row['Email'];

            $events[$x]->Company=$row['Company'];

            $events[$x]->Servicereq=$row['Servicereq'];

        
            $x=$x+1;   
  
        }

        $length = sizeof($events);

        $i=0; 

        echo '
            <html>


            <head>


            <title>Newservice Required</title>

            <link rel="stylesheet" href="css/bootstrap_newservice.css" />

            <link rel="shortcut icon" type="image/x-icon" href="./images/favi.ico"/>

            <link rel="icon" type="image/x-icon" href="./images/favi.ico"/>

            <style>
            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #customers tr:nth-child(even){background-color: #f2f2f2;}
            
            #customers tr:hover {background-color: #ddd;}
            
            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
            </style>
            </head>


            <body class="container" style="background-color: #FFE4C4;">

                <h1 style="font-size:49px; color:#666699; text-align:center;"> Newservice List</h1>

            <table id="customers">
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Servicereq</th>
                  </tr>';

            while($i<$length)

            {
                  echo '<tr> ';
                  echo '<td>'.$events[$i]->Name.'</td>';
                  echo '<td>'.$events[$i]->Email.'</td>';
                  echo '<td>'.$events[$i]->Company.'</td>';
                  echo '<td>'.$events[$i]->Servicereq.'</td>';
                  echo '</tr>';
                  
                
                // // echo ' <span style="font-size:20px;">&nbsp';
                // echo $events[$i]->Name ;  
                // echo "          ".$events[$i]->Email."          ".$events[$i]->Company; 
                // echo "          ";
                // echo $events[$i]->Servicereq;
                // echo ' </span>  <br><br>';

            $i=$i+1;

            }
            echo '</table></body> ';

    // }

?>
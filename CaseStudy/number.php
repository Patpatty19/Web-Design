<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Number</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <link rel="stylesheet" href="styles.css">
    </head>

    <header>
            <a href="index.html" class="logo">Multi-System</a>
            <div class ="menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="number.php" class = "active" >Phone Number</a></li>
                    <li><a href="cartesian.php" >Cartesian Plane</a></li>
                    <li><a href="calculator.php"  >Calculator</a></li>
                    <li><a href="converter.php" >Converter</a></li>
                    <li><a href="index.php">Home</a></li>
                    
                </ul>
            </nav>
        <div class="clearfix"></div>
        </header>

        <img src="list.png" alt="number" class="center1">


        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <input type="text" placeholder= "Input a letter" name="fnum" >

        <input type="submit">
        </form>


        <?php
$num=isset($_POST['fnum']) ? $_POST['fnum'] : '0';

switch($num){
    
    // A,B,C

    case 'A':
        case 'B':  
            case 'C':    
        echo'
        <script type="text/javascript">
        
        $(document).ready(function(){
        
          swal({
            position: "top-end",
            type: "success",
            title: "YOUR NUMBER IS:",
            text:"2",
            showConfirmButton: false,
            timer: 3000
          })
        });
        
        </script>
        ';
    break;

     // D,E,F

    case 'D':
        case 'E':  
            case 'F':    
        echo'
        <script type="text/javascript">
        
        $(document).ready(function(){
        
          swal({
            position: "top-end",
            type: "success",
            title: "YOUR NUMBER IS:",
            text:"3",
            showConfirmButton: false,
            timer: 3000
          })
        });
        
        </script>
        ';
    break;

    // G,H,I

    case 'G':
        case 'H':  
            case 'I':    
        echo'
        <script type="text/javascript">
        
        $(document).ready(function(){
        
          swal({
            position: "top-end",
            type: "success",
            title: "YOUR NUMBER IS:",
            text:"4",
            showConfirmButton: false,
            timer: 3000
          })
        });
        
        </script>
        ';
    break;

     // J,K,L

    case 'J':
        case 'K':  
            case 'L':    
        echo'
        <script type="text/javascript">
        
        $(document).ready(function(){
        
          swal({
            position: "top-end",
            type: "success",
            title: "YOUR NUMBER IS:",
            text:"5",
            showConfirmButton: false,
            timer: 3000
          })
        });
        
        </script>
        ';
    break;
   
    // M,N,O

    case 'M':
        case 'N':  
            case 'O':    
        echo'
        <script type="text/javascript">
        
        $(document).ready(function(){
        
          swal({
            position: "top-end",
            type: "success",
            title: "YOUR NUMBER IS:",
            text:"6",
            showConfirmButton: false,
            timer: 3000
          })
        });
        
        </script>
        ';
    break;
    
    // P,Q,R,S

    case 'P':
        case 'Q':  
            case 'R':   
                case 'S':     
        echo'
        <script type="text/javascript">
        
        $(document).ready(function(){
        
          swal({
            position: "top-end",
            type: "success",
            title: "YOUR NUMBER IS:",
            text:"7",
            showConfirmButton: false,
            timer: 3000
          })
        });
        
        </script>
        ';
    break;
    
    // T,U,V

    case 'T':
        case 'U':  
            case 'V':    
        echo'
        <script type="text/javascript">
        
        $(document).ready(function(){
        
          swal({
            position: "top-end",
            type: "success",
            title: "YOUR NUMBER IS:",
            text:"8",
            showConfirmButton: false,
            timer: 3000
          })
        });
        
        </script>
        ';
    break;

    // W,X,Y

    case 'W':
        case 'X':  
            case 'Y':    
        echo'
        <script type="text/javascript">
        
        $(document).ready(function(){
        
          swal({
            position: "top-end",
            type: "success",
            title: "YOUR NUMBER IS:",
            text:"9",
            showConfirmButton: false,
            timer: 3000
          })
        });
        
        </script>
        ';
    break;
   
    // Z

    case 'Z':
        echo'
        <script type="text/javascript">
        
        $(document).ready(function(){
        
          swal({
            position: "top-end",
            type: "success",
            title: "ERROR",
            text:"THERE IS NO NUMBER THAT INCLUDES Z",
            showConfirmButton: false,
            timer: 3000
          })
        });
        
        </script>
        ';
    break;

    

}
?>
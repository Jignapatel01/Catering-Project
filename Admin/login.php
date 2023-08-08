<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    

<!-- js or javascript file -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src='main.js'></script>
    <style>
     body
    {
            width: 100%;
            height: 768px;
            overflow-x: hidden;
            margin-top: 1%;
            background: -moz-linear-gradient( Left,white,rgb(131, 108, 108), white);
            background: -webkit-linear-gradient(left,white,rgb(131, 108, 108), white );
            background: -o-linear-gradient(to right,white,rgb(131, 108, 108),white);  
    }
    #form {
            margin-top: 5%;
            background-color:lightgray;
            width: 50%;
            padding: 25px;
            margin-left: 25%;
            border-radius: 20px;
        }
        
        td {
            padding: 15px;
        }
        
        input[type="text"],
        input[type="password"] {
            padding: 15px;
            width: 350px;
            height: 20px;
            font-size: 20px;
            background-color: white;
            border: none;
            border-radius: 15px;
        }
        
        input[type=submit] {
            background-color: rgb(53, 83, 117);
            font-size: 20px;
            width: 200px;
            height: 40px;
            padding: 8px;
            border-radius: 15px;
            border: none;
        }
        a {
            font-size: 20px;
        }
        
        h2 {
            margin-top: 5px;
            padding: 5px;
            font-size: 30px;
            text-transform: uppercase;
        }


        

    </style>
</head>
<body >

  <div id="form">
    <caption>
        <h2 align="center">Login Form</h2>
    </caption>
    <form method="post">
    <table align="center">
        <!--<thead>
            <tr>
                <th></th>
            </tr>
        </thead>-->
        <tbody>
            <tr> 
                
                <td > <input type="text" name="email" placeholder="Email*" required></td>
            </tr>
            <tr>
                
                <td > <input type="password" name="password" placeholder="password*" required></td>
            </tr>
            <tr>
                <td> <input type="checkbox" name="remember me"> <b style="font-size: 18px; color: gray;">Remember Me</b></td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="Login"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="">Forget Password</a></td>
            </tr>
            <tr>
                <td>
                   <b style="font-size: 18px;"> Don't have an account ?</b> <a href="Register.php">Create Your account</a>

                </td>
            </tr>

        </tbody>
    </table>

    </form>
</div>





</body>
</html>

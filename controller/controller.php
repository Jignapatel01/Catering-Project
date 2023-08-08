<?php
//error_reporting(0);
require_once("model/model.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class controller extends model
{
    public function __construct()
    {
        //logic
        parent::__construct();

    //insert data in contact logic
    if(isset($_POST["submit"]))
    {
        date_default_timezone_set("Asia/culcutta");
        $fnm=$_POST["fnm"];
        $lnm=$_POST["lnm"];
        $em=$_POST["email"];
        $pass=base64_encode($_POST["pass"]);
        $tmp_name=$_FILES["img"]["tmp_name"];
        $path="upload/image/".$_FILES["img"]["name"];
        move_uploaded_file($tmp_name,$path);
        $gn=$_POST["gender"];
        $phn=$_POST["phn"];
        $st=$_POST["state"];
        $ct=$_POST["city"];
        $rdt=date("d/m/Y H:i:s a");
        $data=array("FirstName"=>$fnm,"LastName"=>$lnm,"Email"=>$em,"Password"=>$pass,"Photo"=>$path,"Gender"=>$gn,"Phone"=>$phn,"state_id"=>$st,"city_id"=>$ct,"Registerd_date_time"=>$rdt);
        $chk=$this->insertdata('tbl_customer',$data);
        if($chk)
        {
            echo "<script>
                alert('inserted successfully')
                window.location='login';
            
            </script>";
        }
        else{
            echo "<script>
                alert('something went wrong')
                window.location='';
            
            </script>";
        }
    }

    // insert data in contact
    if(isset($_POST["Submit"]))
    {
        $nm=$_POST["nm"];
        $em=$_POST["em"];
        $phone=$_POST["phn"];
        $msg=$_POST["msg"];
        $data=array("Name"=>$nm,"Email"=>$em,"Phone"=>$phone,"Message"=>$msg);
        $chk=$this->insertdata("tbl_contact",$data);
        if($chk)
        {
            echo "<script>
            alert('Message Send Successfully')
            window.location='./';
            </script>";
        }
        else
        {
            echo "<script>
            alert('something went wrong');
            window.location='contact';
            </script>";
        }
    }


        //show a state, city data 
        $join=$this->joindata('tbl_customer','tbl_state','tbl_city','tbl_customer.state_id=tbl_state.state_id','tbl_customer.city_id=tbl_city.city_id');

        //show state data
        $shwstate=$this->showdata('tbl_state');
  
        //show city data
        $shwcity=$this->showdata('tbl_city');

        //manage profile
        if(isset($_SESSION["c_id"]))
        {
                $id=$_SESSION["c_id"];
                $prof=$this->managedata('tbl_customer','tbl_state','tbl_city','tbl_customer.state_id=tbl_state.state_id','tbl_customer.city_id=tbl_city.city_id','c_id',$id);           
        }

        
        //user login
        if(isset($_POST["log"]))
        {
            $em=$_POST["email"];
            $pass=base64_encode($_POST["password"]);
            $log=$this->userlogin('tbl_customer',$em,$pass);
            if($log)
            {
                echo "<script>
                    alert('login successfully')
                    window.location='./';

                </script>";
            }
            else
            {
                    echo "<script>
                    alert('Email and password are incorrect try again');
                    window.location='login';

                </script>";
            }
        }

        //logic of forget password
        //forget password logic
    if(isset($_POST["frgpwd"]))
    {
        require_once("PHPMailer/PHPMailer.php");
        require_once("PHPMailer/SMTP.php");
        require_once("PHPMailer/Exception.php");
        
        $em=$_POST["email"];
        
        try 
        {

             ob_start();    
            // error_reporting(0);
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = false;                                     //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'jigna434@gmail.com';                     //SMTP username
            $mail->Password   = 'vtscqfmytxreyauo';                               //SMTP password
            $mail->SMTPSecure = 'TLS';                                //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom($_POST["email"], 'Mail sending');
            $mail->addAddress($_POST["email"], 'Forget Password');     //Add a recipient                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Contact with Us email sending data';
            $chk=$this->forgetpass('tbl_customer','Email',$em);
            $mail->Body="The password is :".$chk;
            $mail->send();

          if($chk)
            {
              echo "<script>
              alert('we will successfully send your password in your email please checked and logged in again!')
              window.location='./login';
              </script>";
            }
            else 
            {
                echo "<script>
                alert('This email does not exist try with another registered email Id')
                window.location='./forget-password';
                </script>";
            }
         
        } 
        catch(Exception $e) 
        {
            echo "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
        }
    }

    //show category
    $showcat=$this->showdata('tbl_addcategory');

    //show subproduct
    $shwsubcat=$this->showdata('tbl_subcategory');  
    // show product
    $shwproduct=$this->showdata('tbl_product');
      
    //display product of category
    if(isset($_GET["breakfast"])) 
    {
        $id=$_GET["breakfast"];
        $shwlist=$this->selectdetails('tbl_product','category_id',$id);
    }  
    
    
    



    // change password
    if (isset($_POST["chngpass"]))
    {
        $id=$_SESSION["c_id"];
        $opass=base64_encode($_POST["opass"]);
        $npass=base64_encode($_POST["npass"]);
        $cpass=base64_encode($_POST["cpass"]);
        $chngpass=$this->changepassword('tbl_customer',$opass,$npass,$cpass,'c_id',$id);
        if($chngpass)
        {
            echo "<script>
            alert('Your password are successfully chnaged')
            window.location='login';
            
            </script>";
        }
        else
        {
            
            echo "<script>
            alert('Your password are not chnaged try again')
            window.location='change-password';
            
            </script>";
        }

    } 
        //update profile
        if(isset($_POST["update"]))
        {
            $id=$_SESSION["c_id"];

            $tmp_name=$_FILES['img']['tmp_name'];
            $path="upload/image".$_FILES['img']['name'];
            move_uploaded_file($tmp_name,$path);
            $em=$_POST["email"];
            $phn=$_POST["phn"];
            $st=$_POST["state"];
            $ct=$_POST["city"];

            $chk=$this->updatedata('tbl_customer',$path,$em,$phn,$st,$ct,'c_id',$id);
            if($chk)
            {
                echo "<script>
                alert('Updated Successfully')
                window.location='manage-profile';
                </script>";
            }
        }




        // user logout here
        if(isset($_GET["logout-here"]))
        {
            $lg=$this->logout();
            if($lg)
            {
                echo "<script>
                    alert('Logout succssfully')
                    window.location='./';
                </script>";
            }
        }


     // // load template routing
     if(isset($_SERVER["PATH_INFO"]))
        {
            switch ($_SERVER["PATH_INFO"]) 
            {
                case '/':
                 require_once("index.php");
                 require_once("navigation.php");
                 require_once("slider.php");
                 require_once("service.php");
                 require_once("menu.php");
                 require_once("reservation.php");
                 require_once("team.php");
                 require_once("footer.php");
                 break;

            case '/aboutus':
                require_once("index.php");
                require_once("navigation.php");
                require_once("about.php");
                require_once("footer.php");
                break;

            case '/service':
                require_once("index.php");
                require_once("navigation.php");
                require_once("service.php");
                require_once("footer.php");
                break;

            case '/menu':
                require_once("index.php");
                require_once("navigation.php");
                require_once("menu.php");
                require_once("footer.php");
                break;

            case '/reservation':
                require_once("index.php");
                require_once("navigation.php");
                require_once("reservation.php");
                require_once("footer.php");
                break;

                
            case '/testimonial':
                require_once("index.php");
                require_once("navigation.php");
                require_once("testimonial.php");
                require_once("footer.php");
                break;
            

         
            case '/teams':
                require_once("index.php");
                require_once("navigation.php");
                require_once("team.php");
                require_once("footer.php");
                break;    

            case '/contact-us':
                require_once("index.php");
                require_once("navigation.php");
                require_once("contact.php");
                require_once("footer.php");
                break;

            case '/login':
                require_once("index.php");
                require_once("navigation.php");
                require_once("login.php");
                require_once("footer.php");
                break;
              
                
            case '/register':
                require_once("index.php");
                require_once("navigation.php");
                require_once("register.php");
                require_once("footer.php");
                break;

            case '/manage-profile':
                require_once("index.php");
                require_once("navigation.php");
                require_once("manage-profile.php");
                require_once("footer.php");
                break;

            case '/forget-password':
                require_once("index.php");
                require_once("navigation.php");
                require_once("frgtpassword.php");
                require_once("footer.php");
                break;

            case '/change-password':
                require_once("index.php");
                require_once("navigation.php");
                require_once("changepassword.php");
                require_once("footer.php");
                break;


            default:
                
                require_once("navigation.php");
                require_once("404.php");
                require_once("footer.php");
         }
    }
  }
}
$obj=new controller();

?>

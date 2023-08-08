<?php
require_once("model/adminmodel.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Admincontroller extends Adminmodel
{
    public function __construct()
    {
        //logic
        
        parent::__construct();
        //show data for contact logic
        $shwdata=$this->showalldata('tbl_contact');

        //show data for user
        $shwcustomer=$this->showalldata('tbl_customer'); 
          
        //show data for contact logic
        $countdata=$this->countalldata('tbl_customer','c_id');

        //show managecategory in table
         $showcat=$this->showalldata('tbl_addcategory');


        //insert data into addcategory
        if(isset($_POST["Addcat"]))
        {
            $cnm=$_POST["catnm"];
           
            $data=array("Category_Name"=>$cnm);
            $addcat=$this->insertdata($data,'tbl_addcategory');
            if($addcat)
            {
                echo "<script>
                alert('thnks for inserted')
                window.location='Admin-addcategory';
                </script>";
            }
        }

          //insert data into addsubcategory
          if(isset($_POST["AddSubcat"]))
          {
              $cnm=$_POST["addcatnm"];
              $subcatnm=$_POST["subcatnm"];
              $subdt1=$_POST["addsubdate"];
              $data=array("category_id"=>$cnm,"SubCategory_Name"=>$subcatnm,"Added_date"=>$subdt1);
               $addsubcat=$this->insertdata($data,'tbl_subcategory');
              if($addsubcat)
              {
                  echo "<script>
                  alert('thnks for inserted')
                  window.location='Admin-addsubcategory';
                  </script>";
              }
          }
        //show managecategory in table
         $showsubcat=$this->showalldata('tbl_subcategory');
          //manage and join a data
        $joinsubcat=$this->joinalldata('tbl_subcategory','tbl_addcategory','tbl_subcategory.category_id=tbl_addcategory.category_id');

        // add product        
         if(isset($_POST["Addpro"]))
         {
            $catnm=$_POST["catnm"];
            $subcatnm=$_POST["subcatnm"];
            $pnm=$_POST["pnm"];
            $tmp_name=$_FILES["pimg"]["tmp_name"];
            $path="upload/product_image/".$_FILES["pimg"]["name"];
            move_uploaded_file($tmp_name,$path);
            $prt=$_POST["price"];
            $adt=$_POST["pdate"];
            $pdesc=$_POST["pdesc"];
            $data=array("category_id"=>$catnm,"subcat_id"=>$subcatnm,"Product_Name"=>$pnm,"Product_Photo"=>$path,"Price"=>$prt,"Add_date"=>$adt,"Description"=>$pdesc);
            $addproduct=$this->insertdata($data,'tbl_product');
            if($addproduct)
            {
                echo "<script>
                    alert('Product inserted successfully')
                    window.location='Admin-addproduct';
                
                </script>";
            }

         }   
            // show all product
             $showpro=$this->showalldata('tbl_product');
            
            //join product
            $joinpro=$this->joinallpro('tbl_product','tbl_addcategory','tbl_subcategory','tbl_product.category_id=tbl_addcategory.category_id','tbl_product.subcat_id=tbl_subcategory.subcat_id');
            
        // delete a data
            if(isset($_GET["deletaddcat_id"]))
            {
                $delid=$_GET["deletaddcat_id"];
                $id=array("category_id"=>$delid);
                $chk=$this->deletedata('tbl_addcategory',$id);
                if($chk)
                {
                    unset($_SESSION["stid"]);
                    unset($_SESSION["email"]);
                    unset($_SESSION["fnm"]);
                    session_destroy();
                    echo "<script>
                    alert('Deleted successfully')
                    window.location='Admin-managecategory';
                    </script>";

                }
            }

            // delete product a data
            if(isset($_GET["deleteproduct"]))
            {
                $delid=$_GET["deleteproduct"];
                $id=array("pro_id"=>$delid);
                $chk=$this->deletedata('tbl_product',$id);
                if($chk)
                {
                    unset($_SESSION["stid"]);
                    unset($_SESSION["email"]);
                    unset($_SESSION["fnm"]);
                    session_destroy();
                    echo "<script>
                    alert('Deleted successfully')
                    window.location='Admin-manageproduct';
                    </script>";

                }
            }

    // Edit category Data
    if(isset($_GET["edit"]))
    {
        $id=$_GET["edit"];
        $editdt=$this->editdata('tbl_addcategory',$id);
    }

       // update category data 
        if(isset($_POST["upd"]))
        {
           // $id=$_SESSION["stid"];
            $catnm=$_POST["catnm"];
            
            $chk=$this->updatedata('tbl_addcategory',$catnm,'category_id',$id);
            if($chk)
            {
                echo "<script>
                alert('Your category updated successfully')
                window.location='Admin-managecategory';
                </script>";
            }
        }

 // Edit subcategory Data
 if(isset($_GET["editsubcat"]))
 {
     $id=$_GET["editsubcat"];
     $editdt=$this->editdata('tbl_subcategory',$id);
 }





        // Admin login here
        if(isset($_POST["submit"]))
        {
            $em=$_POST["email"];
            $pass=$_POST["password"];
            
            $login=$this->adminlogin('tbl_admin',$em,$pass);
            if($login==1)
            {
                echo "<script>
                    alert('you are successfully logged in!')
                    window.location='dashboard';
                    </script>";
            }
            else
            {
                echo "<script>
                    alert('your email and password are incorrect try again!')
                    window.location='login';
                    </script>";
            }
        }

        // add data in contact table logic
        if(isset($_POST["addcontact"]))
        {
            
            require_once("PHPMailer\PHPMailer.php");
            require_once("PHPMailer\SMTP.php");
            require_once("PHPMailer\Exception.php");

            $nm=$_POST["name"];
            $email=$_POST["email"];
            $enqry=$_POST["Enquiry"];
            $phn=$_POST["phone"];

           $mail = new PHPMailer(true);
            try {
   

        //Server settings
        $mail->SMTPDebug = true;                                     //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'jigna434@gmail.com';                     //SMTP username
        $mail->Password   = 'hpzhtuezpywnanka';                               //SMTP password
        $mail->SMTPSecure = 'TLS';                                //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($_POST["email"], 'Mail sending');
        $mail->addAddress('jigna434@gmail.com', 'Contact us mail sending');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contact with us email sending data';
        $mail->Body    = "<img src='https://www.google.com/url?sa=i&url=https%3A%2F%2Fgifer.com%2Fen%2Fgifs%2Femail&psig=AOvVaw3WZ8dp_6oCrKu7kKNVVlLj&ust=1679648379025000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCKDQ-v3X8f0CFQAAAAAdAAAAABBj' width='30%' height='150px'"."<br>".
                         "Customer name is :".$nm."<br>"."Email address is:".$email."<br>"."Enquiry is :".$enqry."<br>"."Phone no is :".$phn."<br>";

        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        $mail->send(); 
        
        $data=array("Name"=>$nm,"Email"=>$email,"Enquiry"=>$enqry,"Phone"=>$phn);
        $chk=$this->insertdata($data,'tbl_contact');
        if($chk)
        {
            echo "<script>
                alert('Thank you for contact with me.');
                window.location='contact-us';
            </script>";
        }
     

        // echo "Thank you for contact with us";
        // header("refresh:2,emailmsg.php");
        
        
    } 
    catch (Exception $e) 
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

       
   

        }


        // // load template routing
        if($_SERVER["PATH_INFO"])
        {   
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("login.php");
                    require_once("footer.php");
                  break;


                case '/dashboard':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("dashboard.php");
                    require_once("footer.php");
                break;

                case '/Admin-managecustomer':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managecustomer.php");
                    require_once("footer.php");
                break;

                case '/Admin-managecontact':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managecontacts.php");
                    require_once("footer.php");
                break;

                case '/Admin-addcategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addcategory.php");
                    require_once("footer.php");
                break;
                 
                case '/Admin-editcategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("editcategory.php");
                    require_once("footer.php");
                break;

                case '/Admin-managecategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managecategory.php");
                    require_once("footer.php");
                break;

                case '/Admin-addsubcategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addsubcategory.php");
                    require_once("footer.php");
                break;
                 
                case '/Admin-editsubcategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("editsubcategory.php");
                    require_once("footer.php");
                break;

                case '/Admin-managesubcategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managesubcategory.php");
                    require_once("footer.php");
                break;

                case '/Admin-addproduct':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addproduct.php");
                    require_once("footer.php");
                break;

                case '/Admin-manageproduct':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("manageproduct.php");
                    require_once("footer.php");
                break;



                default:
                    require_once("index.php");
                    require_once("header.php");
                    require_once("404.php");
                    require_once("footer.php");

            }
        }


    }
}
$obj=new Admincontroller;

?>
<?php
class model
{   public $connection="";
    public function __construct()
    {
        try
        {
            session_start();
            // database connection
            $this->connection=new mysqli("localhost","root","","royalcatering");
            // echo "connection succesfully";
        }
        catch(Exception $e)
        {
            die(mysqli_error());
        }
    }
        // create a member function to insert a data
        public function insertdata($table,$data)
        {
            $column=array_keys($data);
            $column1=implode(",",$column);

            $value=array_values($data);
            $value1=implode("','",$value);

            $insert="insert into $table($column1) values('$value1')";
            $exe=mysqli_query($this->connection,$insert);
            return $exe;
        }

        //create a member to show a user data
        public function showdata($table)
        {
            $shw="select * from $table";
            $exe=mysqli_query($this->connection,$shw);
            while($fetch=mysqli_fetch_array($exe))
            {
                $arr[]=$fetch;
            } 
            return $arr;
        }

        // create a member function to join a data
        public function joindata($table,$table1,$table2,$where,$where1)
        {
             $join="select * from $table join $table1 on $where join $table2 on $where1" ;
            $exe=mysqli_query($this->connection,$join);
            while($fetch=mysqli_fetch_array($exe))
            {
                $arr[]=$fetch;
            }
            return $arr;
        }

        // create a member function to manage all data
        public function managedata($table,$table1,$table2,$where,$where1,$column,$id)
        {
             $join="select * from $table join $table1 on $where join $table2 on $where1 where $column='$id'" ;
            $exe=mysqli_query($this->connection,$join);
            while($fetch=mysqli_fetch_array($exe))
            {
                $arr[]=$fetch;
            }
            return $arr;
        }

       //create a member fumction to display category of product
        public function selectdetails($table,$column,$id)
        {
            $sel="select * from $table where $column='$id'";
            $exe=mysqli_query($this->connection,$sel);
            while($fetch=mysqli_fetch_array($exe))
            {
                $arr[]=$fetch;
            }
            return $arr;
        }

          // create a member function for select count total of added in cart by customer
            public function selectcount($table,$column,$column1,$id)
            {
               $select="select count($column) as total from $table where $column1='$id'";
                $exe=mysqli_query($this->connection,$select);
                while($fetch=mysqli_fetch_array($exe))
                {
                    $arr[]=$fetch;
                }
                return $arr;
            }

            // create a member function for select count total of added in cart by customer
            public function selectsumcart($table,$column,$column1,$id)
            {
               $select="select sum($column) as sum_total from $table where $column1='$id'";
                $exe=mysqli_query($this->connection,$select);
                while($fetch=mysqli_fetch_array($exe))
                {
                    $arr[]=$fetch;
                }
                return $arr;
            }

       //create a member function to view cart
        public function viewcart($table,$table1,$table2,$where,$where1,$column,$id)
        {
            $select="select * from $table join $table1 on $where join $table2 on $where1 where $table2.$column='$id'";
            $exe=mysqli_query($this->connection,$select);
            while($fetch=mysqli_fetch_array($exe))
            {
                $arr[]=$fetch;
            }
            return $arr;
        }

          // delete a data for users create a member function
          public function deletedata($table,$id)
          {
              $column=array_keys($id);
              $column1=implode(",",$column);
      
              $value=array_values($id);
              $value1=implode("','",$value);
      
              $delete="delete from $table where $column1='$value1'";
              $exe=mysqli_query($this->connection,$delete);
              return $exe;
          }

        //create a member function to user login
        public function userlogin($table,$em,$pass)
        {
            $sel="select * from $table where Email='$em' and Password='$pass'";
            $exe=mysqli_query($this->connection,$sel);
            $fetch=mysqli_fetch_array($exe);
            $no_rows=mysqli_num_rows($exe);
            if($no_rows==1)
            {
                $_SESSION['c_id']=$fetch['c_id'];
                $_SESSION['email']=$fetch['Email'];
                $_SESSION['fnm']=$fetch['FirstName'];
                return true;

            }
            else
            {
                return false;
            }
        }

        //create a member function of forget password
        public function forgetpass($table,$column,$em)
        {
            $sel="select Password from $table where $column='$em'";
            $exe=mysqli_query($this->connection,$sel);
            $fetch=mysqli_fetch_array($exe);
            $no_rows=mysqli_num_rows($exe);
            if($no_rows==1)
            {
                $pass=base64_decode($fetch["Password"]);
                return $pass;
            }
            else
            {
                return false;
            }
        }

        // create a member function to change password
        public function changepassword($table,$opass,$npass,$cpass,$column,$id)
        {
            $id=$_SESSION["c_id"];
            $sel="select Password from $table where $column='$id'";
            $exe=mysqli_query($this->connection,$sel);
            $fetch=mysqli_fetch_array($exe);
            $pass=$fetch["Password"];
            if($pass==$opass && $npass==$cpass)
            {
               $chng="update $table set Password='$npass' where $column='$id'";
                $exe=mysqli_query($this->connection,$chng);
                return $exe;
            }
            else
            {
                return false;
            }
        }
             // edit a data for users create a member function
            public function editdata($table,$id)
            {
                $edit="select * from $table";
                $exe=mysqli_query($this->connection,$edit);
                while($fetch=mysqli_fetch_array($exe))
                {
                        $arr[]=$fetch;
                }
                return $arr;
            }

        // create a member function for update a data
        public function updatedata($table,$path,$em,$phn,$st,$ct,$column,$id)
        {
            $upd="update $table set Photo='$path',Email='$em',Phone='$phn',state_id='$st',city_id='$ct' where c_id='$id'";
            $exe=mysqli_query($this->connection,$upd);
            return $exe;
        }

        // create a member function for update a data
        public function updateorder($table,$nm,$em,$dttm,$per,$req,$id)
        {
            $upd="update $table set Name='$nm',Email='$em',Date_Time='$dttm',Person='$per',Request='$req' where '$id'";
            $exe=mysqli_query($this->connection,$upd);
            return $exe;
        }



        //create a member function to logout
        public function logout()
        {
            unset($_SESSION["c_id"]);
            unset($_SESSION["email"]);
            unset($_SESSION["fnm"]);
            session_destroy();
            return true;
        }


}

?>
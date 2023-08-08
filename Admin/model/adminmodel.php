
<?php

class Adminmodel
{
    public $connection="";
    public function __Construct()
    {
        session_start();
        //database connection
        //Exception handling
        try
        {
            $this->connection=new mysqli("localhost","root","","royalcatering");
           // echo "connection successfully";

        }
        catch(Exception $e)
        {
            die(mysqli_error());
        }
    }
    public function insertdata($data,$table)
    {   
        $column=array_keys($data);
        $column1=implode(",",$column);

        $value=array_values($data);
        $value1=implode("','",$value);

        $insert="insert into $table($column1)values('$value1')";
        $exe=mysqli_query($this->connection,$insert);
        return $exe;

    }
    public function showalldata($table)
    {
        $sel="select * from $table";
        $exe=mysqli_query($this->connection,$sel);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
    public function joinalldata($table,$table1,$where)
    {
        $select="select * from $table join $table1 on $where ";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    //join category,subcategory and product 
    public function joinallpro($table,$table1,$table2,$where,$where1)
    {
        $select="select * from $table join $table1 on $where join $table2 on $where1";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    public function countalldata($table,$column)
    {
        $count="select count($column) as total from  $table";
        $exe=mysqli_query($this->connection,$count);
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
           
        // update a data for users create a member function
        public function updatedata($table,$catnm,$column,$id)
        {

           // $id=$_SESSION["stid"];
            $update="update $table set Category_Name='$catnm' where $column='$id'";
            $exe=mysqli_query($this->connection,$update);
            return $exe;
        }
         // update a subcatdata for users create a member function
         public function updatesubcatdata($table,$addcatnm,$subcatnm,$addate,$column,$id)
         {
 
            // $id=$_SESSION["stid"];
             $update="update $table set category_id='$addcatnm', SubCategory_Name='$subcatnm',Added_date='$addate' where $column='$id'";
             $exe=mysqli_query($this->connection,$update);
             return $exe;
         }


    public function adminlogin($table,$em,$pass)
    {
        $log="select * from $table where  Email='$em' and Password='$pass'";
        $exe=mysqli_query($this->connection,$log);
        $fetch=mysqli_fetch_array($exe);
        $no_row=mysqli_num_rows($exe);
        if($no_row==1)
        {
            $_SESSION["Admin_Id"]=$fetch["Admin_Id"];
            $_SESSION["Email"]=$fetch["Email"];
            return true;
        }
        else
        {
            return false;
        }

    }
         
}

?>
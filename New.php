<html>
<head>
    <style>
        form{
            border: 3px solid #f1f1f1; width: 600px ;height:500px;display: inline-block;text-align: left;padding-bottom: 30px;
            color:darkmagenta;
            border:0;
            font-size: 20px;
        }
        #xx{
             display: block;
        text-align: center;
        }
    input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
        
    </style>
</head>
<body>
    <?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db="mydb";
$conn = new mysqli($servername, $username, $password);
$conn = mysqli_connect($servername, $username, $password);
   if (isset($_POST['Sub'])) {
  $ID= $_POST['ID'];
   $Name=$_POST['Name'];
   $Date_Of_Entry=$_POST['Date_Of_Entry'];
      $Name_of_disease=$_POST['Name_of_disease'];
      $Physican_name=$_POST['Physican_name'];
      $Last_visit_date =$_POST['Last_visit_date'];
     $No_of_Medicines= $_POST['No_of_Medicines'];
    $Date_which_it_took_place =$_POST['Date_which_it_took_place'];
   
    
    
    
      $insert= "insert into mydb.patient values('$ID','$Name',' $Date_Of_Entry','$Name_of_disease','$Physican_name','$Last_visit_date','$No_of_Medicines','$Date_which_it_took_place')";
       if($ID != "select ID from patient")
       { $result=mysqli_query($conn,$insert);}
       else
           echo " that ID Has Been Added Before";
       
             echo'<script>alert("Patient Has been Added Successfully");</script>';


   }
?>
     <?php 
            if(isset($msg)){ 
                echo '<div class="statusmsg">'.$msg.'</div>';
            } 
    ?>
    <div id="xx">
    <form method="post">
            ID <input name="ID" type=number>   
    <br>    Name <input name="Name">
    <br>    Date_Of_Entry <input name="Date_Of_Entry" type="date" >
    <br>    Name_of_disease <input name="Name_of_disease" >
    <br>    Physican_name <input name="Physican_name">
    <br>    Last_visit_date <input name="Last_visit_date" type="date">
    <br>    No_of_Medicines <input name="No_of_Medicines" type=number>
    <br>    Date_which_it_took_place <input name="Date_which_it_took_place" type=date>
        <br> <input type="submit" value="Insert" name="Sub">
        
    </form>
        </div>
  <?php
    mysqli_close($conn);
    ?>
</body>


</html>
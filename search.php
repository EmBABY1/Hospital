
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db="mydb";
//$conn = new mysqli($servername, $username, $password);
//$conn = mysqli_connect($servername, $username, $password);  

$con=new mysqli($servername,$username,$password,$db);
if(isset($_POST['search']))
{$search_value=$_POST['search'];
       $sql="select * from mydb.patient where ID = '$search_value'";
                $res=$con->query($sql);
                while($row=$res->fetch_assoc()){
                echo '<table id="table" align="center"><tr><td>Name:</td><td>  '.$row["Name"];
                echo '</td></tr><tr><td>Name_of_disease:</td><td>'.$row['Name_of_disease'];
                echo '</td></tr><tr><td>Physican_name:</td><td>'.$row['Physican_name'];
                echo '</td></tr><tr><td>Last_visit_date:</td><td>'.$row['Last_visit_date'];
                echo '</td></tr><tr><td>No_of_Medicines:</td><td>'.$row['No_of_Medicines'];
                echo '</td></tr><tr><td>Date_which_it_took_place:</td><td>'.$row['Date_which_it_took_place'];
                echo '</td></tr></table>';
                }
}
?>





    
<html>
<head>
<style>
    #table{
        border: 1;
        text-align:"center";
        background-color: antiquewhite;
    }    
</style>   
    
    
</head>
<body>
<form method="POST" action='search.php'>
    ID<input type=text name='search'><br>
   
    <input type="submit" value="Find" >  
 </form>
</body>



</html>

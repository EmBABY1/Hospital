
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db="mydb";
//$conn = new mysqli($servername, $username, $password);
//$conn = mysqli_connect($servername, $username, $password);  

$con=new mysqli($servername,$username,$password,$db);

       $sql="select *
from patient
where physican_name in(
select physican_name
from patient
group by Physican_name
having count(Physican_name)>1
)
";
                $res=$con->query($sql);
                while($row=$res->fetch_assoc()){
                echo '<table id="table" align="center"><tr><td>Name:</td><td>'.$row["Name"];
                echo '</td></tr><tr><td>Name_of_disease:</td><td>'.$row['Name_of_disease'];
                echo '</td></tr><tr><td>Physican_name:</td><td>'.$row['Physican_name'];
                echo '</td></tr><tr><td>Last_visit_date:</td><td>'.$row['Last_visit_date'];
                echo '</td></tr><tr><td>No_of_Medicines:</td><td>'.$row['No_of_Medicines'];
                echo '</td></tr><tr><td>Date_which_it_took_place:</td><td>'.$row['Date_which_it_took_place'];
                echo '</td></tr></table><br>';
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
 
</body>



</html>

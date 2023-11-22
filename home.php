<html>
<head>
<style>
    body
    {
       background-image: url("HOSPITAL.jpg");
        background-repeat: no-repeat;
        background-size: auto;
        background-position: center;
        background-color: aquamarine;
    }
  .top_nav
    {
        background-color: #333;
        overflow: hidden;
    }
    .top_nav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
    .top_nav a:hover {
  background-color: #ddd;
  color: black;
}
    .top_nav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>    
</head>
<body>
    <nav class="top_nav">
       
                 <a href="home.php" >Home</a>
                <a href="new.php" target="1">New Patient</a>

                <a href="search.php" target="1" >Search for Patient</a>
           
                <a target="1" href="display.php">Display Patient's Medical History </a>
           
                <a target="1" href="report.php">report on the patients’ names that are visiting a certain physician today.</a>
            
      
    </nav>
     <br><br> <br><br> <h1 style="text-align:center;color:black"> 
        Welcome To Our Hospital 
    </h1>
    <iframe name="1" width=100%; height=100% frameborder=0>
  
    
    </iframe>
</body>

</html>
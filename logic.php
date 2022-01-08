<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     //get previous data
    
       
        $topic = $_POST['topic'];
        $difficulty = $_POST['difficulty'];
        $starter = "//practice.geeksforgeeks.org/explore/?difficulty%5B%5D=";
        $medium = "&page=1&category%5B%5D=";
        
        

        header('Location: '.$starter.$difficulty.$medium.$topic);


        
       
   
        // exact - https://practice.geeksforgeeks.org/explore/?difficulty%5B%5D=0&page=1&category%5B%5D=Arrays
        //mine - http://https//practice.geeksforgeeks.org/explore/?difficulty%5B%5D=0&page=1&category%5B%5D=Arrays
          
        
        
    

    
   
      
    




}


?>

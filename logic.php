<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     //get previous data
     function get_data() {
        $name = $_POST['name'];
       
   
        
            $current_data=file_get_contents("../Problems.json");
            $array_data=json_decode($current_data, true);
                               
            $extra=array(
                'name' => $_POST['name'],
                'topic' => $_POST['topic'],
                'link' => $_POST['link'],
                'difficulty' => $_POST['difficulty']
            );
            $array_data[]=$extra;
            //echo "file exist<br/>";
            return json_encode($array_data);
        
        
    }

    //write data to file
   
        if(file_put_contents('../Problems.json', get_data())) {
            echo "Data successfully saved";
        }
        else{
            echo "error";
        }
    




}


?>
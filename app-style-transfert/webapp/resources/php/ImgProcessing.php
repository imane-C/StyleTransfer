<?php

class Process{

    static function processImg(){

        /////IMG UPLOAD/////
        
        // if(isset($_FILES['file']['name'])){

        //     // file name
        //     $filename = date("Y-m-d")."_".$_FILES['file']['name'];
                        
        //     // Location
        //     $location = 'imgprocess/'.$filename;
                        
        //     // file extension
        //     $file_extension = pathinfo($location, PATHINFO_EXTENSION);
        //     $file_extension = strtolower($file_extension);
                        
        //     // Valid extensions
        //     $valid_ext = array("jpg","jpeg","png");
                     
        //     $response = 0;
        //     if(in_array($file_extension,$valid_ext)){
        //         // Upload file
        //         if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
        //             $response = 1;
        //         } 
        //     }
            
        //     $answer=[$filename,$response];
        //     echo json_encode($answer); 
        //     exit;
        // }


        /////IMG PROCESS/////

        $output = exec('D:Wampdata/www/Projet_M2_S1_IA/site_projet_ia_m2_s1/app-style-transfert/webapp/resources/php/pythonscript/process.py');
        echo $output;
    }
}

?>
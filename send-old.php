<?php 
        $phone_number = $_GET['phone_number'];
        $message = urlencode($_GET['message']);

        $api_url = "https://rest.nexmo.com/sms/json?api_key=4d17a6dc&api_secret=2655a69b&from=Textmenow&to=". $phone_number ."&text=". $message;
        // echo json_encode($api_url);
        // exit;

        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $api_url); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);      

        echo json_encode($output);
        exit;
?>
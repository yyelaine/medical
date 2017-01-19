<?php  
    $succss = "";  
    if(isset($_POST))  
    {  
    $username = ($_POST['username']);  
    $password = ($_POST['password']);  
    $error = array();  
    if(empty($username)){  
    $error[] = "Enter your username";  
    } 
    if(empty($password)){  
    $error[] = "Enter your password";  
    }  
    

    if(count($error) == 0){  
        require 'vendor/autoload.php';//include Composer goodies
        $client = new MongoDB\Client("mongodb://root:fP3hALDsg7DfYDxU320cP5RpcOLvMWEbQBhSinbP@wifvirdmcufy.mongodb.sae.sina.com.cn:10303,lzcbpsjkjrtx.mongodb.sae.sina.com.cn:10303");
        if($client){  
            $collection = $client->medical->users; 
            $document = $collection->findOne([
                "user_id" => $username,"password" => $password]);
            if($document){  
                echo "\n";
                var_dump($document);
                echo "\n";
            }  
        } 
    }  
    }  
?>  
<?php 
        include 'databaseconnect.php';
        require 'databaseconnect.php';
 //       include '../pdoconfig.php';
//require_once '../pdoconfig.php';

//try {
  //  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username);
    // set the PDO error mode to exception
  //  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  echo "Connected successfully";
 // } catch(PDOException $e) {
  //  echo "Connection failed: " . $e->getMessage();
 // }
    $name = $company = $email = $telephone = $message = "";
    $opt_in = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        validate($conn);
    }


    function formatInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function validate($lconn){
        $name = formatInput($_POST["ename"]);
        $company = formatInput($_POST["ecompany"]);
        $email = formatInput($_POST["eemail"]);
        $telephone = formatInput($_POST["etel"]);
        $message = formatInput($_POST["emessage"]);
        $opt_in = isset($_POST["echeckbox_input"]);//intval(formatInput($_POST["echeckbox_input"]));
        if($opt_in==NULL){
            $opt_in = 0;
        }
        else{
            $opt_in = 1;
        }
        $telephone = str_replace(" ","",$telephone);

        $error_message = "";
        $error_message .= stringValidation($name,"Name");
        //$error_message .= stringValidation($company,"Company");
        $error_message .= emailValidation($email);
         $error_message .= phoneValidation($telephone);
        echo $error_message;
        if($error_message===""){
            $query = "INSERT INTO enquiry (name,company,email,phone,message,marketing_opt_in) VALUES ('" . $name . "','" . $company . "','" . $email . "','" . $telephone . "','" . $message . "'," . $opt_in . ")";
            $res = $lconn->exec($query);
            echo "Your message has been sent!";
        }


    }
    function phoneValidation($v){
        $reg = "#^[+]?[ (]?[0-9]{3}[)]?[-.\s]?[0-9]{3}[-.\s]?[0-9]{4,6}$#";
        if(preg_match($reg,$v)){
            return "";
        }
        else{
            return "Phone number is invalid" . "<br>";
        }
    }
    function stringValidation($v,$n){
        $reg = "#^[a-zA-Z\s]*$#"; //"#^[a-zA-Z\\s]+#";//"#^([A-Z][a-z]+)(?:\s[A-Z][a-z]+)*$#";
        if(preg_match($reg,$v)){
            return "";
        }
        else{
            return $n . " needs to only include letters" . "<br>";
        }
    }
    function emailValidation($v){
        $reg = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        if(preg_match($reg,$v)){
            return "";
        }
        else{
            return "Email is invalid" . "<br>";
        }
    }
?>
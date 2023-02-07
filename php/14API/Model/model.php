<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting();       
date_default_timezone_set('Asia/Kolkata');
  
// mysqli_report(MYSQLI_REPORT_ALL);
class Model{
    public $connection = "";
    public function __construct() {
    
        // echo "called Model";
        // echo "<br>";
        try {
            $this->connection = new mysqli("localhost", "root", "", "masterdatabase");
            // echo "called try";
        } catch (Exception $e) {
            
            // echo "called catch";
            // echo "<pre>";
            // print_r($e->getMessage());
            // print_r($e->getMessage());
            // echo "</pre>";
            
            $ErrorMsg = PHP_EOL."Error Msg >> " .$e->getMessage().PHP_EOL;
            $ErrorMsg .= PHP_EOL."Error Date Time >> " .Date("d_m_y H:i:s A").PHP_EOL;
            echo "<H2>$ErrorMsg</H2>";
            if (!file_exists("log")) {
                mkdir("log");
            } 
            $Filename = date("d_m_y");
              file_put_contents("log/" .$Filename. "log.txt",$ErrorMsg, FILE_APPEND);  
        }
        // echo "<pre>";
        // print_r($thish->connection);
        // echo "</pre>";
            
    
    }
    public function select($tbl){

    $SQL = "SELECT * FROM $tbl";

        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx->num_rows > 0) {
            
            while ($SQLExFetch = $SQLEx->fetch_object()) {
                $SQLExFetchData[]=$SQLExFetch;
            }
            
            $Responsedata['Code']="1";
            $Responsedata['Msg']="success";
            $Responsedata['Data']=$SQLExFetchData;
        } else {
            $Responsedata['Code']="0";
            $Responsedata['Msg']="Error while inserting";
            $Responsedata['Data']="0";
        }
        
        return $Responsedata;
            
        

    }
    // public function select(){}
    public function insert($tbl,$data){
        // $SQL = "INSERT INTO user(username,PASSWORD)VALUES('test''123')";
        // $SQL = "INSERT INTO city(city_titel)VALUES('test')";                                                                                                                                                                                                                                                                                                                                                                                                                     
        
       $arraykey = implode(",", array_keys($data)); 
       $arrayvalues = implode("','", ($data)); 
        // echo "<pre>";
        // print_r($data);
        // print_r($arraykey);
        // echo "</pre>";
       echo $SQL = "INSERT INTO $tbl($arraykey)VALUES('$arrayvalues')";
    //    echo $SQL = $connection->query("INSERT INTO ($arraykey)VALUES('$arrayvalues')");
        $SQLEx = $this->connection->query($SQL);
       if ($SQLEx > 0) {
        $Responsedata['Code']="1";
        $Responsedata['Msg']="success";
        $Responsedata['Data']="1";
       } else {
        $Responsedata['Code']="0";
        $Responsedata['Msg']="Error while inserting";
        $Responsedata['Data']="0";
       }
       return $Responsedata;

    }
    public function update(){}
    public function delete(){}
}

?>
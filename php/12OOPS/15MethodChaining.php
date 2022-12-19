<?php


class CustomQuery{
    public $SQL ="";
    public function select($clm)
    {
    //   $SQl  = "SELECT $clm";
        // return $SQL;
        $this->SQL .= "SELECT $clm ";
        return $this;
    }
    
    public function From($tbl)
    {
        $this->SQL .= "FROM $tbl ";
        // return $SQL;
        return $this;
    }
    public function where($whr)
    {
        $this->SQL .= "WHERE $whr ";
        // return $SQL;
        return $this;
    }
}
 

$CustomQuery = new CustomQuery;

// echo $CustomQuery->select("*");
// echo "<br>";
// echo $CustomQuery->From("user");
// echo "<br>";
// echo $CustomQuery->where("user");
// echo "<br>";
$data = $CustomQuery->select("user")->From("")->WHERE("spiderman")->SQL;
print_r($data);

?>
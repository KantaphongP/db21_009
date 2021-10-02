<?php class Staff{
    public $SID,$Name;
    public function __construct($SID,$Name){
        $this->SID = $SID;
        $this->Name = $Name;
    }
    public static function getAll(){
        $StaffList=[];
        require("connection_connect.php");
        $sql ="SELECT Staff.SID,Staff.Name FROM Staff" ;
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $SID = $my_row[SID];
            $Name = $my_row[Name];
            $StaffList[]= new Staff($SID,$Name);
        }
    
        require("connection_close.php");
        return $StaffList ;
    }
}
?>
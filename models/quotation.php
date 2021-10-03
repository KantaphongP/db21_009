<?php
class Quotation{
    public $QID;
    public $date;
    public $Staff;
    public $customer;
    public $Payment_Type;
    public $detail;

    public function __construct($QID,$date,$Staff,$customer,$Payment_Type,$detail)
    {
        $this->QID =  $QID;
        $this->date = $date;
        $this->Staff = $Staff;
        $this->customer = $customer;
        $this->Payment_Type = $Payment_Type;
        $this->detail = $detail;
    }

    public static function getAll(){
        $quotation_list=[];
        require("connection_connect.php");
        $sql = "SELECT DISTINCT Qc.QID , Qc.date AS date_order , Qc.Name AS Name_order, Qc.CName ,Payment_Terms.Terms , Qc.detail 
        FROM (SELECT Q.QID , Q.date , Q.Name , Customer.CName ,Q.Payment_type , Q.detail 
        FROM (SELECT Quotation.QID ,Quotation.date , Staff.Name ,Quotation.customer , Quotation.Payment_Type ,Quotation.detail 
        FROM Quotation INNER JOIN Staff ON Quotation.Staff =Staff.SID) AS Q INNER JOIN Customer ON Q.customer = Customer.CID) AS 
        Qc INNER JOIN Payment_Terms ON Qc.Payment_Type = Payment_Terms.Terms" ;
        /*$sql ="select * from Quotation" ;*/
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $QID =$my_row[QID];
            $date = $my_row[date_order];
            $Staff = $my_row[Name_order];
            $customer =$my_row[CName];
            $Payment_Type = $my_row[Terms];
            $detail = $my_row[detail];
            $quotation_list[]= new Quotation($QID,$date,$Staff,$customer,$Payment_Type,$detail);

        }

        require("connection_close.php");
        return $quotation_list ;
    }

    public static function Add($QID,$date,$Staff,$customer,$Payment_Type,$detail)
    {
        
        require("connection_connect.php");
        $sql ="INSERT INTO Quotation(QID,date_order,Name_order,CName,Terms,detail) VALUES 
        ('$QID','$date','$Staff','$customer','$Payment_Type','$detail')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }

    public static function get($Staff,$customer,$Payment_Type){

        require("connection_connect.php");
        $sql = "SELECT DISTINCT Qc.QID , Qc.date AS date_order , Qc.Name AS Name_order, Qc.CName ,Payment_Terms.Terms , Qc.detail 
        FROM (SELECT Q.QID , Q.date , Q.Name , Customer.CName ,Q.Payment_type , Q.detail 
        FROM (SELECT Quotation.QID ,Quotation.date , Staff.Name ,Quotation.customer , Quotation.Payment_Type ,Quotation.detail 
        FROM Quotation INNER JOIN Staff ON Quotation.Staff =Staff.SID) AS Q INNER JOIN Customer ON Q.customer = Customer.CID) AS 
        Qc INNER JOIN Payment_Terms ON Qc.Payment_Type = Payment_Terms.Terms
        where Name_order = '$Staff' AND CName = '$customer'AND Terms = '$Payment_Type' " ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $QID =$my_row[QID];
        $date = $my_row[date_order];
        $Staff = $my_row[Name_order];
        $customer =$my_row[CName];
        $Payment_Type = $my_row[Terms];
        $detail = $my_row[detail];
        require("connection_close.php");
        return new Quotation($QID,$date,$Staff,$customer,$Payment_Type,$detail);

    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql = "SELECT DISTINCT Qc.QID , Qc.date AS date_order , Qc.Name AS Name_order, Qc.CName ,Payment_Terms.Terms , Qc.detail 
        FROM (SELECT Q.QID , Q.date , Q.Name , Customer.CName ,Q.Payment_type , Q.detail 
        FROM (SELECT Quotation.QID ,Quotation.date , Staff.Name ,Quotation.customer , Quotation.Payment_Type ,Quotation.detail 
        FROM Quotation INNER JOIN Staff ON Quotation.Staff =Staff.SID) AS Q INNER JOIN Customer ON Q.customer = Customer.CID) AS 
        Qc INNER JOIN Payment_Terms ON Qc.Payment_Type = Payment_Terms.Terms
        where (Qc.QID LIKE '%$key%' OR Qc.date LIKE '%$key%' OR Qc.Name LIKE '%$key%' OR Qc.CName LIKE '%$key%' 
        OR Payment_Terms.Terms LIKE '%$key%' OR Qc.detail LIKE '%$key%')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $QID =$my_row[QID];
            $date = $my_row[date_order];
            $Staff = $my_row[Name_order];
            $customer =$my_row[CName];
            $Payment_Type = $my_row[Terms];
            $detail = $my_row[detail];
            $quotation_list[]= new Quotation($QID,$date,$Staff,$customer,$Payment_Type,$detail);

            
        }

        require("connection_close.php");
        return $quotation_list ;

    }


}
?>
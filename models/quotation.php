<?php
class Quotation{
    public $QID;
    public $date_order;
    public $Staff;
    public $customer;
    public $Payment_Terms;
    public $detail;

    public function __construct($QID,$date_order,$Staff,$customer,$Payment_Terms,$detail)
    {
        $this->QID =  $QID;
        $this->date_order = $date_order;
        $this->Staff = $Staff;
        $this->customer = $customer;
        $this->Payment_Terms = $Payment_Terms;
        $this->detail = $detail;
    }
    
    public static function get($QID){

        require("connection_connect.php");
        $sql = "SELECT Qc.QID , Qc.date AS date_order , Qc.Name AS Staff, Qc.CName AS customer ,Payment_Terms.Payment_Terms , Qc.detail 
        FROM (SELECT Q.QID , Q.date , Q.Name , Customer.CName ,Q.Payment_Terms , Q.detail 
        FROM (SELECT Quotation.QID ,Quotation.date , Staff.Name ,Quotation.customer , Quotation.Payment_Terms ,Quotation.detail 
        FROM Quotation INNER JOIN Staff ON Quotation.Staff =Staff.SID) AS Q INNER JOIN Customer ON Q.customer = Customer.CID) AS 
        Qc INNER JOIN Payment_Terms ON Qc.Payment_Terms = Payment_Terms.Payment_Terms
        where QID = '$QID'  " ;
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $QID =$my_row[QID];
        $date_order = $my_row[date_order];
        $Staff = $my_row[Straff];
        $customer =$my_row[customer];
        $Payment_Terms = $my_row[Payment_Terms];
        $detail = $my_row[detail];
        require("connection_close.php");
        return new Quotation($QID,$date,$Staff,$customer,$Payment_Terms,$detail);

    }

    public static function getAll(){
        $quotation_list=[];
        require("connection_connect.php");
        $sql = "SELECT Qc.QID , Qc.date AS date_order , Qc.Name AS Staff, Qc.CName AS customer ,Payment_Terms.Payment_Terms , Qc.detail 
        FROM (SELECT Q.QID , Q.date , Q.Name , Customer.CName ,Q.Payment_Terms , Q.detail 
        FROM (SELECT Quotation.QID ,Quotation.date , Staff.Name ,Quotation.customer , Quotation.Payment_Terms ,Quotation.detail 
        FROM Quotation INNER JOIN Staff ON Quotation.Staff =Staff.SID) AS Q INNER JOIN Customer ON Q.customer = Customer.CID) AS 
        Qc INNER JOIN Payment_Terms ON Qc.Payment_Terms = Payment_Terms.Payment_Terms" ;
        /*$sql ="select * from Quotation" ;*/
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $QID =$my_row[QID];
            $date_order = $my_row[date_order];
            $Staff = $my_row[Staff];
            $customer =$my_row[customer];
            $Payment_Terms = $my_row[Payment_Terms];
            $detail = $my_row[detail];
            $quotation_list[]= new Quotation($QID,$date_order,$Staff,$customer,$Payment_Terms,$detail);

        }

        require("connection_close.php");
        return $quotation_list ;
    }
    
    public static function search($key)
    {
        $quotation_list=[];
        require("connection_connect.php");
        $sql = "SELECT Qc.QID , Qc.date AS date_order , Qc.Name AS Staff, Qc.CName AS customer ,Payment_Terms.Payment_Terms , Qc.detail 
        FROM (SELECT Q.QID , Q.date , Q.Name , Customer.CName ,Q.Payment_Terms , Q.detail 
        FROM (SELECT Quotation.QID ,Quotation.date , Staff.Name ,Quotation.customer , Quotation.Payment_Terms ,Quotation.detail 
        FROM Quotation INNER JOIN Staff ON Quotation.Staff =Staff.SID) AS Q INNER JOIN Customer ON Q.customer = Customer.CID) AS 
        Qc INNER JOIN Payment_Terms ON Qc.Payment_Terms = Payment_Terms.Payment_Terms
        where (Qc.QID LIKE '%$key%' OR Qc.date LIKE '%$key%' OR Qc.Name LIKE '%$key%' OR Qc.CName LIKE '%$key%' 
        OR Payment_Terms.Terms LIKE '%$key%' OR Qc.detail LIKE '%$key%')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $QID =$my_row[QID];
            $date_order = $my_row[date_order];
            $Staff = $my_row[Staff];
            $customer =$my_row[customer];
            $Payment_Terms = $my_row[Payment_Terms];
            $detail = $my_row[detail];
            $quotation_list[]= new Quotation($QID,$date_order,$Staff,$customer,$Payment_Terms,$detail);

            
        }

        require("connection_close.php");
        return $quotation_list ;

    }


    public static function Add($QID,$date_order,$Staff,$customer,$Payment_Terms,$detail)
    {
        
        require("connection_connect.php");
        $sql ="INSERT INTO Quotation(QID,date_order,Staff,customer,Payment_Terms,detail) VALUES 
        ('$QID','$date_order','$Staff','$customer','$Payment_Terms','$detail')";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }

    public static function update($QID,$date_order,$Staff,$customer,$Payment_Terms,$detail)
    {
        //echo "1" ; 
        require("connection_connect.php");
        //echo $extra_color ; 
        $sql = "UPDATE Quotation SET QID = '$QID' , date_order = '$date_order',Staff = '$Staff',customer = '$customer',Payment_Terms = '$Payment_Terms',detail = '$detail' 
        WHERE QID = '$QID' " ;
        $result=$conn->query($sql);
        //echo $extra_color ; 
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($QID)
    {
        //echo "00000";
        require("connection_connect.php");
        $sql ="DELETE from Quotation WHERE QID='$QID'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }

    

}
?>
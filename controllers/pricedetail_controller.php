<?php class PriceDetailController
{
    public function index()
    {
        $pricedetail_list = price_detail::getAll();
        require_once("./views/price_detail/index_pricedetail.php");
    }
    public function newPriceDetail()
    {
        $product_list = Product::getAll();
        require_once("./views/price_detail/newPriceDetail.php");
    }
    public function addPriceDetail()
    {
       //echo "000000";
       $PriceDetailID = $_GET['PriceDetailID'];
       $PRID = $_GET['PRID'];
       //$Name = $_GET['Name'];
       $จำนวนเริ่มต้น = $_GET['จำนวนเริ่มต้น'];
       $จำนวนสุดท้าย = $_GET['จำนวนสุดท้าย'];
       $price = $_GET['price'];
       $สกรีนเพิ่มสีละ = $_GET['สกรีนเพิ่มสีละ'];
       price_detail::Add($PriceDetailID,$PRID,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ);
       
       PriceDetailController::index();
    }
    public function search(){
        $key = $_GET['key'];
        $pricedetail_list = price_detail::search($key);
        require_once("./views/price_detail/index_pricedetail.php");
    }
    public function updateForm(){
        //echo " tttttt ";
        $PriceDetailID = $_GET['PriceDetailID'];
        $price_detail = price_detail::get($PriceDetailID);
        $product_list = Product::getAll();
        require_once("./views/price_detail/updateForm.php");
    }
    public function update()
    {
       //echo "000000";
       $PriceDetailID = $_GET['PriceDetailID'];
       $PRID = $_GET['PRID'];
       //$Name = $_GET['Name'];
       $จำนวนเริ่มต้น = $_GET['จำนวนเริ่มต้น'];
       $จำนวนสุดท้าย = $_GET['จำนวนสุดท้าย'];
       $price = $_GET['price'];
       $สกรีนเพิ่มสีละ = $_GET['สกรีนเพิ่มสีละ'];
       price_detail::update($PriceDetailID,$PRID,$จำนวนเริ่มต้น,$จำนวนสุดท้าย,$price,$สกรีนเพิ่มสีละ);
       PriceDetailController::index();
    }
    public function deleteConfirm(){
        //echo " tttttt ";
        $PriceDetailID = $_GET['PriceDetailID'];
        $price_detail = price_detail::get($PriceDetailID);
        require_once("./views/price_detail/deleteConfirm.php");
    }
    public function delete()
    {
       //echo "000000";
       $PriceDetailID = $_GET['PriceDetailID'];
       price_detail::delete($PriceDetailID);
       PriceDetailController::index();
    }
}?>
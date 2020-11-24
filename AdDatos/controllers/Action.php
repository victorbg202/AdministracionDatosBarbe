<?php
include 'class/Product.php';
$product = new Product();
if(isset($_POST["action"])){
$html = $product->searchProducts($_POST);
$data = array(
"html" => $html,
);
echo json_encode($data);
}

public function searchProducts(){
    $sqlQuery = "SELECT * FROM ".$this->productTable." WHERE status = '1'";
    if(isset($_POST["minPrice"], $_POST["maxPrice"]) && !empty($_POST["minPrice"]) && !empty($_POST["maxPrice"])){
    $sqlQuery .= "
    AND price BETWEEN '".$_POST["minPrice"]."' AND '".$_POST["maxPrice"]."'";
    }
    if(isset($_POST["brand"])) {
    $brandFilterData = implode("','", $_POST["brand"]);
    $sqlQuery .= "
    AND brand IN('".$brandFilterData."')";
    }
    if(isset($_POST["ram"])){
    $ramFilterData = implode("','", $_POST["ram"]);
    $sqlQuery .= "
    AND ram IN('".$ramFilterData."')";
    }
    if(isset($_POST["storage"])) {
    $storageFilterData = implode("','", $_POST["storage"]);
    $sqlQuery .= "
    AND storage IN('".$storageFilterData."')";
    }
    $sqlQuery .= " ORDER By price";
    $result = mysqli_query($this->dbConnect, $sqlQuery);
    $totalResult = mysqli_num_rows($result);
    $searchResultHTML = '';
    if($totalResult > 0) {
    while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    $searchResultHTML .= '
    <div class="col-sm-4 col-lg-3 col-md-3">
    <div class="product">
    <img src="images/'. $row['image'] .'" alt="" class="img-responsive" >
    <p align="center"><strong><a href="#">'. $row['name'] .'</a></strong></p>
    <h4 style="text-align:center;" class="text-danger" >'. $row['price'] .'</h4>
    <p>Camera : '. $row['camera'].' MP<br />
    Brand : '. $row['brand'] .' <br />
    RAM : '. $row['ram'] .' GB<br />
    Storage : '. $row['storage'] .' GB </p>
    </div>
    </div>';
    }
    } else {
    $searchResultHTML = '<h3>No product found.</h3>';
    }
    return $searchResultHTML;
    }
?>
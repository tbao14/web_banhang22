<?php
include "header.php";
include "slider.php";
include "../class/product_class.php";

?>

<?php
$product = new product;
$product_id = $_GET['product_id'];
$get_product = $product ->get_product($product_id);
if($get_product) {
    $result1 = $get_product -> fetch_assoc();/* result trung show_cartegory */
}

if($_SERVER['REQUEST_METHOD']=== 'POST'){
$cartegory_id= $_POST['cartegory_id'];
$brand_id = $_POST['brand_id'];
$product_name = $_POST['product_name'];/* lay tu input */
$product_gsp = $_POST['product_gsp'];
$product_km = $_POST['product_km'];
$product_mt = $_POST['product_mt'];
$product_img = $_POST['product_img'];

$update_product =$product ->update_product($cartegory_id,$brand_id,$product_name,$product_gsp,$product_km,$product_mt,$product_img,$product_id);
}


?>
<div class="admin-content-right">
    <div class="admin-content-right-product_add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_name" required type="text" 
                    value="<?php echo $result1['product_name'] ?>">
                    
                    <label for="">Chọn danh mục <span style="color: red;">*</span></label>
                    
                    <select name="cartegory_id" id="">
                        <option value="">--Chọn</option>
                        <?php
                             $show_cartegory = $product ->show_cartegory();
                             if($show_cartegory){
                                 while($result = $show_cartegory ->fetch_assoc())/* do du lieu */{
                        ?>
                        <option value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name']?></option>  
                        <?php
                        }}
                        ?>                     
                    </select>
                    
                    <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                    <select name="brand_id" id="">
                        <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                        <option value="">--Chọn</option>
                        <?php
                             $show_brand = $product ->show_brand();
                             if($show_brand){
                                 while($result = $show_brand ->fetch_assoc())/* do du lieu */{
                        ?>
                        <option value="<?php echo $result['brand_id']?>"><?php echo $result['brand_name']?></option>  
                        <?php
                        }}
                        ?>
                    </select>
                   
                    <label for="">Giá sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_gsp" required type="text"
                    value="<?php echo $result1['product_gsp'] ?>">
                   
                    <label for="">Giá khuyến mại <span style="color: red;">*</span></label>
                    <input name="product_km" type="text"
                    value="<?php echo $result1['product_km'] ?>">
                   
                    <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
                    <textarea name="product_mt" id="" cols="30" rows="10"></textarea>
                   
                    <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_img" multiple type="file">                    
                   
                    <!-- <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                    <input name="product_img_mt" multiple type="file"> -->
                    
                    <button type="submit">Add</button>
                </form>
            </div>
        </div>
    </section>



</body>

</html>
<?php
include "header.php";
include "slider.php";
include "../class/product_class.php";

?>

<?php
$product = new product;
if($_SERVER['REQUEST_METHOD']=== 'POST') {
    /* var_dump($_POST,$_FILES); *//* khi ấn thêm lấy các  biến tương ứng trường name input dã nhập */
   /* echo '<pre>';
      echo print_r($_FILES);
      echo '<pre>; */
    $insert_product = $product -> insert_product();

}


?>
<div class="admin-content-right">
    <div class="admin-content-right-product_add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_name" required type="text">
                    
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
                    <input name="product_gsp" required type="text">
                   
                    <label for="">Giá khuyến mại <span style="color: red;">*</span></label>
                    <input name="product_km" type="text">
                   
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
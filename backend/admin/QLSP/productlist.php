
<?php
include "header.php";
include "slider.php";
include "../class/product_class.php";
?>
<?php
$product = new product;
$show_product = $product ->show_product();

?>

<div class="admin-content-right">
<div class="admin-content-right-cartegory_list">
                <h1>Danh sách sản phẩm</h1>
                <table style="width: 100%; text-align: center; margin-top: 40px;"> 
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Giá khuyến mại</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Tùy biến</th>
                    </tr>
                  
                    <?php
                        if($show_product){$i=0;
                            while($result = $show_product->fetch_assoc()){$i++;
                        
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_id'] ?></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['product_gsp'] ?></td>
                        <td><?php echo  $result['product_km'] ?></td>
                        <td><?php echo  $result['product_mt'] ?></td>
                        <td><img style="width: 80px; height: 150px;" src="../../../frontend/img/<?php echo $result['product_img'] ?>" alt=""></td>
                        <td><a href="productedit.php?product_id=<?php echo $result['product_id'] ?>">Sửa</a>|<a href="productdelete.php?product_id=<?php echo $result['product_id']?>">Xóa</a></td>
                    </tr>
                    <?php
                    }}
                    ?>
                </table>
            </div>

    
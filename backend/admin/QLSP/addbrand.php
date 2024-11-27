<?php
include "header.php";
include "slider.php";
include "../class/brand_class.php";
?>
<?php
$brand = new brand;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_id= $_POST['cartegory_id'];
    $brand_name = $_POST['brand_name'];/* lay tu input */
    $insert_brand =$brand ->insert_brand($cartegory_id, $brand_name);
}

?>
<style>
    select{
        height: 30px;
        width: 200px;
        display: flex;
        margin-top: 10px;
        border-radius: 3px;
    }
   
</style>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Loại Danh Mục</h1>
                <form action="" method="POST">
                    <select required name ="cartegory_id" id="" >
                        <option value="">--Chọn Danh Mục</option>
                        <?php
                            $show_cartegory = $brand ->show_cartegory();
                            if($show_cartegory){
                                while($result = $show_cartegory ->fetch_assoc()){

                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php
                        }}
                        ?>
                        <!-- <option value="">Thời Trang Nữ</option>
                        <option value="">Giày Dép</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option> -->
                    </select>
                    <input required name="brand_name"  placeholder="Thêm loại sản phẩm">
                    <button type="submit">Add</button>
                </form>
            </div>
        </div>
    </section>



</body>

</html>
<?php
include "header.php";
include "slider.php";
include "../class/brand_class.php";
?>
<?php
$brand = new brand;
    $brand_id = $_GET['brand_id'];
    $get_brand = $brand ->get_brand($brand_id);
    if($get_brand) {
        $result1 = $get_brand -> fetch_assoc();/* result trung show_cartegory */
    }

if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_id= $_POST['cartegory_id'];
    $brand_name = $_POST['brand_name'];/* lay tu input */
    $update_brand =$brand ->update_brand($cartegory_id, $brand_name, $brand_id);
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
                        <option <?php if($result1['cartegory_id']==$result['cartegory_id']) {echo "SELECTED";} ?> value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php
                        }}
                        ?>
                    </select>
                    <input required name="brand_name"  placeholder="Thêm loại sản phẩm"
                    value="<?php echo $result1['brand_name']  ?>">
                    <button type="submit">Add</button>
                </form>
            </div>
        </div>
    </section>



</body>

</html>
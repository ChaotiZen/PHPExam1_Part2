<?php include './view/header.php' ?>

<h1>Add Product</h1>
<form action="index.php" method="post" id="add_product_form">
    <input type="hidden" name="action" value="add_product">
    <label>Product Type:</label>
    <select> name="category" 
        <?php foreach($categories as $category) : ?>
        <option value="<?php echo $category['categoryID']; ?>">
            <?php echo $category['categoryName']; ?>
        </option>
        <?php endforeach; ?>
    </select>
    <br>
    
    <label>Code:</label>
    <input type="text" name="code">
    <br>
    
    <label>Name:</label>
    <input type="text" name="name">
    <br>
    
    <label>Price:</label>
    <input type="text" name="list_price">
    <br>

    <label>&nbsp;</label>
    <input type="submit" value="Add Product">
    
</form>
<p class="last_paragraph">
    <a href="index.php">
</p>



<?php include './view/footer.php' ?>
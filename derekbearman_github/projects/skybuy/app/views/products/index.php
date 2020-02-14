<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="inventory">
        <div class="content">
            <div class="side-nav">
                <form action="<?php echo URLROOT; ?>/products/category" method="POST" name="submitCategory">
                    <input type="hidden" id="category" name="category" value="">            
                </form>
                <ul class="categories">
                    <li>
                        <a href="#" class="category books" id="books" onclick="books()">Books</a>
                    </li>
                    <li>
                        <a href="#" class="category games" id="games" onclick="games()">Games</a>
                    </li>
                    <li>
                        <a href="#" class="category electronics" id="electronics" onclick="electronics()">Electronics</a>
                    </li>
                    <li>
                        <a href="#" class="category furniture" id="furniture" onclick="furniture()">Furniture</a>
                    </li>
                    <li>
                        <a href="#" class="category clothing" id="clothing" onclick="clothing()">Clothing</a>
                    </li>
                </ul>
            </div>
            <div class="products-wrapper">
                <div class="cat-title"><h2><?php echo $data['title']; ?></h2></div>
                <div class="products">
                    <?php foreach($data['products'] as $product) : ?>
                        <div class="product">
                            <div class="image"><embed src="data:<?php echo $product->mime;?>;base64,<?php echo base64_encode($product->image);?>"/></div>
                            <div class="details">
                                <div class="name"><?php echo $product->name; ?></div>
                                <div class="price"><?php echo $product->price; ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
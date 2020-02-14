<?php require APPROOT . '/views/inc/header.php'; ?>
    <!-- <div class="wrapper"> -->
        <div class="inventory">
            <!-- <h1 class="title"><?php echo $data['title']; ?></h1> -->
            <div class="content">
            <div class="products-wrapper">
                    <div class="products">
                        <?php if(isset($data['products'])): ?>
                            <?php foreach($data['products'] as $product): ?>
                                <div class="product">
                                    <div class="image"><embed src="data:<?php echo $product->mime;?>;base64,<?php echo base64_encode($product->image);?>"/></div>
                                    <div class="details">
                                        <div class="name"><?php echo $product->name; ?></div>
                                        <div class="description"><?php echo $product->description; ?></div>
                                        <div class="price"><?php echo $product->price; ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if(!isset($data['products'])): ?>
                            <h2>Your cart is empty!</h2>
                        <?php endif; ?>
                    </div>
                </div>
                
            </div>
        </div>
    <!-- </div> -->
<?php require APPROOT . '/views/inc/footer.php'; ?>
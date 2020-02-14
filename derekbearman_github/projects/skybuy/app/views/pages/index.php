<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="showcase">
        <h1><?php echo $data['title']; ?></h1>
        <p><?php echo $data['description']; ?></p>
        <div class="buttons">
            <a href="<?php echo URLROOT; ?>/products/index"><li>Go Shopping</li></a>        
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
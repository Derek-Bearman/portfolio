<?php require 'config/bootstrap.php'; ?>
<?php require 'inc/header.php'; ?>
<?php $photos = $Gallery->getPhotosByCategory('showcase'); ?>
    <main>
        <!-- Slider -->
        <div id="gallerySlider" class="slider open">
            <div class="slideImgs">
                <?php foreach($photos as $photo) : ?>
                    <div class="imgWrap"><embed class="slideImg" src="data:<?php echo $photo->mime;?>;base64,<?php echo base64_encode($photo->image);?>"/></div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
<?php require 'inc/footer.php'; ?>
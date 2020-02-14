<?php require '../config/bootstrap.php'; ?>
<?php require '../inc/header.php'; ?>
<?php $photos = $Gallery->getPhotosByCategory(_CATEGORY_); ?>

	<main>
		<h2>Couples</h2>
		<div class="gallery">				
            <div class="galImgs">
                <?php foreach($photos as $photo) : ?>
                    <div class="img"><embed class="galImg" src="data:<?php echo $photo->mime;?>;base64,<?php echo base64_encode($photo->image);?>"/></div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal">
            <embed id="modalImg">
            <span class="close">&times;</span>
            <div class="buttons">
                <button id="prev"><i class="fas fa-arrow-left"></i></button>
                <button id="next"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </main>

<?php require '../inc/footer.php'; ?>
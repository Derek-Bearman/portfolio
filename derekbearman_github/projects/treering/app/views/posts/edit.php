<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="back-button">
        <a href="<?php echo URLROOT; ?>/posts" class="back"><i class="fa fa-backward"></i> Back</a>
    </div>    
    <div class="wrapper">
        <div class="background">
            <div class="add-post">
                <h2>Edit Post</h2>
                <form action="<?php echo URLROOT ?>/posts/edit/<?php echo $data['id']; ?>" method="POST">
                    <div class="title">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="<?php echo (!empty($data['title_err'])) ? 'empty' : ''; ?>" value="<?php echo $data['title']; ?>">
                        <span class="error title-error"><?php echo $data['title_err']; ?></span>
                    </div>
                    <div class="body">
                        <label for="body">Body:</label>
                        <textarea name="body" class="<?php echo (!empty($data['body_err'])) ? 'empty' : ''; ?>"><?php echo $data['body']; ?></textarea>
                        <span class="error body-error"><?php echo $data['body_err']; ?></span>
                    </div>
                    <br>
                    <input type="submit" class="button" value="Submit">
                </form>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

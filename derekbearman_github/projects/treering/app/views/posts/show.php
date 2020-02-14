<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="back-button">
        <a href="<?php echo URLROOT; ?>/posts" class="back"><i class="fa fa-backward"></i> Back</a>
    </div>
    <div class="wrapper">
        <div class="background">
            <div class="edit-post">
                <h2><?php echo $data['post']->title; ?></h2>
                <div class="entry-author">
                    Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
                </div>
                <div class="entry-body">
                    <p class="entry-text"><?php echo $data['post']->body; ?></p>
                </div>

                <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
                <div class="buttons">
                    <div class="edit-button">
                            <a href="<?php echo URLROOT;?>/posts/edit/<?php echo $data['post']->id; ?>">Edit</a>
                    </div>
                    <form class="delete" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
                        <input type="submit" value="Delete" class="button">
                    </form>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

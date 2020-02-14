<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('post_message'); ?>
<div class="wrapper">
    <div class="background">
        <div class="posts">
            <div class="heading">
                <div class="">
                    <h1>Posts</h1>
                </div>
                <div class="add">
                    <a href="<?php echo URLROOT ?>/posts/add" class="">
                        <i class="fa fa-pencil"></i> Add Post
                    </a>
                </div>
            </div>
            <hr>

            <?php foreach($data['posts'] as $post) : ?>
                <hr>
                <div class="entries">
                    <h4 class="entry-title"><?php echo $post->title; ?></h4>
                    <div class="entry-author">
                        Written by <?php echo $post->name; ?> on <?php echo $post->postCreated; ?>
                    </div>
                    <div class="entry-body">
                        <p class="entry-text"><?php echo $post->body; ?></p>
                        <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId;?>" class="show-more">More</a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

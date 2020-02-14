<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <div class="welcome">
        <h1>Welcome to the Bearman Workshop!</h1>
        <p>No, it's not a real workshop with furniture and zero wood carvings and stuff.</p>
        <p>HOWEVER, what I <i>can</i> do is build a website for your brand or business, and/or copyedit your fledgling book, article, term paper, etc.</p>
        <p>Or both!</p>
        <br>
        <p>I have a couple custom websites and copyedited books under my belt so far.</p>
        <p>Take a look around, see what you like, and <a href="mailto:hellothere@derekbearman.com" target="_blank">let's talk!</a></p>
        <p>If you have any general questions, concerns, jokes, criticisms, beauty tips, or anything of the like, the form below will hit my inbox.</p>
        <p>See you soon!</p>
    </div>
    <div id="contact" >
        <div id="contact-lens" style="position: relative;">
            <div id="anchor-name" class="<?php echo $_SESSION['formClass']; ?>" style="position: absolute; top: 100%; left: 0;">
            </div>

            <form method="post" action="<?php echo URLROOT ?>/helpers/email_helper.php" id="form">
                <label>Name: <em>*</em></label>
                <input type="text" name="sender" id="nameInput" value="<?php echo isset($_SESSION['sender']) ? $_SESSION['sender'] : ''; ?>">
                <br>
                <label>Email: <em>*</em></label>
                <input type="email" name="senderEmail" id="emailInput"  value="<?php echo isset($_SESSION['senderEmail']) ? $_SESSION['senderEmail'] : ''; ?>">
                <br>
                <label>Message: <em>*</em></label>
                <textarea placeholder="Hey Derek!  I need a website AND a copyeditor! What're the chances?" name="message" id="messageInput"><?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?></textarea>
                    <?php if(isset($_SESSION['msg']) ? $_SESSION['msg'] : ''): ?>
                        <div class="<?php echo $_SESSION['msgClass']; ?>">
                            <?php echo $_SESSION['msg']; ?>
                        </div>
                        <?php echo "<script>scrollIntoView()</script>";?>
                        <?php unset($_SESSION['msg']); ?>
                    <?php endif; ?>
                <input type="submit" id="submit" name="submit" value="Send">
            </form>

        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
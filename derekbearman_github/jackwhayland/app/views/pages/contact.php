<?php require APPROOT . '/views/inc/header.php'; ?>
	<div id="anchor-name" class="<?php echo $_SESSION['formClass']; ?>" style="position: absolute; top: 100%; left: 0;">
	</div>
	<div class="form-wrapper">
		<form method="post" action="<?php echo APPROOT ?>/helpers/email_helper.php" id="form">
			<label>Name:</label>
			<input type="text" name="sender" id="nameInput" value="<?php echo isset($_SESSION['sender']) ? $_SESSION['sender'] : ''; ?>" placeholder="Marty McFly">
			<br>
			<label>Email:</label>
			<input type="email" name="senderEmail" id="emailInput"  value="<?php echo isset($_SESSION['senderEmail']) ? $_SESSION['senderEmail'] : ''; ?>" placeholder="MrMcfly@gmail.com">
			<br>
			<label>Message:</label>
			<textarea placeholder="Dude! I wanna buy your pictures!" name="message" id="messageInput"><?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?></textarea>
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
<?php require APPROOT . '/views/inc/footer.php'; ?>
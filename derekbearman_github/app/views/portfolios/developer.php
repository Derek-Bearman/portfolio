<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">

<header>
	<div id="header-lens">
		<div id="header-content">
			<div id="name">
				<h1>Derek Bearman</h1>
				<h2>Web Developer</h2>
			</div>
		</div>
	</div>
</header>

<main>
	<div id="introduction-background">
		<div id="introduction">
			<h2>Projects</h2>
		</div>	
	</div>
	<div id="projects-background">
		<div id="projects">
			<div id="project-1" class="project">
				<div class="project-content">
					<h1>Brittany Elaina Photography</h1>
					<a href="https://brittanyelainaphotography.com/" target="_blank">
						<div class="project-image project-1"> 
						</div>
					</a>
					<a href="" class="fa fa-github fa-3x"></a>
				</div>
			</div>
			<div id="project-2" class="project">
				<div class="project-content">
					<h1>JWhayland Photography</h1>
					<a href="<?php echo URLROOT; ?>/jwhaylandphotography/" target="_blank">
						<div class="project-image project-2"> 
						</div>
					</a>
					<a href="" class="fa fa-github fa-3x"></a>
				</div>
			</div>
			<div id="project-3" class="project">
				<div class="project-content">
					<h1>TreeRing</h1>
					<a href="<?php echo URLROOT; ?>/projects/treering/" target="_blank">
						<div class="project-image project-3"> 
						</div>
					</a>
					<a href="" class="fa fa-github fa-3x"></a>
				</div>
			</div>
			<div id="project-4" class="project">
				<div class="project-content">
					<h1>SkyBuy</h1>
					<a href="<?php echo URLROOT; ?>/projects/skybuy/" target="_blank">
						<div class="project-image project-4"> 
						</div>
					</a>
					<a href="" class="fa fa-github fa-3x"></a>
				</div>
			</div>
		</div>
	</div>
	<div id="follow-up">
		<h2>Bonus Project:</h2>
		<p>This website.</p>
		<br>
		<h2>Sales Pitch:</h2>
		<p>Want a website or two of your very own?</p>
		<p>Fill out the form below and let's talk!</p>
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
				<textarea placeholder="Hey Derek! I do need a website! Could you help me out?" name="message" id="messageInput"><?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?></textarea>
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
</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">

    <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div id="header-lens">
            <div id="header-content">
                
                <div id="name">
                    <h1>Derek Bearman</h1>
                    <h2>Copyeditor</h2>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div id="introduction-background">
            <div id="introduction">
                <h2>Explanation</h2>
            </div>	
        </div>
        <div class="definition">
            <h2>What is Copyediting?</h2>
            <p><b>Short answer:</b> Hunting down and correcting errors in spelling, punctuation, grammar, and (occasionally) word choice.</p>
            <p><b>Long answer:</b> Take a deep breath, and click the button below.</p>
            <button class="show-long-answer" onclick="toggleEditing()">Long Answer</button>
            <div class="long-answer">
                <br>
                <h2>The Four Phases of Manuscript Editing</h2>
                <p style="font-size: 1.25rem">* These descriptions are my own words after having read up on these editing phases myself. They are not official definitions.</p>
                <p><b>Developmental Editing:</b> Editing that is done during the development stage of the manuscript or story. The editor will work closely with the author to bounce ideas off each other, and the editor will give input with the intent to help the author write and build the story.</p>
                <p><b>Substantive Editing:</b> Once the manuscript has been developed, the substantive editor helps re-word, re-organize, and sometimes re-write sections of the manuscript to reduce ambiguity and enhance the intended pacing of the story.</p>
                <p><b>Copyediting:</b> After the substantive editing process, the copyeditor combs through the manuscript to correct any mechanical or conventional errors that have slipped through the cracks—punctuation, spelling, grammar, word choice, style, conistency, etc.</p>
                <p><b>Proofreading:</b> A lot of people confuse proofreading with copyediting. A proofreader actually receives a complete, finished, almost-ready-to-publish manuscript in the form of a proof. A proof is simply a copy of the mansucript in the form that is intended to be distributed upon publication—a physical book, a pdf document of an e-book, a web page/site, an article, etc.—all formatted as if it is about to be published. <br><br>Proofreaders read over the proof they are handed, and they look for any formatting errors such as extra spacing, missing spacing, weird cut-offs of text between pages, consistency of fonts, italics, bolded words, etc.</p>
                <p><b>TL;DR —</b> After your story has been initially developed, written, and re-written, I come in and fix any stray conventional errors before the manuscript gets its last layer of varnish and inspected one last time by the proofreader.</p>
                <hr style="border: solid 2px #111">
                <p>This brief explanation of the four main editing stages is intended to explain what exactly I mean when I say "copyediting," and to more accurately portray at which point my copyediting services come into play. <br><br>If you were already familiar with these editing distinctions, feel free to critique them below—but you likely closed this explanation a long time ago.</p>
            </div>
        </div>
        <div id="introduction-background">
            <div id="introduction">
                <h2>Works I Have Copyedited</h2>
            </div>	
        </div>
        <div id="projects-background">
            <div id="projects">
                <div id="project-1" class="project">
                    <div class="book-content">
					    <a href="https://www.amazon.com/Beyond-Words-Communities-Strengthen-Businesses-ebook/dp/B0741VFDHM/ref=sr_1_1?keywords=beyond+words+james+archer&qid=1581589141&s=books&sr=1-1" target="_blank">
    						<div class="book-image book-1"> 
    						</div>
					    </a>
                    </div>
                </div>
                <div id="project-2" class="project">
                    <div class="book-content">
					    <a href="https://www.amazon.com/Josephines-Journey-Continues-June-Leod/dp/1517194466" target="_blank">
    						<div class="book-image book-2"> 
    						</div>
					    </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="follow-up">
            <h2>Sales Pitch:</h2>
            <p>Want me to copyedit a manuscript or two of your very own?</p>
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
                    <textarea placeholder="Hey Derek! I do need a copyeditor! Could you help me out?" name="message" id="messageInput"><?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?></textarea>
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
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
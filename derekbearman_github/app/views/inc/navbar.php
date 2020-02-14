<nav>
    <div class="nav-container">
        <div class="logo">
            <a href="<?php echo URLROOT; ?>" class="home"><img src="<?php echo URLROOT; ?>/public/img/bear-square.jpg"></a>
        </div>
        
        <div class="main-nav">
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/pages/index">Home</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/pages/about">About</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/portfolios/developer">WebDev</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/portfolios/editor">Copyediting</a>
                </li>
            </ul>
        </div>

        <div class="mini-nav">
            <input type="checkbox" class="toggler">
            <div class="hamburger"><div></div></div>
            <div class="dropdown">
                <ul>
                    <a href="<?php echo URLROOT; ?>/pages/index"><li>Home</li></a>
                
                    <a href="<?php echo URLROOT; ?>/pages/about"><li>About</li></a>
                
                    <a href="<?php echo URLROOT; ?>/portfolios/developer"><li>WebDev</li></a>
                
                    <a href="<?php echo URLROOT; ?>/portfolios/editor"><li>Copyediting</li></a>
                </ul>
            </div>
        </div>
    </div>
</nav>
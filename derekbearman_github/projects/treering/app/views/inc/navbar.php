<nav class="navbar">
  <div class="nav-wrapper">
    <div class="nav-container">

      <div class="logo"><a href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a></div>

      <div class="main-nav" id="">
        <ul>
          <?php if(isset($_SESSION['user_id'])) : ?>
          <li>
            <a href="#"><b>Welcome, <br><?php echo $_SESSION['user_name']; ?>!</b></a>
          </li>
          <?php endif; ?>
          <li>
            <a href="<?php echo URLROOT; ?>">Home</a>
          </li>
          <li>
            <a href="<?php echo URLROOT; ?>/pages/about">About</a>
          </li>

          <?php if(isset($_SESSION['user_id'])) : ?>
          <li>
            <a href="<?php echo URLROOT; ?>/users/logout">Log Out</a>
          </li>
        <?php else : ?>
          <li>
            <a href="<?php echo URLROOT; ?>/users/register">Register</a>
          </li>
          <li>
            <a href="<?php echo URLROOT; ?>/users/login">Login</a>
          </li>
        <?php endif; ?>
        </ul>
      </div>
      
      <div class="mini-nav">
            <input type="checkbox" class="toggler">
            <div class="hamburger"><div></div></div>
            <div class="dropdown">
                <ul>
                    <a href="<?php echo URLROOT; ?>"><li>Home</li></a>
      
                    <a href="<?php echo URLROOT; ?>/pages/about"><li>About</li></a>

                    <?php if(isset($_SESSION['user_id'])) : ?>

                    <a href="<?php echo URLROOT; ?>/users/logout">Log Out</a>

                    <?php else : ?>
                
                    <a href="<?php echo URLROOT; ?>/users/register"><li>Register</li></a>
                
                    <a href="<?php echo URLROOT; ?>/users/login"><li>Login</li></a>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
  </div>
</nav>
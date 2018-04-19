
<header>
    <div class="header-bar">
        <div class="wrapper header-bar-top">
            <div class="logo-links">
                <a href="/"><span class="membership">About membership</span></a>
                <a class="logo" href="/">Medium</a>
            </div>
            <div class="buttons">
                <a class="search-btn" href="#"><span class="glyphicon glyphicon-search"></span></a>
                <?php if(Auth::check()) {?>
                  <div class="dropdown" style="display:inline-block;">
                    <button
                    class="btn btn-default dropdown-toggle" type="button"
                    data-toggle="dropdown">Welcome
                    <?php echo Auth::user()->firstname; ?>
                     <span class="caret">
                     </span>
                   </button>
                   <ul class="dropdown-menu">
                     <li>
                     <a href="/contact" >Contact</a>
                     <a href="/article" >Add Article</a>
                     <a href="#" >Logout</a>
                   </li>
                  </ul>
                </div>

              <?php } else { ?>

                <a class="signin-link" href="/login">Sign in</a>

                <a href="/register"><button class="get-started-btn" type="button" name="button">Get started</button></a>

              <?php } ?>

            </div>
        </div>

        <div class="wrapper nav-bar-bottom">

            <ul>
                <i class="fas fa-angle-left fa=4x"></i>
                <li>
                    <a href="#">HOME</a>
                </li>
                <li>
                    <a href="#">TECHNOLOGY</a>
                </li>
                <li>
                    <a href="#">CULTURE</a>
                </li>
                <li>
                    <a href="#">ENTREPRENEURSHIP</a>
                </li>
                <li>
                    <a href="#">CREATIVITY</a>
                </li>
                <li>
                    <a href="#">SELF</a>
                </li>
                <li>
                    <a href="#">POLITICS</a>
                </li>
                <li>
                    <a href="#">MEDIA</a>
                </li>

                <li>
                    <a href="#">MORE</a>
                </li>
                <i class="fas fa-angle-right fa=4x"></i>
            </ul>
        </div>
    </div>
</header>

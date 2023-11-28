<header class="header">
        <nav class="header__nav">

            <h1 class="header__nav__logo">KE <span class="header__nav__style">Forum</span></h1>

            <div class="header__nav__search">
                <input class="header__nav__search__input" type="text" placeholder="social media ,internet marketing..." >
                <i class="fa-solid fa-magnifying-glass header__nav__search__icon" ></i>
                <span class="header__nav__search__label">Search</span>
            </div>

            <div class="header__nav__links">
                <?php if(!isset($_SESSION['username'])){ ?>
                <a class="header__nav__links__login openLogin" href="#">Login</a>
                <a class="header__nav__links__register openSignup" href="#">Sign-Up</a>
                <?php }else{ ?>
                <a class="header__nav__links__user"><i id="user" class="fa-solid fa-user fa-lg" ></i><span class=""header__nav__links__user__icon><h3><?php echo($_SESSION['username']); ?></h3></span></a>
                <div id="userOptions" class="header__nav__links__user__container hideForm">
                        <ul class="header__nav__links__user__container__options">
                            <li class="header__nav__links__user__container__options__user">
                                    <i class="fa-solid fa-user-pen fa-2xl" style="color: #000000;"></i>
                                    <div >
                                       <p> <?php echo($_SESSION['username']);?></p> 
                                       <p> <?php echo($_SESSION['email']); ?>   </p>
                                    </div>
                            </li>
                            <hr>
                            <li class="header__nav__links__user__container__options__newPost"><i class="fa-solid fa-plus fa-lg" style="color: #000000;"></i><a href="newPost.php">New Post</a></li>
                            <li class="header__nav__links__user__container__options__signOut"><i class="fa-solid fa-right-from-bracket fa-lg" style="color: #000000;"></i><a href="signout.php">Sign out</a></li>
                        </ul>
                </div>
                <?php }?>        
            </div>
            <form id="signup" action="register.php" method="POST" class="hideForm">
                <i class="fa-solid fa-xmark fa-lg" id="closeSignup" ></i>
                <input type="text" placeholder="username" name="username">
                <input type="text" placeholder="email" name="email">
                <input type="password" placeholder="password" name="password">
                <button type="submit">Sign up</button>
                <p>Already have an account?<a href="#" class="openLogin">login</a></p>
            </form>
            <form action="login.php" method="POST" id="login" class="hideForm">
                <i class="fa-solid fa-xmark fa-lg"id="closeLogin" ></i>
                <input type="text" placeholder="email" name="emailLogin">
                <input type="password" placeholder="password" name="passwordLogin">
                <button type="submit">login</button>
                <p>Don't have an account?<a href="#" class="openSignup">Signup</a></p>
            </form>
        </nav>
    </header>
<div id="navbarContainer">
                <nav class="navbar">
                    <span role="link" tabindex="0" onclick ="openPage('index1.php')" class="logo">
                        <img src="assets/images/icons/logo.png" alt="logo">Octave 
                    </span>
                    <div class="group">
                        <div class="navItem">
                            <span role='link' tabindex='0' onclick ='openPage("search.php")' class="navItemLink">Search
                                <img class="icon" src="assets/images/icons/search.png" alt="search">
                            </span>
                        </div>
                    </div>
                    <div class="group">
                        <div class="navItem">
                            <span role="link" tabindex="0" onclick ="openPage('browse.php')"class="navItemLink">Browse</span>
                        </div>
                        <div class="navItem">
                            <span role="link" tabindex="0" onclick ="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
                        </div>
                        <div class="navItem">
                            <span role="link" tabindex="0" onclick ="openPage('settings.php')" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
                        </div>
                    </div>
                </nav>
           </div> 
        
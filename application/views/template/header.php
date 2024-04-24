<header class="header">
    <div class="header__logo">
        <h1><a href="/Motorpedia">Loan Simulation</a></h1>
    </div>
    
    <div class="header__section">
        <nav class="heaver__nav nav">
            <ul class="">
                <li class="nav__item">
                    <a href="<?php echo base_url("home"); ?>">Home</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo base_url("home"); ?>">Simulations</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo base_url("logincontroller/login"); ?>">Login</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo base_url("logincontroller/signup"); ?>">Signup</a>
                </li>
            </ul>
        </nav>

        <div class="vertical_separator"></div>

        <div class="header__profile profile">
            <div class="profile__image">
                <img src="./assets/images/profile-image.jpg" alt="Profile Pic">
                <!-- <div class="profile__status"></div> -->
            </div>

            <div class="profile__details">
                <span class="profile__uid">UserName</span>
                <span class="profile__type">admin</span>
            </div>
        </div>
    </div>

</header>
<div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="#myprofile">
                        <i class="fa">
                            <?php
                                session_start();
                                $pfp = $_SESSION["avitar"];
                                echo "<img id='img_tl' style='width: 30px; height: 30px; padding-top: 4px; border-radius: 100%;' src='$pfp' type='img/png'>";
                            ?>
                        </i>
                        <span class="nav-text">
                            <?php
                                print $_SESSION['username'];
                            ?>
                        </span>
                    </a>
                </li>
                <hr>
                <li>
                    <a href="home.php">
                        <i class="fa fa-home"></i>
                        <span class="nav-text">
                            Home
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="spotlight.php">
                        <i class="fa fa-bolt"></i>
                        <span class="nav-text">
                            Spotlight
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-user-friends"></i>
                        <span class="nav-text">
                            Groups
                        </span>
                    </a>
                </li>
                <hr>
                <li>
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span class="nav-text" style="font-weight: 700;">
                            Following
                        </span>
                    </a>
                </li>
                <li><a href="#"><i class="fa fa-emptycontain"><img id='img_tl' style='width: 30px; height: 30px; padding-top: 4px; border-radius: 100%;' src='./account/userimages/default.png' type='img/png'></i><span class="nav-text" style="padding-left: 10px;">Username</span></a></li>
                <li><a href="#"><i class="fa fa-emptycontain"><img id='img_tl' style='width: 30px; height: 30px; padding-top: 4px; border-radius: 100%;' src='./account/userimages/default.png' type='img/png'></i><span class="nav-text" style="padding-left: 10px;">Username</span></a></li>
                </li>
                <hr>
                <li>
                    <a href="#">
                       <i class="fa fa-play"></i>
                        <span class="nav-text">
                            Content Creation Menu
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-upload"></i>
                        <span class="nav-text">
                            Uplaod Video
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-headset"></i>
                        <span class="nav-text">
                            Go Live
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-closed-captioning"></i>
                        <span class="nav-text">
                            Creative Commons Libary
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-chart-line"></i>
                        <span class="nav-text">
                            Analytics
                        </span>
                    </a>
                </li>
                <hr>
                <li>
                    <a href="#">
                       <i class="fa fa-info"></i>
                        <span class="nav-text">
                            More information!
                        </span>
                    </a>
                </li>
            </ul>
            <ul class="logout">
                <li>
                   <a href="/account/logout.php">
                         <i class="fa fa-power-off"></i>
                        <span class="nav-text">
                            Account Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
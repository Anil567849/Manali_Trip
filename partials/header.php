





    <section id="header">


        <!-- navbar start  -->
        <nav id="nav">   

            <div id="logo_div">
                <img id="logo" src="./images/logo.png" alt="">
                <h1 id="logo_text">
                    Basecamp
                </h1>
            </div>


            <!-- desktop view navigation start -->
            <div id="desktop_navigation_div" class="navigation_div">
                <ul>
                    <li class="nav_list hide">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="nav_list hide">
                        <a href="faq.php">Faq</a>
                    </li>
                    <li class="nav_list">
                        <!-- Use any element to open the sidenav -->
                        <span id="hamburger" onclick="openNav()">
                            <img src="./images/hamburger_menu.svg" alt="">
                        </span>
                    </li>
                </ul>
            </div>            
            <!-- desktop view navigation end -->



            <!-- mobile view navigation start  -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="navigation_div">
                    <ul>
                        <li class="nav_list">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="nav_list">
                            <a href="faq.php">Faq</a>
                        </li>
                    </ul>
                </div>  
            </div>

        </nav>
        <!-- navbar end  -->

    </section>



    <!-- javascript  -->
    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>
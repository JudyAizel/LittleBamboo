<html>

<head>
    <title>LittleBamboo - Judy's Delicacies</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>
    <div id="navbar">
        <img src="logo1.png" />
        <h1>Little Bamboo</h1>
    </div>

    <div id="main-container">
        <div id="content-viewer">
            <?php
                $delicacy = array("Suman", "Suman Latik", "Bibingka");
                $images = array("suman", "sumanlatik", "bibingka");
                $price = array(30, 55, 60);

                for ($x=0; $x < sizeof($delicacy); $x++){
                    echo'
                    <div class="delicacy">
                        <img class="delicacy-img" src="'.$images[$x].'.jpg" />

                        <div class="delicacy-info">
                            <h1 class="delicacy-name">'.$delicacy[$x].'</h1>
                            <p class="delicacy-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <a href="#" class="delicacy-order" onclick="order(this, '.$price[$x].'); return false;">Order</a>
                        </div>
                    </div>';
                }
            ?>
            

        </div>

        <img id="right" src="https://img.icons8.com/flat_round/64/000000/circled-chevron-right.png" />
        <img id="left" src="https://img.icons8.com/flat_round/64/000000/circled-chevron-right.png" />
        <div id="pagination">
            <div class="dot" id="active-dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <div id="footer">
        <div id="footer-sns">
            <a href="#" class="nav-link">
                <img src="https://img.icons8.com/ios/50/000000/facebook-new.png" />
            </a>
            <a href="#" class="nav-link">
                <img src="https://img.icons8.com/ios/50/000000/instagram-new.png" />
            </a>
            <a href="#" class="nav-link">
                <img src="https://img.icons8.com/ios/50/000000/twitter.png" />
            </a>
        </div>

        <div id="footer-text">
            <h1>For Inquiries:</h1>
            <div class="contact">
                <h3>Call us:</h3>
                <p>+639678394653</p>
            </div>

            <div class="contact">
                <h3>Email us:</h3>
                <p>littleBamboo.delicacies@gmail.com</p>
            </div>
        </div>
    </div>
    
    <div class="modal">
        <div id="order-container">
            <div id="order-summary">
                <img id="order-img" src="suman.jpg"/>
                <h1 id="order-name">Suman</h1>
                <p id="order-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div id="order-form">
                <div class="input-container">
                    <h1>Name: </h1>
                    <input type="text" id="form-name" placeholder="Your name..."/>
                </div>

                <div class="input-container">
                    <h1>Address: </h1>
                    <input type="text" id="form-address" placeholder="Your address..."/>
                </div>

                <div id="qty-container">
                    <div>
                        <h1>QTY: </h1>
                        <input type="number" id="quantity" name="quantity" min="1">
                    </div>

                    <div>
                        <h1>Price: </h1>
                        <p>Php 20</p>
                    </div>
                </div>

                <div id="total-container">
                    <div>
                        <h1>Total: </h1>
                        <p></p>
                    </div>
                </div>
                <div id="buttons-container">
                    <div id="cancel" class="order-button" onclick="finishOrder()">cancel</div>
                    <div id="order" class="order-button" onclick="sendOrder()">order</div>
                </div>
            </div>
        </div>
    </div>

  <script src="js/index.js"></script>
</body>

</html>
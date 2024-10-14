<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <title>Afia</title>
</head>
<body>
    <!--AFIA TABASSUM-->
    <!--===========Header============-->
    <header class="header" id="header">
        <img src="img/logo.png" alt="logo">
        <nav class="nav_container container flex-div">
            <ul class="flex-div">
                <li><a class="nav_link" href="#header">Home</a></li>
                <li><a class="nav_link" href="#product">Product</a></li>
                <li><a class="nav_link" href="#service">Service</a></li>
                <li><a class="nav_link" href="cart.php">Cart</a></li>\
                <li><a class="nav_link" href="profile.php">profile</a></li>

            </ul>
        </nav>
        <form class="search_button" action="">
            <button type="submit"><i class="uil uil-search"></i></button>
            <input type="text" placeholder="Search" name="search">
            <button class="cart_icon"><i class="uil uil-shopping-bag"></i></button>
          </form>
    </header>

    <main>
        <!---===========Banner============-->
        <section class="banner section" id="banner">
            <div class="banner_container container flex-div">
                
                <div class="banner_text">
                    <div class="bike_button"><p class="desc">Bike Delivery</p><img src="img/bike.png" alt="bike"></div>
                    <div class="banner_title">
                        <h2 class="title">
                            THE FASTEST<br> <span class="text_orange">DELIVERY</span> <br>IN<span class="text_orange"> YOUR CITY </span>
                        </h2>
                        <p class="title_desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                        
                    </div>
    
                    <div class="order">
                        <button class="order_btn"><h4>Order Now</h4></button>
                        <img src="img/Play Button.png" alt="play" class="play"><h4>Order Process</h4> 
                    </div>
                </div>
                <!------------IMG--------------------->
                <div class="arrow"><img src="img/arrow.png" alt="arrow"></div>
                <div class="banner_img">
                    <div class="item_1 item">
                        <img src="img/burger.png" alt="burger">
                        <div class="item_desc">
                            <h4>Burger</h4>
                            <p class="desc">Mushroom Sauce</p>
                            <p class="price"><span class="dollar">$</span>5.15</p>
                        </div>
                    </div>
                    <div class="item_2 item">
                        <img src="img/combo.png" alt="burger">
                        <div class="item_desc">
                            <h4>Food Combo</h4>
                            <p class="desc">Mushroom Sauce</p>
                            <p class="price"><span class="dollar">$</span>5.15</p>
                        </div>
                    </div>
                    <div class="item_3 item">
                        <img src="img/pizza.png" alt="burger">
                        <div class="item_desc">
                            <h4>Pizza</h4>
                            <p class="desc">Mushroom Sauce</p>
                            <p class="price"><span class="dollar">$</span>5.15</p>
                        </div>
                    </div>
                    <div class="item_4 item">
                        <img src="img/cake.png" alt="burger">
                        <div class="item_desc">
                            <h4>Cake</h4>
                            <p class="desc">Mushroom Sauce</p>
                            <p class="price"><span class="dollar">$</span>5.15</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <!--============DETIALS================-->
        
        <section class="details">
            <div class="details_container">
                <div class="detail_1 card">
                    <i class="uil uil-clock"></i>
                    <p class="desc">Today 10:00 am - 10:00 pm</p>
                    <p class="small_desc">Workin Time</p>
                </div>
              
                <div class="detail_2 card">
                    <i class="uil uil-location-point"></i>
                    <p class="desc">Chandgaon R/A, Chittagong</p>
                    <p class="small_desc">Our Location</p>
                </div>
             
                <div class="detail_3 card">
                    <i class="uil uil-phone-volume"></i>
                    <p class="desc">+880 1833333000</p>
                    <p class="small_desc">Phone Number</p>
                </div>
            </div>
        </section>

        <!--===============PRODUCT==============-->

        <section class="product" id="product">
            <div class="product_container container">
                <div class="orange desc">Product</div>
                <h3 class="sub_title">Most Popular Items</h3>
                <div class="product-grid">
                    <div class="product-card">
                        <img src="img/p1.png" alt="Gyro Sandwich">
                        <div class="rating-price">
                            <h3>Enchilade</h3>
                            <span><span class="orange">★</span> 4.3</span>
                        </div>
                        <div class="rating-price">
                        <div class="cart-form">
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                            <span style="font-weight: 500;">$15.00</span>
                        </div>
                        
                    </div>
                    <div class="product-card">
                        
                        <img src="img/p2.png" alt="Enchilade">
                        <div class="rating-price">
                            <h3>Chicken Pot Pie</h3>
                            <span><span class="orange">★</span> 5.0</span>
                            
                        </div>
                        <div class="rating-price">
                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="product_id" value="2">
                        <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                        <button type="submit">Add to Cart</button>
                    </form>


               
                        <span style="font-weight: 500;">$25.50</span>
                    </div>
                    </div>
                    <div class="product-card">
                        <img src="img/p3.png" alt="Green Beans">
                        
                        <div class="rating-price">
                            <h3>Green Beans</h3>
                            <span><span class="orange">★</span> 4.0</span>
                            
                        </div>
                        <div class="rating-price">
                        <div class="cart-form">
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                            <span style="font-weight: 500;">$12.00</span></div>
                        
                    </div>
                    <div class="product-card">
                        <img src="img/p4.png" alt="Pizza">
                        
                        <div class="rating-price">
                            <h3>Gyro Sandwich</h3>
                            <span><span class="orange">★</span> 4.0</span>
                            
                        </div>
                        <div class="rating-price">
                        <div class="cart-form">
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                            <span style="font-weight: 500;">$18.50</span>
                        </div>
                        
                    </div>
                    <div class="product-card">
                        <img src="img/p5.png" alt="Chicken Pot Pie">
                        
                        <div class="rating-price">
                            <h3>Green Salad</h3>
                            <span><span class="orange">★</span> 5.0</span>
                            
                        </div>
                        <div class="rating-price">
                        <div class="cart-form">
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                            <span style="font-weight: 500;">$25.00</span>
                        </div>
                        
                    </div>
                    <div class="product-card">
                        <img src="img/p6.png" alt="Green Salad">
                        
                        <div class="rating-price">
                            <h3>Pizza</h3>
                            <span><span class="orange">★</span> 4.0</span>
                            
                        </div>
                        <div class="rating-price">
                        <div class="cart-form">
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                        <span style="font-weight: 500;">$15.00</span>
                        </div>
                        
                    </div>

                    
                    </div>
                    <!--EXTRA CARDS-->
                    <div class="extra-product-grid" style="display: none; margin-top: 20px;">
                        <div class="product-card">
                            <img src="img/p1.png" alt="Burger">
                            
                            <div class="rating-price">
                                <h3>Burger</h3>
                                <span><span class="orange">★</span> 4.5</span>
                                
                            </div>
                            <div class="rating-price">
                            <div class="cart-form">
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                            <span style="font-weight: 500;">$10.00</span>
                            </div>
                            
                        </div>
                        <div class="product-card">
                            <img src="img/p2.png" alt="Pasta">
                            
                            <div class="rating-price">
                                <h3>Pasta</h3>
                                <span><span class="orange">★</span> 4.8</span>
                                
                            </div>
                            <div class="rating-price">
                            <div class="cart-form">
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                            <span style="font-weight: 500;">$20.00</span>
                            </div>
                            
                        </div>
                        <div class="product-card">
                            <img src="img/p6.png" alt="Tacos">
                            
                            <div class="rating-price">
                                <h3>Tacos</h3>
                                <span><span class="orange">★</span> 4.2</span>
                                
                            </div>
                            <div class="rating-price">
                            <div class="cart-form">
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                            <span style="font-weight: 500;">$15.00</span>
                            </div>
                            
                        </div>
                        <div class="product-card">
                            <img src="img/p3.png" alt="Soup">
                            
                            <div class="rating-price">
                                <h3>Soup</h3>
                                <span><span class="orange">★</span> 4.6</span>
                                
                            </div>
                            <div class="rating-price">
                            <div class="cart-form">
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                            <span style="font-weight: 500;">$12.50</span>
                            </div>
                            
                        </div>
                        <div class="product-card">
                            <img src="img/p2.png" alt="Steak">
                            
                            <div class="rating-price">
                                <h3>Steak</h3>
                                <span><span class="orange">★</span> 5.0</span>
                                
                            </div>
                            <div class="rating-price">
                            <div class="cart-form">
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                            <span style="font-weight: 500;">$30.00</span></div>
                        </div>
                        <div class="product-card">
                            <img src="img/p1.png" alt="Sushi">
                            
                            <div class="rating-price">
                                <h3>Sushi</h3>
                                <span><span class="orange">★</span> 4.9</span>
                                
                            </div>
                            <div class="rating-price">
                            <div class="cart-form">
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="number" name="quantity" min="1" value="1" style="width: 50px; margin-right: 10px;">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>
                            <span style="font-weight: 500;">$25.00</span>
                        </div>
                        </div>
                </div>
                <button class="more-products" id="toggleProducts">See More Products <i class="uil uil-arrow-circle-right"></i></button>
            </div>
            
        </section>
        <!--===========SERVICES===================-->
        <section class="services" id="service">
            <div class="services-section">
                <div class="orange desc">Services</div>
                <h3 class="sub_title">Why Choose Our Favorite Food</h3>
                <div class="services-grid">
                    <div class="service-card">
                        <i class="uil uil-restaurant"></i>
                        <h3><br>Qualityfull Food</h3><br>
                        <p class="desc">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                    </div>
                    <div class="service-card">
                        <i class="uil uil-crockery"></i>
                        <h3><br>Healthy Food</h3>
                        <p class="desc"><br>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                    </div>
                    <div class="service-card">
                        <i class="uil uil-truck"></i>
                        <h3><br>Fast Delivery</h3>
                        <p class="desc"><br>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--=============TESTIMONIALS=================-->
        <section class="testimonial">
            <div class="testimonials-section">
                <div class="orange desc">Testimonials</div>
                <h3 class="sub_title">Our Happy Client Says</h1>
                <div class="testimonial-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-desc">
                            <img class="client-photo" src="img/man.png" alt="Client Photo">
                        <div class="testimonial-detail">
                            <h5>Wilians Jhone</h5>
                        <p class="small_desc">CEO & Co-Founder</p>
                        </div>
                        
                        </div>
                        
                        <blockquote>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet nisi tincidunt adipiscing dictumst blandit hac. Lectus cras velit sed dignissim ac, aliquet."
                        </blockquote>
                        <div class="testimonial-navigation">
                            <button class="nav-button"><i class="uil uil-arrow-left"></i></button>
                            <button class="nav-button"><i class="uil uil-arrow-right"></i></button>
                        </div>
                    </div>
                    <img class="food-photo" src="img/contact burger.png" alt="Food Photo">
                </div>
                
            </div>
        </section>

        <!--============SUBSCRIBE===================-->
        <section class="subscribe-section">
            <div class="subscribe-container container">
                <div class="subscribe-image">
                    <img src="img/burger.png" alt="Burger">
                </div>
                <div class="subscribe-content">
                    <h2>Subscribe To Our Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus mauris sem sed urna venenatis vivamus.</p>
                    <div class="subscribe-form">
                        <input type="email" id="email" placeholder="Type your email...">
                        <button id="subscribe-btn">SUBSCRIBE</button>
                    </div>
                    <p id="message" class="message"></p>
                </div>
                
            </div>
            
        </section>
    </main>
     
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="img/logo.png" alt="Logo">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/" target="_blank"><i class="uil uil-facebook-f"></i></a>
                        <a href="https://www.twitter.com/" target="_blank"><i class="uil uil-twitter"></i></i></a>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="uil uil-linkedin-alt"></i></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="uil uil-instagram"></i></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h3>Opening Restaurant</h3>
                <div class="p">
                <p>Sat-Wet: 09:00am-10:00PM</p>
                <p>Thursday: 09:00am-11:00PM</p>
                <p>Friday: 09:00am-8:00PM</p>
            </div>
            </div>
            <div class="footer-links">
                <h3>User Link</h3>
                <div class="p">
                    <p><a href="#">About Us</a></p>
                <p><a href="#">Contact Us</a></p>
                <p><a href="#">Order Delivery</a></p>
                <p><a href="#">Payment & Tex</a></p>
                <p><a href="#">Terms of Services</a></p>
                </div>
                
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <div class="p">
                    <p>Mohammadpur, Dhaka</p>
                    <p>+88 017 0000 0000</p>
                    <p>+88 018 0000 0000</p>
                    <div class="contact-email">
                        <input type="email" placeholder="Enter your email...">
                        <button><i class="uil uil-angle-right-b"></i></button>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
    <!--SCRIPT JS-->
    <script src="script.js"></script>
</body>
</html>
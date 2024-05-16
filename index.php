<?php

require_once '../db/db.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Ecommerce Website</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />


    <link rel="stylesheet" href="../shop/styles/css/style.css">
    <!-------------------------Font Awesome Icons --------------->
    <script src="https://kit.fontawesome.com/dad03e859c.js" crossorigin="anonymous"></script>
    <!----------x---------------Font Awesome Icons --------x------->

    <!----------x---------------Google font --------x------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Berkshire+Swash&family=Comic+Neue:wght@700&family=Gentium+Book+Plus:wght@400;700&family=Lato:ital,wght@0,400;0,700;0,900;1,700&family=Lexend+Deca:wght@500&family=Lexend:wght@500&family=Montserrat:wght@500&family=Open+Sans:wght@500;800&family=Roboto:wght@100;400&family=Sue+Ellen+Francisco&family=Work+Sans:wght@400;700;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900;&display:swap">
    <!----------x---------------Google font --------x----------------->

</head>

<body>
<section id="header">
    <a href="#"><img src="https://i.postimg.cc/x8ncvFjr/logo.png"></a>
    <div>
        <ul id="navbar">
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="cart.html" id="lg-bag"><i class="fal fa-shopping-bag"></i></a>
                <span class="quantity">0</span>
            </li>
            <li><a href="#" id="close"<i class="far fa-times"></i></a></li>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.html" ><i class="fal fa-shopping-bag"></i>
            <span class="quantity">0</span>
        </a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="hero">
    <h4>Trade-in-fair</h4>
    <h2>Super value deals</h2>
    <h1>On all Products</h1>
    <p>Save more with coupons and up to 70% off!</p>
    <button>Shop Now</button>

</section>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="https://i.postimg.cc/PrN2Y6Cv/f1.png" alt="">
        <h6>Free Shipping</h6>
    </div>

    <div class="fe-box">
        <img src="https://i.postimg.cc/qvycxW4q/f2.png" alt="">
        <h6>Online Order</h6>
    </div>

    <div class="fe-box">
        <img src="https://i.postimg.cc/1Rdphyz4/f3.png" alt="">
        <h6>Save Money</h6>
    </div>

    <div class="fe-box">
        <img src="https://i.postimg.cc/GpYc2JFZ/f4.png" alt="">
        <h6>Promotions</h6>
    </div>

    <div class="fe-box">
        <img src="https://i.postimg.cc/4yFCwmv6/f5.png" alt="">
        <h6>Happy Sell</h6>
    </div>

    <div class="fe-box">
        <img src="https://i.postimg.cc/gJN1knTC/f6.png" alt="">
        <h6>F24/7 Support</h6>
    </div>

</section>

<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        <div class="pro" onclick="window.location.href='https://codepen.io/Motun/full/OJBwbrQ'">
            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Carton Astronault Tshirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4></h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>


        <div class="pro">
            <img src="https://i.postimg.cc/2yhT2kvb/f2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Carton Leave Tshirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>
                    <link rel="stylesheet" href="public/products/index.php"></h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>


        <div class="pro">
            <img src="https://i.postimg.cc/VL9DtNm2/f3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Rose Multicolor Tshirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>


        <div class="pro">
            <img src="https://i.postimg.cc/vZ3hPS1z/f4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Pink Flower Tshirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>



        <div class="pro">
            <img src="https://i.postimg.cc/q7FLrhx6/f5.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Purple Flowering Tshirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>



        <div class="pro">
            <img src="https://i.postimg.cc/L86BZByZ/f7.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Short Knicker </h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>



        <div class="pro">
            <img src="https://i.postimg.cc/zDxJ2f0H/f6.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>2 in 1 Double Routed</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>



        <div class="pro">
            <img src="https://i.postimg.cc/x8qcBrpP/n6.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Ash Short</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>

    </div>
</section>

<section id="banner" class="section-m1">
    <h4> Repair Service</h4>
    <h2>Up to <span>70% off </span> - All Tshirts and Accessories</h2>
    <button class="btn normal">Explore more</button>
</section>

<section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        <div class="pro">
            <img src="https://i.postimg.cc/hG1hqqK6/n1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Carton Astronault Tshirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>


        <div class="pro">
            <img src="https://i.postimg.cc/BZkSkvxt/n2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Carton Leave Tshirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>


        <div class="pro">
            <img src="https://i.postimg.cc/KYjcC3sk/n3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Rose Multicolor Tshirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>


        <div class="pro">
            <img src="https://i.postimg.cc/vHvQBtJx/n4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Pink Flower Tshirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>



        <div class="pro">
            <img src="https://i.postimg.cc/908J8S4q/n5.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Purple Flowering Tshirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>



        <div class="pro">
            <img src="https://i.postimg.cc/X7r8NsGQ/n7.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Short Knicker </h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>



        <div class="pro">
            <img src="https://i.postimg.cc/JhrH0hYM/n8.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>2 in 1 Double Routed</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>



        <div class="pro">
            <img src="https://i.postimg.cc/2Sq4mytJ/f8.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Ash Short</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href=""><i class="fal fa-shopping-cart cart"></i></a>
        </div>

    </div>
</section>

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress is on sales at cara</span>
        <button class="btn white">Learn More</button>

    </div>

    <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2>upcoming season</h2>
        <span>The best classic dress is on sales at cara</span>
        <button class="btn white">Collection</button>

    </div>

</section>

<section id="banner3" class="section-p1">
    <div class="banner-box">

        <h2>SEASONAL SALES</h2>
        <h3>Winter Collection -50% OFF</h3>

    </div>

    <div class="banner-box banner-img2">

        <h2>SEASONAL SALES</h2>
        <h3>Winter Collection -50% OFF</h3>

    </div>

    <div class="banner-box banner-img3">

        <h2>SEASONAL SALES</h2>
        <h3>Winter Collection -50% OFF</h3>

    </div>

</section>

<section id="newsletter" class="section-p1">
    <div class="newstext">
        <h4>Feedback</h4>
        <p> <span>  FEEED.</span> </p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="btn normal">Feedback</button>
    </div>

    </div>

</section>

<footer class="section-p1">



</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<script src="../shop/styles/js/main.js"></script>
</body>

</html>

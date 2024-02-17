<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redstore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>    
<body> 
     
   <div class="header">    
   <div class="container">
       <div class="navbar">
            <div class="logo">
             <a href="index.php"><img src="images/logo-1.png" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Productes</a></li>
                <li><a href="">About</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
        </nav>
        <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
       <div class="row">
           <div class="col-2">
               <h1>Empower Your Style<br>Shop with Brandability!</h1>
               <p>Success isn't always about greatness. It's about consistency. Conistent<br>hard work gain success. Greatness will come.</p>
               
           </div>
           <div class="col-2">
               <img src="images/image1.png">
           </div>
       </div>
    </div>
</div>

<!------- featured categories -------->
 <div class="categories">
     <div class="small-container">
         <div class="row">
        <div class="col-3">
            <img src="images/category-1.jpg">
        </div>
        <div class="col-3">
            <img src="images/category-2.jpg">
        </div>
        <div class="col-3">
            <img src="images/category-3.jpg">
        </div>
     </div>
     </div>
   
    </div>
<!------- featured products -------->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product-details.html"><img src="images/product-1.jpg"></a>
                <a href="product-details.html"><h4>Red Printed Tshirt</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>    
                </div>
                <p>Rs299.00</p>
            </div>
             <div class="col-4">
                <img src="images/product-2.jpg">
                <h4>Red Printed Tshirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>    
                </div>
                <p>Rs470.00</p>
            </div>
             <div class="col-4">
                <img src="images/product-3.jpg">
                <h4>Red Printed Tshirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>    
                </div>
                <p>Rs350.00</p>
            </div>
             <div class="col-4">
                <img src="images/product-4.jpg">
                <h4>Red Printed Tshirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>    
                </div>
                <p>Rs299.00</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg">
                <h4>Red Printed Tshirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>    
                </div>
                <p>Rs459.00</p>
            </div>
             <div class="col-4">
                <img src="images/product-6.jpg">
                <h4>Red Printed Tshirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>    
                </div>
                <p>Rs399.00</p>
            </div>
             <div class="col-4">
                <img src="images/product-7.jpg">
                <h4>Red Printed Tshirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>    
                </div>
                <p>Rs99.00</p>
            </div>
             <div class="col-4">
                <img src="images/product-8.jpg">
                <h4>Red Printed Tshirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>    
                </div>
                <p>Rs499.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/product-9.jpg">
                <h4>Red Printed Tshirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>    
                </div>
                <p>Rs399.00</p>
            </div>
             <div class="col-4">
                <img src="images/product-10.jpg">
                <h4>Red Printed Tshirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>    
                </div>
                <p>Rs699.00</p>
            </div>
             <div class="col-4">
                <img src="images/product-11.jpg">
                <h4>Red Printed Tshirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>    
                </div>
                <p>Rs599.00</p>
            </div>
             <div class="col-4">
                <img src="images/product-12.jpg">
                <h4>Red Printed Tshirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>    
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>    
                </div>
                <p>Rs350.00</p>
            </div>
        </div>
    </div>
<!--------- offer --------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img">
                </div>  
                <div class="col-2">
                    <p>Exclusively Available on RedStore</p>
                    <h1>Smart Band 5</h1>
                    <small>The Mi Smart Band 5 features a 39.9% larger (then Mi Band 4) AMOLED colour full-touch display with adjustable brightness, so everything is clear as can be.</small><br>
                    <a href="" class="btn" >Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

<!------- testimonial ------->    
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                     <i class="fa fa-quote-left"></i>
                    <p>Loren Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>    
                        <i class="fa fa-star"></i>    
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>    
                    </div>
                    <img src="images/user-1.png">
                    <h3>Sean Parker</h3>
                </div>
                <div class="col-3">
                     <i class="fa fa-quote-left"></i>
                    <p>Loren Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>    
                        <i class="fa fa-star"></i>    
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>    
                    </div>
                    <img src="images/user-2.png">
                    <h3>Mike Smith</h3>
                </div>
                <div class="col-3">
                     <i class="fa fa-quote-left"></i>
                    <p>Loren Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>    
                        <i class="fa fa-star"></i>    
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>    
                    </div>
                    <img src="images/user-3.png">
                    <h3>Mabel Joe</h3>
                </div>
            </div>
        </div>
    </div>

<!-------- footer------->    
    
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and Ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                 <div class="footer-col-2">
                    <img src="images/logo-1.png">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports to the Many. </p>
                </div>
                 <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                     </ul>
                </div>
                 <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>You Tube</li>
                     </ul>
                </div>
            </div>
            <hr> 
            <p class="copyright">Copyright 2024 - All rights reserved</p>
        </div>
    </div>
<!--------js for toggle menu-------->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight = "0px")
                {
                     MenuItems.style.maxHeight = "200px";
                }
            else
                {
                     MenuItems.style.maxHeight = "0px";
                }
        }
    </script>
    
    
</body>    
</html>
   



















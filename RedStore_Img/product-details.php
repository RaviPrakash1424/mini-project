<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Redstore</title>
    <link rel="stylesheet" href="style.css">
    <link rel="https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>    
<body> 
     
 
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
 </div>
    
<!------- single product details -------->    
    
    <div class="small-container single-product">
        <div class="row">
    <div class="col-2">
        <img src="images/gallery-1.jpg" width="100%" id="productImg">
                
        <div class="small-img-row">
        <div class="small-img-col">
        <img src="images/gallery-1.jpg" width="100%" class="small-img">
        </div>
        <div class="small-img-col">
        <img src="images/gallery-2.jpg" width="100%" class="small-img">
        </div>
        <div class="small-img-col">
        <img src="images/gallery-3.jpg" width="100%" class="small-img">
        </div>
        <div class="small-img-col">
        <img src="images/gallery-4.jpg" width="100%" class="small-img">
        </div>
        </div>
                
            </div>
            <div class="col-2">
                <p>Home / T-Shirt</p>
                <h1>Red Printed T-shirt by HRX</h1>
                <h4>Rs350.00</h4>
                <select>
                    <option>select size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>small</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add To Cart</a>
                
                <h3>Product Details<i class="fa fa-indent"></i></h3>
                <br>
                <p>Give your summar wardrobe a style upgrade with the HRX Men's Active T-Shirt. Team it with a pair of shorts for your morning workout or a denims for an evening out with the guys.</p>
            </div>
        </div>
    </div>
    
<!-------title------->
    
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>view More</p>
        </div>
    </div>
       
    
    
<!-------products------->    

    <div class="small-container">
    
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
                <p>Rs99.00</p>
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
    

<!--js for product gallery-->

    <script>
        var productImg = document.getElementById("productImg");
        var SmallImg = document.getElementsByClassName("small-img");
        
         SmallImg[0].onclick = function()
          {
             productImg.src = SmallImg[0].src;
         }
         SmallImg[1].onclick = function()
          {
             productImg.src = SmallImg[1].src;
         }
         SmallImg[2].onclick = function()
          {
             productImg.src = SmallImg[2].src;
         }
         SmallImg[3].onclick = function()
          {
             productImg.src = SmallImg[3].src;
         }
        
     </script>

</body>    
</html>
   



















<div class="top-nav-wrapper">
    <div class="mobile-nav-toggle">
        <i class="fa-solid fa-bars toggle"></i>
    </div>
 
    <div class="search-container">
        <form action="">
            <div class="input-field">
                <input type="text" class="search-input" placeholder="Search Medicine...">
                <i class="fa-solid fa-xmark erase-search"></i>
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        <div class="search-result">
        <div class="seach-result-title">
            <h4>Seach Result</h4>
            <span class="cart-confirm">Added to cart</span>
        </div>
        <table class="medicine-table">
                                <thead>
                                    <tr>
                                        <th>Srl</th>
                                        <th>image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        
                                        <th>Quantity</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody class="search-body" >
                                    
                                    
                                </tbody>
                            </table>
        </div>
    <?php
    include("config.php");

    $get_admin=mysqli_query($con, "SELECT * FROM admin where admin_id= '{$_SESSION['admin_id']}'");
    $admin_info=mysqli_fetch_assoc($get_admin);
     

    ?>
    </div>
    <div class="profile-container">
        <span class="cart"><i class="fa-solid fa-cart-shopping"></i> Rs: <span class="cart-price">00</span></span>
        <img src="images/<?php echo $admin_info['image'];?>" alt="">
      
        <a class="profile-dropdown"><i class="fa fa-caret-down"></i></a>

    </div>
</div>
<!-- -------Admin Drop Down -->
<div class="dropdown-menu">
    <div class="admi-info">
        <div class="admin-img"><img src="images/<?php echo $admin_info['image'];?>" alt=""></div>
        <div class="admin-name">
            <h3><?php echo $admin_info['name'];?></h3>
           
            
        </div>
        
    </div>
    <div class="drop-down-nav">
            <ul>
                <li><a href="#"><i class="fa-solid fa-pen-to-square"></i> Edit Info</a></li>
                <li><a href="logout.php"><i class="fa-solid fa-power-off"></i>Log Out</a></li>
            </ul>
        </div>
</div>
<div class="right-side-bar">


<i class="fa-solid fa-xmark sidebar-close"></i>
            <div class="cart-title">
                <h3> <i class="fa-solid fa-cart-shopping"></i></i> Your Cart</h3>
            </div>
            <span class="bill">Your Total: $<span class="value">00</span></span>
            <div class="customer">
            
                 <input type="text" placeholder="Enter customer name..." class="customer-name">

            </div>
            <div class="cart-item-cont">



                


            </div>
            <div class="checkout-btn">

                <span  class="btn "><a class = "check-btn">check out now</a></span>
            </div>


</div>
<!DOCTYPE html>
<html lang="en">
<?php
include("header-files.php");

?>

<body>
    <div class="main-wrapper">
        <div class="left-side-bar">
            <?php
            include("side-bar.php");
            ?>
        </div>

        <div class="right-side-content">
            <!-- Mobile Side Bar Menu -->
            <div class="mobile-menu-wrapper ">
                <?php include("mobile-side-bar.php");?>
            </div>
            <?php include("top-nav.php"); ?>



            <div class="content-container">
                <!-------------Dashboard Starts here----------->





                <!---------Add Medicine Form --------->
                <div class="medicine-form-container add-medicine-form-container ">
                    <div class="medicine-form-inner-section add-medicine-form-inner-section">
                        <span class="medicine-close add-medicine-close "><i class="fa-solid fa-xmark"></i></span>
                        <span class="medicine-form-icon">
                            <i class="fa-solid fa-hand-holding-medical"></i>
                        </span>
                        <h2>Add Medicine</h2>
                        <form action="">
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Name</label>
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Purchase Price</label>
                                    <input type="number" class="input">
                                </div>
                                <div class="input-field">
                                    <label for="">Selling Price</label>
                                    <input type="number" class="input">
                                </div>
                                <div class="input-field">
                                    <label for="">Quantity</label>
                                    <input type="number" class="input">
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Description</label>
                                    <textarea name="" class="input" cols="30" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="input-row">
                                <div class=" input-field-img">
                                    <label for="">Upload Image</label>
                                    <input type="file" class="img-input">
                                </div>
                            </div>
                            <button class="medicine-btn add-medicine-btn">Add New Medicine</button>
                        </form>
                    </div>
                </div>



                <div class="medicine-form-container edit-medicine-form-container">
                    <div class="medicine-form-inner-section edit-medicine-form-inner-section">
                        <span class="medicine-close edit-medicine-close "><i class="fa-solid fa-xmark"></i></span>
                        <span class="medicine-form-icon">
                            <i class="fa-solid fa-hand-holding-medical"></i>
                        </span>
                        <h2>Edit Medicine</h2>
                        <form action="">
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Name</label>
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Purchase Price</label>
                                    <input type="number" class="input">
                                </div>
                                <div class="input-field">
                                    <label for="">Selling Price</label>
                                    <input type="number" class="input">
                                </div>
                                <div class="input-field">
                                    <label for="">Quantity</label>
                                    <input type="number" class="input">
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Description</label>
                                    <textarea name="" class="input" cols="30" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="input-row">
                                <div class=" input-field-img">
                                    <label for="">Upload Image</label>
                                    <input type="file" class="img-input">
                                </div>
                            </div>
                            <button class="medicine-btn add-medicine-btn">Add New Medicine</button>
                        </form>
                    </div>
                </div>





                <div class="section-title">
                    <span><i class="fa fa-list-ul"></i> All Sold Item</span>
                    
                </div>

                <div class="category-container">
                    <div class="category-search-and-add">
                        <div class="category-search">
                            <input type="text" placeholder="Search Medicine...">
                        </div>
                       
                    </div>

                    <div class="category-table-container">
                        <div class="table-inner-section">

                            <table class="medicine-table">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>image</th>
                                        <th>Price</th>
                                        <th>Item Qty</th>
                                        <th>Date</th>
                                        <th>Customer Name</th>
                                        <th>Total Amount</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Disprine</td>
                                        <td><img src="images/dis.jpg" alt=""></td>
                                        <td>342</td>
                                        <td>2</td>
                                        <td>23-feb-203</td>
                                        <td>Saleem</td>
                                        <td>4324</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>Disprine</td>
                                        <td><img src="images/dis.jpg" alt=""></td>
                                        <td>342</td>
                                        <td>2</td>
                                        <td>23-feb-203</td>
                                        <td>Saleem</td>
                                        <td>4324</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>Disprine</td>
                                        <td><img src="images/dis.jpg" alt=""></td>
                                        <td>342</td>
                                        <td>2</td>
                                        <td>23-feb-203</td>
                                        <td>Saleem</td>
                                        <td>4324</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>Disprine</td>
                                        <td><img src="images/dis.jpg" alt=""></td>
                                        <td>342</td>
                                        <td>2</td>
                                        <td>23-feb-203</td>
                                        <td>Saleem</td>
                                        <td>4324</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>Disprine</td>
                                        <td><img src="images/dis.jpg" alt=""></td>
                                        <td>342</td>
                                        <td>2</td>
                                        <td>23-feb-203</td>
                                        <td>Saleem</td>
                                        <td>4324</td>
                                        
                                    </tr>
                                    


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>




    </div>
    </div>

    <script src="javascript/script.js"></script>
    <script src="javascript/sale.js"></script>
</body>

</html>
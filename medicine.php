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
                        <form method="POST" class="add-med-form" enctype="multipart/form-data">
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Name</label>
                                    <input type="text" class="input add-name" name="name">
                                </div>
                                <div class="input-field">
                                    <label for="">Select Category</label>
                                    <select name="category" class="input add-cat">
                                        
                                      
                                    </select>
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Purchase Price</label>
                                    <input type="number" class="input add-purchase-price" name="purchase-price">
                                </div>
                                <div class="input-field">
                                    <label for="">Selling Price</label>
                                    <input type="number" class="input add-sale-price" name="selling-price">
                                </div>
                                <div class="input-field">
                                    <label for="">Quantity</label>
                                    <input type="number" class="input add-quantity" name="qnty">
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Description</label>
                                    <textarea name="desc" class="input add-desc" cols="30" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="input-row">
                                <div class=" input-field-img">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="image" class="img-input add-img">
                                </div>
                            </div>
                            <button class="medicine-btn add-medicine-btn">Add New Medicine</button>
                        </form>
                    </div>
                </div>

                <!--------------Edit Medicine modal ------------->

                <div class="medicine-form-container edit-medicine-form-container">
                    <div class="medicine-form-inner-section edit-medicine-form-inner-section">
                        <span class="medicine-close edit-medicine-close "><i class="fa-solid fa-xmark"></i></span>
                        <span class="medicine-form-icon">
                            <i class="fa-solid fa-hand-holding-medical"></i>
                        </span>
                        <h2>Edit Medicine</h2>
                        <form action=":POST" class="edit-medicine-form" >
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Name</label>
                                    <input type="text" class="input edit-name">
                                </div>
                                <div class="input-field">
                                    <label for="">Select Category</label>
                                    <select name="" class="input category edit-cat">
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Purchase Price</label>
                                    <input type="number" class="input edit-purchase-price">
                                </div>
                                <div class="input-field">
                                    <label for="">Selling Price</label>
                                    <input type="number" class="input edit-sale-price">
                                </div>
                                <div class="input-field">
                                    <label for="">Quantity</label>
                                    <input type="number" class="input edit-quantity">
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Description</label>
                                    <textarea name="" class="input edit-desc" cols="30" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="input-row">
                                <div class=" input-field-img">
                                    <label for="">Upload Image</label>
                                    <input type="file" class="img-input">
                                </div>
                            </div>
                            <button class="medicine-btn edit-medicine-btn">Edit Medicine</button>
                        </form>
                    </div>
                </div>





                <div class="section-title">
                    <span><i class="fa fa-list-ul"></i> Medicine</span>
                    
                </div>

                <div class="category-container">
                    <div class="category-search-and-add">
                        <div class="category-search ">
                            <input type="text" placeholder="Search Medicine..." class="medi-search">
                        </div>
                        <div class="confirm-msg-container">
                            <span class="confirm-msg">

                            </span>
                        </div>
                        <div class="add-new-category">
                            <button class="medicine-btn1"><i class="fa fa-plus-circle"></i> Add Medicine</button>
                        </div>
                    </div>

                    <div class="category-table-container">
                        <div class="table-inner-section">

                            <table class="medicine-table">
                                <thead>
                                    <tr>
                                        <th>Srl</th>
                                        <th>image</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Purchase Price</th>
                                        <th>Selling Price</th>
                                        <th>Category</th>
                                        <th>Quantity</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody class="medicine-table-body" >
                                   
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
    <script src="javascript/medicine.js"></script>
</body>

</html>
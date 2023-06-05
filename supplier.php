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





                <!---------Add Supplier Form --------->
                <div class="medicine-form-container add-supplier-container ">
                    <div class="medicine-form-inner-section add-supplier-inner-container">
                        <span class="medicine-close add-supplier-close "><i class="fa-solid fa-xmark"></i></span>
                        <span class="medicine-form-icon">
                            <i class="fa-solid fa-user-plus"></i>
                        </span>
                        <h2>Add Supplier</h2>
                        <form method="POST" enctype="multipart/form-data" class="add-supp-form">
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Supplier Name</label>
                                    <input type="text" class="input add-name" name = "name">
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Phone</label>
                                    <input type="text" class="input add-phone" name = "phone">
                                </div>
                                <div class="input-field">
                                    <label for="">Email</label>
                                    <input type="Email" class="input add-email" name = "email">
                                </div>

                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Address</label>
                                    <textarea name="address" class="input add-address" cols="30" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="input-row">
                                <div class=" input-field-img">
                                    <label for="">Upload Image</label>
                                    <input type="file" class="img-input" name = "image">
                                </div>
                            </div>
                            <button class="medicine-btn add-supplier">Add New Supplier</button>
                        </form>
                    </div>
                </div>


                <!---------Edir Supplier Form --------->
                <div class="medicine-form-container edit-supplier-container">
                    <div class="medicine-form-inner-section edit-supplier-inner-container">
                        <span class="medicine-close edit-supplier-close "><i class="fa-solid fa-xmark"></i></span>
                        <span class="medicine-form-icon">
                            <i class="fa-solid fa-user-plus"></i>
                        </span>
                        <h2>Edit Supplier</h2>
                        <form action="">
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Supplier Name</label>
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Phone</label>
                                    <input type="text" class="input">
                                </div>
                                <div class="input-field">
                                    <label for="">Email</label>
                                    <input type="Email" class="input">
                                </div>

                            </div>
                            <div class="input-row">
                                <div class="input-field">
                                    <label for="">Address</label>
                                    <textarea name="" class="input" cols="30" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="input-row">
                                <div class=" input-field-img">
                                    <label for="">Upload Image</label>
                                    <input type="file" class="img-input">
                                </div>
                            </div>
                            <button class="medicine-btn add-medicine-btn">Edit Supplier</button>
                        </form>
                    </div>
                </div>



                <div class="section-title">
                    <span><i class="fa fa-list-ul"></i> All Suppliers</span>

                </div>

                <div class="category-container">
                    <div class="category-search-and-add">
                        <div class="category-search">
                            <input type="text" placeholder="Search Medicine...">
                        </div>
                        <div class="confirm-msg">
                           
                        </div>
                        <div class="add-new-category">
                            <button class="add-supplier-btn"><i class="fa fa-plus-circle"></i> Add Supplier</button>
                        </div>
                    </div>

                    <div class="category-table-container">
                        <div class="table-inner-section">

                            <table class="medicine-table">
                                <thead>
                                    <tr>
                                        <th>Srl</th>
                                        <th>image</th>
                                        <th>Supplier Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody class = "suppliers-table">
                                 

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
    <script src="javascript/supplier.js"></script>
</body>

</html>
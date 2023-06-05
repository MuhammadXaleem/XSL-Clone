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
                <?php include("mobile-side-bar.php"); ?>
            </div>
            <?php include("top-nav.php"); ?>



            <div class="content-container">
                <!-------------Dashboard Starts here----------->
                <div class="section-title">
                    <span><i class="fa fa-list-ul"></i> Medicine Categories</span>

                </div>

                <div class="category-container">
                    <div class="category-search-and-add">
                        <div class="category-search">
                            <input type="text" placeholder="Search Categories..." class="search-cat">
                        </div>
                        <div class="confirm-msg-container">
                            <span class="confirm-msg">

                            </span>
                        </div>
                        <div class="add-new-category">
                            <button class="add-category-btn"><i class="fa fa-plus-circle"></i> Add Category</button>
                            <!-- Add Category Form -->


                            <div class="category-form-main-wrapper">
                                <div class="cat-inner">
                                    <a class="close-add-cat-btn"><i class="fa fa-window-close"></i></a>
                                    <form action="" class="cat-add-form">
                                        <div class="input-field">
                                            <label for="">Category Name</label>
                                            <input type="text" placeholder="Enter Name..." class="name">
                                        </div>
                                        <div class="input-field">
                                            <label for="">Description</label>
                                            <textarea name="" class="desc" cols="30" rows="4"></textarea>
                                        </div>

                                        <button class="submit_btn"> Add Category</button>
                                    </form>
                                </div>
                            </div>


                            <!-- Edit actegory Form -->
                            <div class="edit-category-form-main-wrapper">
                                <div class="cat-inner">
                                    <a class="close-edit-cat-btn"><i class="fa fa-window-close"></i></a>
                                    <form action="" class="update-form">
                                        <div class="input-field">
                                            <label for="">Category Name</label>
                                            <input type="text" placeholder="Enter Name..." class="name-in-edit-form">
                                        </div>
                                        <div class="input-field">
                                            <label for="">Description</label>
                                            <textarea name="" class="desc-in-edit-form" cols="30" rows="4"></textarea>
                                        </div>

                                        <button class="edit_btn"> Edit Category</button>
                                    </form>
                                </div>
                            </div>



                        </div>
                    </div>


                    <div class="category-table-container">

                        <table>
                            <thead>
                                <tr>
                                    <th>list</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody class="category-list">


                            </tbody>
                        </table>
                    </div>


                    <div class="pagination-container">
                        <ul class="pagi_inner">
                            
                        </ul>
                    </div>
                </div>

            </div>


        </div>




    </div>
    </div>

    <script src="javascript/script.js"></script>
    <script src="javascript/medicine_category.js"></script>
</body>

</html>
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
                <div class="section-title">
                    <span><i class="fa-solid fa-gauge"></i> Dashboard</span>
                </div>
                <div class="info-card-container">
                    <div class="info-card total-medi">
                        <h3>Medicine</h3>
                        <div class="value-icon">
                            <span class="value total-medi-value">458</span>
                            <span class="icon"><i class="fa-solid fa-kit-medical"></i></span>
                        </div>
                    </div>

                    <div class="info-card total-sale">
                        <h3>Today Sale</h3>
                        <div class="value-icon">
                            <span class="value total-sale-value">546</span>
                            <span class="icon"><i class="fa-solid fa-kit-medical"></i></span>
                        </div>
                    </div>

                    <div class="info-card weekly-sale">
                        <h3>Total Category</h3>
                        <div class="value-icon">
                            <span class="value total-cat-value ">546</span>
                            <span class="icon"><i class="fa-solid fa-kit-medical"></i></span>
                        </div>
                    </div>

                    <div class="info-card total-suplier">
                        <h3>Supplier</h3>
                        <div class="value-icon">
                            <span class="value total-supplier-value">546</span>
                            <span class="icon"><i class="fa-solid fa-kit-medical"></i></span>
                        </div>
                    </div>
                </div>
                <div class="data-visual-container">
                    <div class="chart-container">
                        <h4>Weekly Sale</h4>
                        <div class="chart-inner-section">

                            <div class="chart-inner-cont">

                                <div class="chart-row">
                                    <span class="value">800</span>
                                </div>
                                <div class="chart-row">
                                    <span class="value">600</span>
                                </div>
                                <div class="chart-row">
                                    <span class="value">400</span>
                                </div>
                                <div class="chart-row">
                                    <span class="value">200</span>
                                </div>
                                <div class="chart-row">
                                    <span class="value">0</span>
                                </div>


                                <div class="days-container">
                                    <div class="vartical-bar">
                                        <div class="bar-line mon"><span>200</span></div>
                                    </div>
                                    <div class="vartical-bar ">
                                        <div class="bar-line tue"><span>600</span></div>
                                    </div>
                                    <div class="vartical-bar ">
                                        <div class="bar-line wed"><span>100</span></div>
                                    </div>
                                    <div class="vartical-bar">
                                        <div class="bar-line thu"><span>800</span></div>
                                    </div>
                                    <div class="vartical-bar">
                                        <div class="bar-line fri"><span>1000</span></div>
                                    </div>
                                    <div class="vartical-bar">
                                        <div class="bar-line sat"><span>220</span></div>
                                    </div>
                                    <div class="vartical-bar">
                                        <div class="bar-line sun"><span>900</span></div>
                                    </div>
                                </div>

                            </div>
                            <div class="days-name-cont">
                                <div class="days-name"><span>Sunday</span></div>
                                <div class="days-name"><span>Monday</span></div>
                                <div class="days-name"><span>Tuesday</span></div>
                                <div class="days-name"><span>Wednesday</span></div>
                                <div class="days-name"><span>Thursday</span></div>
                                <div class="days-name"><span>Friday</span></div>
                                <div class="days-name"><span>Saturday</span></div>

                            </div>

                        </div>
                    </div>
                    <div class="table-container">
                        <h4>Top Selling Items</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Prices</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BoiFlu</td>
                                    <td>23</td>
                                    <td>100</td>
                                    <td>6743</td>
                                </tr>
                                <tr>
                                    <td>BoiFlu</td>
                                    <td>23</td>
                                    <td>100</td>
                                    <td>6743</td>
                                </tr>
                                <tr>
                                    <td>BoiFlu</td>
                                    <td>23</td>
                                    <td>100</td>
                                    <td>6743</td>
                                </tr>
                                <tr>
                                    <td>BoiFlu</td>
                                    <td>23</td>
                                    <td>100</td>
                                    <td>6743</td>
                                </tr>
                                <tr>
                                    <td>BoiFlu</td>
                                    <td>23</td>
                                    <td>100</td>
                                    <td>6743</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>




        </div>
    </div>

    <script src="javascript/script.js"></script>
    <script src="javascript/dashboard.js"></script>
</body>

</html>
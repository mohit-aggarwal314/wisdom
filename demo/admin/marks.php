<?php
include 'header1.php';
?>



<main class="u-main" role="main">
    <!-- Sidebar -->
    <?php
    include 'footer.php';
    ?>
    <!-- End Sidebar -->

    <div class="u-content">
        <div class="u-body">

            <!-- breadcumb-area -->
            <section class="breadcumb-area card bg-gradient mb-5">
                <div class="bread-cumb-content card-body d-flex align-items-center">
                    <div class="breadcumb-heading">
                        <h2 class="text-white">All Students Marks</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="assets/img/breadcumb-marks.png" alt="">
                    </div>
                </div>
            </section>
            <!-- End breadcumb-area -->




            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <a href="" class="btn btn-sm btn-pill btn-outline-light ml-auto">+ Add New</a>
                    </header>
                    <div class="card-body">
                        <form action="#" class="es-form">
                            <div class="row align-items-center">
                                <div class="col">
                                    <label for="class">Class</label>
                                    <select id="class" class="">
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="section">Section</label>
                                    <select id="section" class="">
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="date">Date</label>
                                    <div class="datepicker-wrap">
                                        <input type="text" id="datepicker" class="datepicker" placeholder="25/12/2021">
                                        <i class="fa fa-calendar datepicker-icon"></i>
                                    </div>

                                </div>
                                <div class="col">
                                    <a href="" class="es-form-btn btn btn-block bg-gradient text-white">View</a>
                                </div>
                            </div>
                        </form>

                        <div class="attendances-list-wrap mt-5">
                            <div class="show-option d-flex align-items-center mb-4">
                                <div class="show-list-count">
                                    <p>show
                                        <select id="section" class="">
                                            <option data-display="10">10</option>
                                            <option value="1">20</option>
                                            <option value="2">30</option>
                                        </select>
                                        items
                                    </p>
                                </div>
                                <div class="search-student ml-auto">
                                    <form action="" class="search-student-form">
                                        <input type="text" placeholder="Student Name">
                                        <button class="btn btn-lg btn-pill bg-gradient text-white">Search</button>
                                    </form>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="bg-gradient">
                                        <tr>
                                            <th scope="col" class="text-white">Student</th>
                                            <th scope="col" class="text-white text-center">Lab1</th>
                                            <th scope="col" class="text-white text-center">Lab2</th>
                                            <th scope="col" class="text-white text-center">Lab3</th>
                                            <th scope="col" class="text-white text-center">Lab4</th>
                                            <th scope="col" class="text-white text-center">Lab5</th>
                                            <th scope="col" class="text-white text-center">Options</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Harnin kine</td>
                                            <td class="text-center text-danger">30</td>
                                            <td class="text-center">75</td>
                                            <td class="text-center">78</td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">85</td>
                                            <td class="text-center"><a href="" class="btn btn-outline-danger es-am-btn">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>Harnin kine</td>
                                            <td class="text-center text-danger">30</td>
                                            <td class="text-center">75</td>
                                            <td class="text-center">78</td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">85</td>
                                            <td class="text-center"><a href="" class="btn btn-outline-danger es-am-btn">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>Harnin kine</td>
                                            <td class="text-center text-danger">30</td>
                                            <td class="text-center">75</td>
                                            <td class="text-center">78</td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">85</td>
                                            <td class="text-center"><a href="" class="btn btn-outline-danger es-am-btn">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>Harnin kine</td>
                                            <td class="text-center text-danger">30</td>
                                            <td class="text-center">75</td>
                                            <td class="text-center">78</td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">85</td>
                                            <td class="text-center"><a href="" class="btn btn-outline-danger es-am-btn">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>Harnin kine</td>
                                            <td class="text-center text-danger">30</td>
                                            <td class="text-center">75</td>
                                            <td class="text-center">78</td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">85</td>
                                            <td class="text-center"><a href="" class="btn btn-outline-danger es-am-btn">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td>Harnin kine</td>
                                            <td class="text-center text-danger">30</td>
                                            <td class="text-center">75</td>
                                            <td class="text-center">78</td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">85</td>
                                            <td class="text-center"><a href="" class="btn btn-outline-danger es-am-btn">Edit</a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="col-md-12 text-center">
                    <nav aria-label="Bootstrap Pagination" class="mt-5 text-center d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item">
                                <a class="btn btn-outline-danger prev" href="#"><span class="ml-1 d-none d-xl-inline-block">Previous</span></a>
                            </li>
                            <li class="page-item">
                                <a class="btn btn-danger bg-gradient text-white ml-4 mr-4" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="btn btn-outline-danger next" href="#"><span class="mr-1 d-none d-xl-inline-block">Next</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>



        </div>
    </div>
</main>

<!-- Global Vendor -->
<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>

<!-- Initialization  -->
<script src="assets/js/sidebar-nav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/dashboard-page-scripts.js"></script>
<!--<script src="assets/js/scripts.js"></script>-->
</body>

</html>
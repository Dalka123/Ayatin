<?php include_once 'controller/conn.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php
?>
<?php
require_once('commons/header.php')
?>

<body>
    <div id="app">
        <?php
        require_once('commons/sidebar.php')
        ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Students</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Student Admit Form</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add New Student</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST" id="studentReg">
                                        <div class="form-group">
                                            <label for="basicInput">Full Name</label>
                                            <input type="text" class="form-control" name="stdName" id="stdName" placeholder="Name">
                                        </div>


                                        <div class="form-group">
                                            <label for="helpInputTop">Date Of Birth</label>
                                            <input type="date" class="form-control" name="dob" id="dob">
                                        </div>

                                        <div class="form-group">
                                            <label for="helperText">Parent Name</label>
                                            <input type="text" name="pName" id="pName" class="form-control" placeholder="Parent Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="helperText">Address</label>
                                            <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label for="helperText">Gender</label>
                                        <select class="form-select" name="gender" id="gender">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="helperText">Class</label>
                                        <select class="form-select" name="class" id="class">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                    <div class="form-group">

                                        <label for="basicInput">Parent Phone</label>
                                        <input type="text" class="form-control" name="parentPhone" id="parentPhone" placeholder="Parent Phone">
                                    </div>
                                    <div class="form-group">

                                        <label for="basicInput">Discount</label>
                                        <input type="text" class="form-control" name="discount" id="discount" placeholder="Disocunt">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Student Image</label>
                                        <input class="form-control" type="file" name="stdImage" id="stdImage">
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                    <button type="reset" name="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>



            </div>

            <?php
            require_once('commons/footer.php');
            ?>
        </div>
    </div>

</body>

</html>
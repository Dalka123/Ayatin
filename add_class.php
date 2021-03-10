<!DOCTYPE html>
<html lang="en">
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
                            <h3>Classes</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Class</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add New Class</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">Class Name</label>
                                        <input type="text" class="form-control" id="basicInput"
                                            placeholder="Class Name">
                                    </div>

                                    
                                </div>
                                <div class="col-md-6">
                                
                                                <div class="form-group">
                                   
                                        <label for="basicInput">Fee</label>
                                        <input type="text" class="form-control" id="basicInput"
                                            placeholder="Fee">
                                    </div>
                                    
                                
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Save</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
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
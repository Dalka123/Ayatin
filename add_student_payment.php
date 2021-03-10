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
                            <h3>Student Payment</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Payment</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add New Payment</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                <fieldset class="form-group">
                                <label for="helperText">Select Student</label>
                                                    <select class="form-select" id="basicSelect">
                                                        <option>Morning</option>
                                                        <option>Afternoon</option>
                                                        <option>Thor Ragnarok</option>
                                                    </select>
                                                </fieldset>
                                                <div class="form-group">
                                        <label for="helpInputTop">Previous Balance</label>
                                        <input type="text" class="form-control"   placeholder="Previous Balance" id="readonlyInput" readonly="readonly">
                                    </div>
                                   
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label for="helpInputTop">Amount</label>
                                        <input type="text" class="form-control"   placeholder="Amount" id="readonlyInput" readonly="readonly">
                                    </div>
                                                <div class="form-group">
                                   
                                        <label for="basicInput">Paid</label>
                                        <input type="text" class="form-control" id="basicInput"
                                            placeholder="Paid">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                        <label for="basicInput">Payment Date</label>
                                        <input type="date" class="form-control" id="basicInput">
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
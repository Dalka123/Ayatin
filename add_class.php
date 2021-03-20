<?php include_once 'controller/conn.php';
$sql = "select subject_name from subjects";
$result = mysqli_query($conn, $sql) or die("Error " . mysqli_error($conn));
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<div class="card-body">
<form method="POST" id="addClass">
    <div class="row">
        <div class="col-md-6">
                <div class="form-group">
                    <label for="Class Name">Class Name</label>
                    <input type="text" class="form-control" id="cname" name="cname" placeholder="Class Name">
                </div>
        </div>
        <div class="col-md-6">

            <div class="form-group">

                <label for="basicInput">Fee</label>
                <input type="text" class="form-control" id="fee" name="fee" placeholder="Fee">
            </div>


        </div>
        <div class="col-md-12">

            <div class="form-group">

                <label for="basicInput">Subjects</label>
                <select class="selectpicker" multiple title="Choose Subjects here..." id="subjectNames" name="subjectNames">
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <option value="<?php echo $row['subject_name']; ?>"><?php echo $row['subject_name']; ?></option>
                    <?php } ?>
                </select>
                <?php mysqli_close($conn); ?>



            </div>
        </div>
        <div class="col-sm-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
        </div>
    </div>
</form>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>





<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="models/add_class.js"></script>
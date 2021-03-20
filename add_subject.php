<?php include_once 'controller/conn.php'?>
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
        <form method="POST" id="addSubject">
            <div class="form-group">
                <label for="basicInput">Subject Name</label>
                <input type="text" class="form-control" id="sname" name="sname" placeholder="Subject Name">
            </div>


        </div>
        <div class="col-sm-12 d-flex justify-content-end">
            <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Save</button>
            <button type="reset" name="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
        </div>
    </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="models/add_subject.js"></script>
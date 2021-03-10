<head>
<!-- Favicon -->
<link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- Icons -->
<link href="/assets/vendor/nucleo/css/nucleo.min.css" rel="stylesheet">
<link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Argon CSS -->
<link type="text/css" href="/assets/css/argon.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Core -->
<script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Argon JS -->
<script src="/assets/js/argon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
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
                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                <datalist id="datalistOptions">
                    <option value="San Francisco">
                    <option value="New York">
                    <option value="Seattle">
                    <option value="Los Angeles">
                    <option value="Chicago">
                </datalist>
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
                <div class="dropzone dropzone-single" data-toggle="dropzone" data-dropzone-url="http://">
                    <div class="fallback">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="dropzoneBasicUpload">
                            <label class="custom-file-label" for="dropzoneBasicUpload">Choose file</label>
                        </div>
                    </div>

                    <div class="dz-preview dz-preview-single">
                        <div class="dz-preview-cover">
                            <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 d-flex justify-content-end">
            <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Save</button>
            <button type="reset" name="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
        </div>
        </form>
    </div>
</div>
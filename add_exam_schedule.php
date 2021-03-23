<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="basicInput">Exam Type</label>
                  <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                     <datalist id="datalistOptions">
                         <option value="San Francisco">
                         <option value="New York">
                         <option value="Seattle">
                         <option value="Los Angeles">
                         <option value="Chicago">
                     </datalist>
            </div>


        </div>
        <div class="col-md-6">

            <div class="form-group">

                <label for="basicInput">Start Date</label>
                <input type="date" class="form-control" id="basicInput" >
            </div>


        </div>
        <div class="col-md-12">

            <div class="form-group">

                <label for="basicInput">End Date</label>
                <input type="date" class="form-control" id="basicInput" > 
            </div>


        </div>
        <div class="col-sm-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
        </div>
    </div>
</div>
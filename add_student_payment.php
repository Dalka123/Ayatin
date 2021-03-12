<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <fieldset class="form-group">
                <label for="helperText">Select Student</label>
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
                <label for="helpInputTop">Previous Balance</label>
                <input type="text" class="form-control" placeholder="Previous Balance" id="readonlyInput" readonly="readonly">
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="helpInputTop">Amount</label>
                <input type="text" class="form-control" placeholder="Amount" id="readonlyInput" readonly="readonly">
            </div>
            <div class="form-group">

                <label for="basicInput">Paid</label>
                <input type="text" class="form-control" id="basicInput" placeholder="Paid">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="basicInput">Payment Date</label>
                <input type="date" class="form-control" id="basicInput">
            </div>
        </div>
        <div class="col-sm-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
        </div>
    </div>
</div>
 <div class="card-body">
     <div class="row">
         <div class="col-md-6">
             <div class="form-group">
                 <label for="basicInput">Emplopyee Name</label>
                 <input type="text" class="form-control" id="basicInput" placeholder="Name">
             </div>


             <div class="form-group">
                 <label for="helpInputTop">Phone</label>
                 <input type="text" class="form-control" id="helpInputTop" placeholder="Phone">
             </div>

             <div class="form-group">
                 <label for="helperText">Address</label>
                 <input type="text" id="helperText" class="form-control" placeholder="Address">
             </div>
             <label for="basicInput">Salary</label>
                 <input type="text" class="form-control" id="basicInput" placeholder="Other Phone">
         </div>
         <div class="col-md-6">
         <div class="form-group">

                 <label for="basicInput">Email</label>
                 <input type="text" class="form-control" id="basicInput" placeholder="Email">
             </div>
             <fieldset class="form-group">
                 <label for="helperText">Gender</label>
                 <select class="form-select" id="basicSelect">
                     <option>IT</option>
                     <option>Blade Runner</option>
                     <option>Thor Ragnarok</option>
                 </select>
             </fieldset>
             <div class="form-group">
                 <fieldset class="form-group">
                     <label for="helperText">Title</label>
                     <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                     <datalist id="datalistOptions">
                         <option value="San Francisco">
                         <option value="New York">
                         <option value="Seattle">
                         <option value="Los Angeles">
                         <option value="Chicago">
                     </datalist>
                 </fieldset>
                 </div>
                 <label for="basicInput">Hired Date</label>
                 <input type="date" class="form-control" id="basicInput" placeholder="Other Phone">
             </div>

         </div>
         <div class="col-sm-12 d-flex justify-content-end">
             <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
             <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
         </div>
     </div>
 </div>
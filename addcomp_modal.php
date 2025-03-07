<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <form action="save_computer.php" method="POST">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Computer</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">User</span>
                  <input type="text" name="user" class="form-control" placeholder="User" >
               </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Department</span>
                  <input type="text" name="department" class="form-control" placeholder="Department" >
               </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Device Name</span>
                  <input type="text" name="device_name" class="form-control" placeholder="Device Name" required>
               </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Processor</span>
                  <input type="text" name="processor" class="form-control" placeholder="Processor" >
               </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Motherboard</span>
                  <input type="text" name="motherboard" class="form-control" placeholder="Motherboard" >
               </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Memory</span>
                  <input type="text" name="memory" class="form-control" placeholder="Memory" >
               </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">GPU</span>
                  <input type="text" name="gpu" class="form-control" placeholder="GPU">
               </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Storage</span>
                  <input type="text" name="storage" class="form-control" placeholder="Storage" >
               </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Monitor</span>
                  <input type="text" name="monitor" class="form-control" placeholder="Monitor">
               </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Operating System</span>
                  <input type="text" name="os" class="form-control" placeholder="Operating System" >
               </div>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">IP Address</span>
                  <input type="text" name="ip" class="form-control" placeholder="IP Address" >
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save</button>
            </div>
         </form>
      </div>
   </div>
</div>

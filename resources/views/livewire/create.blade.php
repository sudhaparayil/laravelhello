
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addstudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form >
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control"   name="firstname" placeholder="Enter firstname" wire:model='firstname'>
                    @error('firstname') <p class="text-danger">{{$message}}</p> @enderror
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control"  name="lastname" placeholder="Enter lastname" wire:model='lastname'>
                    @error('lastname') <p class="text-danger">{{$message}}</p> @enderror
                  </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control"  name="email" placeholder="Enter email" wire:model='email'>
                  @error('email') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" class="form-control"  name="phone" placeholder="Enter phone" wire:model='phone'>
                  @error('phone') <p class="text-danger">{{$message}}</p> @enderror
                </div>


              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" wire:click.ptrevent='store()' >Add student</button>
        </div>
      </div>
    </div>
  </div>

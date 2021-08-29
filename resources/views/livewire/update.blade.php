
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="updatestudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form >
                <div class="form-group">
                    <input type="hidden" name='id' wire:model='ids'>
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control"   name="firstname"  wire:model='firstname'>
                    @error('firstname') <p class="text-danger">{{$message}}</p> @enderror
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control"  name="lastname"  wire:model='lastname'>
                    @error('lastname') <p class="text-danger">{{$message}}</p> @enderror
                  </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control"  name="email"  wire:model='email'>
                  @error('email') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" class="form-control"  name="phone"  wire:model='phone'>
                  @error('phone') <p class="text-danger">{{$message}}</p> @enderror
                </div>


              </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" wire:click.ptrevent='updatestudent()' >Updated student</button>
        </div>
      </div>
    </div>
  </div>

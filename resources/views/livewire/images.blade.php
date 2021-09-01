
<div>
    <h2>File Upload Form</h2>

    <!-- Create File Upload Form -->
    <form wire:submit.prevent="uploadSelectedFile" >
        <div class="row">
            <div class="col-md-3">
                <label for="">Choose File</label>
                <input type="file" wire:model="filename" multiple > <!-- Did a mistake here -->
                @error('filename.*')
                    <span style="color:red;">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-12">
                <input type="submit" name="submit" value="Upload Image">
            </div>
        </div>
    </form>
</div>
<div>
    <h2>Multiple Files Uploads</h2>

    <form wire:submit.prevent="uploadMultipleFiles" >
        <div class="row">
            <div class="col-md-3">
                <label for="">Slides</label>
                <input type="file" wire:model="slides" multiple >
                @error('slides.*')
                    <span style="color: red;" >{{ $message }}</span>
                @enderror

                <h2>Preview Images</h2>
                <!-- Loading Message for Images -->
                <div wire:loading wire:target="slides">Uploading Slide Images...</div>
                @if( !empty( $slides ) )
                    <div>
                        @foreach ( $slides as $slide )
                            <img src="{{ $slide->temporaryUrl() }}" alt="" style="width: 100px;" >
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" >Upload Slides</button>
            </div>
        </div>
    </form>

</div>

{{-- <div>
  <section>
      <div class="container">
          <div class="row">
            <div class="col-md-6">
                {{-- @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>

                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>image</h3>
                    </div>
                    <div class="card-body">
                        <div>
                            <form>
                                <div class=" add-input">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="file" class="form-control" wire:model="images" multiple>
                                                @error('image.*') <span class="text-danger error">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <button class="btn text-white btn-success" wire:click.prevent="store">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table>
                    <th>image</th>
                    <td>
                        @foreach ($images as $item)
                           {{ $item->filename }}
                        @endforeach
                        <tr></tr>
                    </td>
                </table>
            </div>
          </div>
      </div>
  </section>
</div> --}}

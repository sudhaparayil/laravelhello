<div>
    <form wire:submit.prevent="save">

        <input type="file" wire:model="photos" multiple>



        @error('photos') <span class="error">{{ $message }}</span> @enderror



        @if ($photos)
        @foreach ($photos as $photo)
        <img src="{{ $photo->temporaryUrl() }}" width="100">
        <button wire:click.prevent ="RemoveImage({{ $loop->index }})">Remove</button>
        @endforeach
        @endif





        <button type="submit">Save Photo</button>

    </form>

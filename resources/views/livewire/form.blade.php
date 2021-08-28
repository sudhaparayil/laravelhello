<div>
    foo:<input type="text" wire:model="foo"/><br>
    name:<input type="text" wire:model="name"/>
    <br>
    <br>

    @foreach ($info as $item)
    {{$item}}<br>
    <hr>
    @endforeach

   
</div>

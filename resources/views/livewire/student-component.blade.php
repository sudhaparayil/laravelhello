<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
    {{ session('message') }}
    </div>
    @endif
    <form>
    <div class=" add-input">
    <div class="row">
    <div class="col-md-5">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter firstname" wire:model="firstname.0">
    @error('firstname.0') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    </div>
    <div class="col-md-5">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter lastname" wire:model="lastname.0">
    @error('lastname.0') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    </div>
    <div class="col-md-5">
    <div class="form-group">
    <input type="email" class="form-control" wire:model="email.0" placeholder="Enter Email">
    @error('email.0') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    </div>
    <div class="col-md-5">
    <div class="form-group">
    <input type="text" class="form-control" wire:model="phone.0" placeholder="Enter phone">
    @error('phone.0') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    </div>
    <div class="col-md-2">
    <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
    </div>
    </div>
    </div>
    @foreach($inputs as $key => $value)
    <div class=" add-input">
    <div class="row">
    <div class="col-md-5">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter firstname" wire:model="firstname.{{ $value }}">
    @error('firstname.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    </div>
    <div class="col-md-5">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter lastname" wire:model="lastname.{{ $value }}">
    @error('lastname.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    </div>
    <div class="col-md-5">
    <div class="form-group">
    <input type="email" class="form-control" wire:model="email.{{ $value }}" placeholder="Enter Email">
    @error('email.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    </div>
    <div class="col-md-5">
    <div class="form-group">
    <input type="text" class="form-control" wire:model="phone.{{ $value }}" placeholder="Enter phone">
    @error('phone.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    </div>
    <div class="col-md-2">
    <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">remove</button>
    </div>
    </div>
    </div>
    @endforeach
    <div class="row">
    <div class="col-md-12">
    <button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">Save</button>
    </div>
    </div>
    </form>
    </div>
    <style>
        html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        }
        .full-height {
        height: 100vh;
        }
        .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
        }
        .position-ref {
        position: relative;
        }
        .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
        }
        .content {
        text-align: center;
        }
        .title {
        font-size: 84px;
        }
        .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        }
        .m-b-md {
        margin-bottom: 30px;
        }
        </style>




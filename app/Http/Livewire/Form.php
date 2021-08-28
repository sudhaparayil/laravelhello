<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $foo;
    public $name;
    public $info=[];

 
    public function mount()
    {
        $this->info[]="mount";
    }
 
    public function hydrateFoo($value)
    {
        $this->info[]="hydrateFoo";
    }
 
    public function dehydrateFoo($value)
    {
        $this->info[]="dehydrateFoo";
    }
 
    public function hydrate()
    {
        $this->info[]="hydrate";
    }
 
    public function dehydrate()
    {
       $this->foo ="dehydrate";
    }
 
    public function updating($name, $value)
    {
       $this->foo ="updating";
    }
 
    public function updated($name, $value)
    {
       $this->info[]="updated";
    }
 
    public function updatingFoo($value)
    {
       $this->info[]="updatingFoo";
    }
 
    public function updatedFoo($value)
    {
       $this->info[]="updatedFoo";
    }
 
    public function updatingFooBar($value)
    {
       $this->info[]="updatingFooBar";
    }
 
    public function updatedFooBar($value)
    {
       $this->info[]="updatedFooBar";
    }

    public function render()
    {
        return view('livewire.form')->layout('layouts.home');
    }
}

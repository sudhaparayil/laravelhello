<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\withFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Images extends Component
{

    use WithFileUploads;

    public $filename=[];
    public $slides=[];

    public function uploadMultipleFiles(){
        $this->validate([
            'slides.*' => 'required|image',
        ]);
        dd($this->slides);
      //  $this->validate([
      //      'slides.*' => 'required|image'
      //  ]);
     //   dd("$this->slides");
        // if( !empty( $this->slides ) ){
        //     foreach( $this->slides as $slide ){
        //         $slide->store('public/slides-images');
        //     }
        // }
    }

    public function uploadSelectedFile(){
        $this->validate([
            'filename.*' => 'required|image',
        ]);
        foreach( $this->filename as $key => $item ){
        dd($this->filename[$key]);
        }
       // $ext = $this->filename->getClientOriginalExtension();
       // dd($this->filename->storeAs('public/uploads', 'my-profile-pic2.'.$ext));
    }

    // use WithFileUploads;

    // public $images = [];



    // public function store()
    // {
    // //     foreach ($this->images as $key => $image) {
    // //   dd(json_encode($image));
    //     //}
    //     $this->validate([
    //         'images.*' => 'image|max:1024', // 1MB Max
    //     ]);
    //         if($this->images)
    //         {
    //             foreach ($this->images as $key => $image) {
    //                 //$imageName = Carbon::now()->timestamp.'.'.$image->extension();
    //                 $key = $image->storeAs('images',Carbon::now()->timestamp.'.'.$image->extension());;

    //                // $this->images[$key] = Carbon::now()->timestamp.'.'.$image->extension()->store('images','public');
    //                 Image::create(['filename' => Carbon::now()->timestamp.'.'.$image->extension()]);
    //             }

    //            // $this->images = json_encode($this->images);

    //            // Image::create(['filename' => $this->images]);

    //             session()->flash('message', 'Images has been successfully Uploaded.');

    //             return redirect()->to('/upload-images');
    //         }

    // }

    public function render()
    {
       $simages = Image::all();
      // echo $simages;
       //die;
        return view('livewire.images',compact('simages'))->layout('layouts.home');
    }
}

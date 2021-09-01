<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class MultipleImageUpload extends Component
{
    use WithFileUploads;



    public $photos = [];


    public function RemoveImage($index)
    {
        //dd($this->photos[$index]);
      // dd($index);
      //$this->photos = $photos;
      // unset($this->photos[$index]);
       array_splice($this->photos,$index,1);
    }

    public function save()

    {

        $this->validate([

            'photos.*' => 'image|max:1024', // 1MB Max

        ]);


       //dd($img_len);
if ( $this->photos) {
    $sphotos = $this->photos;
    $img_len =count($sphotos);
    foreach ($sphotos  as $key => $photo )
     {
  //  for ($i=0; $i < $img_len; $i++) {
        $img_ext = $sphotos[$key]->getClientOriginalExtension();
       $imageName = Carbon::now()->timestamp.'.'.$img_ext;
       // $sphotos[$i]->store('image', $imageName);
        $sphotos[$key] = $photo->storeAs('images',$imageName);
      //  Image::create(['filename'=> $imageName]);
     }
}

        return redirect()->back();

       // $i=0;
     //   foreach ($this->photos as $key => $photo ) {
        //    $ext=$this->photos[$key]->$photo->extension();
        //    $imageName = Carbon::now()->timestamp.'.'.$ext;
         //   $photo->storeAs('img', $imageName);
            //$this->photos[$index]=$photo->storeAs('photos',$imageName);

     //   }


    //   foreach ($this->photos as $i => $value) {

    //     $imageName = Carbon::now()->timestamp.'.'.$this->value->extension();
    //     $this->i->storeAs('photos',$imageName);
    //      Image::create(['filename'=> $imageName]);
    //     // dd($value);

    //          //  = $value;
    //    }
       // dd($this->photos);

    }

    public function render()

    {
        return view('livewire.multiple-image-upload')->layout('layouts.home');
    }
}

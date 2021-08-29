<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;


class Update extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $ids;







    public function edit($id)
    {
        $student = Student::where('id',$id)->first();

        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;

    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'firstname' => 'required',
            'lastname' =>'required',
            'email' =>'required|email',
            'phone' =>'required'
        ]);

    }

    public function updatestudent()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' =>'required',
            'email' =>'required|email',
            'phone' =>'required'
    ]);


        $student = Student::find($this->ids);
        $student->update([
                'firstname' => $this->firstname,
                'lastname' =>$this->lastname,
                'email' =>$this->email,
                'phone' =>$this->phone
        ]);
        session()->flash('message','student updated successfully');
        $this->resetInputFields();
        $this->emit('studentupdated');
    

    }

    public function render()
    {
        $students = Student::orderBy('id','DESC')->get();
        return view('livewire.update',compact('students'))->layout('layouts.home');
    }
}

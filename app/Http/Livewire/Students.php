<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $ids;
    public $searchterm;



    public function resetInputFields()
    {
        $this->firstname ='';
        $this->lastname ='';
        $this->email ='';
        $this->phone ='';

    }

    public function store()
    {
        $validateData  = $this->validate([
                'firstname' => 'required',
                'lastname' =>'required',
                'email' =>'required|email',
                'phone' =>'required'
        ]);

        Student::create($validateData);
        session()->flash('message','student created successfully');
        $this->resetInputFields();
        $this->emit('studentadded');


    }

    public function edit($id)
    {
        $student = Student::where('id',$id)->first();

        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;

    }

    public function updatestudent()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' =>'required',
            'email' =>'required|email',
            'phone' =>'required'
    ]);

    if ($this->ids) {
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

    }

    public function render()
    {
        $searchterm = '%'.$this->searchterm.'%';
        $students = Student::where('firstname','LIKE',$searchterm)
                        ->orwhere('lastname','LIKE',$searchterm)
                        ->orwhere('email','LIKE',$searchterm)
                        ->orwhere('phone','LIKE',$searchterm)
                        ->orderBy('id','DESC')->paginate(10);
        //return view('livewire.students',compact('students'))->with('no', 1)->layout('layouts.home');
        return view('livewire.students',compact('students'))->layout('layouts.home');
    }
}

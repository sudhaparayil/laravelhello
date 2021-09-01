<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Field;
use App\Models\Student;
use Illuminate\Http\Request;
class StudentComponent extends Component
{
    public $firstname, $email, $lastname , $phone;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
        //dd($this->inputs);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields(){
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
                'firstname.0' => 'required',
                'lastname.0' => 'required',
                'email.0' => 'required',
                'phone.0' => 'required',
                'firstname.*' => 'required',
                'lastname.*' => 'required',
                'email.*' => 'required|email',
                'phone.*' => 'required',
            ],
            [
                'firstname.0.required' => 'firstname field is required',
                'lastname.0.required' => 'lastname field is required',
                'email.0.required' => 'email field is required',
            'email.0.email' => 'The email must be a valid email address.',
            'phone.0.required' => 'phone field is required',
                'firstname.*.required' => 'firstname field is required',
                'lastname.*.required' => 'lastname field is required',
                'email.*.required' => 'email field is required',
                'email.*.email' => 'The email must be a valid email address.',
                'phone.*.required' => 'phone field is required',
            ]
        );

        foreach ($this->firstname as $key => $value) {
            Student::create
            ([
                'firstname' => $this->firstname[$key],
                'lastname' => $this->lastname[$key],
                 'email' => $this->email[$key],
                 'phone' => $this->phone[$key]
            ]);
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Student Has Been Created Successfully.');
    }

    public function render()
    {
        //$this->employees = Employee::all();
        return view('livewire.student-component')->layout('layouts.home');
    }
}



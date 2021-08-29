<div>
    @include('livewire.create')
    @include('livewire.update')
   <section>
       <div class="container">
           <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>

                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h3>all students</h3>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Search..." wire:model="searchterm">
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                         <table class="table table-striped">
                             <thead>
                                 <th>#</th>
                                 <th>first name</th>
                                 <th>last name</th>
                                 <th>email</th>
                                 <th>phone</th>
                             </thead>
                             <tbody>

                                 @foreach ($students as $key => $item)
                                 <tr>
                                     <td>{{ $students->firstItem() + $key }}</td>
                                     <td>{{ $item->firstname }}</td>
                                     <td>{{ $item->lastname }}</td>
                                     <td>{{ $item->email }}</td>
                                     <td>{{ $item->phone }}</td>
                                     <td>
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#updatestudentModal" wire:click.prevent="edit({{ $item->id }})">
                                        Edit</button>
                                    </td>
                                 </tr>
                                 @endforeach
                             </tbody>
                         </table>
                         {{ $students->links() }}
                    </div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addstudentModal">
                    add new student
                </button>
            </div>
           </div>
       </div>
   </section>
</div>


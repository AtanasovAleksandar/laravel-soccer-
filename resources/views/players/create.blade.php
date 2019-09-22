@extends('loyout')

@section('content')

<h1 class="text-white text-center">Add new player</h1>

<div class="container">
    <form method="POST" action="/players">
<!-- helper metod za cros -->
        {{csrf_field()}}

        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter first name">
        </div>
        <div class="form-group">
            <label for="secondname">Last Name</label>
            <input type="text" name="secondname" class="form-control" id="secondname" placeholder="Enter last name">
        </div>
        <div class="form-group">
            <label for="team">Team</label>
            <input type="text" name="team" class="form-control" id="team" placeholder="Enter team">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" class="form-control" id="age" placeholder="Enter team">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
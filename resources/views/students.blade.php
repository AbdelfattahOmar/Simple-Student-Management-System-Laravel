<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Student Management System</title>
  </head>
  <body>
  @include('navbar')
<div class="row header-container justify-content-center">
  <div class="header">
    <h1>Student Management System</h1>
  </div>
</div>
    @if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
          <div class="row justify-content-center">
            <section class="col-7">
                @include('studentslist')
            </section>
          </div>         
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-7">
                @include('studentslist')
            </section>
            <section class="col-5">
              <div class="card mb-3">
                <img src="https://images.unsplash.com/photo-1560785496-3c9d27877182?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3R1ZGVudCUyMGNoaWxkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Enter the data of the new student</h5>
                  <form action="{{route('students.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="cne">CNE</label>
                      <input name="cne" type="text" class="form-control" id="cne" placeholder="Enter student CNE">
                    </div>
                    <div class="form-group">
                      <label for="firstname">First Name</label>
                      <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Enter student First Name">
                    </div>
                    <div class="form-group">
                      <label for="lastname">Last Name</label>
                      <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Enter student Last Name">
                    </div>
                    <div class="form-group">
                      <label for="age">Age</label>
                      <input name="age" type="text" class="form-control" id="age" placeholder="Enter student Age">
                    </div>
                    <div class="form-group">
                      <label for="speciality">Speciality</label>
                      <input name="speciality" type="text" class="form-control" id="speciality" placeholder="Enter student Speciality">
                    </div>
                    <input type="submit" class="btn btn-info" value="Save">
                    <input type="reset" class="btn btn-warning" value="Reset">
                  </form>
                </div>
              </div>
               
            </section>
        </div>
    </div>
    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-7">
                @include('studentslist')
            </section>
            <section class="col"></section>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-7">
                @include('studentslist')
            </section>
            <section class="col-5">
              <div class="card mb-3">
                <img src="https://images.unsplash.com/photo-1560785496-3c9d27877182?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3R1ZGVudCUyMGNoaWxkfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Edit the data of the student</h5>
                <form action="{{route('students.update',['student' => $student['id']]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="cne">CNE</label>
                      <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" id="cne" placeholder="Enter student CNE">
                    </div>
                    <div class="form-group">
                      <label for="firstname">First Name</label>
                      <input value="{{ $student->first_name }}" name="firstname" type="text" class="form-control" id="firstname" placeholder="Enter student First Name">
                    </div>
                    <div class="form-group">
                      <label for="lastname">Last Name</label>
                      <input value="{{ $student->last_name }}" name="lastname" type="text" class="form-control" id="lastname" placeholder="Enter student Last Name">
                    </div>
                    <div class="form-group">
                      <label for="age">Age</label>
                      <input value="{{ $student->age }}" name="age" type="text" class="form-control" id="age" placeholder="Enter student Age">
                    </div>
                    <div class="form-group">
                      <label for="speciality">Speciality</label>
                      <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" id="speciality" placeholder="Enter student Speciality">
                    </div>
                    <input type="submit" class="btn btn-info" value="Update">
                    <input type="reset" class="btn btn-warning" value="Reset">
                  </form>
                </div>
              </div>
            </section>
        </div>
    </div>
    @endif
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
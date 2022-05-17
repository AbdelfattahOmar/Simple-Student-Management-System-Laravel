<div class="card mb-3">
  <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=932&q=80" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find all the information about students here</p>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">CNE</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Age</th>
          <th scope="col">Speciality</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach($students as $student)
        <tr>
          <td>{{ $student->cne }}</td>
          <td>{{ $student->first_name }}</td>
          <td>{{ $student->last_name }}</td>
          <td>{{ $student->age }}</td>
          <td>{{ $student->speciality }}</td>
          <td>
              {{-- <a href="{{route('students.show', ['student' => $student['id']])}}" class="btn btn-sm btn-info">View</a> --}}
              <a href="{{route('students.edit',['student' => $student['id']])}}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{route('students.delete',['student' => $student['id']])}}" method="post" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button href="" onclick="return confirm('Are you sure, you want Delete?')" class="btn btn-sm btn-danger">Delete</button>
              </form>
          </td>
       
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


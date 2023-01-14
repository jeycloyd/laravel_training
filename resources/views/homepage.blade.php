@extends('layouts.welcome')
@section('body')
<form>
  <h1><center>Task</center></h1>
  <div class="form-group">
    <label for="inputID">ID</label>
    <input type="text" class="form-control" id="InputAssignee" aria-describedby="emailHelp" readonly>
  </div>
  <div class="form-group">
    <label for="inputAssignee">Assignee</label>
    <input type="text" class="form-control" id="InputAssignee" aria-describedby="emailHelp" placeholder="Enter Assignee">
  </div>
  <div class="form-group">
    <label for="inputDescription">Description</label>
    <textarea type="text" class="form-control" id="InputDescription" aria-describedby="emailHelp" placeholder="Enter Description"></textarea>
  </div>
   <label for="inputStatus">Status</label>
   <div class="form-group">
      <div class="input-group mb-3">
        <select class="custom-select" id="inputGroupSelect01">
          <option value="pending">Pending</option>
          <option value="completed">Completed</option>
        </select>
      </div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

@extends ('layout.master')
@section ('main')
    <main class="container d-flex justify-content-center" style="min-height: 100vh;">
        <div id="accordion" style="width: 600px;">
            <div class="formHeading text-center">
                <h3 >Post a job</h3>
            </div>
            <!-- heading -->
          <form action="{{route('post_jobcreate.store')}}" method="POST">
              @csrf
            <div >
                <div class="card-body">
                    <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <input type="text" class="form-control" id="job_title" name="job_title" >
                        @error('job_title')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" >
                        <label for="vacancy">Vacancy</label>
                        <input type="number" class="form-control" id="vacancy" name="vacancy" >
                        @error('vacancy')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="Skills">Skills</label>
                        <input type="text" class="form-control" id="Skills" name="Skills" >
                        <label for="deadline_date">Deadline Date</label>
                        <input type="date" class="form-control" id="deadline_date" name="deadline_date" >
                        @error('deadline_date')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                      </div>
                      <div class="form-group">
                      <label for="job_type">Type</label>
                      <select class="form-control" id="job_type" name="job_type" >
                        <option>Full time</option>
                        <option>Part time</option>
                        <option>Freelancer</option>
                        <option>Contract</option>
                        <option>Other</option>
                      </select>
                      @error('job_type')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="job_category">Category</label>
                      <select class="form-control" id="job_category" name="job_category">
                        <option>Web designer</option>
                        <option>accountant</option>
                        <option>Driver</option>
                        <option>Guard</option>
                        <option>Other</option>
                      </select>
                      @error('job_category')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                    </div>
                </div>
            </div>
            <div>
            </div>
            <!--  collapseList -->
            <br><br>
            <button type="submit" class="btn btn-primary btn-block" >Create</button>
          </form>

        </div>
      <!-- main row -->
    </main>
@endsection

@extends ('layout.master')
@section ('main')

    <main class="container d-flex justify-content-center" style="min-height: 100vh;">
        <div id="accordion" style="width: 600px;">
            <div class="formHeading text-center">
                <h3 >Edit the job</h3>
            </div>
            <!-- heading -->
            <form action="{{route('post_job_view.edit',$postJob->id)}}" method="POST">
              @csrf
              @method('PUT')
            <div >
                <div class="card-body">
                    <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <input type="text" class="form-control" id="job_title" name="job_title" value="{{$postJob->job_title}}">
                        @error('job_title')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{$postJob->description}}" >
                        <label for="vacancy">Vacancy</label>
                        <input type="number" class="form-control" id="vacancy" name="vacancy" value="{{$postJob->vacancy}}">
                        @error('vacancy')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="Skills">Skills</label>
                        <input type="text" class="form-control" id="Skills" name="Skills" >
                        <label for="deadline_date">Deadline Date</label>
                        <input type="date" class="form-control" id="deadline_date" name="deadline_date" value="{{$postJob->deadline_date}}">
                        @error('deadline_date')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                      </div>
                      <div class="form-group">
                      <label for="job_type">Type</label>
                      <select class="form-control" id="job_type" name="job_type" value="$postJob->job_type">
                        <option value="FullTime">Full time</option>
                        <option value="PartTime">Part time</option>
                        <option value="Freelancing">Freelancing</option>
                        <option value="Government">Government</option>
                        <option value="Business">Business</option>
                      </select>
                      @error('job_type')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="job_category">Category</label>
                      <select class="form-control" id="job_category" name="job_category" value="$postJob->job_category">
                        <option value="WebDesigning">Web designing</option>
                        <option value="SoftwareDevelopment">Software development</option>
                        <option value="Accountant">Accountant</option>
                        <option value="IT">IT</option>
                        <option value="Receiptionist">Receiptionist</option>
                        <option value="Guard">Guard</option>
                        <option value="Driver">Driver</option>
                        <option value="Teacher">Teacher</option>
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
            <button type="submit" class="btn btn-success btn-block" >Save</button>
          </form>

        </div>
      <!-- main row -->
    </main>
@endsection
  @extends ('layout.master')
    @section ('main')
      <main class="container d-flex justify-content-center" style="min-height: 100vh;">
        <div id="accordion" style="width: 600px;">
            <div class="formHeading text-center">
                <h3 >Create an account</h3>
            </div>
            <!-- heading -->
          <form action="{{route('userreg.store')}}" method="POST">
            @csrf 
            <div class="results">
              @if(Session::get('success'))
              <div class="alert alert-success">
                {{Session::get('success')}}
              </div>
              @endif

              @if(Session::get('fail'))
              <div class="alert alert-danger">
                {{Session::get('fail')}}
              </div>
              @endif
            </div>
            <div class="collapseList">
              <div class="d-flex" id="headingThree">
                  <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#acceptedCollapseList" aria-expanded="false" aria-controls="acceptedCollapseList">
                   Pesonal Info<i class="fa fa-sort-desc" aria-hidden="true"></i>
                  </h5>
              </div>
              <div id="acceptedCollapseList" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" >
                        @error('email')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        
                        <label for="first_name">First name </label>
                        <input type="text" class="form-control" id="first_name" name="first_name" >
                        @error('first_name')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        
                        <label for="last_name">Last name </label>
                        <input type="text" class="form-control" id="last_name" name="last_name" >
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" >
                        @error('password')
                          <span class="text-danger">{{$message}}</span>
                            <br>
                        @enderror
                        
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" >
                        @error('confirm_password')
                          <span class="text-danger">{{$message}}</span>
                            <br>
                        @enderror
                        
                        <label for="phone_num">Phone number </label>
                        <input type="text" class="form-control" id="phone_num" name="phone_num" >
                        @error('phone_num')
                          <span class="text-danger">{{$message}}</span>
                            <br>
                        @enderror
                        
                        <label for="date_of_birth">Date of Birth </label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" >
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" >
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <select class="form-control" id="gender" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                      </select>
                        @error('gender')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                      
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>
              </div>
            </div>
            <!-- collapseList -->
            <hr>
            <div class="collapseList">
              <div class="d-flex" id="headingThree">
                  <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#waitingCollapseList" aria-expanded="false" aria-controls="waitingCollapseList">
                   Education<i class="fa fa-sort-desc" aria-hidden="true"></i>
                  </h5>
              </div>
              <div id="waitingCollapseList" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div id="" class="card-body">
                    <div class="form-group">
                      <label for="exam_name">Exam name</label>
                      <select class="form-control" id="exam">
                        <option>SSC</option>
                        <option>HSC</option>
                        <option>BSc</option>
                        <option>BBA</option>
                        <option>BA</option>
                        <option>MSc</option>
                        <option>MBA</option>
                        <option>MA</option>
                      </select>
                      <label for="exam_ear">Exam Year</label>
                      <input type="number" class="form-control" id="exam_year" >
                      <label for="exam_board">Exam Board</label>
                      <select class="form-control" id="exam">
                        <option>Dhaka</option>
                        <option>Dinajpur</option>
                        <option>Barisal</option>
                        <option>Khulna</option>
                        <option>Jassore</option>
                        <option>Sylhet</option>
                      </select>
                      <label for="exam_result">Exam Result</label>
                      <input type="number" min="1.00" max="5.00" class="form-control" id="exam_result" >
                      <label for="exam_institute">Exam Institute</label>
                      <input type="text" class="form-control" id="exam_institute" >
                      
                    </div>
                    <div class="form-group">
                      <a class="btn btn-outline-success" href="#"><i class="fa fa-plus"></i></a>

                    </div>
                    
                  </div>
              </div>
            </div>
            <!-- collapseList -->
            <hr>
            <div class="collapseList">
              <div class="d-flex" id="headingThree">
                  <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#pinnedCollapseList" aria-expanded="false" aria-controls="pinnedCollapseList">
                    Skills<i class="fa fa-sort-desc" aria-hidden="true"></i>
                  </h5>
              </div>
              <div id="pinnedCollapseList" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="language_skill">Language</label>
                      <input type="text" class="form-control" id="language_skill" >
                      <label for="computer_skill">Exam Institute</label>
                      <input type="text" class="form-control" id="computer_skill" >
                      <br>
                      <a class="btn btn-outline-success" href="#"><i class="fa fa-plus"></i></a>
                    </div>
                      
                  </div>
                  
              </div>
            </div>
            <!-- collapseList -->
            <br><br>
            <button type="submit" class="btn btn-primary btn-block">Create</button>
          </form>
          <br><br><br>

        </div>
      <!-- main row -->
      </main>
    @endsection
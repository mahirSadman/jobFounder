<!doctype html>
<html lang="en">
  <head>
    <title>Job Founder</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/style.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="user_dashboard.html">Job Founder</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto" >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="user_dashboard.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
                  Jobs
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="jobs_discover.html">Discover Jobs</a></li>
                  <li><a class="dropdown-item" href="jobs_search_results.html">Search Jobs</a></li>
                  <li><a class="dropdown-item" href="jobs_applied.html">Applied Jobs</a></li>
                  <li><a class="dropdown-item" href="jobs_pinned.html">Pinned Jobs</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarCompaniesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Companies
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarCompaniesDropdown">
                    <li><a class="dropdown-item" href="company_my.html">My Companies</a></li>
                    <li><a class="dropdown-item" href="company_search.html">Search Company</a></li>
                    <li><a class="dropdown-item" href="company_create.html">Create Company</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="user_notification.html">
                  <i class="fa fa-bell nav-bar-icon" aria-hidden="true"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="user_communication.html">
                  <i class="fa fa-comments nav-bar-icon" aria-hidden="true"></i>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarProfileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user nav-bar-icon" aria-hidden="true"></i>
                  #User_name
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarProfileDropdown">
                    <li><a class="dropdown-item" href="user_profile_edit.html">Edit profile</a></li>
                    <li><a class="dropdown-item" href="index.html">Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="container d-flex justify-content-center" style="min-height: 100vh;">
        <div id="accordion" style="width: 600px;">
            <div class="formHeading text-center">
                <h3 >Edit Profile</h3>
            </div>
            <!-- heading -->
            <form action="{{route('user_profile.update',$user->id)}}" method="POST">
            @csrf 
            @method('PUT')
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
                        <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                        @error('email')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        
                        <label for="first_name">First name </label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{$user->first_name}}">
                        @error('first_name')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        
                        <label for="last_name">Last name </label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{$user->last_name}}">
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
                        <input type="text" class="form-control" id="phone_num" name="phone_num" value="{{$user->phone_num}}">
                        @error('phone_num')
                          <span class="text-danger">{{$message}}</span>
                            <br>
                        @enderror
                        
                        <label for="date_of_birth">Date of Birth </label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{$user->date_of_birth}}">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}">
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <select class="form-control" id="gender" name="gender" value="{{$user->address}}">
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
            <button type="submit" class="btn btn-success btn-block" >Save</button>
          </form>
          <br><br><br>

        </div>
      <!-- main row -->
    </main>

    <footer class="bg-dark text-light text-center" style="min-height: 100px;">
      <div class="align-middle">
        <p class="margin-b0">Job Founderbr <br> A project by Mahir Sadman & Md. Kabin Hassan Kanchon.</p>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <script src="https://kit.fontawesome.com/847f6ac481.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/scripts/app.js"></script>
  </body>
</html>
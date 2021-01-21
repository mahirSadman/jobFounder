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

    <main class="container container-fluid" >
      <div class="row " style="margin: 50px 0;">
        <section class="col-12 col-md-4">
          <div class="card">
            <div class="card-header d-flex justify-content-between" >
                <h5 class="align-middle" style="margin-bottom: 0;margin-top: 5px;">My Companies</h5>
                <a href="company_create.html"class="btn btn-success">Create</a>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      <a href="company_dashboard.html">
                      <div class="d-flex justify-content-between">
                          <p>#company name</p>
                          <p class="companiesCompanyRole align-bottom">Owner</p>
                      </div>
                      </a>
                  </li>
                  <li class="list-group-item">
                    <a href="company_dashboard.html">
                    <div class="d-flex justify-content-between">
                        <p>#company name</p>
                        <p class="companiesCompanyRole align-bottom">Owner</p>
                    </div>
                    </a>
                    </li>
                    <li class="list-group-item">
                        <a href="company_dashboard.html">
                        <div class="d-flex justify-content-between">
                            <p>#company name</p>
                            <p class="companiesCompanyRole align-bottom">Recruiter</p>
                        </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="company_dashboard.html">
                        <div class="d-flex justify-content-between">
                            <p>#company name</p>
                            <p class="companiesCompanyRole align-bottom">Recieptionist</p>
                        </div>
                        </a>
                    </li>
                </ul>
            </div>
          </div>
          <!-- Companies_box -->
          <div class="card" style="margin-top: 30px;">
            <h5 class="card-header">Requests</h5>
            <div class="card-body">
                <p>#company wants you as a Recruiter.</p>
                <div class="d-flex justify-content-end roleRequest">
                    <button type="button" class="btn btn-outline-danger">Cancel</button>
                    <button type="button" class="btn btn-success">Accept</button>
                </div>
            </div>
          </div>
        </section>
        <!-- left section -->
        <section class="col-12 col-md-8" >
          <div class="recentDeadlines">
            <h5 class="">Recent Deadlines</h5>
            <div class="row" style="margin-top: 10px;margin-bottom: 20px;">
              <div class="col-6 ">
                <a href="detail_job.html" >
                  <div class="card " >
                    <div class="row card-body">
                      <div class="col-8 ">
                        <h6>#jobname</h6>
                        <p>#company name</p>
                      </div>
                      <div class="col-4 text-center">
                        <h3>3</h3>
                        <h6>days left</h6> 
                      </div>
                    </div>
                  </div>
                </a>
                <!-- Recent Deadlines job card -->
              </div>
              <!-- Recent Deadlines job card space -->
              <div class="col-6 ">
                <a href="detail_job.html" >
                  <div class="card " >
                    <div class="row card-body">
                      <div class="col-8 ">
                        <h6>#jobname</h6>
                        <p>#company name</p>
                      </div>
                      <div class="col-4 text-center">
                        <h3>3</h3>
                        <h6>days left</h6> 
                      </div>
                    </div>
                  </div>
                </a>
                <!-- Recent Deadlines job card -->
              </div>
              <!-- Recent Deadlines job card space -->
            </div>
            <!-- dashboard Recent Deadlines Jobs row1-->
            <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
              <div class="col-6 ">
                <a href="detail_job.html" >
                  <div class="card " >
                    <div class="row card-body">
                      <div class="col-8 ">
                        <h6>#jobname</h6>
                        <p>#company name</p>
                      </div>
                      <div class="col-4 text-center">
                        <h3>3</h3>
                        <h6>days left</h6> 
                      </div>
                    </div>
                  </div>
                </a>
                <!-- Recent Deadlines job card -->
              </div>
              <!-- Recent Deadlines job card space -->
              <div class="col-6 ">
                <a href="detail_job.html" >
                  <div class="card " >
                    <div class="row card-body">
                      <div class="col-8 ">
                        <h6>#jobname</h6>
                        <p>#company name</p>
                      </div>
                      <div class="col-4 text-center">
                        <h3>3</h3>
                        <h6>days left</h6> 
                      </div>
                    </div>
                  </div>
                </a>
                <!-- Recent Deadlines job card -->
              </div>
              <!-- Recent Deadlines job card space -->
            </div>
            <!-- dashboard Recent Deadlines Jobs row2-->  
              
            <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
              <div class="col-6 ">
                <a href="detail_job_posted.html" >
                  <div class="card " >
                    <div class="row card-body">
                      <div class="col-8 ">
                        <h6>#jobname</h6>
                        <p>#company name <br> 19 applied</p>
                      </div>
                      <div class="col-4 text-center">
                        <h3>3</h3>
                        <h6>days left</h6> 
                      </div>
                    </div>
                  </div>
                </a>
                <!-- Recent Deadlines interview card -->
              </div>
              <!-- Recent Deadlines interview card space -->
              <div class="col-6 ">
                <a href="detail_job_posted.html" >
                  <div class="card " >
                    <div class="row card-body">
                      <div class="col-8 ">
                        <h6>#jobname</h6>
                        <p>#company name <br> 19 applied</p>
                      </div>
                      <div class="col-4 text-center">
                        <h3>3</h3>
                        <h6>days left</h6> 
                      </div>
                    </div>
                  </div>
                </a>
                <!-- Recent Deadlines interview card -->
              </div>
              <!-- Recent Deadlines interview card space -->
            </div>
            <!-- dashboard Recent Deadlines interview row1-->        
          </div>
          <hr>
          <!-- recent deadlines --> 
          <div class="newApplicants">
            <h5 class="">New Applicants</h5>
            <div class="row" style="margin-top: 10px;margin-bottom: 20px;">
              <div class="col-6 ">
                <a href="detail_job.html" >
                  <div class="card " >
                    <div class="row card-body">
                      <div class="col-8 ">
                        <h6>#jobname</h6>
                        <p>#company name</p>
                      </div>
                      <div class="col-4 text-center">
                        <h3>3</h3>
                        <p class="companyProfileCardP">Applicants</p> 
                      </div>
                    </div>
                  </div>
                </a>
                <!-- Recent Deadlines job card -->
              </div>
              <!-- Recent Deadlines job card space -->
              <div class="col-6 ">
                <a href="detail_job.html" >
                  <div class="card " >
                    <div class="row card-body">
                      <div class="col-8 ">
                        <h6>#jobname</h6>
                        <p>#company name</p>
                      </div>
                      <div class="col-4 text-center">
                        <h3>6</h3>
                        <p class="companyProfileCardP">Applicants</p> 
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>       
          </div>
          <hr>
        <!-- new apllicants -->
        <div>
          <h5>Incomplete info</h5>
          <a href="#" >
            <div class="card " >
              <div class="row card-body text-dark">
                <div class="col-8 ">
                  <p class="cardBodyP font-weight-bold">Job: Web-development <br>
                  Type: Full-time <br>
                  Salary: 30000Tk</p>
                </div>
                
              </div>
            </div>
          </a>
        </div>
        </section>
        <!-- right section -->
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
@extends ('layout.master')
@section ('main')
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
                  @foreach($companies as $company)
                    <li class="list-group-item">
                        <a href="{{route('company_dashboard',$company->id)}}">
                        <div class="d-flex justify-content-between">
                            <p>{{$company->company_name}}</p>
                            <p class="companiesCompanyRole align-bottom">{{$company->pivot->role_type}}</p>
                        </div>
                        </a>
                    </li>                  
                  @endforeach
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

@endsection
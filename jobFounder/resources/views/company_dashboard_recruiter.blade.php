@extends ('layout.master')
@section ('main')
<main class="container" style="height: 1000px;">
      <div class="row " style="margin: 50px 0;" >
        <section class="col-12 col-md-4">
          <div class="card " >
            <div class="row card-body text-dark">
                <div class="col-4 d-flex">
                    <img class="img-fluid align-self-center" src="data:image/png;base64,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" alt=""> 
                </div>
                <div class="col-8 ">
                    <h3>{{$company->company_name}}</h3>
                    <p class="companyProfileCardP">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </div>   
            </div>
          </div>
          <!-- company profile card -->
          <div class="card" style="margin-top: 10px;">
            <h5 class="card-header">Company Profile</h5>
            <div class="card-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h5 class="card-title">75% completeed</h5>
              <p class="card-text">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><a href="">Add logo</a></li>
                  <li class="list-group-item"><a href="">Add license number</a></li>
                  <li class="list-group-item"><a href="">Add location details</a></li>
                </ul>
              </p>
              <a href="{{route('company_profile.edit',$company->id)}}" class="btn btn-primary">Edit profile</a>
            </div>
          </div>
          <!-- company profile edit -->
          <div class="card" style="margin-top: 10px;">
            <div class="card-header d-flex justify-content-between" >
                <h5 class="align-middle" style="margin-bottom: 0;margin-top: 5px;">Company Roles</h5>
                
            </div>    
                <div>
                <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add role</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('role.add')}}" method="POST">
                            @csrf
                            <div class="form-group">
                            <input type="hidden" id="custId" name="company_id" value="{{$company->id}}">
                              <label for="user_name">User name</label>
                              <input type="text" class="form-control" id="user_name" name="user_name">
                            </div>
                            <div class="form-group">
                                <label for="role">Select role</label>
                                <select class="form-control" id="role" name="role">
                                  <option value="Owner">Owner</option>
                                  <option value="Recruiter">Recruiter</option>
                                  <option value="Recieptionist">Recieptionist</option>
                                </select>
                              </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" >Add</button>
                        </form>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
            
            <div class="card-body">
                <ul class="list-group list-group-flush">
                  @foreach($role_users as $role_user)
                    <li class="list-group-item">
                        <a href="company_dashboard.html">
                        <div class="d-flex justify-content-between">
                            <p>{{$role_user->first_name}}</p>
                            <p class="companiesCompanyRole align-bottom">{{$role_user->pivot->role_type}}</p>
                        </div>
                        </a>
                    </li>                  
                  @endforeach
                </ul>
            </div>
          </div>
          <!-- company roles -->
        </section>
        <!-- left section -->
        <section class="col-12 col-md-8">
            <div id="accordion">
                <div class="d-flex" id="headingThree">
                    <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Posted Jobes({{count($company->getPostJobs)}})<i class="fa fa-sort-desc" aria-hidden="true"></i>
                    </h5>
                    <a href="{{route('post_jobcreate.create',$company->id)}}" class="btn btn-success ml-auto">
                        Post a new job
                    </a>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      <ol class="mx-5"> 
                        @foreach ($company->getPostJobs as $PostJob)
                        <li>
                            <div class="row">
                                <div class="col-8">
                                    <a class="text-primary font-weight-bold" href="{{route('post_job_view.show',$PostJob->id)}}"'post_job_view.show'>{{$PostJob->job_title}}</a>
                                    <p>Salary: 30000Tk</p>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-sm btn-danger" href="#">Cancel</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                      </ol>
                    </div>
                </div>
            </div>
            <!-- posted jobs list --> 
            <hr>
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

        </section>
        <!-- right section -->
      </div>
      <!-- main row -->
    </main>
@endsection
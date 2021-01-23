@extends ('layout.master')
@section ('main')

    <main class="container" style="height: 1000px;">
      <div class="row " style="margin: 50px 0;" >
        <section class="col-12 col-md-4  py-2"> 
            <div>
                <h5>Top jobs</h5>
            <a href="#" >
                <div class="card " >
                  <div class="row card-body text-dark">
                    <div class="col-8 ">
                      <h5>Microsoft</h5>
                      <p class="cardBodyP">Job: Web-development <br>
                        Type: Full-time <br>
                        Salary: 30000Tk</p>
                    </div>
                    <div class="col-4 d-flex">
                      <img class="img-fluid align-self-center" src="https://thedesignlove.com/wp-content/uploads/2018/02/Case-Study-The-Microsoft-Logo-Evolution-5.jpg" alt=""> 
                    </div>
                  </div>
                </div>
              </a>
              <br>
              <a href="#" >
                <div class="card " >
                  <div class="row card-body text-dark">
                    <div class="col-8 ">
                      <h5>Microsoft</h5>
                      <p class="cardBodyP">Job: Web-development <br>
                        Type: Full-time <br>
                        Salary: 30000Tk</p>
                    </div>
                    <div class="col-4 d-flex">
                      <img class="img-fluid align-self-center" src="https://thedesignlove.com/wp-content/uploads/2018/02/Case-Study-The-Microsoft-Logo-Evolution-5.jpg" alt=""> 
                    </div>
                  </div>
                </div>
              </a>
              <br>
              <a href="#" >
                <div class="card " >
                  <div class="row card-body text-dark">
                    <div class="col-8 ">
                      <h5>Microsoft</h5>
                      <p class="cardBodyP">Job: Web-development <br>
                        Type: Full-time <br>
                        Salary: 30000Tk</p>
                    </div>
                    <div class="col-4 d-flex">
                      <img class="img-fluid align-self-center" src="https://thedesignlove.com/wp-content/uploads/2018/02/Case-Study-The-Microsoft-Logo-Evolution-5.jpg" alt=""> 
                    </div>
                  </div>
                </div>
              </a>
              <br>
              <a href="#" >
                <div class="card " >
                  <div class="row card-body text-dark">
                    <div class="col-8 ">
                      <h5>Microsoft</h5>
                      <p class="cardBodyP">Job: Web-development <br>
                        Type: Full-time <br>
                        Salary: 30000Tk</p>
                    </div>
                    <div class="col-4 d-flex">
                      <img class="img-fluid align-self-center" src="https://thedesignlove.com/wp-content/uploads/2018/02/Case-Study-The-Microsoft-Logo-Evolution-5.jpg" alt=""> 
                    </div>
                  </div>
                </div>
              </a>
            </div>
        </section>
        <!-- left section -->
        <section class="col-12 col-md-8">
            @if(Session::get('fail'))
              <div class="alert alert-danger">
                {{Session::get('fail')}}
              </div>
            @endif
            <div id="accordion">
                <div class="d-flex" id="headingThree">
                    <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Accepted Jobs ({{$num_accepted_jobs}})<i class="fa fa-sort-desc" aria-hidden="true"></i>
                    </h5>
                    
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <ol class="mx-5"> 
                        @foreach($applied_jobs as $applied_job)
                            @if ($applied_job->pivot->accepted == "accepted")
                            <li>
                                <div class="row">
                                    <div class="col-8">
                                        <a class="text-primary font-weight-bold" href="#">{{$applied_job->job_title}}</a>
                                        <p>Microsoft</p>
                                    </div>
                                    <div class="col-4">
                                        <a class="btn btn-danger" href="#">Cancel</a>
                                    </div>
                                </div>
                            </li>
                            @endif
                        @endforeach
                        </ol>
                    </div>
                </div>
            </div>
            <hr>
            <!-- pending interviews -->
            <div id="accordion3">
                <div class="d-flex" id="headingThree3">
                    <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                     In Waiting ({{count($waited_jobs)}})<i class="fa fa-sort-desc" aria-hidden="true"></i>
                    </h5>
                </div>
                <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion3">
                    <div class="card-body">
                        <ol class="mx-5"> 
                        @foreach($waited_jobs as $waited_job)
                              <li>
                                  <div class="row">
                                      <div class="col-8">
                                          <a class="text-primary font-weight-bold" href="#">{{$waited_job->job_title}}</a>
                                          <p>Microsoft</p>
                                      </div>
                                      <div class="col-4">
                                          <a class="btn btn-danger" href="#">Cancel</a>
                                      </div>
                                  </div>
                              </li>
                          @endforeach
                        </ol>
                    </div>
                </div>
            </div>
            <hr>
            <!-- waited jobs -->
            <div id="accordion2">
                <div class="d-flex" id="headingThree2">
                    <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                     Apllied Jobs ({{count($applied_jobs)}})<i class="fa fa-sort-desc" aria-hidden="true"></i>
                    </h5>
                </div>
                <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordion2">
                    <div class="card-body">
                        <ol class="mx-5"> 
                          @foreach($applied_jobs as $applied_job)
                              <li>
                                  <div class="row">
                                      <div class="col-8">
                                          <a class="text-primary font-weight-bold" href="#">{{$applied_job->job_title}}</a>
                                          <p>Microsoft</p>
                                      </div>
                                      <div class="col-4">
                                          <a class="btn btn-danger" href="#">Cancel</a>
                                      </div>
                                  </div>
                              </li>
                          @endforeach
                        </ol>
                    </div>
                </div>
            </div>
            <hr>
            <!-- applied jobs -->
            <div id="accordion4">
                <div class="d-flex" id="headingThree4">
                    <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                     Rejected Jobs ({{count($rejected_jobs)}})<i class="fa fa-sort-desc" aria-hidden="true"></i>
                    </h5>
                </div>
                <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordion4">
                    <div class="card-body">
                        <ol class="mx-5"> 
                          @foreach($rejected_jobs as $rejected_job)
                              <li>
                                  <div class="row">
                                      <div class="col-8">
                                          <a class="text-primary font-weight-bold" href="#">{{$rejected_job->job_title}}</a>
                                          <p> <b>Reason: </b>{{$rejected_job->pivot->reject_reason}}</p>
                                      </div>
                                      <div class="col-4">
                                          <a class="btn btn-danger" href="#">Cancel</a>
                                      </div>
                                  </div>
                              </li>
                          @endforeach
                        </ol>
                    </div>
                </div>
            </div>
            <hr>
            <!-- applied jobs -->
        </section>
        <!-- right section -->
      </div>
      <!-- main row -->
    </main>

    @endsection
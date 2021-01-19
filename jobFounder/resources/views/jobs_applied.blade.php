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
            <div id="accordion">
                <div class="d-flex" id="headingThree">
                    <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Accepted Jobs(3)<i class="fa fa-sort-desc" aria-hidden="true"></i>
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
            <div id="accordion2">
                <div class="d-flex" id="headingThree2">
                    <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                     Apllied jobs(4)<i class="fa fa-sort-desc" aria-hidden="true"></i>
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
            <div id="accordion3">
                <div class="d-flex" id="headingThree3">
                    <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                     Rejected Jobes(1)<i class="fa fa-sort-desc" aria-hidden="true"></i>
                    </h5>
                </div>
                <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion3">
                    <div class="card-body">
                        <ol class="mx-5"> 
                            <li>
                                <div class="row">
                                    <div class="col-8">
                                        <a class="text-primary font-weight-bold" href="#">Web desiging</a>
                                        <p>Microsoft</p>
                                    </div>
                                    <div class="col-4">
                                        <a class="btn btn-success" href="#">Re-Application</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <hr>
            <!-- rejected jobs -->
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
             <!-- incomplete info -->
            <hr> 
        </section>
        <!-- right section -->
      </div>
      <!-- main row -->
    </main>

    @endsection
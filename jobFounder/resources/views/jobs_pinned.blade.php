@extends ('layout.master')
@section ('main')
    <main class="container container-fluid" >
      <div class="row " style="margin: 50px 0;">
        <section class="col-12 col-md-4">
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
          <div class="PinnedJobs" >
            @if(Session::get('fail'))
              <div class="alert alert-danger">
                {{Session::get('fail')}}
              </div>
            @endif
            <h3 >Pinned Jobs</h3>
            <div class="row" style="margin-top: 10px;margin-bottom: 20px;">
            @foreach($pinned_jobs as $pinned_job)
              <div class="col-6 " style="margin-bottom:15px;">
                <a href="#" >
                  <div class="card " >
                    <div class="row card-body text-dark">
                      <div class="col-8 ">
                        <p class="cardBodyP"><b>Job: {{$pinned_job->job_title}}</b>  <br>
                        <i class="fa fa-at" aria-hidden="true"></i> {{$pinned_job->company->company_name}} <br>
                          Type: Full-time <br>
                          Salary: 30000Tk</p>
                      </div>
                      <div class="col-4 d-flex">
                        <img class="img-fluid align-self-center" src="https://logos-world.net/wp-content/uploads/2020/04/BMW-Logo-1997-2020.png" alt="">
                      </div>
                    </div>
                  </div>
                </a>
                <!-- pinned job card -->
              </div>
              <!-- pinned job card space -->
            @endforeach
            </div>
            <!-- dashboard Recent Deadlines Jobs row1-->
          </div>
        </section>
        <!-- right section -->
      </div>
      <!-- main row -->
    </main>

    @endsection
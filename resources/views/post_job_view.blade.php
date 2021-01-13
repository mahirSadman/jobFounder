@extends ('layout.master')
    @section ('main')

    <main class="container">
      <div class="candidateSlider">
            <div class="jobShowSliderBotInfoBox d-flex flex-row justify-content-between">
                <h4 class="">Applied candidates (1/17)</h4>
                <button type="button" class="btn btn-primary">Turn off apply</button>
            </div>
            <!-- jobShowSliderBotInfoBox -->
            
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner ">
                <div class="carousel-item active ">
                  <div class="bg-warning d-block  w-100 d-flex justify-content-center" alt="First slide" >
                    <div class="bg-transparent w-70 jobShowBox d-flex flex-column"style="min-height: 400px;">
                      <div class="jobShowBoxP1P2">
                          <div class="jobShowBoxP1 d-flex flex-row justify-content-between">
                            <div class="companyInfo row">
                                <div class="col-12 col-md-2 jobShowBoxLogoBox">
                                    <img src="assets/img/gp_logo.jpg" alt="" class=" jobShowBoxLogo">
                                </div>
                                <div class="col12 col-md-10">
                                    <h4>#Candidate Name</h4>
                                    <h6><i class="fa fa-graduation-cap" aria-hidden="true"></i>#Education</h6>
                                    <span><i class="fa fa-cogs" aria-hidden="true"></i>#Skills</span>
                                    <br>
                                    <span><i class="fa fa-paperclip" aria-hidden="true"></i>Watch CV</span>
                                </div>
                            </div>
                            <!-- companyInfo -->
                            <div class="pinShare">
                                <a href=""><i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!-- pinShare -->
                          </div>
                          <!-- jobShowBoxP1 -->
                          <div class="jobShowBoxP2 ">
                              <h6><b>Discription:</b></h6>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni libero dignissimos velit, corrupti commodi ducimus eligendi temporibus molestias sit dolores. Amet consectetur, officia blanditiis sit iste asperiores natus saepe corrupti. <a href="user_profile.html">read more</a> </p>
                          </div>
                          <!-- jobShowBoxP2 -->
                      </div> 
                      <!-- jobShowBoxP1P2 -->
                      <div class="jobShowBoxP3 mt-auto row">
                        <div class="matchingBars col-12 col-md-4">
                            <h5>Requirment Matching: </h5>
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="circleProgress blue">
                                        <span class="circleProgress-left">
                                            <span class="circleProgress-bar"></span>
                                        </span>
                                        <span class="circleProgress-right">
                                            <span class="circleProgress-bar"></span>
                                        </span>
                                        <div class="circleProgress-value">90%</div>
                                    </div>
                                    <h6 class="text-center">Requirments</h6 >
                                </div>
                            </div>
                        </div>
                        <!-- matchingBars -->
                        <div class="infoButtons col-12 col-md-8 d-flex flex-column">
                              <div class="mt-auto">
                                    <!-- <div class="infoJobslider d-flex justify-content-around">
                                    <div class="numApplied ">
                                        <h5 class="text-center ">129</h5>
                                        <p class="text-center">Candidates applied</p>
                                    </div>
                                    <div class="contactReceptionist text-center">
                                        <i class="fa fa-comment " aria-hidden="true"></i>
                                        <p class="text-center">Contact Receptionist </p>
                                    </div>
                                    <div class="daysRemaining ">
                                        <h5 class="text-center ">29</h5>
                                        <p class="text-center">days remaining</p>
                                    </div>
                                    </div> -->
                                    <div class="buttonsJobslider float-right">
                                        <button type="button" class="btn btn-outline-danger">Cancle</button>
                                        <button type="button" class="btn btn-outline-info">Waiting list</button>
                                        <button type="button" class="btn btn-success btn-lg">Accept</button>
                                    </div>
                              </div>
                        </div>
                        <!-- infoButtons -->
                      </div>
                      <!-- jobShowBoxP3 -->
                    </div>
                    <!-- candidate card body-->
                  </div>
                  <!-- candidate card background -->
                </div>
                <!-- candidate card -->
                <div class="carousel-item">
                  <div class="bg-warning d-block w-100 d-flex justify-content-center" alt="Second slide" >
                    <div class="bg-transparent w-70 jobShowBox d-flex flex-column"style="min-height: 400px;">
                      <div class="jobShowBoxP1P2">
                          <div class="jobShowBoxP1 d-flex flex-row justify-content-between">
                            <div class="companyInfo row">
                                <div class="col-12 col-md-2 jobShowBoxLogoBox">
                                    <img src="assets/img/gp_logo.jpg" alt="" class=" jobShowBoxLogo">
                                </div>
                                <div class="col12 col-md-10">
                                    <h4>#Candidate Name</h4>
                                    <h6><i class="fa fa-graduation-cap" aria-hidden="true"></i>#Education</h6>
                                    <span><i class="fa fa-cogs" aria-hidden="true"></i>#Skills</span>
                                    <br>
                                    <span><i class="fa fa-paperclip" aria-hidden="true"></i>Watch CV</span>
                                </div>
                            </div>
                            <!-- companyInfo -->
                            <div class="pinShare">
                                <a href=""><i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!-- pinShare -->
                          </div>
                          <!-- jobShowBoxP1 -->
                          <div class="jobShowBoxP2 ">
                              <h6><b>Discription:</b></h6>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni libero dignissimos velit, corrupti commodi ducimus eligendi temporibus molestias sit dolores. Amet consectetur, officia blanditiis sit iste asperiores natus saepe corrupti. <a href="user_profile.html">read more</a> </p>
                          </div>
                          <!-- jobShowBoxP2 -->
                      </div> 
                      <!-- jobShowBoxP1P2 -->
                      <div class="jobShowBoxP3 mt-auto row">
                        <div class="matchingBars col-12 col-md-4">
                            <h5>Requirment Matching: </h5>
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="circleProgress blue">
                                        <span class="circleProgress-left">
                                            <span class="circleProgress-bar"></span>
                                        </span>
                                        <span class="circleProgress-right">
                                            <span class="circleProgress-bar"></span>
                                        </span>
                                        <div class="circleProgress-value">90%</div>
                                    </div>
                                    <h6 class="text-center">Requirments</h6 >
                                </div>
                            </div>
                        </div>
                        <!-- matchingBars -->
                        <div class="infoButtons col-12 col-md-8 d-flex flex-column">
                              <div class="mt-auto">
                                    <!-- <div class="infoJobslider d-flex justify-content-around">
                                    <div class="numApplied ">
                                        <h5 class="text-center ">129</h5>
                                        <p class="text-center">Candidates applied</p>
                                    </div>
                                    <div class="contactReceptionist text-center">
                                        <i class="fa fa-comment " aria-hidden="true"></i>
                                        <p class="text-center">Contact Receptionist </p>
                                    </div>
                                    <div class="daysRemaining ">
                                        <h5 class="text-center ">29</h5>
                                        <p class="text-center">days remaining</p>
                                    </div>
                                    </div> -->
                                    <div class="buttonsJobslider float-right">
                                        <button type="button" class="btn btn-outline-danger">Cancle</button>
                                        <button type="button" class="btn btn-outline-info">Waiting list</button>
                                        <button type="button" class="btn btn-success btn-lg">Accept</button>
                                    </div>
                              </div>
                        </div>
                        <!-- infoButtons -->
                      </div>
                      <!-- jobShowBoxP3 -->
                    </div>
                    <!-- candidate card body-->
                  </div>
                  <!-- candidate card background -->
                </div>
                <!-- candidate card -->
                <div class="carousel-item">
                  <div class="bg-warning d-block w-100 d-flex justify-content-center" alt="Third slide" >
                    <div class="bg-transparent w-70 jobShowBox d-flex flex-column"style="min-height: 400px;">
                      <div class="jobShowBoxP1P2">
                          <div class="jobShowBoxP1 d-flex flex-row justify-content-between">
                            <div class="companyInfo row">
                                <div class="col-12 col-md-2 jobShowBoxLogoBox">
                                    <img src="assets/img/gp_logo.jpg" alt="" class=" jobShowBoxLogo">
                                </div>
                                <div class="col12 col-md-10">
                                    <h4>#Candidate Name</h4>
                                    <h6><i class="fa fa-graduation-cap" aria-hidden="true"></i>#Education</h6>
                                    <span><i class="fa fa-cogs" aria-hidden="true"></i>#Skills</span>
                                    <br>
                                    <span><i class="fa fa-paperclip" aria-hidden="true"></i>Watch CV</span>
                                </div>
                            </div>
                            <!-- companyInfo -->
                            <div class="pinShare">
                                <a href=""><i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!-- pinShare -->
                          </div>
                          <!-- jobShowBoxP1 -->
                          <div class="jobShowBoxP2 ">
                              <h6><b>Discription:</b></h6>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni libero dignissimos velit, corrupti commodi ducimus eligendi temporibus molestias sit dolores. Amet consectetur, officia blanditiis sit iste asperiores natus saepe corrupti. <a href="user_profile.html">read more</a>
                          </div>
                          <!-- jobShowBoxP2 -->
                      </div> 
                      <!-- jobShowBoxP1P2 -->
                      <div class="jobShowBoxP3 mt-auto row">
                        <div class="matchingBars col-12 col-md-4">
                            <h5>Requirment Matching: </h5>
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="circleProgress blue">
                                        <span class="circleProgress-left">
                                            <span class="circleProgress-bar"></span>
                                        </span>
                                        <span class="circleProgress-right">
                                            <span class="circleProgress-bar"></span>
                                        </span>
                                        <div class="circleProgress-value">90%</div>
                                    </div>
                                    <h6 class="text-center">Requirments</h6 >
                                </div>
                            </div>
                        </div>
                        <!-- matchingBars -->
                        <div class="infoButtons col-12 col-md-8 d-flex flex-column">
                              <div class="mt-auto">
                                    <!-- <div class="infoJobslider d-flex justify-content-around">
                                    <div class="numApplied ">
                                        <h5 class="text-center ">129</h5>
                                        <p class="text-center">Candidates applied</p>
                                    </div>
                                    <div class="contactReceptionist text-center">
                                        <i class="fa fa-comment " aria-hidden="true"></i>
                                        <p class="text-center">Contact Receptionist </p>
                                    </div>
                                    <div class="daysRemaining ">
                                        <h5 class="text-center ">29</h5>
                                        <p class="text-center">days remaining</p>
                                    </div>
                                    </div> -->
                                    <div class="buttonsJobslider float-right">
                                        <button type="button" class="btn btn-outline-danger">Cancle</button>
                                        <button type="button" class="btn btn-outline-info">Waiting list</button>
                                        <button type="button" class="btn btn-success btn-lg">Accept</button>
                                    </div>
                              </div>
                        </div>
                        <!-- infoButtons -->
                      </div>
                      <!-- jobShowBoxP3 -->
                    </div>
                    <!-- candidate card body-->
                  </div>
                  <!-- candidate card background -->
                </div>
                <!-- candidate card -->
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>            
      </div>
      <!-- candidateShowSlider -->
      <div class="row " style="margin: 50px 0;" >
          <section class="col-12 col-md-4">
            <div class="card">
              <h5 class="card-header">Job info</h5>
              <div class="card-body">
                #job name <br>
                #Days remaining <br>
                #other info
                <p class="card-text">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="">Change last date</a></li>
                    <li class="list-group-item"><a href="">Edit requirments</a></li>
                    <li class="list-group-item"><a href="">Delete post</a></li>
                  </ul>
                </p>
                <a href="{{route('post_job_view.edit', [$postJob->id])}}" class="btn btn-primary">Edit job</a>
              </div>
            </div>
            <!-- post job info edit -->
          </section>
          <!-- left section -->
          <section class="col-12 col-md-8">
              <div id="accordion">
                <div class="collapseList">
                  <div class="d-flex" id="headingThree">
                      <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#acceptedCollapseList" aria-expanded="false" aria-controls="acceptedCollapseList">
                       Accepted Candidates(3)<i class="fa fa-sort-desc" aria-hidden="true"></i>
                      </h5>
                  </div>
                  <div id="acceptedCollapseList" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <ol class="mx-5"> 
                          <li>
                              <div class="row">
                                  <div class="col-8">
                                      <a class="text-primary font-weight-bold" href="#">Ramisa Tarannum</a>
                                      <p>BSc in CSE</p>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="row">
                                  <div class="col-8">
                                      <a class="text-primary font-weight-bold" href="#">Mahir Sadman</a>
                                      <p>BSc in CSE</p>
                                  </div>
                                  
                              </div>
                          </li>
                          <li>
                              <div class="row">
                                  <div class="col-8" >
                                      <a class="text-primary font-weight-bold" href="#">Kabin Hasan</a>
                                      <p>BSc in CSE</p>
                                  </div>
                              </div>
                          </li>
                      </ol>
                      </div>
                  </div>
                </div>
                <!-- accepted collapseList -->
                <hr>
                <div class="collapseList">
                  <div class="d-flex" id="headingThree">
                      <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#waitingCollapseList" aria-expanded="false" aria-controls="waitingCollapseList">
                       Waiting Candidates(27)<i class="fa fa-sort-desc" aria-hidden="true"></i>
                      </h5>
                  </div>
                  <div id="waitingCollapseList" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <ol class="mx-5"> 
                          <li>
                              <div class="row">
                                  <div class="col-8">
                                      <a class="text-primary font-weight-bold" href="#">Ramisa Tarannum</a>
                                      <p>BSc in CSE</p>
                                  </div>
                                  <div class="col-4">
                                    <a class="btn btn-sm btn-success" href="#">Accept</a>
                                    <a class="btn btn-sm btn-danger" href="#">Cancel</a>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="row">
                                  <div class="col-8">
                                      <a class="text-primary font-weight-bold" href="#">Mahir Sadman</a>
                                      <p>BSc in CSE</p>
                                  </div>
                                  <div class="col-4">
                                    <a class="btn btn-sm btn-success" href="#">Accept</a>
                                    <a class="btn btn-sm btn-danger" href="#">Cancel</a>
                                </div>
                                  
                              </div>
                          </li>
                          <li>
                              <div class="row">
                                  <div class="col-8" >
                                      <a class="text-primary font-weight-bold" href="#">Kabin Hasan</a>
                                      <p>BSc in CSE</p>
                                  </div>
                                  <div class="col-4">
                                    <a class="btn btn-sm btn-success" href="#">Accept</a>
                                    <a class="btn btn-sm btn-danger" href="#">Cancel</a>
                                </div>
                              </div>
                          </li>
                      </ol>
                      </div>
                  </div>
                </div>
                <!-- waiting collapseList -->
                <hr>
                <div class="collapseList">
                  <div class="d-flex" id="headingThree">
                      <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#pinnedCollapseList" aria-expanded="false" aria-controls="pinnedCollapseList">
                        pinned Candidates(5)<i class="fa fa-sort-desc" aria-hidden="true"></i>
                      </h5>
                  </div>
                  <div id="pinnedCollapseList" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <ol class="mx-5"> 
                          <li>
                              <div class="row">
                                  <div class="col-8">
                                      <a class="text-primary font-weight-bold" href="#">Ramisa Tarannum</a>
                                      <p>BSc in CSE</p>
                                  </div>
                                  <div class="col-4">
                                      <a class="btn btn-sm btn-danger" href="#">Cancel</a>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="row">
                                  <div class="col-8">
                                      <a class="text-primary font-weight-bold" href="#">Mahir Sadman</a>
                                      <p>BSc in CSE</p>
                                  </div>
                                  <div class="col-4">
                                    <a class="btn btn-sm btn-danger" href="#">Cancel</a>
                                </div>
                                  
                              </div>
                          </li>
                          <li>
                              <div class="row">
                                  <div class="col-8" >
                                      <a class="text-primary font-weight-bold" href="#">Kabin Hasan</a>
                                      <p>BSc in CSE</p>
                                  </div>
                                  <div class="col-4">
                                    <a class="btn btn-sm btn-danger" href="#">Cancel</a>
                                </div>
                              </div>
                          </li>
                      </ol>
                      </div>
                  </div>
                </div>
                <!-- pinned collapseList -->
                <hr>
                <div class="collapseList">
                  <div class="d-flex" id="headingThree">
                      <h5 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#rejectedCollapseList" aria-expanded="false" aria-controls="rejectedCollapseList">
                       Rejected Candidates(14)<i class="fa fa-sort-desc" aria-hidden="true"></i>
                      </h5>
                  </div>
                  <div id="rejectedCollapseList" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <ol class="mx-5"> 
                          <li>
                              <div class="row">
                                  <div class="col-8">
                                      <a class="text-primary font-weight-bold" href="#">Ramisa Tarannum</a>
                                      <p>BSc in CSE</p>
                                  </div>
                                  <div class="col-4">
                                      <a class="btn btn-sm btn-success" href="#">Reconsider</a>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="row">
                                  <div class="col-8">
                                      <a class="text-primary font-weight-bold" href="#">Mahir Sadman</a>
                                      <p>BSc in CSE</p>
                                  </div>
                                  <div class="col-4">
                                    <a class="btn btn-sm btn-success" href="#">Reconsider</a>
                                </div>
                                  
                              </div>
                          </li>
                          <li>
                              <div class="row">
                                  <div class="col-8" >
                                      <a class="text-primary font-weight-bold" href="#">Kabin Hasan</a>
                                      <p>BSc in CSE</p>
                                  </div>
                                  <div class="col-4">
                                    <a class="btn btn-sm btn-success" href="#">Reconsider</a>
                                </div>
                              </div>
                          </li>
                      </ol>
                      </div>
                  </div>
                </div>
                <!-- rejected collapseList -->
              </div>
              <!-- posted jobs list --> 
              <hr>
          </section>
          <!-- right section -->
      </div>
      <!-- main row -->
    </main>
    @endsection
@extends ('layout.master')
@section ('main')
    <main class="container">
        <div class="jobShowSlider">
            <div class="jobShowSliderBotInfoBox d-flex flex-row justify-content-between">
                <h4 class="">Matched jobs (1/17)</h4>
                <button type="button" class="btn btn-primary">Search again</button>
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
                                    <h4>#Job Name</h4>
                                    <h6><i class="fa fa-at" aria-hidden="true"></i>#Company Name</h6>
                                    <span><i class="fa fa-map-marker" aria-hidden="true"></i>#location</span>
                                    <br>
                                    <span><i class="fa fa-money" aria-hidden="true"></i>#salary</span>
                                </div>
                            </div>
                            <!-- companyInfo -->
                            <div class="pinShare">
                                <a href=""><i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                </a> <br>
                                <a href=""><i class="fa fa-share" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!-- pinShare -->
                          </div>
                          <!-- jobShowBoxP1 -->
                          <div class="jobShowBoxP2 ">
                              <h6><b>Discription:</b></h6>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni libero dignissimos velit, corrupti commodi ducimus eligendi temporibus molestias sit dolores. Amet consectetur, officia blanditiis sit iste asperiores natus saepe corrupti. <a href="">read more</a> </p>
                          </div>
                          <!-- jobShowBoxP2 -->
                      </div> 
                      <!-- jobShowBoxP1P2 -->
                      <div class="jobShowBoxP3 mt-auto row">
                        <div class="matchingBars col-12 col-md-8">
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
                                    <h6 class="text-center">Your<br>requirments</h6 >
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="circleProgress blue">
                                        <span class="circleProgress-left">
                                            <span class="circleProgress-bar"></span>
                                        </span>
                                        <span class="circleProgress-right">
                                            <span class="circleProgress-bar"></span>
                                        </span>
                                        <div class="circleProgress-value">75%</div>
                                    </div>
                                    <h6 class="text-center">Company<br>requirments</h6>
                                </div>
                            </div>
                        </div>
                        <!-- matchingBars -->
                        <div class="infoButtons col-12 col-md-4 d-flex flex-column">
                              <div class="mt-auto">
                                  <div class="infoJobslider d-flex justify-content-around">
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
                                    </div>
                                    <div class="buttonsJobslider float-right">
                                        <button type="button" class="btn btn-outline-danger">Cancle</button>
                                        <button type="button" class="btn btn-success btn-lg">Apply Now</button>
                                    </div>
                              </div>
                        </div>
                        <!-- infoButtons -->
                      </div>
                      <!-- jobShowBoxP3 -->
                    </div>
                    <!-- tranding jobs card body-->
                  </div>
                  <!-- tranding jobs card background -->
                </div>
                <!-- tranding jobs card -->
                <div class="carousel-item">
                  <div class="bg-danger d-block w-100 d-flex justify-content-center" alt="Second slide" >
                    <div class="bg-transparent w-70 jobShowBox d-flex flex-column"style="min-height: 400px;">
                        <div class="jobShowBoxP1P2">
                            <div class="jobShowBoxP1 d-flex flex-row justify-content-between">
                              <div class="companyInfo row">
                                  <div class="col-12 col-md-2 jobShowBoxLogoBox">
                                      <img src="assets/img/gp_logo.jpg" alt="" class=" jobShowBoxLogo">
                                  </div>
                                  <div class="col12 col-md-10">
                                      <h4>#Job Name</h4>
                                      <h6><i class="fa fa-at" aria-hidden="true"></i>#Company Name</h6>
                                      <span><i class="fa fa-map-marker" aria-hidden="true"></i>#location</span>
                                      <br>
                                      <span><i class="fa fa-money" aria-hidden="true"></i>#salary</span>
                                  </div>
                              </div>
                              <!-- companyInfo -->
                              <div class="pinShare">
                                  <a href=""><i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                  </a> <br>
                                  <a href=""><i class="fa fa-share" aria-hidden="true"></i>
                                  </a>
                              </div>
                              <!-- pinShare -->
                            </div>
                            <!-- jobShowBoxP1 -->
                            <div class="jobShowBoxP2 ">
                                <h6><b>Discription:</b></h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni libero dignissimos velit, corrupti commodi ducimus eligendi temporibus molestias sit dolores. Amet consectetur, officia blanditiis sit iste asperiores natus saepe corrupti. <a href="">read more</a> </p>
                            </div>
                            <!-- jobShowBoxP2 -->
                        </div> 
                        <!-- jobShowBoxP1P2 -->
                        <div class="jobShowBoxP3 mt-auto row">
                          <div class="matchingBars col-12 col-md-8">
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
                                      <h6 class="text-center">Your<br>requirments</h6 >
                                  </div>
                                  <div class="col-md-3 col-sm-6">
                                      <div class="circleProgress blue">
                                          <span class="circleProgress-left">
                                              <span class="circleProgress-bar"></span>
                                          </span>
                                          <span class="circleProgress-right">
                                              <span class="circleProgress-bar"></span>
                                          </span>
                                          <div class="circleProgress-value">75%</div>
                                      </div>
                                      <h6 class="text-center">Company<br>requirments</h6>
                                  </div>
                              </div>
                          </div>
                          <!-- matchingBars -->
                          <div class="infoButtons col-12 col-md-4 d-flex flex-column">
                                <div class="mt-auto">
                                    <div class="infoJobslider d-flex justify-content-around">
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
                                      </div>
                                      <div class="buttonsJobslider">
                                          
                                          <button type="button" class="btn btn-outline-danger">Cancle</button>
                                          <button type="button" class="btn btn-success btn-lg">Apply Now</button>
                                      </div>
                                </div>
                          </div>
                          <!-- infoButtons -->
                        </div>
                        <!-- jobShowBoxP3 -->
                      </div>
                    <!-- tranding jobs card body-->
                  </div>
                  <!-- tranding jobs card background -->
                </div>
                <!-- tranding jobs card -->
                <div class="carousel-item">
                  <div class="bg-info d-block w-100 d-flex justify-content-center" alt="Third slide" >
                    <div class="bg-transparent w-70 jobShowBox d-flex flex-column"style="min-height: 400px;">
                        <div class="jobShowBoxP1P2">
                            <div class="jobShowBoxP1 d-flex flex-row justify-content-between">
                              <div class="companyInfo row">
                                  <div class="col-12 col-md-2 jobShowBoxLogoBox">
                                      <img src="assets/img/gp_logo.jpg" alt="" class=" jobShowBoxLogo">
                                  </div>
                                  <div class="col12 col-md-10">
                                      <h4>#Job Name</h4>
                                      <h6><i class="fa fa-at" aria-hidden="true"></i>#Company Name</h6>
                                      <span><i class="fa fa-map-marker" aria-hidden="true"></i>#location</span>
                                      <br>
                                      <span><i class="fa fa-money" aria-hidden="true"></i>#salary</span>
                                  </div>
                              </div>
                              <!-- companyInfo -->
                              <div class="pinShare">
                                  <a href=""><i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                  </a> <br>
                                  <a href=""><i class="fa fa-share" aria-hidden="true"></i>
                                  </a>
                              </div>
                              <!-- pinShare -->
                            </div>
                            <!-- jobShowBoxP1 -->
                            <div class="jobShowBoxP2 ">
                                <h6><b>Discription:</b></h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni libero dignissimos velit, corrupti commodi ducimus eligendi temporibus molestias sit dolores. Amet consectetur, officia blanditiis sit iste asperiores natus saepe corrupti. <a href="">read more</a> </p>
                            </div>
                            <!-- jobShowBoxP2 -->
                        </div> 
                        <!-- jobShowBoxP1P2 -->
                        <div class="jobShowBoxP3 mt-auto row">
                          <div class="matchingBars col-12 col-md-8">
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
                                      <h6 class="text-center">Your<br>requirments</h6 >
                                  </div>
                                  <div class="col-md-3 col-sm-6">
                                      <div class="circleProgress blue">
                                          <span class="circleProgress-left">
                                              <span class="circleProgress-bar"></span>
                                          </span>
                                          <span class="circleProgress-right">
                                              <span class="circleProgress-bar"></span>
                                          </span>
                                          <div class="circleProgress-value">75%</div>
                                      </div>
                                      <h6 class="text-center">Company<br>requirments</h6>
                                  </div>
                              </div>
                          </div>
                          <!-- matchingBars -->
                          <div class="infoButtons col-12 col-md-4 d-flex flex-column">
                                <div class="mt-auto">
                                    <div class="infoJobslider d-flex justify-content-around">
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
                                      </div>
                                      <div class="buttonsJobslider">
                                          
                                          <button type="button" class="btn btn-outline-danger">Cancle</button>
                                          <button type="button" class="btn btn-success btn-lg">Apply Now</button>
                                      </div>
                                </div>
                          </div>
                          <!-- infoButtons -->
                        </div>
                        <!-- jobShowBoxP3 -->
                      </div>
                    <!-- tranding jobs card body-->
                  </div>
                  <!-- tranding jobs card background -->
                </div>
                <!-- tranding jobs card -->
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
          <!-- obShowSlider -->
          <div class="row " style="margin: 50px 0;">
            <section class="col-12 col-md-4">
              <div id="job_search_box" class="jumbotron border p-3">
                  <h3 class="mb-3">Search job</h3>
                <form>
                    <div class="form-group">
                      <label for="job_name">Job Name</label>
                      <input type="text" class="form-control" id="job_name">
                    </div>
                    <div class="form-group">
                        <label for="job_category">Job Category</label>
                        <select class="form-control" id="job_Category">
                          <option>Web designing</option>
                          <option>Software development</option>
                          <option>Accountant</option>
                          <option>IT</option>
                          <option>Receiptionist</option>
                          <option>Guard</option>
                          <option>Driver</option>
                          <option>Teacher</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="job_type">Job Type</label>
                      <select class="form-control" id="job_type">
                        <option>Full time</option>
                        <option>Part time</option>
                        <option>Freelancing</option>
                        <option>Government</option>
                        <option>Business</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" placeholder="ex: Savar, Dhaka">
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="location_range">Location range</label>
                            <br>
                            <input class="mx-1" type="range" min="1" max="10" class="form-control" id="location_range">
                        <p>Value: <span id="value1"></span>km</p>
                        <script>
                            var slider1 = document.getElementById("location_range");
                            var output1 = document.getElementById("value1");
                            output1.innerHTML = slider1.value; 
                            slider1.oninput = function() {
                            output1.innerHTML = this.value;
                            }
                        </script>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="salary_range">Salary range</label>
                            <br>
                        <input class="mx-1" type="range" min="1000" max="1000000" class="form-control" id="salary_range">
                        <p>Salary: <span id="value2"></span>Tk</p>
                        <script>
                            var slider2 = document.getElementById("salary_range");
                            var output2 = document.getElementById("value2");
                            output2.innerHTML = slider2.value; 
                            slider2.oninput = function() {
                            output2.innerHTML = this.value;
                            }
                        </script>
                        </div>
                    </div>
                    <div class="form-group">
                            <button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#job_search_modal">More...</button>
      
                            <!-- Modal -->
                            <div class="modal fade" id="job_search_modal" tabindex="-1" role="dialog" aria-labelledby="job_search_modal_title" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="job_search_modal_title">Other conditions</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                        <table class="px-5 text-center ">
                                            <thead>
                                                <tr>
                                                    <th>Queries</th>
                                                    <th>Yes Neutral No</th>
                                                </tr>
                                                <tr>
                                                    <td>Transport facilities</td>
                                                    <td>
                                                        <div class="btn-group" >
                                                            <label class="btn btn-group " for="">
                                                                <input type="radio" name="options1" autocomplete="off">
                                                            </label>
                                                            <label class="btn btn-group active" for="">
                                                                <input type="radio" name="options1" autocomplete="off" checked>
                                                            </label>
                                                            <label class="btn btn-group" for="">
                                                                <input type="radio" name="options1" autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Extra bonus</td>
                                                    <td>
                                                        <div class="btn-group" >
                                                            <label class="btn btn-group " for="">
                                                                <input type="radio" name="options2" autocomplete="off">
                                                            </label>
                                                            <label class="btn btn-group active" for="">
                                                                <input type="radio" name="options2" autocomplete="off" checked>
                                                            </label>
                                                            <label class="btn btn-group" for="">
                                                                <input type="radio" name="options2" autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Personal cabin</td>
                                                    <td>
                                                        <div class="btn-group" >
                                                            <label class="btn btn-group " for="">
                                                                <input type="radio" name="options3" autocomplete="off">
                                                            </label>
                                                            <label class="btn btn-group active" for="">
                                                                <input type="radio" name="options3" autocomplete="off" checked>
                                                            </label>
                                                            <label class="btn btn-group" for="">
                                                                <input type="radio" name="options3" autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Air conditioned</td>
                                                    <td>
                                                        <div class="btn-group" >
                                                            <label class="btn btn-group " for="">
                                                                <input type="radio" name="options4" autocomplete="off">
                                                            </label>
                                                            <label class="btn btn-group active" for="">
                                                                <input type="radio" name="options4" autocomplete="off" checked>
                                                            </label>
                                                            <label class="btn btn-group" for="">
                                                                <input type="radio" name="options4" autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Extra 3 holidays</td>
                                                    <td>
                                                        <div class="btn-group" >
                                                            <label class="btn btn-group " for="">
                                                                <input type="radio" name="options5" autocomplete="off">
                                                            </label>
                                                            <label class="btn btn-group active" for="">
                                                                <input type="radio" name="options5" autocomplete="off" checked>
                                                            </label>
                                                            <label class="btn btn-group" for="">
                                                                <input type="radio" name="options5" autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </thead>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" data-dismiss="modal" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                    
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info">Make a search bot</button>
                        <button class="btn btn-success">Search</button>
                    </div>
                </form>   
              </div>
              <!-- job_search_box -->
            </section>
            <!-- left section -->
            <section class="col-12 col-md-8">
              <div class="collapseList">
                <div class="d-flex" id="headingThree">
                    <h3 class="collapsed mb-0 headerTextMiddle"data-toggle="collapse" data-target="#acceptedCollapseList" aria-expanded="false" aria-controls="acceptedCollapseList">
                     Job List<i class="fa fa-sort-desc" aria-hidden="true"></i>
                    </h3>
                </div>
                <div id="acceptedCollapseList" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                      <ol>
                      @foreach ($jobs as  $job)
                      <li>
                          <div>
                            <a class="text-primary font-weight-bold" href="">{{$job->job_title}}</a>
                            <p>Company: Company name <br>
                            </p>
                            <a href="{{route('apply.job',$job->id)}}">Apply</a>
                          </div>
                        </li>
                      @endforeach
                      </ol>
                  </div>
                </div>
              </div>
              <hr>
              <!-- collapse -->
              <div class="" >
                <h3 >Top 4 Search bots</h3>
                <div class="row" style="margin-top: 10px;margin-bottom: 20px;">
                  <div class="col-6  ">
                    <a href="#" >
                      <div class="card " >
                        <div class="row card-body text-dark">
                          <div class="col-8 ">
                            <h5>Top desire</h5>
                            <p class="cardBodyP">Job: Web-development <br>
                            Type: Full-time <br>
                            Salary: 30000Tk</p>
                          </div>
                          <div class="col-4 text-center text-success">
                            <h3>3</h3>
                            <h6>Jobs found</h6> 
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-6  ">
                    <a href="#" >
                      <div class="card " >
                        <div class="row card-body text-dark">
                          <div class="col-8 ">
                            <h5>Internship</h5>
                            <p class="cardBodyP">Job: Web-development <br>
                              Type: Full-time <br>
                              Salary: 30000Tk</p>
                          </div>
                          <div class="col-4 text-center text-success">
                            <h3>1</h3>
                            <h6>Jobs found</h6> 
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="row" >
                    <div class="col-6  ">
                        <a href="#" >
                          <div class="card " >
                            <div class="row card-body text-dark">
                              <div class="col-8 ">
                                <h5>Web Part-time</h5>
                                <p class="cardBodyP">Job: Web-development <br>
                                  Type: Full-time <br>
                                  Salary: 30000Tk</p>
                              </div>
                              <div class="col-4 text-center text-success">
                                <h3>5</h3>
                                <h6>Jobs found</h6> 
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                  <div class="col-6  ">
                    <a href="#" >
                      <div class="card " >
                        <div class="row card-body text-dark">
                          <div class="col-8 ">
                            <h5>Graphics</h5>
                            <p class="cardBodyP">Job: Web-development <br>
                              Type: Full-time <br>
                              Salary: 30000Tk</p>
                          </div>
                          <div class="col-4 text-center text-success">
                            <h3>8</h3>
                            <h6>Jobs found</h6> 
                          </div>
                        </div>
                      </div>
                    </a>
                    <!-- top 4 search bots -->
                  </div>
                </div>
              </div>    
            </section>
            <!-- right section -->
          </div>
          <!-- second row -->
    </main>
    @endsection

@extends ('layout.master')
@section ('main')

    <main class="container container-fluid" >
      <div class="row " style="margin: 50px 0;">
        <section class="col-12 col-md-4">
          <div id="job_search_box" class="jumbotron border p-3">
              <h3 class="mb-3">Search job</h3>
            <form action="{{route('jobs.search')}}" method="POST">
            @csrf
                <div class="form-group">
                  <label for="job_name">Job Name</label>
                  <input type="text" class="form-control" id="job_name" name="job_name">
                </div>
                <div class="form-group">
                    <label for="job_category">Job Category</label>
                    <select class="form-control" id="job_category" name="job_category">
                      <option value="WebDesigning">Web designing</option>
                      <option value="SoftwareDevelopment">Software development</option>
                      <option value="Accountant">Accountant</option>
                      <option value="IT">IT</option>
                      <option value="Receiptionist">Receiptionist</option>
                      <option value="Guard">Guard</option>
                      <option value="Driver">Driver</option>
                      <option value="Teacher">Teacher</option>
                    </select>
                  </div>
                <div class="form-group">
                  <label for="job_type">Job Type</label>
                  <select class="form-control" id="job_type" name="job_type">
                    <option value="FullTime">Full time</option>
                    <option value="PartTime">Part time</option>
                    <option value="Freelancing">Freelancing</option>
                    <option value="Government">Government</option>
                    <option value="Business">Business</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <select class="form-control" id="location" name="location">
                    <option value="Dhaka">Dhaka</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Shylet">Shylet</option>
                    <option value="Rajshahi">Rajshahi</option>
                  </select>
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
                    <button type="submit" class="btn btn-success">Search</button>
                </div>
            </form>   
          </div>
          <!-- job_search_box -->
          <div class="jumbotron border p-3" >
            <div>
              <h3>Search bots</h3>
            </div>
            <ul class="list-group list-group-flush ">
              <li class="bg-transparent list-group-item"><i class="fa fa-binoculars"></i> Web development, Full time</li>
              <li class="bg-transparent list-group-item"><i class="fa fa-binoculars"></i> Robot 101</li>
              <li class="bg-transparent list-group-item"><i class="fa fa-binoculars"></i> Astrology 202</li>
              <li class="bg-transparent list-group-item"><i class="fa fa-binoculars"></i> Recieptionist, Part time</li>
              <li class="bg-transparent list-group-item"><i class="fa fa-binoculars"></i> Photoshop, Freelancing</li>
            </ul>
          </div>
          <!-- search bots -->
        </section>
        <!-- left section -->
        <section class="col-12 col-md-8">
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
                <!-- Recent Deadlines job card -->
              </div>
              <!-- Recent Deadlines job card space -->
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
                <!-- Recent Deadlines job card -->
              </div>
              <!-- Recent Deadlines job card space -->
            </div>
            <!-- dashboard Recent Deadlines Jobs row1-->
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
                    <!-- Recent Deadlines job card -->
                  </div>
              <!-- Recent Deadlines job card space -->
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
                <!-- Recent Deadlines job card -->
              </div>
              <!-- Recent Deadlines job card space -->
            </div>
            <!-- dashboard Recent Deadlines Jobs row2-->  
          </div>    
          <div class="JobsNearYou" >
            <h3 >Jobs Near You</h3>
            <div class="row" style="margin-top: 10px;margin-bottom: 20px;">
              <div class="col-6  ">
                <a href="#" >
                  <div class="card " >
                    <div class="row card-body text-dark">
                      <div class="col-8 ">
                        <h5>BMW</h5>
                        <p class="cardBodyP">Job: Web-development <br>
                          Type: Full-time <br>
                          Salary: 30000Tk</p>
                      </div>
                      <div class="col-4 d-flex">
                        <img class="img-fluid align-self-center" src="https://logos-world.net/wp-content/uploads/2020/04/BMW-Logo-1997-2020.png" alt="">
                      </div>
                    </div>
                  </div>
                </a>
                <!-- Recent Deadlines job card -->
              </div>
              <!-- Recent Deadlines job card space -->
              <div class="col-6  ">
                <a href="#" >
                  <div class="card " >
                    <div class="row card-body text-dark">
                      <div class="col-8 ">
                        <h5>Beximco</h5>
                        <p class="cardBodyP">Job: Web-development <br>
                          Type: Full-time <br>
                          Salary: 30000Tk</p>
                        </div>   
                      <div class="col-4 d-flex">
                        <img class="img-fluid align-self-center" src="data:image/png;base64,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" alt=""> 
                      </div>
                    </div>
                  </div>
                </a>
                <!-- Recent Deadlines job card -->
              </div>
              <!-- Recent Deadlines job card space -->
            </div>
            <!-- dashboard Recent Deadlines Jobs row1-->
            <div class="row" >
                <div class="col-6  ">
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
                    <!-- Recent Deadlines job card -->
                  </div>
              <!-- Recent Deadlines job card space -->
              <div class="col-6  ">
                <a href="#" >
                  <div class="card " >
                    <div class="row card-body text-dark">
                      <div class="col-8 ">
                        <h5>Uniliver</h5>
                        <p class="cardBodyP">Job: Web-development <br>
                          Type: Full-time <br>
                          Salary: 30000Tk</p>
                      </div>
                      <div class="col-4 d-flex">
                        <img class="img-fluid align-self-center" src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e4/Unilever.svg/1200px-Unilever.svg.png" alt=""> 
                      </div>
                    </div>
                  </div>
                </a>
                <!-- Recent Deadlines job card -->
              </div>
              <!-- Recent Deadlines job card space -->
            </div>
            <!-- dashboard Recent Deadlines Jobs row2-->  
          </div>
        </section>
        <!-- right section -->
      </div>
      <!-- main row -->
    </main>

    @endsection
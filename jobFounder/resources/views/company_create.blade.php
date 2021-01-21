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
                <h3 >Create Company</h3>
            </div>
            <!-- heading -->
            <form action="{{route('companycreate.store')}}" method="POST">
              @csrf
            <div >
                <div class="card-body">
                    <div class="form-group">
                        <label for="company_name">Company Name </label>
                        <input type="text" class="form-control" id="company_name" name="company_name" >
                        @error('company_name')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="license_num">License no</label>
                        <input type="text" class="form-control" id="license_num" name="license_num" >
                        @error('license_num')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="contact">Contact number </label>
                        <input type="text" class="form-control" id="contact" name="contact" >
                        @error('contact')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" >
                        @error('location')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="industry_type">Type</label>
                      <select class="form-control" id="industry_type" name="industry_type">
                        <option>Technological</option>
                        <option>Business</option>
                        <option>Constractor</option>
                        <option>Bank</option>
                        <option>Other</option>
                      </select>
                      @error('industry_type')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                      @enderror
                    </div>
                </div>
            </div>
            <div>
            </div>





<div id="map" style="width:100%; height:500px;"></div>


            <br><br>
            <button type="submit" class="btn btn-primary btn-block" >Create</button>
            </form>
<br><br>
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
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyq8AY672hcOGr82jHGycp9TGPzG2Fge8.exp&sensor=false">
</script> -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"> -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyq8AY672hcOGr82jHGycp9TGPzG2Fge8&callback=initMap&libraries=&v=weekly">
</script>

</script>
    <script type="text/javascript"> 
      // var map;
      // var marker;
      // var myLatlng = new google.maps.LatLng(20.268455824834792,85.84099235520011);
      // var geocoder = new google.maps.Geocoder();
      // var infowindow = new google.maps.InfoWindow();
      // function initialize(){
      // var mapOptions = {
      // zoom: 18,
      // center: myLatlng,
      // mapTypeId: google.maps.MapTypeId.ROADMAP
      // };

      // map = new google.maps.Map(document.getElementById("map"), mapOptions);

      // marker = new google.maps.Marker({
      // map: map,
      // position: myLatlng,
      // draggable: true 
      // }); 

      // geocoder.geocode({'latLng': myLatlng }, function(results, status) {
      // if (status == google.maps.GeocoderStatus.OK) {
      // if (results[0]) {
      // $('#latitude,#longitude').show();
      // $('#address').val(results[0].formatted_address);
      // $('#latitude').val(marker.getPosition().lat());
      // $('#longitude').val(marker.getPosition().lng());
      // infowindow.setContent(results[0].formatted_address);
      // infowindow.open(map, marker);
      // }
      // }
      // });

      // google.maps.event.addListener(marker, 'dragend', function() {

      // geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
      // if (status == google.maps.GeocoderStatus.OK) {
      // if (results[0]) {
      // $('#address').val(results[0].formatted_address);
      // $('#latitude').val(marker.getPosition().lat());
      // $('#longitude').val(marker.getPosition().lng());
      // infowindow.setContent(results[0].formatted_address);
      // infowindow.open(map, marker);
      // }
      // }
      // });
      // });

      // }
      // google.maps.event.addDomListener(window, 'load', initialize);


      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: -34.397, lng: 150.644 },
          zoom: 8,
        });
      }
    </script>

  </body>
</html>
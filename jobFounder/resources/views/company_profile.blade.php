@extends ('layout.master')
@section ('main')
    <main class="container d-flex justify-content-center" style="min-height: 100vh;">
        <div class="row " style="margin: 50px 0;">
            <section class="col-12 col-md-4">
              <div id="map_box" class="jumbotron border p-3 mapBox">
                  <h3 class="mb-3">Location</h3>
                  <div id="map"></div>
 
              </div>
            </section>
            <!-- left section -->
            <section class="col-12 col-md-8">
                <h3>Company name: {{$company->company_name}}</h3>
                <h5>Email:  {{$company->email}}</h5>
                <h5>Contact : {{$company->contact}}</h5>
                <h5>License number: {{$company->license_num}}</h5>
                <h5>Location : {{$company->location}}</h5>
                <h5>Industry type : {{$company->industry_type}}</h5>
                <h5>Description : {{$company->description}}</h5>
                <h5>Number of empoloyee : {{$company->employee_num}}</h5>
                               
            </section>
            <!-- right section -->
          </div>
          <!-- main row -->
    </main>
@endsection
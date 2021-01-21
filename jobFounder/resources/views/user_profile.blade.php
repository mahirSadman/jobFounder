@extends ('layout.master')
@section ('main')

    <main class="container d-flex justify-content-center" style="min-height: 100vh;">
        <div class="row " style="margin: 50px 0;">
            <section class="col-12 col-md-4">
              <div id="map_box" class="jumbotron border p-3 mapBox">
                  <h3 class="mb-3">Profile</h3>
                  <img src="https://i9.dainikbhaskar.com/thumbnail/655x588/web2images/www.dailybhaskar.com/2016/12/13/alom_10_1481621118.jpg" class="img-fluid" alt="Responsive image">
              </div>
            </section>
            <!-- left section -->
            <section class="col-12 col-md-8">
                <h3>Name: {{$user->first_name}} {{$user->last_name}}</h3>
                <h5>Email: {{$user->email}}</h5>
                <h5>Phone: {{$user->phone_num}}</h5>
                <h5>Date of birth: {{$user->date_of_birth}}</h5>
                <h5>Address: {{$user->address}}</h5>
                <h5>Gender: {{$user->gender}}</h5>
            </section>
            <!-- right section -->
          </div>
          <!-- main row -->
    </main>

@endsection
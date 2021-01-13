@extends ('layout.master')
@section ('main')
<main class="container d-flex justify-content-center" style="min-height: 100vh;">
        <div id="accordion" style="width: 600px;">
            <div class="formHeading text-center">
                <h3 >Edit Company</h3>
            </div>
            <!-- heading -->
            <form action="{{route('company_profile.update',$company->id)}}" method="POST">
              @csrf
              @method('PUT')
            <div >
                <div class="card-body">
                    <div class="form-group">
                        <label for="company_name">Company Name </label>
                        <input type="text" class="form-control" id="company_name" name="company_name" value="{{$company->company_name}}">
                        @error('company_name')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="license_num">License no</label>
                        <input type="text" class="form-control" id="license_num" name="license_num" value="{{$company->license_num}}">
                        @error('license_num')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$company->email}}">
                        @error('email')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="contact">Contact number </label>
                        <input type="text" class="form-control" id="contact" name="contact" value="{{$company->contact}}">
                        @error('contact')
                          <span class="text-danger">{{$message}}</span>
                          <br>
                        @enderror
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{$company->location}}">
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
            <br><br>
            <button type="submit" class="btn btn-success btn-block" >Save</button>
            </form>

        </div>
      <!-- main row -->
    </main>
@endsection
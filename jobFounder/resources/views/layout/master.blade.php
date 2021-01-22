<!doctype html>
<html lang="en">
  <head>
    <title>Job Founder</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/styles/style.css" />
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
                <a class="nav-link active" aria-current="page" href="{{route('user_dashboard')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
                  Jobs
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('jobs.discover')}}">Discover Jobs</a></li>
                  <li><a class="dropdown-item" href="{{route('jobs.discover')}}">Search Jobs</a></li>
                  <li><a class="dropdown-item" href="{{route('jobs.applied')}}">Applied Jobs</a></li>
                  <li><a class="dropdown-item" href="{{route('jobs.apllied')}}">Pinned Jobs</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarCompaniesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Companies
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarCompaniesDropdown">
                    <li><a class="dropdown-item" href="{{route('company.my')}}">My Companies</a></li>
                    <li><a class="dropdown-item" href="{{route('jobs.discover')}}">Search Company</a></li>
                    <li><a class="dropdown-item" href="{{route('companycreate.create')}}">Create Company</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route('notifications')}}">
                  <i class="fa fa-bell nav-bar-icon" aria-hidden="true"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route('communications')}}">
                  <i class="fa fa-comments nav-bar-icon" aria-hidden="true"></i>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarProfileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user nav-bar-icon" aria-hidden="true"></i>
                  @if(Session::get('LoggedUserName'))
                  {{Session::get('LoggedUserName')}}
                  @endif
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarProfileDropdown">
                    <li><a class="dropdown-item" href="{{route('user_profile.edit')}}">Edit profile</a></li>
                    <li><a class="dropdown-item" href="{{route('auth.logout')}}">Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @yield("main")
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
  </body>
</html>
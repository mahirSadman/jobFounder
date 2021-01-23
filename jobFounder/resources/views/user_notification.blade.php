@extends ('layout.master')
    @section ('main')

    <main class="container d-flex justify-content-center" style="min-height: 100vh;">
        <div id="accordion" style="width: 800px;">
            <div class="formHeading text-center">
                <h3 >Notifications</h3>
            </div>
            <!-- heading -->
            <p><button type="button" class="btn btn-outline-dark ">mark all as seen</button></p>

            <div class="card-body">
                <ul class="list-group list-group-flush">
                  @foreach ($user_notifications as $notification)
                    <li class="list-group-item">
                        <a href="{{route('jobs.applied')}}">
                        <div class="d-flex justify-content-between">
                            <p>{{$notification->notification}}</p>
                            <p class="companiesCompanyRole align-bottom">{{$notification->created_at}}</p>
                        </div>
                        </a>
                    </li>                  
                  @endforeach

                  
                </ul>
            </div>
        </div>
      <!-- main row -->
    </main>

    @endsection
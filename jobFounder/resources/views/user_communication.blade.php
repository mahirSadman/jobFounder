@extends ('layout.master')
    @section ('main')
    <main class="container d-flex justify-content-center" style="min-height: 100vh;">
        <div id="accordion" style="width: 800px;">
            <div class="formHeading text-center">
                <h3 >Communications</h3>
            </div>
            <!-- heading -->
            @if(Session::get('fail'))
              <div class="alert alert-danger">
                {{Session::get('fail')}}
              </div>
            @endif
            <div class="newMessage">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newMessage">
                        Send a New Message
            </button>
            <br><br>
            <div class="modal fade" id="newMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Communication Box</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div> 
                        <form action="{{route('communications.send')}}" method="POST">
                          @csrf

                            <div class="modal-body">
                                <div class="form-group">
                                <label for="send_to">To:</label>
                                <input type="text" name="send_to" class="form-control" placeholder="Enter a Username">
                                <label for="topic">Topic:</label>
                                <input type="test" class="form-control" name="topic" id="topic" aria-describedby="emailHelp" placeholder="Enter topic">
                                <label for="message">Type your message:</label>
                                <input type="test" class="form-control" name="message" id="message" aria-describedby="emailHelp" placeholder="Enter reply">
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div> 
            </div>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Topic</th>
                    <th scope="col">From</th>
                    <th scope="col">Date</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($user_communications as $communication)
                  <tr>
                    <th scope="row">{{$communication->topic}}</th>
                    <td>{{$communication->sender->first_name}}</td>                                    
                    <td>{{$communication->created_at}}</td>                        
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$communication->id}}">
                        see & reply
                    </button>
                    </td>
                  </tr>
                  <div class="modal fade" id="{{$communication->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Communication Box</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div> 
                        <form action="{{route('communications.send')}}" method="POST">
                          @csrf
                            <div class="modal-body">
                            <p><b>From:</b> {{$communication->sender->first_name}} {{$communication->sender->last_name}}<br>
                                <b>topic:</b> {{$communication->topic}} <br>
                                <b>message:</b> <br> {{$communication->message}}<br>
                            </p>
                            <hr>
                        
                                <div class="form-group">

                                <input type="hidden" name="send_to" value="{{$communication->sender->email}}">
                                <label for="reply">Topic</label>
                                <input type="test" class="form-control" name="topic" id="topic" aria-describedby="emailHelp" placeholder="Enter topic">
                                <label for="message">Type your reply</label>
                                <input type="test" class="form-control" name="message" id="message" aria-describedby="emailHelp" placeholder="Enter reply">
                                <small id="emailHelp" class="form-text text-muted">Dat vanga jobab diben vai...</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Reply</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>                 
                  @endforeach
                </tbody>
                <!-- Button trigger modal -->

  
  <!-- Modal -->

              </table>
        </div>
      <!-- main row -->
    </main>

@endsection
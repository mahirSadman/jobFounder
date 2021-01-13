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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, quas ad? Enim excepturi mollitia commodi modi ipsum? Sit voluptates eos aspernatur pariatur consequuntur explicabo cum. Possimus asperiores illum eius nobis quaerat excepturi veniam iure. Illum, vel quis. Esse eveniet ex ut repellat quisquam. Totam, laborum quibusdam iste qui veritatis eius? Dolore fuga tempore suscipit, itaque cum quam ipsa libero quas aut explicabo assumenda vel! Alias, temporibus! Voluptates nemo non pariatur illum ipsa beatae necessitatibus. Molestiae, ex consequuntur maiores eos facilis quasi mollitia? Ipsam impedit exercitationem voluptate praesentium quae distinctio, corporis eum rerum quos nam commodi, ducimus amet asperiores ullam. Exercitationem adipisci repellendus inventore, hic consectetur, deleniti perferendis voluptates quibusdam cupiditate perspiciatis voluptas eius quam explicabo aliquid et doloremque ullam necessitatibus qui! Doloremque maxime quis fugit, at consequuntur perferendis exercitationem quam inventore quod! Earum iusto, magni beatae enim labore facilis, provident corrupti at unde tempora velit dolore! Harum quo architecto eligendi odio natus ab! Excepturi, dicta quam.</p>
            </section>
            <!-- right section -->
          </div>
          <!-- main row -->
    </main>

@endsection
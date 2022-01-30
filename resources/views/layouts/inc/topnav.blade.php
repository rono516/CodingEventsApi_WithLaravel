<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
{{-- <ul class="nav nav-pills flex-column flex-sm-row justify-content-center">
    <li class="nav-item">
        <p id="one">Here is a list of Online Coding contests and Events</p>
    </li> <br>
    <li class="nav-item">
      <a class="flex-sm-fill text-sm-center nav-link active" href="#">CODING Events are currently underway</a>
    </li>
    
    <li class="nav-item">
      <a class="nflex-sm-fill text-sm-center nav-link active" href="#">BEFORE events are yet to begin</a>
    </li>
  </ul> --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img style="border: 5px solid white;" height="150px" width="150px" src="{{ asset('img/CodeiT.png') }}" alt="">
    <a id="one" class="navbar-brand" href="{{ url('/') }}">Online Coding Events And Contests</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">

        <ul style="list-style: none;" >
          <li>
            <p id="one">Here is a list of Online Coding contests and Events</p>
          </li>
          <li>
            <p id="one">CODING events are currently underway</p>
          </li>
          <li>
            <p id="one">BEFORE events are yet to begin</p>
          </li>
        </ul>
        {{-- <button  onclick="window.location='{{ url('/') }}'">Button
        </button> --}}
        
      </div>
    </div>
  </nav>
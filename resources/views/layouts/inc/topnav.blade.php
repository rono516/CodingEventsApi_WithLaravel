<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  {{-- <nav class="navbar navbar-expand-lg navbar-light justify-content-center bg-light">
    

   <section>
      <img style="border: 5px solid white;" height="170px" width="170px" src="{{ asset('img/CodeiT.png') }}" alt="">
      <a id="one" class="navbar-brand" href="{{ url('/') }}">Online Coding Events And Contests</a> 
      <a id="one" class="navbar-brand" href="{{ url('https://github.com/rono516') }}">Developed by Rono</a> 
      <a href="https://github.com/rono516"><i class="fa fa-github" style="font-size:36px"></i></a>
      <a href="https://www.facebook.com/collins.sharks.3/"><i class="fa fa-facebook"  style="font-size:28px"></i></a>
      <a href="https://mobile.twitter.com/Collins42Rono"><i class="fa fa-twitter" style="font-size:28px"></i></a>
    </section>
    <section>
      <ul class="navbar-nav">  
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">All Contests</a>
        </li>
        <li class="nav-item">
          <a href="#">CodeForces</a>
        </li>
        <li class="nav-item">
          <a href="#">CodeForces::Gym</a>
        </li>
        <li class="nav-item">
          <a>TopCoder</a>
        </li>
        <li class="nav-item">
          <a>AtCoder</a>
        </li>
        <li class="nav-item">
          <a>CodeChef</a>
        </li>
        <li class="nav-item">
          <a>CS Academy</a>
        </li>
        <li class="nav-item">
          <a>HackerRank</a>
        </li>
        <li class="nav-item">
          <a>HackerEarth</a>
        </li>
        <li class="nav-item">
          <a>Kick Start</a>
        </li>
        <li class="nav-item">
          <a>LeetCode</a>
        </li>
        <li class="nav-item">
          <a>Contest Sites</a>
        </li>
      </ul>
    </section>
    
    
  </nav> --}}
  

  <nav style="margin-left: 2.5%; margin-right:2.5%;" class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-centre">

    <div class="container-fluid">
      <img style="border: 5px solid white;" height="170px" width="170px" src="{{ asset('img/CodeiT.png') }}" alt="">
      {{-- <a href="{{ url('/') }}" class="navbar-brand" style=" color:blue;" >CodeiT by Rono</a> --}}
      <a href="{{ url('/') }}" class="navbar-brand">Coding Contests and Events</a>
      
      
      
      
      
      <button type="button" data-toggle="collapse" data-target="#navbar-menu" class="navbar-toggler">
         <span class="navbar-toggler-icon"></span> </button>

    
     <div class="collapse navbar-collapse mr-4" id="navbar-menu">      
      <ul class="navbar-nav mr-auto">
        <li><a href="{{ url('/') }}" class="nav-link">All Contests</a></li>
        <li><a href="{{ url('/hackerearth') }}" class="nav-link">Hacker Earth</a></li>
        <li><a href="{{ url('/codeforces') }}" class="nav-link">CodeForces</a></li>
       
        <li><a href="{{ url('/topcoder') }}" class="nav-link">TopCoder</a></li>
        <li><a href="{{ url('/atcoder') }}" class="nav-link">AtCoder</a></li>
        <li><a href="{{ url('/codechef') }}" class="nav-link">CodeChef</a></li>
        <li><a href="{{ url('/hackerrank') }}" class="nav-link">HackerRank</a></li>
        <li><a href="{{ url('/kickstart') }}" class="nav-link">Kick Start</a></li>
        <li><a href="{{ url('/leetcode') }}" class="nav-link">LeetCode</a></li>
        <li><a href="{{ url('/sites') }}" class="nav-link">Contest Sites</a></li>
        <li><a href="https://www.facebook.com/collins.sharks.3/" class="nav-link"><i class="fa fa-facebook"  style="font-size:28px;"></i></a></li>
        <li><a href="https://github.com/rono516" class="nav-link"><i class="fa fa-github" style="font-size:36px"></i></a></li>       
        <li><a href="https://mobile.twitter.com/Collins42Rono" class="nav-link"><i class="fa fa-twitter" style="font-size:28px"></i></a></li>
        
      </ul>

    </div>
  </div>
    
  </nav>

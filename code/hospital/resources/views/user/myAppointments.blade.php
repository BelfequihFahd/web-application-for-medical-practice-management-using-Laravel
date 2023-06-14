<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>


  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> belfequihfahd@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://web.facebook.com/FahdBél"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://www.twitter.com/FahdBelfequih"><span class="mai-logo-twitter"></span></a>
              <a href="https://www.instagram.com/Fahdbel.28"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> 
      </div> 
    </div> 

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>

            @if(Route::has('login'))
            @auth
              <li class="nav-item">
                <a class="nav-link" href="{{route('user.myAppointments')}}">My appointments</a>
              </li>
            @endauth
            @endif

            @if(Route::has('login'))

            @auth
            <x-app-layout>
            </x-app-layout>
            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>
            @endauth
            @endif

          </ul>
        </div> 
      </div> 
    </nav>
  </header>

  <body>

  <table class="styled-table">
    <thead>
        <tr>
            <th>Appointment date</th>
            <th>Doctor name</th>
            <th>Message</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($appointments as $item)
        <tr>
            <td>{{$item->date}}</td>
            <td>{{$item->docname}}</td>
            <td>{{$item->message}}</td>
            @if($item->statut=='in progress')
            <td><span style="background-color:#ebdb1c; border-radius:5px; color:white;padding:12px ">{{$item->statut}}</span></td>
            @endif
            @if($item->statut=='approved')
            <td><span style="background-color:#30a444; border-radius:5px; color:white;padding:12px">{{$item->statut}}</span></td>
            @endif
            @if($item->statut=='canceld')
            <td><span style="background-color:#e03444; border-radius:5px; color:white;padding:12px ">{{$item->statut}}</span></td>
            @endif 
            <td><a class="btn btn-danger" href="{{route('user.cancelApp', $item->id)}}">cancel</a></td>       
        </tr>
        
    @endforeach
    </tbody>
</table>

              

<style>
 .styled-table {
    border-collapse: collapse;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    margin-left:20%;
    margin-top:3%;

}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: center;
}
.styled-table th,
.styled-table td {
    padding: 18px 45px;
}
.styled-table tbody tr {
    border-bottom: 1 thin solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2 thin solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
</body>
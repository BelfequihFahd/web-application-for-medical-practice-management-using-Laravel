<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main" >
    <div class="sidenav-header">
      
      <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html" target="_blank">
        <span class="ms-1 font-weight-bold">One Health Center</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" style="margin-top:20px" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%);; box-shadow:4px 2px 2px gray; color:white" class="nav-link  active" href="{{route('home')}}">
          <img src="logo/dashboard.png" alt="appointment" class="  text-center border-radius-md" style="height:45px; background-color:white;width:48px; box-shadow: 5px 3px 3px black; margin-right:5px;border:1px solid black; padding:3px; border-radius:5px">

            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <br>
        <li class="nav-item">
          <a style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%);; box-shadow:4px 2px 2px gray; color:white"class="nav-link  active" href="{{route('doctor.viewAppointments')}}">
              <img src="logo/appointment.png" alt="appointment" class="  text-center border-radius-md" style="height:45px; background-color:white;width:48px; box-shadow: 5px 3px 3px black; margin-right:5px;border:1px solid black; padding:3px; border-radius:5px">
            
            <span class="nav-link-text ms-1"> Manage Appointments</span>
          </a>
        </li>
<br>
        <li class="nav-item">
          <a style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%);; box-shadow:4px 2px 2px gray; color:white"class="nav-link  active" href="{{route('doctor.Arrangment')}}">
            <img src="logo/prescription.png" alt="appointment" class="  text-center border-radius-md" style="height:45px; background-color:white;width:48px; box-shadow: 5px 3px 3px black; margin-right:5px;border:1px solid black; padding:3px; border-radius:5px">
            
            <span class="nav-link-text ms-1"> prescription</span>
          </a>
        </li>
        <br>
        <li class="nav-item">
          <a style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%);; box-shadow:4px 2px 2px gray; color:white"class="nav-link  active" href="{{route('doctor.referralLetter')}}">
          <img src="logo/refferalletter.png" alt="appointment" class="  text-center border-radius-md" style="height:45px; background-color:white;width:48px; box-shadow: 5px 3px 3px black; margin-right:5px;border:1px solid black; padding:3px; border-radius:5px">

            <span class="nav-link-text ms-1">Referral Letter</span>
          </a>
        </li>
        <br>
      
        <li class="nav-item">
          <a style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%);; box-shadow:4px 2px 2px gray; color:white"class="nav-link  active" href="{{route('doctor.Certificates')}}">
          <img src="logo/certificate.png" alt="appointment" class="  text-center border-radius-md" style="height:45px; background-color:white;width:48px; box-shadow: 5px 3px 3px black; margin-right:5px;border:1px solid black; padding:3px; border-radius:5px">

            <span class="nav-link-text ms-1">All Certificates</span>
          </a>
        </li>
        <br>
      
      </ul>
    </div>
  </aside>
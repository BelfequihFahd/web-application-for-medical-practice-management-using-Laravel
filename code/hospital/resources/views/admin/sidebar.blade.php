<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main" >
    <div class="sidenav-header">
      
      <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html" target="_blank">
        <span class="ms-1 font-weight-bold">One Health Center</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-90 h-900" style="margin-top:20px" id="sidenav-collapse-main">
      <ul class="navbar-nav" >
        <li class="nav-item" >
          <a style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%);; box-shadow:4px 2px 2px gray; color:white" class="nav-link  active" href="{{route('home')}}">
          <img src="logo/dashboard.png" alt="appointment" class="  text-center border-radius-md" style="height:45px; background-color:white;width:48px; box-shadow: 5px 3px 3px black; margin-right:5px;border:1px solid black; padding:3px; border-radius:5px">

            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <br>
        <li class="nav-item">
          <a style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%); box-shadow:4px 2px 2px gray; color:white" class="nav-link  active" href="{{route('admin.viewDoctors')}}">
          <img src="logo/doctor.png" alt="appointment" class="  text-center border-radius-md" style="height:45px; width:48px; box-shadow: 5px 3px 3px black;background-color:white ;margin-right:5px;border:1px solid black; padding:3px; border-radius:5px">

            <span class="nav-link-text ms-1">Manage Doctors</span>
          </a>
        </li>
        <br>
        <li class="nav-item">
          <a style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%);; box-shadow:4px 2px 2px gray; color:white" class="nav-link  active" href="{{route('admin.viewPatients')}}">
          <img src="logo/patient.png" alt="appointment" class="  text-center border-radius-md" style="height:45px; width:48px; box-shadow: 5px 3px 3px black;background-color:white ;margin-right:5px;border:1px solid black; padding:3px; border-radius:5px">

            <span class="nav-link-text ms-1">Manage Patient</span>
          </a>
        </li>
        <br>
        
        <li class="nav-item">
          <a style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%);; box-shadow:4px 2px 2px gray; color:white" class="nav-link  active" href="{{route('admin.viewAppointments')}}">
          <img src="logo/appointment.png" alt="appointment" class="  text-center border-radius-md" style="height:45px; width:48px; box-shadow: 5px 3px 3px black;background-color:white ;margin-right:5px;border:1px solid black; padding:3px; border-radius:5px">

            <span class="nav-link-text ms-1">Manage Appointments</span>
          </a>
        </li>
        <br>
        <li class="nav-item">
          <a style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%);; box-shadow:4px 2px 2px gray; color:white" class="nav-link  active" href="{{route('admin.viewMedications')}}">
          <img src="logo/medications.png" alt="appointment" class="  text-center border-radius-md" style="height:45px; width:48px; box-shadow: 5px 3px 3px black;background-color:white ;margin-right:5px;border:1px solid black; padding:3px; border-radius:5px">

            <span class="nav-link-text ms-1">Manage Medications</span>
          </a>
        </li>
        
        
        
      
      </ul>
    </div>
  </aside>
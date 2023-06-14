<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')



</head>

<body class="g-sidenav-show  bg-gray-100">
  
    @include('doctor.sidebar')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

    @include('admin.navbar')

   
    <div class="container" style="text-align:center; margin-top:20px; height:80vh; margin-left:20px" >
        <div class="row">
            <div class="col-sm">
                
            <div class="card" style="width: 18rem;height:34rem">
                <img class="card-img-top" style="border:1px solid black" src="certifi.png" alt="Card image cap">
                <div class="card-body" >
                    <h5 class="card-title" >Certificate of work or school absence</h5>
                    <a href="{{route('doctor.Certficat')}}" class="btn btn-primary">Make certificate</a>
                </div>
            </div>

            </div>
            <div class="col-sm">
                
            <div class="card" style="width: 18rem;height:34rem">
                <img class="card-img-top" src="certifi.png" style="border:1px solid black" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">certificate of consultation</h5>
                    <a href="{{route('doctor.ConsultationCertficat')}}" class="btn btn-primary">Make certificate</a>
                </div>
            </div>

            </div>
            <div class="col-sm">
                
            <div class="card" style="width: 18rem;height:34rem">
                <img class="card-img-top" src="h.png" style="border:1px solid black" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">certificate competitive sport activity</h5>
                    <a href="{{route('doctor.SportiveCertificate')}}" class="btn btn-primary">Make certificate</a>
                </div>
            </div>

            </div>
        </div>
    </div>

    

    
      
    @include('admin.footer')

    
  </main>

    @include('admin.script')

</body>

</html>


<style>
    .list-group-item:hover{
        background-color: ;
    }

</style>
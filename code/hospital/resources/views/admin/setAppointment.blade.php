<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="g-sidenav-show  bg-gray-100">
  
    @include('admin.sidebar')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

    @include('admin.navbar')

    <div class="row my-4" >
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            @if(session()->has('message'))
            <div class="alert alert-success" style="text-align:center; font-size:15px">
                {{session()->get('message')}}
            </div>
            @else
        <div class="card" style="width:146.5% ; padding:20px ; padding-top:60px ;height:90px " >
            <span class="font-weight-bolder mb-0"style="text-align:center; margin-top:-37px; font-size:30px"> Set Appointment </span>
        </div>
            @endif
        </div>
    </div>

      

      <div class="row my-4" >
    <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
        <div class="card" style="width:146.5% ; padding:20px ; padding-top:60px ;height:500px " >
            <form action="{{route('admin.uploadAppointment')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('post')
                
            <div class="row">
                <div class="form-group col-md-4">
                        <label for="inputState">Patient Name</label>
                        <select id="inputState" class="form-control" name="patientName" required="">
                        <option selected>--- Patient Name ---</option>
                        @foreach($patient as $item)
                        <option value="{{$item->name}} ">{{$item->name}} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Doctor Name</label>
                        <select id="inputState" class="form-control" name="doctorName" required="">
                        <option selected>Doctor Name --- Speciality</option>
                        @foreach($doctor as $item)
                        <option value="{{$item->name}}" >{{$item->name}} --- {{$item->speciality}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col">
                    <label for="inputState">Appointment Date</label>
                        <input type="date" name="date" class="form-control" required="">
                    </div>
            </div>   
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Patient Email</label>
                    <input type="text" class="form-control" name="patientEmail" placeholder="patient Email" required="">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Patient Phone</label>
                    <input type="text" class="form-control" name="patinetPhone" placeholder="patinet Phone" required="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Patient Problem</label>
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required=""></textarea>
                </div>    
            </div>
                <button type="submit" class="btn btn-primary">Set Appointment</button>
            </form>
        </div>
    </div>
</div>
      
    @include('admin.footer')

    
  </main>

    @include('admin.script')

    <style>
        .col{
            margin-bottom: 10px;
        }
        .btn{
            text-align:center;
            margin-left:43%;
            margin-top:10px;
            width:15%;
            background-color:#08dca4;
        }
        .alert{
            width:146.5%;
        }
        
    </style>

</body>

</html>

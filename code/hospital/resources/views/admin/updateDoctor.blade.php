<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <span class="font-weight-bolder mb-0"style="text-align:center; margin-top:-37px; font-size:30px"> Update Doctor : {{$doctor->name}} </span>
        </div>
            @endif
        </div>
    </div> 


<div class="row my-4" >
    <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
        <div class="card" style="width:146.5% ; padding:20px ; padding-top:60px ;height:500px " >
            <form action="{{route('admin.updateDoc', $doctor->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('post')
                
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$doctor->name}}" required="">
                </div>
            </div>   
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Age</label>
                    <input type="text" class="form-control" name="age" value="{{$doctor->age}}" required="">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$doctor->phone}}" required="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$doctor->email}}" required="">
                </div>
                
            </div>  
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="inputState">Gender</label>
                    <select id="inputState" class="form-control" name="gender" required="">
                    <option selected>--- Select ---</option>
                    <option>Male</option>
                    <option>Female</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Speciality</label>
                    <select id="inputState" class="form-control" name="speciality" required="">
                    <option selected>{{$doctor->speciality}}</option>
                    <option>Skin</option>
                    <option>Heart</option>
                    <option>Eye</option>
                    <option>Ears</option>
                    </select>
                </div>
                <div class="form-group  col-md-4">
                    <label for="exampleFormControlFile1">Image</label>
                    <br>
                    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" required="">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update </button>
            
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
            width:10%;
            background-color:#08dca4;
        }
        .alert{
            width:146.5%;
        }
        
    </style>
</body>

</html>

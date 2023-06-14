<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @include('admin.css')
    
</head>

<body class="g-sidenav-show  bg-gray-100" >
  
    @include('admin.sidebar')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg " >

    @include('admin.navbar')

    <div class="row my-4" >
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            @if(session()->has('message'))
            <div class="alert alert-success" style="text-align:center; font-size:15px">
                {{session()->get('message')}}
            </div>
            @else
        <div class="card" style="width:146.5% ; padding:20px ; padding-top:60px ;height:90px " >
            <span class="font-weight-bolder mb-0"style="text-align:center; margin-top:-37px; font-size:30px"> Send Email To : {{$appointment->email}} </span>
        </div>
            @endif
        </div>
    </div>
   

    <div class="row my-4" >
    <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
        <div class="card" style="width:146.5% ; padding:20px ; padding-top:30px ;height:450px " >
            <form action="{{route('admin.sendEmail', $appointment->id)}}" method="POST">
                @csrf
                @method('post')
                
            <div class="row">
                <div class="col" style="text-align:center">
                    <label for="formGroupExampleInput">Greeting</label>
                    <input type="text" class="form-control" name="greeting" placeholder="Greeting" required="">
                </div>
            </div>   
            <div class="row">
                <div class="col" style="text-align:center">
                    <label for="formGroupExampleInput" >Body</label>
                    <input type="text" class="form-control" name="body" placeholder="Body" required="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Action Text</label>
                    <input type="text" class="form-control" name="actionText" placeholder="Action Text" >
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Action URL</label>
                    <input type="text" class="form-control" name="actionURL" placeholder="Action URL" >
                </div>
            </div>
            <div class="row">
                <div class="col" style="text-align:center">
                    <label for="formGroupExampleInput">End Part</label>
                    <input type="text" class="form-control" name="endPart" placeholder="End Part" required="">
                </div> 
            </div>  
            <button type="submit" class="btn btn-primary">Send</button>
            
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
            margin-left:45.5%;
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

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="g-sidenav-show  bg-gray-100">
  
    @include('doctor.sidebar')

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
            <span class="font-weight-bolder mb-0"style="text-align:center; margin-top:-37px; font-size:30px"> Referral letter </span>
        </div>
            @endif
        </div>
    </div>

      

      <div class="row my-4" >
    <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
        <div class="card" style="width:146.5% ; padding:20px ; padding-top:60px ;height:500px " >
            <form action="{{route('doctor.makereferralLetter') }}" method="POST" >
                @csrf
                @method('post')
                
                <br>
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
                        <label for="formGroupExampleInput">Patient date of birth</label>
                        <input type="date" class="form-control" name="dateofbirth"  required="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> surgery type   </label>
                        <input type="text" class="form-control" name="surgery" placeholder="surgery type" required="">
                    </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> Surgeon’s Name </label>
                        <input type="text" class="form-control" name="Surgeons" placeholder="Surgeon’s Name" required="">
                </div>
                <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> The subject of the referral letter </label>
                        <input type="text" class="form-control" name="subject" placeholder="subject" required="">
                </div>
                
                <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Years of care </label>
                        <input type="text" class="form-control" name="yearscare" placeholder="Years of care"  required="">
                    </div>
                
            </div>
            <br><br>
                <button type="submit" class="btn btn-primary">view PDF</button>
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

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
            <span class="font-weight-bolder mb-0"style="text-align:center; margin-top:-37px; font-size:30px"> 
              Medications Table
              <a href="{{route('admin.addMedication')}}" class="btn btn-success" style="margin-left:60%"> +Add Medication</a>   
            </span>
        </div>
            @endif
        </div>
    </div>





    <div class="card" style="width:97% " >
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr style='text-align:center'>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Speciality</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                    </tr>
                  </thead>
                  <tbody >
                      @foreach($medications as $item)
                    <tr style='text-align:center'>
                      <td >
                        <div>
                            <h6 class="text-xs font-weight-bold "  >{{$item->name}}</h6>
                        </div>
                      </td>

                      <td >
                        <span class="text-xs font-weight-bold"> {{$item->speciality}} </span>
                      </td>

                      <td style="text-align:center"x>
                        <span class="text-xs font-weight-bold" >
                            <a class="btn btn-success" href="{{route('admin.updateMedication', $item->id)}}">update</a>
                            <a class="btn btn-danger" href="{{route('admin.deleteMedication', $item->id)}}">delete</a>
                        </span>    
                      </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>  
      
    @include('admin.footer')

    
  </main>

    @include('admin.script')

</body>

</html>

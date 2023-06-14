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
            Patient Table
            <a href="{{route('admin.addPatient')}}" class="btn btn-success" style="margin-left:70%"> +add Patient</a> 
          </span>
        </div>
            @endif
        </div>
    </div>


    <div class="card" style="width:97% " >
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">age </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">gender</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">adress</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($patients as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="text-xs font-weight-bold">{{$item->name}}</h6>
                        </div>
                      </td>

                      <td style="text-align:center">
                        <span class="text-xs font-weight-bold" >{{$item->age}}</span>    
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold">{{$item->phone}}</span>    
                      </td>

                      <td style="text-align:center">
                        <span class="text-xs font-weight-bold" >{{$item->email}}</span>    
                      </td>

                      <td style="text-align:center">
                        <span class="text-xs font-weight-bold" >{{$item->gender}}</span>    
                      </td>

                      <td style="text-align:center">
                        <span class="text-xs font-weight-bold" >{{$item->adress}}</span>    
                      </td>

                      <td style="text-align:center">
                        <span class="text-xs font-weight-bold" >
                            <a class="btn btn-success" href="{{route('admin.updatePatient', $item->id)}}">update</a>
                            <a class="btn btn-danger" href="{{route('admin.patient.softdeletes', $item->id)}}">delete</a>
                        </span>    
                      </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
               
              </div>
            </div>
            @foreach($patients as $item)
            @empty($item->id)
              <div class="row my-4" >
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                  <div class="card" style="width:147% ; padding:20px ; padding-top:60px ;height:90px " >
                    <span class="font-weight-bolder alert alert-danger" style="text-align:center; margin-top:-37px; font-size:20px; color:white"> No Data Found </span>
                  </div>
                </div>
              </div>
              @endempty
              @endforeach
              
      
    @include('admin.footer')

    
  </main>

    @include('admin.script')

</body>

</html>

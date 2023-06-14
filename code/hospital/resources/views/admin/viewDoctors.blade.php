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
              Doctor table 
              <a href="{{route('admin.adddoctors')}}" class="btn btn-success" style="margin-left:70%"> +add doctor</a>
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
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">age </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">gender</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">speciality</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($doctors as $item)
                    <tr>
                      <td>
                        
                            <img src="doctorimage/{{$item->image}}" alt="doctorimage/{{$item->image}}" style="width:80px; height:80px; border-radius:10px">
                        
                      </td>

                      <td class="align-middle  text-sm">
                        <span class="text-xs font-weight-bold"> {{$item->name}} </span>
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
                        <span class="text-xs font-weight-bold" >{{$item->speciality}}</span>    
                      </td>

                      <td style="text-align:center">
                        <span class="text-xs font-weight-bold" >
                            <a class="btn btn-success" href="{{route('admin.updateDoctor', $item->id)}}">update</a>
                            <a class="btn btn-danger" href="{{route('admin.doctor.softdeletes', $item->id)}}">delete</a>
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

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
          <div class="alert alert-success" style="text-align:center; font-size:15px, width:145%">
            {{session()->get('message')}}
          </div>
        @else
          <div class="card" style="width:146.5% ; padding:20px ; padding-top:60px ;height:90px " >
            <span class="font-weight-bolder mb-0"style="text-align:center; margin-top:-37px; font-size:30px"> 
              Appointment Table
              <a href="{{route('admin.setAppointment')}}" class="btn btn-success" style="margin-left:60%"> +Set Appointment</a> 
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">appointment date</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">patient name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">patient email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">patient phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">message</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SendMail</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($appointments as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-sm">{{$item->date}}</h6>
                        </div>
                      </td>

                      <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="text-xs font-weight-bold">{{$item->name}}</h6>
                        </div>
                      </td>

                      <td class="align-middle  text-sm">
                        <span class="text-xs font-weight-bold"> {{$item->email}} </span>
                      </td>

                      <td style="text-align:center">
                        <span class="text-xs font-weight-bold" >{{$item->number}}</span>    
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold">{{$item->message}}</span>    
                      </td>

                      <td style="text-align:center">
                        <span class="text-xs font-weight-bold" >{{$item->statut}}</span>    
                      </td>

                      
                      

                      <td style="text-align:center">
                        <span class="text-xs font-weight-bold" >
                          <a class="btn btn-primary" href="{{route('admin.Email', $item->id)}}">Send Mail</a>
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

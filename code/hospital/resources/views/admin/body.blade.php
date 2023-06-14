<div class="container-fluid py-4">
      <div class="row" style="margin-bottom:25px">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card" style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%); box-shadow:4px 2px 2px gray; color:white">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Patients</p>
                    <h5 class="font-weight-bolder mb-0">
                      <span class="text-success text-sm font-weight-bolder">{{$patcount}}</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                <img src="logo/patient.png" class="  text-center border-radius-md"  style="height:45px; width:48px; box-shadow: 5px 3px 3px black;background-color:white ;border:1px solid black; padding:3px; border-radius:5px">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card" style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%);  box-shadow:4px 2px 2px gray; color:white">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Doctors</p>
                    <h5 class="font-weight-bolder mb-0">
                      <span class="text-success text-sm font-weight-bolder">{{$doccount}}</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                <img src="logo/doctor.png" class="  text-center border-radius-md"  style="height:45px; width:48px; box-shadow: 5px 3px 3px black;background-color:white ;border:1px solid black; padding:3px; border-radius:5px">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card" style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%); box-shadow:4px 2px 2px gray; color:white">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Medications</p>
                    <h5 class="font-weight-bolder mb-0">
                      <span class="text-success text-sm font-weight-bolder">{{$medcount}}</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                <img src="logo/medications.png" class="  text-center border-radius-md"  style="height:45px; width:48px; box-shadow: 5px 3px 3px black;background-color:white ;border:1px solid black; padding:3px; border-radius:5px">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card" style="background: linear-gradient(to bottom, #8a2be2 0%, #b878ed 100%); box-shadow:4px 2px 2px gray; color:white">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Appointments</p>
                    <h5 class="font-weight-bolder mb-0">
                      <span class="text-success text-sm font-weight-bolder">{{$appcount}}</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="logo/appointment.png" class="  text-center border-radius-md"  style="height:45px; width:48px; box-shadow: 5px 3px 3px black;background-color:white ;border:1px solid black; padding:3px; border-radius:5px">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      



      @if(Auth::user()->usertype=='1')
        <div class="row mt-3">
          <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Patients</h6>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">patient Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Age</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($patient as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          {{$item->name}}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                        {{$item->age}}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                        {{$item->phone}}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                        {{$item->email}}
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Doctors</h6>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">doctor Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Age</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($doctor as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          {{$item->name}}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                        {{$item->age}}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                        {{$item->phone}}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                        {{$item->email}}
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      @else

      <div class="row mt-3">
          <div class="col-lg-13 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Patients</h6>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table  mb-0" >
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">patient Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Age</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    </tr>
                  </thead>
                  <tbody >
                  @foreach($patient as $item)
                    <tr >
                      <td >
                        <div class="d-flex px-2 py-1">
                          {{$item->name}}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                        {{$item->age}}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                        {{$item->phone}}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                        {{$item->email}}
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      

        
      @endif
  </div>
        
        
  
<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
      

      <form class="main-form" action="{{route('user.makeAppointment')}}" method="POST">
        @csrf
        @method('post')
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name" required="">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address.." required="">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control" required="">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select  name="docname" id="departement" class="custom-select">
              <option value="general">Doctor name --- speciality</option>
              @foreach($doctor as $item)
              <option value="{{$item->name}}  ">{{$item->name}} --- {{$item->speciality}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Phone Number" required="">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required=""></textarea>
          </div>
        </div>
        <button type="submit"  class="btn" >Submit Request</button>
      </form>

    </div>
  </div>


  <style>

.btn{
  background-color:#08dca4; 
  padding:13px; 
  border-radius:5px; 
  color:white
}

.btn:hover{
  background-color:gray;
  color:black
}

  </style>
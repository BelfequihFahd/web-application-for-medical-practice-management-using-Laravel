<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div class="container" >
    <br>
<img src="onehealthlogo.png" alt="" style="width:150px; height:100px">
<img src="sante.png" alt="" style="float:right;width:150px; height:100px">
<a href="javascript:window.print()"   class='btn btn-success d-print-none'>download</a>

    <br><br><br>
<h2 style=" text-align:center" >PRESCRIPTION</h2>


<br><br><br>
Date: {{date('Y-m-d')}}
<br>
One Health Cabinet 
<br>
Agadir/Ait melloul
<br> 
inzegan/ait melloul  / 80000
<br> 
0632769073
<br>
<br>


Patient informations :
<br>
  Name: <strong>{{$patient}}</strong> <br>
  Birth date : <strong>{{$birthdate}}</strong> <br>
  Age : <strong>{{$PatAge}}</strong> 
<br><br>

Treatment :
<br>


<div class="container">
<div class="floatLeft">
<table class="table" style="height:50%; width:50%; margin-left:20%" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">Medication</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach($medications as $item )
        <tr>
          <td>{{$item}}</td>
        </tr>
  @endforeach
</tbody>
</table>
</div>

<div class="floatRight">
<table class="table" style="height:50%; width:50%; margin-left:-10%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Usage</th>
    </tr>
  </thead>
  <tbody>
  
      @foreach($usage as $use )
        <tr>
          <td>{{$use}}</td>
        </tr>
      @endforeach
</tbody>
</table>
</div>
</div>

<br>


Doctor Observation :
<br>
{{$observation}}
<br><br>

Sincerely,
<br><br>

<div style=" margin-left:75vw"> Dr.<strong>{{$doctor}}</strong> </div> 
<br><br>

<img src="signature.png" alt="signature" style="width:80px; height:70px; margin-left:80%">
<br>


</div>





<style>
  
.floatLeft { width: 50%; float: left; }
.floatRight {width: 50%; float: right; }
.container { overflow: hidden; }
</style>
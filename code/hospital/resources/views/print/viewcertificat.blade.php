<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div class="container" >
    <br>
<img src="onehealthlogo.png" alt="" style="width:150px; height:100px">
<img src="sante.png" alt="" style="float:right;width:150px; height:100px">

<a href="javascript:window.print()"   class='btn btn-success d-print-none'>download</a>

    <br><br><br><br><br>
<h2 style="text-align:center" class="">Certificate of Work or School Absence</h2>


<br><br><br><br><br>
Date: {{date('Y-m-d')}}
<br>
One Health Cabinet 
<br>
Agadir/Ait melloul l3assima
<br> 
inzegan/ait melloul  / 80000
<br> 
0632769073
<br>
<br>


RE: Name: <strong>{{$patient}}</strong> | Date of Birth: <strong>{{$dateofbirth}}</strong> 
<br>
<br>
Please excuse <strong>{{$patient}}</strong>  from <strong>{{$beginningDate}}</strong>  through <strong>{{$EndingDate}}</strong> .  I have examined <strong>{{$patient}}</strong>  and determined that he/she  has <strong>{{$healthCondition}}</strong>  and needs <strong>{{$days}}</strong>  days off for rest and recovery.
<br><br><br>

Sincerely,
<br><br><br>

<div style=" margin-left:75vw"> Dr.<strong>{{$doctor}}</strong> </div> 
<br><br>

<img src="signature.png" alt="signature" style="width:80px; height:70px; margin-left:80%">
<br>


</div>






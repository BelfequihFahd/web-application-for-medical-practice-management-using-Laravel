<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div class="container" >
    <br>
<img src="onehealthlogo.png" alt="" style="width:150px; height:100px">
<img src="sante.png" alt="" style="float:right;width:150px; height:100px">

<a href="javascript:window.print()"   class='btn btn-success d-print-none'>download</a>

    <br><br><br><br><br>
<h2 style=" text-align:center" >REFERRAL LETTER </h2>


<br><br><br><br>
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
Dear Dr. <strong>{{$Surgeons}}</strong>,
<br><br>
I am referring <strong>{{$patient}}</strong> for a <strong>{{$subject}}</strong> 
<br>
I have been <strong>{{$patient}}</strong>  primary care physician for the past <strong>{{$yearscare}}</strong>  years. 
<br>
I hope you will find <strong>{{$patient}}</strong> a suitable candidate for the <strong>{{$surgery}}</strong>
reduction program. It will provide a tool to assist her/him in <strong>{{$surgery}}</strong>
I anticipate that this will provide her/him with a significantly 
improved quality of life.
<br><br>
Sincerely,
<br><br><br>

<div style=" margin-left:75vw"> Dr.<strong>{{$doctor}}</strong> </div> 
<br><br>

<img src="signature.png" alt="signature" style="width:80px; height:70px; margin-left:80%">
<br>


</div>






<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <?php include 'links.php';?>
  <?php include 'css/style.php';?>
</head>
<body onload="fetch()" >

<nav class="navbar navbar-expand-lg navbar-dark nstyle p-2" >
<a class="navbar-brand pl-4" href="index.php">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-4">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fa fa-arrow-left"></i></a>
      </li>

      
    
  </div>
</nav>




<!--api-->
<section class=" corona container-fluid">
<div class="mb-3">

<h2 class="text-center text-uppercase">Corona Virus Updates</h1>
<div class="table-responsive">
<table class="table table-bordered table table-hover table-dark table-striped text-center" id="tbval">
<tr>

<th>Country</th>
<th>Total Confirmed</th>
<th>Total Recovered</th>
<th>Total Deaths</th>
<th>New Confirmed</th>
<th>New Recovered</th>
<th>New Deaths</th>

</tr>

</table>

<div>
</div>


</section>


       
<script type="text/javascript">

function fetch(){
  $.get("https://api.covid19api.com/summary",

  function (data){
      var tbval = document.getElementById('tbval');
         for(var i=1; i<(data['Countries'].length); i++){
               var x = tbval.insertRow();
               x.insertCell(0);
      tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
      tbval.rows[i].cells[0].style.background ='#011efe';
      tbval.rows[i].cells[0].style.color = '#fff';

      x.insertCell(1)
       tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
      tbval.rows[i].cells[1].style.background ='#f6db5f';

      x.insertCell(2)
       tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
      tbval.rows[i].cells[2].style.background = '#0bff01';


      x.insertCell(3)
       tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
      tbval.rows[i].cells[3].style.background = '#fe0000';

      x.insertCell(4)
       tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
      tbval.rows[i].cells[4].style.background = '#36abb5';

      x.insertCell(5)
       tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
      tbval.rows[i].cells[5].style.background = '#0bff01';

      x.insertCell(6)
       tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
      tbval.rows[i].cells[6].style.background = '#fe0000';
      


    }
  }
  
  
  )
}



</script>




    </body>
</html>

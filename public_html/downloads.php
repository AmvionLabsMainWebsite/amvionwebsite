<?php include 'header.php'?>


<div class="container">
    <div class="row">
        <div class="col-lg-12"></div>
        
    </div>
</div>

<style>

 
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 14%;
  margin: 10px 10px;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content */
.tabcontent {
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}


</style>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center" style="text-decoration: underline; text-underline-offset: 14px;">Amvion Profile</h1>
            <div id="London" class="tabcontent">
  <img src="assets/image/amvion-logo.svg" alt="Amvion Logo" width="20%" height="20%">
  <h2 class="mt-4">Amvion Brochure</h2>
  <a href="pdfDownloads/Amvion-Profile.pdf" download>
    <button class="get-started mt-4">Download</button>
  </a>
</div>

<div id="Paris" class="tabcontent">
    <img src="assets/image/amvion-logo.svg" alt="Amvion Logo" width="20%" height="20%">
  <h2 class="mt-4">Amvion Labs Approach Document</h2>
  <a href="pdfDownloads/Amvion-Labs-Approach-Document.pdf" download>
    <button class="get-started mt-4">Download</button>
  </a>
</div>

<div id="Tokyo" class="tabcontent">
    <img src="assets/image/amvion-logo.svg" alt="Amvion Logo" width="20%" height="20%">
  <h2 class="mt-4">DevOps</h2>
  <a href="pdfDownload/DevOps-Consulting-Services.pdfs" download>
    <button class="get-started mt-4">Download</button>
  </a>
</div>

<div id="Oslo" class="tabcontent"> 
    <img src="assets/image/amvion-logo.svg" alt="Amvion Logo" width="20%" height="20%">
  <h2 class="mt-4">Security and Cyber Assurance</h2>
  <a href="pdfDownloads/Security-And-Cyber-Assurance.pdf" download>
 <button class="get-started mt-4">Download</button>
 </a>
</div>

<div id="sampat" class="tabcontent">
    <img src="assets/image/sampat-logo.png" alt="sampat logo" width="20%" height="20%">
  <h2 class="mt-4">Sampat</h2>
  <a href="pdfDownloads/Sampat-Asset Management.pdf" download>
 <button class="get-started mt-4">Download</button>
 </a>
</div>

<div id="observelite" class="tabcontent">
    <img src="assets/image/ol-logo.webp" alt="observelite logo" width="10%" height="10%">
  <h2 class="mt-4">ObserveLite</h2>
  <a href="pdfDownloads/observeLite - Monitoring.pdf" download>
 <button class="get-started mt-4">Download</button>
 </a>
</div>

<button class="tablink" onclick="openCity('London', this, '#FF7F50')" id="defaultOpen">Amvion</button>
<button class="tablink" onclick="openCity('Paris', this, '#9FE2BF')">Amvion</button>
<button class="tablink" onclick="openCity('Tokyo', this, '#6495ED')">Devops</button>
<button class="tablink" onclick="openCity('Oslo', this, '#CCCCFF')">SCA</button>
<button class="tablink" onclick="openCity('sampat', this, '#FFBF00')">Sampat</button>
<button class="tablink" onclick="openCity('observelite', this, '#DE3163')">ObserveLite</button>



            </div>
        </div>
    </div>
</section>

<script>
function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<?php include 'formpage.php'?>

<?php include 'footer.php'?>
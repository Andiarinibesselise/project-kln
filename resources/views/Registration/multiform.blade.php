<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>

<form id="regForm" action="/action_page.php">
  <h1>Register:</h1>    
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><h2><strong>Identitas(*:wajib):</strong></h2>
    <p><input placeholder="Nama Lengkap.." oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Tempat/Tanggal Lahir ..." oninput="this.className = ''" name="lname"></p>
    <p><input placeholder="Jenis Kelamin..." oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Kebangsaan..." oninput="this.className = ''" name="lname"></p>
  </div>
  <div class="tab"><h2><strong>Tempat Tinggal(*:wajib):</strong></h2>
    <p><input placeholder="Alamat Rumah ..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Kota..." oninput="this.className = ''" name="phone"></p>
    <p><input placeholder="Provinsi/Negara Bagian..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Negara..." oninput="this.className = ''" name="phone"></p>
    <p><input placeholder="Kode Pos..." oninput="this.className = ''" name="email"></p>

  </div>
  <div class="tab"><h2><strong>Tempat Tinggal di Indonesia(*:wajib)</strong></h2>
    <p><input placeholder="Alamat Terkini *" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="Kota" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="Provinsi/Negara Bagian" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Kode Pos" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="Email" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="Telp/Handphone" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Foto Berwarna(jpg/png))" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab"><h2><strong>Informasi Studi</strong></h2>:
    <p><input placeholder="Universitas" oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Program/Jenjang Studi" oninput="this.className = ''" name="pword" type="password"></p>
    <p><input placeholder="Dok Kerja Sama(MOU/MOA)" oninput="this.className = ''" name="uname"></p>
</div>

<div class="tab"><h2><strong>Pengajuan Periode Ijin Belajar:</strong></h2>
    <p><input placeholder="Mulai Belajar" oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Lama Ijin Studi" oninput="this.className = ''" name="pword" type="password"></p>
    <p><input placeholder="Dari" oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Sampai" oninput="this.className = ''" name="uname"></p>
" oninput="this.className = ''" name="phone"></p>
    <p><input placeholder="Tanggal Berakhir..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Scan Passport..." oninput="this.className = ''" name="phone"></p>
  </div>

  <div class="tab"><h2><strong>Dokumen Pendukung(Pendanaan, Rekomendasi, LOA)</strong></h2>
    <p><input placeholder="Jenis Pendanaan" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="Penyedia Beasiswa" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="Jabatan Penjamin" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Surat Pernyataan" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="Letter of Acceptance" oninput="this.className = ''" name="nn"></p>
    
  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>

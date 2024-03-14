<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mice Travelo</title>
    <!--Custom Style Sheet-->
    <link rel="stylesheet" href="css/style-new.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<header class="banner-bg-02">
<div class="container-fluid top-header">
   <div class="container">
    <div class="logo">
        <img src="images/logo_sticky.png"  alt="Mice Travelo">
    </div>
    </div>
</div>
<div class="form">
 <h1>UTTARAKHAND TOUR PACKAGES</h1>
    <p>With Mice Travelo</p>
    <div class="form-contant">       
  <form id="regform" action="send.php">
  <h1>Get Free Quotes</h1>
  <p class="best">Get the Best Holiday Planned by Experts on Lowest Prices!</p>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <label>Travel Date :- </label>
    <p><input placeholder="DD/MM/YY" oninput="this.className = ''" name="date"></p>    
  </div>
  <div class="tab">
     <label>No of Nights :- </label>
    
    <p><select  oninput="this.className = ''" name="nights">
            <option>No of Nights</option>          
            <option>3 Nights</option>
            <option>4 Nights</option>
            <option>5 Nights</option>
            <option>6 Nights</option>
            <option>7 Nights</option>
            <option>8 Nights</option>
            <option>9 Nights</option>
            <option>10 Nights</option>
            <option>11 Nights</option>

        </select></p>
  </div>
<div class="tab">
    <label>No of Adults :- </label>
    <p><select  oninput="this.className = ''" name="adults">
            <option>Adults (12+ Years)</option>
            <option>2 Adults</option>
            <option>3 Adults</option>
            <option>4 Adults</option>
            <option>5 Adults</option>
            <option>6 Adults</option>
            <option>7 Adults</option>
            <option>8 Adults</option>
            <option>9 Adults</option>
            <option>10+ Adults</option>
        </select>
    </p>
    <label>No of Child :- </label>
    <p><select  oninput="this.className = ''" name="childs">
            <option>Child (7-11 Years)</option>
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>

        </select></p>
        <label>No of Child :- </label>
        <p><select  oninput="this.className = ''" name="child">
            <option>Child (up to 6 Years)</option>
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>

        </select></p>
</div>
  <div class="tab">
   <label>Name :- </label>
    <p><input placeholder="Name..." oninput="this.className = ''" name="name"></p>
    <label>E Mail ID :- </label>
    <p><input placeholder="E Mail ID..." oninput="this.className = ''" name="mail"></p>
    <label>Phone No.. :- </label>
    <p><input placeholder="Phone No..." oninput="this.className = ''" name="phone"></p>
    <p><input type="submit" name="Submit" value="Send"></p>        
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
 </div>
</div>  
</header>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

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
    document.getElementById("regform").submit();
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
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})



function calculateCost(){
  var consumption = document.getElementById('consumption').value;
  var days = document.getElementById('days').value;
  var size = document.getElementById('size').value;

  if (size <= 75){
    var xr_dim = 0.13;
  }
  else if (size <= 115){
    var xr_dim = 0.26;
  }
  else {
    var xr_dim = 0.42;
  }

  if(consumption <= 1600){
    var xr_energ = 0.00542;
    var loip_xr = 0.00007;
    var ykw = 0.0169;
  }
  else if (consumption <= 2000){
    var xr_energ = 0.00682;
    var loip_xr = 0.00009;
    var ykw = 0.012;
  }
  else{
    var xr_energ = 0.00822;
    var loip_xr = 0.00011;
    var ykw = 0.0135;
  }

  var cost_dim = (size*xr_dim*days)/365;
  var total_ykw = (consumption*ykw*days)/365;
  var total_xr = consumption*(xr_energ+loip_xr);
  var total_cost = cost_dim+total_ykw+total_xr;
  total_cost = total_cost.toFixed(2);

  document.getElementById('total_cost').innerHTML = "Total Cost : "+ total_cost + "€";
}

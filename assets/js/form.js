var checkbox = document.querySelector("input[id=asansor]");
var asansorService = document.getElementById('asansor-dis')
var anasorDate = document.getElementById('anasorDate')
checkbox.addEventListener('change', function() {
  if (this.checked) {
    asansorService.disabled=false
  } else {
    asansorService.disabled=true
  }
});

asansorService.addEventListener('change', function() {
    if (this.checked) {
        anasorDate.style.display = "block";
    } else {
        anasorDate.style.display = "none";
    }
  });
  
  




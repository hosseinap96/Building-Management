var checkbox = document.querySelector("input[id=elevator]");
var remote = document.querySelector("input[id=remote]");
var emergency = document.querySelector("input[id=emergency]");
var package = document.querySelector("input[id=package]");
var cooler = document.querySelector("input[id=cooler]");
var fire = document.querySelector("input[id=fire]");
var capsule = document.querySelector("input[id=capsule]");

var asansorService = document.getElementById("ser-elevator");
var remoteService = document.getElementById("ser-remote");
var emergencyService = document.getElementById("ser-emergency");
var packageService = document.getElementById("ser-package");
var coolerService = document.getElementById("ser-cooler");
var fireService = document.getElementById("ser-fire");
var capsuleService = document.getElementById("ser-capsule");

var anasorDate = document.getElementById("anasorDate");
var remoteDate = document.getElementById("remoteDate");
var emergencyDate = document.getElementById("emergencyDate");
var packageDate = document.getElementById("packageDate");
var coolerDate = document.getElementById("coolerDate");
var fireDate = document.getElementById("fireDate");
var capsuleDate = document.getElementById("capsuleDate");

checkbox.addEventListener("change", function () {
  if (this.checked) {
    asansorService.disabled = false;
  } else {
    asansorService.disabled = true;
  }
});

asansorService.addEventListener("change", function () {
  if (this.checked) {
    anasorDate.style.display = "block";
  } else {
    anasorDate.style.display = "none";
  }
});

remote.addEventListener("change", function () {
  if (this.checked) {
    remoteService.disabled = false;
  } else {
    remoteService.disabled = true;
  }
});

remoteService.addEventListener("change", function () {
  if (this.checked) {
    remoteDate.style.display = "block";
  } else {
    remoteDate.style.display = "none";
  }
});

emergency.addEventListener("change", function () {
  if (this.checked) {
    emergencyService.disabled = false;
  } else {
    emergencyService.disabled = true;
  }
});

emergencyService.addEventListener("change", function () {
  if (this.checked) {
    emergencyDate.style.display = "block";
  } else {
    emergencyDate.style.display = "none";
  }
});

package.addEventListener("change", function () {
  if (this.checked) {
    packageService.disabled = false;
  } else {
    packageService.disabled = true;
  }
});

packageService.addEventListener("change", function () {
  if (this.checked) {
    packageDate.style.display = "block";
  } else {
    packageDate.style.display = "none";
  }
});

cooler.addEventListener("change", function () {
  if (this.checked) {
    coolerService.disabled = false;
  } else {
    coolerService.disabled = true;
  }
});

coolerService.addEventListener("change", function () {
  if (this.checked) {
    coolerDate.style.display = "block";
  } else {
    coolerDate.style.display = "none";
  }
});

fire.addEventListener("change", function () {
  if (this.checked) {
    fireService.disabled = false;
  } else {
    fireService.disabled = true;
  }
});

fireService.addEventListener("change", function () {
  if (this.checked) {
    fireDate.style.display = "block";
  } else {
    fireDate.style.display = "none";
  }
});

capsule.addEventListener("change", function () {
  if (this.checked) {
    capsuleService.disabled = false;
  } else {
    capsuleService.disabled = true;
  }
});

capsuleService.addEventListener("change", function () {
  if (this.checked) {
    capsuleDate.style.display = "block";
  } else {
    capsuleDate.style.display = "none";
  }
});

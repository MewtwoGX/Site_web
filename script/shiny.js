function toggleClass(element) {
    element.classList.toggle("obtained");

    if (element.style.filter === "contrast(100%)") {
      element.style.filter = "contrast(0%)";
    } else {
      element.style.filter = "contrast(100%)";
    }
  }
  
  var pkmElements = document.querySelectorAll(".pkm.w-100");

  for (var i = 0; i < pkmElements.length; i++) {
    pkmElements[i].addEventListener("click", function() {
      toggleClass(this);
    });
  }
function init() {
	loadDoc();
}

//Charge un document Xml (utilisé pour le viewer javaScript)

 function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("n").innerHTML = this.responseText;		//remplacer "n" par l'id du viewer js
    }
  };
  xhttp.open("GET", "data.xml", true);
  xhttp.send();
}

init();
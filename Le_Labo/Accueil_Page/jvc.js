var imgIndex = 0;

function initGalery() {
	var photos = document.getElementById('galerie_mini');
  	var liens = photos.getElementsByTagName('img');
	var text = document.getElementById('text-img');
	var big_photo = document.getElementById('big_pict');
	big_photo.src = liens[imgIndex].src; // On change l'attribut src de l'image en le remplaçant par la valeur du lien
	big_photo.title = liens[imgIndex].title;
	text.innerHTML = ((imgIndex+1) + '/' + liens.length);

	var main = document.getElementById('main');
	var hidden = document.getElementById('playerJS');
	main.innerHTML = hidden.innerHTML;

}

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('galerie_mini').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "data2.xml", true);
  xhttp.send();

}

function forwardGalery() {
	var photos = document.getElementById('galerie_mini');
  	var liens = photos.getElementsByTagName('img');
	var text = document.getElementById('text-img');
	var big_photo = document.getElementById('big_pict');
	if(imgIndex == liens.length-1)
	{
		imgIndex = 0;
	}
	else
	{
		imgIndex++;
	}
	big_photo.src = liens[imgIndex].src; // On change l'attribut src de l'image en le remplaçant par la valeur du lien
	big_photo.title = liens[imgIndex].title;
	text.innerHTML = ((imgIndex+1) + '/' + liens.length);
}

function backwardGalery() {
	var photos = document.getElementById('galerie_mini');
  	var liens = photos.getElementsByTagName('img');
	var text = document.getElementById('text-img');
	var big_photo = document.getElementById('big_pict');
	if(imgIndex == 0)
	{
		imgIndex = liens.length-1;
	}
	else
	{
		imgIndex--;
	}
	big_photo.src = liens[imgIndex].src; // On change l'attribut src de l'image en le remplaçant par la valeur du lien
	big_photo.title = liens[imgIndex].title;
	text.innerHTML = ((imgIndex+1) + '/' + liens.length);
}

loadDoc();

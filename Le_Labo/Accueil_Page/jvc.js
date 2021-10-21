var imgIndex = 0;
var main = null;
var hidden = null;

function initConnexion() {
	var connexion = document.getElementById('connexion');
	var main = document.getElementById('main');
	main.innerHTML = connexion.innerHTML;	
}

function initGalery() {


	var galery = document.getElementById('playerJS');
	var main = document.getElementById('main');
	main.innerHTML = galery.innerHTML;
	var photos =  document.getElementById('galerie_mini');
  	var liens = photos.getElementsByTagName('img');
	var text = document.getElementById('text-img');
	var picture = document.getElementById('picture');
	picture.src = liens[imgIndex].src; // On change l'attribut src de l'image en le remplaçant par la valeur du lien
	picture.title = liens[imgIndex].title;
	text.innerHTML = ((imgIndex + 1) + '/' + liens.length);
}

function initArticles() {
	var articles = document.getElementById('articles');
	var main = document.getElementById('main');
	main.innerHTML = articles.innerHTML;
}

function initAccueil() {
	var accueil = document.getElementById('accueil');
	var main = document.getElementById('main');
	main.innerHTML = accueil.innerHTML;
}

function initBlog() {
	var blog = document.getElementById('blog');
	var main = document.getElementById('main');
	main.innerHTML = blog.innerHTML;
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

function changePhoto(par1) {
	var photos = document.getElementById('galerie_mini');
  	var liens = photos.getElementsByTagName('img');
	var text = document.getElementById('text-img');
	var picture = document.getElementById('picture');
	if(par1 == 'forward')
	{
		if(imgIndex == liens.length-1)
		{
			imgIndex = 0;
		}
		else
		{
			imgIndex++;
		}
	}
	else if(par1 == 'backward')
	{
		if(imgIndex == 0)
		{
			imgIndex = liens.length-1;
		}
		else
		{
			imgIndex--;
		}
	}
	picture.src = liens[imgIndex].src; // On change l'attribut src de l'image en le remplaçant par la valeur du lien
	picture.title = liens[imgIndex].title;
	text.innerHTML = ((imgIndex + 1) + '/' + liens.length);
}

window.onload = loadDoc();

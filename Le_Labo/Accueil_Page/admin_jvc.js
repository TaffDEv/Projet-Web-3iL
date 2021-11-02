var imgIndex = 0;

function CreateArticle() {
	var div = document.createElement('li');
	div.innerHTML = "<textarea  id='contenu' type='text' name='contenu' class='case_message2'> </textarea>" + " <input type='submit' name='Ajouter' onclick=envoyerBlogMsg() style='padding: 10px; margin-left: 10px;'> </input>";
	// better to use CSS though - just set class
	div.setAttribute('class', 'bulle'); // and make sure myclass has some styles in css
	document.getElementById("bulle2").appendChild(div);	
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

function initAccueil() {
	var accueil = document.getElementById('accueil');
	var main = document.getElementById('main');
	main.innerHTML = accueil.innerHTML;
}

function initBlog() {
	var blog = document.getElementById('blog');
	var main = document.getElementById('main');
	main.innerHTML = blog.innerHTML;
	var msg = document.getElementById('bulleTab');
	msg.innerHTML = "";
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	var data = JSON.parse(this.responseText);
	    	var html = "";
	    	for(var index = 0; index < data.length; index++) {
	    		var user = data[index].user;
	    		var contenu = data[index].contenu;
	    		var id = data[index].id;
	    		html += '<li>user : ' + user + '<p/>message : ' + contenu + '<p/>id : ' + id + '<p/><button class="Button2" type="button" onclick=supprimerBlogMsg(' + id + ')>Delete </button>' + '</li>';
			}
	    	msg.innerHTML = html;//'<li>' + this.responseText + '</li>';
	    }
	  };
	  xhttp.open("GET", "gestionBlog.php?q=Lire", true);
	  xhttp.send();
}

function envoyerBlogMsg() {
	var user = document.getElementById('user').value;
	var contenu = document.getElementById('contenu').value;
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	initBlog();
	    }
	};
	xhttp.open("POST", "gestionBlog.php?q=Envoyer&u=" + user + "&c=" + contenu, true);
	xhttp.send();
}

function supprimerBlogMsg(id) {
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	initBlog();
	    }
	};
	xhttp.open("POST", "gestionBlog.php?q=Supprimer&id=" + id, true);
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

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	createImageList(this);
    }
  };
  xhttp.open("GET", "data.xml", true);
  xhttp.send();
}

function createImageList(xml) {
	var index;
	var xmlDoc = xml.responseXML;
	var tableImage = "";
	var x = xmlDoc.getElementsByTagName("PHOTO");
	for(i = 0; i < x.length; i++) {
		tableImage += "<li><img src='" +
		x[i].getElementsByTagName("IMG")[0].childNodes[0].nodeValue +
    	"' title='" +
	    x[i].getElementsByTagName("DESCRIPTION")[0].childNodes[0].nodeValue +
	    "' /></li>";
	}
	document.getElementById('galerie_mini').innerHTML = tableImage;
}

function uploadImg(name, desc) {
	console.log("AKEOAAAAAA");
}

async function initDocument() {
	await new Promise(resolve => setTimeout(resolve, 5)); //Sleep 5ms
	loadDoc();
	initAccueil();
}

window.onload = initDocument();
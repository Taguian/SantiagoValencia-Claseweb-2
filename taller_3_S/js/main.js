
/*unicamente se llenan cuando se ha escogido algo en el drag and drop, de lo contrario estan vacios y no se muestra nada en el mapa*/
var nombre=[];
var latitud=[];
var longitud=[];

function initialize(r){
	var mapOptions = {
		//Centrado el mapa para empezar en la ciudad de cali
		center: new google.maps.LatLng(3.425675924511549, -76.55270937499995),
		zoom: 10,
		//ver mapa.js para ver la otra forma que encontre para iniciar el google map, esta fue recomendada por Andres Valencia, segun creo la saco del libro
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	//esta forma de ubicar los marcadores fue recomendada por Kammil Carranza, en mapa.js se puede ver como lo estaba haciendo antes
	var map = new google.maps.Map(document.getElementById("map_canvas"),
		mapOptions); 
	var infowindow = new google.maps.InfoWindow();

	for(i = 0;i<nombre.length;i++){
       	var marca=new google.maps.Marker({
       		position: new google.maps.LatLng(latitudes[i],longitudes[i]),
       		map:map
       	});

       	var infowindow = new google.maps.InfoWindow();

     	//Mostrar el nombre del ligar cuando haga mouse over
		//Sacado de la Documentacion de google developers
		//https://developers.google.com/maps/documentation/javascript/events?hl=es
       	google.maps.event.addListener(marca, 'mouseover', (function(marca, i) {
            return function() {
              infowindow.setContent(nombre[i]);
              infowindow.open(map, marca);
            }
          })(marca, i));
       }
}
/*Drag 'n Drop
sacado de http://www.tutorialspoint.com/html5/html5_drag_drop.htm
y del libro
(Link proporcionado por Andres Valencia en la revision del jueves 20 de noviembre)
*/	
function iniciar(){
	var imagenes=document.querySelectorAll('#imageBox > img');
	for(var i = 0; i < imagenes.length; i++){
		imagenes[i].addEventListener('dragstart', arrastrado, false);
		imagenes[i].addEventListener('dragend', finalizado, false);
	}
	soltar = document.getElementById('displayP');
	displayP=soltar.getContext('2d');
	soltar.addEventListener('dragenter', entrando,false);
	soltar.addEventListener('dragleave', saliendo, false);
	soltar.addEventListener('dragover', function(e){e.preventDefault();},false);
	soltar.addEventListener('drop',soltado,false);
}
/*Definicion de funciones*/
function entrando(e){
	e.preventDefault();
	soltar.style.background='rgba(255,0,0,.3)';
	var texto=document.getElementById('texto');
	/*Cuando se pone una imagen en el canvas, se esconde el texto de instruccion*/
	texto.style.visibility='hidden';
}

function saliendo(e){
  	e.preventDefault();
	soltar.style.background='#FFFFFF';
 }

function finalizado(e){
   	elemento=e.target;
   	elemento.style.visibility='hidden';
 }

function arrastrado(e){
   	elemento=e.target;
   	e.dataTransfer.setData('Text',elemento.getAttribute('id'));
   	e.dataTransfer.setDragImage(e.target,62,62);
}

/*Transferencia de Ajax lo cual y en toda sinceridad entendi muy bien
hasta el momento en que sali del salon y se me borro absolutamente todo
Esta parte fue explicada por Sebastain Vazquez quien aprendi muy bien el manejo de Ajax
Junto a Kammil Carranza quien me aclaro dudas sobre la sintaxis
Ambos sacaron esto del libro
*/
/*Segun entiendo, cuando se suelta la imagen (lo que se debe hacer segun la consigna del taller)
es cuando obtengo los datos y procedo a hacer la ejecucion php para llenar los arreglos iniciales y mostrar las cosas
*/
function soltado(e){
	e.preventDefault();
	var id=dataTransfer.getData('Text');//obtiene el data de lo que se dropeo
	var elemento=document.getElementById(id);
	console.log(id);
	var pX = e.pageX - soltar.offsetLeft;
	var pY = e.pageY - soltar.offsetTop;
	displayP.drawImage(elemento,pX-100,pY-100);

	/*Se envia la informacion a un archivo php donde se hacen las evaluaciones pertinentes para traer los puntos necesarios*/
	$.ajax({
		type: "POST",
		url:"data.php",
		data: {marca: id}
	}).done(function(){
		console.log("Solicitud Enviada");
	}).success(function(result){
		console.log("Resultado: "+result);
		var conca = JSON.parse(result);
		console.log("ARREGLO: "+conca.temps.length);
		for(i=0;i<conca.temps.length;i++){
			nombre[i]=conca.temps[i].nomb;
			latitud[i]=conca.temps[i].latit;
			longitud[i]=conca.temps[i].longi;
		}
		initialize();
	}).error(function(error){
		console.log("Error: "+error);
	})

}

window.addEventListener('load',iniciar,false);
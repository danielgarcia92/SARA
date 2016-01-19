var gplayer=[false,false,false,false,false];
var gmachine=[false,false,false,false,false];
var impactp=0;
var impactm=0;
var selp=0;
const MAX=3;

window.onload=iniciar;

function iniciar()
{
	document.getElementById("player").addEventListener('click',seleccionar);
	document.getElementById("machine").addEventListener('click',jugar);
	var num;
	var i=0;
	while(i<3){
		num=Math.floor(Math.random()*5);console.log(num);
		if(gmachine[num]==false){
			gmachine[num]=true;
			i++;
		}
	}
	
	
}

function seleccionar(event)
{
    var id=event.target.id;
	var pos;
	if(id!='player'){
		//pos=(event.target.id).substring(3,4);
        pos=(event.target.id).substring(3);
        gplayer[pos]=true;
		document.getElementById(id).disabled=true;
		document.getElementById(id).style.background='green';
		selp++;
		if(selp==3){
			document.getElementById("player").removeEventListener('click',seleccionar);			
		}
	}
}

function jugar(event)
{
	var id;
	var pos;
	if(selp==3){
	if(event.target.id!='machine'){
		id=event.target.id;
		pos=(event.target.id).substring(4); //mpos#
		document.getElementById(id).disabled=true;
		if(gmachine[pos]){			
			document.getElementById(id).style.background='red';
			impactp++;
			if(impactp==3){
				alert("Gana el Humano");
				location.reload(true);
			}
		}
		else{
			document.getElementById(id).style.background='yellow';
		}
	}
	}
	else{
		alert("seleccione primero sus posiciones");
		}
}
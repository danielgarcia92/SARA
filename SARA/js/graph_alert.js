$(function () {
 var chart;
 $(document).ready(function() {
 chart = new Highcharts.Chart({
 chart: {
     backgroundColor: "#27282B",
 renderTo: 'container'
 },
 title: {
   
     
 text: ('Alertas detectadas en el mes '+mes+' del '+year ),
     
     style: {
         
         color:  "#FFFFFF"
     }
 },
     
     
     
 xAxis: {
 categories: ['Iluminacion encendida','Equipo encendido','Puerta abierta','Aula abierta sin autorización' ]
 },

yAxis: {
				// Pongo el título para el eje de las 'Y'
				title: {
					text: 'Número de alertas',
                    
                    
				}
			},     
     
 tooltip: {
 formatter: function() {
 var s;
 if (this.point.name) { // the pie chart
 s = ''+
 this.point.name +': '+ this.y +' veces';
 } else {
 s = ''+
 this.x +': '+ this.y;
 }
 return s;
 }
 },
 labels: {
 
 },
 series: [{
 type: 'column',
 name: ('Aula: '+aula+' Piso: '+piso),
 
 data: [iluminacion, equipo, puerta, aulaabierta]
 },]
 });
 });
});
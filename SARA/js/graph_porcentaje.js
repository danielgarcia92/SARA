$(function () {
 var chart;
 $(document).ready(function() {
 chart = new Highcharts.Chart({
 chart: {
          backgroundColor: "#27282B",

 renderTo: 'container'
 },
 title: {
 text: ('Porcentaje de uso del aula en el año '+year ),
       style: {
         
         color:  "#FFFFFF"
     }
 },
     
     
     
 xAxis: {
 categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']
 },

yAxis: {
				// Pongo el título para el eje de las 'Y'
				title: {
					text: 'Porcentaje de uso'
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
 name: ('Aula: '+aula+ ' del Piso: '+piso),
 data: [enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre]
 },]
 });
 });
});
'use strict'

var options = {
	seleccione:["-- Seleccione programa --"],
	ingenieria : ["-- Seleccione programa --", "Ingeniería Ambiental","Ingeniería en Software por Ciclos Propedéuticos","Tecnología en Diseño y Desarrollo Web", "Tecnología Agroambiental", "Tecnología en Gestión Informática", "Tecnología en Sistemas por Ciclos Propedéuticos", "Técnica en Sistemas por Ciclos Propedéuticos", "Tecnología en Gestión de Servicios Públicos Domiciliarios"],
	ciencias: ["-- Seleccione programa --", "Profesional en Negocios Internacionales Terminal", "Negocios Internacionales por Ciclos Propedéuticos", "Tecnología en Gestión de Comercio Exterior y Logística por Ciclos Propedéuticos", "Técnico profesional en Procesos de Comercio Exterior y Logística por Ciclos Propedéuticos", "Tecnología en Gestión Comercial", "Técnico Profesional en Procesos Financieros por Ciclos Propedéuticos", "Tecnología en Gestión Financiera por Ciclos Propedéuticos", "Administración Financiera", "Profesional en Administración Comercial", "Contaduría Pública"],
	educacion: ["-- Seleccione programa --" ,"Licenciatura en Educación Preescolar", "Licenciatura en Educación Básica con Énfasis en Humanidades y Lengua Castellana", "Psicología", "Trabajo Social","Tecnología en Gerontología (no ofertado)","Tecnología Promoción del Desarrollo Humano (no ofertado)"],
	derecho: ["-- Seleccione programa --", "Derecho (Programa nuevo)", "Profesional en Criminalística", "Tecnología en Investigación Judicial", "Técnico Profesional en Tanatopraxia", "Tecnología en Histocitotecnología" ], 
}
$(function(){
	var fillSecondary = function(){
		var selected = $('#facultad').val();
		$('#programa').empty();
		options[selected].forEach(function(element,index){
			$('#programa').append('<option value="'+element+'">'+element+'</option>');
		});
	}
	$('#facultad').change(fillSecondary);
	fillSecondary();
});
$(function(){
	var fillSecondary = function(){
		var selected = $('#facultad2').val();
		$('#programa2').empty();
		options[selected].forEach(function(element,index){
			$('#programa2').append('<option value="'+element+'">'+element+'</option>');
		});
	}
	$('#facultad2').change(fillSecondary);
	fillSecondary();
});
$(function(){
	var fillSecondary = function(){
		var selected = $('#facultad3').val();
		$('#programa3').empty();
		options[selected].forEach(function(element,index){
			$('#programa3').append('<option value="'+element+'">'+element+'</option>');
		});
	}
	$('#facultad3').change(fillSecondary);
	fillSecondary();
});
$(function(){
	var fillSecondary = function(){
		var selected = $('#facultad4').val();
		$('#programa4').empty();
		options[selected].forEach(function(element,index){
			$('#programa4').append('<option value="'+element+'">'+element+'</option>');
		});
	}
	$('#facultad4').change(fillSecondary);
	fillSecondary();
});
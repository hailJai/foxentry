// JavaScript Document
function calbal(){
	var current = document.getElementById("current").value;
	var newbal = current - document.getElementById("amount").value;
	document.getElementById("new").value = newbal;
}
function calbalprof(){
	var current = document.getElementById("current").value;
	var points = document.getElementById("pamount").value;
	var items = document.getElementById("item").value;
	var newbal = current - ( points * items);
	document.getElementById("bal").value = newbal;
}
function indepen(){
	var total = document.getElementById("tpoints").value;
	var nreci = document.getElementById("maxr").value;
	var indip = total / nreci;
	document.getElementById("ipoints").value = indip;
}
function checkbal(){
	var current = document.getElementById("current").value;
	var points = document.getElementById("pamount").value;
	var items = document.getElementById("item").value;
	var newbal = ( points * items);
	
	if(newbal > current)
		{
			alert('You do not have enough balance!');
			frmAdd.item.focus(); 
			return false;

		}
	return true
}
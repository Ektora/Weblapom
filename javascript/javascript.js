//"use strict";
function adatbetoltesLakohely(){
	skillDateInterval();
	skillDate();
	kitolt();
	kitoltSkill();
	setInterval(actualtime,1000);
};
function adatbetoltesAboutMe(){
	skillDateInterval();
	skillDate();
	setInterval(actualtime,1000);
	kitoltSkill();
};
function skillDate(){
	try{
	var elem = document.getElementById("skilldate");
	var year,mon,day, datum = new Date();
	year=datum.getFullYear();
	mon=datum.getMonth()+1;
	day=datum.getDate();
	if(mon<10){
		mon = "0" + mon;
	}
	if(day<10){
		day = "0" + day;
	}
	datum = year + ". " + mon + ". " + day + ".";
	//datum = (datum.getFullYear() + ". " + Number(datum.getMonth()+1) + ". " +datum.getDate()+".");
	elem.innerHTML = datum;
	}
	catch(err){
	alert("Baj van a skillDate() függvénnyel: " + err.message);
}
}

function actualtime(){
	var date = new Date();
	var hour, min, sec;
	hour = date.getHours();
	min = date.getMinutes();
	sec = date.getSeconds();
	if(hour<10){
		hour = "0" + hour;
	}
	if(min<10){
		min = "0" + min;
	}
	if(sec<10){
		sec = "0" + sec;
	}
	document.getElementById("actualtime").innerHTML =
	hour + ":" +
	min + ":" +
	sec;
	

}

function skillDateInterval(){
	try{
	var jelenDatum = new Date();
	var kezdoDatum = new Date("2020-10-22");
	var nap = jelenDatum - kezdoDatum;
	nap=(Math.floor(nap/1000/60/60/24));
	var ev = Math.floor(nap/365);
	nap =nap%365;
	var ho = Math.floor(nap/30);
	nap = nap%30;
	//var elem = document.getElementById("skilldateinterval");
	var datum = " A honlapot fejlesztem:<br>" + ev + " éve " + ho + " hónapja " + nap + " napja";
	$("#skilldateinterval").html(datum);
	var elem = $("#skilldateinterval").html();
	if((nap%2)===0){
		//elem.style.color = "#3D1864";
		$("#skilldateinterval").css("color","#3D1864");
	}
	else{
		//elem.style.color = "#678A1F";
		$("#skilldateinterval").css("color","#678A1F");
	}
}
	catch(err){
	alert("Baj van a skillDateInterval() függvénnyel: " + err.message);
}
}

var skills = [60,50,40,5,40], skillsname=["html","css","js","php","sql"];
function kitoltSkill(){
	var i=0, length=skillsname.length, elem;
	for(i;i<length;i++){
		elem=document.getElementById(skillsname[i]);
		elem.innerHTML="" + skills[i] + "%";
	}
}

// Az állatok nevei, korai
class Animandgard{
	constructor(sorszam,name,year){
	this.sorszam=sorszam;
	this.name=name;
	this.year=year;
	}
	age(){
	let date = new Date();
	return date.getFullYear() - this.year;
	}
}

var animals = [];
	animals.push( new Animandgard(1,"Mazsola",2007));
	animals.push( new Animandgard(2,"Burkus",2013));
	animals.push( new Animandgard(3,"Vakarcs",2020));
	animals.push( new Animandgard(4,"Mirci",2017));
	animals.push( new Animandgard(5,"Tigris",2018));
	animals.push( new Animandgard(6,"Bolyhos",2018));
	animals.push( new Animandgard(7,"Falánk",2019));
	animals.push( new Animandgard(8,"Zéró",2019));

function kitolt(){
	var nevek, korok;
	try{
	//nevek = document.getElementById("animname1");
	//korok = document.getElementById("animage1");
	nevek = document.getElementsByClassName("animname");
	korok = document.getElementsByClassName("animage");
	for(let i=0;i<nevek.length;i++){
	
	nevek[i].innerHTML = animals[i].name;
	korok[i].innerHTML = "Kor: " + animals[i].age() + " év";
	}
	}
	catch(err){
	alert(err.message);
	}
}
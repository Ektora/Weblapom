"use strict";
function adatbetoltesLakohely(){
	skillDateInterval();
	skillDate();
	kitolt();
	kitoltSkill();
};
function adatbetoltesAboutMe(){
	kitoltSkill();
};
function skillDate(){
	try{
	var elem = document.getElementById("skilldate");
	var datum = new Date();
	datum = (datum.getFullYear() + ". " + Number(datum.getMonth()+1) + " " +datum.getDate()+".");
	elem.innerHTML = datum;
	}
catch(err){
	alert("Baj van a skillDate() függvénnyel: " + err.message);
}
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
	var elem = document.getElementById("skilldateinterval");
	var datum = " A honlapot fejlesztem:<br>" + ev + " éve " + ho + " hónapja " + nap + " napja";
	elem.innerHTML = datum;
	if((nap%2)===0){
		elem.style.color = "#3D1864";
	}
	else{
		elem.style.color = "#678A1F";
	}
}
	catch(err){
	alert("Baj van a skillDateInterval() függvénnyel: " + err.message);
}
}

var skills = [60,50,10,0,40], skillsname=["html","css","js","php","sql"];
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
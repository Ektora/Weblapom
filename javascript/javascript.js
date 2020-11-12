window.onload=function(){
	skillDateInterval();
skillDate();
};
function skillDate(){
	var elem = document.getElementById("skilldate");
	var datum = new Date();
	datum = (datum.getFullYear() + ". " + Number(datum.getMonth()+1) + " " +datum.getDate()+".");
	elem.innerHTML = datum;
}
function skillDateInterval(){
	var jelenDatum = new Date();
	var kezdoDatum = new Date("2020-10-22");
	var nap = jelenDatum - kezdoDatum;
	nap=(Math.floor(nap/1000/60/60/24));
	var ev = parseInt(nap/365);
	nap =nap%365;
	var ho = parseInt(nap/30);
	nap = nap%30;
	var elem = document.getElementById("skilldateinterval");
	elem.innerHTML = "Nem tudom mi a baj";
	var datum = " A honlapot fejlesztem:<br>" + ev + " éve " + ho + " hónapja " + nap + " napja";
	elem.innerHTML = datum;
	if((nap%2)===0){
		elem.style.color = "#3D1864";
	}
	else{
		elem.style.color = "#678A1F";
	}
}

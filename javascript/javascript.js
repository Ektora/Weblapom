window.onload=function(){
	skillDate();
	skillDateInterval();
}
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
	datum = " A honlapot fejlesztem:<br>" +
	+ ev + " éve " + ho + " hónapja " + nap + " napja";
	elem.innerHTML = datum;
	if((nap%2)==0){
		elem.style.color = "#3D1864";
	}
	else{
		elem.style.color = "#678A1F";
	}
}
function h3Szinez() {
    var randomszin;
    var elem;
    function randomszinez() {
        var rnd = Math.random();
        return Math.floor(rnd * 2);
    }
    randomszin = randomszinez();
    elem = document.getElementById('valtszin');
    if (randomszin < 1) {
        elem.style.color = "#4b4b97";
    }
    else {
        elem.style.color = "#5a1539";
    }
}
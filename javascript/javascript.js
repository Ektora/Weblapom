window.onload=function(){
	skillDate();
}
function skillDate(){
	var datum = new Date();
	var elem = document.getElementById("skilldate");
	var datum = (datum.getFullYear() + ". " + Number(datum.getMonth()+1) + " " +datum.getDate()+".");
	elem.innerHTML = datum;
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
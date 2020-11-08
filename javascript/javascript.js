window.onload = function () {
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
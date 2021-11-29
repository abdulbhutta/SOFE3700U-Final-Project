(function() {
	"use strict";

	var button1 = document.getElementById('expandbutton1');
    button1.onclick = function() {
        var div = document.getElementById('details1');
        if (div.style.display !== 'none') {
            div.style.display = 'none';
		    document.getElementById('expandbutton1').innerHTML = "Show Details " + "<i class='fas fa-angle-down'></i>";
        }
        else {
            div.style.display = 'flex';
		    document.getElementById('expandbutton1').innerHTML = "Hide Details " + "<i class='fas fa-angle-up'></i>";
        }
    }

    var button2 = document.getElementById('expandbutton2');
    button2.onclick = function() {
        var div = document.getElementById('details2');
        if (div.style.display !== 'none') {
            div.style.display = 'none';
		    document.getElementById('expandbutton2').innerHTML = "Show Details " + "<i class='fas fa-angle-down'></i>";
        }
        else {
            div.style.display = 'flex';
		    document.getElementById('expandbutton2').innerHTML = "Hide Details " + "<i class='fas fa-angle-up'></i>";
        }
    }
    
    var button3 = document.getElementById('expandbutton3');
    button3.onclick = function() {
        var div = document.getElementById('details3');
        if (div.style.display !== 'none') {
            div.style.display = 'none';
		    document.getElementById('expandbutton3').innerHTML = "Show Details " + "<i class='fas fa-angle-down'></i>";
        }
        else {
            div.style.display = 'flex';
		    document.getElementById('expandbutton3').innerHTML = "Hide Details " + "<i class='fas fa-angle-up'></i>";
        }
    }

    
    var button4 = document.getElementById('expandbutton4');
    button4.onclick = function() {
        var div = document.getElementById('details4');
        if (div.style.display !== 'none') {
            div.style.display = 'none';
		    document.getElementById('expandbutton4').innerHTML = "Show Details " + "<i class='fas fa-angle-down'></i>";
        }
        else {
            div.style.display = 'flex';
		    document.getElementById('expandbutton4').innerHTML = "Hide Details " + "<i class='fas fa-angle-up'></i>";
        }
    }

    var button5 = document.getElementById('expandbutton5');
    button5.onclick = function() {
        var div = document.getElementById('details5');
        if (div.style.display !== 'none') {
            div.style.display = 'none';
		    document.getElementById('expandbutton5').innerHTML = "Show Details " + "<i class='fas fa-angle-down'></i>";
        }
        else {
            div.style.display = 'flex';
		    document.getElementById('expandbutton5').innerHTML = "Hide Details " + "<i class='fas fa-angle-up'></i>";
        }
    }

    var button6 = document.getElementById('expandbutton6');
    button6.onclick = function() {
        var div = document.getElementById('details6');
        if (div.style.display !== 'none') {
            div.style.display = 'none';
		    document.getElementById('expandbutton6').innerHTML = "Show Details " + "<i class='fas fa-angle-down'></i>";
        }
        else {
            div.style.display = 'flex';
		    document.getElementById('expandbutton6').innerHTML = "Hide Details " + "<i class='fas fa-angle-up'></i>";
        }
    }
;

})();
$(document).ready()

$('.dis')
	.on('click',
		function () {
			$('.header-icons-noti-noti')
				.hide()
		}
	)

function openA(evt, formName) {
	// Declare all variables
	var i, tabcontents, tablink;

	// Get all elements with class="tabcontent" and hide them
	tabcontents = document.getElementsByClassName("tabcontents");
	for (i = 0; i < tabcontents.length; i++) {
		tabcontents[i].style.display = "none";
	}

	// Get all elements with class="tablinks" and remove the class "active"
	tablink = document.getElementsByClassName("tablink");
	for (i = 0; i < tablink.length; i++) {
		tablink[i].className = tablink[i].className.replace(" active", "");
	}

	// Show the current tab, and add an "active" class to the button that opened the tab
	document.getElementById(formName).style.display = "block";
	evt.currentTarget.className += " active";
};



function openCity(evt, cityName) {
	// Declare all variables
	var i, tabcontent, tablinks;

	// Get all elements with class="tabcontent" and hide them
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}

	// Get all elements with class="tablinks" and remove the class "active"
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}

	// Show the current tab, and add an "active" class to the button that opened the tab
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
};



// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen1").click();




function toggle_visibility(id) {
	var e = document.getElementById(id);

	if (e.style.display === 'block') {
		e.style.display = 'none';
		$("#chng").find('span').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');

	} else {
		e.style.display = 'block';
		$("#chng").find('span').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
	}
};




$(document).ready(function () {
	$("body").mouseup(function (e) {
		var subject = $("#myForm");

		if (e.target.id !== subject.attr('id') && !subject.has(e.target).length) {
			subject.fadeOut();
		}

	});
});



$(document).ready(function () {
	$("body").mouseup(function (e) {
		var subject = $("#myCart");

		if (e.target.id !== subject.attr('id') && !subject.has(e.target).length) {
			subject.fadeOut();
		}

	});
});


$(document).ready(function () {
	$("body").mouseup(function (e) {
		var subject = $("#myWishlist");

		if (e.target.id !== subject.attr('id') && !subject.has(e.target).length) {
			subject.fadeOut();
		}

	});
});


$(document).ready(function () {
	$("body").mouseup(function (e) {
		var subject = $("#myReset");

		if (e.target.id !== subject.attr('id') && !subject.has(e.target).length) {
			subject.fadeOut();
		}

	});
});

function openSearch() {
	document.getElementById("mySearch").style.display = "block";
};

function closeSearch() {
	document.getElementById("mySearch").style.display = "none";
};

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function () {
	output.innerHTML = this.value;
};

var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
	selElmnt = x[i].getElementsByTagName("select")[0];
	/*for each element, create a new DIV that will act as the selected item:*/
	a = document.createElement("DIV");
	a.setAttribute("class", "select-selected");
	a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
	x[i].appendChild(a);
	/*for each element, create a new DIV that will contain the option list:*/
	b = document.createElement("DIV");
	b.setAttribute("class", "select-items select-hide");
	for (j = 0; j < selElmnt.length; j++) {
		/*for each option in the original select element,
		create a new DIV that will act as an option item:*/
		c = document.createElement("DIV");
		c.innerHTML = selElmnt.options[j].innerHTML;
		c.addEventListener("click", function (e) {
			/*when an item is clicked, update the original select box,
			and the selected item:*/
			var y, i, k, s, h;
			s = this.parentNode.parentNode.getElementsByTagName("select")[0];
			h = this.parentNode.previousSibling;
			for (i = 0; i < s.length; i++) {
				if (s.options[i].innerHTML === this.innerHTML) {
					s.selectedIndex = i;
					h.innerHTML = this.innerHTML;
					y = this.parentNode.getElementsByClassName("same-as-selected");
					for (k = 0; k < y.length; k++) {
						y[k].removeAttribute("class");
					}
					this.setAttribute("class", "same-as-selected");
					break;
				}
			}
			h.click();
		});
		b.appendChild(c);
	}
	x[i].appendChild(b);
	a.addEventListener("click", function (e) {
		/*when the select box is clicked, close any other select boxes,
		and open/close the current select box:*/
		e.stopPropagation();
		closeAllSelect(this);
		this.nextSibling.classList.toggle("select-hide");
		this.classList.toggle("select-arrow-active");
	});
}

function closeAllSelect(elmnt) {
	/*a function that will close all select boxes in the document,
	except the current select box:*/
	var x, y, i, arrNo = [];
	x = document.getElementsByClassName("select-items");
	y = document.getElementsByClassName("select-selected");
	for (i = 0; i < y.length; i++) {
		if (elmnt === y[i]) {
			arrNo.push(i);
		} else {
			y[i].classList.remove("select-arrow-active");
		}
	}
	for (i = 0; i < x.length; i++) {
		if (arrNo.indexOf(i)) {
			x[i].classList.add("select-hide");
		}
	}
};
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

filterSelection("all");

function filterSelection(c) {
	var x, i;
	x = document.getElementsByClassName("filterDiv");
	if (c === "all") c = "";
	for (i = 0; i < x.length; i++) {


		w3RemoveClass(x[i], "show");

		if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
	}
}

function w3AddClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) === -1) {
			element.className += " " + arr2[i];
		}
	}
}

function w3RemoveClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
			arr1.splice(arr1.indexOf(arr2[i]), 1);
		}
	}
	element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn-style");
for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function () {
		var current = document.getElementsByClassName("btn-style");
		for (i = 0; i < current.length; i++) {
			current[i].className = current[i].className.replace(" active", "");

		}
		this.className += " active";
	});
};


var coll = document.getElementsByClassName("collapsible");
var i;

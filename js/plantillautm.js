$(".carousel").carousel();


/* Navbar 
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});*/

var lis = $(".navbar-nav>li");
lis.each(function(i){
	var string_class = lis[i].className.slice(0,-17);
	lis[i].className = string_class+" dropdown";
});

var lis_submenu = $(".navbar-nav li");
lis_submenu.each(function(i){
	console.log(lis_submenu[i].childElementCount);
	if(lis_submenu[i].childElementCount>1){
		//console.log(lis_submenu[i].childNodes[0].innerText); 
		lis_submenu[i].childNodes[0].innerHTML += " <span class='oi oi-document'></span>";
	}
});

//breakdown the labels into single character spans
$(".flp label").each(function(){
	var sop = '<span class="ch">'; //span opening
	var scl = '</span>'; //span closing
	//split the label into single letters and inject span tags around them
	$(this).html(sop + $(this).html().split("").join(scl+sop) + scl);
	//to prevent space-only spans from collapsing
	$(".ch:contains(' ')").html("&nbsp;");
})

var d;
//animation time
$(".flp input").focus(function(){
	//calculate movement for .ch = half of input height
	var tm = $(this).outerHeight()/2 *-1 + "px";
	//label = next sibling of input
	//to prevent multiple animation trigger by mistake we will use .stop() before animating any character and clear any animation queued by .delay()
	$(this).next().addClass("focussed").children().stop(true).each(function(i){
		d = i*50;//delay
		$(this).delay(d).animate({top: tm}, 200, 'easeOutBack');
	})
})
$(".flp input").blur(function(){
	//animate the label down if content of the input is empty
	if($(this).val() == "")
	{
		$(this).next().removeClass("focussed").children().stop(true).each(function(i){
			d = i*50;
			$(this).delay(d).animate({top: 0}, 500, 'easeInOutBack');
		})
	}
})



const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
    	navbar.classList.add("show");
    	menuBtn.classList.add("hide");
    	body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
    	body.classList.remove("disabled");
    	navbar.classList.remove("show");
    	menuBtn.classList.remove("hide");
    }



//walidacja kapitan
$("#kname").focusout(function(){
	if(check_name( $("#kname").val() )){
		$("#captain-name").hide();
	}
	else{
		$("#captain-name").show();
	}
});

$("#ksurname").focusout(() => {
	if(check_name( $("#ksurname").val() )){
		$("#captain-surname").hide();
	}
	else{
		$("#captain-surname").show();
	}
});

$("#kpseudo").focusout(() => {
	if(check_nick( $("#kpseudo").val() )){
		$("#captain-nick").hide();
	}
	else{
		$("#captain-nick").show();
	}
});

$("#kemail").focusout(() => {
	if(check_email( $("#kemail").val() )){
		$("#captain-email").hide();
	}
	else{
		$("#captain-email").show();
	}
});

$("#kclass").focusout(() => {
	if(check_class( $("#kclass").val() )){
		$("#captain-class").hide();
	}
	else{
		$("#captain-class").show();
	}
});

//funkcje do sprawdzania
function check_name(name){
	var pattern = /^[a-zA-Z-ĄąĆćĘęŁłŃńÓóŚśŹźŻż]*$/;
	if(pattern.test(name) && name !== '')
	{
		return true;
	}
	else{
		return false;
	}
}

function check_nick(nick){
	var pattern = /^[0-9a-zA-Z-ĄąĆćĘęŁłŃńÓóŚśŹźŻż_]*$/;
	if(pattern.test(nick) && nick !== '')
	{
		return true;
	}
	else{
		return false;
	}
}

function check_email(email){
	var pattern = /^([a-z])+\.([0-9a-z-])+\@(zse.krakow.pl)$/;
	if(pattern.test(email) && email !== '')
	{
		return true;
	}
	else{
		return false;
	}
}

function check_class(classSchool){
	var pattern = /^[0-9a-zA-Z]*$/;
	if(pattern.test(classSchool) && classSchool !== '')
	{
		return true;
	}
	else{
		return false;
	}
}



const submitBtn = document.getElementById('submit');
submitBtn.addEventListener('click', () => {
	var captain_name = check_name( $("#kname").val() );
	var captain_surname = check_name( $("#ksurname").val() );
	var captain_nick = check_nick( $("kpseudo").val() );
	var captain_email = check_email( $("#kemail").val() );
	var captain_class = check_class( $("#kclass").val() );

	var captain_name1 = $("#kname").val();
	var captain_surname1 = $("#ksurname").val();
	var captain_nick1 = $("#kpseudo").val();
	var captain_email1 = $("#kemail").val();
	var captain_class1 = $("#kclass").val();

	//sprawdzanie czy mozna wyslac dane
	if(captain_name && captain_surname && captain_nick && captain_email && captain_class){
		$.ajax({
			type: 'POST',
			url: 'send.php',
			cache: false,
			data: {
				name: captain_name1,
				surname: captain_surname1,
				email: captain_email1,
				nick: captain_nick1,
				class: captain_class1,
			},
			success: function(response){
				if(response == "work"){
					alert("Dziękujemy za rejestrację! Jeśli zaproszenie nie dotrze skontaktuj się z nami przez facebook'a!");
				}
				else if(response == "email"){
					alert("Taki email został już użyty!");
				}
				else if(response == "nick"){
					alert("Taki nick został już użyty!");
				}
				else{
					alert("Błąd serwera! Skontaktuj się z administracją!");
				}
			}
		});
	}
});
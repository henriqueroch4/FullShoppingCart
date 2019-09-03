$(document).ready( function(){
	console.log('carregado');
    accountHover();
})



function accountHover(){
    dropdown = document.getElementById('account-dropdown');
    $('.holder-account-icon').mouseover(function (){
		dropdown.style.display="block";
    }).mouseout(function(){
		dropdown.style.display="none";
    });
}

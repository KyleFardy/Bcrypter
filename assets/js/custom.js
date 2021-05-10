$(function() {
    try {
        document.getElementById("encrypt-button").addEventListener("click", ENCRYPT_HASH);
    } catch {
        console.log("Failed To Init Encrypt Button Button!");
    }
	try {
        document.getElementById("check-button").addEventListener("click", CHECK_HASH);
    } catch {
        console.log("Failed To Init Encrypt Button Button!");
    }
});
function ENCRYPT_HASH(){
	$.post('ajax.php?action=encrypt', $("#encrypt_form").serialize(), function(response){
        $("#encrypt-response").html(response);
		if(response.includes("Please Enter A String To Encrypt!")){
			setTimeout(function(){ $("#encrypt-response").html(''); }, 3000);
		}
    });
}
function CHECK_HASH(){
	$.post('ajax.php?action=check', $("#check_form").serialize(), function(response){
        $("#check-response").html(response);
		if(response.includes("Please Enter A String To Check!")){
			setTimeout(function(){ $("#check-response").html(''); }, 3000);
		}
    });
}
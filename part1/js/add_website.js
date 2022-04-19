 function validateForm() {
    var website_link = document.getElementById("website_link").value;
    if(website_link == ""){
    	alert("please enter website link");
    	return false;
    }
    var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
    '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
    '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
    '(\\#[-a-z\\d_]*)?$','i'); 
    if(!pattern.test(website_link)){
    	alert("Enter valid website link with https");
    	return false;
    }

    return true;
}
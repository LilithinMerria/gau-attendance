function formCheck(){
    var email1 = document.getElementById('emailCheck');
    var email2 = document.getElementById('emailRecheck');
    if(email1.value != email2.value){
        alert("Please match the emails");
        return false;
    }
}

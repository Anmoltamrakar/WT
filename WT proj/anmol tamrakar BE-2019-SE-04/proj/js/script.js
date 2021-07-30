function validateForm(){
    var name = document.forms["messageForm"]["name"].value;
    var country=document.forms["messageForm"]["country"].value;
    var email=document.forms["messageForm"]["email"].value;
    var gender=document.forms["messageForm"]["Gender"].value;
    var message=document.forms["messageForm"]["message"].value;
    if(name =="" || country =="" || email =="" || message ==""){
        alert("Empty fields found. Please fill the form.");
    }
    else{
        alert("Thank you for messaging me.");
    }
}
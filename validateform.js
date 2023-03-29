function validateForm() {
  

  var sname = document.getElementById('name').value;
    var smatric = document.getElementById('matric').value;
    var scaddress = document.getElementById('caddress').value;
    var shaddress = document.getElementById('haddress').value;
    var semail = document.getElementById('email').value;
    var sphone = document.getElementById('phone').value;
    var shphone = document.getElementById('hphone').value;

    var snameRGEX = /^[^0-9]*$/;
    var smatricRGEX = /^[0-9]{6,6}$/; 
    var scaddressRGEX = /^.{0,50}$/;
    var shaddressRGEX = /^.{0,50}$/;
    var semailRGEX = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var sphoneREGEX = /^\+?[0-9]{1,3}[-. (]*([0-9]{1,3})[-. )]*([0-9]{2,4})[-. ]*([0-9]{4})$/;
    var shphoneREGEX = /^\+?[0-9]{1,3}[-. (]*([0-9]{1,3})[-. )]*([0-9]{2,4})[-. ]*([0-9]{4})$/;

    var snameResult = snameRGEX.test(sname);
    var smatricResult = smatricRGEX.test(smatric);
    var scaddressResult = scaddressRGEX.test(scaddress);
    var shaddrressResult = shaddressRGEX.test(shaddress);
    var semailResult = semailRGEX.test(semail);
    var sphoneResult = sphoneREGEX.test(sphone);
    var shphoneResult = shphoneREGEX.test(shphone);

    if(snameResult == false){
        alert('Please enter your valid name');
        return false; 
    }

    if(smatricResult == false){
        alert('Please enter your valid matric number');
        return false; 
    }

    if(scaddressResult == false){
        alert('Your address is too long');
        return false; 
    }

    if(shaddrressResult == false){
        alert('Your address is too long');
        return false; 
    }

    if(sphoneResult == false){
        alert('Please enter valid phone number');
        return false; 
    }

    if(shphoneResult == false){
        alert('Please enter valid phone number');
        return false; 
    }

    return true;
}
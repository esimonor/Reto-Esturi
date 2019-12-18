$(document).ready(function () {
    $('#errorName').hide();
    $('#registro').keyup(function () {
        let name = document.getElementById('name').value;
        let lastname = document.getElementById('lastname').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let confirmpassword = document.getElementById('password-confirm').value;
        let longitudcon = password.length;
        let valid = 0;

        if (name =="" || lastname =="" || email==""){
            
        }
        else{
            valid += 1;
        }
        
        if (longitudcon<8){
            
        }
        else{
            valid+=1;
        }

        if (password != confirmpassword){
           
        }
        else{
            valid+=1;
        }

        if (valid == 3){
            $("#Registrarse").attr("disabled", false);
        }
        else{
            $("#Registrarse").attr("disabled", true);
        }
        
    });

    /*let emailVer = (email) => {
        var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(regex.test(email))
            return false;
        else
            return true;
    }
    }
    pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/"
    */
    
});
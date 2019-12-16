$(document).ready(function () {
    $('#errorName').hide();
    $('#registro').onkeyup(function () {
        let name = document.getElementById('name').value;
        let lastname = document.getElementById('lastname').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let confirmpassword = document.getElementById('password-confirm').value;

        if (name=="" || lastname=="" || email=="" || password=="" || confirmpassword==""){
            $("#Registrarse").attr("disabled",true);
        }
        else if(password!=confirmpassword){
            $("#Registrarse").attr("disabled",true);
        }
        else {
            $("#Registrarse").attr("disabled",false);
        }

        /*if (empty(name) || empty(lastname) || empty(email) || empty(password) || empty(confirmpassword) ) {
            $('#Registrarse').prop('disabled', true);
            
            console.log("No dejes los campos vacios");
        }
        else if (emailVer(email)) {
            console.log("email no valido");
        }
        else if (passwords(password, confirmpassword)) {
            console.log("Las contraseñas son diferentes");
        }
        else if(rolVer() === "select"){
            console.log("Selecciona un rol");
        }
        else {
            console.log('si');
            $('#Registrarse').prop('disabled', false);
        }*/
    });

    /*let empty = (string) => {
        if (string === "")
            return true
        else
            return false
    }

    let emailVer = (email) => {
        var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(regex.test(email))
            return false;
        else
            return true;
    }

    let passwords = (password, confirmpassword) => {
        if (password == confirmpassword)
            return false;
        else
            return true;
    }

    //Funcion que devuelve el valor del select (rol) seleccionado
    let rolVer = () => {
        let parrafo = $('#rol').val();
        return parrafo
    }*/
    
});
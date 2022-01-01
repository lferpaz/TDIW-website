$(document).ready(function() {
    let searchParams = new URLSearchParams(window.location.search)
    if (searchParams.has('error')) {
        if (searchParams.get('error') == 'login') {
            alert("El usuaio o la contraseña son incorrectos");
        } else if (searchParams.get('error') == 'signup') {
            alert("El usuario ya existe");
        }
    }
    $("#form-signup").submit(function(e) {
        var dni = $(this).find("input[name='dni']").val();
        var name = $(this).find("input[name='name']").val();
        var last_name = $(this).find("input[name='last_name']").val();
        var mail = $(this).find("input[name='mail']").val();
        var phone = $(this).find("input[name='phone']").val();
        var direction = $(this).find("input[name='direction']").val();
        var poblacion = $(this).find("input[name='poblacion']").val();
        var cp = $(this).find("input[name='cp']").val();
        var password = $(this).find("input[name='password']").val();
        var password_confirmation = $(this).find("input[name='password_confirmation']").val();
        var correct = true;

        if(dni.length != 8) {
            setErrorFor($('#dni-form'), "El DNI debe tener 8 caracteres");
            correct = false;
        } else if (!isNumeric(dni)) {
            setErrorFor($('#dni-form'), "El DNI debe contener solo números");
            correct = false;
        } else {
            setSuccessFor($('#dni-form'));
        }
        
        if (name.length < 3 || name.length > 15) {
            setErrorFor($('#name-form'), "El nombre debe tener al menos 3 caracteres y como máximo 15 caracteres");
            correct = false;
        } else if (!isAlpha(name)) {
            setErrorFor($('#name-form'), "El nombre debe contener solo letras");
            correct = false;
        } else  {
            setSuccessFor($('#name-form'));
        }

        if (last_name.length != 0 && (last_name.length < 3 || last_name.length > 15)) {
            setErrorFor($('#last_name-form'), "El apellido debe tener al menos 3 caracteres y como máximo 15 caracteres");
            correct = false;
        } else {
            setSuccessFor($('#last_name-form'));
        }

        if (mail.length == 0) {
            setErrorFor($('#mail-form'), "El campo Correo es obligatorio");
            correct = false;
        } else if (!isEmail(mail)) {
            setErrorFor($('#mail-form'), "El correo debe tener un formato válido");
            correct = false;
        } else {
            setSuccessFor($('#mail-form'));
        }
        if (phone.length != 0 && (phone.length != 9 || !isNumeric(phone))) {
            setErrorFor($('#phone-form'), "El teléfono debe tener 9 caracteres");
            correct = false;
        } else {    
            setSuccessFor($('#phone-form'));
        }
        if (direction.length < 10 || direction.length > 50) {
            setErrorFor($('#direcction-form'), "La dirección debe tener al menos 10 caracteres y como máximo 50 caracteres");
            correct = false;
        } else {
            setSuccessFor($('#direcction-form'));
        }
        if (poblacion.length < 5 || poblacion.length > 25) {
            setErrorFor($('#poblacion-form'), "La población debe tener al menos 5 caracteres y como máximo 25 caracteres");
            correct = false;
        } else {
            setSuccessFor($('#poblacion-form'));
        }
        if (cp.length != 5 || !isNumeric(cp)) {
            setErrorFor($('#cp-form'), "El código postal debe tener 5 caracteres");
            correct = false;
        } else {
            setSuccessFor($('#cp-form'));
        }
        if (password.length < 8 || password.length > 15) {
            setErrorFor($('#password-form'), "La contraseña debe tener al menos 8 caracteres y como máximo 15 caracteres");
            correct = false;
        } else {
            setSuccessFor($('#password-form'));
        }
        if (password_confirmation != password) {
            setErrorFor($('#password_confirmation-form'), "Las contraseñas no coinciden");
            correct = false;
        } else {
            setSuccessFor($('#password_confirmation-form'));
        }
        if (!correct) {
            e.preventDefault();
        }
    });

    $("#form-login").submit(function(e) {
        var mail = $(this).find("input[name='mail']").val();
        var password = $(this).find("input[name='password']").val();
        var correct = true;
        if (mail.length == 0) {
            setErrorFor($('#mail-form'), "El campo Correo es obligatorio");
            correct = false;
        } else if (!isEmail(mail)) {
            setErrorFor($('#mail-form'), "El correo debe tener un formato válido");
            correct = false;
        } else {
            setSuccessFor($('#mail-form'));
        }

        if (password.length < 8 || password.length > 15) {
            setErrorFor($('#password-form'), "La contraseña debe tener al menos 8 caracteres y como máximo 15 caracteres");
            correct = false;
        } else {
            setSuccessFor($('#password-form'));
        }

        if (!correct) {
            e.preventDefault();
        }
    });

    $("#form-update").submit(function(e) {
        var file = $(this).find("input[name='profile_image']").val();
        var name = $(this).find("input[name='name']").val();
        var mail = $(this).find("input[name='mail']").val();
        var phone = $(this).find("input[name='phone']").val();
        var direction = $(this).find("input[name='direction']").val();
        var poblacion = $(this).find("input[name='poblacion']").val();
        var cp = $(this).find("input[name='cp']").val();
        var password = $(this).find("input[name='password']").val();
        var password_confirmation = $(this).find("input[name='password_confirmation']").val();
        var correct = true;

        setNormalFor($('#name-form'));
        setNormalFor($('#mail-form'));
        setNormalFor($('#phone-form'));
        setNormalFor($('#direction-form'));
        setNormalFor($('#poblacion-form'));
        setNormalFor($('#cp-form'));
        setNormalFor($('#password-form'));
        setNormalFor($('#password_confirmation-form'));


        if (file.length != 0) {
            var extension = file.split('.').pop();
            if (extension != "jpg" && extension != "jpeg" && extension != "png") {
                setErrorFor($('#profile_image'), "La imagen debe tener un formato válido (jpg, jpeg, png)");
                correct = false;
            } else {
                setSuccessFor($('#profile_image'));
            }
        }
        if (name.length != 0) {
            if (name.length < 3 || name.length > 15) {
                setErrorFor($('#name-form'), "El nombre debe tener al menos 3 caracteres y como máximo 15 caracteres");
                correct = false;
            } else if (!isAlpha(name)) {
                setErrorFor($('#name-form'), "El nombre debe contener solo letras");
                correct = false;
            } else  {
                setSuccessFor($('#name-form'));
            }
        }

        if (mail.length != 0) {
            if (!isEmail(mail)) {
                setErrorFor($('#mail-form'), "El correo debe tener un formato válido");
                correct = false;
            } else {
                setSuccessFor($('#mail-form'));
            }
        }
        if (phone.length != 0) {
            if (phone.length != 9 || !isNumeric(phone)) {
                setErrorFor($('#phone-form'), "El teléfono debe tener 9 caracteres numericos");
                correct = false;
            } else {    
                setSuccessFor($('#phone-form'));
            }
        }
        /*if (direction.lenght != 0) {
            if (direction.lenght != 0  && (direction.length < 10 || direction.length > 50)) {
                setErrorFor($('#direction-form'), "La dirección debe tener al menos 10 caracteres y como máximo 50 caracteres");
                correct = false;
            } else {
                setSuccessFor($('#direction-form'));
            }
        }*/
        if (poblacion.length != 0) {
            if (poblacion.length < 5 || poblacion.length > 25) {
                setErrorFor($('#poblacion-form'), "La población debe tener al menos 5 caracteres y como máximo 25 caracteres");
                correct = false;
            } else {
                setSuccessFor($('#poblacion-form'));
            }
        }
        if (cp.length != 0) {
            if (cp.length != 5 || !isNumeric(cp)) {
                setErrorFor($('#cp-form'), "El código postal debe tener 5 caracteres numericos");
                correct = false;
            } else {
                setSuccessFor($('#cp-form'));
            }
        }
        if (password.length != 0) {
            if (password.length < 8 || password.length > 15) {
                setErrorFor($('#password-form'), "La contraseña debe tener al menos 8 caracteres y como máximo 15 caracteres");
                correct = false;
            } else {
                setSuccessFor($('#password-form'));
            }
        }
        if (password.length != 0) {
            if (password_confirmation != password) {
                setErrorFor($('#password_confirmation-form'), "Las contraseñas no coinciden");
                correct = false;
            } else {
                setSuccessFor($('#password_confirmation-form'));
            }
        }
        console.log(correct);
        if (!correct) {
            e.preventDefault();
        }
    });
});

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isAlpha(text) {
	return text.match(/^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$/);
}

function isNumeric(text) {
	return text.match(/^[0-9]+$/);
}

function setErrorFor(input, message) {
	const formControl = input.parent();
	const small = formControl.children('small');
    formControl.removeClass('form-control success');
	formControl.addClass('form-control error');
	small.text(message);
}

function setSuccessFor(input) {
	const formControl = input.parent();
    formControl.removeClass('form-control error');
	formControl.addClass('form-control success');   
}

function setNormalFor(input) {
    const formControl = input.parent();
    formControl.removeClass('error success');
}
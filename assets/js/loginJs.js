const pUrl = window.location.origin;
class completeUrl {
    constructor(_complement) {
        let url = pUrl + '/reydelascejas/';
        let complement = _complement;
        this.getUrl = function () {
            return url + complement;
        };
    }
}

$("#bn_login").on("click", function (e) {
    e.preventDefault();
    var url = new completeUrl('LoginPage/ingresarUsuario');
    $("#bn_login").prop('disabled', true);
    var form = $("#frm_login");
    let resp = getAjax(url.getUrl(), form.serialize());

    if (resp.error != 0) {
        $("#bn_login").prop('disabled', false);
        Swal.fire({ icon: 'error', confirmButtonColor: '#F5C132', text: resp.message })
    } else {
        location.reload();
    }
});

$("#btn_register").on("click", function (e) {
    e.preventDefault();
    var url = new completeUrl('loginPage/userRegister');
    console.log(url);
    $("#btn_register").prop('disabled', true);
    var form = $("#frm_register");
    let resp = getAjax(url.getUrl(), form.serialize());

    if (resp.error != 0) {
        $("#btn_register").prop('disabled', false);
        Swal.fire({ icon: 'warning', confirmButtonColor: '#F5C132', confirmButtonText: 'Aceptar', html: resp.message })
    } else if (resp.error == 0) {
        if (resp.message) {
            Swal.fire({ icon: 'success', confirmButtonColor: '#F5C132', confirmButtonText: 'Aceptar', text: 'Registro exitoso' })
        } else {
            $("#btn_register").prop('disabled', false);
            Swal.fire({ icon: 'error', confirmButtonColor: '#F5C132', confirmButtonText: 'Aceptar', text: 'El correo electrónico ingresado ya se encuentra registrado' })
        }

        // location.reload();
    }
});

document.addEventListener('keypress', e => {
    if (e.key === "Enter") {
        $('#l_btnLogin').focus().click();
    }
});

$("#togglepassword_login").click(function (e) {
    e.preventDefault();
    const password = document.querySelector("#passwd_login");
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    this.classList.toggle('fa-eye-slash');
    this.classList.toggle('fa-eye');
});

$("#togglepassword_rec").click(function (e) {
    e.preventDefault();
    const password = document.querySelector("#passwd_register");
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    this.classList.toggle('fa-eye-slash');
    this.classList.toggle('fa-eye');
});

function getAjax(url, data = null) {
    let result = null
    result = $.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: url,
        data: data,
        global: false,
        async: false,
        success: function (data) {
            return data;
        }
    }).responseJSON;
    return result
}

$("#btn_updateprofile").on("click", function (e) {
    e.preventDefault();
    var url = new completeUrl('usuario/updateProfile');
    var form = $("#frm_profile");
    let resp = getAjax(url.getUrl(), form.serialize());
    console.log(resp);

    if (resp) {
        Swal.fire({ icon: 'success', confirmButtonColor: '#F5C132', text: 'Información actualizada con exito' })
    } else {
        Swal.fire({ icon: 'error', confirmButtonColor: '#F5C132', text: 'Ha ocurrido un error, intentalo más tarde' })
    }
});
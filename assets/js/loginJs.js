class completeUrl {
    constructor(_complement) {
        let url = pUrl + '/';
        let complement = _complement;
        this.getUrl = function () {
            return url + complement;
        };
    }
}

$("#l_btnLogin").on("click", function (e) {
    e.preventDefault();
    var url = new completeUrl('LoginPage/ingresarUsuario');
    $("#l_btnLogin").prop('disabled', true);
    var form = $("#frm_login");
    let resp = getAjax(url.getUrl(), form.serialize());

    if (resp.error != 0) {
        $("#l_btnLogin").prop('disabled', false);
        Swal.fire({ icon: 'error', confirmButtonColor: '#F5C132', text: resp.message })
    } else{
        location.reload();
    }
});

document.addEventListener('keypress', e => {
    if (e.key === "Enter") {
        $('#l_btnLogin').focus().click();
    }
});

$("#togglePassword").click(function (e) {
    e.preventDefault();
    const password = document.querySelector("#l_passwd");
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

const pUrl = window.location.origin;
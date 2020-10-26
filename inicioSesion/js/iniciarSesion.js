// swal("Good job!", "contraseña incorrecta", "error");

let correo = document.getElementById("correo");
let contra = document.getElementById("contra");

function validarInicio() {

    if (correo.value === "fundacion@gmail.com") {
        if (contra === 12345) {
            window.location.href = 'http://www.google.com';
        } else {
              swal("Algo anda mal!", "contraseña incorrecta", "error");
            // alert("contraseña incorrecta");
        }
    } else if (correo.value === "user@gmail.com") {
        if (contra === 12345) {
            window.location.href = "../../inicioEmpresa/inicio.html";
        } else {
              swal("Good job!", "contraseña incorrecta", "error");
            // alert("contraseña incorrecta");
        }
    }
}



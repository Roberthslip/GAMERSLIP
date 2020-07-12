


function mostrar() {
    debugger;
    var usuario = document.getElementsByName('use')[0].value;
    var contrasena = document.getElementsByName('contra')[0].value;




    if ((usuario === 'roberth') && (contrasena === 'slip')) {
        debugger;
        window.location = 'intex.html';
    }
    else {
        debugger;
        alert('Los datos no son correctos');
    }
}

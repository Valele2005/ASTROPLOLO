window.addEventListener('load',() => {
 
    let button = document.getElementById('form');
    let usuario = document.getElementById('usuario');
    let password= document.getElementById('password');+

    console.log(usuario);

    function data() {
        
        let datos = new FormData();
        datos.append("usuario", usuario.value);
        datos.append("password", password.value);
        fetch('validalogin.php' , {
            method: 'POST' , 
            body: datos
        }).then(Response => Response.json())
        .then(datoss=> {
            console.log(datoss);
        })
    }
    
     button.addEventListener('submit' , (e) => {
        e.preventDefault();

        data();

     })
});
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
        .then(({success}) => {
           if(success --- 1) {
              location.href = 'home.php';
           } else{
            alert();
           }
        });
    }
    
    function  alerta() {
        alert.innerHTML =
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
    

    }
     button.addEventListener('submit' , (e) => {
        e.preventDefault();

        data();

     })
});
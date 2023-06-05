import { getUsuarios,nuewUsuario } from "./API.js"
console.log( await getUsuarios());



const evaluo = {
    usuario: "",
    contraseña: ""
}


const usuario = document.querySelector('#inputUsuario')
const contraseña = document.querySelector('#contraseña1')
const buscar = document.querySelector('#sesion1')
buscar.addEventListener('click', buscador)

usuario.addEventListener('input', e => {
    evaluo.usuario = e.target.value;
    console.log(evaluo);
})
contraseña.addEventListener('input', e => {
    evaluo.contraseña = e.target.value;
    console.log(evaluo);
})


async function buscador(e) {
    e.preventDefault()

    if (evaluo.usuario && evaluo.contraseña) {
        const usuarios = await getUsuarios()
        usuarios.forEach(element => {
            if (element.usuario === evaluo.usuario && element.contraseña === evaluo.contraseña) {
                buscar.addEventListener('click', ()=>{
                    window.location.replace ("/Home/home.html")
                })
            }else if(element.usuario === evaluo.usuario && element.contraseña != evaluo.contraseña){
                alert("contraseña incorrecta")
            }
            else if(element.usuario != evaluo.usuario && element.contraseña === evaluo.contraseña){
                alert("Usuario no encontrado")
            }
        });

    }else{
        alert("campos vacios")
    }

}








(function () {


    const registro = document.querySelector('#registro')
    registro.addEventListener('click',cargarRegistro)
    
  
    async function cargarRegistro (){
        const caja2 = document.querySelector('#section2')
        caja2.innerHTML=``

        caja2.innerHTML=`
        <div  class="d-flex justify-content-center align-items-center" >
                
                <form id="Registrar" method="POST">
                    <h1 class="m-5" style="font-weight: 800;">REGISTRAR USUARIO</h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nombre del usuario a Registrar.</div>
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Usuario</label>
                      <input type="text" class="form-control" id="usuario" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Elija un Nombre corto para ingresar a la cuenta.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="contraseña">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                  </form>

            </div>
            <div class="d-flex justify-content-center align-items-end m-5"><img src="img/Diseño sin título (1).png" alt="" style="width: 50%; height: 10%; object-fit: cover;" ></div>
        
        
        
        `
        const formRegistrar = document.querySelector('#Registrar');
        formRegistrar.addEventListener('submit', nuevoUsuario);
        
        function nuevoUsuario(e) {
          e.preventDefault();
          console.log("todo bien");
          console.log(e.target);
        
          const nombre = document.querySelector('#nombre').value;
          const usuario = document.querySelector('#usuario').value;
          const contraseña = document.querySelector('#contraseña').value;
        
          let usuarioNuevo = {
            nombre,
            usuario,
            contraseña
          };
          console.log(usuarioNuevo);
        
          if (validation(usuarioNuevo)) {
            alert("todos los campos son Obligatorios");
            return;
          }
        
          nuewUsuario(usuarioNuevo);
        }

        
        function validation (Objecto){
            return !Object.values(Objecto).every(element=>element !=='')
        }
        




       
    }
    
    

    



    





})();

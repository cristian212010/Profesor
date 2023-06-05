const ulrUsuarios = "http://localhost:4000/USUARIOS"





/* /////////////////////////////// LLlma a la api para la validacion de Usuarios */
export const getUsuarios = async () =>{
    try{
        const result = await fetch (ulrUsuarios);
        const datosUsuarios = await result.json();
        return datosUsuarios;
        
    }
    catch(error){
        console.log(error);
    }
}


export const nuewUsuario = async (usuarioNuevo) =>{
    console.log(usuarioNuevo);
    try {
        await fetch(ulrUsuarios,{
            method: 'POST',
            body: JSON.stringify(usuarioNuevo),
            headers:{
                'Content-Type': 'application/json'
            }

        });
        window.location.href='login.html'

    } catch (error) {
        console.log(error);
    }
}



/* //////////////////////////////////////AÑADIR CATEFOIRAS */

const ulr = "http://localhost:4000/campers"


export const getEstudaintes = async () =>{
    try{
        const result = await fetch (ulr);
        const datosUsuarios = await result.json();
        return datosUsuarios;
        
    }
    catch(error){
        console.log(error);
    }
}

export const nuewEstudiante = async (registro) =>{
    console.log(registro);
    try {
        await fetch(ulr,{
            method: 'POST',
            body: JSON.stringify(registro),
            headers:{
                'Content-Type': 'application/json'
            }

        });
        // window.location.href='index.html'

    } catch (error) {
        console.log(error);
    }
}


export const deleteEstudiante = async id => {
    try {
       await fetch (`${ulr}/${id}`,{
            method: 'DELETE'
       })
        
    } catch (error) {
        console.log(error);
        
    }


}

export const actualizarNota = async (data) => {
    try {
      await fetch(ulrEstudiantes + '/' + data.id, {
        method: 'PATCH',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
      })
        .then(response => response.json())
        .then(updatedData => {
          console.log('Datos actualizados:', updatedData);
          // Realiza las acciones necesarias con los datos actualizados
        })
    } catch (error) {
      console.error('Error al actualizar los datos:', error);
    }
  }




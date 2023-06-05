const ulrEstudiantes =
  "http://localhost/profesor/backend/controles/campers.php?op=GetAll";

export const getEstudaintes = async () => {
  try {
    const result = await fetch(ulrEstudiantes);
    const datosUsuarios = await result.json();
    return datosUsuarios;
  } catch (error) {
    console.log(error);
  }
};

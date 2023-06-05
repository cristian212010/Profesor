import { getEstudaintes } from "./API.js";

addEventListener("DOMContentLoaded", cargarEstudiantes);

async function cargarEstudiantes() {
  const tablaEstudiantes = document.querySelector("#tabla");
  const estudiantes = await getEstudaintes();
  estudiantes.forEach((element) => {
    tablaEstudiantes.innerHTML += `
        <tr class="cards" nombre="${element.nombre}" 
        imagen="${element.imagen}"
        edad="${element.edad}"
        promedio="${element.promedio}"
        nivelCampus="${element.nivelCAmpus}"
        nivelIngles="${element.nivelIngles}"
        especialidad="${element.especialidad}"
        direccion="${element.direccion}"
        celular="${element.celular}"
        ingles="${element.ingles}"
        ser="${element.Ser}"
        review="${element.Review}"
        skills="${element.Skills}"
        asistencia="${element.Asitencia}"
        >
            <th scope="row" id="${element.id}">${element.id}</th>
            <td id="${element.id}">${element.nombre}</td>
            <td id="${element.id}">${element.especialidad}</td>
            <td id="${element.id}"><img src="images/${element.imagen}" alt=""></td>
            <td id="${element.id}"><button type="button" class="btn btn-info">${element.notas}</button></td>
        </tr>
        `;
  });
}
detalle();
function detalle(e) {
  const tablaEstudiantes = document.querySelector("#tabla");
  tablaEstudiantes.addEventListener("click", (e) => {
    if (e.target.getAttribute("id")) {
      const atributos = e.target.getAttribute("id");
      const elemento = document.getElementById(atributos);
      const padre = elemento.parentNode;
      console.log(padre);

      const nombre = padre.getAttribute("nombre");
      const imagen = padre.getAttribute("imagen");
      const edad = padre.getAttribute("edad");
      const promedio = padre.getAttribute("promedio");
      const nivelCampus = padre.getAttribute("nivelCampus");
      const nivelIngles = padre.getAttribute("nivelIngles");
      const especialidad = padre.getAttribute("especialidad");
      const direccion = padre.getAttribute("direccion");
      const celular = padre.getAttribute("celular");
      const ingles = padre.getAttribute("ingles");
      const ser = padre.getAttribute("ser");
      const review = padre.getAttribute("review");
      const skills = padre.getAttribute("skills");
      const asistencia = padre.getAttribute("asistencia");

      const detalles = document.querySelector("#detalles");
      detalles.innerHTML = ``;
      detalles.innerHTML = `
      <div class="contanerDetalles">
      <div class="datos">
        <div class="d-flex"><img src="images/${imagen}" alt="" class="m-2">
        <button type="button" class="delete btn btn-danger" style="height: 40px;">Eliminar</button></div>
        <h5>Nombre: ${nombre}</h5>
        <h5>Edad: ${edad}</h5>
        <h5>Promedio: ${promedio}</h5>
        <h5>Nivel Campus: ${nivelCampus}</h5>
        <h5>Nivel Ingles: ${nivelIngles}</h5>
        <h5>Especialidad: ${especialidad}</h5>
        <h5>Direccion: ${direccion}</h5>
        <h5 style="background-color: yellow;">Celular: ${celular}</h5>
        </div>
        </div>
        <div id="charts1" class="charts"></div>
      `;

      const getOpcionCharts1 = () => {
        let value1 = parseFloat(ingles);
        let value2 = parseFloat(ser);
        let value3 = parseFloat(review);
        let value4 = parseFloat(skills);
        let value5 = parseFloat(asistencia);
        return {
          tooltip: {
            trigger: "item",
          },
          legend: {
            top: "5%",
            left: "center",
            // doesn't perfectly work with our tricks, disable it
            selectedMode: false,
          },
          series: [
            {
              name: "Access From",
              type: "pie",
              radius: ["40%", "70%"],
              center: ["50%", "70%"],
              // adjust the start angle
              startAngle: 180,
              label: {
                show: true,
                formatter(param) {
                  // correct the percentage
                  return param.name + " (" + param.percent * 2 + "%)";
                },
              },
              data: [
                { value: value1, name: "Ingles" },
                { value: value2, name: "Ser" },
                { value: value3, name: "Review" },
                { value: value4, name: "Skills" },
                { value: value5, name: "Asistencia" },
                {
                  // make an record to fill the bottom 50%
                  value: value1 + value2 + value3 + value4 + value5,
                  itemStyle: {
                    // stop the chart from rendering this piece
                    color: "none",
                    decal: {
                      symbol: "none",
                    },
                  },
                  label: {
                    show: false,
                  },
                },
              ],
            },
          ],
        };
      };

      const charts1 = echarts.init(document.getElementById("charts1"));
      charts1.setOption(getOpcionCharts1());
    }
  });
}

window.addEventListener('load', obtenerParcelas);

function obtenerParcelas() {
    let mostrarResultadosDiv = document.querySelector('.mostramosResultados');
    mostrarResultadosDiv.innerHTML = ''; // Limpia el contenido existente

    fetch('obtenerDatosParcelas.php', {
        method: 'GET',
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error en la respuesta del servidor: ' + response.status);
        }
        return response.json();
    })
    .then(data => {
        // Agregar fila de encabezados
        const encabezadosDiv = document.createElement("div"); // Crea un div para los encabezados
        encabezadosDiv.classList.add("fila");
        
        const tipoPlatanoHeader = document.createElement("div");
        tipoPlatanoHeader.classList.add("celda");
        tipoPlatanoHeader.textContent = "Tipo de platano";
        encabezadosDiv.appendChild(tipoPlatanoHeader);
        
        const cantidadSembradaHeader = document.createElement("div");
        cantidadSembradaHeader.classList.add("celda");
        cantidadSembradaHeader.textContent = "Cantidad Sembrada";
        encabezadosDiv.appendChild(cantidadSembradaHeader);

        const fechaSiembraHeader = document.createElement("div");
        fechaSiembraHeader.classList.add("celda");
        fechaSiembraHeader.textContent = "Fecha de Siembra";
        encabezadosDiv.appendChild(fechaSiembraHeader);

        const identificadorSiembra = document.createElement("div");
        identificadorSiembra.classList.add("celda");
        identificadorSiembra.textContent = "Identificador";
        encabezadosDiv.appendChild(identificadorSiembra);

        mostrarResultadosDiv.appendChild(encabezadosDiv);

        const parcelasObjeto = data;

        parcelasObjeto.forEach(fila => {
            const filaDiv = document.createElement("div"); // Crea un div para cada fila
            filaDiv.classList.add("fila");

            const tipoPlatanoDiv = document.createElement("div");
            tipoPlatanoDiv.classList.add("celda");
            tipoPlatanoDiv.textContent = fila.tipoPlatano;
            filaDiv.appendChild(tipoPlatanoDiv);

            const cantidadPlantadaDiv = document.createElement("div");
            cantidadPlantadaDiv.classList.add("celda");
            cantidadPlantadaDiv.textContent = fila.cantidadPlantada;
            filaDiv.appendChild(cantidadPlantadaDiv);

            const fechaSiembraDiv = document.createElement("div");
            fechaSiembraDiv.classList.add("celda");
            fechaSiembraDiv.textContent = fila.fechaSiembra;
            filaDiv.appendChild(fechaSiembraDiv);

            const idContentDiv = document.createElement("div");
            idContentDiv.classList.add("celda");
            idContentDiv.textContent = fila.ID;
            filaDiv.appendChild(idContentDiv);

            mostrarResultadosDiv.appendChild(filaDiv); // Agrega la fila completa al contenedor mostrarResultadosDiv
        });
    })
    .catch(error => {
        console.error('Error al obtener los datos: ' + error.message);
    });
}

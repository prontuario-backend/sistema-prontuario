
function addRow() {
    var data = document.getElementById("data").value;
    var hora = document.getElementById("hora").value;
    var tipo = document.getElementById("tipo").value;
    var liquido = document.getElementById("liquido").value;

    var table = document.getElementById("myTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    

    cell1.innerHTML = data;
    cell2.innerHTML = hora;
    cell3.innerHTML = tipo;
    cell4.innerHTML = liquido;

    document.getElementById("myForm").reset();
}
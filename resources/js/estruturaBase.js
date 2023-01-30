
$(document).ready(function() {
    $('#idTable').DataTable( {
        "language": {
            "lengthMenu": "Mostrando MENU registros por página",
            "zeroRecords": "Nenhum Registro Encontrado",
            "info": "Mostrando Página PAGE de _PAGES_",
            "infoEmpty": "Nenhum registro Disponível",
            "infoFiltered": "(filtrado de MAX registro no total)"
        }
    } );
} );
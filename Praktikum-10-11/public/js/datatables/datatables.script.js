document.addEventListener("DOMContentLoaded", function () {
    let table = document.getElementById("data-tables");
    let dataTable = new DataTable(table, {
        pageLength: 5,
        lengthMenu: [
            [5, 10, 25, -1],
            ['5', '10', '25', 'Lihat Semua']
        ],
        columnDefs: [
            { targets: [0, 1], orderable: true },
            { targets: '_all', orderable: false }
        ]
    });
});
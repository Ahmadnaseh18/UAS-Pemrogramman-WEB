<?php
require "includes/config.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Kuliner</title>
        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Datatables -->
        <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
        <link href="assets/datatables/dataTables.bootstrap5.css" rel="stylesheet">
    </head>
    <body>
        <script src="assets/jquery-3.7.1.js"></script>
        <script src="assets/datatables/dataTables.js"></script>
        <script src="assets/datatables/dataTables.bootstrap5.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        
        <script>
            // new DataTable('#example');

            new DataTable('#example', {
                columns: [
                    {
                        data: 'No.',
                        defaultContent: '<i>Not Set</i>'
                    },
                    {
                        data: 'Nama Makanan',
                        defaultContent: '<i>Not Set</i>'
                    },
                    {
                        data: 'Daerah Makanan',
                        defaultContent: '<i>Not Set</i>'
                    },
                    {
                        data: 'Keterangan',
                        defaultContent: '<i>Not Set</i>'
                    }
                ]
            });
        </script>



    </body>
</html>




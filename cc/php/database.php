<?php
// Define PostgreSQL database server connect parameters.
define('PG_HOST', 'ec2-18-233-207-22.compute-1.amazonaws.com');
define('PG_PORT', 5432);
define('PG_DATABASE', 'd2d4favo2m84dl');
define('PG_USER', 'phazkhmftshpcd');
define('PG_PASSWORD', 'e2603e170fcdaefa10dbc8a3248076052abc7d3f621b0f6c205643be850b4942');
define('ERROR_ON_CONNECT_FAILED', 'Connection failed!');

// Merge connect string and connect db server with default parameters.
function getDB() {
    return pg_pconnect (' host=' . PG_HOST .
                        ' port=' . PG_PORT .
                        ' dbname=' . PG_DATABASE .
                        ' user=' . PG_USER .
                        ' password=' . PG_PASSWORD
                       ) or die (ERROR_ON_CONNECT_FAILED);
}
?>
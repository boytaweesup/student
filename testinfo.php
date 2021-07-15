<?PHP

    require_once('dbconfig.php');

    $db = new Database('localhost', 'test', 'root', '12345678');

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo json_encode($db->query('SELECT * FROM student'));
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo 'This is POST';
    } else {
        http_response_code(405);
    }

?>
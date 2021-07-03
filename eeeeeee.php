<?php 
    include_once ('path.php');
    include_once(ROOT_PATH . "/db.php");

    $crap = 1;

    function selectAllWords($diff) {
        global $conn;

        $sql = "SELECT word FROM words WHERE diff = '$diff'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $words = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $res = "";
        foreach ($words as $val) {
            foreach ($val as $v) {
                if (isset($v)) {
                    $res .= $v . " ";
                }
            }
         }
        return $res;
    }

    if (isset($_POST['main-btn'])) {
        $crap .= 1;
        $_POST['dudebro'] = $crap;
    }
?>
<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "id16991579_letters";

// #1: create the conn object
$conn = new mysqli($host, $user, $pw, $db);
/*=== EXECUTE FUNCTION ===*/
function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}
/*=== QUERY FUNCTIONS RETURN EXSTING INSTANCE  ===*/
function selectOne($table, $conditions)
{
    global  $conn;
    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i == 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }
    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}
//======RETURNS ALL=======
function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }

        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}
// function update($table, $id, $data)
// {
//     global $conn;
//     $sql = "UPDATE $table SET ";

//     $i = 0;
//     foreach ($data as $key => $value) {
//         if ($i == 0) {
//             $sql = $sql . " $key=?";
//         } else {
//             $sql = $sql . ", $key=?";
//         }
//         $i++;
//     }
//     $sql = $sql . " WHERE user_id=?";
//     $data['user_id'] = $id;
//     $stmt = executeQuery($sql, $data);
//     return $stmt->affected_rows;
// }
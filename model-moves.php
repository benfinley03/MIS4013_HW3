<?php
function selectMoves() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT MoveID, MoveName FROM Moves;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

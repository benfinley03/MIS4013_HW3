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

function insertMove($mName, $mPower, $mAccuracy) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Moves` (`MoveName`, `MovePower`, `MoveAccuracy`) VALUES (?, ?, ?)");
        $stmt->bind_param("sii", $mName, $mPower, $mAccuracy);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateMove($mName, $mPower, $mAccuracy, $mID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Moves` SET `MoveName` = ?, `MovePower` = ?, `MoveAccuracy`= ? WHERE `MoveID` = ?");
        $stmt->bind_param("siii", $mName, $mPower, $mAccuracy, $mID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deletePokemon($mID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Moves` WHERE `MoveID` = ?");
        $stmt->bind_param("i", $mID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

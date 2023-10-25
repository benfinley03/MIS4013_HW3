<?php
function selectType() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM Type;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertType($tName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Type` (`TypeName`) VALUES (?)");
        $stmt->bind_param("s", $tName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateType($tName, $tID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Type` SET `TypeName`=? WHERE TypeID = ?");
        $stmt->bind_param("si", $tName, $tID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteType($tID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Type` WHERE `TypeID` = ?");
        $stmt->bind_param("i", $tID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

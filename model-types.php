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


function updateType($pName, $pDesc, $pID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Type` SET `TypeID`='[value-1]',`TypeName`='[value-2]' WHERE 1");
        $stmt->bind_param("ssi", $pName, $pDesc, $pID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deletePokemon($pID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Pokemon` WHERE `PokemonID` = ?");
        $stmt->bind_param("i", $pID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

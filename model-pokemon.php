<?php
function selectPokemon() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT PokemonID, PokemonName, PokemonDesc FROM Pokemon;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPokemon($pName, $pDesc) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Pokemon` (`PokemonName`, `PokemonDesc`) VALUES (?, ?)");
        $stmt->bind_param("ss", $pName, $pDesc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updatePokemon($pName, $pDesc, $pID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Pokemon` SET `PokemonName` = '?', `PokemonDesc` = '?' WHERE `PokemonID` = ?");
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

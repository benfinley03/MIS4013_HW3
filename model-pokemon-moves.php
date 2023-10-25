<?php
function selectMoveOfPokemon($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select p.PokemonName, m.MoveName, m.MovePower, m.MoveAccuracy
                                From Moves m JOIN PokeMove_Relationship pm on m.MoveID = pm.MoveID
				                                      JOIN Pokemon p on pm.PokemonID = p.PokemonID
                                Where p.PokemonID=?");
        $stmt->bind_param("i", $mid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPokemonMoves() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select p.PokemonID, p.PokemonName, m.MoveName, m.MovePower, m.MoveAccuracy
From Moves m JOIN PokeMove_Relationship pm on m.MoveID = pm.MoveID
				JOIN Pokemon p on pm.PokemonID = p.PokemonID");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPokemonMovesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select MoveID, MoveName From `Moves` Order by MoveName");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPokemonForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select PokemonID, PokemonName From Pokemon Order by PokemonName");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
// -- $msPokemonKey, 
function insertPokeMove($pmPID, $pmMID, $pmLL) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `PokeMove_Relationship` (`PokemonID`, `MoveID`, `PMRLevel') VALUES (?, ?, ?)");
        $stmt->bind_param("iii", $pmPID, $pmMID, $pmLL);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updatePokeMove($pmPID, $pmMID, $pmLL, $pmID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `PokeMove_Relationship` SET `PokemonID` = ?, `MoveID` = ?, `PMRLevel' = ? WHERE `PokeMoveID` = ?");
        $stmt->bind_param("iiii", $pmPID, $pmMID, $pmLL, $pmID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteMoveset($pmID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `PokeMove_Relationship` WHERE `PokeMoveID` = ?");
        $stmt->bind_param("i", $pmID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

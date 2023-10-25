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
        $stmt = $conn->prepare("Select PokemonID, PokemonName From `Pokemon` Order by PokemonName");
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
function insertMoveset($msMoveKey, $msName, $msPower, $msAccuracy) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Moves` (`MoveID`, `MoveName`, `MovePower`, `MoveAccuracy`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isii", $msMoveKey, $msName, $msPower, $msAccuracy);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateMove($mName, $mPower, $mAccuracy, $msMoveKey) {
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

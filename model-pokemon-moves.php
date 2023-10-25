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
?>

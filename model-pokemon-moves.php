<?php
function selectPokemonMoves() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select p.PokemonName, m.MoveName
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
?>
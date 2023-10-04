<?php
function selectTypeOfPokemon() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.PokemonName, t.TypeName, 
		                              (SELECT t.TypeName From Type t JOIN PokeType_Relationship pt on t.TypeID = pt.TypeID 
     		                            WHERE pt.Second_TypeID is NOT null and pt.PokemonID = p.PokemonID) as Type2
                                FROM Type t JOIN PokeType_Relationship pt on t.TypeID = pt.TypeID 
			                          JOIN Pokemon p on pt.PokemonID = p.PokemonID
			     	Where p.PokemonID=?");
        $stmt->bind_param("i", $iid);
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

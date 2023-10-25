<select class="form-select" id="pmPID" name="pmPID">
<?php
while ($pokemonItem = $PokemonList->fetch_assoc())
{
?>
    <option value="<?php echo pokemonItem['PokemonID']; ?>"><?php echo pokemonItem['PokemonName']; ?></option>
<?php
}
?>
</select>

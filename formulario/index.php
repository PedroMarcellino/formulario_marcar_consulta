<?php 
    



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <h1>Veterinario do P</h1>
    <form action="./marcar_consulta.php" method="POST"> 
        <div>
            <label for="">Nome</label>
            <input name="nome" type="text" placeholder="Nome do animal">
        </div>
        <div>
            <label for="">Raça</label>
            <input name="raca" type="text" placeholder="Nome da raça">
        </div>
        <div>
            <label for="">Peso</label>
            <input name="peso" type="step 0.1" placeholder="Peso do animal">
        </div>
        <div>
            <label for="especie">Especie</label>
            <select name="especie">
            <option value="">Selecione a especie </option>
            <option value="cachoro">cachorro</option>
            <option value="gato">gato</option>
            <option value="tigre">tigre</option>
            <option value="coelho">coelho</option>
            <option value="cobra">cobra</option>
            </select>
        </div>
        <div>
            <label for="">Idade</label>
            <input name="idade" type="text" placeholder="Idade do animal">
        </div>
        <div>
            <label for="">Nome Tutor</label>
            <input name="tutor" type="text" placeholder="Nome do Tutor">
        </div>
        <div>
            <input type="submit" value="Marcar consulta"> 
        </div>
        
    </form>
</body>
</html>
<h1>Création d'un post</h1>
<form method="post" action="createPost">
    <label for="content">Contenu</label>
    <input type="text" name="content" placeholder="Saisaissez un contenu" required><br>
    <label for="name">Nom</label>
    <input type="text" name="name" placeholder="Saisaissez un nom" required><br>
    <button type="submit">Enregistrer</button>
</form>

<style>
label, input, button {
    box-sizing: border-box;
    margin-left: 15px;
    display:block;
    width: 300px;
}
</style>
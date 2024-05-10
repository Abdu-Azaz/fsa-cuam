<form action="{{route('reg')}}" method="post">
    @csrf
    <input type="text" name="cne" placeholder="cne">
    <input type="text" name="nom" placeholder="nom">
    <input type="text" name="prenom" placeholder="prenom">
    <input type="submit" value="Submit">
</form>


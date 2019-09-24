<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>requétes SQL</title>
  </head>
  <body>
    <header style="height: 100px ;width:100%;">
    </header>
    <section id ="requetes-sql" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">

      <FORM style="margin-bottom: 25px;">
      <SELECT name="nom" size="1">
        <OPTION>Afficher tous les gens dont le nom est palmer
        <OPTION>Afficher toutes les femmes
        <OPTION>Tous les états dont la lettre commence par N
        <OPTION>Tous les emails qui contiennent google
        <OPTION>Répartition par Etat et le nombre d’enregistrement par état (croissant)
        <OPTION>Insérer un utilisateur, lui mettre à jour son adresse mail puis supprimer l’utilisateur
        <OPTION>Nombre de femme et d’homme
        <OPTION>Afficher l'âge de chaque personne, puis la moyenne d’âge des femmes et des hommes
      </SELECT>
      </FORM>
      <?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT first_name, last_name, gender FROM `board` WHERE gender = 'female'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>



    </section>
  </body>
</html>

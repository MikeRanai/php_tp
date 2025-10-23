<?php
include ("Client.php");

$user="root";
$pass="";
$dbname="expernetcda9";
$host="localhost";

$db=new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$request=$db->query("select * from client;");

$request->setFetchMode(PDO::FETCH_CLASS,'Client');

$clients=$request->fetchAll();

$searchName="";

//ATTENTION C4EST PAS BON
if(isset($_GET['search'])){
    $searchName=$db->prepare("select * from client 
         where nom like ? or 
         prenom like ?");
}
else $searchName=$db->query("select * from client");

echo '
<form action="bdd.php" method="get">
    <label for="search">Rechercher</label>
    <input type="text" name="search" id="search">
    <input type="submit" value="Search" >
</form>
';


echo "<body>
 <table>
     <tr>
         <th>id</th>
         <th>Nom</th>
         <th>Prénom</th>
         <th>Titre</th>
         <th>Ville</th>

     </tr>";

foreach ($clients as $client) {

 echo "<tr>
         <td>".$client->getId()."</td>
         <td>".$client->getNom()."</td>
         <td>".$client->getPrenom()."</td>
         <td>".$client->getTitre()."</td>
         <td>".$client->getVille()."</td>
     </tr>";

}
echo "</table>";
echo "</body>";

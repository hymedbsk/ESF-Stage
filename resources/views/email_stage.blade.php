<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Nouvelle demande de stage</h2>
    <p>Réception d&apos;une demande de stage via le site web avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom</strong> : {{ $data['nom'] }}</li>
      <li><strong>Prénom</strong> : {{ $data['prenom'] }}</li>
      <li><strong>Adresse Mail</strong> : {{ $data['email'] }}</li>
      <li><strong>Poste</strong> : {{ $data['poste'] }}</li>



    </ul>
  </body>
</html>

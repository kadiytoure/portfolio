<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet"> 
    <title>Liste des projets réalisés</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:400,700,900');



body {
   
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    color: 
      
}

  body li {

    margin-top: 1em;
    margin-left: 0em;
    text-align: center;
    padding-right: 2em;
    color: black;
    padding-top: 1em;
   
  }

  section {
      background-image: url("kari-shea-272383.jpg");
      background-size: cover;
      box-sizing: border-box;
      webkit-background-size: cover;
      height: 1000px;
      width: 100%;
      background-position: center;
  }

.projet {
    height: 50%;
    width: 50%;
    overflow: hidden;
    background-color: burlywood;
    border-radius: 0.3em;
    display: flex;
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    padding-top: 3em;
    padding-left: 3em;
    padding-right: 2em;
    margin-top: 5em;
    margin-left: auto;
    margin-right: auto;
   
}

body .projet  {
    color: black;
    padding-left: 2em;
    padding-right: 3em;
    padding-top: 3em;
    hyphens: auto;
    align-text: center;

}

li {

    display: flex;
    color: black;
    align-items: center;
    padding-right: 2em;
    margin-top: 1em;
    align-text: center;
    position:relative;
      
}

ul {
   display: flex;
   flex-direction: row;
   margin: auto;
   flex-wrap: wrap;
   justify-content: space-between;
   align-items: stretch;
   padding-right: 1em;
   color: black;
   align-text: center;
     
}

p {
   
    color: black;
    display: flex;
    align-content: center;
    font-family: 'Roboto', sans-serif;
    font-size: 30px;
    
}


h2 {
    font-family: 'Roboto', sans-serif;
    font-size: 30px;
    color: black;

}
.gh {
    font-family: 'Roboto', sans-serif;
    color: black;
    font-size: 25px;
}

li div {
   
    color: black;
    font-size: 20px;
   
}

li:hover div {
   display:block;
   font-family: 'Roboto', sans-serif;
   font-style: italic;
  
}

li div {
    width: 100%;
    height: 100%;
    border-radius: 1,5;
    background-color: orange;
    position: absolute;
    top: 0;
    left: 0;
    display:none;
    overflow: hidden;
}


</style>
</head>
<body>
    <header>
<section>
<div>
<p>Bonjour, je suis Kadiy TOURE, Développeuse Web en recherche d'un emploi. Je maîtrise les languages de prommagtion HTML/CSS, JAVASCRIPT et PHP. Je m'intéresse à l'actualité et au football. ci-dessous vous trouverez les divers projets que j'ai réalisé dans le cadre de ma formation à Simplon Lyon:</p>
</div>
<div>
<button><a href="mailto:kadiy.toure@hotmail.fr">Prenons rendez-vous</a></button>
</div>
</section>
</header>
<main>
    <div class="info">
    <h1>Mes réalisations</h1>
    </div>
</main>

<ul>
</ul>


<ul>

    <?php
$dir = scandir('.');
foreach ($dir as $file => $projects) {

     if ($projects != '..' && $projects != '.') {
         //tester si ($projects . '/infos.txt') existe

         //Si oui, récupérer son contenu avec file_get_contents et le stocker dans une variable

         //mettre ce contenu dans une balise html avec un echo en php
        if (is_file ($projects . '/infos.txt')) {
            $infodoc = file_get_contents($projects . '/infos.txt');
            
                
            echo "<li>";
            echo "<a class=\"projet\" href=\"$projects\"> $projects";
            //Faire un echo d'une div qui contiendra le contenu ($infodoc)
            //Lui rajouter également une class info et faire en sorte en css
            //que .info soit en display: none; par défaut et s'affiche 
            //lorsqu'on est en hover sur le li (li:hover .info)
            echo "<div>$infodoc";
            echo "</div>";
            echo '</a>';
            echo "</li>";
        }
     }
}

/*
if ($projects != '/infos.txt') {
    $projects = file_get_contents('/infos.txt');
    echo "</li>";
}
*/

    ?>
</ul>
<footer>
<h1>Mes coordonnées</h1>
<li><a href="mailto:kadiy.toure@hotmail.fr" class="gh">Mon mail -> kadiy.toure@hotmail.fr</a></li>
<li><a href="https://github.com/kadiytoure" class="gh">Mon github -> https://github.com/kadiytoure</a></li>
</footer>
</body>
</html>
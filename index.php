<?php
$langs = array(
	"fr" => "tolosanofranck.fr",
	"en" => "tolosanofranck.com",
	"es" => "tolosanofranck.es",
	"de" => "tolosanofranck.de"
);

if(isset($_GET['lang']) && isset($langs[$_GET['lang']])){
	$current_lang = $_GET['lang'];
	$current_url = $langs[$current_lang];
} else {
	$current_lang = "fr";
	$current_url = "tolosanofranck.fr";
}
if(isset($langs[$current_lang])) unset($langs[$current_lang]);
?>

<!DOCTYPE html>

<html lang="<?= $current_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Oui cliquez ici pour réussir je suis tres bon dev oui oui.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Developpeur Web </title>

    <link rel="stylesheet" href="style.css">

    <meta property="og:title" content="Portfolio Tolosano Franck">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Portfolio Tolosano">
    <meta property="og:url" content="http://Tolosanofranck.dev">
    <meta property="og:description" content="Mon portfolio de qualité retrouve mes projers ">
    <meta property="og:image" content="img/avat.png">

    <meta property="twitter:title" content="Portfolio Tolosano Franck">
    <meta property="twitter:creator" content="@franck">
    <meta property="twitter:site" content="Monsite">
    <meta property="twitter:card" content="">
    <meta property="twitter:image:src" content="img/avat.png">

    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <?php
	foreach($langs as $lang => $url){
		echo'<link rel="alternate" href="'.$url.'" hreflang="'.$lang.'">';
	}
	?>
	<link rel="canonical" href="<?= $current_url; ?>
</head>
<body>

    <noscript>Pour utiliser correctement ce site il vous faut activer votre javascript</noscript>

    <header>

        <nav>
            <ul>
                <li><a href="#">Presentation</a> |</li>
                <li><a href="#">Article</a> |</li>
                <li><a href="#">Services</a> |</li>
                <li><a href="#">Competences</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="presentation">
            <div class="txt">
                <h1>Développeur web</h1>
                <p>Bonjour moi c'est Franck j'ai 24 ans et je suis étudiant dans le développement web. En alternance à Ynov Sophia je partageais mes semaines entre mes cours et mon entreprise </p>
            </div>

            <div class="img">
                <figure>
                    <img src="img/avat.png"
                         alt="un avatar de moi" class="avatar">
                    <figcaption>mon avatar</figcaption>
                </figure>
            </div>
        </section>

        <article class="article">
            <h2>Le SEO côté développeur</h2>
            <div class="main-article">

                <blockquote cite="https://www.seo.fr/definition/seo-definition"><p> " L’ensemble des techniques mises en œuvre pour améliorer la position d’un site web "</p></blockquote>
            

                <p>En étant <strong>developpeur</strong> je ne me rendais pas compte de l'importance du <abbr title="Search Engine Optimization">SEO</abbr>, j'etais toujours focaliser
                sur le code pur, les fonctionnalités, les bugs et la création en général.                 
                <aside>
                    <a href="https://developers.google.com/search/docs/beginner/seo-starter-guide?hl=fr">Le SEO?</a><br>
                    <a href="https://brainyup.com/cours">BrainyUp</a>
                </aside>
                Grâce au cours auquels j'ai pu assister j'ai decouvert plus profondément le <strong>SEO</strong> au sein d'un projet web son importance et comment bien le pratiquer au sein de mes pages <abbr title="HyperText Markup Language">HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr> j'ai encore beaucoup à apprendre en pratiquant et en apprenant à grace à des formations en ligne tel que sur un site de zinzin BreanyUp!
                </p>
            </div>


        </article>

        

        <section class="services">
            <h2>Mes services</h2>
            
            <p>Création de site web</p>
            <p>Hebergement</p>
            <p>Gestion du projet</p>
            <p>Accompagnement</p>
            <p>Soutien</p>
            

        </section>

        <section class="competences">
            <h3>Mes competences</h3>
            
            <p>HTML</p>
            <p>CSS</p>
            <p>JS</p>
            <p>Boostsrap</p>
            <p>Angular Ts</p>
           
        </section>

        <section class="portfolio">
            <h3>Mes projets</h3>

            <div class="gallery">
                <figure>
                    <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ_G9U9095poYEIvtg8fnA2Ef3dcjLEebptQ&usqp=CAU"
                        alt="img de projet 1">
                    </a>
                    <figcaption>projet n1</figcaption>
                </figure>
                <figure>
                    <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ_G9U9095poYEIvtg8fnA2Ef3dcjLEebptQ&usqp=CAU"
                        alt="img de projet 2">
                    </a>
                    <figcaption>projet n2</figcaption>
                </figure>

                <figure>
                    <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ_G9U9095poYEIvtg8fnA2Ef3dcjLEebptQ&usqp=CAU"
                        alt="img de projet 3">
                    </a>
                    <figcaption>projet n3</figcaption>
                </figure>
                <figure>
                    <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ_G9U9095poYEIvtg8fnA2Ef3dcjLEebptQ&usqp=CAU"
                        alt="img de projet 4">
                    </a>
                    <figcaption>projet n4</figcaption>
                </figure>
                <figure>
                    <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ_G9U9095poYEIvtg8fnA2Ef3dcjLEebptQ&usqp=CAU"
                        alt="img de projet 5">
                    </a>
                    <figcaption>projet n5</figcaption>
                </figure>

                <figure>
                    <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ_G9U9095poYEIvtg8fnA2Ef3dcjLEebptQ&usqp=CAU"
                        alt="img de projet 6">
                    </a>
                    <figcaption>projet n6</figcaption>
                </figure>





            </div>

            

        </section>
        
        <section class="contact">
            <h3>Contactez moi! </h3>

            <label for="name">Votre nom</label>
            <input type="text" name="text" id="text">

            <label for="email">Votre email</label>
            <input type="email" name="email" id="email">

            <button type="submit">Recevoir</button>
        </section>

    </main>

    <footer>
        <adress>
            <a href="mailto:aaa@gmail.com">monmail@gmail.com</a><br>
            <a href="tel:0660600606">06 60 60 06 06</a>
            <div class="rs">
                <a href="#">GitHub</a>
                <a href="#">Linkd</a>
            </div>
            
        </adress>
    </footer>

</body>
</html>
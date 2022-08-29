<br id="toppage"/>

# :fire: <a href="https://eval-em-aout-2022.vercel.app/"  target="_blank" rel="noopenner noreferrer" >DEMO EN LIGNE</a> :fire:



### :closed_book: <a target="_blank" rel="noopenner noreferrer" href="https://github.com/BastosC/eval-em-aout-2022/raw/master/documentation/Brief.pdf">Brief</a> :closed_book:

### :green_book: <a target="_blank" rel="noopenner noreferrer" href="https://github.com/BastosC/eval-em-aout-2022/raw/master/documentation/Compétences-Livret-Pédagogique.pdf">Compétences Livret pédagogique</a> :green_book:

<!-- ### :newspaper: <a target="_blank" rel="noopenner noreferrer" href="https://github.com/BastosC/eval-em-laravel-2022/blob/main/documentation/Diagramme-Tables-SQL.jpg">Diagrame tables SQL</a> :newspaper: -->

<hr />

## <i>Déploiement rapide</i>

    dans /api :
        $ composer update
        -> configurer le .env en fonction de la DB 
      ( $ php artisan key:generate )
        $ php artisan migrate
        $ php artisan db:seed --class=CurrencySeeder 
        $ php artisan serve

    dans /admin :
        -> Vérifier la variable axios.defaults.baseURL dans le fichier /admin/src/utils/api.js pour l'url de l'API
        $ npm install
        $ npm run dev



<hr />

-   ### 1. Mise en place & compréhension du projet

    -   #### [1.1 - Description du projet](#section-1-1)
    -   #### [1.2 - Contexte et Méthode de travail](#section-1-2)

-   ### 2. Cahier des charges / Respect du brief / Livrables Annexes

    -   #### [2.1 - Libertés](#section-2-1)
    -   #### [2.2 - Contraintes de développement](#section-2-2)
    -   #### [2.3 - L'administraton](#section-2-3)
    -   #### [2.4 - L'API](#section-2-4)
    -   #### [2.5 - Données](#section-2-5)
    -   #### [2.6 - Analyse client](#section-2-6)
    -   #### [2.7 - Choix technologiques](#section-2-7)
    -   #### [2.8 - Evaluation du temps de travail](#section-2-8)
    -   #### [2.9 - Liste fonctionelle](#section-2-9)
    -   #### [2.10 - Diagramme de la base de données](#section-2-10)
    -   #### [2.11 - Documentation de l'API](#section-2-11)
    -   #### [2.12 - Adresse github](#section-2-12)
    -   #### [2.13 - Wireframe de la partie front de l'adminsitration'](#section-2-13)

-   ### 3. Divers
    -   #### [3.1 - Développeur](#section-3-1)
    -   #### [3.2 - Hébergement en ligne](#section-3-2)
    -   #### [3.3 - Technologies utilisées](#section-3-3)

<br/>
<hr/>
<br/>

# <u>1. Mise en place & compréhension du projet</u>

<div id="section-1-1">
    <h4>1.2 Description du projet  <small><a href="#toppage">↑↑↑</a></small></h4>
Vous venez d’être recruté comme développeur par Philippe - directeur d’une toute nouvelle
startup nommée MoneyValue afin de développer une plateforme de conversion monétaire.
MoneyValue travaille dans le domaine de la finance.
L’objectif de ce service public et gratuit est d’acquérir des données sur les conversions les plus
demandées.
L’objectif est de développer une API REST utilisable par des développeurs externes et qui
permet de convertir des devises en d’autres devises.
Vous devez également développer l’administration de l’API qui permet de gérer les devises
mises à disposition.

> Plus de détails dans le [Brief](https://github.com/BastosC/eval-em-laravel-2022/raw/master/documentation/Brief.pdf)

</div>

<div id="section-1-2">
    <h4>1.2 Contexte et Méthode de travail <small><a href="#toppage">↑↑↑</a></small></h4>

Le site web que vous allez développer doit impérativement répondre à ces critères : 
⦁ L’API doit être développée avec le framework Laravel et la base de donnée MySQL
⦁ L’administration doit être développée coté front avec le framework Vue.js
⦁ Les produits doivent répondre aux demandes décrites dans le cahier des charges

<b>Temps octroyé pour réaliser ce projet : 7 Jours</b>

    J'ai choisi réaliser les tâches dans cet ordre :
 
      Jour 1 - Compréhension du projet et planification de la stratégie de développement.
      Jour 2 - Intégration de la maquette en Vue.js.
      Jour 3 - Mise en place de laravel et automatisation pour l'hébergement.
      Jour 4 - Réalisation du diagramme de tables SQL puis de tout les éléments backends .
      Jour 5 - Connexion backend avec le front-end réalisé précedemment.
      Jour 6 - Rédaction de la documentation & reviews de bugs.

</div>





# <u>2. Points du brief</u>

☑️✅🅾️

<div id="section-2-1">
    <h3>2.1 Libertés <small><a href="#toppage">↑↑↑</a></small></h3>
   <ul>
   <li>✅ Vous êtes libre d’utiliser les librairies tierces dont vous avez besoin</li>
   <br/>
   <p>Pour l'authentification de l'api j'ai utilisé comme base un <a href="https://github.com/PrijalBista/laravel-api-auth-sanctum-boilerplate">repo github</a> qui utilise Sanctum de laravel  </p>
   <p>Pour le front j'ai utilisé :
   <ul>
   <li>"vue-toastification": "^2.0.0-rc.5" - Pour les notifications</li>
   <li>"vue-universal-modal": "^1.1.4", - Pour les modals</li>
   <li>"vite": "^3.0.7" - Bundle vue app</li>
   </ul>
   </p>
   <li>✅ Vous êtes libre d’utiliser les API et services tiers nécessaires</li>
   <br/>
   <p>Pour la liste des monnaies j'ai repris les monnaies convertibles avec du javascript natif / cf doc mdn<img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/currencies/mdn%20web%20docs.JPG" /></p>
   <li>✅ Vous êtes libre d’ajouter des fonctionnalités EN PLUS de la demande client</li>
  <ul>
  <li>Front : Affichage du status de connexion </li>
  <li>Front : Légères animations </li>
  <li>Hébergement et démo en ligne </li>
  </ul>
   </ul>
</div>

<div id="section-2-2">
    <h3>2.2 Contraintes de développement <small><a href="#toppage">↑↑↑</a></small></h3>
     <ul>
     <li>☑️ L’anglais sera toujours utilisé pour les champs et les variables</li>
        <p>Fait .</p>
            <li>☑️ On utilisera le nommage en camelCase / PascalCase pour le nommage des fonctions et
        variables et nom des classes (gérées automatiquement par la CLI de Laravel)</li>
        <p>Fait .</p>
            <li>✅ Les méthodes et propriétés doivent être toujours commentées</li>
        <p>Quelques methodes sont comentés, 
        <details>
        <summary>Exemple 1</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture1.JPG" /></details>
         <details>
        <summary>Exemple 2</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture2.JPG" /></details>
        </p>
            <li>✅ Vous utiliserez la technique du contrôleur de ressource de Laravel pour le CRUD de
        ressource.</li>
        <p>
        <details>
        <summary>Exemple</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture3.JPG" /></details>
        </p>
            <li>🅾️ Vous utiliserez le service de validation de Laravel pour la gestion des formulaires.</li>
        <p></p>
            <li>✅ Les données seront récupérées/traitées dans le code à l’aide du composant Eloquent de
        Laravel.</li>
        <p>
         <details>
        <summary>Exemple</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture4.JPG" /></details>
        </p>
                <li>✅  Vous devez mettre en place un github pour versionner votre code</li>
        <p>Ce github</p>
                <li>✅ Vous devez mettre en place des migrations et des seeders pour la base de données.</li>
        <p>     <details>
        <summary>Exemple 1</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture5.JPG" /></details>
         <details>
        <summary>Exemple 2</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture6.JPG" /></details></p>
     </ul>
</div>

<div id="section-2-3">
    <h3>2.3 L'administration <small><a href="#toppage">↑↑↑</a></small></h3>
    <ul>
     <li>✅ S’identifier et accéder à l’administration privée</li>
   <p>  
   Authentification avec Laravel Sanctum<br/>
   Access token sauvegardé dans le localstorage
   <details>
        <summary>Exemple 1</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture7.JPG" /></details></p>
      <li>✅ Visualiser la liste des pairs supportées</li>
   <p> <details>
        <summary>Exemple 1</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture8.JPG" /></details></p>
      <li>✅ Ajouter, modifier ou supprimer une paire de conversion</li>
   <p><details>
        <summary>Exemple 1</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture9.JPG" /></details></p>
      <li>🅾️ Visualiser le nombre de requêtes effectuées pour chaque pair.</li>
   <p>Je n'ai pas compris</p>
     </ul>
</div>

<div id="section-2-4">
    <h3>2.4 L'API <small><a href="#toppage">↑↑↑</a></small></h3>
     <ul>
     <li>✅ L’API est de type REST et permet à un développeur tierce de convertir des devises en d’autres
devises</li>
   <p><details>
        <summary>Exemple 1</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture10.JPG" /></details></p>
      <li>✅ Le endpoint de l’API devra être : /api</li>
   <p>
   Touts les points de l'api sont préfixés avec "/api"
   <details>
        <summary>Exemple 1</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture11.JPG" /></details></p>
      <li>✅ Savoir si le service est fonctionnel</li>
   <p>
   Un point de couleur indique l'état de connexion avec l'api
   <details>
        <summary>Exemple 1</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture12.JPG" /></details></p>
      <li>✅ Récupérer la liste des pairs de conversion supportées.</li>
   <p><details>
        <summary>Exemple 1</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture8.JPG" /></details></p>
    <li>✅ Convertir une quantité de devise suivant une paire existante.</li>
   <p><details>
        <summary>Exemple 1</summary><img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/documentation/Capture8.JPG" /></details></p>
     </ul>
</div>

<div id="section-2-5">
    <h3>2.5 Les données <small><a href="#toppage">↑↑↑</a></small></h3>
  <ul>
     <li>✅ Devises - 
Chaque devise est identifiée par 3 lettres</li>
   <p>Toutes les monnaies possède un code de trois lettres en Majuscules</p>
      <li>🅾️ Paires - 
Chaque paire possède un taux de conversion fixe entre deux devises</li>
   <p></p>
      <li>🅾️ Paires - Les conversions doivent pouvoir se faire dans les deux sens
</li>
   <p></p>
      <li>🅾️ Conversion - 
Le décompte du nombre de conversion est attaché à chaque paire.</li>
   <p></p>
     </ul>
</div>

<div id="section-2-6">
    <h3>2.6 Analyse client <small><a href="#toppage">↑↑↑</a></small></h3>
   <p> Reformuler ici avec vos mots votre compréhension de moneyValue - votre client - et des
implications techniques que cela engendre.</p>
> <i>Je n'ai pas bien compris le système de paires qu'il fallait faire.</i>
</div>

<div id="section-2-7">
    <h3>2.7 Choix technologiques<small><a href="#toppage">↑↑↑</a></small></h3>
 <p> Motivez vos choix technologiques, aussi bien côté administration (front) que du côté de l’API
(back)</p>
> <i>J'ai préféré pratiqué et d'apprendre de nouvelles choses avec Vue.js plutot que de perfectionner la partie backend car ça correspond plus à mon projet professionel.</i>
</div>

<div id="section-2-8">
    <h3>2.8 Evaluation du temps de travail<small><a href="#toppage">↑↑↑</a></small></h3>
 
 <a href="#section-1-2">Voir section "1.2 Contexte et Méthode de travail"</a>
</div>

<div id="section-2-9">
    <h3>2.9 Liste fonctionelle <small><a href="#toppage">↑↑↑</a></small></h3>
Listez de manière exhaustive les fonctionnalités à développer (administration et API)

Recettage
Faites un tableau avec comme entrée la liste fonctionnelle, et comme sortie si la fonctionnalité
est opérationnelle ou non opérationnelle (ou possède un bug, une limitation …)
[Voir ce repo github](https://github.com/BastosC/eval-em-aout-2022)
</div>

<div id="section-2-10">
    <h3>2.10 Diagramme de la base de données <small><a href="#toppage">↑↑↑</a></small></h3>
<p>  Insérez ici un diagramme des tables MySQL (réalisé sur feuille de papier ou à l’aide d’un logiciel
dédié, tel que mySql Worksbench)
Dans ce but expliciter les relations dans votre schéma : représentez les à l'aide de "flèches"
normalisées entre les tables ou entités.</p>
<img src="https://raw.githubusercontent.com/BastosC/eval-em-aout-2022/master/currencies/Diagramme table SQL.JPG" />
</div>

<div id="section-2-11">
    <h3>2.11  Documentation de l'API<small><a href="#toppage">↑↑↑</a></small></h3>
Rédigez de manière succincte :
<li>1. les différentes URL de l’API REST (avec le verbe HTTP)</li>
<li>2. Leur fonctionnalité</li>
<li>3. Les données retournées</li>
<li>4. Les message d’erreur possible</li>
<br/>

<ul>
<li>
<p><b>https://currency-converter-em.herokuapp.com/api/ping</b></p>
<p>Pour tester le status de l'api</p>
</li>
<li>
<p><b>https://currency-converter-em.herokuapp.com/api/ping</b></p>
<p>Pour tester le status de l'api</p>
</li>
</ul>
</div>

<div id="section-2-12">
    <h3>2.12  Adresse github <small><a href="#toppage">↑↑↑</a></small></h3>
    <p>Adresse Gihtub : <a href="https://github.com/BastosC/eval-em-aout-2022">https://github.com/BastosC/eval-em-aout-2022</a></p> 
    <p>Adresse Démo : <a href="https://eval-em-aout-2022.vercel.app/" >https://eval-em-aout-2022.vercel.app/</a></p> 


</div>

<div id="section-2-13">
    <h3>2.13  Wireframe de la partie front de l'adminsitration <small><a href="#toppage">↑↑↑</a></small></h3>
   ...
</div>


# <u>3. Divers</u>

<div id="section-3-1">
    <h3>3.1 Développeur<small><a href="#toppage">↑↑↑</a></small></h3>
    <h5>Bastien CHANTREL</h5>
    <p>étudiant à l'école multimédia depuis 2018</p>
    <a href="https://fr.linkedin.com/in/bastien-chantrel" target='_blank' rel="noopenner noreferrer">Linkedin</a>
</div>

<div id="section-3-2">
    <h3>3.2 Hébergement en ligne<small><a href="#toppage">↑↑↑</a></small></h3>
    <h4>Base de données</h4>
    <span>remotemysql.com</span>
    <br/>
    <span>Gratuit avec limite</span>
    <span>
    <br/>
    DB_HOST=remotemysql.com
    <br/>
DB_PORT=3306
    <br/>
DB_DATABASE=MoLR1J1ETG
    <br/>
- Me contacter pour identifiants
</span>
    <h4>Hébergement front-end</h4>
  <span>Vercel</span>
    <br/>
    <span>Gratuit avec limite</span>
    <br/>
    <span>Sync avec le repo github</span>
        <br/>
    <a href="https://eval-em-aout-2022.vercel.app/">https://eval-em-aout-2022.vercel.app/</a>
       <h4>Hébergement back-end</h4>
  <span>Heroku</span>
    <br/>
    <span>Gratuit jusqu'au 22 Novembre 2022</span>
        <br/>
    <span>Sync avec le repo github</span>
<br/>
<a href="https://currency-converter-em.herokuapp.com/api/" >https://currency-converter-em.herokuapp.com/api/</a>
</div>

<div id="section-3-3">
    <h3>3.3 Technologies utilisées<small><a href="#toppage">↑↑↑</a></small></h3>
   <ul>
       <li> 
        <a href="https://vuejs.org/" target='_blank' rel="noopenner noreferrer">Vue.js</a>
    </li>
     <li> 
        <a href="https://www.php.net/" target='_blank' rel="noopenner noreferrer">PHP</a>
    </li>
     <li> 
        <a href="https://www.mysql.com/fr/" target='_blank' rel="noopenner noreferrer">MySQL</a>
    </li>
       <li> 
        <a href="https://laravel.com/" target='_blank' rel="noopenner noreferrer">Laravel</a>
    </li>
         <li> 
        <a href="https://fr.linkedin.com/in/bastien-chantrel" target='_blank' rel="noopenner noreferrer">SQL Workbench</a>
    </li>
        <li> 
        <a href="https://www.heroku.com/home" target='_blank' rel="noopenner noreferrer">Heroku</a>
    </li>
          <li> 
        <a href="https://vercel.com/features/previews" target='_blank' rel="noopenner noreferrer">Vercel</a>
    </li>

    
   </ul>
</div> 

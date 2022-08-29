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
    -   #### [2.2 - Contraintes de développement](#section-2-3)
    -   #### [2.3 - L'administraton](#section-2-2)
    -   #### [2.4 - L'API](#section-2-4)
    -   #### [2.6 - Analyse client](#section-2-6)
    -   #### [2.7 - Choix technologiques](#section-2-7)
    -   #### [2.9 - Liste fonctionelle](#section-2-9)
    -   #### [2.10 - Diagramme de la base de données](#section-2-10)
    -   #### [2.11 - Documentation de l'API](#section-2-11)
    -   #### [2.12 - Adresse github / Versioning / Hébergement / Démo](#section-2-12)
    -   #### [2.13 - Wireframe de la partie front de l'adminsitration'](#section-2-13)

-   ### 3. Livret pédagogique - Analyser des besoins et définir le périmètre technique d’un projet - RNCP34569BC<u>01</u>

    -   #### [3.1 - Analyser les problématiques du client afin de proposer une solution adaptée aux contraintes de ce dernier en prenant en compte ses objectifs, ses capacités financières et techniques. ](#section-3-1)
    -   #### [3.2 - Analyser la demande client en vue d'établir une liste fonctionnelle exhaustive en décomposant chaque demande en fonctionnalité technique. ](#section-3-2)
    -   #### [3.3 - Traduire la liste fonctionnelle en cahier des charges afin d'établir les solutions technologiques adaptées en sélectionnant les langages, middleware et outils appropriés. ](#section-3-3)
    -   #### [3.4 - évaluer la quantité de travail nécessaire afin d'établir le coût de développement du projet, en calculant le nombre de jour de travail à partir des ressources en présence. ](#section-3-4)
    -   #### [3.5 - Organiser une veille technologique afin d'analyser l'évolution des technologies et les innovations du métier en utilisant des outils de collecte et d'organisation de l'information.](#section-3-5)

-   ### 4. Livret pédagogique - Développer les comportements de l'interface front-end - RNCP34569BC<u>03</u>

    -   #### [3.1 - Programmer les scripts Javascript dans le but de rendre l'interface réactive, animée et conforme aux exigeances de la conception, en employant des librairies tierces dédiées à ce type d'action. ](#section-3-1)
    -   #### [3.2 - Programmer les scripts Javascript afin d'envoyer ou de recevoir des données à un serveur, en employant des librairies tierces dédiées à ce type d'action (type Firebase). ](#section-3-2)
    -   #### [3.3 - Mettre en œuvre des services de collecte et d'analyse d'information des visiteurs (type Google Analytics) en vue de produire des données pertinentes pour l'évolution du produit. ](#section-3-3)
    -   #### [3.4 - Organiser une méthode de recettage de la partie back-end en vue d'assurer la conformité du produit final avec le cahier des charges en regroupant les résultats des tests effectués par le chef de projet, le client et le développeur. ](#section-3-4)

-   ### 5. Livret pédagogique - Développer les comportements de l'interface back-end - RNCP34569BC<u>04</u>

    -   #### [4.1 - Installer un serveur de test et de production en vue d'un développement par étape cohérent en installant plusieurs environnements de travail identiques. ](#section-4-1)
    -   #### [4.2 - Analyser la structure des données et établir un schéma de base de données et leurs relations en vue d'un déploiement sur plusieurs environnements, en utilisant un outil de modélisation de schémas adapté. ](#section-4-2)
    -   #### [4.3 - Installer et configurer des bases de données permettant de réaliser des requêtes performantes et adaptées aux fonctionnalités des produits. ](#section-4-3)
    -   #### [4.4 - Concevoir et développer une interface d'administration complète et sécurisée à l'attention du client afin qu'il puisse gérer ses données de manière autonome, en utilisant les outils et les frameworks adaptés.](#section-4-4)
    -   #### [4.5 - Programmer l'architecture back-end du produit afin qu'il soit conforme aux standards actuels de ce type de produit.](#section-4-5)
    -   #### [4.6 - Programmer les fonctionnalités back-end du produit en vue de remplir la liste fonctionnelle à réaliser, énoncée dans le cahier des charges. ](#section-4-6)
    -   #### [4.7 - Programmer l'interface (API) d'envoi et de réception de données sécurisées afin de permettre une actualisation asynchrone de l'interface en utilisant les briques HTTP du système choisi.](#section-4-7)
    -   #### [4.8 - Mettre en œuvre les protocoles de sécurité et les bonnes pratiques de développement afin d'assurer la confidentialité des données client. ](#section-4-8)
    -   #### [4.9 - Organiser une méthode de recettage de la partie back-end en vue d'assurer la conformité du produit final avec le cahier des charges en regroupant les résultats des tests effectués par le chef de projet, le client et le développeur.](#section-4-9)
    -   #### [4.10 - Élaborer un système de maintenance afin d'offrir au client la pérennité et l'évolution du produit.](#section-4-10)


-   ### 6. Divers
    -   #### [6.1 - Développeur](#section-5-1)
    -   #### [6.2 - Technologies utilisées](#section-5-2)

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

> Plus de détails dans le [Brief](https://github.com/BastosC/eval-em-laravel-2022/raw/main/Brief.pdf)

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
   <p>Aucunes librairies tierces utilisés</p>
   <li>☑️ Vous êtes libre d’utiliser les API et services tiers nécessaires</li>
   <p>Aucunes librairies tierces utilisés</p>
   <li>☑️ Vous êtes libre d’ajouter des fonctionnalités EN PLUS de la demande client</li>
   <p>Aucunes librairies tierces utilisés</p>
   </ul>
</div>

<div id="section-2-3">
    <h3>2.3 Contraintes de développement <small><a href="#toppage">↑↑↑</a></small></h3>
     <ul>
     <li>🅾️ L’anglais sera toujours utilisé pour les champs et les variables</li>
        <p>...</p>
            <li>🅾️ On utilisera le nommage en camelCase / PascalCase pour le nommage des fonctions et
        variables et nom des classes (gérées automatiquement par la CLI de Laravel)</li>
        <p>...</p>
            <li>🅾️ Les méthodes et propriétés doivent être toujours commentées</li>
        <p>...</p>
            <li>🅾️ Vous utiliserez la technique du contrôleur de ressource de Laravel pour le CRUD de
        ressource.</li>
        <p>...</p>
            <li>🅾️ Vous utiliserez le service de validation de Laravel pour la gestion des formulaires.</li>
        <p>...</p>
            <li>🅾️ Les données seront récupérées/traitées dans le code à l’aide du composant Eloquent de
        Laravel.</li>
        <p>...</p>
                <li>🅾️  Vous devez mettre en place un github pour versionner votre code</li>
        <p>...</p>
                <li>🅾️ Vous devez mettre en place des migrations et des seeders pour la base de données.</li>
        <p>...</p>
     </ul>
</div>

<div id="section-2-4">
    <h3>2.4 L'administration <small><a href="#toppage">↑↑↑</a></small></h3>
    <ul>
     <li>🅾️ S’identifier et accéder à l’administration privée</li>
   <p>...</p>
      <li>🅾️ Visualiser la liste des pairs supportées</li>
   <p>...</p>
      <li>🅾️ Ajouter, modifier ou supprimer une paire de conversion</li>
   <p>...</p>
      <li>🅾️ Visualiser le nombre de requêtes effectuées pour chaque pair.</li>
   <p>...</p>
     </ul>
</div>

<div id="section-2-5">
    <h3>2.5 L'API <small><a href="#toppage">↑↑↑</a></small></h3>
     <ul>
     <li>🅾️ L’API est de type REST et permet à un développeur tierce de convertir des devises en d’autres
devises</li>
   <p>...</p>
      <li>🅾️ Le endpoint de l’API devra être : /api</li>
   <p>...</p>
      <li>🅾️ Savoir si le service est fonctionnel</li>
   <p>...</p>
      <li>🅾️ Récupérer la liste des pairs de conversion supportées.</li>
   <p>...</p>
    <li>🅾️ Convertir une quantité de devise suivant une paire existante.</li>
   <p>...</p>
     </ul>
</div>

<div id="section-2-6">
    <h3>2.6 Les données <small><a href="#toppage">↑↑↑</a></small></h3>
  <ul>
     <li>🅾️ Devises - 
Chaque devise est identifiée par 3 lettres</li>
   <p>...</p>
      <li>🅾️ Paires - 
Chaque paire possède un taux de conversion fixe entre deux devises</li>
   <p>...</p>
      <li>🅾️ Paires - Les conversions doivent pouvoir se faire dans les deux sens
</li>
   <p>...</p>
      <li>🅾️ Conversion - 
Le décompte du nombre de conversion est attaché à chaque paire.</li>
   <p>...</p>
     </ul>
</div>

<div id="section-2-7">
    <h3>2.7 Analyse client <small><a href="#toppage">↑↑↑</a></small></h3>
    Reformuler ici avec vos mots votre compréhension de moneyValue - votre client - et des
implications techniques que cela engendre.

   ...
</div>

<div id="section-2-8">
    <h3>2.8 Choix technologiques<small><a href="#toppage">↑↑↑</a></small></h3>
  Motivez vos choix technologiques, aussi bien côté administration (front) que du côté de l’API
(back)
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
</div>

<div id="section-2-10">
    <h3>2.10 Diagramme de la base de données <small><a href="#toppage">↑↑↑</a></small></h3>
  Insérez ici un diagramme des tables MySQL (réalisé sur feuille de papier ou à l’aide d’un logiciel
dédié, tel que mySql Worksbench)
Dans ce but expliciter les relations dans votre schéma : représentez les à l'aide de "flèches"
normalisées entre les tables ou entités.
</div>

<div id="section-2-11">
    <h3>2.11  Documentation de l'API<small><a href="#toppage">↑↑↑</a></small></h3>
Rédigez de manière succincte :
<li>1. les différentes URL de l’API REST (avec le verbe HTTP)</li>
<p>...</p>
<li>2. Leur fonctionnalité</li>
<p>...</p>
<li>3. Les données retournées</li>
<p>...</p>
<li>4. Les message d’erreur possible</li>
<p>...</p>
</div>

<div id="section-2-12">
    <h3>2.12  Adresse github / Versioning / Hébergement / Démo <small><a href="#toppage">↑↑↑</a></small></h3>
    <p>Adresse Gihtub :</p> 
    <p>Adresse Démo :</p> 

    L'api est hébergé gratuitement avec heroku.
    Le versionning est gérée avec github actions, paramétré à l'aide de heroku.
    Le lien de démo est sychroniser automatiquement avec la branche master de ce projet.
    
</div>

<div id="section-2-13">
    <h3>2.13  Wireframe de la partie front de l'adminsitration <small><a href="#toppage">↑↑↑</a></small></h3>
   ...
</div>



# <u>3. Points Front-end du livret pédagogique</u>

<div id="section-3-1">
    <h4>3.1 - Analyser la maquette graphique fournie, afin d'établir un zoning, un wireframe et une liste de composants identiques, en dissociant les différents éléments constitutifs de l'interface. <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-3-2">
    <h4>3.2 Rédiger le code HTML et CSS afin de restituer précisément la maquette graphique, en respectant les normes établies par le World Wide Web Consortium (W3C) et l'hétérogénéité des dispositifs d'affichage <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-3-3">
    <h4>3.3 Optimiser et/ou redimensionner les images, les sons et les vidéos afin de réduire les temps de chargement, en utilisant les logiciels d'édition appropriés. <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-3-4">
    <h4>3.4 Rédiger les feuilles de style CSS afin de rendre fluides ou redimensionnables les éléments de la maquette graphique.  <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-3-5">
    <h4>3.5 Mettre en œuvre les normes techniques établies par le Web Accessibility Initiative (WAI) du World Wide Web Consortium (W3C) afin de réduire ou supprimer les obstacles à l'accès au contenu pour les personnes en situation de handicap.  <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

# <u>4. Points Back-end du livret pédagogique</u>

<div id="section-4-1">
    <h4>4.1 Installer un serveur de test et de production en vue d'un développement par étape cohérent en installant plusieurs environnements de travail identiques. <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-4-2">
    <h4>4.2 Analyser la structure des données et établir un schéma de base de données et leurs relations en vue d'un déploiement sur plusieurs environnements, en utilisant un outil de modélisation de schémas adapté. <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-4-3">
    <h4>4.3 Installer et configurer des bases de données permettant de réaliser des requêtes performantes et adaptées aux fonctionnalités des produits. <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-4-4">
    <h4>4.4 Concevoir et développer une interface d'administration complète et sécurisée à l'attention du client afin qu'il puisse gérer ses données de manière autonome, en utilisant les outils et les frameworks adaptés. <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-4-5">
    <h4>4.5 Programmer l'architecture back-end du produit afin qu'il soit conforme aux standards actuels de ce type de produit. <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-4-6">
    <h4>4.6 Programmer les fonctionnalités back-end du produit en vue de remplir la liste fonctionnelle à réaliser, énoncée dans le cahier des charges. <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-4-7">
    <h4>4.7 Programmer l'interface (API) d'envoi et de réception de données sécurisées afin de permettre une actualisation asynchrone de l'interface en utilisant les briques HTTP du système choisi. <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-4-8">
    <h4>4.8 Mettre en œuvre les protocoles de sécurité et les bonnes pratiques de développement afin d'assurer la confidentialité des données client. <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

<div id="section-4-9">
    <h4>4.9 Organiser une méthode de recettage de la partie back-end en vue d'assurer la conformité du produit final avec le cahier des charges en regroupant les résultats des tests effectués par le chef de projet, le client et le développeur. <small><a href="#toppage">↑↑↑</a></small></h4>
   ...
</div>

# <u>6. Divers</u>

<div id="section-6-1">
    <h3>5.1 Développeur<small><a href="#toppage">↑↑↑</a></small></h3>
    <h5>Bastien CHANTREL</h5>
    <p>étudiant à l'école multimédia depuis 2018</p>
    <a href="https://fr.linkedin.com/in/bastien-chantrel" target='_blank' rel="noopenner noreferrer">Linkedin</a>
</div>

<div id="section-6-2">
    <h3>5.2 Technologies utilisées<small><a href="#toppage">↑↑↑</a></small></h3>
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
   </ul>
</div>

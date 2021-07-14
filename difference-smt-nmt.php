<?php 
 $lang='fr';
 $otherLangName='en';
 $otherLang='en';
 ?>
 
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Madeleine Barois | SMT vs. NMT ?</title>
<link rel="shortcut icon" href="images/logo_circuit_blue.png" type="image/x-icon"/>
<meta name="description" content="Quelle est la différence entre la SMT et la NMT ?">
<meta name="author" content="Madeleine Barois">


<?php 
$xml = simplexml_load_file('languages.xml') or die('xml not found"!');
 include 'header.php';
 
 ?>
	<div id="smt-nmt" class="blog-article">
	

	<header>
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>SMT vs. NMT: Qu'est-ce qui les distingue ?</h1>
			<img class="white-line" src="images/white_line.png"/>
        </div>
      </div>
    </div>
  </div>
</div>
</header>


<div class="container">
		<p class="subtitle"> Si il y a deux concepts qui circulent dans le domaine de la localisation ces jours-ci, ce sont les fameux <b> « SMT » (Statistical Machine Translation)</b> et la <b> « NMT » (Neural Machine Translation)</b>. Mais malgré leur ubiquité, la compréhension autour de ces deux concepts est souvent nébuleuse, même parmi les professionnels de la traduction. Particulièrement obscure est la distinction entre eux. <p>La raison devient claire lorsqu’on cherche soi-même à se renseigner sur le sujet ; on se retrouve rapidement enseveli sous une montagne de jargon et d’algorithmes que nous propose Google.</p> <p> En effet, les notions s’avèrent si complexes qu’elles sont quasiment impossibles de résumer « en quelques phrases ». Ceci dit, j’aimerais tenter ma chance et tâcher à mon tour d’élucider la distinction SMT / NMT, de manière la plus simple et concise que possible. </p>

		<h2>La SMT (traduction automatique à base de statistiques)</h2>

		<p>La SMT est un système qui date des années 90 et qui <b>exploite des corpus bilingues existants</b> afin de construire des modèles statistiques capables de traduire des nouveaux textes.</p>

		<p>Plus précisément, il s'agit d'un <b>pipeline de modules</b> différents, qui sont <b>"entrainés" séparément</b> avec les données des corpus bilingues. On distingue donc deux phases différentes : </p>
		
		<h3 style="font-weight:bold; text-transform:uppercase;">Phase 1 :L'entrainement</h3>
		<p>On alimente d’abord le moteur avec des textes déjà traduits, préférablement en grand nombre, de bonne qualité, et pertinentes (domaine d’activité connexe, type de langue approprié, etc.). On lance ensuite l’entrainement, par lequel le moteur effectuera les analyses et opérations suivantes :</p>    

		<h4>1. Alignement des mots</h4>
		<p>Chaque segment des corpus est analysées selon un <a href=http://www.statmt.org/moses/giza/GIZA++.html>modèle statistique</a>, ou ensemble d’algorithmes, précis qui aligne chaque mot avec ce qu’il comprend être son/ses équivalent(s) dans le segment cible. </p> 


		<h4>2. Découpage en phrasèmes</h4>
		<p>Les segments sont ensuite découpées en petites sous-séquences de mots, dites « unités phraséologiques » ou « phrasèmes », selon leur fréquence de collocation. Pour dire autrement, si deux ou plusieurs mots se retrouvent souvent collés ensemble, on juge qu’ils constituent une combinaison plus ou moins figée = phrasème.</p> 

		<h4>3. Le Modèle de Traduction</h4>
		<p>Ensuite se crée le <b>« Modèle de traduction »</b> un modèle statistique qui calcule : </p>

		<ol>
			<li>1) La probabilité qu’une phrase dans la langue source serait traduite par une autre phrase dans la langue cible. On parle souvent de <b> « Phrase tables »</b> : des tableaux d’équivalences, où les phrasèmes sources sont alignés côte à côte avec leurs possibles cibles les probabilités d’occurrence de celles-ci. </li>



			<li>2) Les probabilités de réorganisation des phrasèmes. Grosso modo : par combien de pas vers l’avant ou l’arrière un phrasème donné est-il disposé à se déplacer pour arriver à l’organisation correcte dans le segment cible : </li>
		</ol>

		<h4>4. Le Modèle Linguistique</h4>
		<p>Le système construit ensuite un deuxième modèle appelé le <b>Modèle linguistique</b>. Celui-ci calcule les probabilités de collocation des mots, c’est-à-dire, la probabilité qu'un tel mot se retrouve à côté d'un autre, <b>uniquement pour la langue cible</b>. Ce modèle est sensé renseigner la bonne structure de langage de sortie.</p>

		<p style="text-align:center;">SMT: Le pocessus d'entrainement :</p>
		<img class="blog-article-image" src="images/entrainement.png" alt="Processus d’entrainement SMT"/>
		<br>
<br>
<br>
		<h3 style="font-weight:bold; text-transform:uppercase;"> Phase 2 :La traduction</h3>
		<p>Pour faire très simple : Le moteur génère d'abord plusieurs possibilités de traduction pour chaque segment source, selon le Modèle de traduction. Il utilise ensuite le Modèle de langue pour sélectionner, ou <b>"décoder"</b> la meilleure traduction, ou, plus précisément, la traduction la plus probable dans la langue cible.</p>

		<p style="text-align:center;">SMT: Le processus de traduction :</p>
		<img class="blog-article-image" src="images/traduction.png" alt="Processus de traduction SMT"/>
		<br>
		<br>
		<p>Il est important de comprendre la grande majorité des systèmes SMT sont "phrase-based" c’est-à-dire qu'ils <b>analysent et traduisent un texte uniquement phrasème par phrasème</b>, comme nous l’avons vu précédemment. Ceci permet de prendre en compte, dans une certaine mesure, le contexte des mots : il reconnait qu’une unité sémantique ne se limite pas toujours à un mot, mais très souvent à un groupe de mots. Par exemple, le sens du mot « part » varie en fonction des mots qui l’accompagnent : « il part », « de part et d’autre », « d’une part », « la part de ». </p> 

		<p>Le contexte sémantique et syntactique et en effet clé pour générer de bonnes traductions. Mais malheureusement le système à base de phrasèmes ne suffit pas. Prenons l’exemple suivant en allemand :</p>
<br>
		<table>
			<tr>
				<td style="font-weight:bold" width="20%">Allemand</td>
				<td> Ich <span style="color:orange">habe</span> gestern Abend beim Eltern noch mal zu viel Bratwurst <span style="color:orange">gegessen</span>.</td>
			</tr>
			<tr>
				<td style="font-weight:bold"> Transcription</td>
				<td> J‘<span style="color:orange">ai</span> hier soir chez les parents encore une fois trop de saucisse grillée <span style="color:orange">mangé</span>.</td>
			</tr>
			<tr>
				<td style="font-weight:bold"> Traduction</td>
				<td> Hier soir j’<span style="color:orange">ai</span> encore trop <span style="color:orange">mangé</span> de saucisse grillée chez les parents. </td>
			</tr>
		</table>
<br>
<br>
		<p>Un locuteur d’allemand comprendrait sans problème la relation entre l’auxiliaire « habe » et le verbe « gegessen ». Mais lorsque le modèle de traduction SMT déchiquète la phrase en petits phrasèmes, le lien entre les deux particules physiquement éloignées sera probablement perdu. En effet, la SMT <b>gère mal la grammaire au niveau de la phrase entière.</b> </p> 

		<h2>NMT (Traduction à base de réseaux de neurones)</h2> 
		
		<p>La NMT est un développement plus récent, sur le marché depuis 2015. Une des plus notoires idées fausses à son égard est qu'elle n'est pas un système statistique. Elle l'est. La différence est que la NMT repose sur un <b>vaste réseau de neurones</b>, donc de l'intelligence artificielle, et <b>apprend par elle-même son modèle statistique</b>. C'est ici que les choses deviennent réellement complexes, si elles ne l’étaient pas avant, et requierent un niveau expert en maths et en informatique en faire sens.</p> 

		<p>Nous, en tant qu'utilisateurs devons surtout retenir les caractéristiques suivants de la NMT, qui la différencie qualitativement de la SMT:</p>
		<ol>
			<li>1) Elle constitue <b>un seul processus intelligent</b>. Je m'explique. Nous avions vu que la SMT qui est composée d’un pipeline de plusieurs modules (les plus importants étant le Modèles de traduction et le Modèle linguistique) qui doivent chacun être configurés et entrainés individuellement et à leur tour. Le système neuronal, lui, constitue un seul système cohésif, dit « end-to-end » qui apprendra par lui-même à construire son modèle statistique. Le fait de décloisonner les modules ainsi les permettent de s’entrecroiser, les différentes analyses s’appuyant l’une sur l’autre afin de créer un seul modèle plus vaste et complet. </li>

			<p style="text-align:center;">Le processus NMT :</p>
		<img class="blog-article-image" src="images/nmt.png" alt="Processus SMT"/>
<br>
<br>
			<li>2) Elle fait ces <b>calculs au niveau de la phrase</b>. Contrairement à la SMT, sans entrer dans les détails, la NMT fait ses analyses au niveau de la phrase, plutôt qu’on niveau des phrasèmes. Ceci emmène une bien meilleure gestion de la grammaire et produit des outputs beaucoup plus fluides, plus semblables à des traductions humaines</li>
			<li>3) Encore sans entrer dans les détails : elle <b>prend mieux en compte les similarités sémantiques</b> entre les mots. Par exemple, la plu part des systèmes SMT traiterait les mots « chat » et « félin »  comme étant complètement distincts, tandis que la NMT prendra en compte le lien sémantique entre eux.</li>

		</ol>

		<p>Ceci dit, la NMT est encore loin d’être parfaite. Il s'agit toujours, comme la SMT, d'un système non-linguistique, à base d’analyses statistiques, qui ne comprend pas réellement les langues qu’il traduit et qui est tout à fait capable de produire des résultats sublimement incohérents. </p>
		
		<p>On ne peut cependant nier l’impact considérable que cette technologie continuera à engendrer sur l’industrie de la traduction. Plus en plus de fournisseurs de services linguistiques abandonnent la SMT pour les plus verts pâturages de la NMT, et d’autres, qui auraient jusqu’à présent résisté la révolution « machine translation » se sentent progressivement séduits par ses atouts. </p>



<p><b>En savoir plus : </b></p>
<p><a href="http://www.statmt.org/book/slides/05-phrase-based-models.pdf">http://www.statmt.org/book/slides/05-phrase-based-models.pdf</a></p>
<p><a href="http://www.statmt.org/moses/?n=Moses.Overview"></a></p>
<p><a href="https://machinelearningmastery.com/introduction-neural-machine-translation/">https://machinelearningmastery.com/introduction-neural-machine-translation/</a></p>
<p><a href="https://slator.com/technology/3-reasons-why-neural-machine-translation-is-a-breakthrough/">https://slator.com/technology/3-reasons-why-neural-machine-translation-is-a-breakthrough/</a></p>

</div><!--close container-->
</div>
	
<?php include 'footer.php';?>
<?php include 'scripts.php';?>
</body>

</html>
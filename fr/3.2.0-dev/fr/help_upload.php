<?php
/**
 *
 * Upload Extensions. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2019 Igor Lavrov <https://github.com/LavIgor> and John Peskens <http://ForumHulp.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$help = array(
	array(
		0 => '--',
		1 => 'Modules principaux'
	),
	array(
		0 => 'Que permet l’installateur d’extensions ?',
		1 => 'Il est possible de transférer des extensions depuis différentes sources sans devoir utiliser un logiciel client FTP. Lors du transfert d’une extension déjà installée sur le forum, l’ancienne version sera sauvegardée automatiquement dans le répertoire spécifié du forum - Vérifier le module « Gérer les archives au format ZIP ». Aussi, il est possible de sauvegarder l’archive au format ZIP de la version de l’extension actuellement transférée - Pour cela, cocher la case « Sauvegarder l’archive au format ZIP une fois transférée » avant de lancer le transfert. Il est possible de s’assurer de l’authenticité de l’archive au format ZIP de l’extension en spécifiant la somme de contrôle dans le champ du formulaire correspondant.'
	),
	array(
		0 => 'Quelle est la différence entre le « Gestionnaire d’extensions » de l’installateur d’extensions » et « Gestionnaire d’extensions » par défaut de phpBB ?',
		1 => 'Tout comme le « Gestionnaire d’extensions » par défaut, celui de l’installateur d’extensions est un outil complémentaire au forum phpBB permettant de gérer toutes les extensions et de consulter leurs informations. Il peut être considéré comme une version avancée du gestionnaire d’extensions par défaut de phpBB.<br /><br /><strong>Avantages :</strong><ul><li>Toutes les extensions transférées sont triées alphabétiquement, peu importe si elles sont activées, désactivées ou désinstallées. L’exception : les extensions corrompues.</li><li>Celles-ci sont affichées séparément sur la même page du « Gestionnaire d’extensions » en dessous de la liste des extensions saines. Les raisons de l’indisponibilité sont affichées pour chaque extension corrompue. Un message d’avertissement détaillé est ajouté aux raisons lorsqu’une extension corrompue est installée ou possède des données sauvegardées dans la base de données. Il est possible de cliquer sur la ligne correspondante à n’importe quelle extension corrompue pour consulter ses détails de la même manière que pour les autres extensions.</li><li>N’importe quelle extension (si celle-ci n’est pas corrompue) peut être activée en un seul clic au moyen du bouton affiché à gauche de son nom dans la liste.</li></ul>'
	),
	array(
		0 => 'Qu’apporte le module « Gérer les archives au format ZIP » ?',
		1 => 'Parfois il est utile de pouvoir sauvegarder les archives des extensions ou de les partager. L’archive peut provenir d’anciennes versions d’extensions transférées (archivées automatiquement par sécurité), d’archives qui ont été volontairement sauvegardées en cochant la case « Sauvegarder l’archive au format ZIP une fois transférée » avant le processus de transfert ou des archives au format ZIP d’extensions stockées dans le répertoire spécifique (voir la question « Où peut-on spécifier le répertoire de sauvegardes des archives au format ZIP des extensions ? » plus bas). Il est possible d’extraire, télécharger et supprimer ces archives.'
	),
	array(
		0 => 'Comment utiliser le module « Supprimer des extensions » ?',
		1 => 'Le module « Supprimer des extensions » permet de supprimer du serveur les fichiers des extensions désinstallées, ainsi il est possible d’achever le processus de désinstallation dans devoir utiliser un logiciel client FTP. Lorsqu’une extension n’est plus utile sur le forum, il devient facile de la supprimer complètement. Pour effectuer cette action il est nécessaire de suivre les étapes suivantes :<ul><li>Premièrement, définir l’extension inutile. Il est recommandé pour cela de réaliser une sauvegarde des fichiers du forum et de la base de données avant toute suppression.</li><li>Ensuite, de se rendre dans le module « Gestionnaire d’extensions » de l’installateur d’extensions, de trouver l’extension à supprimer et de s’assurer de sa désactivation : cliquer sur le bouton de l’extension <em>si celui-ci est de couleur verte</em>.</li><li>Après quoi, s’assurer que les données de l’extension sont supprimées : <em>si le bouton de la corbeille de cette extension est affiché</em>, cliquer dessus pour confirmer cette action.</li><li>Enfin, se rendre dans le module « Supprimer des extensions », cliquer sur le lien « Supprimer l’extension » affiché sur la ligne correspondante à l’extension puis confirmer cette action.</li></ul>'
	),
	array(
		0 => '--',
		1 => 'Méthodes de transfert'
	),
	array(
		0 => 'Comment transférer des extensions validées depuis la base de données des personnalisations de phpbb.com ?',
		1 => 'Depuis la page principale de l’installateur d’extensions cliquer sur le lien « Afficher les extensions validées ». Trouver l’extension souhaitée et cliquer sur le lien « Télécharger » correspondant à la ligne de l’extension à transférer. Information : un petit jeu de mot, l’extension sera <em>téléchargée</em> depuis le serveur distant de phpbb.com puis <em>transférée</em> vers le serveur du forum.'
	),
	array(
		0 => 'Comment effectuer un transfert depuis un autre serveur distant ?',
		1 => 'Copier le lien <strong>direct</strong> vers l’archive au format ZIP de l’extension (si le lien ne provient pas du site Web sur phpbb.com, il est nécessaire que celui-ci se termine par <code>.zip</code>) dans le champ dédié du formulaire « Transférer une extension » puis cliquer sur le bouton « Transférer ».'
	),
	array(
		0 => 'Comment transférer une extension depuis son ordinateur ?',
		1 => 'Pour réaliser cela cliquer sur le bouton « Parcourir… » dans le formulaire « Transférer une extension », sélectionner l’archive au format ZIP depuis son ordinateur, puis cliquer sur le bouton « Transférer ».'
	),
	array(
		0 => 'Une erreur s’affiche lorsqu’un lien vers une archive au format ZIP d’une extension est saisie dans le champ et après avoir cliqué sur le bouton « Transférer ». Qu’est-ce qui ne fonctionne pas avec le lien ?',
		1 => 'Afin de transférer une extension il est nécessaire de s’assurer que toutes les conditions suivantes sont réunies :<ol><li>Le lien doit être <strong>direct</strong> : pour les transferts depuis des serveurs distants autres que phpbb.com les liens doivent se terminer par <code>.zip</code>.</li><li>Le lien doit pointer vers le <strong>fichier au format ZIP</strong> de l’extension, et non vers sa page de présentation.</li></ol>'
	),
	array(
		0 => 'Que signifie la somme de contrôle ? Où puis-je l’utiliser ?',
		1 => 'La somme de contrôle aussi nommée « l’empreinte » est utilisée pour vérifier l’intégrité du fichier transféré. Cette fonctionnalité permet de s’assurer que le fichier disponible sur le serveur distant source et le fichier transféré vers le serveur du forum sont identiques. L’empreinte peut être obtenue habituellement depuis le serveur distant source où est stocké le fichier original.'
	),
	array(
		0 => '--',
		1 => 'Gestionnaire d’extensions de l’installateur d’extensions'
	),
	array(
		0 => 'Comment utiliser le gestionnaire d’extensions de l’installateur d’extensions ?',
		1 => 'Le statut de chaque extension est affiché sous forme d’un bouton :<ul><li>Un bouton de couleur verte signifie que l’extension est activée. Aussi, cliquer sur ce dernier lorsqu’il est vert va <strong>désactiver</strong> l’extension.</li><li>Un bouton de couleur rouge signifie que l’extension est désactivée. Lors du clic sur un bouton rouge l’extension est <strong>activée</strong>.</li><li>Si l’extension a un bouton rouge, un statut désactivé et possède des données sauvegardées dans la base de données, alors il y aura un bouton représenté par une corbeille affiché sur sa ligne permettant de supprimer ses données.<br /><em>En cliquant sur ce bouton cela aura pour conséquence de supprimer les données de l’extension de la base de données. Si les fichiers de l’extension doivent être supprimés du serveur, il est nécessaire d’utiliser l’outil de nettoyage d’extensions.</em></li></ul><br />Aussi, il est possible de re-contrôler toutes les versions des extensions en cliquant sur le bouton de même nom ou en paramétrant la vérification de version depuis le « Gestionnaire d’extensions » par défaut de phpBB.'
	),
	array(
		0 => 'Que dire des extensions corrompues ? Est-il possible de les désinstaller ?',
		1 => 'Oui, les extensions corrompues sont affichées depuis le module « Gestionnaire d’extensions » de l’installateur d’extensions en dessous de la liste des extensions saines. Il est possible de consulter les raisons sur leur corruption et si elles possèdent des données sauvegardées dans la base de données du forum. Cliquer une ligne correspondante à une extension corrompue pour consulter ses détails et pour  la gérer.'
	),
	array(
		0 => 'Le bouton d’une extension est de couleur grise. Pourquoi ?',
		1 => 'Un bouton gris signifie qu’il n’est pas possible, actuellement, d’effectuer des actions sur l’extension concernée. Il est probable qu’une action lui étant associée est en cours. Aussi, l’installateur d’extensions ne peut pas se désactiver par lui-même - voilà pourquoi le bouton qui lui est associé est de couleur grise.'
	),
	array(
		0 => '--',
		1 => 'Page des détails de l’extension'
	),
	array(
		0 => 'Quelles informations sont affichées pour les extensions ?',
		1 => 'Les informations affichées dépendent de plusieurs circonstances :<ul><li>La description générale est fournie par les développeurs de l’extension depuis le fichier <code>composer.json</code> (ou par un message d’avertissement si l’extension est corrompue).</li><li>Le numéro de version de l’extension (si non corrompue).</li><li>Si disponible, le contenu du code du fichier <code>README.md</code> (voir l’onglet « À LIRE »).</li><li>Si disponible, le contenu du code du fichier <code>CHANGELOG.md</code> (voir l’onglet « Journal des changements »).</li><li>Les archives des langues pour l’extension.</li><li>L’arborescence des fichiers et répertoires de l’extension.</li></ul>'
	),
	array(
		0 => 'Qu’est-il possible d’effectuer depuis la page des détails de l’extension ?',
		1 => 'Il est possible :<ul><li>D’activer l’extension si le bouton est rouge.</li><li>De désactiver l’extension si le bouton est vert.</li><li>De supprimer les données de l’extension de la base de données du forum si le bouton rouge de la corbeille est affiché.</li><li>De vérifier le statut de la version actuelle de l’extension si le lien vers le fichier de vérification de la version de l’extension est fourni par ses développeurs. Si la version de l’extension est affichée dans une bulle de couleur verte - l’extension est à jour. Si la bulle est de couleur rouge - l’extension n’est pas à jour. Sinon - cela signifie que l’information de vérification de la version de l’extension n’est pas disponible.</li><li>De recevoir et mettre à jour l’extension si une roue dentée est affichée à droite de la bulle de version. Cliquer dessus : si le bouton « Mise à jour » est affiché - alors il sera possible de cliquer dessus, de confirmer l’action ainsi l’installateur d’extensions va mettre jour l’extension. Aussi, il est possible de consulter l’annonce de publication de l’extension en cliquant sur le bouton « Annonce de sortie » du menu de la roue dentée. <strong>Information :</strong> Si le langage JavaScript est désactivé dans le navigateur, ces boutons seront affichés dans le bloc d’informations des détails.</li><li>De gérer les traductions de l’extension. Il est possible de transférer de nouvelles langues pour l’extension - consulter la question : « Quelles traductions peut-on transférer aux extensions ? » plus bas. Aussi, il est possible de supprimer les traductions déjà installées.</li><li>De télécharger les archives des extensions (voir la question « Quelles sont les fonctionnalités proposées par « Télécharger l’archive de l’extension » ? » plus bas).</li></ul>'
	),
	array(
		0 => 'Quelles traductions peut-on transférer aux extensions ?',
		1 => 'Il est possible de transférer des archives au format ZIP contenant les fichiers de langues dédiés à l’extension si ces archives possèdent l’une de ces structures :<ul><li><code>RACINE_DU_FICHIER_ZIP/fichiers_de_langue</code>, ou</li><li><code>RACINE_DU_FICHIER_ZIP/repertoire_unique/fichiers_de_langue</code>, ou</li><li><code>RACINE_DU_FICHIER_ZIP/repertoire_unique/code_ISO_de_la_langue/fichier_de_langue</code>.</li></ul><br />Pour davantage d’informations à propos des méthodes de transfert consulter la section « Méthodes de transfert » plus haut.'
	),
	array(
		0 => 'Quelles sont les fonctionnalités proposées par « Télécharger l’archive de l’extension » ?',
		1 => 'L’installateur d’extensions permet de télécharger les versions d’archives au format ZIP originales des extensions du forum vers son ordinateur. Aussi, il est possible de cocher la case pour supprimer le suffixe des versions de développements avant le téléchargement - cela permet par exemple, de raccourcir le temps de préparation d’une extension à soumettre à la base de données des personnalisations de phpbb.com. Consulter la page des détails de l’extension et cliquer sur l’onglet « OUTILS », enfin cliquer sur le bouton « Télécharger ».'
	),
	array(
		0 => '--',
		1 => 'Gestion des archives au format ZIP'
	),
	array(
		0 => 'Où peut-on spécifier le répertoire de sauvegarde des archives au format ZIP des extensions ?',
		1 => 'Depuis le PCA, se rendre dans :  <code>l’onglet « GÉNÉRAL », la catégorie « Configuration du serveur », la page « Paramètres du serveur », l’option « Chemin vers le répertoire de stockage des fichiers ZIP des extensions »</code> afin de définir le chemin vers le répertoire dédié au stockage des archives au format ZIP des extensions.'
	),
	array(
		0 => 'Comment supprimer plusieurs archives au format ZIP à la fois ?',
		1 => 'Premièrement il est nécessaire de s’assurer que cette action correspond à un besoin; aussi il est recommandé de réaliser au préalable une sauvegarde. Par la suite, se rendre dans le module « Gérer les archives au format ZIP », cocher les cases correspondantes aux archives au format ZIP à supprimer, puis cliquer sur le bouton « Supprimer la sélection » et confirmer l’action.'
	),
	array(
		0 => '--',
		1 => 'Outil de nettoyage d’extensions'
	),
	array(
		0 => 'Quel est-ce que « l’outil de nettoyage des extensions » ?',
		1 => '« L’outil de nettoyage d’extensions » est parfois mentionné dans cette documentation, c’est le surnom du module « Supprimer des extensions » de l’installateur d’extensions.'
	),
	array(
		0 => 'Pourquoi n’est-il pas possible de supprimer une extension installée sur le forum ?',
		1 => 'Pour supprimer une extension il est nécessaire au préalable de la désactiver puis de supprimer ses données dans la base de données du forum. Par la suite, il sera possible d’utiliser « l’outil de nettoyage d’extensions ». Voir la question « Comment utiliser le module « Supprimer des extensions » ? » plus haut.'
	),
	array(
		0 => 'Comment supprimer plusieurs extensions à la fois ?',
		1 => 'Premièrement il est nécessaire de s’assurer que cette action correspond à un besoin; aussi il est recommandé de réaliser au préalable une sauvegarde. Par la suite, se rendre dans le module « Supprimer des extensions », cocher les cases correspondantes aux lignes des extensions à supprimer, cliquer sur le bouton  « Supprimer la sélection » et confirmer l’action. <strong>Ces extensions ne seront pas sauvegardées en tant qu’archives au format ZIP ! Leurs répertoires seront entièrement supprimés du serveur.</strong>'
	),
	array(
		0 => '--',
		1 => 'Interface interactive'
	),
	array(
		0 => 'Quels sont les avantages des fonctionnalités usant du langage JavaScript ?',
		1 => 'Les pages sont chargées rapidement, les éléments du design sont modifiés rapidement lors des interactions, des astuces sont affichées pour guider l’administrateur du forum pour les actions à réaliser. Toutes ces fonctionnalités font gagner du temps et sont disponibles uniquement sous les navigateurs Web ayant le langage JavaScript activé.'
	),
);

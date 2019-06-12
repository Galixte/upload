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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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

$lang = array_merge($lang, array(
	'ACP_UPLOAD_EXT_TITLE'				=> 'Installateur d’extensions',
	'ACP_UPLOAD_EXT_CONFIG_TITLE'		=> 'Installateur d’extensions',
	'ACP_UPLOAD_EXT_DESCRIPTION'		=> 'Depuis cette page il est possible d’installer, mettre à jour et supprimer les extensions. Cet outil prend en charge les archives au format ZIP et davantage sans devoir utiliser un logiciel client FTP.',
	'ACP_UPLOAD_EXT_TITLE_EXPLAIN'		=> 'L’installateur d’extensions permet de transférer les archives au format ZIP des extensions ou de supprimer les répertoires des extensions sur le serveur.<br />Au moyen de cet outil il est possible d’installer, mettre à jour et supprimer les extensions sans devoir utiliser un logiciel client FTP. Si l’extension transférée est déjà présente sur le serveur, celle-ci sera mise à jour au moyen des fichiers transférés.',
	'ACP_UPLOAD_EXT_HELP'				=> 'Guide d’utilisation de l’installateur d’extensions',
	'UPLOAD'							=> 'Transférer',
	'BROWSE'							=> 'Parcourir…',
	'EXTENSION_UPLOAD'					=> 'Transférer une extension',
	'EXTENSION_UPLOAD_EXPLAIN'			=> 'Au moyen de cet outil il est possible de transférer depuis son ordinateur ou un serveur distant les archives au format ZIP des extensions contenant les fichiers et répertoires nécessaires à leur installation. L’installateur d’extensions tentera d’extraire les fichiers/répertoires des archives ZIP afin de préparer leur installation.<br />Sélectionner un fichier ou saisir un lien dans le champ ci-dessous.',
	'EXT_UPLOAD_ERROR'					=> 'L’extension n’a pas été transférée.',
	'EXT_UPLOAD_INIT_FAIL'				=> 'Une erreur s’est produite lors de l’initialisation du processus de transfert de l’extension.',
	'EXT_NOT_WRITABLE'					=> array(
		'error'		=> 'Le répertoire ./ext/ ne possède pas les permissions suffisantes en écriture. Ceci est un prérequis au fonctionnement de l’installateur d’extensions.',
		'solution'	=> 'Merci d’appliquer des permissions en écriture (CHMOD 775 ou 777) sur le répertoire ./ext/ avant de recommencer l’action entreprise.',
	),
	'EXT_TMP_NOT_WRITABLE'				=> array(
		'error'		=> 'Le répertoire ./ext/boardtools/upload/tmp/ ne possède pas les permissions suffisantes en écriture. Ceci est un prérequis au fonctionnement de l’installateur d’extensions.',
		'solution'	=> 'Merci d’appliquer des permissions en écriture (CHMOD 775 ou 777) sur le répertoire ./ext/boardtools/upload/tmp/ avant de recommencer l’action entreprise.',
	),
	'EXT_ALLOW_URL_FOPEN_DISABLED'		=> array(
			'error'		=> 'L’option « allow_url_fopen » du langage PHP doit être activée pour charger des informations depuis un serveur distant.',
			'solution'	=> 'Merci d’activer l’option « allow_url_fopen » du langage PHP dans le php.ini ou par tout autre moyen mis à disposition par le prestataire d’hébergement avant de recommencer l’action entreprise.',
	),
	'EXT_OPENSSL_DISABLED'				=> array(
			'error'		=> 'L’option « openssl » du langage PHP doit être activée pour charger des informations depuis un serveur distant.',
			'solution'	=> 'Merci d’activer l’option « openssl » du langage PHP dans le php.ini ou par tout autre moyen mis à disposition par le prestataire d’hébergement avant de recommencer l’action entreprise.',
	),
	'NO_UPLOAD_FILE'					=> array(
		'error'		=> 'Aucun fichier n’a été spécifié ou une erreur s’est produite durant le processus de transfert.',
		'solution'	=> 'Merci de vérifier que le fichier à transférer soit au format ZIP ou que le lien indiqué soit valide avant de recommencer l’action entreprise.',
	),
	'NOT_AN_EXTENSION'					=> 'L’archive au format ZIP ne correspond pas à une extension pour phpBB. Le fichier n’a pas été sauvegardé sur le serveur.',
	'EXT_ACTION_ERROR'					=> 'L’action demandée ne peut être effectuée pour l’extension phpBB sélectionnée.<br />Information : l’installateur d’extensions dépend du gestionnaire d’extensions standard de la page « Gérer les extensions ».',

	'SOURCE'							=> 'Source',
	'EXTENSION_UPDATE_NO_LINK'			=> 'Le lien de téléchargement n’est pas disponible.',
	'EXTENSION_TO_BE_ENABLED'			=> 'L’installateur d’extensions sera désactivé durant le processus de mise à jour puis réactivée à la suite de celui-ci.',
	'EXTENSION_UPLOAD_UPDATE'			=> 'Mettre à jour l’extension',
	'EXTENSION_UPLOAD_UPDATE_EXPLAIN'	=> 'L’installateur d’extensions va procéder au transfert depuis le lien indiqué ci-dessous :',

	'EXTENSION_UPLOADED'				=> 'L’extension « %s » a été transférée avec succès !',
	'EXTENSIONS_AVAILABLE'				=> 'Extensions désinstallées',
	'EXTENSIONS_UPLOADED'				=> 'Extensions transférées',
	'EXTENSIONS_UNAVAILABLE'			=> 'Extensions corrompues',
	'EXTENSIONS_UNAVAILABLE_EXPLAIN'	=> 'Les extensions listées ci-dessous sont transférées sur le forum mais elles sont corrompues pour diverses raisons, c’est pourquoi, il n’est pas possible de les installer sur le forum. Merci de vérifier les fichiers corrects et d’utiliser l’outil de nettoyage d’extension pour supprimer les fichiers des extensions corrompues du serveur.',
	'EXTENSION_BROKEN'					=> 'Extension corrompue',
	'EXTENSION_BROKEN_ENABLED'			=> 'Cette extension corrompue est activée !',
	'EXTENSION_BROKEN_DISABLED'			=> 'Cette extension corrompue est désactivée !',
	'EXTENSION_BROKEN_TITLE'			=> 'Cette extension est corrompue !',
	'EXTENSION_BROKEN_DETAILS'			=> 'Cliquer ici pour consulter les détails.',
	'EXTENSION_BROKEN_EXPLAIN'			=> '<strong>Certaines données de cette extension sont encore présentes sur le serveur.</strong> Merci de vérifier pourquoi cette extension est corrompue. Il sera peut-être nécessaire de demander de l’aide au développeur de l’extension et d’utiliser un logiciel client FTP pour modifier certaines fichier (ou de transférer une version corrigée). Par la suite, il sera possible de gérer l’extension à nouveau.<br /><h3>Options disponibles :</h3><br /><strong>Mettre à jour l’extension corrompue.</strong><br /><ul><li>S’assurer que l’extension est désactivée (si besoin, cliquer sur le bouton).</li><li>Vérifier si une nouvelle version de l’extension est disponible. Le cas échéant, envoyer celle-ci.</li><li>Si le problème n’est pas résolu, il est possible de faire appel au développeur de l’extension pour lui demander une solution.</ul><strong>ou</strong><br /><br /><strong>Supprimer complètement l’extension corrompue.</strong><br /><ul><li>S’assurer que l’extension est désactivée (si besoin, cliquer sur le bouton).</li><li>S’assurer que les données de l’extension soient supprimées (si besoin, cliquer sur le bouton de la corbeille).</li><li>Supprimer les fichiers de l’extension au moyen de l’outil de nettoyage d’extension.</ul>',

	'EXTENSION_UPLOADED_ENABLE'			=> 'Activer l’extension transférée',
	'ACP_UPLOAD_EXT_UNPACK'				=> 'Extraire l’extension',
	'ACP_UPLOAD_EXT_CONT'				=> 'Contenu de l’archive « %s » :',

	'EXT_LIST_DOWNLOAD'					=> 'Télécharger la liste complète',
	'EXT_LIST_DOWNLOAD_ENGLISH'			=> 'Utiliser les noms des statuts en anglais :',
	'EXT_LIST_DOWNLOAD_GROUP'			=> 'Trier par :',
	'EXT_LIST_DOWNLOAD_GROUP_STANDARD'	=> 'Transférées/corrompues',
	'EXT_LIST_DOWNLOAD_GROUP_DISABLED'	=> 'Activées/désactivées/corrompues',
	'EXT_LIST_DOWNLOAD_GROUP_PURGED'	=> 'Activées/désactivées/désinstallées/corrompues',
	'EXT_LIST_DOWNLOAD_SHOW'			=> 'Inclure les noms :',
	'EXT_LIST_DOWNLOAD_SHOW_FULL'		=> 'les noms complets et les noms simplifiés',
	'EXT_LIST_DOWNLOAD_SHOW_CLEAN'		=> 'seulement les noms simplifiés',
	'EXT_LIST_DOWNLOAD_SHOW_NAME'		=> 'uniquement les noms complets',
	'EXT_LIST_DOWNLOAD_TITLE'			=> 'Liste complète des extensions transférées :',
	'EXT_LIST_DOWNLOAD_FOOTER'			=> 'Liste générée par l’installateur d’extensions.',

	'EXT_ROW_ENABLED'					=> 'activée',
	'EXT_ROW_DISABLED'					=> 'désactivée',
	'EXT_ROW_UNINSTALLED'				=> 'désinstallée',
	'EXT_ROWS_ENABLED'					=> 'Activée(s) :',
	'EXT_ROWS_DISABLED'					=> 'Désactivée(s) :',
	'EXT_ROWS_UNINSTALLED'				=> 'Désinstallée(s) :',
	'EXT_ROWS_UPLOADED'					=> 'Transférée(s) :',
	'EXT_ROWS_BROKEN'					=> 'Corrompue(s) :',

	'EXTENSION_DELETE'					=> 'Supprimer l’extension',
	'EXTENSION_DELETE_CONFIRM'			=> 'Confirmer la suppression de l’extension « %s ».',
	'EXTENSIONS_DELETE_CONFIRM'			=> array(
		2	=> 'Confirmer la suppression des <strong>%1$s</strong> extensions.',
	),
	'EXT_DELETE_SUCCESS'				=> 'L’extension a été supprimée avec succès !',
	'EXTS_DELETE_SUCCESS'				=> 'Les extensions ont été supprimées avec succès !',
	'EXT_DELETE_ERROR'					=> 'Aucun fichier n’a été spécifié ou une erreur s’est produite durant le processus de suppression.',
	'EXT_DELETE_NO_FILE'				=> 'Aucun fichier ne correspond pour effectuer cette suppression.',
	'EXT_CANNOT_BE_PURGED'				=> 'Les données de l’extension activée ne peuvent pas être supprimées. Désactiver l’extension pour être en mesure de supprimer ses données.',

	'EXTENSION_ZIP_DELETE'				=> 'Supprimer l’archive au format ZIP',
	'EXTENSION_ZIP_DELETE_CONFIRM'		=> 'Confirmer la suppression de l’archive au format ZIP « %s ».',
	'EXTENSIONS_ZIP_DELETE_CONFIRM'		=> array(
		2	=> 'Confirmer la suppression des <strong>%1$s</strong> archives au format ZIP.',
	),
	'EXT_ZIP_DELETE_SUCCESS'			=> 'L’archive au format ZIP de l’extension a été supprimée avec succès !',
	'EXT_ZIPS_DELETE_SUCCESS'			=> 'Les archives au format ZIP des extensions ont été supprimées avec succès !',
	'EXT_ZIP_DELETE_ERROR'				=> 'Aucun fichier n’a été spécifié ou une erreur s’est produite durant le processus de suppression.',

	'ACP_UPLOAD_EXT_ERROR_DEST'			=> 'Aucun répertoire au nom de l’éditeur de l’extension ou de répertoire de destination n’était présent dans l’archive au format ZIP transférée. Le fichier n’a pas été sauvegardé sur le serveur.',
	'ACP_UPLOAD_EXT_ERROR_COMP'			=> 'Le fichier « composer.json » n’a pas été trouvé dans l’archive au format ZIP transférée. Le fichier n’a pas été sauvegardé sur le serveur.',
	'ACP_UPLOAD_EXT_ERROR_NOT_SAVED'	=> 'Le fichier n’a pas été sauvegardé sur le serveur.',
	'ACP_UPLOAD_EXT_ERROR_TRY_SELF'		=> 'L’installateur d’extensions peut être mis à jour uniquement par l’outil spécial de mise à jour ou au moyen d’un logiciel client FTP.',
	'ACP_UPLOAD_EXT_WRONG_RESTORE'		=> 'Une erreur s’est produite durant la mise jour d’une extension installée. Merci de recommencer sa mise à jour.',

	'DEVELOPER'							=> 'Développeur',
	'DEVELOPERS'						=> 'Développeurs',

	'EXT_UPLOAD_SAVE_ZIP'				=> 'Sauvegarder l’archive au format ZIP une fois transférée.',
	'CHECKSUM'							=> 'Somme de contrôle',
	'RESTORE'							=> 'Restaurer',
	'ZIP_UPLOADED'						=> 'Archives au format ZIP d’extensions transférées',
	'EXT_ENABLE'						=> 'Activer',
	'EXT_ENABLE_DISABLE'				=> 'Activer/désactiver l’extension',
	'EXT_ENABLED'						=> 'L’extension a été activée avec succès !',
	'EXT_DISABLED'						=> 'L’extension a été désactivée avec succès !',
	'EXT_PURGE'							=> 'Supprimer les données de l’extension',
	'EXT_PURGED'						=> 'Les données de l’extension ont été supprimées avec succès !',
	'EXT_UPLOADED'						=> 'Le transfert a été effectué avec succès !',
	'EXT_UPDATE_ENABLE'					=> 'Cliquer sur le bouton pour activer l’extension.',
	'EXT_UPDATE_CHECK_FILETREE'			=> 'Merci de vérifier l’arborescence des fichiers de l’extension.',
	'EXT_UPDATE_ERROR'					=> 'Le processus de mise à jour a rencontré une erreur.',
	'EXT_UPDATE_TIMEOUT'				=> 'Le processus de mise à jour a été interrompu.',
	'EXT_UPDATES_AVAILABLE'				=> 'Des mises à jour sont disponibles',
	'EXT_UPDATE_METHODS_TITLE'			=> 'Méthodes de mise à jour disponibles',
	'EXT_UPLOAD_UPDATE_METHODS'			=> 'Actions disponibles pour mettre à jour l’extension :<ul><li><strong>Méthode par l’outil de mise à jour.</strong> L’installateur d’extensions peut être mis à jour uniquement par l’outil spécial de mise à jour. Vérifier que cet outil soit déjà disponible, sans quoi, il sera nécessaire la seconde méthode.</li><li><strong>Méthode par FTP.</strong> L’installateur d’extensions peut être mis à jour par la démarche classique. Télécharger les nouveaux fichiers sur son ordinateur (cliquer sur le bouton ci-dessous), désactiver l’extension depuis la page « Gérer les extensions », transférer les nouveaux fichiers au moyen d’un logiciel client FTP sur son serveur d’hébergement puis activer l’extension depuis la page « Gérer les extensions ».</li></ul>',
	'EXT_UPDATED'						=> 'La mise à jour a été effectuée avec succès !',
	'EXT_UPDATED_LATEST_VERSION'		=> 'mise à jour vers la dernière version',
	'EXT_SAVED_OLD_ZIP'					=> '<strong>Information :</strong> la version précédente de l’extension a été sauvegardée sur le serveur dans le fichier <strong>%s</strong>. Vérifier depuis le module « Gérer les archives au format ZIP ».',
	'EXT_RESTORE_LANGUAGE'				=> '<strong>Un répertoire de langue est manquant dans la version de l’extension transférée.</strong> Il est possible de restaurer le répertoire manquant %s depuis l’archive au format ZIP sauvegardée et provenant de la précédente version. Par la suite, il sera nécessaire de mettre à jour les fichiers dans ce répertoire pour être compatible avec la version de l’extension transférée.',
	'EXT_RESTORE_LANGUAGES'				=> '<strong>Certains répertoires de langues sont manquants dans la version de l’extension transférée.</strong> Il est possible de restaurer les répertoires manquants %1$s et %2$s depuis l’archive au format ZIP sauvegardée et provenant de la précédente version. Par la suite, il sera nécessaire de mettre à jour les fichiers dans ces répertoires pour être compatible avec la version de l’extension transférée.',
	'EXT_LANGUAGES_RESTORED'			=> 'Le processus de restauration a été effectué avec succès !',
	'EXT_SHOW_DESCRIPTION'				=> 'Afficher la description de l’extension',
	'EXT_UPLOAD_BACK'					=> '« Retour vers l’installateur d’extensions',
	'EXT_RELOAD_PAGE'					=> 'Recharger la page',
	'EXT_REFRESH_PAGE'					=> 'Actualiser la page',
	'EXT_REFRESH_NOTICE'				=> 'Le menu de navigation n’est peut-être pas à jour.',

	'ERROR_COPY_FILE'					=> 'La tentative de copie du fichier « %1$s » vers le répertoire « %2$s » a échoué.',
	'ERROR_CREATE_DIRECTORY'			=> 'La tentative de création du répertoire « %s » a échoué.',
	'ERROR_REMOVE_DIRECTORY'			=> 'La tentative de suppression du répertoire « %s » a échoué.',
	'ERROR_CHECKSUM_MISMATCH'			=> 'La somme de contrôle %s du fichier transféré diffère de l’empreinte fournie. Le fichier n’a pas été sauvegardé sur le serveur.',
	'ERROR_ZIP_NO_COMPOSER'				=> 'Le fichier « composer.json » n’a pas été trouvé dans l’archive au format ZIP transférée.',
	'ERROR_DIRECTORIES_NOT_RESTORED'	=> 'Le processus de restauration n’a pas s’achever en raison d’erreurs rencontrées.',
	'ERROR_LANGUAGE_UNKNOWN_STRUCTURE'	=> 'La structure de la traduction transférée est inconnue. Le fichier n’a pas été sauvegardé sur le serveur.',
	'ERROR_LANGUAGE_NO_EXTENSION'		=> 'Le nom de l’extension n’est pas spécifié pour la traduction.',
	'ERROR_LANGUAGE_NOT_DEFINED'		=> 'Le code ISO correspondant à la langue de la traduction doit être défini pour réussir le transfert celle-ci. Merci de le saisir dans le champ requis du formulaire, puis recommencer.',

	'ACP_UPLOAD_EXT_DIR'				=> 'Chemin vers le répertoire de stockage des fichiers ZIP des extensions',
	'ACP_UPLOAD_EXT_DIR_EXPLAIN'		=> 'Permet de saisir le répertoire de sauvegarde des archives au format ZIP. Ce chemin doit prendre pour racine le répertoire d’installation de phpBB, tel que : <samp>ext</samp>.<br />Il est possible de modifier ce chemin afin de stocker les archives au format ZIP dans un répertoire différent. Par exemple, pour mettre à disposition ces fichiers au téléchargement, il est possible de le modifier pour <em>downloads</em>, et si le besoin est d’interdire ces téléchargements, il est possible de le modifier par un chemin vers un répertoire situé au-dessus de celui de phpBB voire davantage, ou encore  il est possible de créer un répertoire contenant un fichier .htaccess correctement renseigné.',

	'ACP_UPLOAD_EXT_UPDATED'			=> 'L’extension installée a été mise à jour avec succès !',
	'ACP_UPLOAD_EXT_UPDATED_EXPLAIN'	=> 'Une archive au format ZIP a été transférée pour une extension déjà installée. Cette extension <strong>a été désactivée automatiquement</strong> pour s’assurer de la réussite de se mise à jour. À présent il est nécessaire de <strong>vérifier</strong> si les fichiers transférés sont corrects puis <strong>d’activer</strong> l’extension si celle-ci doit être utilisée sur le forum.',

	'ACP_UPLOAD_EXT_NO_CHECKSUM_TITLE'	=> 'Aucune somme de contrôle n’a été fournie pour le fichier transféré.',
	'ACP_UPLOAD_EXT_NO_CHECKSUM'		=> 'L’installateur d’extensions a été dans l’incapacité d’effectuer les contrôles nécessaires de sécurité parce que <strong>la somme de contrôle n’a pas été fournie</strong> pour l’archive au format ZIP transférée. La somme de contrôle est utilisée pour s’assurer que le fichier transféré n’est pas corrompu ni compromis.',

	'VALID_PHPBB_EXTENSIONS'			=> 'Extensions validées',
	'SHOW_VALID_PHPBB_EXTENSIONS'		=> 'Afficher les extensions validées',
	'VALID_PHPBB_EXTENSIONS_TITLE'		=> 'Il est possible de télécharger les extensions validées depuis la base de données des personnalisations de phpbb.com ou de vérifier leur page officielle.',
	'VALID_PHPBB_EXTENSIONS_EMPTY_LIST'	=> 'Actuellement, aucune extension n’est disponible. Merci de vérifier les mises de l’installateur d’extensions.',
	'POSSIBLE_SOLUTIONS'				=> 'Solutions disponibles',

	'ACP_UPLOAD_EXT_MANAGER_EXPLAIN'	=> 'Le gestionnaire d’extensions de l’installateur d’extensions est un outil intégré au forum phpBB permettant de gérer toutes les extensions installées et de consulter leurs informations.',
	'ACP_UPLOAD_ZIP_TITLE'				=> 'Gérer les archives au format ZIP',
	'ACP_UPLOAD_UNINSTALLED_TITLE'		=> 'Supprimer des extensions',

	'EXT_DETAILS_README'				=> 'À lire',
	'EXT_DETAILS_CHANGELOG'				=> 'Journal des changements',
	'EXT_DETAILS_LANGUAGES'				=> 'Langues',
	'EXT_DETAILS_FILETREE'				=> 'Arborescence des fichiers',
	'EXT_DETAILS_TOOLS'					=> 'Outils',

	'DEFAULT'							=> 'par défaut',
	'EXT_LANGUAGE_ISO_CODE'				=> 'Code ISO',
	'EXT_LANGUAGES'						=> 'Traductions transférées',
	'EXT_LANGUAGES_UPLOAD'				=> 'Transférer une traduction',
	'EXT_LANGUAGES_UPLOAD_EXPLAIN'		=> 'Au moyen de cet outil il est possible de transférer depuis son ordinateur ou un serveur distant des archives au format ZIP contenant les fichiers de langues nécessaires pour cette extension. L’installateur d’extensions tentera d’extraire les fichiers et de les déplacer dans l’emplacement adéquat.<br />Sélectionner soit une archive au format ZIP ou saisir un lien valide dans le champ ci-dessous.<br />Ne pas omettre d’indiquer le code ISO correspondant à la langue de la traduction dans le champ correspondant ci-dessous, tel que : <strong>en</strong>.<br /><strong>IMPORTANT !</strong> Parmi les répertoires disponibles des langues de l’extension, si le code ISO saisi correspond à l’un d’eux il sera supprimé, <strong>aucune archive au format ZIP ne sera créée pour le sauvegarder</strong>.',
	'EXT_LANGUAGE_UPLOADED'				=> 'La traduction « %s » a été transférée avec succès !',
	'EXT_LANGUAGE_DELETE_CONFIRM'		=> 'Confirmer la suppression de la traduction « %s ».',
	'EXT_LANGUAGES_DELETE_CONFIRM'		=> array(
		2	=> 'Confirmer la suppression des <strong>%1$s</strong> traductions.',
	),
	'EXT_LANGUAGE_DELETE_SUCCESS'		=> 'La traduction de l’extension a été supprimée avec succès !',
	'EXT_LANGUAGES_DELETE_SUCCESS'		=> 'Les traductions de l’extension ont été supprimées avec succès !',
	'EXT_LANGUAGE_DELETE_ERROR'			=> 'Aucun fichier n’a été spécifié ou une erreur s’est produite durant le processus de suppression.',

	'EXT_TOOLS_DOWNLOAD_TITLE'			=> 'Télécharger l’archive de l’extension',
	'EXT_TOOLS_DOWNLOAD'				=> 'Permet de télécharger une archive originale au format ZIP de l’extension sur son ordinateur. Aussi, il est possible de choisir de supprimer le suffixe de la version de développement, tel que par exemple, pour réduire le temps de préparation de l’extension afin de la soumettre à la base de données des personnalisations sur phpbb.com.',
	'EXT_TOOLS_DOWNLOAD_DELETE_SUFFIX'	=> 'Supprimer le suffice si il existe :',
	'EXT_DOWNLOAD_ERROR'				=> 'La tentative de téléchargement de l’extension « %s » a échoué.',

	'EXT_LOAD_ERROR'					=> 'Le changement a rencontré une erreur',
	'EXT_LOAD_TIMEOUT'					=> 'Le chargement a été interrompu',
	'EXT_LOAD_ERROR_EXPLAIN'			=> 'Indique qu’une erreur a été rencontrée durant le processus de chargement.',
	'EXT_LOAD_ERROR_SHOW'				=> 'Afficher les erreurs rencontrées',
	'EXT_LOAD_SOLUTIONS'				=> 'Merci de vérifier les fichiers des journaux d’erreurs sur le serveur d’hébergement, une fois les problèmes identifiés et solutionnés recommencer.',

	'UPLOAD_DESCRIPTION_UPLOAD'			=> 'Transfère des extensions pour phpBB :',
	'UPLOAD_DESCRIPTION_UPLOAD_CDB'		=> 'Depuis la base de données des personnalisations sur phpbb.com.',
	'UPLOAD_DESCRIPTION_UPLOAD_LOCAL'	=> 'Depuis son ordinateur local.',
	'UPLOAD_DESCRIPTION_UPLOAD_REMOTE'	=> 'Depuis un serveur distant.',
	'UPLOAD_DESCRIPTION_UPDATE'			=> 'Met à jour les extensions pour phpBB :',
	'UPLOAD_DESCRIPTION_UPDATE_ABOUT'	=> 'Permet de mettre à jour les extensions déjà transférées. L’extension sélectionnée pour être mise à jour sera désactivée automatiquement, ainsi toute mise à jour se déroulera sans encombre.',
	'UPLOAD_DESCRIPTION_MANAGE'			=> 'Gère les extensions pour phpBB :',
	'UPLOAD_DESCRIPTION_MANAGE_ACTIONS'	=> 'Permet d’installer & de désinstaller les extensions.',
	'UPLOAD_DESCRIPTION_MANAGE_LANG'	=> 'Permet de transférer et gérer les traductions d’extensions.',
	'UPLOAD_DESCRIPTION_MANAGE_DETAILS'	=> 'Permet de consulter les détails et l’arborescence des fichiers.',
	'UPLOAD_DESCRIPTION_DESIGN'			=> 'Interface interactive :',
	'UPLOAD_DESCRIPTION_DESIGN_ABOUT'	=> 'Permet d’effectuer des actions plus rapidement au moyen de fonctionnalités usant du langage JavaScript. Colorations des messages & astuces disponibles facilitant la prise de décisions de l’administrateur pour les actions à réaliser.',
	'UPLOAD_DESCRIPTION_ZIP'			=> 'Gestion des archives au format ZIP :',
	'UPLOAD_DESCRIPTION_ZIP_SAVE'		=> 'Permet de sauvegarder les archives au format ZIP dans le répertoire de son choix.',
	'UPLOAD_DESCRIPTION_ZIP_UNPACK'		=> 'Permet d’extraire une archive au format ZIP pour installer une extension.',
	'UPLOAD_DESCRIPTION_ZIP_DOWNLOAD'	=> 'Permet de télécharger les archives au format ZIP des extensions.',
	'UPLOAD_DESCRIPTION_CLEANER'		=> 'Outil de nettoyage d’extensions :',
	'UPLOAD_DESCRIPTION_CLEANER_ABOUT'	=> 'Permet de supprimer les répertoires des extensions ou les archives au format ZIP des extensions sur le serveur d’hébergement.',
));

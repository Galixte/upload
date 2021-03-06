<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 - 2019 Igor Lavrov (https://github.com/LavIgor) and John Peskens (http://ForumHulp.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace boardtools\upload\includes\functions;

use \boardtools\upload\includes\objects;

class updater
{
	/**
	* Gets and validates extension metadata manager for Upload Extensions.
	*/
	public static function get_manager()
	{
		// If we have already created the metadata manager, do not do it twice.
		if (isset(objects::$md_manager))
		{
			return;
		}

		objects::$md_manager = objects::$compatibility->create_metadata_manager(objects::$upload_ext_name);
		try
		{
			// Validate extension's metadata
			objects::$md_manager->get_metadata('all');
		}
		catch (\phpbb\extension\exception $e)
		{
			$message = objects::$compatibility->get_exception_message($e);
			files::catch_errors($message);
		}
	}

	/**
	* Checks the availability of an update for Upload Extensions.
	*/
	public static function check_updates()
	{
		$upload_extensions_download = false;
		try
		{
			$updates_available = objects::$compatibility->version_check(objects::$md_manager, objects::$request->variable('versioncheck_force', false), false, objects::$config['extension_force_unstable'] ? 'unstable' : null);

			objects::$template->assign_vars(array(
				'UPLOAD_EXT_NEW_UPDATE'	=> !empty($updates_available),
				'S_UPLOAD_UP_TO_DATE'	=> empty($updates_available),
				'S_UPLOAD_VERSIONCHECK'	=> true,
				'UPLOAD_UP_TO_DATE_MSG'	=> objects::$user->lang(empty($updates_available) ? 'UP_TO_DATE' : 'NOT_UP_TO_DATE', objects::$md_manager->get_metadata('display-name')),
			));

			objects::$template->assign_block_vars('upload_updates_available', $updates_available);

			if (isset($updates_available['download']))
			{
				$upload_extensions_download = $updates_available['download'];
			}
		}
		catch (\RuntimeException $e)
		{
			objects::$template->assign_vars(array(
				'S_UPLOAD_VERSIONCHECK_STATUS'			=> $e->getCode(),
				'UPLOAD_VERSIONCHECK_FAIL_REASON'		=> ($e->getMessage() !== objects::$user->lang('VERSIONCHECK_FAIL')) ? $e->getMessage() : '',
			));
		}
		objects::$self_update = $upload_extensions_download;
	}

	/**
	* Generates the link to Upload Extensions Updater.
	*
	* @return string Download link.
	*/
	public static function get_update_link()
	{
		global $phpbb_admin_path, $phpEx;
		return append_sid("{$phpbb_admin_path}index.$phpEx", "i=-boardtools-updater-acp-updater_module&amp;mode=main&amp;action=upload");
	}

	/**
	* Sets the link to Upload Extensions Updater.
	*/
	public static function set_update_link()
	{
		if (objects::$phpbb_extension_manager->is_enabled("boardtools/updater") && objects::$self_update != false)
		{
			objects::$template->assign_var('U_UPLOAD_EXT_UPDATE', self::get_update_link());
		}
	}
}

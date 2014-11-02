<?php
/**
*
* @package Upload Extensions
* Persian Translator: Meisam nobari in www.php-bb.ir
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
if (!defined('IN_PHPBB'))
{
exit;
}
if (empty($lang) || !is_array($lang))
{
$lang = array();
}
$lang = array_merge($lang, array(
'ACP_UPLOAD_EXT_TITLE'	=> 'آپلود افزونه',
'ACP_UPLOAD_EXT_CONFIG_TITLE'	=> 'آپلود افزونه',
'ACP_UPLOAD_EXT_TITLE_EXPLAIN'	=> 'با فعال کردن این افزونه شما میتوانید سایر افزونه های دیگر phpBB را به صورت فایل zip از مرکز مدیریت انجمن آپلود و یا به صورت کلی از سرور حذف نمایید.<br />توسط این افزونه شما توانید عملیات نصب ، ارتقا و حذف افزونه ها را بدون نیاز به رفتن به FTP انجام دهید. چنانچه افزونه ای موجود باشد و شما افزونه مشابهی را آپلود نمایید به صورت خودکار ورژن قبلی آپدیت خواهد شد.',
'UPLOAD'	=> 'آپلود',
'BROWSE'	=> 'انتخاب...',
'EXTENSION_UPLOAD'	=> 'آپلود افزونه',
'EXTENSION_UPLOAD_EXPLAIN'	=> 'در این قسمت شما میتوانید پکیج فشرده شده به صورت zip را که حاوی فایل های مورد نیاز جهت نصب افزونه است را از طریق کامپیوتر خود یا یک ریموت سرور آپلود نمایید. "آپلود افزونه" فایل ها را از حالت فشرده خارج میکند و جهت نصب آماده سازی میکند.<br />لطفا فایل خود را انتخاب و یا آدرس لینک افزونه را بنویسید.',
'EXT_UPLOAD_INIT_FAIL'	=> 'خطایی هنگام آپلود افزونه به وجود آمده است.',
'EXT_NOT_WRITABLE'	=> 'پوشه ext در روت انجمن شما قابل خواندن نیست. که این یکی از نیاز های مهم جهت آپلود افزونه ها میباشد. لطفا سطوح دسترسی این پوشه را تنظیم و مجدد تلاش کنید.',
'EXT_UPLOAD_ERROR'	=> 'افزونه آپلود نشد. لطفا فایل صحیح افزونه را وارد کرده و مجدد تلاش کنید.',
'NO_UPLOAD_FILE'	=> 'فایلی انتخاب نشده یا به هنگام بارگزاری مشکلی به وجود آمده است.',
'NOT_AN_EXTENSION'	=> 'فایل آپلود شده یک افزونه phpBB نیست. فایل در سرور شما ذخیره نشد.',
'EXTENSION_UPLOADED'	=> 'افزونه “%s” با موفقیت به روز رسانی شد.',
'EXTENSIONS_AVAILABLE'	=> 'افزونه های در دسترس',
'EXTENSION_INVALID_LIST'	=> 'لیست افزونه',
'EXTENSION_UPLOADED_ENABLE'	=> 'فعال سازی افزونه های آپلود شده',
'ACP_UPLOAD_EXT_UNPACK'	=> 'باز کردن افزونه',
'ACP_UPLOAD_EXT_CONT'	=> 'محتوی افزونه: %s',
'EXTENSION_DELETE'	=> 'حذف افزونه',
'EXTENSION_DELETE_CONFIRM'	=> 'آیا از حذف افزونه “%s” مطمئن هستید؟',
'EXT_DELETE_SUCCESS'	=> 'افزونه با موفقیت حذف شد.',
'EXTENSION_ZIP_DELETE'	=> 'حذف فایل zip',
'EXTENSION_ZIP_DELETE_CONFIRM'	=> 'آیا از حذف فایل zip “%s” مطمئن هستید؟',
'EXT_ZIP_DELETE_SUCCESS'	=> 'فایل zip افزونه مورد نظر با موفقیت حذف گردید.',
'ACP_UPLOAD_EXT_ERROR_DEST'	=> 'فایل vendor و مقصد در فایل zip موجود نیست. فایل در سرور شما ذخیره نشد.',
'ACP_UPLOAD_EXT_ERROR_COMP'	=> 'فایل composer.json در پکیج zip شما یافت نشد. فایل در سرور شما ذخیره نشد.',
'ACP_UPLOAD_EXT_ERROR_NOT_SAVED'	=> 'فایل در سرور شما ذخیره نشد.',
'ACP_UPLOAD_EXT_WRONG_RESTORE'		=> 'An error occurred during the update of an installed extension. Try to update it again.', // to translate
'UPLOAD_EXTENSIONS_DEVELOPERS'	=> 'توسعه دهندگان',
'SHOW_FILETREE'	=> '<< نمایش درخت فایل >>',
'HIDE_FILETREE'	=> '>> مخفی کردن درخت فایل <<',
'EXT_UPLOAD_SAVE_ZIP'	=> 'ذخیره سازی فایل zip شده',
'ZIP_UPLOADED'	=> 'فایل zip افزونه بارگزاری شده است.',
'EXT_ENABLE'	=> 'فعال سازی',
'EXT_UPLOADED'	=> 'آپلود شده',
'EXT_UPLOAD_BACK'	=> '« بازگشت به آپلود افزونه',
'ACP_UPLOAD_EXT_DIR'				=> 'Extensions\' zip packages storage path', // to translate
'ACP_UPLOAD_EXT_DIR_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>ext</samp>.<br />You can change this path to store zip packages in a special folder (for example, if you want to let users download those files, you can change it to <em>downloads</em>, and if you want to prohibit those downloads, you can change it to the path that is upper by one level than http root of your website (or you can create a folder with the appropriate .htaccess file)).', // to translate
'ACP_UPLOAD_EXT_UPDATED'			=> 'The installed extension was updated.', // to translate
'ACP_UPLOAD_EXT_UPDATED_EXPLAIN'	=> 'You have uploaded a zip file for an already installed extension. That extension <strong>was disabled automatically</strong> to make the update process safer. Now please <strong>check</strong> whether the uploaded files are correct and <strong>enable</strong> the extension if it still should be used on the board.', // to translate
));
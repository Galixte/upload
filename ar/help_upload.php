<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 - 2015 Igor Lavrov (https://github.com/LavIgor) and John Peskens (http://ForumHulp.com)
* @translated by Basil Taha Alhitary - www.alhitary.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

$help = array(
	array(
		0 => '--',
		1 => 'اسئلة عامة'
	),
	array(
		0 => 'ماذا يمكن أن أستفيد من مميزات "رفع الإضافات" ؟',
		1 => 'تستطيع رفع الإضافات بواسطة وسائل مختلفة بدون الحاجة إلى استخدام برنامج نقل البيانات FTP. عند رفع إضافة موجودة في منتداك , سيتم تلقائياً حفظ نسخة من الإصدار القديم إلى المجلد المُحدد بمنتداك ( لمزيد من المعلومات اذهب إلى اسئلة "إدارة الملفات المضغوطة" الموجودة بالأسفل ). تستطيع أيضاً حفظ نسخة مضغوطة من الإضافة الجديدة التي ترفعها وذلك بالتحديد على خيار "حفظ هذا الملف المضغوط" قبل عملية رفع الإضافة.'
	),
	array(
		0 => 'ما الفرق بين "مدير الإضافات في رفع الإضافات" و "مدير الإضافات" القياسي في لوحة التحكم الرئيسية للمنتدى ؟',
		1 => 'تقريباً متشابهان ولكن "مدير الإضافات في رفع الإضافات" يعتبر "نسخة مطورة" لمدير الإضافات القياسي. فهو أداة في منتداك يعطيك إمكانية التحكم في جميع الإضافات لديك ومُشاهدة المعلومات اللازمة عنها.<br /><br /><strong>من المميزات :</strong><ul><li>يتم ترتيب جميع الإضافات أبجدياً حتى لو الإضافة مُفعلة أو مُعطلة أو غير مُثبتة. بإستثناء الإضافات الغير صالحة.</li><li>يتم عرض الإضافات الغير صالحة منفصلاً في نفس صفحة "مدير الإضافات" وتجدها أسفل قائمة الإضافات الصالحة. يتم عرض رسائل تحذيرية بالتفصيل لكل إضافة غير صالحة تم تثبيتها بالمنتدى أو لا يزال بياناتها محفوظة في قاعدة البيانات لديك. تستطيع النقر على إسم الإضافة الغير صالحة لمُشاهدة جميع التفاصيل عنها بنفس الطريقة التي موجودة في الإضافات الأخرى ( أجاكس ).</li><li>تستطيع تفعيل أي إضافة صالحة بالنقر على زر التفعيل الموجود في الجهة اليمين لإسم الإضافة.</li></ul>'
	),
	array(
		0 => 'لماذا أنا بحاجة إلى قسم "إدارة الملفات المضغوطة" ؟',
		1 => 'أحياناً قد تجدها فائدة لك في حفظ أرشيف لجميع الإضافات لديك أو مشاركتها مع الآخرين. ألارشيف يمكن أن يحتوي على النسخ القديمة للإضافات المرفوعة ( حيث يتم ضغطها تلقائياً لسلامة البيانات ) , أيضاً يمكن أن يحتوي على ملفات مضغوطة قمت بالتحديد على خيار "حفظ هذا الملف المضغوط" قبل عملية رفع الإضافة , أو أي ملفات مضغوطة للإضافات التي تم حفظها في المجلد المُحدد ( لمزيد من المعلومات اذهب إلى السوأل الموجود بالأسفل : "كيف أستطيع تحديد المجلد لحفظ الملفات المضغوطة للإضافة ؟" ). لديك الخيارات لفك الضغط عن الملفات المضغوطة أو تحميلها أو حذفها.'
	),
	array(
		0 => 'كيف أستخدم قسم "حذف الإضافات" ؟',
		1 => 'قسم "حذف الإضافات" يعطيك امكانية حذف ملفات الإضافات الغير مُثبتة من سيرفرك بصورة كاملة دون الحاجة إلى استخدام برنامج نقل البيانات FTP. تستطيع حذف أي إضافة من منتداك نهائياً عند عدم الحاجة إليها. وذلك عبر الخطوات التالية :<ul><li>بعد التأكد من عدم الحاجة إلى الإضافة المُحددة , يجب عليك عمل نسخة إحتياطية من ملفات وبيانات الإضافة قبل عملية الحذف.</li><li>ثم اذهب إلى "مدير الإضافات في رفع الإضافات" وابحث عن الإضافة التي تريد حذفها وتأكد أنها مُعطلة : أنقر على زر التعطيل الموجود في الجهة اليمين لإسم الإضافة <em>إذا كان باللون الأخضر</em>.</li><li>تأكد من حذف بيانات الإضافة : <em>إذا أيقونة سلة المهملات موجودة</em> في الجهة اليمين لإسم الإضافة , أنقر عليها والتأكيد على تنفيذ عملية الحذف.</li><li>بعدها إذهب إلى قسم "حذف الإضافات" , أنقر على "حذف الإضافة" في الجهة اليسار من إسم الإضافة والتأكيد على تنفيذ هذه العملية.</li></ul>'
	),
	array(
		0 => '--',
		1 => 'عملية التحميل'
	),
	array(
		0 => 'كيف استطيع رفع إضافة مُعتمدة من الموقع الأم phpbb.com ؟',
		1 => 'انقر على "إظهار الإضافات المُعتمدة في phpbb.com" الموجود في الصفحة الرئيسية لرفع الإضافات. ثم أنقر على أيقونة التحميل في الجهة اليمين لإسم الإضافة التي تريد رفعها. ملاحظة : سيتم <em>تحميل</em> الإضافة المُعتمدة من الموقع الأم phpbb.com و <em>رفعها</em> إلى سيرفرك.'
	),
	array(
		0 => 'كيف استطيع رفع الإضافة من موقع أو رابط ؟',
		1 => 'أنسخ الرابط <strong>المباشر</strong> للإضافة التي تريدها من موقع آخر ( يجب أن ينتهي الرابط بـ <code>.zip</code> ) إلى الحقل المخصص للرفع ( بجانب زر "استعراض..." ) وأنقر على زر "إرفع الإضافة" أسفل الحقل.'
	),
	array(
		0 => 'كيف استطيع رفع الإضافة من جهازي المحلي ؟',
		1 => 'انقر على زر "استعراض..." الموجود في الجهة اليسار من الصفحة الرئيسية لرفع الإضافات , ثم حدد الملف المضغوط للإضافة التي تريدها من جهازك المحلي , وأنقر على زر "إرفع الإضافة".'
	),
	array(
		0 => 'أنا نسخت الرابط <strong>المباشر</strong> للإضافة المضغوطة إلى الحقل المخصص للرفع ونقرت على زر "إرفع الإضافة" ولكن ظهر أن هناك خطأ. مالمشكلة في الرابط ؟',
		1 => 'يجب توفر الشروط التالية لكي تستطيع رفع الإضافة من رابط :<ol><li>يجب أن يكون الرابط <strong>مباشر</strong> : لتحميل الإضافات من مواقع أخرى غير الموقع الأم phpbb.com , يجب أن ينتهي الرابط بـ <code>.zip</code> ( مثال : http://www.alhitary.net/extensions/welcome<strong>.zip</strong> ).</li><li>الرابط يجب أن يقود مباشرة إلى <strong>الملف المضغوط zip</strong> للإضافة , وليس إلى صفحة المعلومات للإضافة.</li></ol>'
	),
	array(
		0 => 'ماهو "الفحص الإختباري" ؟ من أين أحصل عليه ؟',
		1 => '"الفحص الإختباري" يعمل على التأكد من سلامة الملفات التي يتم رفعها. حيث يتم التأكد من أن الملف المرفوع على سيرفرك مطابق للملف الأصلي الموجود على السيرفر البعيد. يمكن الحصول على "الفحص الإختباري" عادة من نفس المصدر الذي يحتوي على الملف الأصلي.'
	),	array(
		0 => '--',
		1 => 'مدير الإضافات في رفع الإضافات'
	),
	array(
		0 => 'كيف استخدم "مدير الإضافات في رفع الإضافات" ؟',
		1 => 'سوف تجد أن جميع الإضافات مرتبة أبجدياً , وهناك زرار بخلفيات ملونة في الجهة اليمين من إسم كل إضافة تشير إلى حالة الإضافة.<ul><li>الزرار ذو اللون الأخضر تعني أن الإضافة مُفعلة. وعند النقر عليه سوف يقوم <strong>بتعطيل</strong> الإضافة.</li><li>الزرار ذو اللون الأحمر تعني أن الإضافة مُعطلة. وعند النقر عليه سوف يقوم <strong>بتفعيل</strong> الإضافة.</li><li>الزرار ذو اللون الأحمر وبجانية أيقونة "سلة المهملات" تعني أن الإضافة مُعطلة ولكن بياناتها مازالت محفوظة في قاعدة البيانات.<br /><em>بالنقر على أيقونة سلة المهملات يعني أنه سيتم حذف بيانات الإضافة من قاعدة البيانات. وإذا رغبت في حذف ملفات الإضافة من السيرفر لديك , فأنت بحاجة إلى استخدام أداة حذف الإضافات.</em></li></ul><br />تستطيع أيضاً إعادة فحص إصدارات جميع الإضافات بالنقر على "إعادة فحص جميع النسخ" الموجودة في الجهة اليسار أعلى الصفحة أو تعديل إعدادات فحص الإصدارات بصورة دائمة , تماماً كما هو موجود في "مدير الإضافات" القياسي.'
	),
	array(
		0 => 'ماذا عن الإضافات الغير صالحة ؟ هل أستطيع إزالتها ؟',
		1 => 'بالتأكيد تستطيع ذلك ! حيث يتم عرض الإضافات الغير صالحة منفصلاً في نفس صفحة "مدير الإضافات" وتجدها أسفل قائمة الإضافات الصالحة. وتستطيع رؤية رسائل تحذيرية بالتفصيل لكل إضافة غير صالحة تم تثبيتها بالمنتدى أو لا يزال بياناتها محفوظة في قاعدة البيانات لديك. انقر على إسم الإضافة الغير صالحة لمُشاهدة جميع التفاصيل عنها وإدارتها.'
	),
	array(
		0 => 'لماذا زر "تفعيل / تعطيل" الإضافة باللون الرمادي ؟',
		1 => 'الزرار ذو اللون الرمادي يعني أنه لا يُمكنك تنفيذ أي عملية على هذه الإضافة حالياً. أسباب ذلك هو : 1- هناك عملية أخرى يتم تنفيذها حالياً. 2- "رفع الإضافات" لا يمكن تعطيل نفسها ( لذلك تكون باللون الرمادي ).'
	),
	array(
		0 => '--',
		1 => 'صفحة تفاصيل الإضافة'
	),
	array(
		0 => 'ماهي التفاصيل التي يمكن الحصول عليها حول الإضافات ؟',
		1 => 'المعلومات حول الإضافة تعتمد على عدة ظروف. وهي :<ul><li>شرح عام بواسطة مبرمجي الإضافة في الملف <code>composer.json</code> ( أو رسالة تحذيرية إذا الإضافة غير صالحة ).</li><li>رقم إصدار الإضافة ( إذا الإضافة صالحة ).</li><li>محتويات الملف "اقرأني" <code>README.md</code> ( إذا موجود في مجلد الإضافة ).</li><li>محتويات الملف "سجل التحديثات" <code>CHANGELOG.md</code> ( إذا موجود في مجلد الإضافة ).</li><li>محتوى الملفات في مجلد الإضافة.</li></ul>'
	),
	array(
		0 => 'ماذا يمكن أن افعله في صفحة تفاصيل الإضافة ؟',
		1 => 'تستطيع عمل الآتي :<ul><li>تفعيل الإضافة لو زر التفعيل باللون الأحمر.</li><li>تعطيل الإضافة لو زر التعطيل باللون الأخضر.</li><li>حذف بيانات الإضافة من قاعدة البيانات لو أيقونة "سلة المهملات" موجودة.</li><li>التحقق من رقم الإصدار الحالي للإضافة إذا رابط ملف فحص النسخة متوفر بواسطة مبرمجي الإضافة. ستكون الإضافة محدثة إلى آخر إصدار إذا رقم إصدار الإضافة كان بخلفية خضراء. وستكون الإضافة غير محدثة إلى آخر إصدار إذا رقم إصدار الإضافة كان بخلفية حمراء مما يعني أن هناك نسخة جديدة ويجب تحديث الإضافة. غير ذلك - لا يمكن الحصول على معلومات عن إصدار النسخة.</li><li>تستطيع الحصول على التحديث لهذه الإضافة اذا شاهدت "زر التحديث" ( صورة عجلة مُسننة ) بجانب رقم إصدار الإضافة. انقر على "زر التحديث" وستظهر لك قائمة منسدلة : 1- إذا شاهدت كلمة "تحديث" , أنقر عليها وعلى نافذة التأكيد لتنفيذ عملية التحديث , وسيتم تحديث الإضافة بسهولة. 2- تستطيع أيضاً مُشاهدة إعلان الإصدار لهذه الإضافة بالنقر على "إعلان الإصدار" إذا تمت إضافتها بواسطة مبرمجي الإضافة. <strong>ملاحظة :</strong>سيتم وضع الأيقونات المذكورة سلفاً في صفحة "تفاصيل الإضافة" إذا تم تعطيل سكربت الجافا JavaScript بواسطة متصفحك.</li><li>تستطيع أيضاً تحميل الإضافة المضغوطة ( لمزيد من المعلومات اذهب إلى السوأل التالي : ما فائدة الخاصية "تحميل الإضافة المضغوطة" ؟ ).</li></ul>'
	),
	array(
		0 => 'ماهي اللغات التي يمكن رفعها للإضافة ؟',
		1 => 'تستطيع رفع أي ملفات مضغوطة تحتوي على ملفات اللغة التي تريدها بشرط أن يكون لديها أحد التركيبات التالية :<ul><li><code>ZIP_FILE_ROOT/language_files</code>, أو</li><li><code>ZIP_FILE_ROOT/single_directory/language_files</code>, أو</li><li><code>ZIP_FILE_ROOT/single_directory/language_ISO_code/language_files</code>.</li></ul><br />لمزيد من المعلومات حول عملية الرفع , إذهب إلى القسم “عملية التحميل” الموجود أعلاه.'
	),
	array(
		0 => 'ما فائدة الخاصية "تحميل الإضافة المضغوطة" ؟',
		1 => 'تستطيع تحميل أي إضافة مضغوطة موجودة في منتداك إلى جهازك . وتستطيع أيضاً حذف إسم لاحقة نسخة التطوير لمساعدتك على سبيل المثال على توفير الوقت لإعداد الإضافة إلى قاعدة البيانات الخاصة بالإضافات المُعتمدة. إذهب إلى صفحة تفاصيل الإضافة وأنقر على قسم "أدوات" وسوف ترى زر "تحميل".'
	),
	array(
		0 => '--',
		1 => 'إدارة الملفات المضغوطة'
	),
	array(
		0 => 'كيف أستطيع تحديد المجلد لحفظ الملفات المضغوطة للإضافة ؟',
		1 => 'اذهب إلى لوحة التحكم الرئيسية وأنقر على <code>عام -> ضبط الخادم -> إعدادات الخادم -> إعدادت المسار -> مسار مجلد تخزين الإضافات المضغوطة</code>.'
	),
	array(
		0 => 'كيف أستطيع حذف الملفات المضغوطة لأكثر من إضافة بنقرة واحدة ؟',
		1 => 'يجب أولاً عمل نسخة إحتياطية من الإضافات التي تريد حذفها. ثم أذهب إلى "إدارة الملفات المضغوطة" وأنقر على المربع الموجود في الجهة اليسار من إسم كل إضافة تريد حذفها , وبعدها أنقر على الزر "حذف المحدد" وأعمل موافقة للتأكيد على عملية الحذف.'
	),
	array(
		0 => '--',
		1 => 'أداة حذف الإضافة'
	),
	array(
		0 => 'ماهي "أداة حذف الإضافة" ؟',
		1 => 'هو أداة لحذف الإضافات تجدها بإسم "حذف الإضافات" ضمن الـ3 خصائص الرئيسية لـ "رفع الإضافات". وتُسمى "أداة حذف الإضافة" للإستخدام في وثائقها أحياناً.'
	),
	array(
		0 => 'لماذا لا أستطيع حذف إضافة قمت بتثبيتها في منتداي ؟',
		1 => 'يجب عليك أولاً تعطيل الإضافة وحذف بياناتها من قاعدة البيانات قبل أن تستخدم "أداة حذف البيانات". لمزيد من المعلومات إذهب إلى السوأل "كيف أستخدم قسم "حذف الإضافات" ؟" الموجود أعلاه.'
	),
	array(
		0 => 'كيف أستطيع حذف أكثر من إضافة بنقرة واحدة ؟',
		1 => 'يجب أولاً عمل نسخة إحتياطية من الإضافات التي تريد حذفها. ثم أذهب إلى "إدارة الملفات المضغوطة" وأنقر على المربع الموجود في الجهة اليسار من إسم كل إضافة تريد حذفها , وبعدها أنقر على الزر "حذف المحدد" وأعمل موافقة للتأكيد على عملية الحذف. <strong>لن يتم حفظ هذه الإضافات كملفات مضغوطة zip ! وسيتم حذف مجلداتها من السيرفر بشكل كامل.</strong>'
	),
	array(
		0 => '--',
		1 => 'تصميم فعال'
	),
	array(
		0 => 'ما الفوائد من وظيفة سكربت الجافا JavaScript ؟',
		1 => 'يجب تفعيل سكربت الجافا JavaScript في متصفحك لكي تستفيد من : تحميل الصفحات بشكل أسرع , سرعة تجاوب التصميم عند التصفح والتنقل , عرض التلميحات لمساعدتك. وبالتالي توفر لك الوقت.'
	),
);
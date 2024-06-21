<?php
/** Arabic (العربية)
 *
 * @file
 * @ingroup Languages
 */

$fallback8bitEncoding = 'windows-1256';

$rtl = true;

/**
 * A list of date format preference keys which can be selected in user
 * preferences. New preference keys can be added, provided they are supported
 * by the language class's timeanddate(). Only the 5 keys listed below are
 * supported by the wikitext converter (DateFormatter.php).
 *
 * The special key "default" is an alias for either dmy or mdy depending on
 * $wgAmericanDates
 */
$datePreferences = [
	'default',
	'mdy',
	'dmy',
	'ymd',
	'hijri',
	'ISO 8601',
	'jMY',
];

/**
 * The date format to use for generated dates in the user interface.
 * This may be one of the above date preferences, or the special value
 * "dmy or mdy", which uses mdy if $wgAmericanDates is true, and dmy
 * if $wgAmericanDates is false.
 */
$defaultDateFormat = 'dmy or mdy';

/**
 * Associative array mapping old numeric date formats, which may still be
 * stored in user preferences, to the new string formats.
 */
$datePreferenceMigrationMap = [
	'default',
	'mdy',
	'dmy',
	'ymd'
];

/**
 * These are formats for dates generated by MediaWiki (as opposed to the wikitext
 * DateFormatter). Documentation for the format string can be found in
 * Language.php, search for sprintfDate.
 *
 * This array is automatically inherited by all subclasses. Individual keys can be
 * overridden.
 */
$dateFormats = [
	'mdy time' => 'H:i',
	'mdy date' => 'xg j، Y', # Arabic comma
	'mdy both' => 'H:i، xg j، Y', # Arabic comma

	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'H:i، j xg Y', # Arabic comma

	'ymd time' => 'H:i',
	'ymd date' => 'Y xg j',
	'ymd both' => 'H:i، Y xg j', # Arabic comma

	'hijri time' => 'H:i',
	'hijri date' => 'xmj xmF xmY',
	'hijri both' => 'H:i، xmj xmF xmY',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',

	'jMY time' => 'H:i',
	'jMY date' => 'j M Y',
	'jMY both' => 'H:i، j M Y', # Arabic comma
];

$digitTransformTable = [
	'0' => '٠', # U+0660
	'1' => '١', # U+0661
	'2' => '٢', # U+0662
	'3' => '٣', # U+0663
	'4' => '٤', # U+0664
	'5' => '٥', # U+0665
	'6' => '٦', # U+0666
	'7' => '٧', # U+0667
	'8' => '٨', # U+0668
	'9' => '٩', # U+0669
];

$separatorTransformTable = [
	'.' => '٫', # U+066B
	',' => '٬', # U+066C
];

$namespaceNames = [
	NS_MEDIA            => 'ميديا',
	NS_SPECIAL          => 'خاص',
	NS_TALK             => 'نقاش',
	NS_USER             => 'مستخدم',
	NS_USER_TALK        => 'نقاش_المستخدم',
	NS_PROJECT_TALK     => 'نقاش_$1',
	NS_FILE             => 'ملف',
	NS_FILE_TALK        => 'نقاش_الملف',
	NS_MEDIAWIKI        => 'ميدياويكي',
	NS_MEDIAWIKI_TALK   => 'نقاش_ميدياويكي',
	NS_TEMPLATE         => 'قالب',
	NS_TEMPLATE_TALK    => 'نقاش_القالب',
	NS_HELP             => 'مساعدة',
	NS_HELP_TALK        => 'نقاش_المساعدة',
	NS_CATEGORY         => 'تصنيف',
	NS_CATEGORY_TALK    => 'نقاش_التصنيف',
];

$namespaceAliases = [
	'وسائط' => NS_MEDIA,
	'صورة' => NS_FILE,
	'نقاش_الصورة' => NS_FILE_TALK,
];

$namespaceGenderAliases = [
	NS_USER => [
		'male' => 'مستخدم',
		'female' => 'مستخدمة'
	],
	NS_USER_TALK => [
		'male' => 'نقاش_المستخدم',
		'female' => 'نقاش_المستخدمة'
	],
];

/** @phpcs-require-sorted-array */
$magicWords = [
	'anchorencode'              => [ '0', 'كود_الأنكور', 'ANCHORENCODE' ],
	'articlepath'               => [ '0', 'مسار_المقالة', 'ARTICLEPATH' ],
	'basepagename'              => [ '1', 'اسم_الصفحة_الأساسي', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'عنوان_الصفحة_الأساسي', 'BASEPAGENAMEE' ],
	'bidi'                      => [ '0', 'ثا:', 'BIDI:' ],
	'canonicalurl'              => [ '0', 'عنوان_قاعدة:', 'CANONICALURL:' ],
	'canonicalurle'             => [ '0', 'مسار_قاعدة:', 'CANONICALURLE:' ],
	'cascadingsources'          => [ '1', 'مصادر_مضمنة', 'CASCADINGSOURCES' ],
	'contentlanguage'           => [ '1', 'لغة_المحتوى', 'لغة_محتوى', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'                => [ '1', 'يوم_حالي', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'يوم_حالي2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'اسم_اليوم_الحالي', 'CURRENTDAYNAME' ],
	'currentdow'                => [ '1', 'يوم_حالي_مأ', 'CURRENTDOW' ],
	'currenthour'               => [ '1', 'ساعة_حالية', 'CURRENTHOUR' ],
	'currentmonth'              => [ '1', 'شهر_حالي', 'شهر_حالي2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'شهر_حالي1', 'CURRENTMONTH1' ],
	'currentmonthabbrev'        => [ '1', 'اختصار_الشهر_الحالي', 'CURRENTMONTHABBREV' ],
	'currentmonthname'          => [ '1', 'اسم_الشهر_الحالي', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'اسم_الشهر_الحالي_المولد', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'               => [ '1', 'وقت_حالي', 'CURRENTTIME' ],
	'currenttimestamp'          => [ '1', 'طابع_الوقت_الحالي', 'CURRENTTIMESTAMP' ],
	'currentversion'            => [ '1', 'نسخة_حالية', 'CURRENTVERSION' ],
	'currentweek'               => [ '1', 'أسبوع_حالي', 'CURRENTWEEK' ],
	'currentyear'               => [ '1', 'عام_حالي', 'CURRENTYEAR' ],
	'defaultsort'               => [ '1', 'ترتيب_افتراضي:', 'مفتاح_ترتيب_افتراضي:', 'ترتيب_تصنيف_افتراضي:', 'ترتيب_غيابي:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'defaultsort_noerror'       => [ '0', 'لاخطأ', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'لاتستبدل', 'noreplace' ],
	'directionmark'             => [ '1', 'علامة_الاتجاه', 'علامة_اتجاه', 'DIRECTIONMARK', 'DIRMARK' ],
	'displaytitle'              => [ '1', 'عرض_العنوان', 'DISPLAYTITLE' ],
	'displaytitle_noerror'      => [ '0', 'لا_خطأ', 'noerror' ],
	'displaytitle_noreplace'    => [ '0', 'لااستبدال', 'noreplace' ],
	'expectunusedcategory'      => [ '1', '__توقع_تصنيف_غير_مستخدم__','__EXPECTUNUSEDCATEGORY__', ],
	'filepath'                  => [ '0', 'مسار_الملف:', 'FILEPATH:' ],
	'forcetoc'                  => [ '0', '__لصق_فهرس__', '__FORCETOC__' ],
	'formatdate'                => [ '0', 'تهيئة_التاريخ', 'تهيئة_تاريخ', 'formatdate', 'dateformat' ],
	'formatnum'                 => [ '0', 'صيغة_رقم', 'FORMATNUM' ],
	'fullpagename'              => [ '1', 'اسم_الصفحة_الكامل', 'اسم_صفحة_كامل', 'اسم_كامل', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'عنوان_الصفحة_الكامل', 'عنوان_صفحة_كامل', 'FULLPAGENAMEE' ],
	'fullurl'                   => [ '0', 'عنوان_كامل:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'مسار_كامل:', 'FULLURLE:' ],
	'gender'                    => [ '0', 'نوع:', 'GENDER:' ],
	'grammar'                   => [ '0', 'قواعد_اللغة:', 'GRAMMAR:' ],
	'hiddencat'                 => [ '1', '__تصنيف_مخفي__', '__HIDDENCAT__' ],
	'img_alt'                   => [ '1', 'بديل=$1', 'alt=$1' ],
	'img_baseline'              => [ '1', 'خط_أساسي', 'baseline' ],
	'img_border'                => [ '1', 'حدود', 'border' ],
	'img_bottom'                => [ '1', 'أسفل', 'bottom' ],
	'img_center'                => [ '1', 'مركز', 'center', 'centre' ],
	'img_class'                 => [ '1', 'رتبة=$1', 'class=$1' ],
	'img_framed'                => [ '1', 'إطار', 'بإطار', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'لاإطار', 'frameless' ],
	'img_lang'                  => [ '1', 'لغة=$1', 'lang=$1' ],
	'img_left'                  => [ '1', 'يسار', 'left' ],
	'img_link'                  => [ '1', 'وصلة=$1', 'رابط=$1', 'link=$1' ],
	'img_manualthumb'           => [ '1', 'تصغير=$1', 'مصغر=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'                => [ '1', 'وسط', 'middle' ],
	'img_none'                  => [ '1', 'بدون', 'بلا', 'none' ],
	'img_page'                  => [ '1', 'صفحة=$1', 'صفحة_$1', 'page=$1', 'page $1' ],
	'img_right'                 => [ '1', 'يمين', 'right' ],
	'img_sub'                   => [ '1', 'فرعي', 'sub' ],
	'img_super'                 => [ '1', 'سوبر', 'سب', 'super', 'sup' ],
	'img_text_bottom'           => [ '1', 'نص_أسفل', 'text-bottom' ],
	'img_text_top'              => [ '1', 'نص_أعلى', 'text-top' ],
	'img_thumbnail'             => [ '1', 'تصغير', 'thumb', 'thumbnail' ],
	'img_top'                   => [ '1', 'أعلى', 'top' ],
	'img_upright'               => [ '1', 'معدول', 'معدول=$1', 'معدول_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_width'                 => [ '1', '$1بك', '$1عن', '$1px' ],
	'index'                     => [ '1', '__فهرسة__', '__INDEX__' ],
	'int'                       => [ '0', 'محتوى:', 'INT:' ],
	'language'                  => [ '0', '#لغة:', '#LANGUAGE:' ],
	'lc'                        => [ '0', 'صغير:', 'LC:' ],
	'lcfirst'                   => [ '0', 'عنوان_كبير:', 'LCFIRST:' ],
	'localday'                  => [ '1', 'يوم_محلي', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'يوم_محلي2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'اسم_اليوم_المحلي', 'LOCALDAYNAME' ],
	'localdow'                  => [ '1', 'يوم_محلي_مأ', 'LOCALDOW' ],
	'localhour'                 => [ '1', 'ساعة_محلية', 'LOCALHOUR' ],
	'localmonth'                => [ '1', 'شهر_محلي', 'شهر_محلي2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'شهر_محلي1', 'LOCALMONTH1' ],
	'localmonthabbrev'          => [ '1', 'اختصار_الشهر_المحلي', 'LOCALMONTHABBREV' ],
	'localmonthname'            => [ '1', 'اسم_الشهر_المحلي', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'اسم_الشهر_المحلي_المولد', 'LOCALMONTHNAMEGEN' ],
	'localtime'                 => [ '1', 'وقت_محلي', 'LOCALTIME' ],
	'localtimestamp'            => [ '1', 'طابع_الوقت_المحلي', 'LOCALTIMESTAMP' ],
	'localurl'                  => [ '0', 'مسار_محلي:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'عنوان_المسار_المحلي:', 'LOCALURLE:' ],
	'localweek'                 => [ '1', 'أسبوع_محلي', 'LOCALWEEK' ],
	'localyear'                 => [ '1', 'عام_محلي', 'LOCALYEAR' ],
	'msg'                       => [ '0', 'رسالة:', 'MSG:' ],
	'msgnw'                     => [ '0', 'رسالة_بدون_تهيئة:', 'MSGNW:' ],
	'namespace'                 => [ '1', 'نطاق', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'عنوان_نطاق', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'عدد_نطاق', 'NAMESPACENUMBER' ],
	'newsectionlink'            => [ '1', '__وصلة_قسم_جديد__', '__NEWSECTIONLINK__' ],
	'nocommafysuffix'           => [ '0', 'لا_سيب', 'NOSEP' ],
	'nocontentconvert'          => [ '0', '__لاتحويل_محتوى__', '__لاتم__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'             => [ '0', '__لاتحريرقسم__', '__NOEDITSECTION__' ],
	'nogallery'                 => [ '0', '__لامعرض__', '__NOGALLERY__' ],
	'noindex'                   => [ '1', '__لافهرسة__', '__NOINDEX__' ],
	'nonewsectionlink'          => [ '1', 'لا_وصلة_قسم_جديد__', '__NONEWSECTIONLINK__' ],
	'notitleconvert'            => [ '0', '__لاتحويل_عنوان__', '__لاتع__', '__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                     => [ '0', '__لافهرس__', '__NOTOC__' ],
	'ns'                        => [ '0', 'نط:', 'NS:' ],
	'nse'                       => [ '0', 'نطم:', 'NSE:' ],
	'numberingroup'             => [ '1', 'عدد_في_المجموعة', 'عدد_في_مجموعة', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'       => [ '1', 'عدد_المستخدمين_النشطين', 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'            => [ '1', 'عدد_الإداريين', 'NUMBEROFADMINS' ],
	'numberofarticles'          => [ '1', 'عدد_المقالات', 'NUMBEROFARTICLES' ],
	'numberofedits'             => [ '1', 'عدد_التعديلات', 'NUMBEROFEDITS' ],
	'numberoffiles'             => [ '1', 'عدد_الملفات', 'NUMBEROFFILES' ],
	'numberofpages'             => [ '1', 'عدد_الصفحات', 'NUMBEROFPAGES' ],
	'numberofusers'             => [ '1', 'عدد_المستخدمين', 'NUMBEROFUSERS' ],
	'padleft'                   => [ '0', 'باد_يسار', 'PADLEFT' ],
	'padright'                  => [ '0', 'باد_يمين', 'PADRIGHT' ],
	'pageid'                    => [ '0', 'رقم_صفحة', 'PAGEID' ],
	'pagelanguage'              => [ '1', 'لغة_الصفحة','PAGELANGUAGE' ],
	'pagename'                  => [ '1', 'اسم_الصفحة', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'عنوان_الصفحة', 'PAGENAMEE' ],
	'pagesincategory'           => [ '1', 'صفحات_في_التصنيف', 'صفحات_في_تصنيف', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesincategory_all'       => [ '0', 'كل', 'all' ],
	'pagesincategory_files'     => [ '0', 'ملفات', 'files' ],
	'pagesincategory_pages'     => [ '0', 'صفحات', 'pages' ],
	'pagesincategory_subcats'   => [ '0', 'تصنيفات_فرعية', 'subcats' ],
	'pagesinnamespace'          => [ '1', 'صفحات_في_نطاق:', 'صفحات_في_نط:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                  => [ '1', 'حجم_الصفحة', 'PAGESIZE' ],
	'plural'                    => [ '0', 'جمع:', 'PLURAL:' ],
	'protectionexpiry'          => [ '1', 'انتهاء_الحماية', 'PROTECTIONEXPIRY' ],
	'protectionlevel'           => [ '1', 'مستوى_الحماية', 'PROTECTIONLEVEL' ],
	'raw'                       => [ '0', 'خام:', 'RAW:' ],
	'rawsuffix'                 => [ '1', 'أر', 'آر', 'R' ],
	'redirect'                  => [ '0', '#تحويل', '#REDIRECT' ],
	'revisionday'               => [ '1', 'يوم_المراجعة', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'يوم_المراجعة2', 'REVISIONDAY2' ],
	'revisionid'                => [ '1', 'رقم_المراجعة', 'REVISIONID' ],
	'revisionmonth'             => [ '1', 'شهر_المراجعة', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'شهر_المراجعة1', 'REVISIONMONTH1' ],
	'revisionsize'              => [ '1', 'حجم_المراجعة', 'REVISIONSIZE' ],
	'revisiontimestamp'         => [ '1', 'طابع_وقت_المراجعة', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'مستخدم_المراجعة', 'REVISIONUSER' ],
	'revisionyear'              => [ '1', 'عام_المراجعة', 'REVISIONYEAR' ],
	'rootpagename'              => [ '1', 'جذر_اسم_الصفحة', 'ROOTPAGENAME' ],
	'rootpagenamee'             => [ '1', 'عنوان_جذر_الصفحة', 'ROOTPAGENAMEE' ],
	'safesubst'                 => [ '0', 'نسخ_آمن:', 'SAFESUBST:' ],
	'scriptpath'                => [ '0', 'مسار_السكريبت', 'مسار_سكريبت', 'SCRIPTPATH' ],
	'server'                    => [ '0', 'خادم', 'SERVER' ],
	'servername'                => [ '0', 'اسم_الخادم', 'SERVERNAME' ],
	'sitename'                  => [ '1', 'اسم_الموقع', 'SITENAME' ],
	'special'                   => [ '0', 'خاص', 'special' ],
	'speciale'                  => [ '0', 'عنوان_خاص', 'speciale' ],
	'staticredirect'            => [ '1', '__تحويلة_إستاتيكية__', '__تحويلة_ساكنة__', '__STATICREDIRECT__' ],
	'stylepath'                 => [ '0', 'مسار_الهيئة', 'STYLEPATH' ],
	'subjectpagename'           => [ '1', 'اسم_صفحة_الموضوع', 'اسم_صفحة_المقالة', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'عنوان_صفحة_الموضوع', 'عنوان_صفحة_المقالة', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'              => [ '1', 'نطاق_الموضوع', 'نطاق_المقالة', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'عنوان_نطاق_الموضوع', 'عنوان_نطاق_المقالة', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'               => [ '1', 'اسم_الصفحة_الفرعي', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'عنوان_الصفحة_الفرعي', 'SUBPAGENAMEE' ],
	'subst'                     => [ '0', 'نسخ:', 'SUBST:' ],
	'tag'                       => [ '0', 'وسم', 'tag' ],
	'talkpagename'              => [ '1', 'اسم_صفحة_النقاش', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'عنوان_صفحة_النقاش', 'TALKPAGENAMEE' ],
	'talkspace'                 => [ '1', 'نطاق_النقاش', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'عنوان_النقاش', 'TALKSPACEE' ],
	'toc'                       => [ '0', '__فهرس__', '__TOC__' ],
	'uc'                        => [ '0', 'كبير:', 'UC:' ],
	'ucfirst'                   => [ '0', 'عنوان_صغير:', 'UCFIRST:' ],
	'urlencode'                 => [ '0', 'كود_المسار:', 'URLENCODE:' ],
	'url_path'                  => [ '0', 'مسار', 'PATH' ],
	'url_query'                 => [ '0', 'استعلام', 'QUERY' ],
	'url_wiki'                  => [ '0', 'ويكي', 'WIKI' ],
];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'مستخدمون_نشطون' ],
	'Allmessages'               => [ 'كل_الرسائل' ],
	'AllMyUploads'              => [ 'كل_مرفوعاتي', 'كل_ملفاتي' ],
	'Allpages'                  => [ 'كل_الصفحات' ],
	'Ancientpages'              => [ 'صفحات_قديمة' ],
	'ApiHelp'                   => [ 'مساعدة_إيه_بي_آي' ],
	'ApiSandbox'                => [ 'ملعب_إيه_بي_آي' ],
	'AutoblockList'             => [ 'قائمة_المنع_التلقائي', 'عرض_المنع_التلقائي' ],
	'Badtitle'                  => [ 'عنوان_سيئ' ],
	'Blankpage'                 => [ 'صفحة_فارغة' ],
	'Block'                     => [ 'منع', 'منع_أيبي', 'منع_مستخدم' ],
	'BlockList'                 => [ 'قائمة_المنع', 'عرض_المنع', 'قائمة_منع_أيبي' ],
	'Booksources'               => [ 'مصادر_كتاب' ],
	'BotPasswords'              => [ 'كلمات_سر_البوت' ],
	'BrokenRedirects'           => [ 'تحويلات_مكسورة' ],
	'Categories'                => [ 'تصنيفات' ],
	'ChangeContentModel'        => [ 'تغيير_موديل_المحتوى' ],
	'ChangeCredentials'         => [ 'تغيير_الاعتمادات' ],
	'ChangeEmail'               => [ 'تغيير_البريد' ],
	'ChangePassword'            => [ 'تغيير_كلمة_السر', 'ضبط_كلمة_السر' ],
	'ComparePages'              => [ 'مقارنة_الصفحات' ],
	'Confirmemail'              => [ 'تأكيد_البريد' ],
	'Contribute'                => [ 'ساهم' ],
	'Contributions'             => [ 'مساهمات' ],
	'CreateAccount'             => [ 'إنشاء_حساب' ],
	'Deadendpages'              => [ 'صفحات_نهاية_مسدودة' ],
	'DeletedContributions'      => [ 'مساهمات_محذوفة' ],
	'DeletePage'                => [ 'حذف_الصفحة', 'حذف' ],
	'Diff'                      => [ 'فرق' ],
	'DoubleRedirects'           => [ 'تحويلات_مزدوجة' ],
	'EditPage'                  => [ 'عدل_الصفحة', 'عدل' ],
	'EditTags'                  => [ 'تعديل_الوسوم' ],
	'EditWatchlist'             => [ 'تعديل_قائمة_المراقبة' ],
	'Emailuser'                 => [ 'مراسلة_المستخدم' ],
	'ExpandTemplates'           => [ 'فرد_القوالب' ],
	'Export'                    => [ 'تصدير' ],
	'Fewestrevisions'           => [ 'الأقل_تعديلا' ],
	'FileDuplicateSearch'       => [ 'بحث_ملف_مكرر' ],
	'Filepath'                  => [ 'مسار_ملف' ],
	'GoToInterwiki'             => [ 'الذهاب_إلى_الإنترويكي' ],
	'Import'                    => [ 'استيراد' ],
	'Invalidateemail'           => [ 'تعطيل_البريد_الإلكتروني' ],
	'JavaScriptTest'            => [ 'اختبار_جافا_سكريبت' ],
	'LinkAccounts'              => [ 'وصل_الحسابات' ],
	'LinkSearch'                => [ 'بحث_الوصلات' ],
	'Listadmins'                => [ 'عرض_الإداريين' ],
	'Listbots'                  => [ 'عرض_البوتات' ],
	'ListDuplicatedFiles'       => [ 'عرض_الملفات_المكررة', 'عرض_تكرار_الملفات' ],
	'Listfiles'                 => [ 'عرض_الملفات', 'قائمة_الملفات', 'قائمة_الصور' ],
	'Listgrants'                => [ 'عرض_المنح' ],
	'Listgrouprights'           => [ 'عرض_صلاحيات_المجموعات', 'صلاحيات_مجموعات_المستخدمين' ],
	'Listredirects'             => [ 'عرض_التحويلات' ],
	'Listusers'                 => [ 'عرض_المستخدمين', 'قائمة_المستخدمين' ],
	'Lockdb'                    => [ 'غلق_قب' ],
	'Log'                       => [ 'سجل', 'سجلات' ],
	'Lonelypages'               => [ 'صفحات_وحيدة', 'صفحات_يتيمة' ],
	'Longpages'                 => [ 'صفحات_طويلة' ],
	'MediaStatistics'           => [ 'إحصاءات_الميديا' ],
	'MergeHistory'              => [ 'دمج_التاريخ' ],
	'MIMEsearch'                => [ 'بحث_ميم' ],
	'Mostcategories'            => [ 'الأكثر_تصنيفا' ],
	'Mostimages'                => [ 'أكثر_الملفات_وصلا', 'أكثر_الملفات', 'أكثر_الصور' ],
	'Mostinterwikis'            => [ 'الأكثر_إنترويكي' ],
	'Mostlinked'                => [ 'أكثر_الصفحات_وصلا', 'الأكثر_وصلا' ],
	'Mostlinkedcategories'      => [ 'أكثر_التصنيفات_وصلا', 'أكثر_التصنيفات_استخداما' ],
	'Mostlinkedtemplates'       => [ 'أكثر_القوالب_وصلا', 'أكثر_القوالب_استخداما' ],
	'Mostrevisions'             => [ 'الأكثر_تعديلا' ],
	'Movepage'                  => [ 'نقل_صفحة' ],
	'Mute'                      => [ 'كتم' ],
	'Mycontributions'           => [ 'مساهماتي' ],
	'MyLanguage'                => [ 'لغتي' ],
	'Mylog'                     => [ 'سجلي' ],
	'Mypage'                    => [ 'صفحتي' ],
	'Mytalk'                    => [ 'نقاشي' ],
	'Myuploads'                 => [ 'مرفوعاتي', 'ملفاتي' ],
	'Newimages'                 => [ 'ملفات_جديدة', 'صور_جديدة' ],
	'Newpages'                  => [ 'صفحات_جديدة' ],
	'NewSection'                => [ 'قسم_جديد' ],
	'PageData'                  => [ 'بيانات_الصفحة' ],
	'PageHistory'               => [ 'تاريخ_الصفحة', 'تاريخ' ],
	'PageInfo'                  => [ 'معلومات_الصفحة', 'معلومات' ],
	'PageLanguage'              => [ 'لغة_الصفحة' ],
	'PagesWithProp'             => [ 'صفحات_بخاصية' ],
	'PasswordPolicies'          => [ 'سياسات_كلمة_السر' ],
	'PasswordReset'             => [ 'إعادة_ضبط_كلمة_السر' ],
	'PermanentLink'             => [ 'وصلة_دائمة', 'رابط_دائم' ],
	'Preferences'               => [ 'تفضيلات' ],
	'Prefixindex'               => [ 'فهرس_بادئة' ],
	'Protectedpages'            => [ 'صفحات_محمية' ],
	'Protectedtitles'           => [ 'عناوين_محمية' ],
	'ProtectPage'               => [ 'حماية_الصفحة', 'حماية' ],
	'Purge'                     => [ 'إفراغ_الكاش' ],
	'RandomInCategory'          => [ 'عشوائي_في_تصنيف' ],
	'Randompage'                => [ 'عشوائي', 'صفحة_عشوائية' ],
	'Randomredirect'            => [ 'تحويلة_عشوائية' ],
	'Randomrootpage'            => [ 'صفحة_جذر_عشوائية' ],
	'Recentchanges'             => [ 'أحدث_التغييرات' ],
	'Recentchangeslinked'       => [ 'أحدث_التغييرات_الموصولة', 'تغييرات_مرتبطة' ],
	'Redirect'                  => [ 'تحويل' ],
	'RemoveCredentials'         => [ 'إزالة_الاعتمادات' ],
	'Renameuser'                => [ 'إعادة_تسمية_مستخدم' ],
	'ResetTokens'               => [ 'إعادة_ضبط_المفاتيح' ],
	'Revisiondelete'            => [ 'حذف_مراجعة', 'حذف_نسخة' ],
	'RunJobs'                   => [ 'تشغيل_الوظائف' ],
	'Search'                    => [ 'بحث' ],
	'Shortpages'                => [ 'صفحات_قصيرة' ],
	'Specialpages'              => [ 'صفحات_خاصة' ],
	'Statistics'                => [ 'إحصاءات' ],
	'Tags'                      => [ 'وسوم' ],
	'TrackingCategories'        => [ 'تصنيفات_التتبع' ],
	'Unblock'                   => [ 'رفع_منع' ],
	'Uncategorizedcategories'   => [ 'تصنيفات_غير_مصنفة' ],
	'Uncategorizedimages'       => [ 'ملفات_غير_مصنفة', 'صور_غير_مصنفة' ],
	'Uncategorizedpages'        => [ 'صفحات_غير_مصنفة' ],
	'Uncategorizedtemplates'    => [ 'قوالب_غير_مصنفة' ],
	'Undelete'                  => [ 'استرجاع' ],
	'UnlinkAccounts'            => [ 'فك_الحسابات' ],
	'Unlockdb'                  => [ 'فتح_قب' ],
	'Unusedcategories'          => [ 'تصنيفات_غير_مستخدمة' ],
	'Unusedimages'              => [ 'ملفات_غير_مستخدمة', 'صور_غير_مستخدمة' ],
	'Unusedtemplates'           => [ 'قوالب_غير_مستخدمة' ],
	'Unwatchedpages'            => [ 'صفحات_غير_مراقبة' ],
	'Upload'                    => [ 'رفع' ],
	'UploadStash'               => [ 'رفع_مخفي' ],
	'Userlogin'                 => [ 'دخول_المستخدم' ],
	'Userlogout'                => [ 'خروج_المستخدم' ],
	'Userrights'                => [ 'صلاحيات_المستخدم', 'ترقية_مدير_نظام', 'ترقية_بوت' ],
	'Version'                   => [ 'نسخة' ],
	'Wantedcategories'          => [ 'تصنيفات_مطلوبة' ],
	'Wantedfiles'               => [ 'ملفات_مطلوبة' ],
	'Wantedpages'               => [ 'صفحات_مطلوبة', 'وصلات_مكسورة' ],
	'Wantedtemplates'           => [ 'قوالب_مطلوبة' ],
	'Watchlist'                 => [ 'قائمة_المراقبة' ],
	'Whatlinkshere'             => [ 'ماذا_يصل_هنا' ],
	'Withoutinterwiki'          => [ 'بدون_إنترويكي' ],
];

$linkPrefixExtension = true;

/**
 * Regular expression matching the "link trail", e.g. "ed" in [[Toast]]ed, as
 * the first group, and the remainder of the string as the second group. Modified to match
 * Arabic trails too.
 */
// The prefix set also needs to include diacritics, as these can be added
// to letters, but keep them as letters.
// These are from the "Extend" group in Unicode:
// https://www.unicode.org/Public/13.0.0/ucd/auxiliary/WordBreakProperty.txt
$arabicCombiningDiacritics =
	'\\x{0610}-\\x{061A}' .
	'\\x{064B}-\\x{065F}' .
	'\\x{0670}' .
	'\\x{06D6}-\\x{06DC}' .
	'\\x{06DF}-\\x{06E4}' .
	'\\x{06E7}' .
	'\\x{06E8}' .
	'\\x{06EA}-\\x{06ED}';

$linkTrail = '/^([a-zء-ي' . $arabicCombiningDiacritics . ']+)(.*)$/sDu';
$linkPrefixCharset = 'a-zA-Zء-ي' . $arabicCombiningDiacritics;
unset( $arabicCombiningDiacritics );

$digitGroupingPattern = "#,##0.###";

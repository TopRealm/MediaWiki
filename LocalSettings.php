<?php
## 防止外部执行PHP
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## 取消内容压缩
#$wgDisableOutputCompression = true;

## 档案馆{{Sitename}}名称
$wgSitename = "有兽档案馆";

## 脚本目录
$wgScriptPath = "";

## 条目地址（短链接）
$wgArticlePath = "/wiki/$1";
$wgUsePathInfo = true;

## 性能限制
$wgMaxArticleSize = 81920;
$wgAPIMaxResultSize = 335544320;
$wgMemoryLimit = "128M";

## git版本显示
$wgGitBin = '/usr/bin/git';
$wgGitRepositoryViewers['https://git.qiuwen.net.cn/(.*?)(.git)?'] = 'https://git.qiuwen.net.cn/$1/commit/%H';
$wgGitRepositoryViewers['https://git.qiuwen.wiki/(.*?)(.git)?'] = 'https://git.qiuwen.net.cn/$1/commit/%H';
$wgGitRepositoryViewers['https://github.com/(.*?)(.git)?'] = 'https://github.com/$1/commit/%H';
$wgGitRepositoryViewers['https://mirror.ghproxy.com/https://github.com/(.*?)(.git)?'] = 'https://github.com/$1/commit/%H';
$wgGitRepositoryViewers['https://gitee.com/(.*?)(.git)?'] = 'https://gitee.com/$1/commit/%H';
$wgGitInfoCacheDirectory = "$IP/cache/gitinfo";

## 域名地址
$wgServer = "https://youshou.wiki";

## SEO规范网址
$wgEnableCanonicalServerLink = true;

## 限制sitemap生成范围
$wgSitemapNamespaces = [
    0,
    4,  // Project
    6,  // File
    12, // Help
    14, // Category
    300 // Fanmade
];

## iOS“添加到主页”指定图标
$wgAppleTouchIcon = "/images/thumb/0/0c/Touch-icon.png/150px-Touch-icon.png";

## 静态资源地址
$wgResourceBasePath = $wgScriptPath;

# 启用全站JavaScript/CSS样式
$wgUseSiteJs = true;
$wgUseSiteCss = true;
//$wgResourceLoaderEnableJSProfiler = true;

## 有兽档案馆Logo、favicon图标
$wgLogos = [
	'1x' => "{$wgScriptPath}/images/e/e1/有兽档案馆绿色图书Logo.svg",
	'icon' => "{$wgScriptPath}/images/e/e1/有兽档案馆绿色图书Logo.svg",
	'wordmark' => [
		'src' => "{$wgScriptPath}/images/4/4f/有兽档案馆文字标志.svg",	// path to wordmark version
		'1x' => "{$wgScriptPath}/images/4/4f/有兽档案馆文字标志.svg",		// optional if you want to support browsers with SVG support with an SVG logo.
		'width' => 145,
		'height' => 45,
	],
];
$wgFavicon = "$wgScriptPath/favicon.ico";

# 利用钩子添加主题色
$wgHooks['BeforePageDisplay'][] = function (Outputpage $out, Skin $skin) {
    $out->addMeta('theme-color', '#338c60');
};

## 邮件系统
require_once "$IP/ysarxiv-settings/EmailSmtpPassword.php";
$wgEnableEmail = true;
$wgEnableUserEmail = true; # 用户可调整
$wgAllowHTMLEmail = true;
$wgEmergencyContact = "zorua@vip.qq.com";
$wgPasswordSender = "no-reply@notice.youshou.wiki";
$wgEnotifUserTalk = true; # 用户可调整
$wgEnotifWatchlist = true; # 用户可调整
$wgEmailAuthentication = true;
$wgUserEmailConfirmationTokenExpiry = 1800;
$wgEmailConfirmToEdit = true;

## 数据库设置
require_once "$IP/ysarxiv-settings/DBPassword.php";

# 数据库前缀设置
$wgDBprefix = "ysy";

# 数据库表结构设置
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# 共享数据表
# $wgSharedDB 未启用时无效
$wgSharedTables[] = "actor";

## 缓存设置
# 缓存类型
$wgMainCacheType = CACHE_MEMCACHED;
$wgParserCacheType = CACHE_MEMCACHED; // optional
$wgMessageCacheType = CACHE_MEMCACHED; // optional
$wgSessionCacheType = CACHE_MEMCACHED;
$wgMemCachedServers = [ '127.0.0.1:11211' ];
# 启用匿名访问的HTML直出
$wgUseFileCache = true;
$wgFileCacheDirectory = "$IP/cache/html";
# i18n/l10n缓存、侧边栏缓存、扩展缓存
$wgEnableSidebarCache = true;
$wgUseLocalMessageCache = true;
$wgSidebarCacheExpiry = 60480;
$wgExtensionInfoMTime = filemtime( "$IP/LocalSettings.php" );
$wgLocalisationCacheConf = [
	'class' => LocalisationCache::class,
	'store' => 'array',
	'storeClass' => false,
	'storeServer' => [],
	'forceRecache' => false,
	'storeDirectory' => __DIR__ . "/cache/l10n",
	'manualRecache' => true,
];

# 解析器函数缓存
$wgParserCacheExpireTime = 86400 * 30;
# beta: ResorceLoader缓存控制
$wgResourceLoaderMaxage = [
	'versioned' => 30 * 24 * 60 * 60, // 30 days
	'unversioned' => 5 * 60 // 5 minutes
];

## 使用GZIP
$wgUseGzip = true;

## 性能模式
$wgMiserMode = true;

## 文件上传功能，上传大小由PHP POST值控制
$wgEnableUploads = true;
$wgUseImageResize = true;
$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = '/usr/local/ImageMagick-7.1.0/bin/convert';
$wgDefaultUserOptions['imagesize'] = 2;
$wgResponsiveImages = true;
$wgNativeImageLazyLoading = true;
$wgFileExtensions[] = 'svg';
$wgAllowTitlesInSVG = true;
$wgSVGConverter = 'rsvg';
$wgSVGMaxSize = 4096;
$wgMediaInTargetLanguage = true;
$wgMaxImageArea = false;
$wgMaxAnimatedGifArea = 10e7; // 100MP

# 拒绝使用维基共享资源（commons）
$wgUseInstantCommons = false;

# 向 WMF 上报信息
$wgPingback = false;

# 站点语言代码及变体
$wgLanguageCode = "zh";
$wgDefaultLanguageVariant = "zh-cn";
$wgVariantArticlePath = "/$2/$1";
# Time zone
$wgLocaltimezone = "PRC";
date_default_timezone_set( $wgLocaltimezone );

## 缓存目录，公共不可读写
$wgCacheDirectory = "$IP/cache";

## SecretKeys
require_once "$IP/ysarxiv-settings/SecretKeys.php";

## Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

## 版权声明相关
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by-sa/4.0/deed.zh-hans";
$wgRightsText = "知识共享：署名-相同方式共享 4.0";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by-sa.png";

# Diff引擎
$wgDiffEngine = "wikidiff2";
$wgDiff3 = "/usr/bin/diff3";

# The following permissions were set based on your choice in the installer
$wgApiFrameOptions = 'SAMEORIGIN';

// CDN
$wgUseCdn = true;
$wgCdnServersNoPurge[] = "0.0.0.0/0";
#$wgCdnServersNoPurge[] = "103.15.97.0/24";
#$wgCdnServersNoPurge[] = "49.7.41.0/24";
#$wgCdnServersNoPurge[] = "36.110.205.0/24";

# 扩展
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'Matomo' );
// Matomo访问信息收集
require_once "$IP/ysarxiv-settings/MatomoSettings.php";

wfLoadExtension( 'AbuseFilter' );
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtensions([ 'ConfirmEdit', 'ConfirmEdit/hCaptcha' ]);
require_once "$IP/ysarxiv-settings/hCaptchaKeys.php";
$wgCaptchaTriggers['edit'] = true;
$wgCaptchaTriggers['create'] = true;
$wgCaptchaTriggers['createtalk'] = true;
$wgCaptchaTriggers['addurl'] = true;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['badlogin'] = true;

wfLoadExtension( 'BetaFeatures' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'PageImages' );
$wgPageImagesExpandOpenSearchXml = true;

wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'SecureLinkFixer' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TextExtracts' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'VisualEditor' );
$wgVisualEditorEnableBetaFeature = true;
$wgVisualEditorEnableDiffPageBetaFeature = true;
$wgVisualEditorTabPosition = 'after';
$wgVisualEditorAvailableNamespaces = [
    'File' => false,
    'Extra' => true,
    'Project' => true,
    'Help' => true,
    'Draft' => true,
    'Fanmade' => true,
    'Talk' => true,
    'Category' => false,
];
$wgVisualEditorDisableForAnons = true;
$wgVisualEditorSerializationCacheTimeout = 30;

wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'Popups' );
wfLoadExtension( 'FileImporter' );
wfLoadExtension( 'MassMessage' );
wfLoadExtension( 'Elastica' );
wfLoadExtension( 'CirrusSearch' );
$wgSearchType = 'CirrusSearch';
$wgCirrusSearchUseCompletionSuggester = 'yes';
$wgCirrusSearchPhraseSuggestUseText = true;
$wgCirrusSearchPhraseSuggestUseOpeningText = true;
$wgCirrusSearchPrefixSearchStartsWithAnyWord = true;
$wgCirrusSearchMoreLikeThisAllowedFields = [
        'title',
        'text',
        'auxiliary_text',
        'opening_text',
        'headings',
        'all'
    ];

wfLoadExtension( 'AdvancedSearch' );
##$wgAdvancedSearchHighlighting = true;

wfLoadExtension( 'MediaSearch' );
wfLoadExtension( 'CodeMirror' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'Linter' );
wfLoadExtension( 'DiscussionTools' );
wfLoadExtension( 'InterwikiExtracts' );
wfLoadExtension( 'CheckUser' );
wfLoadExtension( 'SandboxLink' );
wfLoadExtension( 'TemplateStyles' );
wfLoadExtension( 'TemplateStylesExtender' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'Citoid' );
wfLoadExtension( 'LabeledSectionTransclusion' );
wfLoadExtension( 'RevisionSlider' );
wfLoadExtension( 'EventLogging' );
wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luasandbox';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;

wfLoadExtension( 'Echo' );
wfLoadExtension( 'MassEditRegex' );
wfLoadExtension( 'TemplateSandbox' );
wfLoadExtension( 'TwoColConflict' );
wfLoadExtension( 'EmbedVideo' );
wfLoadExtension( 'WikiSEO' );
# SEO配置
$wgWikiSeoDefaultLanguage = 'zh';
$wgWikiSeoEnableAutoDescription = true;

wfLoadExtension( 'UploadWizard' );
wfLoadExtension( 'Disambiguator' );
wfLoadExtension( 'WikiLove' );
wfLoadExtension( 'Thanks' );
wfLoadExtension( 'AJAXPoll' );
wfLoadExtension( 'LabeledSectionTransclusion' );
wfLoadExtension( 'cldr' );
wfLoadExtension( 'OAuth' );
// Oauth 秘钥
$wgMWOAuthSecureTokenTransfer = true;
$wgOAuth2PrivateKey = __DIR__ . "/oauthkeys/private.key";
$wgOAuth2PublicKey = __DIR__ . "/oauthkeys/public.key";

wfLoadExtension( 'OrphanedTalkPages' );
wfLoadExtension( 'NewSignupPage' );
wfLoadExtension( 'AntiSpoof' );
wfLoadExtension( 'CommonsMetadata' );
wfLoadExtension( 'PageForms' );
# Page Forms 设置
$wgPageFormsMaxLocalAutocompleteValues = 500;
$wgPageFormsRedLinksCheckOnlyLocalProps = true;

wfLoadExtension( 'RegexFunctions' );
wfLoadExtension( 'Lockdown' );
require_once "$IP/ysarxiv-settings/Lockdowns.php";

wfLoadExtension( 'UserMerge' );
$wgUserMergeProtectedGroups = [ 'sysop', 'steward' ];

wfLoadExtension( 'LoginNotify' );
wfLoadExtension( 'TabberNeue' );
wfLoadExtension( 'ContributionScores' );
wfLoadExtension( 'PinyinSort' );
wfLoadExtension( 'DarkMode' );
wfLoadExtension( 'CollapsibleSidebar' );
wfLoadExtension( 'Avatar' );
//Avatar插件配置
$wgDefaultAvatar = 'https://youshou.wiki/images/avatars/default/default.gif';
$wgMaxAvatarResolution = 512;
$wgDefaultAvatarRes = 256;

wfLoadExtension( 'FileImporter' );
wfLoadExtension( 'MultiBoilerplate' );
wfLoadExtension( 'NewUserMessage' );
wfLoadExtension( 'CreateUserPage' );
$wgCreateUserPage_AutoCreateUser = 'New user page';
$wgCreateUserPage_PageContent ='{{用户页}}';

wfLoadExtension( 'Widgets' );
$wgExtensionFunctions[] = function() use ( &$wgGroupPermissions ) {
    unset( $wgGroupPermissions['widgeteditor'] );
};

#wfLoadExtension( 'NativeSvgHandler' );
wfLoadExtension( 'TemplateWizard' );
#wfLoadExtension( 'GrowthExperiments' );
#wfLoadExtension( 'PageViewInfo' );
wfLoadExtension( 'RNRSHook' );

# Add more configuration options below.

// 语义维基配置及插件配置
wfLoadExtension( 'SemanticMediaWiki' );
enableSemantics();
$wgExtensionFunctions[] = function() use ( &$wgGroupPermissions ) {
    unset( $wgGroupPermissions['smwadministrator'] );
    unset( $wgGroupPermissions['smwcurator'] );
};
wfLoadExtension( 'SemanticScribunto' );
wfLoadExtension( 'SemanticDrilldown' );
wfLoadExtension( 'SemanticResultFormats' );
// $smwgEnabledFulltextSearch = true;
# 语义维基调优
$smwgQMaxLimit = 1000;
$smwgQEqualitySupport = SMW_EQ_NONE;
$smwgQueryResultCacheType = CACHE_ACCEL;
$smwgQMaxSize = 9;
$wgDefaultUserOptions['smw-prefs-general-options-show-entity-issue-panel'] = false;
$smwgMaintenanceLanguage = 'zh';

// NewUserMessage
require_once('extensions/NewUserMessage/includes/NewUserMessage.php');

## 旧版imagetag配置
$wgAllowImageTag = true;

## VisualEditor、Citoid、Eventloggin、解析器函数等设置
$wgWikiEditorRealtimePreview = true;
$wgEventLoggingBaseUri = '/beacon/event';
#$wgEventLoggingServiceUri = '/beacon/intake-analytics';
$wgEventLoggingStreamNames = true;
$wgShowExceptionDetails = true;
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsReferencePreviewsBetaFeature = false;
$wgDefaultUserOptions['usebetatoolbar'] = 1; // user option provided by WikiEditor extension
$wgAllowUserJs = true;
$wgAllowUserCss = true;
$wgDiscussionToolsEnable = true;
$wgPFEnableStringFunctions = true;

## 空编辑摘要提醒
#$wgDefaultUserOptions['forceeditsummary'] = 1;

$wgUploadNavigationUrl = '/wiki/Special:UploadWizard';
$wgWikiLoveGlobal = true;
$wgCheckUserEnableSpecialInvestigate = true;
$wgForeignUploadTargets = [];
$wgTabberNeueEnableAnimation = true;
$wgTwoColConflictUseInline = false;
//$wgAllowSiteCSSOnRestrictedPages = true;

// 工作队列
$wgJobRunRate = 0.2;
$wgRunJobsAsync = true;
// 拼音分类
$wgCategoryCollation = 'pinyin-noprefix';

// 登录告警
$wgLoginNotifyAttemptsKnownIP = 5;
$wgLoginNotifyAttemptsNewIP = 3;

// Echo增强设置
$wgEchoEmailFooterAddress = '有兽档案馆，开放的有兽焉wiki';

// 贡献分数
// Exclude Bots from the reporting - Can be omitted.
$wgContribScoreIgnoreBots = true;
// Exclude Blocked Users from the reporting - Can be omitted.
$wgContribScoreIgnoreBlockedUsers = true;
// Exclude specific usernames from the reporting - Can be omitted.
$wgContribScoreIgnoreUsernames = [];
// Use real user names when available - Can be omitted. Only for MediaWiki 1.19 and later.
$wgContribScoresUseRealName = false;

// FileImporter
$wgFileImporterShowInputScreen = true;
$wgFileImporterRequiredRight = 'import';
//用户偏好默认不监视
$wgDefaultUserOptions['watchdefault'] = 0;

// 语法高亮使用系统包
$wgPygmentizePath = 'pygmentize';

//RateLimit频率限制
$wgRateLimits['edit']['user'] = [ 30, 30 ];
$wgRateLimits['create']['user'] = [ 30, 30 ];

//最后贡献
$wgMaxCredits = 3;

## 强制登录使用HTTPS
$wgSecureLogin = true;

## 此处承接庞大的用户组和权限信息
# 保护级别指定
$wgRestrictionLevels[] = 'officialprotected';
$wgRestrictionLevels[] = 'templateeditor';
require_once "$IP/ysarxiv-settings/UserRights.php";

// 密码策略
$wgPasswordPolicy['policies']['default']['MinimalPasswordLength'] = 8;
$wgPasswordPolicy['policies']['default']['MaximalPasswordLength'] = 128;

$wgImportSources = [
      'qwbk',
];

// 项目别名配置区
require_once "$IP/ysarxiv-settings/NameSpaces.php";

$wgContentNamespaces = [ 0, 300, ];
$wgNamespacesToBeSearchedDefault[NS_FANMADE] = true;

//页底
$wgFooterIcons["copyright"] = [
	"myicon" => [
		"src" => "/resources/assets/cc-by-sa-button.png",
		"url" => "https://creativecommons.org/licenses/by-sa/4.0/",
		"alt" => "知识共享署名-相同方式共享 4.0",
		"height" => "31",
		"width" => "88",
	],
];

$wgRightsIcon = null;

// Add a link to this page (https://www.mediawiki.org/wiki/?curid=6031)
// test-desc is an i18n message of the text

$wgHooks['SkinAddFooterLinks'][] = function ( Skin $skin, string $key, array &$footerlinks ) {
    if ( $key === 'info' ) {
        $footerlinks['extra-info'] =
        Html::rawElement( 'p', [],
        $skin->msg( 'copyright-info' )->text()// test-desc is an i18n message of the text
        );
    };
};

$wgHooks['SkinAddFooterLinks'][] = function ( Skin $skin, string $key, array &$footerlinks ) {
    if ( $key === 'info' ) {
        $footerlinks['disclaimer-info'] = Html::rawElement( 'p', [],
        $skin->msg( 'disclaimer-info' )->text()// test-desc is an i18n message of the text
        );
    };
};

$wgHooks['SkinAddFooterLinks'][] = function ( Skin $skin, string $key, array &$footerlinks ) {
    if ( $key === 'places' ) {
        $footerlinks['TOS'] = Html::element( 'a',
            [
                'href' => 'https://youshou.wiki/wiki/LIB:用户协议',
            ],
        $skin->msg( 'TOS-footer' )->text()
        );
    };
};

$wgHooks['SkinAddFooterLinks'][] = function ( Skin $skin, string $key, array &$footerlinks ) {
    if ( $key === 'places' ) {
        $footerlinks['copyrightfooter'] = Html::element( 'a',
            [
                'href' => 'https://youshou.wiki/wiki/LIB:著作权条例',
            ],
        $skin->msg( 'copyright-footer' )->text()
        );
    };
};

$wgHooks['SkinAddFooterLinks'][] = function ( Skin $skin, string $key, array &$footerlinks ) {
    if ( $key === 'places' ) {
        $footerlinks['gongyue'] = Html::element( 'a',
            [
                'href' => 'https://youshou.wiki/wiki/LIB:档案馆章程',
            ],
        $skin->msg( 'gongyue-info' )->text()
        );
    };
};

$wgHooks['SkinAddFooterLinks'][] = function ( Skin $skin, string $key, array &$footerlinks ) {
    if ( $key === 'places' ) {
        $footerlinks['uptime'] = Html::element( 'a',
            [
                'href' => 'https://jiankong.zorua.top',
            ],
        $skin->msg( 'uptime-monitor' )->text()
        );
    };
};

$wgHooks['SkinAddFooterLinks'][] = function ( Skin $skin, string $key, array &$footerlinks ) {
    if ( $key === 'places' ) {
        $footerlinks['version'] = Html::element( 'a',
            [
                'href' => 'https://youshou.wiki/wiki/Special:version',
            ],
        $skin->msg( 'version-info' )->text()
        );
    };
};

$wgHooks['SkinAddFooterLinks'][] = function ( Skin $skin, string $key, array &$footerlinks ) {
    if ( $key === 'places' ) {
        $footerlinks['qiuwen'] = Html::element( 'a',
            [
                'href' => 'https://www.qiuwenbaike.cn',
            ],
        $skin->msg( 'qiuwen-friendlink' )->text()
        );
    };
};

$wgHooks['SkinAddFooterLinks'][] = function ( Skin $skin, string $key, array &$footerlinks ) {
    if ( $key === 'places' ) {
        $footerlinks['REPORT'] = Html::element( 'a',
            [
                'href' => 'https://youshou.wiki/wiki/LIB:REPORT',
            ],
        $skin->msg( 'REPORT' )->text()
        );
    };
};

$wgHooks['SkinAddFooterLinks'][] = function ( Skin $skin, string $key, array &$footerlinks ) {
    if ( $key === 'places' ) {
        $footerlinks['miit-beian'] = Html::element( 'a',
            [
                'href' => 'https://beian.miit.gov.cn/',
            ],
        $skin->msg( 'miit-beian-number' )->text()
        );
    };
};

$wgHooks['SkinAddFooterLinks'][] = function ( Skin $skin, string $key, array &$footerlinks ) {
    if ( $key === 'places' ) {
        $footerlinks['mps-beian'] = Html::element( 'a',
            [
                'href' => 'http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=14010702074458',
            ],
        $skin->msg( 'mps-beian-number' )->text()
        );
    };
};

# 启用皮肤.
# 以下皮肤将自动启用（为什么移到这里：SandboxLink和BetaFeatures需要提前加载）:
wfLoadSkins( [ 'Gongbi', 'Citizen', 'Vector' ] );
$wgDefaultSkin = "Citizen";
$wgCitizenSearchDescriptionSource = "textextracts";

// debug only
$wgReadOnly = false ;
// Use ?forceprofile=1 to generate a trace log, written to /w/logs/speedscope.json
	/*
if ( extension_loaded( 'excimer' ) && isset( $_GET['forceprofile'] ) ) {
	$excimer = new ExcimerProfiler();
	$excimer->setPeriod( 0.001 ); // 1ms
	$excimer->setEventType( EXCIMER_REAL );
	$excimer->start();
	register_shutdown_function( function () use ( $excimer ) {
		$excimer->stop();
		$data = $excimer->getLog()->getSpeedscopeData();
		$data['profiles'][0]['name'] = $_SERVER['REQUEST_URI'];
		file_put_contents( '/www/wwwroot/mwlogs/speedscope-' . ( new DateTime )->format( 'Y-m-d_His_v' ) . '-' . MW_ENTRY_POINT . '.json',
				json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) );
	} );
}
	*/

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
$wgGitInfoCacheDirectory = "/www/wwwroot/MediaWiki/cache/gitinfo";

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
require_once "/www/wwwroot/mw-utils/YsArchives-Settings/EmailSmtpPassword.php";
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
require_once "/www/wwwroot/mw-utils/YsArchives-Settings/DBPassword.php";

# 数据库前缀设置
$wgDBprefix = "ysy";

# 数据库表结构设置
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# 共享数据表
# $wgSharedDB 未启用时无效
$wgSharedTables[] = "actor";

## 缓存设置
# 缓存类型
$wgMainCacheType = CACHE_ACCEL;
$wgParserCacheType = CACHE_MEMCACHED; // optional
$wgMessageCacheType = CACHE_ACCEL; // optional
$wgSessionCacheType = CACHE_MEMCACHED;
$wgMemCachedServers = [ '127.0.0.1:11211' ];
$wgMemCachedPersistent = true;

$wgParserCacheExpireTime = 60 * 60 * 24; // 1 week

# i18n/l10n缓存、侧边栏缓存、扩展缓存
$wgEnableSidebarCache = true;
$wgUseLocalMessageCache = true;
$wgSidebarCacheExpiry = 60480;
$wgLocalisationCacheConf = [
	'class' => LocalisationCache::class,
	'store' => 'array',
	'storeClass' => false,
	'storeServer' => [],
	'forceRecache' => false,
	'storeDirectory' => __DIR__ . "/cache/l10n",
	'manualRecache' => true,
];

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
$wgLocaltimezone = "Asia/Shanghai";
date_default_timezone_set( $wgLocaltimezone );

## 缓存目录，公共不可读写
$wgCacheDirectory = "$IP/cache";

## SecretKeys
require_once "/www/wwwroot/mw-utils/YsArchives-Settings/SecretKeys.php";

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
$wgUsePrivateIPs = true;
$wgCdnServersNoPurge[] = "0.0.0.0/0";
#$wgCdnServersNoPurge[] = "103.15.97.0/24";
#$wgCdnServersNoPurge[] = "49.7.41.0/24";
#$wgCdnServersNoPurge[] = "36.110.205.0/24";

require_once "/www/wwwroot/mw-utils/YsArchives-Extensions/LoadExtensions.php";

## 旧版imagetag配置
$wgAllowImageTag = true;

$wgShowExceptionDetails = true;

$wgAllowUserJs = true;
$wgAllowUserCss = true;
$wgAllowSiteCSSOnRestrictedPages = true;

$wgPFEnableStringFunctions = true;

## Cookies策略
## Strict - 只有在同站点请求时发送
$wgCookieSameSite = 'Strict';
## 只有在HTTPS连接时发送
$wgCookieSecure = true;

## 空编辑摘要提醒
#$wgDefaultUserOptions['forceeditsummary'] = 1;

#修复页面移动产生的双重重定向
$wgFixDoubleRedirects = true;

$wgUploadNavigationUrl = '/wiki/Special:UploadWizard';

$wgForeignUploadTargets = [];
//$wgAllowSiteCSSOnRestrictedPages = true;

// 工作队列
$wgJobRunRate = 0.2;
$wgRunJobsAsync = true;

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
require_once "/www/wwwroot/mw-utils/YsArchives-Settings/UserRights.php";

// 密码策略
$wgPasswordPolicy['policies']['default']['MinimalPasswordLength'] = 8;
$wgPasswordPolicy['policies']['default']['MaximalPasswordLength'] = 128;

$wgImportSources = [
      'qwbk',
];

// 项目别名配置区
require_once "/www/wwwroot/mw-utils/YsArchives-Settings/NameSpaces.php";

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
require_once "/www/wwwroot/mw-utils/YsArchives-Skins/LoadSkins.php";

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

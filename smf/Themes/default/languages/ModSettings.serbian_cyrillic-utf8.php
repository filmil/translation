<?php
// Version: 1.1.5; ModSettings

$txt['smf3'] = 'Ова страница вам дозвољава да промените подешавања могућности, модификација и основних опција вашег форума.  Погледајте <a href="' . $scripturl . '?action=theme;sa=settings;th=' . $settings['theme_id'] . ';sesc=' . $context['session_id'] . '">подешавања тема</a> за више опција.  Кликните на иконе помоћи за више информација о подешавању.';

$txt['mods_cat_features'] = 'Основне могућности форума';
$txt['pollMode'] = 'Мод гласања';
$txt['smf34'] = 'Онемогући гласања';
$txt['smf32'] = 'Омогући гласања';
$txt['smf33'] = 'Прикажи постојећа гласања као теме';
$txt['allow_guestAccess'] = 'Дозволи гостима да прегледају форум';
$txt['userLanguage'] = 'Омогући корисницима одабир језика';
$txt['allow_editDisplayName'] = 'Дозволити корисницима измену приказаног имена?';
$txt['allow_hideOnline'] = 'Дозволити не-администраторима да сакрију свој статус присутности?';
$txt['allow_hideEmail'] = 'Дозволити корисницима да сакрију свој e-mail од свих сем администратора?';
$txt['guest_hideContacts'] = 'Не откривај гостима детаље контактирања чланова';
$txt['titlesEnable'] = 'Омогући прилагођене називе';
$txt['enable_buddylist'] = 'Омогући списак пријатеља';
$txt['default_personalText'] = 'Подразумевани лични текст';
$txt['max_signatureLength'] = 'Највише дозвољених карактера у потписима<div class="smalltext">(0 за неограничено)</div>';
$txt['number_format'] = 'Подразумевани формат бројева';
$txt['time_format'] = 'Подразумевани формат времена';
$txt['time_offset'] = 'Општи временски помак<div class="smalltext">(додаје се оном који постави члан.)</div>';
$txt['failed_login_threshold'] = 'Праг неуспелих пријава';
$txt['lastActive'] = 'Праг времена за утврђивање присутности';
$txt['trackStats'] = 'Прати дневну статистику';
$txt['hitStats'] = 'Прати дневне посете (захтева омогућену статистику)';
$txt['enableCompressedOutput'] = 'Омогући компресовани излаз';
$txt['databaseSession_enable'] = 'Користи сесије управљане базом';
$txt['databaseSession_loose'] = 'Дозволи прегледачима да се враћају уназад на кеширане стране';
$txt['databaseSession_lifetime'] = 'Секунди пре истека некоришћене сесије';
$txt['enableErrorLogging'] = 'Омогући записивање грешака';
$txt['cookieTime'] = 'Подразумевана дужина колачића за пријављивање (у минутима)';
$txt['localCookies'] = 'Омогући локално чување колачића<div class="smalltext">(SSI не ради добро са овом опцијом укљученом.)</div>';
$txt['globalCookies'] = 'Користи колачиће независне од поддомена<div class="smalltext">(прво искључите локалне колачиће!)</div>';
$txt['securityDisable'] = 'Онемогући безбедност администрационог дела';
$txt['send_validation_onChange'] = 'Захтевај поновну активацију након промене e-mail адресе';
$txt['approveAccountDeletion'] = 'Захтевај одобрење администратора када члан обрише налог';
$txt['autoOptDatabase'] = 'На колико дана да оптимизујем табеле?<div class="smalltext">(0 за онемогућено.)</div>';
$txt['autoOptMaxOnline'] = 'Највећи број присутних корисника приликом оптимизације<div class="smalltext">(0 за неограничено.)</div>';
$txt['autoFixDatabase'] = 'Аутоматски поправи покварене табеле';
$txt['allow_disableAnnounce'] = 'Дозволи корисницима да онемогуће обавештења';
$txt['disallow_sendBody'] = 'Онемогућити текст поруке у обавештењима?';
$txt['modlog_enabled'] = 'Записуј акције уређивања';
$txt['queryless_urls'] = 'URL-ови прилагођени претраживачима<div class="smalltext"><b>само Apache!</b></div>';
$txt['max_image_width'] = 'Највећа ширина послатих слика (0 = онемогућено)';
$txt['max_image_height'] = 'Највећа висина послатих слика (0 = онемогућено)';
$txt['mail_type'] = 'Тип поште';
$txt['mail_type_default'] = '(PHP подразумевано)';
$txt['smtp_host'] = 'SMTP сервер';
$txt['smtp_port'] = 'SMTP порт';
$txt['smtp_username'] = 'SMTP корисничко име';
$txt['smtp_password'] = 'SMTP лозинка';
$txt['enableReportPM'] = 'Омогући пријављивање приватних порука';
$txt['max_pm_recipients'] = 'Највећи дозвољени број прималаца у приватним порукама. <div class="smalltext">(0 за онемогућено, администратори су изузетак)</div>';
$txt['pm_posts_verification'] = 'Број порука испод којих корисници морају да унесу код са слике да би послали приватну поруку.<div class="smalltext">(0 за неограничено, администратори су изузетак)</div>';
$txt['pm_posts_per_hour'] = 'Број приватних порука које кросник може да пошаље за један сат.<div class="smalltext">(0 за неограничено, уредници су изузетак)</div>';

$txt['mods_cat_layout'] = 'Изглед и опције';
$txt['compactTopicPagesEnable'] = 'Ограничи број приказаних линкова ка страницама';
$txt['smf235'] = 'Узастопне странице за приказ:';
$txt['smf236'] = 'да би се приказало';
$txt['todayMod'] = 'Омогући опцију &quot;Данас&quot;';
$txt['smf290'] = 'Онемогућено';
$txt['smf291'] = 'Само &quot;Данас&quot;';
$txt['smf292'] = 'Данас и Јуче';
$txt['topbottomEnable'] = 'Омогући дугмад Иди горе/Иди доле';
$txt['onlineEnable'] = 'Прикажи присутност у темама и приватним порукама';
$txt['enableVBStyleLogin'] = 'Прикажи поље за брзо пријављивање на свакој страници';
$txt['defaultMaxMembers'] = 'Чланова по страници у списку чланова';
$txt['timeLoadPageEnable'] = 'Прикажи време потребно за креирање сваке странице';
$txt['disableHostnameLookup'] = 'Онемогућити претраживање имена домаћина?';
$txt['who_enabled'] = 'Омогући списак &quot;Ко је присутан&quot;';

$txt['smf293'] = 'Углед';
$txt['karmaMode'] = 'Мод угледа';
$txt['smf64'] = 'Онемогући углед|Омогући укупан углед|Омогући позитиван/негативан углед';
$txt['karmaMinPosts'] = 'Најмањи број порука потребан за измену угледа';
$txt['karmaWaitTime'] = 'Време чекања у сатима (између два мењања угледа)';
$txt['karmaTimeRestrictAdmins'] = 'Да ли време чекања важи и за администраторе?';
$txt['karmaLabel'] = 'Наслов угледа';
$txt['karmaApplaudLabel'] = 'Наслов повећавања угледа';
$txt['karmaSmiteLabel'] = 'Наслов смањивања угледа';

$txt['caching_information'] = '<div align="center"><b><u>Важно! Прочитајте ово пре него што омогућите ове могућности.</b></u></div><br />
	SMF подржава кеширање кроз употребу акцелератора. Тренутно подржани акцелератори су:<br />
	<ul>
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (не Zend Optimizer)</li>
	</ul>
	Кеширање ће радити само ако је PHP на вашем серверу компајлиран са подршком за неки од горе наведених акцелератора или имате доступан memcache. <br /><br />
	SMF изводи кеширање на разним нивоима. Већи нивои кеширања трошиће више процесорског времена на добијање кешираних информација. Ако је кеширање омогућено на вашој машини, препоручујемо да прво пробате кеширање на првом нивоу.
	<br /><br />
	Ако користите memcache, мораћате да прецизирате детаље сервера у подешавањима. Требало би да их унесете као зарезом одвојени списак као што је приказано у примеру испод:<br />
	&quot;сервер1,сервер2,сервер3:порт,сервер4&quot;<br /><br />
	Ако порт није прецизиран SMF ће користити порт 11211. SMF ће покушати да произведе груб/насумичан load balancing сервера.
	<br /><br />
	%s
	<hr />';

$txt['detected_no_caching'] = '<b style="color: red;">SMF није могао да пронађе компатибилан акцелератор на вашем серверу.</b>';
$txt['detected_APC'] = '<b style="color: green">SMF је пронашао да ваш сервер има инсталиран APC.';
$txt['detected_eAccelerator'] = '<b style="color: green">SMF је пронашао да ваш сервер има инсталиран eAccelerator.';
$txt['detected_MMCache'] = '<b style="color: green">SMF је пронашао да ваш сервер има инсталиран MMCache.';
$txt['detected_Zend'] = '<b style="color: green">SMF је пронашао да ваш сервер има инсталиран Zend.';
$txt['detected_Memcached'] = '<b style="color: green">SMF has detected that your server has Memcached installed.';

$txt['cache_enable'] = 'Ниво кеширања';
$txt['cache_off'] = 'Без кеширања';
$txt['cache_level1'] = 'Ниво 1 кеширања';
$txt['cache_level2'] = 'Ниво 2 кеширања (није препоручено)';
$txt['cache_level3'] = 'Ниво 3 кеширања (није препоручено)';
$txt['cache_memcached'] = 'Memcache подешавања';

?>
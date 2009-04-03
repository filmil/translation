<?php
// Version: 1.1.5; Index

global $forum_copyright, $forum_version, $webmaster_email;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'sr_RS.utf8';
$txt['lang_dictionary'] = 'sr';
$txt['lang_spelling'] = '';

// Character set and right to left?
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['days'] = array('Недеља', 'Понедељак', 'Уторак', 'Среда', 'Четвртак', 'Петак', 'Субота');
$txt['days_short'] = array('Нед', 'Пон', 'Уто', 'Сре', 'Чет', 'Пет', 'Суб');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Јануар', 'Фебруар', 'Март', 'Април', 'Мај', 'Јун', 'Јул', 'Август', 'Септембар', 'Октобар', 'Новембар', 'Децембар');
$txt['months_titles'] = array(1 => 'Јануар', 'Фебруар', 'Март', 'Април', 'Мај', 'Јун', 'Јул', 'Август', 'Септембар', 'Октобар', 'Новембар', 'Децембар');
$txt['months_short'] = array(1 => 'Јан', 'Феб', 'Мар', 'Апр', 'Мај', 'Јун', 'Јул', 'Авг', 'Сеп', 'Окт', 'Нов', 'Дец');

$txt['newmessages0'] = 'су нове';
$txt['newmessages1'] = 'је нових';
$txt['newmessages3'] = 'Нових';
$txt['newmessages4'] = ',';

$txt[2] = 'Администратор';

$txt[10] = 'Сачувај';

$txt[17] = 'Измени';
$txt[18] = $context['forum_name'] . ' - почетна';
$txt[19] = 'чланова';
$txt[20] = 'Име форума';
$txt[21] = 'порука';
$txt[22] = 'Последња порука';

$txt[24] = '(Нема теме)';
$txt[26] = 'Поруке';
$txt[27] = 'Погледај профил';
$txt[28] = 'Гост';
$txt[29] = 'Аутор';
$txt[30] = 'послато';
$txt[31] = 'Уклони';
$txt[33] = 'Почни нову тему';

$txt[34] = 'Пријављивање';
// Use numeric entities in the below string.
$txt[35] = 'Корисничко име';
$txt[36] = 'Лозинка';

$txt[40] = 'То корисничко име не постоји.';

$txt[62] = 'Уредник форума';
$txt[63] = 'Уклони тему';
$txt[64] = 'тема';
$txt[66] = 'Измени поруку';
$txt[68] = 'Име';
$txt[69] = 'E-mail';
$txt[70] = 'Наслов';
$txt[72] = 'Порука';

$txt[79] = 'Профил';

$txt[81] = 'Изаберите лозинку';
$txt[82] = 'Потврдите лозинку';
$txt[87] = 'Позиција';

$txt[92] = 'Погледај профил';
$txt[94] = 'Укупно';
$txt[95] = 'порука';
$txt[96] = 'Вебсајт';
$txt[97] = 'Регистрација';

$txt[101] = 'Индекс порука';
$txt[102] = 'Вести';
$txt[103] = 'Почетна';

$txt[104] = 'Закључај/Откључај тему';
$txt[105] = 'Пошаљи';
$txt[106] = 'Дошло је до грешке!';
$txt[107] = 'код';
$txt[108] = 'Одјави се';
$txt[109] = 'Започео';
$txt[110] = 'Одговора';
$txt[111] = 'Последња порука';
$txt[114] = 'Пријављивање администратора';
// Use numeric entities in the below string.
$txt[118] = 'Тема';
$txt[119] = 'Помоћ';
$txt[121] = 'Уклони поруку';
$txt[125] = 'Обавести';
$txt[126] = 'Да ли желите да примате e-mail са обавештењем ако неко одговори на ову тему?';
// Use numeric entities in the below string.
$txt[130] = "Хвала вам, \n" . $context['forum_name'] . ' тим.';
$txt[131] = 'Обавести ме при одговору';
$txt[132] = 'Премести тему';
$txt[133] = 'Премести у';
$txt[139] = 'Странице';
$txt[140] = 'Корисници активни у протеклих ' . $modSettings['lastActive'] . ' минута';
$txt[144] = 'Приватне поруке';
$txt[145] = 'Одговори са цитатом';
$txt[146] = 'Одговор';

$txt[151] = 'Нема порука...';
$txt[152] = 'имате';
$txt[153] = 'порука';
$txt[154] = 'Уклони ову поруку';

$txt[158] = 'Присутни корисници';
$txt[159] = 'Приватна порука';
$txt[160] = 'Пребаци се на';
$txt[161] = 'Иди';
$txt[162] = 'Да ли сте сигурни да желите да уклоните ову тему?';
$txt[163] = 'Да';
$txt[164] = 'Не';

$txt[166] = 'Резултати претраге';
$txt[167] = 'Крај резултата';
$txt[170] = 'Извините али нема резултата';
$txt[176] = '';

$txt[182] = 'Претрага';
$txt[190] = 'Све';

$txt[193] = 'Назад';
$txt[194] = 'подсећање';
$txt[195] = 'Тему започео';
$txt[196] = 'Наслов';
$txt[197] = 'Порука од';
$txt[200] = 'Претражива листа регистрованих чланова.';
$txt[201] = 'Поздравите';
$txt[208] = 'Администрациони центар';
$txt[211] = 'Последња измена';
$txt[212] = 'Да ли желите да онемогућите обавештавање о овој теми?';

$txt[214] = 'Скорашње поруке';

$txt[227] = 'Локација';
$txt[231] = 'Пол';
$txt[233] = 'Датум регистрације';

$txt[234] = 'Погледајте најсвежије поруке на форуму.';
$txt[235] = 'је најсвежије ажурирана тема';

$txt[238] = 'Мушкарац';
$txt[239] = 'Жена';

$txt[240] = 'Недозвољен карактер у корисничком имену.';

$txt['welcome_guest'] = 'Добродошли, <b>' . $txt[28] . '</b>. Молим вас <a href="' . $scripturl . '?action=login">пријавите се</a> или се <a href="' . $scripturl . '?action=register">региструјте</a>.';
$txt['welcome_guest_activate'] = '<br />Да нисте изгубили свој <a href="' . $scripturl . '?action=activate">активациони e-mail?</a>';
$txt['hello_member'] = 'Ћао,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Добродошли,';
$txt[247] = 'Ћао,';
$txt[248] = 'Добродошли,';
$txt[249] = 'Молим вас';
$txt[250] = 'Назад';
$txt[251] = 'Изаберите дестинацију';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt[279] = 'Послао';

$txt[287] = 'Смешко';
$txt[288] = 'Љутко';
$txt[289] = 'Cheesy';
$txt[290] = 'Смејавко';
$txt[291] = 'Тужан';
$txt[292] = 'Намигивање';
$txt[293] = 'Зеленко';
$txt[294] = 'Шокиран';
$txt[295] = 'Опуштен';
$txt[296] = 'Молим?';
$txt[450] = 'Превртање очима';
$txt[451] = 'Језик';
$txt[526] = 'Запрепашћен';
$txt[527] = 'Усне су ми запечаћене';
$txt[528] = 'Неодлучан';
$txt[529] = 'Пољубац';
$txt[530] = 'Плачко';

$txt[298] = 'Уредник';
$txt[299] = 'Уредници';

$txt[300] = 'Означи теме у овом форуму као прочитане';
$txt[301] = 'Прегледа';
$txt[302] = 'Нове';

$txt[303] = 'Прикажи све кориснике';
$txt[305] = 'Прикажи';
$txt[307] = 'E-mail';

$txt[308] = 'Приказано';
$txt[309] = 'укупно чланова:';
$txt[310] = ' ';
$txt[311] = 'до';
$txt[315] = 'Заборавили сте лозинку?';

$txt[317] = 'Датум';
// Use numeric entities in the below string.
$txt[318] = 'Од';
$txt[319] = 'Наслов';
$txt[322] = 'Провери за нове поруке';
$txt[324] = 'За';

$txt[330] = 'тема';
$txt[331] = 'Чланови';
$txt[332] = 'Списак чланова';
$txt[333] = 'Нове поруке';
$txt[334] = 'Нема нових порука';

$txt['sendtopic_send'] = 'Пошаљи';

$txt[371] = 'Одступање времена';
$txt[377] = 'или';

$txt[398] = 'Извините али нема тражених резултата';

$txt[418] = 'Обавештења';

$txt[430] = 'Извињавамо се %s, забрањено вам је да користите овај форум!';

$txt[452] = 'Означи СВЕ поруке као прочитане';

$txt[454] = 'Популарна тема (Више од ' . $modSettings['hotTopicPosts'] . ' порука)';
$txt[455] = 'Веома популарна тема (Више од ' . $modSettings['hotTopicVeryPosts'] . ' порука)';
$txt[456] = 'Закључана тема';
$txt[457] = 'Нормална тема';
$txt['participation_caption'] = 'Тема у којој сте одговарали';

$txt[462] = 'Иди';

$txt[465] = 'Штампај';
$txt[467] = 'Профил';
$txt[468] = 'Преглед теме';
$txt[470] = 'Није доступно';
$txt[471] = 'порука';
$txt[473] = 'Ово име је већ заузето од стране другог члана.';

$txt[488] = 'Укупно чланова';
$txt[489] = 'Укупно порука';
$txt[490] = 'Укупно тема';

$txt[497] = 'Пријави ме за следећих<br/>минута';

$txt[507] = 'Прегледај';
$txt[508] = 'Пријави ме за стално';

$txt[511] = 'Сачувана';
// Use numeric entities in the below string.
$txt[512] = 'IP';

$txt[513] = 'ICQ';
$txt[515] = 'WWW';

$txt[525] = '';

$txt[578] = 'сати';
$txt[579] = 'дана';

$txt[581] = ', нашег најновијег члана.';

$txt[582] = 'Тражи';

$txt[603] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Ћао!+Да+ли+си+ту?';
$txt[604] = 'YIM';

$txt[616] = 'Запамтите, овај форум је у моду одржавања.';

$txt[641] = 'Прочитано';
$txt[642] = 'пута';

$txt[645] = 'Статистике форума';
$txt[656] = 'Последњи члан';
$txt[658] = 'Укупно категорија';
$txt[659] = 'Последња порука';

$txt[660] = 'Добили сте';
$txt[661] = 'Кликните';
$txt[662] = 'овде';
$txt[663] = 'да бисте их прегледали.';

$txt[665] = 'Укупно форума';

$txt[668] = 'Одштампај страницу';

$txt[679] = 'Морате да унесете исправну e-mail адресу.';

$txt[683] = 'Ја сам geek!!';
$txt[685] = $context['forum_name'] . ' - инфо центар';

$txt[707] = 'Пошаљи ову тему';

$txt['sendtopic_title'] = 'Пошаљите тему &quot;%s&quot; пријатељу.';
// Use numeric entities in the below three strings.
$txt['sendtopic_dear'] = 'Драги %s,';
$txt['sendtopic_this_topic'] = 'Желим да погледаш "%s" на ' . $context['forum_name'] . '.  Да би га погледао, кликни на овај линк';
$txt['sendtopic_thanks'] = 'Хвала';
$txt['sendtopic_sender_name'] = 'Ваше име';
$txt['sendtopic_sender_email'] = 'Ваша e-mail адреса';
$txt['sendtopic_receiver_name'] = 'Примаочево име';
$txt['sendtopic_receiver_email'] = 'Примаочева e-mail адреса';
$txt['sendtopic_comment'] = 'Додај коментар';
// Use numeric entities in the below string.
$txt['sendtopic2'] = 'Коментар је такође додат овој теми';

$txt[721] = 'Сакриј e-mail адресу од јавности?';

$txt[737] = 'Означи све';

// Use numeric entities in the below string.
$txt[1001] = 'Грешка у бази података';
$txt[1002] = 'Молим вас покушајте поново. Ако поново видите ову грешку, пријавите грешку администатору.';
$txt[1003] = 'Датотека';
$txt[1004] = 'Линија';
// Use numeric entities in the below string.
$txt[1005] = 'SMF је пронашао и аутоматски покушао да поправи грешку у вашој бази података. Ако наставите да имате проблеме и примате ове email-ове, контактирајте ваш хостинг.';
$txt['database_error_versions'] = '<b>Напомена:</b> Изгледа да ваша база података захтева ажурирање. Датотеке вашег форума су тренутно на верзији ' . $forum_version . ' док је ваша база података верзије SMF ' . $modSettings['smfVersion'] . '. Препоручујемо да извршите последњу верзију датотеке upgrade.php.';
$txt['template_parse_error'] = 'Грешка у парсирању предлошка!';
$txt['template_parse_error_message'] = 'Изгледа да је нешто пошло наопако са системом предложака на форуму. Овај проблем би требао да буде привремен тако да вас молимо да дођете мало касније и покушате поново. Ако наставите да примате ову поруку, контактирајте администратора.<br /><br />Можете да пробате и да <a href="javascript:location.reload();">освежите ову страницу</a>.';
$txt['template_parse_error_details'] = 'Дошло је до проблема при учитавању <tt><b>%1$s</b></tt> предлошка или језичке датотеке.  Проверите синтаксу и покушајте поново - запамтите, знаци навода (<tt>\'</tt>) често морају да буду избегнути користећи обрнуту косу црту (<tt>\\</tt>).  Да бисте видели детаљније поруке о грешци од стране PHP-а, покушајте са <a href="' . $boardurl . '%1$s">директним приступањем датотеци</a>.<br /><br />Можда ћете желети да <a href="javascript:location.reload();">освежите ову страницу</a> или <a href="' . $scripturl . '?theme=1">користите подразумевану тему</a>.';

$txt['smf10'] = '<b>данас</b> у ';
$txt['smf10b'] = '<b>јуче</b> у ';
$txt['smf20'] = 'Ново гласање';
$txt['smf21'] = 'Питање';
$txt['smf23'] = 'Гласај';
$txt['smf24'] = 'Укупно гласова';
$txt['smf25'] = 'пречице: притисните alt+s да бисте послали или alt+p за преглед';
$txt['smf29'] = 'Погледајте резултате';
$txt['smf30'] = 'Закључај гласање';
$txt['smf30b'] = 'Откључај гласање';
$txt['smf39'] = 'Измени гласање';
$txt['smf43'] = 'Гласање';
$txt['smf47'] = '1 дан';
$txt['smf48'] = '1 недеља';
$txt['smf49'] = '1 месец';
$txt['smf50'] = 'Заувек';
$txt['smf52'] = 'Пријавите се корисничким именом, лозинком и дужином сесије';
$txt['smf53'] = '1 час';
$txt['smf56'] = 'ПРЕМЕШТЕНА';
$txt['smf57'] = 'Унесите кратак опис као разлог<br />због чега је тема премештена.';
$txt['smf60'] = 'Немате довољно порука да бисте могли да мењате углед. Потребно вам је најмање ';
$txt['smf62'] = 'Не можете да поново промените углед у следећих ';
$txt['smf82'] = 'Форум';
$txt['smf88'] = 'у';
$txt['smf96'] = 'Лепљива тема';

$txt['smf138'] = 'Обриши';

$txt['smf199'] = 'Ваше приватне поруке';

$txt['smf211'] = 'KB';

$txt['smf223'] = '[више статистике]';

// Use numeric entities in the below three strings.
$txt['smf238'] = 'Код';
$txt['smf239'] = 'Цитат';
$txt['smf240'] = 'Цитат';

$txt['smf251'] = 'Подели тему';
$txt['smf252'] = 'Споји тему';
$txt['smf254'] = 'Наслов за нову тему';
$txt['smf255'] = 'Подели само ову поруку.';
$txt['smf256'] = 'Подели тему после и укључујући ову поруку.';
$txt['smf257'] = 'Изаберите поруке које желите да поделите.';
$txt['smf258'] = 'Нова тема';
$txt['smf259'] = 'Тема је успешно подељена на две теме.';
$txt['smf260'] = 'Почетна тема';
$txt['smf261'] = 'Молим вас изаберите које поруке желите да поделите.';
$txt['smf264'] = 'Теме су успешно спојене.';
$txt['smf265'] = 'Новоспојена тема';
$txt['smf266'] = 'Тема за спајање';
$txt['smf267'] = 'Циљни форум';
$txt['smf269'] = 'Циљна тема';
$txt['smf274'] = 'Да ли сте сигурни да желите да спојите';
$txt['smf275'] = 'са';
$txt['smf276'] = 'Ова функција ће спојити поруке из две теме у једну. Поруке ће бити поређане по времену слања. Стога, најраније послата порука биће приказана као прва у спојеној теми.';

$txt['smf277'] = 'Постави тему као лепљиву';
$txt['smf278'] = 'Одлепи тему';
$txt['smf279'] = 'Закључај тему';
$txt['smf280'] = 'Откључај тему';

$txt['smf298'] = 'Напредна претрага';

$txt['smf299'] = 'ВЕЛИКИ БЕЗБЕДНОСНИ РИЗИК:';
$txt['smf300'] = 'Нисте уклонили ';

$txt['smf301'] = 'Страница је направљена за ';
$txt['smf302'] = ' секунди са ';
$txt['smf302b'] = ' упита.';

$txt['smf315'] = 'Користите ову функцију да бисте обавестили модераторе и администраторе о увредљивој или погрешно послатој поруци.<br /><i>Ваша e-mail адреса биће откривена уредницима ако употребите ову функцију.</i>';

$txt['online2'] = 'На мрежи';
$txt['online3'] = 'Ван мреже';
$txt['online4'] = 'Приватна порука (На мрежи)';
$txt['online5'] = 'Приватна порука (Ван мреже)';
$txt['online8'] = 'Статус';

$txt['topbottom4'] = 'Иди горе';
$txt['topbottom5'] = 'Иди доле';

$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank">Powered by ' . $forum_version . '</a> | 
<a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank">SMF &copy; 2006-2008, Simple Machines LLC</a> | 
Српски превод: Јован Турањанин';

$txt['calendar3'] = 'Рођендани:';
$txt['calendar4'] = 'Догађаји:';
$txt['calendar3b'] = 'Предстојећи рођендани:';
$txt['calendar4b'] = 'Предстојећи догађаји:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar5'] = '';
$txt['calendar9'] = 'Месец:';
$txt['calendar10'] = 'Година:';
$txt['calendar11'] = 'Дан:';
$txt['calendar12'] = 'Наслов догађаја:';
$txt['calendar13'] = 'Пошаљи у:';
$txt['calendar20'] = 'Измени догађаје';
$txt['calendar21'] = 'Да обришем овај догађај?';
$txt['calendar22'] = 'Обриши догађај';
$txt['calendar23'] = 'Додај догађај';
$txt['calendar24'] = 'Календар';
$txt['calendar37'] = 'Додај везу ка календару';
$txt['calendar43'] = 'Додај везу ка дешавању';
$txt['calendar47'] = 'Предстојећи календар';
$txt['calendar47b'] = 'Данашњи календар';
$txt['calendar51'] = 'Недеља';
$txt['calendar54'] = 'Број дана:';
$txt['calendar_how_edit'] = 'како да изменим ове догађаје?';
$txt['calendar_link_event'] = 'Повежи догађај са поруком:';
$txt['calendar_confirm_delete'] = 'Да ли сте сигурни да желите да обришете овај догађај?';
$txt['calendar_linked_events'] = 'Повезани догађаји';

$txt['moveTopic1'] = 'Пошаљи преусмеравајућу тему';
$txt['moveTopic2'] = 'Промени наслов теме';
$txt['moveTopic3'] = 'Нов наслов теме';
$txt['moveTopic4'] = 'Промени наслов сваке поруке';

$txt['theme_template_error'] = 'Не могу да учитам предложак \'%s\'.';
$txt['theme_language_error'] = 'Не могу да учитам језичку датотеку \'%s\'.';

$txt['parent_boards'] = 'Подфоруми';

$txt['smtp_no_connect'] = 'Не могу да се повежем са SMTP сервером';
$txt['smtp_port_ssl'] = 'Подешавања SMTP порта су погрешна; порт за SSL сервере би требало да буде 465.';
$txt['smtp_bad_response'] = 'Couldn\'t get mail server response codes';
$txt['smtp_error'] = 'Запао сам у проблеме приликом слања поште. Грешка: ';
$txt['mail_send_unable'] = 'Не могу да пошаљем пошту на e-mail адресу \'%s\'';

$txt['mlist_search'] = 'Тражи кориснике';
$txt['mlist_search2'] = 'Тражи поново';
$txt['mlist_search_email'] = 'Претражуј по e-mail адреси';
$txt['mlist_search_messenger'] = 'Претражуј по messenger надимку';
$txt['mlist_search_group'] = 'Претражуј по позицији';
$txt['mlist_search_name'] = 'Претражуј по имену';
$txt['mlist_search_website'] = 'Претражуј по вебсајту';
$txt['mlist_search_results'] = 'Резултати претраге за';

$txt['attach_downloaded'] = 'преузето';
$txt['attach_viewed'] = 'прегледано';
$txt['attach_times'] = 'пута';

$txt['MSN'] = 'MSN';

$txt['settings'] = 'Подешавања';
$txt['never'] = 'Никад';
$txt['more'] = 'још';

$txt['hostname'] = 'Име домаћина';
$txt['you_are_post_banned'] = '%s, забрањено вам је да шаљете поруке или приватне поруке на овом форуму.';
$txt['ban_reason'] = 'Разлог';

$txt['tables_optimized'] = 'Табеле базе података су оптимизоване';

$txt['add_poll'] = 'Додај гласање';
$txt['poll_options6'] = 'Можете да изаберете највише %s опција.';
$txt['poll_remove'] = 'Уклони гласање';
$txt['poll_remove_warn'] = 'Да ли сте сигурни да желите да уклоните гласање из ове теме?';
$txt['poll_results_expire'] = 'Резултати ће бити приказани када се глање заврши';
$txt['poll_expires_on'] = 'Гласање се завршава';
$txt['poll_expired_on'] = 'Гласање завршено';
$txt['poll_change_vote'] = 'Уклони глас';
$txt['poll_return_vote'] = 'Опције гласања';

$txt['quick_mod_remove'] = 'Уклони изабрано';
$txt['quick_mod_lock'] = 'Закључај изабрано';
$txt['quick_mod_sticky'] = 'Изабрано учини лепљивин';
$txt['quick_mod_move'] = 'Премести изабрано у';
$txt['quick_mod_merge'] = 'Споји изабрано';
$txt['quick_mod_markread'] = 'Означи изабрано као прочитано';
$txt['quick_mod_go'] = 'Иди!';
$txt['quickmod_confirm'] = 'Да ли сте сигурни да желите да урадите ово?';

$txt['spell_check'] = 'Провера правописа';

$txt['quick_reply_1'] = 'Брз одговор';
$txt['quick_reply_2'] = 'Са <i>Брзим одговором</i> можете да користите ББкод и смајлије као што бисте то чинили и у нормалној поруци али много удобније.';
$txt['quick_reply_warning'] = 'Упозорење: ова тема је тренутно закључана!<br />Само администратори и уредници могу да одговарају.';

$txt['notification_enable_board'] = 'Да ли сте сигурни да желите да омогућите обавештавање о новим темама у овом форуму?';
$txt['notification_disable_board'] = 'Да ли сте сигурни да желите да онемогућите обавештавање о новим темама у овом форуму?';
$txt['notification_enable_topic'] = 'Да ли сте сигурни да желите да омогућите обавештавање о новим одговорима у овом форуму?';
$txt['notification_disable_topic'] = 'Да ли сте сигурни да желите да онемогућите обавештавање о новим одговорима у овом форуму?';

$txt['rtm1'] = 'Пријави уреднику';

$txt['unread_topics_visit'] = 'Скорашње непрочитане теме';
$txt['unread_topics_visit_none'] = 'Нема непрочитаних тема од ваше последње посете.  <a href="' . $scripturl . '?action=unread;all">Кликните овде да пробате све непрочитане теме</a>.';
$txt['unread_topics_all'] = 'Све непрочитане теме';
$txt['unread_replies'] = 'Ажуриране теме';

$txt['who_title'] = 'Ко је присутан';
$txt['who_and'] = ' и ';
$txt['who_viewing_topic'] = ' прегледају ову тему.';
$txt['who_viewing_board'] = ' прегледају овај форум.';
$txt['who_member'] = 'Члан';

$txt['powered_by_php'] = 'Покреће PHP';
$txt['powered_by_mysql'] = 'Покреће MySQL';
$txt['valid_html'] = 'Исправан HTML 4.01!';
$txt['valid_xhtml'] = 'Исправан XHTML 1.0!';
$txt['valid_css'] = 'Исправан CSS!';

$txt['guest'] = 'гост';
$txt['guests'] = 'гостију';
$txt['user'] = 'корисник';
$txt['users'] = 'корисника';
$txt['hidden'] = 'сакривених';
$txt['buddy'] = 'Пријатељ';
$txt['buddies'] = 'Пријатељи';
$txt['most_online_ever'] = 'Највише присутних корисника';
$txt['most_online_today'] = 'Највише присутних корисника данас';

$txt['merge_select_target_board'] = 'Изаберите одредишни форум за спојене теме';
$txt['merge_select_poll'] = 'Изаберите које гласање би спојене теме требало да имају';
$txt['merge_topic_list'] = 'Изаберите теме за спајање';
$txt['merge_select_subject'] = 'Изаберите наслов спојених тема';
$txt['merge_custom_subject'] = 'Кориснички наслов';
$txt['merge_enforce_subject'] = 'Промени наслов свих порука';
$txt['merge_include_notifications'] = 'Да укључим обавештења?';
$txt['merge_check'] = 'Спојити?';
$txt['merge_no_poll'] = 'Без гласања';

$txt['response_prefix'] = 'Одг: ';
$txt['current_icon'] = 'Тренутна икона';

$txt['smileys_current'] = 'Тренутна поставка смајлија';
$txt['smileys_none'] = 'Без смајлија';
$txt['smileys_forum_board_default'] = 'Подразумевана на форуму';

$txt['search_results'] = 'Резултати претраге';
$txt['search_no_results'] = 'Нема нађених резултата';

$txt['totalTimeLogged1'] = 'Укупно време на форуму: ';
$txt['totalTimeLogged2'] = ' дана, ';
$txt['totalTimeLogged3'] = ' сати и ';
$txt['totalTimeLogged4'] = ' минута.';
$txt['totalTimeLogged5'] = 'д ';
$txt['totalTimeLogged6'] = 'ч ';
$txt['totalTimeLogged7'] = 'м';

$txt['approve_thereis'] = 'Има';
$txt['approve_thereare'] = 'Има';
$txt['approve_member'] = 'један члан';
$txt['approve_members'] = 'члана';
$txt['approve_members_waiting'] = 'који чекају на одобрење.';

$txt['notifyboard_turnon'] = 'Да ли желите да примате е-mail са обавештењем када неко постави нову тему у овом форуму?';
$txt['notifyboard_turnoff'] = 'Да ли сте сигурни да не желите да примате обавештење о новим темама у овом форуму?';

$txt['activate_code'] = 'Ваш активациони код је';

$txt['find_members'] = 'Пронађи чланове';
$txt['find_username'] = 'Име, корисничко име или e-mail адреса';
$txt['find_buddies'] = 'Приказати само пријатеље?';
$txt['find_wildcards'] = 'Дозвољени џокери: *, ?';
$txt['find_no_results'] = 'Нема пронађених резултата';
$txt['find_results'] = 'Резултати';
$txt['find_close'] = 'Затвори';

$txt['unread_since_visit'] = 'Прикажи непрочитане поруке од моје последње посете';
$txt['show_unread_replies'] = 'Прикажи нове одговоре на моје поруке';

$txt['change_color'] = 'Промени боју';

$txt['quickmod_delete_selected'] = 'Обриши изабрано';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Примили сте једну или више нових приватних порука.\\nЖелите ли да их одмах погледате (у новом прозору)?';

$txt['previous_next_back'] = '&laquo; претходна тема';
$txt['previous_next_forward'] = 'следећа тема &raquo;';

$txt['movetopic_auto_board'] = '[ФОРУМ]';
$txt['movetopic_auto_topic'] = '[ЛИНК ТЕМЕ]';
$txt['movetopic_default'] = 'Тема је премештена у ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Скупи или рашири заглавље.';

$txt['mark_unread'] = 'Означи као непрочитано';

$txt['ssi_not_direct'] = 'Молим вас не приступајте SSI.php директно преко URL-а; вероватно желите да користите путању (%s) или додате ?ssi_function=nesto.';
$txt['ssi_session_broken'] = 'SSI.php није могао да учита сесију! Ово може проузроковати проблеме приликом одјављивања или коришћења других функција - осигурајте да SSI.php буде увршћен пре *било чега* у вашој скрипти!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Прегледај поруку';
$txt['preview_fetch'] = 'Добављам преглед...';
$txt['preview_new'] = 'Нова порука';
$txt['error_while_submitting'] = 'Дошло је до следећих грешака приликом слања ове поруке:';

$txt['split_selected_posts'] = 'Изабране поруке';
$txt['split_selected_posts_desc'] = 'Поруке назначене испод ће образовати нову тему након деобе.';
$txt['split_reset_selection'] = 'ресетуј одабир';

$txt['modify_cancel'] = 'Откажи';
$txt['mark_read_short'] = 'Означи као прочитано';

$txt['pm_short'] = 'Моје поруке';
$txt['hello_member_ndt'] = 'Здраво';

$txt['ajax_in_progress'] = 'Учитавам...';

?>
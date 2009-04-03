<?php
// Version: 1.1; PersonalMessage

$txt[143] = 'Индекс приватних порука';
$txt[148] = 'Пошаљи поруку';
$txt[150] = 'За';
$txt[1502] = 'Bcc';
$txt[316] = 'Примљено';
$txt[320] = 'Послато';
$txt[321] = 'Нова порука';
$txt[411] = 'Обриши поруке';
// Don't translate "PMBOX" in this string.
$txt[412] = 'Обриши све поруке у мом PMBOX сандучету';
$txt[413] = 'Да ли сте сигурни да желите да обришете све поруке?';
$txt[535] = 'Прималац';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt[561] = 'Нова приватна порука: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt[562] = 'SENDER вам је управо послао нову приватну поруку на ' . $context['forum_name'] . '.' . "\n\n" . 'ВАЖНО: Запамтите, ово је само обавештење. Не одговарајте на овај e-mail.' . "\n\n" . 'Порука коју вам је послао гласи овако:' . "\n\n" . 'MESSAGE';
$txt[748] = '(више прималаца: \'име1, име2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Одговорите на ову приватну поруку овде:';

$txt['smf249'] = 'Да ли сте сигурни да желите да обришете све изабране приватне поруке?';

$txt['sent_to'] = 'За';
$txt['reply_to_all'] = 'Одговори свима';

$txt['pm_capacity'] = 'Капацитет';
$txt['pm_currently_using'] = '%s порука, укупно %s%%.';

$txt['pm_error_user_not_found'] = 'Не могу да пронађем члана \'%s\'.';
$txt['pm_error_ignored_by_user'] = 'Корисник \'%s\' је блокирао ваше приватне поруке.';
$txt['pm_error_data_limit_reached'] = 'ПП за \'%s\' није послата јер је њихово пријемно сандуче пуно.';
$txt['pm_successfully_sent'] = 'ПП је успешно послата \'%s\'.';
$txt['pm_too_many_recipients'] = 'Не можете да пошаљете приватну поруку ка више од %d прималаца одједном.';
$txt['pm_too_many_per_hour'] = 'Прекорачили сте ограничење од %d приватних порука по сату.';
$txt['pm_send_report'] = 'Пошаљи извештај';
$txt['pm_save_outbox'] = 'Сачувај копију у сандучету Послато';
$txt['pm_undisclosed_recipients'] = 'Неприказани примаоци';

$txt['pm_read'] = 'Прочитај';
$txt['pm_replied'] = 'Одговорено на';

// Message Pruning.
$txt['pm_prune'] = 'Обриши све поруке';
$txt['pm_prune_desc1'] = 'Обриши све приватне поруке старије од';
$txt['pm_prune_desc2'] = 'дана.';
$txt['pm_prune_warning'] = 'Да ли сте сигурни да желите да обришете своје приватне поруке?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Даље акције';
$txt['pm_actions_delete_selected'] = 'Обриши изабрано';
$txt['pm_actions_filter_by_label'] = 'Филтрирај по одељку';
$txt['pm_actions_go'] = 'Иди';

// Manage Labels Screen.
$txt['pm_apply'] = 'Примени';
$txt['pm_manage_labels'] = 'Управљај одељцима';
$txt['pm_labels_delete'] = 'Да ли сте сигурни да желите да обришете изабране одељке?';
$txt['pm_labels_desc'] = 'Овде можете да додајете, мењате и бришете одељке коришћене у приватним порукама.';
$txt['pm_label_add_new'] = 'Додај нови одељак';
$txt['pm_label_name'] = 'Име одељка';
$txt['pm_labels_no_exist'] = 'Тренутно нисте одредили ниједан одељак!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Одељак';
$txt['pm_msg_label_title'] = 'Додели одељак поруци';
$txt['pm_msg_label_apply'] = 'Додај одељак';
$txt['pm_msg_label_remove'] = 'Уклони одељак';
$txt['pm_msg_label_inbox'] = 'Примљене поруке';
$txt['pm_sel_label_title'] = 'Изабрани одељак';
$txt['labels_too_many'] = '%s порука већ има највећи дозвољени број одељака!';

// Sidebar Headings.
$txt['pm_labels'] = 'Одељци';
$txt['pm_messages'] = 'Поруке';
$txt['pm_preferences'] = 'Подешавања';

$txt['pm_is_replied_to'] = 'Проследили сте или сте одговорили на ову поруку.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Пријави администратору';
$txt['pm_report_title'] = 'Пријави приватну поруку';
$txt['pm_report_desc'] = 'Са ове странице можете да пријавите администраторском тиму форума приватну поруку коју сте примили. Поднесите и опис разлога из којег пријављујете поруку јер ће бити послат заједно са садржајем оригиналне поруке.';
$txt['pm_report_admins'] = 'Администратор којем желите да пошаљете поруку';
$txt['pm_report_all_admins'] = 'Пошаљи свим администраторима';
$txt['pm_report_reason'] = 'Разлог због којег пријављујете ову поруку';
$txt['pm_report_message'] = 'Пријави поруку';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[ПРИЈАВА] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} је пријавио приватну поруку, послату од {SENDER}, из следећих разлога:';
$txt['pm_report_pm_other_recipients'] = 'Примаоци ове приватне поруке су и:';
$txt['pm_report_pm_hidden'] = '%d скривених прималаца';
$txt['pm_report_pm_unedited_below'] = 'Испод се налази оригинални садржај приватне поруке која је пријављена:';
$txt['pm_report_pm_sent'] = 'Послато:';

$txt['pm_report_done'] = 'Захваљујемо што сте поднели пријаву. Ускоро би требало да чујете одговор адмиистраторског тима';
$txt['pm_report_return'] = 'Врати се на примљене поруке';

$txt['pm_search_title'] = 'Претражи приватне поруке';
$txt['pm_search_bar_title'] = 'Претраживање порука';
$txt['pm_search_text'] = 'Тражи за';
$txt['pm_search_go'] = 'Тражи';
$txt['pm_search_advanced'] = 'Напредна претрага';
$txt['pm_search_user'] = 'по кориснику';
$txt['pm_search_match_all'] = 'Поклопи све речи';
$txt['pm_search_match_any'] = 'Поклопи било коју реч';
$txt['pm_search_options'] = 'Опције';
$txt['pm_search_post_age'] = 'Старост';
$txt['pm_search_show_complete'] = 'Прикажи целе поруке у резултатима.';
$txt['pm_search_subject_only'] = 'Тражи само по теми и аутору.';
$txt['pm_search_between'] = 'Између';
$txt['pm_search_between_and'] = 'и';
$txt['pm_search_between_days'] = 'дана';
$txt['pm_search_order'] = 'Сортирај резултате по';
$txt['pm_search_choose_label'] = 'Изаберите одељке по којима желите да тражите или изаберите све';

$txt['pm_search_results'] = 'Разултати претраге';
$txt['pm_search_none_found'] = 'Нема нађених порука';

$txt['pm_search_orderby_relevant_first'] = 'Прво најрелевантнији резултати';
$txt['pm_search_orderby_recent_first'] = 'Прво најсвежији резултати';
$txt['pm_search_orderby_old_first'] = 'Прво најстарији резултати';

$txt['pm_visual_verification_label'] = 'Потврда';
$txt['pm_visual_verification_desc'] = 'Унесите код са слике да бисте послали приватну поруку.';
$txt['pm_visual_verification_listen'] = 'Слушајте слова';

?>
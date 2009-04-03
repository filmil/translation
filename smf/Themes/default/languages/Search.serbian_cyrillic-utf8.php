<?php
// Version: 1.1; Search

$txt[183] = 'Постави параметре претраге';
$txt[189] = 'Изаберите форум у оквиру којег желите да тражите, или изаберите све';
$txt[343] = 'Поклопи све речи';
$txt[344] = 'Поклопи било које речи';
$txt[583] = 'по кориснику';

$txt['search_post_age'] = 'Поруке су';
$txt['search_between'] = 'између';
$txt['search_and'] = 'и';
$txt['search_options'] = 'Опције';
$txt['search_show_complete_messages'] = 'Прикажи резултате као поруке';
$txt['search_subject_only'] = 'Само наслов теме';
$txt['search_relevance'] = 'Релевантност';
$txt['search_date_posted'] = 'Датум слања';
$txt['search_order'] = 'Поређај по';
$txt['search_orderby_relevant_first'] = 'најрелевантнијим резултатима';
$txt['search_orderby_large_first'] = 'највећим темама';
$txt['search_orderby_small_first'] = 'најмањим темама';
$txt['search_orderby_recent_first'] = 'најсвежијим темама';
$txt['search_orderby_old_first'] = 'најстаријим темама';

$txt['search_specific_topic'] = 'Претражујем само поруке у теми';

$txt['mods_cat_search'] = 'Претрага';
$txt['groups_search_posts'] = 'Корисничке групе са приступом функцији претраге';
$txt['simpleSearch'] = 'Омогући једноставну претрагу';
$txt['search_results_per_page'] = 'Број резултата претраге по страници';
$txt['search_weight_frequency'] = 'Релативна тежина броја поклапајућих порука унутар теме';
$txt['search_weight_age'] = 'Релативна тежина старости последње поклапајуће поруке';
$txt['search_weight_length'] = 'Релативна тежина дужине теме';
$txt['search_weight_subject'] = 'Релативна тежина поклапајућег наслова';
$txt['search_weight_first_message'] = 'Релативна тежина прве поклопљене поруке';
$txt['search_weight_sticky'] = 'Релативна тежина лепљиве теме';

$txt['search_settings_desc'] = 'Овде можете да промените основна подешавања функције претраге.';
$txt['search_settings_title'] = 'Функција претраге - подешавања';
$txt['search_settings_save'] = 'Сачувај';

$txt['search_weights'] = 'Тежине';
$txt['search_weights_desc'] = 'Овде можете изменити поједине компоненте за одређивање значаја порука. ';
$txt['search_weights_title'] = 'Претрага - тежине';
$txt['search_weights_total'] = 'Укупно';
$txt['search_weights_save'] = 'Сачувај';

$txt['search_method'] = 'Начин претраге';
$txt['search_method_desc'] = 'Овде можете да промените начин на који се одвија претрага.';
$txt['search_method_title'] = 'Претрага - начин';
$txt['search_method_save'] = 'Сачувај';
$txt['search_method_messages_table_space'] = 'Простор заузет порукама у бази';
$txt['search_method_messages_index_space'] = 'Простор заузет индексом порука у бази';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Fulltext index';
$txt['search_method_no_index_exists'] = 'тренутно не постоји';
$txt['search_method_fulltext_create'] = 'направи fulltext index';
$txt['search_method_fulltext_cannot_create'] = 'не може да се направи јер је највећа дужина поруке изнад 65,535 или тип табеле није MyISAM';
$txt['search_method_index_already_exsits'] = 'већ постоји';
$txt['search_method_fulltext_remove'] = 'уклони fulltext index';
$txt['search_method_index_partial'] = 'је делимично направљен';
$txt['search_index_custom_resume'] = 'настави';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Да бисте могли да користите fulltext претрагу, мораћете прво да направите fulltext index!';

$txt['search_index'] = 'Претраживачки индекс';
$txt['search_index_none'] = 'Без индекса';
$txt['search_index_custom'] = 'Прилагођени индекс';
$txt['search_index_label'] = 'Индекс';
$txt['search_index_size'] = 'Величина';
$txt['search_index_create_custom'] = 'направи прилагођени индекс';
$txt['search_index_custom_remove'] = 'уклони прилагођени индекс';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Да бисте користили претрагу помоћу прилагођеног индекса, мораћете прво да направите прилагођени индекс!';

$txt['search_force_index'] = 'Форсирај употребу претраживачког индекса';
$txt['search_match_words'] = 'Поклопи само целе речи';
$txt['search_max_results'] = 'Највећи број резултата за приказ';
$txt['search_max_results_disable'] = '(0: неограничено)';

$txt['search_create_index'] = 'Направи индекс';
$txt['search_create_index_why'] = 'Зашто направити индекс?';
$txt['search_create_index_start'] = 'Направи';
$txt['search_predefined'] = 'Предефинисан профил';
$txt['search_predefined_small'] = 'Индекс мале величине';
$txt['search_predefined_moderate'] = 'Индекс средње величине';
$txt['search_predefined_large'] = 'Индекс велике величине';
$txt['search_create_index_continue'] = 'Настави';
$txt['search_create_index_not_ready'] = 'SMF тренутно прави индекс за претрагу ваших порука. Да би избегли преоптерећење вашег сервера, процес је тренутно паузиран. Требало би да се аутоматски настави за пар секунди. Ако се не настави, кликните на \'Настави\' испод ове поруке.';
$txt['search_create_index_progress'] = 'Напредак';
$txt['search_create_index_done'] = 'Прилагођен индекс за претрагу је направљен!';
$txt['search_create_index_done_link'] = 'Настави';
$txt['search_double_index'] = 'Тренутно сте направили два индекса у табели порука. Због најбољих перформанси, препоручујемо да уклоните један од та два индекса.';

$txt['search_error_indexed_chars'] = 'Неисправан број индексованих знакова. Потребна су барем 3 знака за користан индекс.';
$txt['search_error_max_percentage'] = 'Неисправан проценат речи за прескакање. Користите вредност од најмање 5%.';

$txt['search_adjust_query'] = 'Подеси параметре претраге';
$txt['search_adjust_submit'] = 'Понови претрагу';
$txt['search_did_you_mean'] = 'Да нисте можда мислили на';

$txt['search_example'] = '<i>на пр.</i> Стеван Сремац "Зона Замфирова" -филм';

?>
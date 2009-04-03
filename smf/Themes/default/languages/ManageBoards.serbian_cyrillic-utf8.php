<?php
// Version: 1.1; ManageBoards

$txt[41] = 'Управљање форумима и категоријама';
$txt[43] = 'Ред';
$txt[44] = 'Пуно име';
$txt[672] = 'Ово је име које ће бити приказано.';
$txt[677] = 'Овде можете да уређујете категорије и форуме. Поставите више уредника користећи <i>&quot;корисничко име&quot;, &quot;корисничко име&quot;</i>. (ово морају да буду корисничка а не приказана имена!)<br />Да бисте направили нов форум кликните на Додај форум. Да бисте направили подфорум тренутног форума, изаберите "Подфорум..." из падајуће листе "Ред" при прављењу форума.';
$txt['parent_members_only'] = 'Негруписани чланови';
$txt['parent_guests_only'] = 'Гости';
$txt['catConfirm'] = 'Да ли сте сигурни да желите да обришете ову категорију?';
$txt['boardConfirm'] = 'Да ли сте сигурни да желите да обришете овај форум?';

$txt['catEdit'] = 'Измени категорију';
$txt['boardsEdit'] = 'Измени форум';
$txt['collapse_enable'] = 'Скупи';
$txt['collapse_desc'] = 'Дозволити корисницима да скупе категорију?';
$txt['catModify'] = '(измени)';

$txt['mboards_order_after'] = 'После ';
$txt['mboards_order_inside'] = 'Унутар ';
$txt['mboards_order_first'] = 'На почетку';

$txt['mboards_new_cat'] = 'Направи нову категорију';
$txt['mboards_new_board'] = 'Додај форум';
$txt['mboards_new_cat_name'] = 'Нова категорија';
$txt['mboards_add_cat_button'] = 'Додај категорију';
$txt['mboards_new_board_name'] = 'Нов форум';

$txt['mboards_name'] = 'Назив';
$txt['mboards_modify'] = 'измени';
$txt['mboards_permissions'] = 'дозволе';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = 'Да ли сте сигурни да желите да овај форум користи локалне дозволе?';

$txt['mboards_delete_cat'] = 'Обриши категорију';
$txt['mboards_delete_board'] = 'Обриши форум';

$txt['mboards_delete_cat_contains'] = 'Брисање ове категорије ће проузроковати брисање свих форума унутар ње укључујући и све теме, поруке као и приложене датотеке у дотичним форумима';
$txt['mboards_delete_option1'] = 'Обриши категорију и све форуме унутар ње.';
$txt['mboards_delete_option2'] = 'Обриши категорију и премести све форуме унутар ње у';
$txt['mboards_delete_error'] = 'Категорија није изабрана!';
$txt['mboards_delete_board_contains'] = 'Брисањем овог форума уклониће и подфоруме приказане испод, укључујући и теме, поруке и приложене датотеке сваког форума.';
$txt['mboards_delete_board_option1'] = 'Обриши форум и премести подфоруме које садржи у његову категорију.';
$txt['mboards_delete_board_option2'] = 'Обриши форум и премести подфоруме које садржи у';
$txt['mboards_delete_board_error'] = 'Форум није изабран!';
$txt['mboards_delete_what_do'] = 'Изаберите шта желите да урадите са овим форумима';
$txt['mboards_delete_confirm'] = 'Потврди';
$txt['mboards_delete_cancel'] = 'Откажи';

$txt['mboards_category'] = 'Категорија';
$txt['mboards_description'] = 'Опис';
$txt['mboards_description_desc'] = 'Кратак опис форума.';
$txt['mboards_groups'] = 'Дозвољене групе';
$txt['mboards_groups_desc'] = 'Групе којима је дозвољен приступ овом форуму.<br /><em>Напомена: ако је корисник члан било које групе или групе засноване на броју порука која је овде означена, имаће приступ овом форуму.</em>';
$txt['mboards_groups_post_group'] = 'Ова група је група заснована на броју порука.';
$txt['mboards_permissions_title'] = 'Приступ форуму';
$txt['mboards_permissions_desc'] = 'Изаберите ограничења за овај форум. Ова ограничења се неће примењивати на уреднике и администраторе.';
$txt['mboards_moderators'] = 'Уредници';
$txt['mboards_moderators_desc'] = 'Додатни чланови који ће имати уредничке привилегије на овом форуму. Администратори не морају да се налазе на овом списку.';
$txt['mboards_count_posts'] = 'Увећавај број порука';
$txt['mboards_count_posts_desc'] = 'Чини да се нови одговори и теме чланова броје у овом форуму.';
$txt['mboards_unchanged'] = 'Непромењено';
$txt['mboards_theme'] = 'Тема форума';
$txt['mboards_theme_desc'] = 'Ова опција вам дозвољава да промените изглед сајта за овај форум.';
$txt['mboards_theme_default'] = '(подразумевана тема сајта)';
$txt['mboards_override_theme'] = 'Прегази тему члана';
$txt['mboards_override_theme_desc'] = 'Употреби тему овог форума чак и ако члан није изабрао да користи подразумевану тему.';

$txt['mboards_order_before'] = 'Пре';
$txt['mboards_order_child_of'] = 'Подфорум';
$txt['mboards_order_in_category'] = 'У категорији';
$txt['mboards_current_position'] = 'Тренутна позиција';
$txt['no_valid_parent'] = 'Форум %s нема одговарајући родитељски форум. Упоребите функцију \'пронађи и поправи грешке\' да бисте поправили ово.';

$txt['mboards_settings_desc'] = 'Измените општа подешавања категорија и форума.';
$txt['groups_manage_boards'] = 'Групе чланова којима је дозвољено да управљају форумима и категоријама';
$txt['mboards_settings_submit'] = 'Сачувај';
$txt['recycle_enable'] = 'Омогући рециклирање обрисаних тема';
$txt['recycle_board'] = 'Форум за рециклиране теме';
$txt['countChildPosts'] = 'Уброј поруке у подфорумима у број родитељског форума';

$txt['mboards_select_destination'] = 'Изаберите одредиште за форум \'<b>%1$s</b>\'';
$txt['mboards_cancel_moving'] = 'Откажи премештање';
$txt['mboards_move'] = 'Премести';

?>
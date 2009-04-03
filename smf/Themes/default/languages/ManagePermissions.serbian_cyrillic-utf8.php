<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Управљање дозволама';
$txt['permissions_modify'] = 'Измени';
$txt['permissions_access'] = 'Приступ';
$txt['permissions_allowed'] = 'дозвољене';
$txt['permissions_denied'] = 'онемогућене';

$txt['permissions_switch'] = 'Пребаци на';
$txt['permissions_global'] = 'Глобалне';
$txt['permissions_local'] = 'Локалне';

$txt['permissions_groups'] = 'Дозволе по групи чланова';
$txt['permissions_all'] = 'све';
$txt['permissions_none'] = 'ниједна';
$txt['permissions_set_permissions'] = 'Постави дозволе';

$txt['permissions_with_selection'] = 'Над одабраним';
$txt['permissions_apply_pre_defined'] = 'Примени предефинисани профил дозвола';
$txt['permissions_select_pre_defined'] = 'Изаберите предефинисани профил';
$txt['permissions_copy_from_board'] = 'Копирај дозволе од овог форума';
$txt['permissions_select_board'] = 'Изаберите форум';
$txt['permissions_like_group'] = 'Постави дозволе као ова група';
$txt['permissions_select_membergroup'] = 'Изаберите групу чланова';
$txt['permissions_add'] = 'Додај дозволу';
$txt['permissions_remove'] = 'Уклони дозволу';
$txt['permissions_deny'] = 'Онемогући дозволу';
$txt['permissions_select_permission'] = 'Изаберите дозволу';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Можете да изаберете само једну акцију да бисте променили дозволе';
$txt['permissions_no_action'] = 'Акција није изабрана';
$txt['permissions_deny_dangerous'] = 'Управо ћете да онемогућите једну или више дозвола.\\nОво може да буде опасно и изазове неочекиване резултате ако нисте сигурни да нико \\"случајно\\" није у групи или групама којима онемогућавате дозволе.\\n\\nДа ли сте сигурни да желите да наставите?';

$txt['permissions_boards'] = 'Дозволе по форуму';

$txt['permissions_modify_group'] = 'Измени групу';
$txt['permissions_general'] = 'Опште дозволе';
$txt['permissions_board'] = 'Глобалне дозволе форума';
$txt['permissions_commit'] = 'Сачувај промене';
$txt['permissions_modify_local'] = 'Промени локалне дозволе';
$txt['permissions_on'] = 'на форуму';
$txt['permissions_local_for'] = 'Локалне дозволе за групу';
$txt['permissions_option_on'] = 'Д';
$txt['permissions_option_off'] = 'Н';
$txt['permissions_option_deny'] = 'О';
$txt['permissions_option_desc'] = 'За сваку дозволу можете да изаберете или \'Дозвољена\' (Д), \'Недозвољена\' (Н), или <span style="color: red;">\'Онемогућена\' (О)</span>.<br /><br />Remember that if you deny a permission, any member - whether moderator or otherwise - that is in that group will be denied that as well.<br />For this reason, you should use deny carefully, only when <b>necessary</b>. Disallow, on the other hand, denies unless otherwise granted.';

$txt['permissiongroup_general'] = 'Опште';
$txt['permissionname_view_stats'] = 'Гледање статистике форума';
$txt['permissionhelp_view_stats'] = 'Статистика форума је страница која приказује сву статистику форума као што је број чланова, број порука по дану и неколико других топ 10 ставки. Омогућивање ове дозволе додаће линк при дну почетне стране форума (\'[више статистике]\').';
$txt['permissionname_view_mlist'] = 'Гледање списка чланова';
$txt['permissionhelp_view_mlist'] = 'Списак чланова приказује све чланове који су се регистровали на ваш форум. Овај списак може да се сортира и претражује. Списак чланова је линкован на почетној страни форума као и на статистици форума, кликом на број чланова.';
$txt['permissionname_who_view'] = 'Гледање списка "Ко је присутан"';
$txt['permissionhelp_who_view'] = 'Ко је присутан приказује све чланове који су тренутно на мрежи и шта тренутно раде. Ова дозвола ће радити једино ако сте је омогућили у \'Могућностима и опцијама\'. Овој страници можете да приступите кликом на линк у одељку \'Присутни корисници\' на почетној страни форума.';
$txt['permissionname_search_posts'] = 'Претраживање порука и корисника';
$txt['permissionhelp_search_posts'] = 'The Search permission allows the user to search all boards he or she is allowed to access. When the search permission is enabled, a \'Search\' button will be added to the forum button bar.';
$txt['permissionname_karma_edit'] = 'Промена угледа других људи';
$txt['permissionhelp_karma_edit'] = 'Karma is a feature that shows the popularity of a member. In order to use this feature, you need to have it enabled in \'Features and Options\'. This permission will allow a membergroup to cast a vote. This permission has no effect on guests.';

$txt['permissiongroup_pm'] = 'Приватне поруке';
$txt['permissionname_pm_read'] = 'Читање приватних порука';
$txt['permissionhelp_pm_read'] = 'This permission allows users to access the Personal Messages section and read their Personal Messages. Without this permission a user is unable to send Personal Messages.';
$txt['permissionname_pm_send'] = 'Слање приватних порука';
$txt['permissionhelp_pm_send'] = 'Send personal messages to other registered members. Requires the \'Read personal messages\' permission.';

$txt['permissiongroup_calendar'] = 'Календар';
$txt['permissionname_calendar_view'] = 'Гледање календара';
$txt['permissionhelp_calendar_view'] = 'The calendar shows for each month the birthdays, events and holidays. This permission allows access to this calendar. When this permission is enabled, a button will be added to the top button bar and a list will be shown at the bottom of the board index with current and upcoming birthdays, events and holidays. The calendar needs be enabled from \'Edit Features and Options\'.';
$txt['permissionname_calendar_post'] = 'Креирање догађаја у календару';
$txt['permissionhelp_calendar_post'] = 'An Event is a topic linked to a certain date or date range. Creating events can be done from the calendar. An event can only be created if the user that creates the event is allowed to post new topics.';
$txt['permissionname_calendar_edit'] = 'Уређивање догађаја у календару';
$txt['permissionhelp_calendar_edit'] = 'An Event is a topic linked to a certain date or date range. Event can be edited by clicking the red asterisk (*) next to the event in the calendar view. In order to be able to edit an event, a user must have sufficient permissions to edit the first message of the topic that is linked to the event.';
$txt['permissionname_calendar_edit_own'] = 'сопствени догађаји';
$txt['permissionname_calendar_edit_any'] = 'било који догађаји';

$txt['permissiongroup_maintenance'] = 'Администрација форума';
$txt['permissionname_admin_forum'] = 'Администрирање форума и базе података';
$txt['permissionhelp_admin_forum'] = 'This permission allows a user to:<ul><li>change forum, database and theme settings</li><li>manage packages</li><li>use the forum and database maintenance tools</li><li>view the error and mod logs</li></ul> Use this permission with caution, as it is very powerful.';
$txt['permissionname_manage_boards'] = 'Уређивање форума и категорија';
$txt['permissionhelp_manage_boards'] = 'This permission allows creation, editing and removal of boards and categories.';
$txt['permissionname_manage_attachments'] = 'Управљање приложеним датотекама и аватарима';
$txt['permissionhelp_manage_attachments'] = 'This permission allows access to the attachment center, where all forum attachments and avatars are listed and can be removed.';
$txt['permissionname_manage_smileys'] = 'Управљање смајлијима';
$txt['permissionhelp_manage_smileys'] = 'This allows access to the smiley center. In the smiley center you can add, edit and remove smileys and smiley sets.';
$txt['permissionname_edit_news'] = 'Уређивање вести';
$txt['permissionhelp_edit_news'] = 'The news function allows a random news line to appear on each screen. In order to use the news function, enabled it in the forum settings.';

$txt['permissiongroup_member_admin'] = 'Администрација чланова';
$txt['permissionname_moderate_forum'] = 'Уређивање чланова форума';
$txt['permissionhelp_moderate_forum'] = 'This permission includes all important member moderation functions:<ul><li>access to registration management</li><li>access to the view/delete members screen</li><li>extensive profile info, including track IP/user and (hidden) online status</li><li>activate accounts</li><li>get approval notifications and approve accounts</li><li>immune to ignore PM</li><li>several small things</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Управљање и додељивање група чланова';
$txt['permissionhelp_manage_membergroups'] = 'This permission allows a user to edit membergroups and assign membergroups to other members.';
$txt['permissionname_manage_permissions'] = 'Управљање дозволама';
$txt['permissionhelp_manage_permissions'] = 'This permission allows a user to edit all permissions of a membergroup, globally or for individual boards.';
$txt['permissionname_manage_bans'] = 'Управљање списком забрана';
$txt['permissionhelp_manage_bans'] = 'This permission allows a user to add or remove usernames, IP addresses, hostnames and email addresses to a list of banned users. It also allows to view and remove log entries of banned users that attempted to login.';
$txt['permissionname_send_mail'] = 'Слање e-mail-а члановима';
$txt['permissionhelp_send_mail'] = 'Mass mail all forum members, or just a few membergroups by email or personal message (the latter requires \'Send Personal Message\' permission).';

$txt['permissiongroup_profile'] = 'Профили чланова';
$txt['permissionname_profile_view'] = 'Гледање профила и статистике';
$txt['permissionhelp_profile_view'] = 'This permission allows users clicking on a username to see a summary of profile settings, some statistics and all posts of the user.';
$txt['permissionname_profile_view_own'] = 'свог профила';
$txt['permissionname_profile_view_any'] = 'било ког профила';
$txt['permissionname_profile_identity'] = 'Измена подешавања налога';
$txt['permissionhelp_profile_identity'] = 'Account settings are the basic settings of a profile, like password, email address, membergroup and preferred language.';
$txt['permissionname_profile_identity_own'] = 'свог профила';
$txt['permissionname_profile_identity_any'] = 'било ког профила';
$txt['permissionname_profile_extra'] = 'Измена додатних подешавања профила';
$txt['permissionhelp_profile_extra'] = 'Additional profile settings include settings for avatars, theme preferences, notifications and Personal Messages.';
$txt['permissionname_profile_extra_own'] = 'свог профила';
$txt['permissionname_profile_extra_any'] = 'било ког профила';
$txt['permissionname_profile_title'] = 'Измена прилагођеног назива';
$txt['permissionhelp_profile_title'] = 'The custom title is shown on the topic display page, under the profile of each user that has a custom title.';
$txt['permissionname_profile_title_own'] = 'свог профила';
$txt['permissionname_profile_title_any'] = 'било ког профила';
$txt['permissionname_profile_remove'] = 'Брисање налога';
$txt['permissionhelp_profile_remove'] = 'This permission allows a user to delete his account, when set to \'Own Account\'.';
$txt['permissionname_profile_remove_own'] = 'свог налога';
$txt['permissionname_profile_remove_any'] = 'било ког налога';
$txt['permissionname_profile_server_avatar'] = 'Одабир аватара са сервера';
$txt['permissionhelp_profile_server_avatar'] = 'If enabled this will allow a user to select an avatar from the avatar collections installed on the server.';
$txt['permissionname_profile_upload_avatar'] = 'Достава аватара на сервер';
$txt['permissionhelp_profile_upload_avatar'] = 'This permission will allow a user to upload their personal avatar to the server.';
$txt['permissionname_profile_remote_avatar'] = 'Одабир удаљеног аватара';
$txt['permissionhelp_profile_remote_avatar'] = 'Because avatars might influence the page creation time negatively, it is possible to disallow certain membergroups to use avatars from external servers. ';

$txt['permissiongroup_general_board'] = 'Опште';
$txt['permissionname_moderate_board'] = 'Уређивање форума';
$txt['permissionhelp_moderate_board'] = 'The moderate board permission adds a few small permissions that make a moderator a real moderator. Permissions include replying to locked topics, changing the poll expire time and viewing poll results.';

$txt['permissiongroup_topic'] = 'Теме';
$txt['permissionname_post_new'] = 'Постављање нове теме';
$txt['permissionhelp_post_new'] = 'This permission allows users to post new topics. It doesn\'t allow to post replies to topics.';
$txt['permissionname_merge_any'] = 'Спајање тема';
$txt['permissionhelp_merge_any'] = 'Merge two or more topic into one. The order of messages within the merged topic will be based on the time the messages were created. A user can only merge topics on those boards a user is allowed to merge. In order to merge multiple topics at once, a user has to enable quickmoderation in their profile settings.';
$txt['permissionname_split_any'] = 'Деоба тема';
$txt['permissionhelp_split_any'] = 'Split a topic into two separate topics.';
$txt['permissionname_send_topic'] = 'Слање теме пријатељима';
$txt['permissionhelp_send_topic'] = 'This permission allows a user to mail a topic to a friend, by entering their email address and allows adding a message.';
$txt['permissionname_make_sticky'] = 'Залепљивање тема';
$txt['permissionhelp_make_sticky'] = 'Sticky topics are topics that always remain on top of a board. They can be useful for announcements or other important messages.';
$txt['permissionname_move'] = 'Премештање тема';
$txt['permissionhelp_move'] = 'Move a topic from one board to the other. Users can only select target boards they are allowed to access.';
$txt['permissionname_move_own'] = 'својих тема';
$txt['permissionname_move_any'] = 'било којих тема';
$txt['permissionname_lock'] = 'Закључавање тема';
$txt['permissionhelp_lock'] = 'This permission allows a user to lock a topic. This can be done in order to make sure no one can reply to a topic. Only uses with a \'Moderate board\' permission can still post in locked topics.';
$txt['permissionname_lock_own'] = 'својих тема';
$txt['permissionname_lock_any'] = 'било којих тема';
$txt['permissionname_remove'] = 'Брисање порука';
$txt['permissionhelp_remove'] = 'Remove posts. This does not allow a user to delete the first post of a topic.';
$txt['permissionname_remove_own'] = 'својих порука';
$txt['permissionname_remove_any'] = 'било којих порука';
$txt['permissionname_post_reply'] = 'Слање одговора';
$txt['permissionhelp_post_reply'] = 'This permission allows replying to topics.';
$txt['permissionname_post_reply_own'] = 'на своје теме';
$txt['permissionname_post_reply_any'] = 'на било које теме';
$txt['permissionname_modify_replies'] = 'Измена одговора на своје теме';
$txt['permissionhelp_modify_replies'] = 'This permission allows a user that started a topic to modify all replies to their topic.';
$txt['permissionname_delete_replies'] = 'Брисање одговора на своје теме';
$txt['permissionhelp_delete_replies'] = 'This permission allows a user that started a topic to remove all replies to their topic.';
$txt['permissionname_announce_topic'] = 'Слање теме';
$txt['permissionhelp_announce_topic'] = 'This allows to send an announcement e-mail about a topic to all members or to a few membergroups.';

$txt['permissiongroup_post'] = 'Поруке';
$txt['permissionname_delete'] = 'Уклањање тема';
$txt['permissionhelp_delete'] = 'Delete topics as a whole. Note that this permission doesn\'t allow to delete specific messages within the topic!';
$txt['permissionname_delete_own'] = 'својих тема';
$txt['permissionname_delete_any'] = 'било којих тема';
$txt['permissionname_modify'] = 'Измена порука';
$txt['permissionhelp_modify'] = 'Измена порука';
$txt['permissionname_modify_own'] = 'својих порука';
$txt['permissionname_modify_any'] = 'било којих порука';
$txt['permissionname_report_any'] = 'Пријављивање порука уредницима';
$txt['permissionhelp_report_any'] = 'This permission adds a link to each message, allowing a user to report a post to a moderator. On reporting, all moderators on that board will receive an email with a link to the reported post and a description of the problem (as given by the reporting user).';

$txt['permissiongroup_poll'] = 'Гласања';
$txt['permissionname_poll_view'] = 'Гледање гласања';
$txt['permissionhelp_poll_view'] = 'This permission allows a user to view a poll. Without this permission, the user will only see the topic.';
$txt['permissionname_poll_vote'] = 'Гласање у гласањима';
$txt['permissionhelp_poll_vote'] = 'This permission allows a (registered) user to cast one vote. It doesn\'t apply to guests.';
$txt['permissionname_poll_post'] = 'Постављање гласања';
$txt['permissionhelp_poll_post'] = 'This permission allows a user to post a new poll. As polls are special cases of topics, you cannot use this permission without the \'Post new topic\' permission.';
$txt['permissionname_poll_add'] = 'Додавање гласања темама';
$txt['permissionhelp_poll_add'] = 'Add poll to topics allows a user to add a poll after the topic has been created. This permission requires sufficient rights to edit the first post of a topic.';
$txt['permissionname_poll_add_own'] = 'својим темама';
$txt['permissionname_poll_add_any'] = 'било којим темама';
$txt['permissionname_poll_edit'] = 'Уређивање гласања';
$txt['permissionhelp_poll_edit'] = 'This permission allows to edit the options of a poll and to reset the poll. In order to edit the maximum number of votes and the expiration time, a user needs to have the \'Moderate board\' permission.';
$txt['permissionname_poll_edit_own'] = 'својих гласања';
$txt['permissionname_poll_edit_any'] = 'било којих гласања';
$txt['permissionname_poll_lock'] = 'Закључавање гласања';
$txt['permissionhelp_poll_lock'] = 'Locking polls prevents the poll from accepting any more votes.';
$txt['permissionname_poll_lock_own'] = 'својих гласања';
$txt['permissionname_poll_lock_any'] = 'било којих гласања';
$txt['permissionname_poll_remove'] = 'Уклањање гласања';
$txt['permissionhelp_poll_remove'] = 'This permission allows removal of polls.';
$txt['permissionname_poll_remove_own'] = 'својих гласања';
$txt['permissionname_poll_remove_any'] = 'било којих гласања';

$txt['permissiongroup_notification'] = 'Обавештења';
$txt['permissionname_mark_any_notify'] = 'Захтевање обавештавања при одговорима';
$txt['permissionhelp_mark_any_notify'] = 'This feature allows users to receive a notification whenever someone replies to a topic they subscribed to.';
$txt['permissionname_mark_notify'] = 'Захтевање обавештавања о новим темама';
$txt['permissionhelp_mark_notify'] = 'Notification on new topics is a feature that allows a user to receive an email every time a new topic is created on the board they subscribe to.';

$txt['permissiongroup_attachment'] = 'Приложене датотеке';
$txt['permissionname_view_attachments'] = 'Гледање приложених датотека';
$txt['permissionhelp_view_attachments'] = 'Attachments are files that are attached to posted messages. This feature can be enabled and configured in \'Edit Features and Options\'. Since attachments are not directly accessed, you can protect them from being downloaded by users that don\'t have this permission.';
$txt['permissionname_post_attachment'] = 'Прилагање датотека';
$txt['permissionhelp_post_attachment'] = 'Attachments are files that are attached to posted messages. One message can contain multiple attachments.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Подешавања дозвола';
$txt['groups_manage_permissions'] = 'Корисничке групе којима је дозвољено да управљају дозволама';
$txt['permission_settings_submit'] = 'Сачувај';
$txt['permission_settings_enable_deny'] = 'Омогући опцију за онемогућивање дозвола';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Искључивање ове опције ће проузроковати ажурирање \\\'онемогућених\\\' дозвола на \\\'недозвољене\\\'.';
$txt['permission_by_membergroup_desc'] = 'Овде можете да поставите глобалне дозволе за сваку групу корисника. Ове дозволе биће у оптицају на форумима у којима оне нису прегажене локалним поставкама постављеним на страници \'Дозволе по форуму\'.';
$txt['permission_by_board_desc'] = 'Овде можете да поставите да ли форум користи глобалне дозволе или има посебне дозволе. Коришћење локалних дозвола вам омогућава да за одређени форум поставите посебне дозволе за сваку корисничку групу.';
$txt['permission_settings_desc'] = 'Овде можете да промените ко има дозволу да мења дозволе као и колико би систем дозвола требало да буде софистициран.';
$txt['permission_settings_enable_postgroups'] = 'Омогући дозволе за групе засноване на броју порука';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Онемогућивање овог подешавања ће уклонити тренутно подешене дозволе за групе засноване на броју порука.';
$txt['permission_settings_enable_by_board'] = 'Омогући напредне дозволе по форуму';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_by_board_warning'] = 'Онемогућивање ове опције проузроковаће уклањање свих дозвола постављних на нивоу форума.';

?>
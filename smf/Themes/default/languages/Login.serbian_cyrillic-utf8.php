<?php
// Version: 1.1.2; Login

$txt[37] = 'Морате да унесете корисничко име.';
$txt[38] = 'Нисте унели своју лозинку.';
$txt[39] = 'Погрешна лозинка';
$txt[98] = 'Изаберите корисничко име';
$txt[155] = 'Мод одржавања';
$txt[245] = 'Регистрација је успешна';
$txt[431] = 'Успех! Сада сте члан овог форума.';
// Use numeric entities in the below string.
$txt[492] = 'а ваша лозинка је';
$txt[500] = 'Молим вас унесите исправну e-mail адресу, %s.';
$txt[517] = 'Захтеване информације';
$txt[520] = 'Користи се само за идентификацију SMF-у. Можете да користите специјалне карактере након што се пријавите, мењањем вашег приказаног имена у профилу.';
$txt[585] = 'Слажем се';
$txt[586] = 'Не слажем се';
$txt[633] = 'Упозорење!';
$txt[634] = 'Само регистровани чланови могу да приступе овом делу.';
$txt[635] = 'Пријавите се испод или';
$txt[636] = 'се региструјте';
$txt[637] = 'на ' . $context['forum_name'] . '.';
// Use numeric entities in the below two strings.
$txt[701] = 'Можете да је промените одласком у профил након пријављивања, или приликом посете ове странице након пријављивања:';
$txt[719] = 'Ваше корисничко име је: ';
$txt[730] = 'Та e-mail адреса (%s) се већ користи од стране једног регистрованог члана. Ако мислите да је ово грешка, посетите страницу за пријављивање и употребите подсетник за лозинку са том адресом.';

$txt['login_hash_error'] = 'Безбедност лозинке је скоро ажурирана. Унесите поново своју лозинку.';

$txt['register_age_confirmation'] = 'Имам најмање %d година';

// Use numeric entities in the below six strings.
$txt['register_subject'] = 'Добродошли на ' . $context['forum_name'];

// For the below three messages, %1$s is the display name, %2$s is the username, %3$s is the password, %4$s is the activation code, and %5$s is the activation link (the last two are only for activation.)
$txt['register_immediate_message'] = '%1$s, регистровали сте налог на ' . $context['forum_name'] . '!' . "\n\n" . 'Корисничко име вашег налога је %2$s а лозинка %3$s.' . "\n\n" . 'Након што се пријавите, моћи ћете да промените лозинку у свом профилу:' . "\n\n" . $scripturl . '?action=profile' . "\n\n" . $txt[130];
$txt['register_activate_message'] = '%1$s, регистровали сте налог на ' . $context['forum_name'] . '!' . "\n\n" . 'Корисничко име вашег налога је %2$s а лозинка је %3$s (можете да је промените касније.)' . "\n\n" . 'Пре него што се пријавите, потребно је да активирате свој налог. Да бисте то урадили, кликните на следећи линк:' . "\n\n" . '%5$s' . "\n\n" . 'Ако будете имали било каквих проблема са активацијом, употребите следећи код "%4$s".' . "\n\n" . $txt[130];
$txt['register_pending_message'] = '%1$s, ваш захтев за регистрацијом налога на ' . $context['forum_name'] . ' је примљен.' . "\n\n" . 'Корисничко име које сте изабрали је %2$s а лозинка %3$s.' . "\n\n" . 'Пре него што можете да се пријавите и почнете са коришћењем форума, ваш захтев биће размотрен и одобрен. Када се ово догоди, примићете још један e-mail са ове адресе.' . "\n\n" . $txt[130];

// For the below two messages, %1$s is the user's display name, %2$s is their username, %3$s is the activation code, and %4$s is the activation link (the last two are only for activation.)
$txt['resend_activate_message'] = '%1$s, сада сте регистровали налог на ' . $context['forum_name'] . '!' . "\n\n" . 'Ваше корисничко име је "%2$s".' . "\n\n" . 'Пре него што се пријавите, мораћете да активирате свој налог. Да бисте то урадили, кликните на следећи линк:' . "\n\n" . '%4$s' . "\n\n" . 'Ако будете имали било каквих проблема са активацијом, употребите следећи код "%3$s".' . "\n\n" . $txt[130];
$txt['resend_pending_message'] = '%1$s, ваш захтев за регистрацијом налога на ' . $context['forum_name'] . ' је примљен.' . "\n\n" . 'Корисничко име које сте изабрали је %2$s а лозинка %3$s.' . "\n\n" . 'Пре него што можете да се пријавите и почнете са коришћењем форума, ваш захтев биће размотрен и одобрен. Када се ово догоди, примићете још један e-mail са ове адресе.' . "\n\n" . $txt[130];

$txt['ban_register_prohibited'] = 'Извините али вам није дозвољено да се региструјете на овај форум.';
$txt['under_age_registration_prohibited'] = 'Извините али корисницима млађим од %d година није дозвољено да се региструју на овај форум.';

$txt['activate_account'] = 'Активација налога';
$txt['activate_success'] = 'Ваш налог је успешно активиран. Сада можете да се пријавите.';
$txt['activate_not_completed1'] = 'Ваша e-mail адреса мора да буде потврђена пре него што се пријавите.';
$txt['activate_not_completed2'] = 'Потребан вам је још један активациони e-mail?';
$txt['activate_after_registration'] = 'Захваљујемо се на регистрацији. Ускоро ћете примити e-mail са линком за активацију вашег налога. Уколико не будете примили e-mail након извесног времена, проверите ваш фолдер са нежељеном поштом (spam).';
$txt['invalid_userid'] = 'Корисник не постоји';
$txt['invalid_activation_code'] = 'Погрешан активациони код';
$txt['invalid_activation_username'] = 'Корисничко име или e-mail';
$txt['invalid_activation_new'] = 'Ако сте при регистрацији употребили погрешну e-mail адресу, унесите нову заједно са вашом лозинком.';
$txt['invalid_activation_new_email'] = 'Нова e-mail адреса';
$txt['invalid_activation_password'] = 'Стара лозинка';
$txt['invalid_activation_resend'] = 'Поново пошаљи активациони код';
$txt['invalid_activation_known'] = 'Ако већ знате свој активациони код, унесите га овде.';
$txt['invalid_activation_retry'] = 'Активациони код';
$txt['invalid_activation_submit'] = 'Активирај';

$txt['coppa_not_completed1'] = 'Администратор још није примио сагласност родитеља/старатеља за ваш налог.';
$txt['coppa_not_completed2'] = 'Потребно вам је још детаља?';

$txt['awaiting_delete_account'] = 'Ваш налог је означен за брисање!<br />Ако желите да повратите свој налог, означите поље &quot;Поново активарај мој налог&quot; и пријавите се поново.';
$txt['undelete_account'] = 'Поново активарај мој налог';

$txt['change_email_success'] = 'Ваша e-mail адреса је промењена а нови активациони e-mail је послат на њу.';
$txt['resend_email_success'] = 'Нови активациони e-mail је успешно послат.';
// Use numeric entities in the below three strings.
$txt['change_password'] = 'Детаљи о новој лозинки';
$txt['change_password_1'] = 'Ваши детаљи о пријављивању на';
$txt['change_password_2'] = 'су промењени а ваша лозинка је ресетована. Испод су нови детаљи о пријављивању.';

$txt['maintenance3'] = 'Овај форум је у моду одржавања.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Молим вас прочитајте и прихватите сагласност пре регистрације.';
$txt['register_passwords_differ_js'] = 'Лозинке које сте унели нису исте!';

$txt['approval_after_registration'] = 'Захваљујемо се на регистрацији. Администратор мора да одобри вашу регистрацији пре него што почнете да користите свој налог. Убрзо ћете примити e-mail са обавештењем о администраторовој одлуци.';

$txt['admin_settings_desc'] = 'Овде можете да промените разна подешавања везана за регистрацију нових чланова.';

$txt['admin_setting_registration_method'] = 'Начин регистрације нових чланова';
$txt['admin_setting_registration_disabled'] = 'Регистрација онемогућена';
$txt['admin_setting_registration_standard'] = 'Непосредна регистрација';
$txt['admin_setting_registration_activate'] = 'Активирање члана';
$txt['admin_setting_registration_approval'] = 'Одобравање члана';
$txt['admin_setting_notify_new_registration'] = 'Обавести администраторе када се нов члан придружи';
$txt['admin_setting_send_welcomeEmail'] = 'Пошаљи поздравни e-mail свим новим члановима';

$txt['admin_setting_password_strength'] = 'Захтевана јачина корисничких лозинка';
$txt['admin_setting_password_strength_low'] = 'Ниска - најмање 4 карактера';
$txt['admin_setting_password_strength_medium'] = 'Средња - не може да садржи корисничко име';
$txt['admin_setting_password_strength_high'] = 'Висока - скуп различитих знакова';

$txt['admin_setting_image_verification_type'] = 'Комплексност визуалне потврде';
$txt['admin_setting_image_verification_type_desc'] = 'Што је слика комплекснија, ботовима ће бити теже да је заобиђу';
$txt['admin_setting_image_verification_off'] = 'Онемогућено';
$txt['admin_setting_image_verification_vsimple'] = 'Веома проста - Обичан текст на слици';
$txt['admin_setting_image_verification_simple'] = 'Проста - Преклапајућа обојена слова, без шума';
$txt['admin_setting_image_verification_medium'] = 'Средња - Преклапајућа обојена слова, са шумом';
$txt['admin_setting_image_verification_high'] = 'Висока - Накривљена слова, висок ниво шума';
$txt['admin_setting_image_verification_sample'] = 'Пример';
$txt['admin_setting_image_verification_nogd'] = '<b>Напомена:</b> пошто овај сервер нема инсталирану GD библиотеку, различити нивои комплексности неће имати ефекта.';

$txt['admin_setting_coppaAge'] = 'Старост испод које почиње примењивање ограничења регистрације';
$txt['admin_setting_coppaAge_desc'] = '(Унесите 0 да бисте онемогућили)';
$txt['admin_setting_coppaType'] = 'Акција за предузимање када се корисник млађи од минимума региструје';
$txt['admin_setting_coppaType_reject'] = 'Одбаци регистрацију';
$txt['admin_setting_coppaType_approval'] = 'Захтевај одобрење родитеља/старатеља';
$txt['admin_setting_coppaPost'] = 'Поштанска адреса на коју би одобрење требало да буде послато';
$txt['admin_setting_coppaPost_desc'] = 'Примењује се само када је постављено ограничење старости';
$txt['admin_setting_coppaFax'] = 'Број факса на који би одобрење требало да буде послато';
$txt['admin_setting_coppaPhone'] = 'Број за ступање у везу са родитељима око питања везаних за ограничење старости';
$txt['admin_setting_coppa_require_contact'] = 'Морате да унесте или поштански број или број факса ако је одобравање родитеља/старатеља затражено.';

$txt['admin_register'] = 'Регистрација новог члана';
$txt['admin_register_desc'] = 'Одавде можете да региструјете нове чланове на форум, и ако желите, пошаљете им детаље преко e-mail-а.';
$txt['admin_register_username'] = 'Ново корисничко име';
$txt['admin_register_email'] = 'E-mail адреса';
$txt['admin_register_password'] = 'Лозинка';
$txt['admin_register_username_desc'] = 'Корисничко име новог члана';
$txt['admin_register_email_desc'] = 'E-mail адреса новог члана';
$txt['admin_register_password_desc'] = 'Лозинка новог члана';
$txt['admin_register_email_detail'] = 'Пошаљи кориснику е-mail-ом нову лозинку';
$txt['admin_register_email_detail_desc'] = 'E-mail адреса је потребна чак и ако опција није означена';
$txt['admin_register_email_activate'] = 'Захтевајте да корисник активира свој налог';
$txt['admin_register_group'] = 'Примарна корисничка група';
$txt['admin_register_group_desc'] = 'Примарна корисничка група којој ће корисник припадати';
$txt['admin_register_group_none'] = '(без примарне корисничке групе)';
$txt['admin_register_done'] = 'Члан %s је успешно регистрован!';

$txt['admin_browse_register_new'] = 'Региструј новог члана';

// Use numeric entities in the below three strings.
$txt['admin_notify_subject'] = 'Нов члан се придружио';
$txt['admin_notify_profile'] = '%s се управо пријавио као нови члан вашег форума. Кликните на линк испод да бисте погледали његов профил.';
$txt['admin_notify_approval'] = 'Пре него што овај члан може да почне са писањем, морате да му одобрите налог. Кликните на линк испод да бисте отишли на екран за одобравање.';

$txt['coppa_title'] = 'Форум са ограничењем старости';
$txt['coppa_after_registration'] = 'Хвала вам што сте регистровали налог на ' . $context['forum_name'] . '.<br /><br />Пошто сте млађи од {MINIMUM_AGE}, мораћете да прибавите дозволу свог родитеља/старатеља пре него што можете да користите свој налог. Да бисте могли да активирате свој налог, одштампајте овај захтев:';
$txt['coppa_form_link_popup'] = 'Учитај захтев у новом прозору';
$txt['coppa_form_link_download'] = 'Преузми захтев као текстуалну датотеку';
$txt['coppa_send_to_one_option'] = 'Затим нека ваш родитељ или старатељ пошаље попуњен образац:';
$txt['coppa_send_to_two_options'] = 'Затим нека ваш родитељ или старатељ пошаље попуњен образац на један од ових начина:';
$txt['coppa_send_by_post'] = 'поштом, на следећу адресу:';
$txt['coppa_send_by_fax'] = 'факсом, на следећи број:';
$txt['coppa_send_by_phone'] = 'Уместо овога, родитељ или старатељ може позвати администратора на број {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Образац за одобрење регистрације на ' . $context['forum_name'];
$txt['coppa_form_address'] = 'Адреса';
$txt['coppa_form_date'] = 'Датум';
$txt['coppa_form_body'] = 'Ја {PARENT_NAME},<br /><br />дајем дозволу {CHILD_NAME} (име детета) да постане пуноправно регистровани члан на форуму: ' . $context['forum_name'] . ', са корисничким именом: {USER_NAME}.<br /><br />Разумем да неке личне информације унете од {USER_NAME} могу бити приказане осталим члановима форума.<br /><br />Потпис:<br />{PARENT_NAME} (Родитељ/Старатељ).';

$txt['visual_verification_label'] = 'Визуална потврда';
$txt['visual_verification_description'] = 'Укуцајте слова приказана на слици';
$txt['visual_verification_sound'] = 'Слушајте слова';
$txt['visual_verification_sound_again'] = 'Репродукуј поново';
$txt['visual_verification_sound_close'] = 'Затвори прозор';
$txt['visual_verification_request_new'] = 'Затражи другу слику';
$txt['visual_verification_sound_direct'] = 'Имате проблема са слушањем овога? Пробајте директан линк.';

?>
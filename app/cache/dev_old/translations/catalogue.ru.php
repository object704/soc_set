<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ru', array (
  'validators' => 
  array (
    'This value should be false' => 'Значение должно быть ложным',
    'This value should be true' => 'Значение должно быть истинным',
    'This value should be of type {{ type }}' => 'Тип значения должен быть {{ type }}',
    'This value should be blank' => 'Значение должно быть пустым',
    'The value you selected is not a valid choice' => 'Выбранное Вами значение недопустимо',
    'You must select at least {{ limit }} choices' => 'Вы должны выбрать хотя бы {{ limit }} вариантов',
    'You must select at most {{ limit }} choices' => 'Вы должны выбрать не более чем {{ limit }} вариантов',
    'One or more of the given values is invalid' => 'Одно или несколько заданных значений недопустимо',
    'The fields {{ fields }} were not expected' => 'Поля {{ fields }} не ожидались',
    'The fields {{ fields }} are missing' => 'Поля {{ fields }} отсутствуют',
    'This value is not a valid date' => 'Значение не является правильной датой',
    'This value is not a valid datetime' => 'Значение даты и времени недопустимо',
    'This value is not a valid email address' => 'Значение адреса электронной почты недопустимо',
    'The file could not be found' => 'Файл не может быть найден',
    'The file is not readable' => 'Файл не может быть прочитан',
    'The file is too large ({{ size }}). Allowed maximum size is {{ limit }}' => 'Файл слишком большой ({{ size }}). Максимальный допустимый размер {{ limit }}',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}' => 'MIME-тип файла недопустим ({{ type }}). Допустимы MIME-типы файлов {{ types }}',
    'This value should be {{ limit }} or less' => 'Значение должно быть {{ limit }} или меньше',
    'This value is too long. It should have {{ limit }} characters or less' => 'Значение слишком длинное. Должно быть {{ limit }} символов или меньше',
    'This value should be {{ limit }} or more' => 'Значение должно быть {{ limit }} или больше',
    'This value is too short. It should have {{ limit }} characters or more' => 'Значение слишком короткое. Должно быть {{ limit }} символов или больше',
    'This value should not be blank' => 'Значение не должно быть пустым',
    'This value should not be null' => 'Значение не должно быть null',
    'This value should be null' => 'Значение должно быть null',
    'This value is not valid' => 'Значение недопустимо',
    'This value is not a valid time' => 'Значение времени недопустимо',
    'This value is not a valid URL' => 'Значение URL недопустимо',
    'This form should not contain extra fields' => 'Эта форма не должна содержать дополнительных полей',
    'The uploaded file was too large. Please try to upload a smaller file' => 'Загруженный файл слишком большой. Пожалуйста, попробуйте загрузить файл меньшего размера',
    'The CSRF token is invalid. Please try to resubmit the form' => 'CSRF значение недопустимо. Пожалуйста, попробуйте повторить отправку формы',
    'The two values should be equal' => 'Оба значения должны быть одинаковыми',
    'The file is too large. Allowed maximum size is {{ limit }}' => 'Файл слишком большой. Максимальный допустимый размер {{ limit }}',
    'The file is too large' => 'Файл слишком большой',
    'The file could not be uploaded' => 'Файл не может быть загружен',
    'This value should be a valid number' => 'Значение должно быть числом',
    'This value is not a valid country' => 'Значение не является допустимой страной',
    'This file is not a valid image' => 'Файл не является допустимым форматом изображения',
    'This is not a valid IP address' => 'Значение не является допустимым IP адресом',
    'This value is not a valid language' => 'Значение не является допустимым языком',
    'This value is not a valid locale' => 'Значение не является допустимой локалью',
    'This value is already used' => 'Это значение уже используется',
    'fos_user.username.already_used' => 'Логин уже используется',
    'fos_user.username.blank' => 'Пожалуйста, укажите логин',
    'fos_user.username.short' => 'Логин слишком короткий',
    'fos_user.username.long' => 'Логин слишком длинный',
    'fos_user.email.already_used' => 'Email уже используется',
    'fos_user.email.blank' => 'Пожалуйста, укажите Ваш email',
    'fos_user.email.short' => 'Email слишком короткий',
    'fos_user.email.long' => 'Email слишком длинный',
    'fos_user.email.invalid' => 'Email в неправильном формате',
    'fos_user.password.blank' => 'Пожалуйста, укажите пароль',
    'fos_user.password.short' => 'Пароль слишком короткий',
    'fos_user.new_password.blank' => 'Пожалуйста, укажите новый пароль',
    'fos_user.new_password.short' => 'Новый пароль слишком короткий',
    'fos_user.current_password.invalid' => 'Вы неправильно ввели Ваш текущий пароль',
    'fos_user.group.blank' => 'Пожалуйста, укажите название группы',
    'fos_user.group.short' => 'Название группы слишком короткое',
    'fos_user.group.long' => 'Название группы слишком длинное',
  ),
  'FOSUserBundle' => 
  array (
    'fos_user_group_form_name' => 'Название группы:',
    'fos_user_profile_form_user_username' => 'e-mail:',
    'fos_user_profile_form_user_email' => 'Электронная почта:',
    'fos_user_profile_form_current' => 'Текущий пароль:',
    'fos_user_registration_form_username' => 'e-mail:',
    'fos_user_registration_form_email' => 'Электронная почта:',
    'fos_user_registration_form_plainPassword_first' => 'Пароль:',
    'fos_user_registration_form_plainPassword_second' => 'Подтвердите пароль:',
    'fos_user_resetting_form_new_first' => 'Новый пароль:',
    'fos_user_resetting_form_new_second' => 'Подтвердите пароль:',
    'fos_user_change_password_form_new_first' => 'Новый пароль:',
    'fos_user_change_password_form_new_second' => 'Подтвердите пароль:',
    'fos_user_change_password_form_current' => 'Текущий пароль:',
    'group.edit.submit' => 'Обновить группу',
    'group.show.name' => 'Название группы',
    'group.new.submit' => 'Создать группу',
    'group.flash.updated' => 'Группа обновлена',
    'group.flash.created' => 'Группа создана',
    'group.flash.deleted' => 'Группа удалена',
    'security.login.username' => 'e-mail:',
    'security.login.password' => 'Пароль:',
    'security.login.remember_me' => 'Запомнить меня',
    'security.login.submit' => 'Войти',
    'profile.show.username' => 'Электронная почта',
    'profile.show.email' => 'Электронная почта',
    'profile.edit.submit' => 'Обновить',
    'profile.flash.updated' => 'Профиль пользователя обновлен',
    'change_password.submit' => 'Изменить пароль',
    'change_password.flash.success' => 'Пароль изменен',
    'registration.check_email' => 'Письмо отправлено на адрес %email%. В нём содержится ссылка, по которой вы можете подтвердить свою регистрацию.',
    'registration.confirmed' => 'Поздравляем %username%, ваш аккаунт подтвержден.',
    'registration.back' => 'На главную страницу.',
    'registration.submit' => 'Регистрация',
    'registration.flash.user_created' => 'Пользователь успешно создан',
    'registration.email.subject' => 'Добро пожаловать %firstName% %lastName%!',
    'registration.email.message' => 'Приветствуем %firstName% %lastName%!

Для подтверждения вашей регистрации, пройдите по ссылке %confirmationUrl%

С наилучшими пожеланиями,
команда сайта.
',
    'resetting.password_already_requested' => 'Пароль для данного пользователя уже запрашивался за последние 24 часа.',
    'resetting.check_email' => 'Письмо на адрес %email% уже отправлено. Оно содержит ссылку, при переходе по которой ваш пароль будет сброшен.',
    'resetting.request.invalid_username' => 'Пользователь "%username%" не существует.',
    'resetting.request.username' => 'e-mail:',
    'resetting.request.submit' => 'Сбросить пароль',
    'resetting.reset.submit' => 'Изменить пароль',
    'resetting.flash.success' => 'Пароль успешно сброшен',
    'resetting.email.subject' => 'Сброс пароля',
    'resetting.email.message' => 'Привествуем %firstName% %lastName%!

Для сброса пароля - пожалуйста пройдите по ссылке %confirmationUrl%

С наилучшими пожеланиями,
команда сайта.
',
    'layout.logout' => 'Выход',
    'layout.login' => 'Вход',
    'layout.register' => 'Регистрация',
    'layout.logged_in_as' => '%firstName% %lastName%',
    'fos_user_profile_form_user_firstName' => 'Имя:',
    'fos_user_profile_form_user_lastName' => 'Фамилия:',
    'fos_user_profile_form_user_role' => 'Выберите роль:',
    'fos_user_profile_form_user_name_spec' => 'Выберите специальность:',
    'fos_user_profile_form_spec' => 'Специальность:',
    'fos_user_profile_form_grouppa' => 'Группа:',
    'fos_user_registration_form_role' => 'Выберите роль:',
    'fos_user_registration_form_name_spec' => 'Выберите специальность:',
    'fos_user_registration_form_firstName' => 'Имя:',
    'fos_user_registration_form_lastName' => 'Фамилия:',
    'my_profile_plainPassword_second' => 'Повторите пароль',
    'my_profile_plainPassword_first' => 'Пароль',
    'profile.show.firstName' => 'Имя',
    'profile.show.lastName' => 'Фамилия',
    'prof.edit.submit' => 'Принять изменения',
  ),
  'SonataUserBundle' => 
  array (
    'breadcrumb.link_user_list' => 'Пользователи',
    'breadcrumb.link_user_create' => 'Создать пользователя',
    'breadcrumb.link_user_edit' => 'Редактировать',
    'breadcrumb.link_group_list' => 'Группы',
    'breadcrumb.link_group_create' => 'Создать группу',
    'breadcrumb.link_group_edit' => 'Редактировать',
    'users' => 'Пользователи',
    'groups' => 'Группы',
    'switch_user_exit' => 'Exit impersonating mode',
    'switch_user' => 'Impersonate User',
    'user_block_logout' => 'Выход',
    'form.label_username' => 'Имя пользователя',
    'form.label_email' => 'E-Mail',
    'form.label_plain_password' => 'Открытый пароль',
    'form.label_groups' => 'Группы',
    'form.label_roles' => 'Роли',
    'form.label_locked' => 'Заблокирован',
    'form.label_expired' => 'Expired',
    'form.label_enabled' => 'Включен',
    'form.label_credentials_expired' => 'Пароль устарел',
    'form.label_name' => 'Имя',
    'filter.label_username' => 'Имя пользователя',
    'filter.label_name' => 'Имя',
    'filter.label_email' => 'E-Mail',
    'filter.label_locked' => 'Заблокирован',
    'filter.label_id' => 'ID',
    'list.label_username' => 'Имя пользователя',
    'list.label_name' => 'Имя',
    'list.label_email' => 'E-Mail',
    'list.label_locked' => 'Заблокирован',
    'list.label_enabled' => 'Активен',
    'list.label_created_at' => 'Дата создания',
    'list.label_impersonating' => 'Impersonate User',
    'list.label_roles' => 'Роли',
    'label_two_step_code' => 'label_two_step_code',
    'message_two_step_code_help' => 'message_two_step_code_help',
    'label_two_step_code_error' => 'label_two_step_code_error',
    'sonata_user' => 'Users',
  ),
  'SonataAdminBundle' => 
  array (
    'action_delete' => 'Удалить',
    'btn_batch' => 'Ok',
    'btn_create' => 'Создать',
    'btn_create_and_edit_again' => 'Создать и редактировать',
    'btn_create_and_create_a_new_one' => 'Создать и добавить новый',
    'btn_filter' => 'Фильтровать',
    'btn_update_and_edit_again' => 'Сохранить',
    'btn_update_and_return_to_list' => 'Сохранить и вернуться к списку',
    'link_delete' => 'Удалить',
    'link_action_create' => 'Добавить новый',
    'link_action_list' => 'Возврат к списку',
    'link_action_show' => 'Показать',
    'link_action_edit' => 'Редактировать "%name%"',
    'link_add' => 'Добавить новый',
    'link_list' => 'Список',
    'link_reset_filter' => 'Сброс',
    'title_create' => 'Создать',
    'title_dashboard' => 'Панель администрирования',
    'title_edit' => 'Редактировать',
    'title_list' => 'Список',
    'link_next_pager' => 'Следующая',
    'link_previous_pager' => 'Предыдущая',
    'link_first_pager' => 'link_first_pager',
    'link_last_pager' => 'link_last_pager',
    'Admin' => 'Администрирование',
    'link_expand' => 'развернуть/свернуть',
    'no_result' => 'Нет результатов',
    'confirm_msg' => 'Вы уверены?',
    'action_edit' => 'Редактировать',
    'action_show' => 'Показать',
    'all_elements' => 'Применить для всех',
    'flash_batch_empty' => 'Действие отменено. Нет выбранных объектов.',
    'flash_create_success' => 'Элемент создан успешно',
    'flash_create_error' => 'При создании элемента произошла ошибка.',
    'flash_edit_success' => 'Элемент успешно обновлен.',
    'flash_edit_error' => 'Во время обновления элемента произошла ошибка.',
    'flash_batch_delete_success' => 'Выбранные элементы были успешно удалены.',
    'flash_batch_delete_error' => 'Во время удаления выбранных элементов произошла ошибка.',
    'flash_delete_error' => 'Во время удаления элемента произошла ошибка.',
    'flash_delete_success' => 'Элемент успешно удален.',
    'breadcrumb.link_dashboard' => '⌂',
    'title_delete' => 'Подтверждение удаления',
    'message_delete_confirmation' => 'Вы действительно хотите удалить выбранный элемент?',
    'btn_delete' => 'Да, удалить',
    'title_batch_confirmation' => 'Подтверждение пакетного действия',
    'message_batch_confirmation' => 'Вы действительно хотите произвести выбранное действие для данных элементов?',
    'btn_execute_batch_action' => 'Да, выполнить',
    'label_type_yes' => 'да',
    'label_type_no' => 'нет',
    'label_type_contains' => 'содержит',
    'label_type_not_contains' => 'не содержит',
    'label_type_equals' => 'равен',
    'label_type_not_equals' => 'не равен',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'пусто',
    'label_date_type_not_null' => 'не пуст',
    'label_date_type_between' => 'между',
    'label_date_type_not_between' => 'не между',
    'label_filters' => 'Фильтры',
    'delete_or' => 'или',
    'link_action_history' => 'Изменения',
    'td_action' => 'td_action',
    'td_revision' => 'Изменения',
    'td_timestamp' => 'Дата',
    'td_username' => 'Автор',
    'label_view_revision' => 'Просмотр изменений',
    'list_results_count' => '{0} Нет данных |{1} Всего %count% запись |{2,3,4} Всего %count% записи |[5,Inf] Всего %count% записей',
    'label_export_download' => 'Экспорт: ',
    'loading_information' => 'Загрузка информации…',
  ),
));



return $catalogue;

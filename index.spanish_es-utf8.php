<?php
// Version: 2.0; index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'es_ES';
$txt['lang_dictionary'] = 'es';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = false;

$txt['days'] = array('domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado');
$txt['days_short'] = array('dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
$txt['months_titles'] = array(1 => 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
$txt['months_short'] = array(1 => 'ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic');

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['newmessages0'] = 'es nuevo';
$txt['newmessages1'] = 'son nuevos';
$txt['newmessages3'] = 'Nuevo';
$txt['newmessages4'] = ',';

$txt['admin'] = 'Admin';
$txt['moderate'] = 'Moderar';

$txt['save'] = 'Guardar';

$txt['modify'] = 'Modificar';
$txt['forum_index'] = '%1$s - Índice';
$txt['members'] = 'Usuarios';
$txt['board_name'] = 'Nombre del foro';
$txt['posts'] = 'Mensajes';

$txt['member_postcount'] = 'Mensajes';
$txt['no_subject'] = '(Sin título)';
$txt['view_profile'] = 'Ver perfil';
$txt['guest_title'] = 'Invitado';
$txt['author'] = 'Autor';
$txt['on'] = 'sí';
$txt['remove'] = 'Eliminar';
$txt['start_new_topic'] = 'Escribir nuevo tema';

$txt['login'] = 'Iniciar sesión';
// Use numeric entities in the below string.
$txt['username'] = 'Usuario';
$txt['password'] = 'Contrase&#241;a';

$txt['username_no_exist'] = 'Ese usuario no existe.';
$txt['no_user_with_email'] = 'No hay usuarios asociados con esa dirección de correo.';

$txt['board_moderator'] = 'Moderador del foro';
$txt['remove_topic'] = 'Eliminar tema';
$txt['topics'] = 'Temas';
$txt['modify_msg'] = 'Modificar mensaje';
$txt['name'] = 'Nombre';
$txt['email'] = 'Correo';
$txt['subject'] = 'Tema';
$txt['message'] = 'Mensaje';
$txt['redirects'] = 'Redirecciones';
$txt['quick_modify'] = 'Modificar';

$txt['choose_pass'] = 'Elegir contraseña';
$txt['verify_pass'] = 'Verificar contraseña';
$txt['position'] = 'Posición';

$txt['profile_of'] = 'Ver el perfil de';
$txt['total'] = 'Total';
$txt['posts_made'] = 'Mensajes';
$txt['website'] = 'Sitio web';
$txt['register'] = 'Registrar';
$txt['warning_status'] = 'Estado de advertencia';
$txt['user_warn_watch'] = 'El usuario está en la lista de vigilancia de moderación';
$txt['user_warn_moderate'] = 'Los mensajes del usuario deben ser aprobados antes de aparecer';
$txt['user_warn_mute'] = 'Al usuario no se le permite publicar mensajes';
$txt['warn_watch'] = 'Vigilado';
$txt['warn_moderate'] = 'Moderado';
$txt['warn_mute'] = 'Silenciado';

$txt['message_index'] = 'Índice de mensajes';
$txt['news'] = 'Noticias';
$txt['home'] = 'Inicio';

$txt['lock_unlock'] = 'Bloquear/desbloquear tema';
$txt['post'] = 'Mensaje';
$txt['error_occured'] = 'Ha ocurrido un error';
$txt['at'] = 'a las';
$txt['logout'] = 'Cerrar sesión';
$txt['started_by'] = 'Iniciado por';
$txt['replies'] = 'Respuestas';
$txt['last_post'] = 'Último mensaje';
$txt['admin_login'] = 'Entrar como administrador';
// Use numeric entities in the below string.
$txt['topic'] = 'Tema';
$txt['help'] = 'Ayuda';
$txt['notify'] = 'Notificar';
$txt['unnotify'] = 'Dejar de notificar';
$txt['notify_request'] = '¿Quieres recibir un correo de notificación si alguien responde a este tema?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'Saludos,' . "\n" . 'El equipo de ' . $context['forum_name'] . '.';
$txt['notify_replies'] = 'Notificar respuestas';
$txt['move_topic'] = 'Mover hilo';
$txt['move_to'] = 'Mover a';
$txt['pages'] = 'Páginas';
$txt['users_active'] = 'Usuarios activos en los últimos %1$d minutos';
$txt['personal_messages'] = 'Mensajes privados';
$txt['reply_quote'] = 'Responder citando';
$txt['reply'] = 'Responder';
$txt['reply_noun'] = 'Respuesta';
$txt['approve'] = 'Aprobar';
$txt['approve_all'] = 'aprobar todo';
$txt['awaiting_approval'] = 'Esperando aprobación';
$txt['attach_awaiting_approve'] = 'Archivos adjuntos esperando aprobación';
$txt['post_awaiting_approval'] = 'Nota: este mensaje está esperando ser aprobado por un administrador.';
$txt['there_are_unapproved_topics'] = 'Hay %1$s temas y %2$s mensajes esperando ser aprobados en este foro. Haz clic <a href="%3$s">aquí</a> para verlos todos.';

$txt['msg_alert_none'] = 'No hay mensajes...';
$txt['msg_alert_you_have'] = 'tienes';
$txt['msg_alert_messages'] = 'mensajes';
$txt['remove_message'] = 'Eliminar este mensaje';

$txt['online_users'] = 'Usuarios conectados';
$txt['personal_message'] = 'Mensaje personal';
$txt['jump_to'] = 'Ir a';
$txt['go'] = 'ir';
$txt['are_sure_remove_topic'] = '¿Estás seguro de querer eliminar este tema?';
$txt['yes'] = 'Sí';
$txt['no'] = 'No';

$txt['search_end_results'] = 'Fin de los resultados';
$txt['search_on'] = 'sí';

$txt['search'] = 'Buscar';
$txt['all'] = 'Todo';

$txt['back'] = 'Atrás';
$txt['password_reminder'] = 'Recordatorio de contraseña';
$txt['topic_started'] = 'Tema iniciado por';
$txt['title'] = 'Título';
$txt['post_by'] = 'Mensaje de';
$txt['memberlist_searchable'] = 'Lista de usuarios del foro con opción de búsqueda.';
$txt['welcome_member'] = 'Da la bienvenida a';
$txt['admin_center'] = 'Centro de administración';
$txt['last_edit'] = 'Última edición';
$txt['notify_deactivate'] = '¿Te gustaría desactivar la notificación de nuevos mensajes de este tema?';

$txt['recent_posts'] = 'Mensajes recientes';

$txt['location'] = 'Lugar';
$txt['gender'] = 'Sexo';
$txt['date_registered'] = 'Fecha de registro';

$txt['recent_view'] = 'Ver los mensajes más recientes del foro.';
$txt['recent_updated'] = 'es el último tema actualizado';

$txt['male'] = 'Hombre';
$txt['female'] = 'Mujer';

$txt['error_invalid_characters_username'] = 'Letra no válida usada en el nombre de usuario.';

$txt['welcome_guest'] = 'Holw, <strong>%1$s</strong>. <a href="' . $scripturl . '?action=login">Inicia sesión</a> o <a href="' . $scripturl . '?action=register">regístrate</a>.';
$txt['login_or_register'] = '<a href="' . $scripturl . '?action=login">Inicia sesión</a> o <a href="' . $scripturl . '?action=register">regístrate</a>.';
$txt['welcome_guest_activate'] = '<br />¿Has perdido tu <a href="' . $scripturl . '?action=activate">correo de activación</a>?';
$txt['hello_member'] = 'Hola,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Buenas,';
$txt['welmsg_hey'] = 'Hola,';
$txt['welmsg_welcome'] = 'Buenas,';
$txt['welmsg_please'] = '';
$txt['select_destination'] = 'Selecciona un destino';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Publicado por';

$txt['icon_smiley'] = 'Emoticono';
$txt['icon_angry'] = 'Enfadado';
$txt['icon_cheesy'] = 'Contento';
$txt['icon_laugh'] = 'Risa';
$txt['icon_sad'] = 'Triste';
$txt['icon_wink'] = 'Guiño';
$txt['icon_grin'] = 'Sonrisa';
$txt['icon_shocked'] = 'Sorprendido';
$txt['icon_cool'] = 'Mola';
$txt['icon_huh'] = 'Uh';
$txt['icon_rolleyes'] = 'Sarcástico';
$txt['icon_tongue'] = 'Lengua';
$txt['icon_embarrassed'] = 'Avergonzado';
$txt['icon_lips'] = 'Boca cerrada';
$txt['icon_undecided'] = 'Indeciso';
$txt['icon_kiss'] = 'Beso';
$txt['icon_cry'] = 'Llorar';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderadores';

$txt['mark_board_read'] = 'Marcar los temas de este foro como leídos';
$txt['views'] = 'Visitas';
$txt['new'] = 'Nuevo';

$txt['view_all_members'] = 'Ver todos los usuarios';
$txt['view'] = 'Ver';

$txt['viewing_members'] = 'Viendo los usuarios %1$s a %2$s';
$txt['of_total_members'] = 'de %1$s usuarios';

$txt['forgot_your_password'] = '¿Has olvidado tu contraseña?';

$txt['date'] = 'Fecha';
// Use numeric entities in the below string.
$txt['from'] = 'De';
$txt['check_new_messages'] = 'Comprobar si hay mensajes nuevos';
$txt['to'] = 'A';

$txt['board_topics'] = 'Temas';
$txt['members_title'] = 'Usuarios';
$txt['members_list'] = 'Lista de usuarios';
$txt['new_posts'] = 'Nuevos mensajes';
$txt['old_posts'] = 'No hay nuevos mensajes';
$txt['redirect_board'] = 'Redirigir foro';

$txt['sendtopic_send'] = 'Envia';
$txt['report_sent'] = 'Tu informe ha sido enviado con éxito.';

$txt['time_offset'] = 'Huso horario';
$txt['or'] = 'o';

$txt['no_matches'] = 'No se han encontrado resultados';

$txt['notification'] = 'Notificación';

$txt['your_ban'] = 'Lo siento, %1$s, no se te permite la entrada a este foro.';
$txt['your_ban_expires'] = 'Este ban expirará el %1$s.';
$txt['your_ban_expires_never'] = 'Este ban no expirará.';
$txt['ban_continue_browse'] = 'Puedes seguir visitando el foro, pero como invitado.';

$txt['mark_as_read'] = 'Marcar TODOS los mensajes como leídos';

$txt['hot_topics'] = 'Tema activo (más de %1$d respuestas)';
$txt['very_hot_topics'] = 'Tema muy activo (más de %1$d respuestas)';
$txt['locked_topic'] = 'Tema bloqueado';
$txt['normal_topic'] = 'Tema normal';
$txt['participation_caption'] = 'Tema en el que has escrito tú';

$txt['go_caps'] = 'IR';

$txt['print'] = 'Imprimir';
$txt['profile'] = 'Perfil';
$txt['topic_summary'] = 'Resumen del tema';
$txt['not_applicable'] = 'N/D';
$txt['message_lowercase'] = 'mensaje';
$txt['name_in_use'] = 'Este nombre ya está en uso por otro usuario.';

$txt['total_members'] = 'Total de usuarios';
$txt['total_posts'] = 'Total de mensajes';
$txt['total_topics'] = 'Total de temas';

$txt['mins_logged_in'] = 'Minutos durante los cuales permanecerás conectado';

$txt['preview'] = 'Previsualizar';
$txt['always_logged_in'] = 'Siempre quedar conectado';

$txt['logged'] = 'Registrado';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'Web';

$txt['by'] = 'por';

$txt['hours'] = 'horas';
$txt['days_word'] = 'días';

$txt['newest_member'] = ', nuestro último usuario registrado.';

$txt['search_for'] = 'Buscar';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hola.+¿Estás+ahí?';
$txt['aim_title'] = 'AOL Instant Messenger';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ Messenger';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN Messenger';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Yahoo Instant Messenger';

$txt['maintain_mode_on'] = 'Recuerda, este foro está en "Modo de mantenimiento".';

$txt['read'] = 'Leído';
$txt['times'] = 'veces';

$txt['forum_stats'] = 'Estadísticas del foro';
$txt['latest_member'] = 'Último usuario';
$txt['total_cats'] = 'Total de categorías';
$txt['latest_post'] = 'Último mensaje';

$txt['you_have'] = 'Tienes';
$txt['click'] = 'haz clic';
$txt['here'] = 'aquí';
$txt['to_view'] = 'para verlos.';

$txt['total_boards'] = 'Total de subforos';

$txt['print_page'] = 'Imprimir página';

$txt['valid_email'] = 'Debe ser una dirección de correo válida.';

$txt['geek'] = '¡Soy un geek!';
$txt['info_center_title'] = '%1$s - Centro de información';

$txt['send_topic'] = 'Enviar este tema';

$txt['sendtopic_title'] = 'Enviar el tema &quot;%1$s&quot; a un amigo.';
$txt['sendtopic_sender_name'] = 'Tu nombre';
$txt['sendtopic_sender_email'] = 'Tu correo';
$txt['sendtopic_receiver_name'] = 'Nombre del destinatario';
$txt['sendtopic_receiver_email'] = 'Correo del destinatario';
$txt['sendtopic_comment'] = 'Añadir un comentario';

$txt['allow_user_email'] = 'Permitir que otros usuarios me envíen correos';

$txt['check_all'] = 'Comprobar todo';

// Use numeric entities in the below string.
$txt['database_error'] = 'Error en la base de datos';
$txt['try_again'] = 'Vuelve a intentarlo. Si vuelves a ver este mensaje, informa a un administrador.';
$txt['file'] = 'Archivo';
$txt['line'] = 'Línea';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF has detected and automatically tried to repair an error in your database.  If you continue to have problems, or continue to receive these emails, please contact your host.';
$txt['database_error_versions'] = '<strong>Note:</strong> It appears that your database <em>may</em> require an upgrade. Your forum\'s files are currently at version %1$s, while your database is at version %2$s. The above error might possibly go away if you execute the latest version of upgrade.php.';
$txt['template_parse_error'] = 'Template Parse Error!';
$txt['template_parse_error_message'] = 'It seems something has gone sour on the forum with the template system.  This problem should only be temporary, so please come back later and try again.  If you continue to see this message, please contact the administrator.<br /><br />You can also try <a href="javascript:location.reload();">refreshing this page</a>.';
$txt['template_parse_error_details'] = 'There was a problem loading the <tt><strong>%1$s</strong></tt> template or language file.  Please check the syntax and try again - remember, single quotes (<tt>\'</tt>) often have to be escaped with a slash (<tt>\\</tt>).  To see more specific error information from PHP, try <a href="' . $boardurl . '%1$s">accessing the file directly</a>.<br /><br />You may want to try to <a href="javascript:location.reload();">refresh this page</a> or <a href="' . $scripturl . '?theme=1">use the default theme</a>.';

$txt['today'] = '<strong>Today</strong> at ';
$txt['yesterday'] = '<strong>Yesterday</strong> at ';
$txt['new_poll'] = 'New poll';
$txt['poll_question'] = 'Question';
$txt['poll_vote'] = 'Submit Vote';
$txt['poll_total_voters'] = 'Total Members Voted';
$txt['shortcuts'] = 'shortcuts: hit alt+s to submit/post or alt+p to preview';
$txt['shortcuts_firefox'] = 'shortcuts: hit shift+alt+s to submit/post or shift+alt+p to preview';
$txt['poll_results'] = 'View results';
$txt['poll_lock'] = 'Lock Voting';
$txt['poll_unlock'] = 'Unlock Voting';
$txt['poll_edit'] = 'Edit Poll';
$txt['poll'] = 'Poll';
$txt['one_day'] = '1 Day';
$txt['one_week'] = '1 Week';
$txt['one_month'] = '1 Month';
$txt['forever'] = 'Forever';
$txt['quick_login_dec'] = 'Login with username, password and session length';
$txt['one_hour'] = '1 Hour';
$txt['moved'] = 'MOVED';
$txt['moved_why'] = 'Please enter a brief description as to<br />why this topic is being moved.';
$txt['board'] = 'Board';
$txt['in'] = 'in';
$txt['sticky_topic'] = 'Sticky Topic';

$txt['delete'] = 'Delete';

$txt['your_pms'] = 'Your Personal Messages';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[More Stats]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Code';
$txt['code_select'] = '[Select]';
$txt['quote_from'] = 'Quote from';
$txt['quote'] = 'Quote';

$txt['merge_to_topic_id'] = 'ID of target topic';
$txt['split'] = 'Split Topic';
$txt['merge'] = 'Merge Topics';
$txt['subject_new_topic'] = 'Subject For New Topic';
$txt['split_this_post'] = 'Only split this post.';
$txt['split_after_and_this_post'] = 'Split topic after and including this post.';
$txt['select_split_posts'] = 'Select posts to split.';
$txt['new_topic'] = 'New Topic';
$txt['split_successful'] = 'Topic successfully split into two topics.';
$txt['origin_topic'] = 'Origin Topic';
$txt['please_select_split'] = 'Please select which posts you wish to split.';
$txt['merge_successful'] = 'Topics successfully merged.';
$txt['new_merged_topic'] = 'Newly Merged Topic';
$txt['topic_to_merge'] = 'Topic to be merged';
$txt['target_board'] = 'Target board';
$txt['target_topic'] = 'Target topic';
$txt['merge_confirm'] = 'Are you sure you want to merge';
$txt['with'] = 'with';
$txt['merge_desc'] = 'This function will merge the messages of two topics into one topic. The messages will be sorted according to the time of posting. Therefore the earliest posted message will be the first message of the merged topic.';

$txt['set_sticky'] = 'Set topic sticky';
$txt['set_nonsticky'] = 'Set topic non-sticky';
$txt['set_lock'] = 'Lock topic';
$txt['set_unlock'] = 'Unlock topic';

$txt['search_advanced'] = 'Advanced search';

$txt['security_risk'] = 'MAJOR SECURITY RISK:';
$txt['not_removed'] = 'You have not removed ';
$txt['not_removed_extra'] ='%1$s is a backup of %2$s that was not generated by SMF. It can be accessed directly and used to gain unauthorised access to your forum. You should delete it immediately.';

$txt['cache_writable_head'] = 'Performance Warning';
$txt['cache_writable'] = 'The cache directory is not writable - this will adversely affect the performance of your forum.';

$txt['page_created'] = 'Page created in ';
$txt['seconds_with'] = ' seconds with ';
$txt['queries'] = ' queries.';

$txt['report_to_mod_func'] = 'Use this function to inform the moderators and administrators of an abusive or wrongly posted message.<br /><em>Please note that your email address will be revealed to the moderators if you use this.</em>';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Personal Message (Online)';
$txt['pm_offline'] = 'Personal Message (Offline)';
$txt['status'] = 'Status';

$txt['go_up'] = 'Go Up';
$txt['go_down'] = 'Go Down';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2011</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Birthdays:';
$txt['events'] = 'Events:';
$txt['birthdays_upcoming'] = 'Upcoming Birthdays:';
$txt['events_upcoming'] = 'Upcoming Events:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Month:';
$txt['calendar_year'] = 'Year:';
$txt['calendar_day'] = 'Day:';
$txt['calendar_event_title'] = 'Event Title';
$txt['calendar_event_options'] = 'Event Options';
$txt['calendar_post_in'] = 'Post In:';
$txt['calendar_edit'] = 'Edit Event';
$txt['event_delete_confirm'] = 'Delete this event?';
$txt['event_delete'] = 'Delete Event';
$txt['calendar_post_event'] = 'Post Event';
$txt['calendar'] = 'Calendar';
$txt['calendar_link'] = 'Link to Calendar';
$txt['calendar_upcoming'] = 'Upcoming Calendar';
$txt['calendar_today'] = 'Today\'s Calendar';
$txt['calendar_week'] = 'Week';
$txt['calendar_week_title'] = 'Week %1$d of %2$d';
$txt['calendar_numb_days'] = 'Number of Days:';
$txt['calendar_how_edit'] = 'how do you edit these events?';
$txt['calendar_link_event'] = 'Link Event To Post:';
$txt['calendar_confirm_delete'] = 'Are you sure you want to delete this event?';
$txt['calendar_linked_events'] = 'Linked Events';
$txt['calendar_click_all'] = 'click to see all %1$s';

$txt['moveTopic1'] = 'Post a redirection topic';
$txt['moveTopic2'] = 'Change the topic\'s subject';
$txt['moveTopic3'] = 'New subject';
$txt['moveTopic4'] = 'Change every message\'s subject';
$txt['move_topic_unapproved_js'] = 'Warning! This topic has not yet been approved.\\n\\nIt is not recommended that you create a redirection topic unless you intend to approve the post immediately following the move.';

$txt['theme_template_error'] = 'Unable to load the \'%1$s\' template.';
$txt['theme_language_error'] = 'Unable to load the \'%1$s\' language file.';

$txt['parent_boards'] = 'Child Boards';

$txt['smtp_no_connect'] = 'Could not connect to SMTP host';
$txt['smtp_port_ssl'] = 'SMTP port setting incorrect; it should be 465 for SSL servers.';
$txt['smtp_bad_response'] = 'Couldn\'t get mail server response codes';
$txt['smtp_error'] = 'Ran into problems sending Mail. Error: ';
$txt['mail_send_unable'] = 'Unable to send mail to the email address \'%1$s\'';

$txt['mlist_search'] = 'Search For Members';
$txt['mlist_search_again'] = 'Search again';
$txt['mlist_search_email'] = 'Search by email address';
$txt['mlist_search_messenger'] = 'Search by messenger nickname';
$txt['mlist_search_group'] = 'Search by position';
$txt['mlist_search_name'] = 'Search by name';
$txt['mlist_search_website'] = 'Search by website';
$txt['mlist_search_results'] = 'Search results for';
$txt['mlist_search_by'] = 'Search by %1$s';
$txt['mlist_menu_view'] = 'View the memberlist';

$txt['attach_downloaded'] = 'downloaded';
$txt['attach_viewed'] = 'viewed';
$txt['attach_times'] = 'times';

$txt['settings'] = 'Settings';
$txt['never'] = 'Never';
$txt['more'] = 'more';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = 'Sorry %1$s, you are banned from posting and sending personal messages on this forum.';
$txt['ban_reason'] = 'Reason';

$txt['tables_optimized'] = 'Database tables optimized';

$txt['add_poll'] = 'Add poll';
$txt['poll_options6'] = 'You may only select up to %1$s options.';
$txt['poll_remove'] = 'Remove Poll';
$txt['poll_remove_warn'] = 'Are you sure you want to remove this poll from the topic?';
$txt['poll_results_expire'] = 'Results will be shown when voting has closed';
$txt['poll_expires_on'] = 'Voting closes';
$txt['poll_expired_on'] = 'Voting closed';
$txt['poll_change_vote'] = 'Remove Vote';
$txt['poll_return_vote'] = 'Voting options';
$txt['poll_cannot_see'] = 'You cannot see the results of this poll at the moment.';

$txt['quick_mod_approve'] = 'Approve selected';
$txt['quick_mod_remove'] = 'Remove selected';
$txt['quick_mod_lock'] = 'Lock/Unlock selected';
$txt['quick_mod_sticky'] = 'Sticky/Unsticky selected';
$txt['quick_mod_move'] = 'Move selected to';
$txt['quick_mod_merge'] = 'Merge selected';
$txt['quick_mod_markread'] = 'Mark selected read';
$txt['quick_mod_go'] = 'Go!';
$txt['quickmod_confirm'] = 'Are you sure you want to do this?';

$txt['spell_check'] = 'Spell Check';

$txt['quick_reply'] = 'Quick Reply';
$txt['quick_reply_desc'] = 'With <em>Quick-Reply</em> you can write a post when viewing a topic without loading a new page. You can still use bulletin board code and smileys as you would in a normal post.';
$txt['quick_reply_warning'] = 'Warning: this topic is currently locked! Only admins and moderators can reply.';
$txt['quick_reply_verification'] = 'After submitting your post you will be directed to the regular post page to verify your post %1$s.';
$txt['quick_reply_verification_guests'] = '(required for all guests)';
$txt['quick_reply_verification_posts'] = '(required for all users with less than %1$d posts)';
$txt['wait_for_approval'] = 'Note: this post will not display until it\'s been approved by a moderator.';

$txt['notification_enable_board'] = 'Are you sure you wish to enable notification of new topics for this board?';
$txt['notification_disable_board'] = 'Are you sure you wish to disable notification of new topics for this board?';
$txt['notification_enable_topic'] = 'Are you sure you wish to enable notification of new replies for this topic?';
$txt['notification_disable_topic'] = 'Are you sure you wish to disable notification of new replies for this topic?';

$txt['report_to_mod'] = 'Report to moderator';
$txt['issue_warning_post'] = 'Issue a warning because of this message';

$txt['unread_topics_visit'] = 'Recent Unread Topics';
$txt['unread_topics_visit_none'] = 'No unread topics found since your last visit.  <a href="' . $scripturl . '?action=unread;all">Click here to try all unread topics</a>.';
$txt['unread_topics_all'] = 'All Unread Topics';
$txt['unread_replies'] = 'Updated Topics';

$txt['who_title'] = 'Who\'s Online';
$txt['who_and'] = ' and ';
$txt['who_viewing_topic'] = ' are viewing this topic.';
$txt['who_viewing_board'] = ' are viewing this board.';
$txt['who_member'] = 'Member';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_css'] = 'Valid CSS!';

// Current footer strings
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Guest';
$txt['guests'] = 'Guests';
$txt['user'] = 'User';
$txt['users'] = 'Users';
$txt['hidden'] = 'Hidden';
$txt['buddy'] = 'Buddy';
$txt['buddies'] = 'Buddies';
$txt['most_online_ever'] = 'Most Online Ever';
$txt['most_online_today'] = 'Most Online Today';

$txt['merge_select_target_board'] = 'Select the target board of the merged topic';
$txt['merge_select_poll'] = 'Select which poll the merged topic should have';
$txt['merge_topic_list'] = 'Select topics to be merged';
$txt['merge_select_subject'] = 'Select subject of merged topic';
$txt['merge_custom_subject'] = 'Custom subject';
$txt['merge_enforce_subject'] = 'Change the subject of all the messages';
$txt['merge_include_notifications'] = 'Include notifications?';
$txt['merge_check'] = 'Merge?';
$txt['merge_no_poll'] = 'No poll';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Current Icon';
$txt['message_icon'] = 'Message Icon';

$txt['smileys_current'] = 'Current Smiley Set';
$txt['smileys_none'] = 'No Smileys';
$txt['smileys_forum_board_default'] = 'Forum/Board Default';

$txt['search_results'] = 'Search Results';
$txt['search_no_results'] = 'Sorry, no matches were found';

$txt['totalTimeLogged1'] = 'Total time logged in: ';
$txt['totalTimeLogged2'] = ' days, ';
$txt['totalTimeLogged3'] = ' hours and ';
$txt['totalTimeLogged4'] = ' minutes.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'h ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'There is';
$txt['approve_thereare'] = 'There are';
$txt['approve_member'] = 'one member';
$txt['approve_members'] = 'members';
$txt['approve_members_waiting'] = 'awaiting approval.';

$txt['notifyboard_turnon'] = 'Do you want a notification email when someone posts a new topic in this board?';
$txt['notifyboard_turnoff'] = 'Are you sure you do not want to receive new topic notifications for this board?';

$txt['activate_code'] = 'Your activation code is';

$txt['find_members'] = 'Find Members';
$txt['find_username'] = 'Name, username, or email address';
$txt['find_buddies'] = 'Show Buddies Only?';
$txt['find_wildcards'] = 'Allowed Wildcards: *, ?';
$txt['find_no_results'] = 'No results found';
$txt['find_results'] = 'Results';
$txt['find_close'] = 'Close';

$txt['unread_since_visit'] = 'Show unread posts since last visit.';
$txt['show_unread_replies'] = 'Show new replies to your posts.';

$txt['change_color'] = 'Change Color';

$txt['quickmod_delete_selected'] = 'Remove Selected';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'You have received one or more new personal messages.\\nWould you like to open a new window to view them?';

$txt['previous_next_back'] = '&laquo; previous';
$txt['previous_next_forward'] = 'next &raquo;';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'This topic has been moved to ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Shrink or expand the header.';

$txt['mark_unread'] = 'Mark unread';

$txt['ssi_not_direct'] = 'Please don\'t access SSI.php by URL directly; you may want to use the path (%1$s) or add ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php was unable to load a session!  This may cause problems with logout and other functions - please make sure SSI.php is included before *anything* else in all your scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Preview post';
$txt['preview_fetch'] = 'Fetching preview...';
$txt['preview_new'] = 'New message';
$txt['error_while_submitting'] = 'The following error or errors occurred while posting this message:';
$txt['error_old_topic'] = 'Warning: this topic has not been posted in for at least %1$d days.<br />Unless you\'re sure you want to reply, please consider starting a new topic.';

$txt['split_selected_posts'] = 'Selected posts';
$txt['split_selected_posts_desc'] = 'The posts below will form a new topic after splitting.';
$txt['split_reset_selection'] = 'reset selection';

$txt['modify_cancel'] = 'Cancel';
$txt['mark_read_short'] = 'Mark Read';

$txt['pm_short'] = 'My Messages';
$txt['pm_menu_read'] = 'Read your messages';
$txt['pm_menu_send'] = 'Send a message';

$txt['hello_member_ndt'] = 'Hello';

$txt['unapproved_posts'] = 'Unapproved Posts (Topics: %1$d, Posts: %2$d)';

$txt['ajax_in_progress'] = 'Loading...';

$txt['mod_reports_waiting'] = 'There are currently %1$d moderator reports open.';

$txt['view_unread_category'] = 'Unread Posts';
$txt['verification'] = 'Verification';
$txt['visual_verification_description'] = 'Type the letters shown in the picture';
$txt['visual_verification_sound'] = 'Listen to the letters';
$txt['visual_verification_request_new'] = 'Request another image';

// Sub menu labels
$txt['summary'] = 'Summary';
$txt['account'] = 'Account Settings';
$txt['forumprofile'] = 'Forum Profile';

$txt['modSettings_title'] = 'Features and Options';
$txt['package'] = 'Package Manager';
$txt['errlog'] = 'Error Log';
$txt['edit_permissions'] = 'Permissions';
$txt['mc_unapproved_attachments'] = 'Unapproved Attachments';
$txt['mc_unapproved_poststopics'] = 'Unapproved Posts and Topics';
$txt['mc_reported_posts'] = 'Reported Posts';
$txt['modlog_view'] = 'Moderation Log';
$txt['calendar_menu'] = 'View Calendar';

//!!! Send email strings - should move?
$txt['send_email'] = 'Send Email';
$txt['send_email_disclosed'] = 'Note this will be visible to the recipient.';
$txt['send_email_subject'] = 'Email Subject';

$txt['ignoring_user'] = 'You are ignoring this user.';
$txt['show_ignore_user_post'] = 'Show me the post.';

$txt['spider'] = 'Spider';
$txt['spiders'] = 'Spiders';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Filesize';
$txt['subscribe_webslice'] = 'Subscribe to Webslice';

// Restore topic
$txt['restore_topic'] = 'Restore Topic';
$txt['restore_message'] = 'Restore';
$txt['quick_mod_restore'] = 'Restore Selected';

// Editor prompt.
$txt['prompt_text_email'] = 'Please enter the email address.';
$txt['prompt_text_ftp'] = 'Please enter the ftp address.';
$txt['prompt_text_url'] = 'Please enter the URL you wish to link to.';
$txt['prompt_text_img'] = 'Enter image location';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Delete Item';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Templates: ';
$txt['debug_subtemplates'] = 'Sub templates: ';
$txt['debug_language_files'] = 'Language files: ';
$txt['debug_stylesheets'] = 'Style sheets: ';
$txt['debug_files_included'] = 'Files included: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'show';
$txt['debug_cache_hits'] = 'Cache hits: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss for %2$s bytes';
$txt['debug_queries_used'] = 'Queries used: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Queries used: %1$d, %2$d warnings.';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> line <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'which took %1$s seconds.';
$txt['debug_query_which_took_at'] = 'which took %1$s seconds at %2$s into request.';
$txt['debug_show_queries'] = '[Show Queries]';
$txt['debug_hide_queries'] = '[Hide Queries]';

?>
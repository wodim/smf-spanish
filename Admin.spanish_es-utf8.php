<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Subforos';
$txt['admin_users'] = 'Usuarios';
$txt['admin_newsletters'] = 'Boletines de noticias';
$txt['admin_edit_news'] = 'Noticias';
$txt['admin_groups'] = 'Grupos de usuarios';
$txt['admin_members'] = 'Administrar usuarios';
$txt['admin_members_list'] = 'Debajo hay una lista de todos los usuarios que están actualmente registrados en tu foro.';
$txt['admin_next'] = 'Siguiente';
$txt['admin_censored_words'] = 'Palabras censuradas';
$txt['admin_censored_where'] = 'Pon la palabra que quieres que sea censurada a la izquierda, y qué aparecerá en su lugar a la derecha.';
$txt['admin_censored_desc'] = 'Debido a la naturaleza pública de los foros, puede que quieras evitar que los usuarios puedan escribir ciertas palabras.<br />Deja un apartado en blanco para eliminarlo.';
$txt['admin_reserved_names'] = 'Nombres reservados';
$txt['admin_template_edit'] = 'Edita la plantilla de tu foro';
$txt['admin_modifications'] = 'Configuración de la modificaicón';
$txt['admin_security_moderation'] = 'Seguridad y moderación';
$txt['admin_server_settings'] = 'Configuración del servidor';
$txt['admin_reserved_set'] = 'Configurar nombres reservados';
$txt['admin_reserved_line'] = 'Una palabra reservada por línea.';
$txt['admin_basic_settings'] = 'Esta página te permite cambiar la configuración básica del foro. Ten mucho cuidado con estas opciones ya que pueden hacer que el foro deje de funcionar.';
$txt['admin_maintain'] = 'Activar modo de mantenimiento';
$txt['admin_title'] = 'Título del foro';
$txt['admin_url'] = 'URL del foro';
$txt['cookie_name'] = 'Nombre de la cookie';
$txt['admin_webmaster_email'] = 'Dirección de correo del webmaster';
$txt['boarddir'] = 'Directorio de SMF';
$txt['sourcesdir'] = 'Directorio de las fuentes';
$txt['cachedir'] = 'Directorio de caché';
$txt['admin_news'] = 'Activar noticias';
$txt['admin_guest_post'] = 'Permitir que invitados publiquen';
$txt['admin_manage_members'] = 'Usuarios';
$txt['admin_main'] = 'Principal';
$txt['admin_config'] = 'Configuración';
$txt['admin_version_check'] = 'Comprobación de versiones detallada';
$txt['admin_smffile'] = 'Archivo SMF';
$txt['admin_smfpackage'] = 'Paquete SMF';
$txt['admin_maintenance'] = 'Mantenimiento';
$txt['admin_image_text'] = 'Mostrar botones como imágenes en lugar de texto';
$txt['admin_credits'] = 'Créditos';
$txt['admin_agreement'] = 'Mostrar esto y requerir que el usuario esté de acuerdo';
$txt['admin_agreement_default'] = 'Por defecto';
$txt['admin_agreement_select_language'] = 'Idioma a editar';
$txt['admin_agreement_select_language_change'] = 'Cambiar';
$txt['admin_delete_members'] = 'Eliminar los usuarios seleccionados';
$txt['admin_repair'] = 'Repair All Boards and Topics';
$txt['admin_main_welcome'] = 'Este es tu &quot;%1$s&quot;. Aquí podrás editar la configuración, realizar el mantenimiento del foro, ver registros, instalar paquetes, administrar temas y muchas otras cosas.<div style="margin-top: 1ex;">Si tienes algún problema, mira en la página de &quot;Ayuda y créditos&quot;. Si la información que hay aquí no te ayuda, puedes <a href="http://www.simplemachines.org/community/index.php" target="_blank" class="new_win">pedirnos ayuda</a>.</div>También puedes encontrar respuestas a tus preguntas haciendo clic en los símbolos <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%2$s" title="%3$s" /> para ver más información sobre las opciones.';
$txt['admin_news_desc'] = 'Pon una noticia en cada apartado. Las etiquetas BBC <span title="Negrita">[b]</span>, <span title="Cursiva">[i]</span> y <span title="Subrayado">[u]</span> y muchas más se permiten, al igual que los emoticonos. Vacía un apartado para eliminarlo.';
$txt['administrators'] = 'Administradores del foro';
$txt['admin_reserved_desc'] = 'Con los nombres reservados puedes evitar que los usuarios se registren usando cualquier nombre que desees evitar. Revisa las opciones que quieras usar en la parte de abajo antes de hacer el cambio.';
$txt['admin_activation_email'] = 'Enviar correo de activación a los nuevos miembros al registrarse';
$txt['admin_match_whole'] = 'Solo el nombre completo. Si no lo marcas, se buscará dentro del nombre.';
$txt['admin_match_case'] = 'Respetar mayúsculas y minúsculas';
$txt['admin_check_user'] = 'Comprobar nombre.';
$txt['admin_check_display'] = 'Comprobar nombre a mostrar.';
$txt['admin_newsletter_send'] = 'Puedes enviar correos a cualquier usuario desde esta página. Las direcciones de correo de los grupos de usuarios seleccionados deberían aparecer debajo, pero puedes eliminar o añadir las direcciones que quieras. Asegúrate de que las direcciones estén separadas usando puntos y comas: \'dirección1;dirección2\'.';
$txt['admin_fader_delay'] = 'Tiempo entre cada noticia';
$txt['admin_bbc'] = 'Mostrar los botones de formato BBC en las páginas de nuevo mensaje';

$txt['admin_backup_fail'] = 'Error al hacer una copia de seguridad de Settings.php &mdash; asegúrate de que Settings_bak.php existe y se puede escribir en él.';
$txt['modSettings_info'] = 'Cambiar las opciones que controlan cómo funciona este foro.';
$txt['database_server'] = 'Servidor de la base de datos';
$txt['database_user'] = 'Usuario de la base de datos';
$txt['database_password'] = 'Contraseña de la base de datos';
$txt['database_name'] = 'Nombre de la base de datos';
$txt['registration_agreement'] = 'Acuerdo de registro';
$txt['registration_agreement_desc'] = 'Este acuerdo es mostrado al usuario cuando va a registrar una cuenta y tiene que aceptarlo antes de poder hacerlo.';
$txt['database_prefix'] = 'Prefijo de las tablas';
$txt['errors_list'] = 'Lista de los errores del foro';
$txt['errors_found'] = 'Se han encontrado los siguientes errores en tu foro';
$txt['errors_fix'] = '¿Quieres arreglarlos automáticamente?';
$txt['errors_do_recount'] = 'Se han corregido los errores. Haz clic en el botón de abajo para volver a contar las estadísticas.';
$txt['errors_recount_now'] = 'Volver a contar las estadísticas';
$txt['errors_fixing'] = 'Corrigiendo los errores del foro';
$txt['errors_fixed'] = '¡Se han corregido los errores! Por favor, comprueba todas las categorías, subforos o hilos creados para decidir qué hacer con ellos.';
$txt['attachments_avatars'] = 'Adjuntos y avatares';
$txt['attachments_desc'] = 'Desde aquí puedes administrar los archivos adjuntos de tu sistema. Puedes eliminar adjuntos según el tamaño o la fecha. También se muestran las estadísticas de los adjuntos.';
$txt['attachment_stats'] = 'Estadísticas de los adjuntos';
$txt['attachment_integrity_check'] = 'Comprobación de integridad de los adjuntos';
$txt['attachment_integrity_check_desc'] = 'Con esto puedes comprobar la integridad y tamaño de los adjuntos de la base de datos y, si es necesario, arreglar los errores que se encuentren.';
$txt['attachment_check_now'] = 'Comprobar ahora';
$txt['attachment_pruning'] = 'Limpiar adjuntos';
$txt['attachment_pruning_message'] = 'Mensaje a añadir';
$txt['attachment_pruning_warning'] = '¿Seguro que quieres eliminar estos adjuntos?\\n¡Esta operación no se puede deshacer!';
$txt['attachment_total'] = 'Total de adjuntos';
$txt['attachmentdir_size'] = 'Tamaño total del directorio de adjuntos';
$txt['attachmentdir_size_current'] = 'Tamaño total del directorio de adjuntos actual';
$txt['attachment_space'] = 'Espacio disponible en el directorio de adjuntos';
$txt['attachment_space_current'] = 'Espacio disponible en el directorio de adjuntos actual';
$txt['attachment_options'] = 'Opciones de adjuntos';
$txt['attachment_log'] = 'Registro de adjuntos';
$txt['attachment_remove_old'] = 'Eliminar adjuntos más antiguos de';
$txt['attachment_remove_size'] = 'Eliminar adjuntos más grandes de';
$txt['attachment_name'] = 'Nombre del adjunto';
$txt['attachment_file_size'] = 'Tamaño del archivo';
$txt['attachmentdir_size_not_set'] = 'No hay tamaño máximo actualmente configurado';
$txt['attachment_delete_admin'] = '[archivo adjunto eliminado por el administrador]';
$txt['live'] = 'En directo desde Simple Machines...';
$txt['remove_all'] = 'Eliminar todos';
$txt['approve_new_members'] = 'El administrador ha de aceptar a todos los miembros';
$txt['agreement_not_writable'] = 'Atención - no se puede escribir en el archivo agreement.txt, los cambios que hagas NO se guardarán.';

$txt['version_check_desc'] = 'Con esto puedes ver las versiones de los archivos de tu instalación contra los de la última versión. Si alguno de estos archivos está desactualizado, deberías descargar y actualizar la última versión de <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(más detallado)';

$txt['lfyi'] = 'Error al conectar a las noticias de simplemachines.org.';

$txt['manage_calendar'] = 'Calendario';
$txt['manage_search'] = 'Búsqueda';

$txt['smileys_manage'] = 'Emoticonos e iconos de mensaje';
$txt['smileys_manage_info'] = 'Instalar nuevos juegos de emoticonos, añadir emoticonos a los ya existentes, o administrar los iconos de mensaje.';
$txt['package_info'] = 'Instala nuevas funcionalidades o modifica las ya existentes con esta interfaz.';
$txt['theme_admin'] = 'Temas y configuración';
$txt['theme_admin_info'] = 'Instala y administra los temas y configura o reinicia las opciones del tema.';
$txt['registration_center'] = 'Registros';
$txt['member_center_info'] = 'Mira la lista de usuarios, búscalos y administra los miembros que aún no han sido aprobados y aquellos que aún no han activado su cuenta.';

$txt['viewmembers_name'] = 'Nombre (nombre a mostrar)';
$txt['viewmembers_online'] = 'Última vez conectado';
$txt['viewmembers_today'] = 'Hoy';
$txt['viewmembers_day_ago'] = 'día';
$txt['viewmembers_days_ago'] = 'días';

$txt['display_name'] = 'Nombre a mostrar';
$txt['email_address'] = 'Correo';
$txt['ip_address'] = 'Dirección IP';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'desconocido';
$txt['security_wrong'] = '¡Intento de acceso a la administración!' . "\n" . 'Procedencia: %1$s' . "\n" . 'Agente de usuario: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'Enviar en formato HTML. (Con esto puedes poner HTML normal en el correo).';
$txt['email_parsed_html'] = 'Añadir &lt;br /&gt;s y &amp;nbsp;s a este mensaje.';
$txt['email_variables'] = 'En este mensaje puedes usar diversas &quot;variables&quot;. Pincha <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">aquí</a> para obtener más información.';
$txt['email_force'] = 'Enviar esto a los miembros aun habiendo elegido no recibir avisos.';
$txt['email_as_pms'] = 'Enviar esto usando mensajes privados.';
$txt['email_continue'] = 'Continuar';
$txt['email_done'] = 'hecho.';

$txt['ban_title'] = 'Lista de bans';
$txt['ban_ip'] = 'Banear IP: (ej. 192.168.12.213 or 128.0.*.*) - una entrada por línea';
$txt['ban_email'] = 'Banear correo: (ej. troll@cualquier.com) - una entrada por línea';
$txt['ban_username'] = 'Banear nombre: (ej. troll) - una entrada por línea';

$txt['ban_description'] = 'Puedes banear usuarios molestos a través de su IP, host, nombre de usuario o correo.';
$txt['ban_add_new'] = 'Añadir ban';
$txt['ban_banned_entity'] = 'Entidad baneada';
$txt['ban_on_ip'] = 'Banear IP (ej. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Banear host (ej. *.es)';
$txt['ban_on_email'] = 'Banear correo (ej. *@trollsunidos.com)';
$txt['ban_on_username'] = 'Banear usuario';
$txt['ban_notes'] = 'Notas';
$txt['ban_restriction'] = 'Restricción';
$txt['ban_full_ban'] = 'Ban completo';
$txt['ban_partial_ban'] = 'Ban parcial';
$txt['ban_cannot_post'] = 'No puede publicar';
$txt['ban_cannot_register'] = 'No se puede registrar';
$txt['ban_cannot_login'] = 'No puede iniciar sesión';
$txt['ban_add'] = 'Añadir';
$txt['ban_edit_list'] = 'Lista de bans';
$txt['ban_type'] = 'Tipo de ban';
$txt['ban_days'] = 'día(s)';
$txt['ban_will_expire_within'] = 'El ban expirará tras';
$txt['ban_added'] = 'Añadido';
$txt['ban_expires'] = 'Expira';
$txt['ban_hits'] = 'Veces';
$txt['ban_actions'] = 'Acciones';
$txt['ban_expiration'] = 'Expiración';
$txt['ban_reason_desc'] = 'Razón del ban, se mostrará al usuario baneado.';
$txt['ban_notes_desc'] = 'Notas que puedan ayudar a otros administradores.';
$txt['ban_remove_selected'] = 'Eliminar seleccionados';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = '¿Estás seguro de querer eliminar estos bans?';
$txt['ban_modify'] = 'Modificar';
$txt['ban_name'] = 'Nombre del ban';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Editar ban';
$txt['ban_add_notes'] = '<strong>Atención</strong>: tras crear el ban, puedes añadir más cosas que activarán el ban, como direcciones IP, hosts y correos.';
$txt['ban_expired'] = 'Expirado / desactivado';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'No se ha seleccionado restricción alguna.';

$txt['ban_triggers'] = 'Triggers';
$txt['ban_add_trigger'] = 'Add ban trigger';
$txt['ban_add_trigger_submit'] = 'Add';
$txt['ban_edit_trigger'] = 'Modify';
$txt['ban_edit_trigger_title'] = 'Edit ban trigger';
$txt['ban_edit_trigger_submit'] = 'Modify';
$txt['ban_remove_selected_triggers'] = 'Remove selected ban triggers';
$txt['ban_no_entries'] = 'There are currently no bans in effect.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Are you sure you want to remove the selected ban triggers?';
$txt['ban_trigger_browse'] = 'Browse Ban Triggers';
$txt['ban_trigger_browse_description'] = 'This screen shows all banned entities grouped by IP address, hostname, email address and username.';

$txt['ban_log'] = 'Ban Log';
$txt['ban_log_description'] = 'The ban log shows all attempts to enter the forum by banned users (\'full ban\' and \'cannot register\' ban only).';
$txt['ban_log_no_entries'] = 'There are currently no ban log entries.';
$txt['ban_log_ip'] = 'IP';
$txt['ban_log_email'] = 'Email address';
$txt['ban_log_member'] = 'Member';
$txt['ban_log_date'] = 'Date';
$txt['ban_log_remove_all'] = 'Remove all';
$txt['ban_log_remove_all_confirm'] = 'Are you sure you want to delete all ban log entries?';
$txt['ban_log_remove_selected'] = 'Remove selected';
$txt['ban_log_remove_selected_confirm'] = 'Are you sure you want to delete all selected ban log entries?';
$txt['ban_no_triggers'] = 'There are currently no ban triggers.';

$txt['settings_not_writable'] = 'These settings cannot be changed because Settings.php is read only.';

$txt['maintain_title'] = 'Forum Maintenance';
$txt['maintain_info'] = 'Optimize tables, make backups, check for errors, and prune boards with these tools.';
$txt['maintain_sub_database'] = 'Database';
$txt['maintain_sub_routine'] = 'Routine';
$txt['maintain_sub_members'] = 'Members';
$txt['maintain_sub_topics'] = 'Topics';
$txt['maintain_done'] = 'The maintenance task \'%1$s\' was executed successfully.';
$txt['maintain_no_errors'] = 'Congratulations, no errors found!  Thanks for checking.';

$txt['maintain_tasks'] = 'Scheduled Tasks';
$txt['maintain_tasks_desc'] = 'Manage all the tasks scheduled by SMF.';

$txt['scheduled_log'] = 'Task Log';
$txt['scheduled_log_desc'] = 'Lists logs of the tasks that have be ran.';
$txt['admin_log'] = 'Administration Log';
$txt['admin_log_desc'] = 'Lists administrative tasks that have been performed by admins of your forum.';
$txt['moderation_log'] = 'Moderation Log';
$txt['moderation_log_desc'] = 'Lists moderation activities that have been performed by moderators on your forum.';
$txt['spider_log_desc'] = 'Review the entries related to search engine spider activity on your forum.';
$txt['pruning_log_desc'] = 'Use these tools to prune older entries in the various logs.';

$txt['mailqueue_title'] = 'Mail';

$txt['db_error_send'] = 'Send emails on database connection error';
$txt['db_persist'] = 'Use a persistent connection';
$txt['ssi_db_user'] = 'Database username to use in SSI mode';
$txt['ssi_db_passwd'] = 'Database password to use in SSI mode';

$txt['default_language'] = 'Default Forum Language';

$txt['maintenance_subject'] = 'Subject for display';
$txt['maintenance_message'] = 'Message for display';

$txt['errlog_desc'] = 'The error log tracks every error encountered by your forum.  To delete any errors from the database, mark the checkbox, and click the %1$s button at the bottom of the page.';
$txt['errlog_no_entries'] = 'There are currently no error log entries.';

$txt['theme_settings'] = 'Theme Settings';
$txt['theme_current_settings'] = 'Current Theme';

$txt['dvc_your'] = 'Your Version';
$txt['dvc_current'] = 'Current Version';
$txt['dvc_sources'] = 'Sources';
$txt['dvc_default'] = 'Default Templates';
$txt['dvc_templates'] = 'Current Templates';
$txt['dvc_languages'] = 'Language Files';

$txt['smileys_default_set_for_theme'] = 'Select default smiley set for this theme';
$txt['smileys_no_default'] = '(use global default smiley set)';

$txt['censor_test'] = 'Test Censored Words';
$txt['censor_test_save'] = 'Test';
$txt['censor_case'] = 'Ignore case when censoring';
$txt['censor_whole_words'] = 'Check only whole words';

$txt['admin_confirm_password'] = '(confirm)';
$txt['admin_incorrect_password'] = 'Incorrect Password';

$txt['date_format'] = '(YYYY-MM-DD)';
$txt['undefined_gender'] = 'Undefined';
$txt['age'] = 'User age';
$txt['activation_status'] = 'Activation Status';
$txt['activated'] = 'Activated';
$txt['not_activated'] = 'Not activated';
$txt['primary'] = 'Primary';
$txt['additional'] = 'Additional';
$txt['messenger_address'] = 'Messenger Address';
$txt['wild_cards_allowed'] = 'wildcard characters * and ? are allowed';
$txt['search_for'] = 'Search for';
$txt['member_part_of_these_membergroups'] = 'Member is part of these membergroups';
$txt['membergroups'] = 'Membergroups';
$txt['confirm_delete_members'] = 'Are you sure you want to delete the selected members?';

$txt['support_credits_title'] = 'Support and Credits';
$txt['support_credits_info'] = 'Get support on common issues and version information to give if you have problems.';
$txt['support_title'] = 'Support Information';
$txt['support_versions_current'] = 'Current SMF version';
$txt['support_versions_forum'] = 'Forum version';
$txt['support_versions_php'] = 'PHP version';
$txt['support_versions_db'] = '%1$s version';
$txt['support_versions_server'] = 'Server version';
$txt['support_versions_gd'] = 'GD version';
$txt['support_versions'] = 'Version Information';
$txt['support_resources'] = 'Support Resources';
$txt['support_resources_p1'] = 'Our <a href="%1$s">Online Manual</a> provides the main documentation for SMF. The SMF Online Manual has many documents to help answer support questions and explain <a href="%2$s">Features</a>, <a href="%3$s">Settings</a>, <a href="%4$s">Themes</a>, <a href="%5$s">Packages</a>, etc. The Online Manual documents each area of SMF thoroughly and should answer most questions quickly.';
$txt['support_resources_p2'] = 'If you can\'t find the answers to your questions in the Online Manual, you may want to search our <a href="%1$s">Support Community</a> or ask for assistance in either our <a href="%2$s">English</a> or one of our many <a href="%3$s">international support boards</a>. The SMF Support Community can be used for <a href="%4$s">support</a>, <a href="%5$s">customization</a>, and many other things such as discussing SMF, finding a host, and discussing administrative issues with other forum administrators.';

$txt['support_latest'] = 'Common Support &amp; Issues';
$txt['support_latest_fetch'] = 'Retrieving support information...';

$txt['edit_permissions_info'] = 'Change restrictions and available features globally or to specific boards.';
$txt['membergroups_members'] = 'Regular Members';
$txt['membergroups_guests'] = 'Guests';
$txt['membergroups_guests_na'] = 'n/a';
$txt['membergroups_add_group'] = 'Add group';
$txt['membergroups_permissions'] = 'Permissions';

$txt['permitgroups_restrict'] = 'Restrictive';
$txt['permitgroups_standard'] = 'Standard';
$txt['permitgroups_moderator'] = 'Moderator';
$txt['permitgroups_maintenance'] = 'Maintenance';
$txt['permitgroups_inherit'] = 'Inherit';

$txt['confirm_delete_attachments_all'] = 'Are you sure you want to delete all attachments?';
$txt['confirm_delete_attachments'] = 'Are you sure you want to delete the selected attachments?';
$txt['attachment_manager_browse_files'] = 'Browse Files';
$txt['attachment_manager_repair'] = 'Maintain';
$txt['attachment_manager_avatars'] = 'Avatars';
$txt['attachment_manager_attachments'] = 'Attachments';
$txt['attachment_manager_thumbs'] = 'Thumbnails';
$txt['attachment_manager_last_active'] = 'Last Active';
$txt['attachment_manager_member'] = 'Member';
$txt['attachment_manager_avatars_older'] = 'Remove avatars from members not active for more than';
$txt['attachment_manager_total_avatars'] = 'Total Avatars';

$txt['attachment_manager_avatars_no_entries'] = 'There are currently no avatars.';
$txt['attachment_manager_attachments_no_entries'] = 'There are currently no attachments.';
$txt['attachment_manager_thumbs_no_entries'] = 'There are currently no thumbnails.';

$txt['attachment_manager_settings'] = 'Attachment Settings';
$txt['attachment_manager_avatar_settings'] = 'Avatar Settings';
$txt['attachment_manager_browse'] = 'Browse Files';
$txt['attachment_manager_maintenance'] = 'File Maintenance';
$txt['attachment_manager_save'] = 'Save';

$txt['attachmentEnable'] = 'Attachments mode';
$txt['attachmentEnable_deactivate'] = 'Disable attachments';
$txt['attachmentEnable_enable_all'] = 'Enable all attachments';
$txt['attachmentEnable_disable_new'] = 'Disable new attachments';
$txt['attachmentCheckExtensions'] = 'Check attachment\'s extension';
$txt['attachmentExtensions'] = 'Allowed attachment extensions';
$txt['attachmentRecodeLineEndings'] = 'Recode line endings in textual attachments';
$txt['attachmentShowImages'] = 'Display image attachments as pictures under post';
$txt['attachmentEncryptFilenames'] = 'Encrypt stored filenames';
$txt['attachmentUploadDir'] = 'Attachments directory<div class="smalltext"><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Configure multiple attachment directories</a></div>';
$txt['attachmentUploadDir_multiple'] = 'Attachments directory';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Configure multiple attachment directories]</a>';
$txt['attachmentDirSizeLimit'] = 'Max attachment folder space<div class="smalltext">(0 for no limit)</div>';
$txt['attachmentPostLimit'] = 'Max attachment size per post<div class="smalltext">(0 for no limit)</div>';
$txt['attachmentSizeLimit'] = 'Max size per attachment<div class="smalltext">(0 for no limit)</div>';
$txt['attachmentNumPerPostLimit'] = 'Max number of attachments per post<div class="smalltext">(0 for no limit)</div>';
$txt['attachment_gd_warning'] = 'The GD module is currently not installed. Image re-encoding is not possible.';
$txt['attachment_image_reencode'] = 'Re-encode potentially dangerous image attachments';
$txt['attachment_image_reencode_note'] = '(requires GD module)';
$txt['attachment_image_paranoid_warning'] = 'The extensive security checks can result in a large number of rejected attachments.';
$txt['attachment_image_paranoid'] = 'Perform extensive security checks on uploaded image attachments';
$txt['attachmentThumbnails'] = 'Resize images when showing under posts';
$txt['attachment_thumb_png'] = 'Save thumbnails as PNG';
$txt['attachmentThumbWidth'] = 'Maximum width of thumbnails';
$txt['attachmentThumbHeight'] = 'Maximum height of thumbnails';

$txt['attach_dir_does_not_exist'] = 'Does Not Exist';
$txt['attach_dir_not_writable'] = 'Not Writable';
$txt['attach_dir_files_missing'] = 'Files Missing (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Repair</a>)';
$txt['attach_dir_unused'] = 'Unused';
$txt['attach_dir_ok'] = 'OK';

$txt['attach_path_manage'] = 'Manage Attachment Paths';
$txt['attach_paths'] = 'Attachment Paths';
$txt['attach_current_dir'] = 'Current Directory';
$txt['attach_path'] = 'Path';
$txt['attach_current_size'] = 'Current Size (KB)';
$txt['attach_num_files'] = 'Files';
$txt['attach_dir_status'] = 'Status';
$txt['attach_add_path'] = 'Add Path';
$txt['attach_path_current_bad'] = 'Invalid current attachment path.';

$txt['mods_cat_avatars'] = 'Avatars';
$txt['avatar_directory'] = 'Avatars directory';
$txt['avatar_url'] = 'Avatars URL';
$txt['avatar_dimension_note'] = '(0 = no limit)';
$txt['avatar_max_width_external'] = 'Maximum width of external avatar<div class="smalltext">(0 for no limit)</div>';
$txt['avatar_max_height_external'] = 'Maximum height of external avatar<div class="smalltext">(0 for no limit)</div>';
$txt['avatar_action_too_large'] = 'If the avatar is too large...';
$txt['option_refuse'] = 'Refuse it';
$txt['option_html_resize'] = 'Let the HTML resize it';
$txt['option_js_resize'] = 'Resize it with JavaScript';
$txt['option_download_and_resize'] = 'Download and resize it (requires GD module)';
$txt['avatar_max_width_upload'] = 'Maximum width of uploaded avatar<div class="smalltext">(0 for no limit)</div>';
$txt['avatar_max_height_upload'] = 'Maximum height of uploaded avatar<div class="smalltext">(0 for no limit)</div>';
$txt['avatar_resize_upload'] = 'Resize oversized large avatars';
$txt['avatar_resize_upload_note'] = '(requires GD module)';
$txt['avatar_download_png'] = 'Use PNG for resized avatars';
$txt['avatar_gd_warning'] = 'The GD module is currently not installed. Some avatar features are disabled.';
$txt['avatar_external'] = 'External avatars';
$txt['avatar_upload'] = 'Uploadable avatars';
$txt['avatar_server_stored'] = 'Server-stored avatars';
$txt['avatar_server_stored_groups'] = 'Membergroups allowed to select a server stored avatar';
$txt['avatar_upload_groups'] = 'Membergroups allowed to upload an avatar to the server';
$txt['avatar_external_url_groups'] = 'Membergroups allowed to select an external URL';
$txt['avatar_select_permission'] = 'Select permissions for each group';
$txt['avatar_download_external'] = 'Download avatar at given URL';
$txt['custom_avatar_enabled'] = 'Upload avatars to...';
$txt['option_attachment_dir'] = 'Attachment directory';
$txt['option_specified_dir'] = 'Specific directory...';
$txt['custom_avatar_dir'] = 'Upload directory';
$txt['custom_avatar_dir_desc'] = 'This should not be the same as the server-stored directory.';
$txt['custom_avatar_url'] = 'Upload URL';
$txt['custom_avatar_check_empty'] = 'The custom avatar directory you have specified may be empty or invalid. Please ensure these settings are correct.';
$txt['avatar_reencode'] = 'Re-encode potentially dangerous avatars';
$txt['avatar_reencode_note'] = '(requires GD module)';
$txt['avatar_paranoid_warning'] = 'The extensive security checks can result in a large number of rejected avatars.';
$txt['avatar_paranoid'] = 'Perform extensive security checks on uploaded avatars';

$txt['repair_attachments'] = 'Maintain Attachments';
$txt['repair_attachments_complete'] = 'Maintenance Complete';
$txt['repair_attachments_complete_desc'] = 'All selected errors have now been corrected';
$txt['repair_attachments_no_errors'] = 'No errors were found!';
$txt['repair_attachments_error_desc'] = 'The follow errors were found during maintenance. Check the box next to the errors you wish to fix and hit continue.';
$txt['repair_attachments_continue'] = 'Continue';
$txt['repair_attachments_cancel'] = 'Cancel';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d thumbnails are missing a parent attachment';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d parents are flagged as having thumbnails but don\'t';
$txt['attach_repair_file_missing_on_disk'] = '%1$d attachments/avatars have an entry but no longer exist on disk';
$txt['attach_repair_file_wrong_size'] = '%1$d attachments/avatars are being reported as the wrong filesize';
$txt['attach_repair_file_size_of_zero'] = '%1$d attachments/avatars have a size of zero on disk. (These will be deleted)';
$txt['attach_repair_attachment_no_msg'] = '%1$d attachments no longer have a message associated with them';
$txt['attach_repair_avatar_no_member'] = '%1$d avatars no longer have a member associated with them';
$txt['attach_repair_wrong_folder'] = '%1$d attachments are in the wrong folder';

$txt['news_title'] = 'News and Newsletters';
$txt['news_settings_desc'] = 'Here you can change the settings and permissions related to news and newsletters.';
$txt['news_settings_submit'] = 'Save';
$txt['news_mailing_desc'] = 'From this menu you can send messages to all members who\'ve registered and entered their email addresses. You may edit the distribution list, or send messages to all. Useful for important update/news information.';
$txt['groups_edit_news'] = 'Groups allowed to edit news items';
$txt['groups_send_mail'] = 'Groups allowed to send out forum newsletters';
$txt['xmlnews_enable'] = 'Enable XML/RSS news';
$txt['xmlnews_maxlen'] = 'Maximum message length:<div class="smalltext">(0 to disable, bad idea.)</div>';
$txt['editnews_clickadd'] = 'Click here to add another item.';
$txt['editnews_remove_selected'] = 'Remove selected';
$txt['editnews_remove_confirm'] = 'Are you sure you want to delete the selected news items?';
$txt['censor_clickadd'] = 'Click here to add another word.';

$txt['layout_controls'] = 'Forum';
$txt['logs'] = 'Logs';
$txt['generate_reports'] = 'Reports';

$txt['update_available'] = 'Update Available!';
$txt['update_message'] = 'You\'re using an outdated version of SMF, which contains some bugs which have since been fixed.
	It is recommended that you <a href="#" id="update-link">update your forum</a> to the latest version as soon as possible. It only takes a minute!';

$txt['manageposts'] = 'Posts and Topics';
$txt['manageposts_title'] = 'Manage Posts and Topics';
$txt['manageposts_description'] = 'Here you can manage all settings related to topics and posts.';

$txt['manageposts_seconds'] = 'seconds';
$txt['manageposts_minutes'] = 'minutes';
$txt['manageposts_characters'] = 'characters';
$txt['manageposts_days'] = 'days';
$txt['manageposts_posts'] = 'posts';
$txt['manageposts_topics'] = 'topics';

$txt['manageposts_settings'] = 'Post Settings';
$txt['manageposts_settings_description'] = 'Here you can set everything related to posts and posting.';
$txt['manageposts_settings_submit'] = 'Save';

$txt['manageposts_bbc_settings'] = 'Bulletin Board Code';
$txt['manageposts_bbc_settings_description'] = 'Bulletin board code can be used to add markup to forum messages. For example, to highlight the word \'house\' you can type [b]house[/b]. All Bulletin board code tags are surrounded by square brackets (\'[\' and \']\').';
$txt['manageposts_bbc_settings_title'] = 'Bulletin Board Code Settings';
$txt['manageposts_bbc_settings_submit'] = 'Save';

$txt['manageposts_topic_settings'] = 'Topic Settings';
$txt['manageposts_topic_settings_description'] = 'Here you can set all settings involving topics.';
$txt['manageposts_topic_settings_submit'] = 'Save';

$txt['removeNestedQuotes'] = 'Remove nested quotes when quoting';
$txt['enableEmbeddedFlash'] = 'Embed flash into posts';
$txt['enableEmbeddedFlash_warning'] = 'may be a security risk!';
$txt['enableSpellChecking'] = 'Enable spell checking';
$txt['enableSpellChecking_warning'] = 'this does not work on all servers!';
$txt['disable_wysiwyg'] = 'Disable WYSIWYG editor';
$txt['max_messageLength'] = 'Maximum allowed post size';
$txt['max_messageLength_zero'] = '0 for no max.';
$txt['fixLongWords'] = 'Break up words with more letters than';
$txt['fixLongWords_zero'] = '0 to disable.';
$txt['fixLongWords_warning'] = 'this does not work on all servers!';
$txt['topicSummaryPosts'] = 'Posts to show on topic summary';
$txt['spamWaitTime'] = 'Time required between posts from the same IP';
$txt['edit_wait_time'] = 'Courtesy edit wait time';
$txt['edit_disable_time'] = 'Maximum time after posting to allow edit';
$txt['edit_disable_time_zero'] = '0 to disable';

$txt['enableBBC'] = 'Enable bulletin board code (BBC)';
$txt['enablePostHTML'] = 'Enable <em>basic</em> HTML in posts';
$txt['autoLinkUrls'] = 'Automatically link posted URLs';
$txt['disabledBBC'] = 'Enabled BBC tags';
$txt['bbcTagsToUse'] = 'Enabled BBC tags';
$txt['bbcTagsToUse_select'] = 'Select the tags allowed to be used';
$txt['bbcTagsToUse_select_all'] = 'Select all tags';

$txt['enableStickyTopics'] = 'Enable sticky topics';
$txt['enableParticipation'] = 'Enable participation icons';
$txt['oldTopicDays'] = 'Time before topic is warned as old on reply';
$txt['oldTopicDays_zero'] = '0 to disable';
$txt['defaultMaxTopics'] = 'Number of topics per page in the message index';
$txt['defaultMaxMessages'] = 'Number of posts per page in a topic page';
$txt['hotTopicPosts'] = 'Number of posts for a hot topic';
$txt['hotTopicVeryPosts'] = 'Number of posts for a very hot topic';
$txt['enableAllMessages'] = 'Max topic size to show &quot;All&quot; posts';
$txt['enableAllMessages_zero'] = '0 to never show &quot;All&quot;';
$txt['disableCustomPerPage'] = 'Disable user defined topic/message count per page';
$txt['enablePreviousNext'] = 'Enable previous/next topic links';

$txt['not_done_title'] = 'Not done yet!';
$txt['not_done_reason'] = 'To avoid overloading your server, the process has been temporarily paused.  It should automatically continue in a few seconds.  If it doesn\'t, please click continue below.';
$txt['not_done_continue'] = 'Continue';

$txt['general_settings'] = 'General';
$txt['database_paths_settings'] = 'Database and Paths';
$txt['cookies_sessions_settings'] = 'Cookies and Sessions';
$txt['caching_settings'] = 'Caching';
$txt['load_balancing_settings'] = 'Load Balancing';

$txt['language_configuration'] = 'Languages';
$txt['language_description'] = 'This section allows you to edit languages installed on your forum, download new ones from the Simple Machines website. You may also edit language-related settings here.';
$txt['language_edit'] = 'Edit Languages';
$txt['language_add'] = 'Add Language';
$txt['language_settings'] = 'Settings';

$txt['advanced'] = 'Advanced';
$txt['simple'] = 'Simple';

$txt['admin_news_select_recipients'] = 'Please select who should receive a copy of the newsletter';
$txt['admin_news_select_group'] = 'Membergroups';
$txt['admin_news_select_group_desc'] = 'Select the groups to receive this newsletter.';
$txt['admin_news_select_members'] = 'Members';
$txt['admin_news_select_members_desc'] = 'Additional members to receive newsletter.';
$txt['admin_news_select_excluded_members'] = 'Excluded Members';
$txt['admin_news_select_excluded_members_desc'] = 'Members who should not receive newsletter.';
$txt['admin_news_select_excluded_groups'] = 'Excluded Groups';
$txt['admin_news_select_excluded_groups_desc'] = 'Select groups who should definitely not receive the newsletter.';
$txt['admin_news_select_email'] = 'Email Addresses';
$txt['admin_news_select_email_desc'] = 'A semi-colon separated list of email addresses which should be sent newsletter. (i.e. address1; address2)';
$txt['admin_news_select_override_notify'] = 'Override Notification Settings';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'You cannot send a personal message to an email address. If you continue all entered email addresses will be ignored.\\n\\nAre you sure you wish to do this?';

$txt['mailqueue_browse'] = 'Browse Queue';
$txt['mailqueue_settings'] = 'Settings';

$txt['admin_search'] = 'Quick Search';
$txt['admin_search_type_internal'] = 'Task/Setting';
$txt['admin_search_type_member'] = 'Member';
$txt['admin_search_type_online'] = 'Online Manual';
$txt['admin_search_go'] = 'Go';
$txt['admin_search_results'] = 'Search Results';
$txt['admin_search_results_desc'] = 'Results for search: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Search again';
$txt['admin_search_results_none'] = 'No results found!';

$txt['admin_search_section_sections'] = 'Section';
$txt['admin_search_section_settings'] = 'Setting';

$txt['core_settings_title'] = 'Core Features';
$txt['mods_cat_features'] = 'General';
$txt['mods_cat_security_general'] = 'General';
$txt['antispam_title'] = 'Anti-Spam';
$txt['mods_cat_modifications_misc'] = 'Miscellaneous';
$txt['mods_cat_layout'] = 'Layout';
$txt['karma'] = 'Karma';
$txt['moderation_settings_short'] = 'Moderation';
$txt['signature_settings_short'] = 'Signatures';
$txt['custom_profile_shorttitle'] = 'Profile Fields';
$txt['pruning_title'] = 'Log Pruning';

$txt['boardsEdit'] = 'Modify Boards';
$txt['mboards_new_cat'] = 'Create New Category';
$txt['manage_holidays'] = 'Manage Holidays';
$txt['calendar_settings'] = 'Calendar Settings';
$txt['search_weights'] = 'Weights';
$txt['search_method'] = 'Search Method';

$txt['smiley_sets'] = 'Smiley Sets';
$txt['smileys_add'] = 'Add Smiley';
$txt['smileys_edit'] = 'Edit Smileys';
$txt['smileys_set_order'] = 'Set Smiley Order';
$txt['icons_edit_message_icons'] = 'Edit Message Icons';

$txt['membergroups_new_group'] = 'Add Membergroup';
$txt['membergroups_edit_groups'] = 'Edit Membergroups';
$txt['permissions_groups'] = 'General Permissions';
$txt['permissions_boards'] = 'Board Permissions';
$txt['permissions_profiles'] = 'Edit Profiles';
$txt['permissions_post_moderation'] = 'Post Moderation';

$txt['browse_packages'] = 'Browse Packages';
$txt['download_packages'] = 'Download Packages';
$txt['installed_packages'] = 'Installed Packages';
$txt['package_file_perms'] = 'File Permissions';
$txt['package_settings'] = 'Options';
$txt['themeadmin_admin_title'] = 'Manage and Install';
$txt['themeadmin_list_title'] = 'Theme Settings';
$txt['themeadmin_reset_title'] = 'Member Options';
$txt['themeadmin_edit_title'] = 'Modify Themes';
$txt['admin_browse_register_new'] = 'Register New Member';

$txt['search_engines'] = 'Search Engines';
$txt['spiders'] = 'Spiders';
$txt['spider_logs'] = 'Spider Log';
$txt['spider_stats'] = 'Stats';

$txt['paid_subscriptions'] = 'Paid Subscriptions';
$txt['paid_subs_view'] = 'View Subscriptions';

?>
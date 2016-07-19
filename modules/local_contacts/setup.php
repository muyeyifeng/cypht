<?php

if (!defined('DEBUG_MODE')) { die(); }

handler_source('local_contacts');
output_source('local_contacts');

add_handler('contacts', 'load_local_contacts', true, 'local_contacts', 'load_contacts', 'after');
add_handler('contacts', 'load_edit_contact', true, 'local_contacts', 'load_local_contacts', 'after');
add_handler('contacts', 'process_add_contact', true, 'local_contacts', 'load_edit_contact', 'after');
add_handler('contacts', 'process_edit_contact', true, 'local_contacts', 'load_local_contacts', 'after');
add_output('contacts', 'contacts_form', true, 'contacts', 'contacts_form_start', 'after');

add_handler('ajax_autocomplete_contact', 'load_local_contacts', true, 'local_contacts', 'load_contacts', 'after');
add_handler('ajax_imap_message_content', 'load_local_contacts', true, 'local_contacts', 'load_contacts', 'after');
add_handler('compose', 'load_local_contacts', true, 'local_contacts', 'load_contacts', 'after');

add_handler('ajax_delete_contact', 'process_delete_contact', true, 'local_contacts', 'load_local_contacts', 'after');
return array();
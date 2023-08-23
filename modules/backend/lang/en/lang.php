<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Invalid field type used :type.',
    'options_method_invalid_model' => 'The attribute \':field\' does not resolve to a valid model. Try specifying the options method for model class :model explicitly.',
    'options_method_not_exists' => 'The model class :model must define a method :method() returning options for the \':field\' form field.',
    'colors_method_not_exists' => 'The model class :model must define a method :method() returning html color HEX codes for the \':field\' form field.',
  ],
  'widget' => [
    'not_registered' => 'A widget class name \':name\' has not been registered',
    'not_bound' => 'A widget with class name \':name\' has not been bound to the controller',
  ],
  'page' => [
    'untitled' => 'Untitled',
    'not_found' => [
      'label' => 'Page Not Found',
      'help' => 'The requested page cannot be found.',
      'back_link' => 'Go back to the previous page',
    ],
    'access_denied' => [
      'label' => 'Access Denied',
      'help' => 'You don\'t have the required permissions to view this page.',
      'cms_link' => 'Return to the Backend',
    ],
    'no_database' => [
      'label' => 'Database Missing',
      'help' => 'A database is required to access the back-end. Check the database is configured and migrated before trying again.',
      'cms_link' => 'Return to the Homepage',
    ],
  ],
  'partial' => [
    'not_found_name' => 'The partial \':name\' is not found.',
    'invalid_name' => 'Invalid partial name: :name.',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Invalid AJAX handler name: :name.',
    'not_found' => 'AJAX handler \':name\' was not found.',
  ],
  'account' => [
    'impersonate' => 'Impersonate User',
    'impersonate_confirm' => 'Are you sure you want to impersonate this user? You can revert to your original state by logging out.',
    'impersonate_success' => 'You are now impersonating this user',
    'impersonate_working' => 'Impersonating...',
    'impersonating' => 'Impersonating :full_name',
    'stop_impersonating' => 'Stop impersonating',
    'signed_in_as' => 'Signed in as :full_name',
    'sign_out' => 'Sign Out',
    'login_prompt' => 'Welcome back! Please login to your account to continue.',
    'login_placeholder' => 'username',
    'password_placeholder' => 'password',
    'enter_email' => 'Enter your email',
    'email_placeholder' => 'email',
    'apply' => 'Apply',
    'cancel' => 'Cancel',
    'delete' => 'Delete',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Dashboard',
    'widget_inspector_title' => 'Widget Configuration',
    'widget_inspector_description' => 'Configure the report widget',
    'widget_columns_label' => 'Width :columns',
    'widget_columns_description' => 'The widget width, a number between 1 and 10.',
    'widget_columns_error' => 'Please enter the widget width as a number between 1 and 10.',
    'columns' => '{1} column|[2,Inf] columns',
    'widget_new_row_label' => 'Force new row',
    'widget_new_row_description' => 'Put the widget in a new row.',
    'widget_title_label' => 'Widget title',
    'widget_title_error' => 'The Widget Title is required.',
    'reset_layout_success' => 'Layout has been reset',
    'make_default_success' => 'Current layout is now the default',
    'collapse_all' => 'Collapse all',
    'expand_all' => 'Expand all',
    'status' => [
      'widget_title_default' => 'System status',
      'update_available' => '{0} updates available!|{1} update available!|[2,Inf] updates available!',
      'updates_pending' => 'Pending Software Updates',
      'updates_nil' => 'Software is Up to Date',
      'updates_link' => 'Update',
      'warnings_pending' => 'Some Issues Need Attention',
      'warnings_nil' => 'No Warnings to Display',
      'warnings_link' => 'View',
      'core_build' => 'System Build',
      'event_log' => 'Event Log',
      'request_log' => 'Request Log',
      'app_birthday' => 'Online Since',
    ],
    'welcome' => [
      'widget_title_default' => 'Welcome',
      'welcome_back_name' => 'Welcome back to :app, :name.',
      'welcome_to_name' => 'Welcome to :app, :name.',
      'first_sign_in' => 'This is the first time you have signed in.',
      'last_sign_in' => 'Your last sign in was',
      'view_access_logs' => 'View Access Logs',
      'nice_message' => 'Have a great day!',
    ],
  ],
  'user' => [
    'name' => 'Administrator',
    'menu_label' => 'Administrators',
    'menu_description' => 'Manage back-end administrator users, groups and permissions.',
    'list_title' => 'Manage Administrators',
    'new' => 'New Administrator',
    'first_name' => 'First Name',
    'last_name' => 'Last Name',
    'full_name' => 'Full Name',
    'email' => 'Email',
    'role_field' => 'Role',
    'role_comment' => 'Roles define user permissions, which can be overriden on the user level, on the Permissions tab.',
    'groups' => 'Groups',
    'groups_comment' => 'Specify which groups this account should belong to.',
    'avatar' => 'Avatar',
    'password' => 'Password',
    'password_confirmation' => 'Confirm Password',
    'permissions' => 'Permissions',
    'account' => 'Account',
    'superuser' => 'Super User',
    'superuser_comment' => 'Grants this account unlimited access to all areas of the system. Super users can add and manage other users. ',
    'send_invite' => 'Send invitation by email',
    'send_invite_comment' => 'Sends a welcome message containing login and password information.',
    'delete_confirm' => 'Delete this administrator?',
    'return' => 'Return to Admin List',
    'allow' => 'Allow',
    'inherit' => 'Inherit',
    'deny' => 'Deny',
    'activated' => 'Activated',
    'last_login' => 'Last Login',
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',
    'deleted_at' => 'Deleted At',
    'show_deleted' => 'Show Deleted',
    'group' => [
      'name' => 'Group',
      'menu_label' => 'Manage Groups',
      'menu_description' => 'Add administrators to groups used for notifications and features.',
      'name_field' => 'Name',
      'name_comment' => 'The name is displayed in the group list on the Administrator form.',
      'description_field' => 'Description',
      'is_new_user_default_field_label' => 'Default group',
      'is_new_user_default_field_comment' => 'Add new administrators to this group by default',
      'code_field' => 'Code',
      'code_comment' => 'Enter a unique code if you want to access the group object with the API.',
      'list_title' => 'Manage Groups',
      'new' => 'New Group',
      'delete_confirm' => 'Delete this administrator group?',
      'return' => 'Return to Group List',
      'users_count' => 'Users',
    ],
    'role' => [
      'name' => 'Role',
      'menu_label' => 'Manage Roles',
      'menu_description' => 'Define permissions for administrators based on their role.',
      'name_field' => 'Name',
      'name_comment' => 'The name is displayed in the role list on the Administrator form.',
      'description_field' => 'Description',
      'code_field' => 'Code',
      'code_comment' => 'Enter a unique code if you want to access the role object with the API.',
      'list_title' => 'Manage Roles',
      'new' => 'New Role',
      'delete_confirm' => 'Delete this administrator role?',
      'return' => 'Return to Role List',
      'users_count' => 'Users',
    ],
    'preferences' => [
      'not_authenticated' => 'There is no an authenticated user to load or save preferences for.',
    ],
    'trashed_hint_title' => 'This account has been deleted',
    'trashed_hint_desc' => 'This account has been deleted and will be unable to be signed in under. To restore it, click the restore user icon in the bottom right',
  ],
  'list' => [
    'default_title' => 'List',
    'search_prompt' => 'Search...',
    'no_records' => 'There are no records in this view.',
    'missing_model' => 'List behavior used in :class does not have a model defined.',
    'missing_column' => 'There are no column definitions for :columns.',
    'missing_columns' => 'List used in :class has no list columns defined.',
    'missing_definition' => 'List behavior does not contain a column for \':field\'.',
    'missing_parent_definition' => 'List behavior does not contain a definition for \':definition\'.',
    'behavior_not_ready' => 'List behavior has not been initialized, check that you have called makeLists() in your controller.',
    'invalid_column_datetime' => 'Column value \':column\' is not a DateTime object, are you missing a $dates reference in the Model?',
    'pagination' => 'Displayed Records: :from-:to of :total',
    'first_page' => 'First page',
    'last_page' => 'Last page',
    'prev_page' => 'Previous page',
    'next_page' => 'Next page',
    'refresh' => 'Refresh',
    'updating' => 'Updating...',
    'loading' => 'Loading...',
    'setup_title' => 'List Setup',
    'setup_help' => 'Use checkboxes to select columns you want to see in the list. You can change position of columns by dragging them up or down.',
    'records_per_page' => 'Records Per Page',
    'records_per_page_help' => 'Select the number of records per page to display. Please note that high number of records on a single page can reduce performance.',
    'check' => 'Check',
    'create_button' => 'New :name',
    'delete_selected' => 'Delete selected',
    'delete_selected_empty' => 'There are no selected records to delete.',
    'delete_selected_confirm' => 'Delete the selected records?',
    'delete_selected_success' => 'Deleted selected records.',
    'column_switch_true' => 'Yes',
    'column_switch_false' => 'No',
  ],
  'object_list' => [
    'prop_cant_be_empty' => 'Property :property cannot be empty',
    'key_value_exists' => 'Value is already defined: :property_value',
  ],
  'fileupload' => [],
  'form' => [
    'create_title' => 'New :name',
    'update_title' => 'Edit :name',
    'preview_title' => 'Preview :name',
    'restore_success' => ':name Restored',
    'reset_success' => 'Reset Complete',
    'missing_id' => 'Form record ID has not been specified.',
    'missing_tab' => 'Missing a valid tab definition.',
    'missing_model' => 'Form behavior used in :class does not have a model defined.',
    'missing_definition' => 'Form behavior does not contain a field for \':field\'.',
    'action_confirm' => 'Are you sure?',
    'create' => 'Create',
    'create_and_close' => 'Create and close',
    'creating' => 'Creating...',
    'creating_name' => 'Creating :name...',
    'save' => 'Save',
    'save_and_close' => 'Save and Close',
    'saving' => 'Saving...',
    'saving_name' => 'Saving :name...',
    'delete' => 'Delete',
    'deleting' => 'Deleting...',
    'confirm_delete' => 'Delete record?',
    'confirm_delete_multiple' => 'Delete selected records?',
    'deleting_name' => 'Deleting :name...',
    'restore' => 'Restore',
    'restoring' => 'Restoring',
    'confirm_restore' => 'Are you sure you want to restore this record?',
    'reset_default' => 'Reset to Default',
    'resetting' => 'Resetting',
    'resetting_name' => 'Resetting :name',
    'undefined_tab' => 'Misc',
    'field_off' => 'Off',
    'field_on' => 'On',
    'add' => 'Add',
    'apply' => 'Apply',
    'insert' => 'Insert',
    'cancel' => 'Cancel',
    'close' => 'Close',
    'confirm' => 'Confirm',
    'reload' => 'Reload',
    'complete' => 'Complete',
    'ok' => 'OK',
    'or' => 'or',
    'confirm_tab_close' => 'Close the tab? Unsaved changes will be lost.',
    'behavior_not_ready' => 'Form behavior has not been initialized, check that you have called initForm() in your controller.',
    'preview_no_files_message' => 'There are no files uploaded.',
    'preview_no_media_message' => 'There is no media selected.',
    'preview_no_record_message' => 'There is no record selected.',
    'select' => 'Select',
    'select_all' => 'Select All',
    'select_none' => 'Select None',
    'insert_row' => 'Insert Row',
    'insert_row_below' => 'Insert Row Below',
    'delete_row' => 'Delete Row',
    'concurrency_file_changed_title' => 'File was changed',
    'concurrency_file_changed_description' => 'The file you\'re editing has been changed on disk by another user. You can either reload the file and lose your changes or override the file on the disk.',
    'return_to_list' => 'Return to List',
    'no_options_found' => 'No options found',
    'error' => 'Error',
    'toggle_full_screen' => 'Toggle Full Screen',
  ],
  'treeview' => [
    'expand' => 'Expand',
    'collapse' => 'Collapse',
    'reorder' => 'Reorder',
    'clear_search' => 'Clear Search',
    'search' => 'Search',
    'command_or_document' => 'Command or Document...',
    'quick_access' => 'Quick Access',
    'open' => 'Open',
    'commands' => 'Commands',
  ],
  'tabs' => [
    'close' => 'Close Tab',
    'close_all' => 'Close All',
    'close_others' => 'Close Others',
    'close_saved' => 'Close Saved',
    'full_screen' => 'Toggle Full Screen',
  ],
  'modal' => [
    'close' => 'Close',
  ],
  'dropdownmenu' => [
    'go_back' => 'Go Back',
    'close_menu' => 'Close Menu',
  ],
  'recordfinder' => [
    'find_record' => 'Find Record',
    'invalid_model_class' => 'The provided model class ":modelClass" for the recordfinder is invalid',
    'cancel' => 'Cancel',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'Relation behavior does not have any configuration for \':config\'.',
    'missing_definition' => 'Relation behavior does not contain a definition for \':field\'.',
    'missing_model' => 'Relation behavior used in :class does not have a model defined.',
    'invalid_action_single' => 'This action cannot be performed on a singular relationship.',
    'invalid_action_multi' => 'This action cannot be performed on a multiple relationship.',
    'help' => 'Click on an item to add',
    'add' => 'Add',
    'add_selected' => 'Add Selected',
    'link_selected' => 'Link Selected',
    'cancel' => 'Cancel',
    'close' => 'Close',
    'create' => 'Create',
    'update' => 'Update',
    'preview' => 'Preview',
    'remove_name' => 'Remove :name',
    'delete_name' => 'Delete :name',
    'link' => 'Link',
    'unlink_name' => 'Unlink :name',
  ],
  'reorder' => [
    'default_title' => 'Reorder Records',
    'no_records' => 'There are no records available to sort.',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'Model \':class\' with an ID of :id could not be found',
    'missing_id' => 'There is no ID specified for looking up the model record.',
    'missing_relation' => 'Model \':class\' does not contain a definition for \':relation\'.',
    'missing_method' => 'Model \':class\' does not contain a method \':method\'.',
    'invalid_class' => 'Model :model used in :class is not valid, it must inherit the \\Model class.',
    'mass_assignment_failed' => 'Mass assignment failed for Model attribute \':attribute\'.',
  ],
  'warnings' => [
    'tips' => 'System Configuration Tips',
    'tips_description' => 'There are issues you need to pay attention to in order to configure the system properly.',
    'permissions' => 'Directory :name or its subdirectories is not writable for PHP. Please set corresponding permissions for the webserver on this directory.',
    'extension' => 'The PHP extension :name is not installed. Please install this library and activate the extension.',
    'plugin_missing' => 'The plugin :name is a dependency but is not installed. Please install this plugin.',
    'debug' => 'Debug mode is enabled. This is not recommended for production installations.',
    'backend_uri' => 'The backend URL :name is too generic. Please set to something more unique.',
    'backend_login' => 'An account with a generic login :name was found. Please rename this administrator account.',
  ],
  'editor' => [
    'menu_label' => 'Editor Settings',
    'menu_description' => 'Change the global editor preferences.',
    'toolbar_buttons_presets' => [
      'default' => 'Default',
      'minimal' => 'Minimal',
      'full' => 'Full',
    ],
    'paragraph_formats_comment' => 'The options that will appear in the Paragraph Format dropdown.',
  ],
  'tooltips' => [
    'preview_website' => 'Preview the Website',
  ],
  'mysettings' => [
    'menu_label' => 'My Settings',
    'menu_description' => 'Settings related to your administration account',
  ],
  'myaccount' => [
    'menu_label' => 'My Account',
    'menu_description' => 'Update your account details such as name, email address and password.',
    'menu_keywords' => 'security login',
  ],
  'branding' => [
    'menu_label' => 'Customize Backend',
    'menu_description' => 'Customize the administration area such as name, colors and logo.',
    'accent_color' => 'Accent Color',
  ],
  'backend_preferences' => [
    'menu_label' => 'Backend Preferences',
    'menu_description' => 'Manage your account preferences such as desired language.',
  ],
  'filter' => [
    'all' => 'all',
    'options_method_not_exists' => 'The model class :model must define a method :method() returning options for the \':filter\' filter.',
    'options_static_method_invalid_value' => 'The static method \':method()\' on :class does not return a valid options array.',
    'date_all' => 'all periods',
    'number_all' => 'all numbers',
  ],
  'import_export' => [
    'row' => 'Row :row',
    'show_ignored_columns' => 'Show ignored columns',
    'auto_match_columns' => 'Auto match columns',
    'created' => 'Created',
    'updated' => 'Updated',
    'skipped' => 'Skipped',
    'warnings' => 'Warnings',
    'errors' => 'Errors',
    'skipped_rows' => 'Skipped Rows',
    'upload_valid_csv' => 'Please upload a valid CSV file.',
    'drop_column_here' => 'Drop column here...',
    'ignore_this_column' => 'Ignore this column',
    'processing_successful_line1' => 'File export process completed!',
    'processing_successful_line2' => 'The browser will now redirect to the file download.',
    'file_not_found_error' => 'File not found',
    'empty_error' => 'There was no data supplied to export',
    'empty_import_columns_error' => 'Please specify some columns to import.',
    'match_some_column_error' => 'Please match some columns first.',
    'required_match_column_error' => 'Please specify a match for the required field :label.',
    'empty_export_columns_error' => 'Please specify some columns to export.',
    'behavior_missing_uselist_error' => 'You must implement the controller behavior ListController with the export "useList" option enabled.',
    'missing_model_class_error' => 'Please specify the modelClass property for :type',
    'missing_column_id_error' => 'Missing column identifier',
    'unknown_column_error' => 'Unknown column',
    'encoding_not_supported_error' => 'Source file encoding is not recognized. Please select the custom file format option with the proper encoding to import your file.',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
      'windows_1250' => 'Windows-1250 (CP1250)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Upload and manage media contents - images, videos, sounds, documents',
  ],
  'mediafinder' => [
    'label' => 'Media Finder',
    'no_image' => 'The image could not be found',
    'not_an_image' => 'The selected file is not an image',
    'click_to_select_file' => 'Click to select a file',
  ],
  'media' => [
    'menu_label' => 'Media',
    'upload' => 'Upload',
    'move' => 'Move',
    'delete' => 'Delete',
    'add_folder' => 'Add Folder',
    'search' => 'Search',
    'display' => 'Display',
    'filter_everything' => 'Everything',
    'filter_images' => 'Images',
    'filter_video' => 'Video',
    'filter_audio' => 'Audio',
    'filter_documents' => 'Documents',
    'library' => 'Library',
    'size' => 'Size',
    'title' => 'Title',
    'last_modified' => 'Last Modified',
    'public_url' => 'URL',
    'click_here' => 'Click here',
    'thumbnail_error' => 'Error generating thumbnail.',
    'return_to_parent' => 'Return to the Parent Folder',
    'return_to_parent_label' => 'Go Up ..',
    'nothing_selected' => 'Nothing is selected.',
    'multiple_selected' => 'Multiple items selected.',
    'uploading_file_num' => 'Uploading :number file(s)...',
    'uploading_complete' => 'Upload Complete',
    'uploading_error' => 'Upload Failed',
    'type_blocked' => 'The file type used is blocked for security reasons.',
    'order_by' => 'Order by',
    'direction' => 'Direction',
    'direction_asc' => 'Ascending',
    'direction_desc' => 'Descending',
    'folder' => 'Folder',
    'no_files_found' => 'No files found by your request.',
    'delete_empty' => 'Please select items to delete.',
    'delete_confirm' => 'Delete the selected item(s)?',
    'error_renaming_file' => 'Error renaming the item.',
    'new_folder_title' => 'New Folder',
    'folder_name' => 'Folder Name',
    'error_creating_folder' => 'Error creating folder',
    'folder_or_file_exist' => 'A folder or file with the specified name already exists.',
    'move_empty' => 'Please select items to move.',
    'move_popup_title' => 'Move files or folders',
    'move_destination' => 'Destination folder',
    'please_select_move_dest' => 'Please select a destination folder.',
    'move_dest_src_match' => 'Please select another destination folder.',
    'empty_library' => 'It looks a bit empty here. Upload files or create folders to get started.',
    'insert' => 'Insert',
    'crop_and_insert' => 'Crop & Insert',
    'select_single_image' => 'Please select a single image.',
    'selection_not_image' => 'The selected item is not an image.',
    'restore' => 'Undo all changes',
    'resize' => 'Resize...',
    'selection_mode_normal' => 'Normal',
    'selection_mode_fixed_ratio' => 'Fixed Ratio',
    'selection_mode_fixed_size' => 'Fixed Size',
    'height' => 'Height',
    'width' => 'Width',
    'selection_mode' => 'Selection mode',
    'resize_image' => 'Resize Image',
    'image_size' => 'Image Size:',
    'selected_size' => 'Selected:',
  ],
  'table' => [
    'add_item' => 'Add item',
  ],
  'dictionary' => [
    'key_required' => 'The Key field is required',
    'value_required' => 'The Value field is required',
  ],
  'uploader' => [
    'uploading' => 'Uploading Files',
    'complete' => 'Upload Complete',
  ],
  'richeditor' => [
    'upload_from_computer' => 'Upload From Computer',
    'embedding_code' => 'Embedding Code',
    'url_required' => 'The URL is required',
    'url_validation' => 'URL must start with http:// or https://',
    'add_image' => 'Insert Image',
    'add_video' => 'Insert Video',
    'add_audio' => 'Insert Audio',
    'add_file' => 'Insert File',
    'embedding_code_required' => 'The embedding code is required',
    'embedding_code_invalid' => 'Please enter valid HTML embedding code',
    'embedding_code_invalid_title' => 'Invalid code',
    'browse' => 'Browse Media Library',
    'by_url' => 'By URL',
  ],
];

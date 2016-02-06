<?php

return [
  'plugin'  => [
    'name'        => 'Infusionsoft API',
    'description' => 'Use the Infusionsoft SDK with OctoberCMS',
    'tab'         => 'Infusionsoft API',
    'manage'      => 'Manage Infusionsoft API'
  ],
  'permissions' => [
      'tab'       => 'Infusionsoft API Plugin',
      'settings'  => 'Settings access',
  ],
  'settings'    => [
      'label'               => 'Infusionsoft API',
      'description'         => 'Configure Infusionsoft API Settings',
      'client_id'           => 'Client ID',
      'client_id_text'      => 'Enter your client ID',
      'client_secret'       => 'Client Secret',
      'client_secret_text'  => 'Enter your client secret',
      'redirect_uri'        => 'Redirect URI',
      'redirect_uri_text'   => 'Enter the URI to direct to after API call',
  ],
  // 'filelists' => [
  //   'name' => 'Name',
  //   'plural' => 'FileLists',
  //   'new_filelist' => 'New FileLists',
  //   'create_filelists' => 'Create FileLists',
  //   'update_filelists' => 'Update FileLists',
  //   'manage_filelists' => 'Manage FileLists',
  //   'preview_filelists' => 'Preview FileLists',
  //   'delete_confirm' => 'Do you really want to delete this filelist?',
  //   'return_to_filelists' => 'Return to filelist',
  // ],
  // 'filelist' => [
  //   'name' => 'FileList',
  //   'desc' => 'Add a filelist to the page.',
  //   'choice' => 'Choose the filelist that you want to display.',
  // ],
];

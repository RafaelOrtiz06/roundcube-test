<?php
  $config['db_dsnw'] = 'mysql://root:mysecretpassword@db:3306/roundcube';
  $config['db_dsnr'] = '';
  $config['imap_host'] = 'posteio:143';
  $config['smtp_host'] = 'posteio:587';
  $config['temp_dir'] = '/tmp/roundcube-temp';
  $config['skin'] = 'elastic';
  $config['request_path'] = '/';
  $config['plugins'] = array_filter(array_unique(array_merge($config['plugins'], ['archive', 'zipdownload'])));

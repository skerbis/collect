<?php

rex_yform_manager_table_api::importTablesets(rex_file::get(rex_path::plugin($this->name, 'install/rex_collect_places.tableset.json')));
rex_yform_manager_table_api::importTablesets(rex_file::get(rex_path::plugin($this->name, 'install/rex_collect_places_reviews.tableset.json')));
rex_yform_manager_table::deleteCache();

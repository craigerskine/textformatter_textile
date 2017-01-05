<?php
  Class extension_Textformatter_Textile extends Extension {
  /*-------------------------------------------------------------------------
    Definition:
  -------------------------------------------------------------------------*/

    public function about() {
      return array(
        'name'      => 'Textile',
        'version'   => '1.0.0',
        'release-date'  => '2016-12-12',
        'author'    => array(
          'name'      => 'Craig Erskine',
          'website'   => 'http://craigerskine.com/'
        ),
        'description' => 'The superior text formatter.'
      );
    }
  }

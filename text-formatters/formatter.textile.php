<?php

  Class formatterTextile extends TextFormatter {

    private static $_parser;

    public function about() {
      return array(
        'name'          => 'Textformatter: Textile',
        'version'       => '1.0.0',
        'release-date'  => '2016-12-12',
        'author'        => array(
          'name'        => 'Craig Erskine',
          'website'     => 'http://craigerskine.com'
          ),
        'description'   => 'The superior text formatter.'
        );
    }

    public function run($string) {
      if(!self::$_parser) {
        if (!class_exists('Parser'))
        include_once(EXTENSIONS . '/textformatter_textile/lib/Parser.php');
        include_once(EXTENSIONS . '/textformatter_textile/lib/DataBag.php');
        include_once(EXTENSIONS . '/textformatter_textile/lib/Tag.php');
        self::$_parser = new \Netcarver\Textile\Parser();
      }

      // Textile transformation
      $result = stripslashes(self::$_parser->parse($string));

      return $result;
    }

  }

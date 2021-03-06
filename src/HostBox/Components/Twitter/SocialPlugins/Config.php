<?php

namespace HostBox\Components\Twitter\SocialPlugins;


use Nette\SmartObject;

/**
 * @property string $lang
 */
class Config {

    use SmartObject;

    /**
     * ISO-639-1 format
     * @var string
     */
    private $lang;


    /**
     * @param $lang
     */
    public function __construct($lang = 'cs') {
        $this->lang = $lang;
    }

    /**
     * @param string $lang
     * @return void
     */
    public function setLang($lang) {
        $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function getLang() {
        return $this->lang;
    }

}

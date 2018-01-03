<?php

namespace HostBox\Components\Pinterest\SocialPlugins;

use HostBox\Components\SocialPluginComponent;
use Nette\Reflection\ClassType;


/**
 * @prefix data-pin-
 */
abstract class PinterestPlugin extends SocialPluginComponent {

    /**
     * @inheritdoc
     */
    protected function putDistinctionIntoTemplate() {
        parent::putDistinctionIntoTemplate();
        $reflection = ClassType::from($this);
        if (!$reflection->hasAnnotation('href')) {
            throw new \Exception(sprintf('Class %s has not "href" annotation', $reflection->getShortName()));
        }
        $this->template->href = $this->fillVariablesInAnnotation('href');

        $text = $this->fillVariablesInAnnotation('text');
        if ($text !== NULL) {
            $this->template->text = $text;
        }
    }

}

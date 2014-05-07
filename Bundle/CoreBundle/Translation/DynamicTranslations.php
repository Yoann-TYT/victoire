<?php
namespace Victoire\Bundle\CoreBundle\Translation;

use JMS\TranslationBundle\Model\Message;
use JMS\TranslationBundle\Translation\TranslationContainerInterface;
use JMS\TranslationBundle\Model\FileSource;

class DynamicTranslations implements TranslationContainerInterface
{

    /**
     * usage example: new Message('example.keymap')->addSource('path/to/source/file', '514', '10'),
     * @return array the keys to register in jms translation
     */
    public static function getTranslationMessages()
    {
        return array(
            new Message('menu.page', 'victoire'),
            new Message('menu.page.settings', 'victoire'),
            new Message('menu.page.new', 'victoire'),
            new Message('menu.template', 'victoire'),
            new Message('menu.template.settings', 'victoire'),
            new Message('menu.template.new', 'victoire'),
            new Message('menu.sitemap', 'victoire'),
            new Message('menu.media', 'victoire'),
            new Message('widget.form.theme.label', 'victoire'),
            new Message('widget.form.theme.default', 'victoire'),
            new Message('modal.button.create.title', 'victoire'),
            new Message('modal.button.update.title', 'victoire'),
        );
    }

}

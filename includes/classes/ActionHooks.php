<?php
namespace DigitalTechnologia\MyIclinic;

use DigitalTechnologia\MyIclinic\EnqueueFiles;
use DigitalTechnologia\MyIclinic\LocalizeScripts;
use DigitalTechnologia\MyIclinic\MetaFields\BotConversationMetaField;
use DigitalTechnologia\MyIclinic\MetaFields\RegisterMetaFields;
use DigitalTechnologia\MyIclinic\PostTypes\BotConversation;
use DigitalTechnologia\MyIclinic\PostTypes\ChatbotQuery;
use DigitalTechnologia\MyIclinic\ThemeConfig;

class ActionHooks {
    use EnqueueFiles;
    use ThemeConfig;
    use ChatbotQuery;
    use LocalizeScripts;
    use BotConversation;
    use BotConversationMetaField;
    use RegisterMetaFields;

    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'wpEnqueueScriptsHookCallback']);
        add_action('after_setup_theme', [$this, 'setupThemeConfig']);
        add_action('init', [$this, 'initHookCallback'], 0);
        add_action('add_meta_boxes_chatbot-conversation', [$this, 'registerConversationMetaBox'], 10, 1);

        $this->initHookCallback();
    }

    /**
     * Method initHookCallback
     *
     * Call back for hook 'init'
     * @return void
     */
    public function initHookCallback() {
        $this->registerChatBotQueries();
        $this->registerBotConversation();
        $this->registerBotConversationMeta();
    }

    /**
     * Method wpEnqueueScriptsHookCallback
     *
     * Call back for hook 'wp_enqueue_scripts'
     * @return void
     */
    public function wpEnqueueScriptsHookCallback() {
        $this->enqueueAssetFiles();
        $this->localizeJsScripts();
    }
}

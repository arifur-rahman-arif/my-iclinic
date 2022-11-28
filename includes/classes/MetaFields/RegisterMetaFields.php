<?php
namespace DigitalTechnologia\MyIclinic\MetaFields;

trait RegisterMetaFields {
    /**
     * Method registerBotConversationMeta
     *
     * Register the bot-conversation meta keys for storing bot-conversation data in the database
     * @return void
     */
    public function registerBotConversationMeta() {
        register_post_meta('chatbot-conversation', 'bot_queries', [
            'object_subtype' => 'chatbot-conversation',
            'show_in_rest' => [
                'schema' => [
                    'single' => true,
                    'type' => 'object',
                    'properties' => [
                        'id' => [
                            'type' => 'number',
                        ],
                        'slug' => [
                            'type' => 'string',
                        ],
                    ],
                    'additionalProperties' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ]);

        register_post_meta('chatbot-conversation', 'extra_answers', [
            'object_subtype' => 'chatbot-conversation',
            'type' => 'array',
            'show_in_rest' => [
                'schema' => [
                    'single' => true,
                    'items' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ]);
    }
}

<?php
namespace DigitalTechnologia\MyIclinic\PostTypes;

trait BotConversation {
    /**
     * Method registerBotConversation
     *
     * Register Custom Post Type chatbot-conversation in WP dashboard
     * @return void
     */
    public function registerBotConversation() {
        $labels = [
            'name' => _x('Bot Conversations', 'Post Type General Name', TEXT_DOMAIN),
            'singular_name' => _x('Bot Conversation', 'Post Type Singular Name', TEXT_DOMAIN),
            'menu_name' => _x('Bot Conversations', 'Admin Menu text', TEXT_DOMAIN),
            'name_admin_bar' => _x('Bot Conversation', 'Add New on Toolbar', TEXT_DOMAIN),
            'archives' => __('Bot Conversation Archives', TEXT_DOMAIN),
            'attributes' => __('Bot Conversation Attributes', TEXT_DOMAIN),
            'parent_item_colon' => __('Parent Bot Conversation:', TEXT_DOMAIN),
            'all_items' => __('All Bot Conversations', TEXT_DOMAIN),
            'add_new_item' => __('Add New Bot Conversation', TEXT_DOMAIN),
            'add_new' => __('Add New', TEXT_DOMAIN),
            'new_item' => __('New Bot Conversation', TEXT_DOMAIN),
            'edit_item' => __('Edit Bot Conversation', TEXT_DOMAIN),
            'update_item' => __('Update Bot Conversation', TEXT_DOMAIN),
            'view_item' => __('View Bot Conversation', TEXT_DOMAIN),
            'view_items' => __('View Bot Conversations', TEXT_DOMAIN),
            'search_items' => __('Search Bot Conversation', TEXT_DOMAIN),
            'not_found' => __('Not found', TEXT_DOMAIN),
            'not_found_in_trash' => __('Not found in Trash', TEXT_DOMAIN),
            'featured_image' => __('Featured Image', TEXT_DOMAIN),
            'set_featured_image' => __('Set featured image', TEXT_DOMAIN),
            'remove_featured_image' => __('Remove featured image', TEXT_DOMAIN),
            'use_featured_image' => __('Use as featured image', TEXT_DOMAIN),
            'insert_into_item' => __('Insert into Bot Conversation', TEXT_DOMAIN),
            'uploaded_to_this_item' => __('Uploaded to this Bot Conversation', TEXT_DOMAIN),
            'items_list' => __('Bot Conversations list', TEXT_DOMAIN),
            'items_list_navigation' => __('Bot Conversations list navigation', TEXT_DOMAIN),
            'filter_items_list' => __('Filter Bot Conversations list', TEXT_DOMAIN),
        ];

        $args = [
            'label' => __('Bot Conversation', TEXT_DOMAIN),
            'description' => __('', TEXT_DOMAIN),
            'labels' => $labels,
            'menu_icon' => 'dashicons-format-chat',
            'supports' => ['title', 'custom-fields'],
            'taxonomies' => [],
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'exclude_from_search' => false,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        ];

        register_post_type('chatbot-conversation', $args);

        $this->createSampleData();
    }
}

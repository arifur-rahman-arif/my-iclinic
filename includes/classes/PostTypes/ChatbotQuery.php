<?php
namespace DigitalTechnologia\MyIclinic\PostTypes;

trait ChatbotQuery {
    /**
     * Method register
     *
     * Register Custom Post Type Bot Query in WP dashboard
     * @return void
     */
    public function registerChatBotQueries() {
        $labels = [
            'name' => _x('Bot Queries', 'Post Type General Name', TEXT_DOMAIN),
            'singular_name' => _x('Bot Query', 'Post Type Singular Name', TEXT_DOMAIN),
            'menu_name' => _x('Bot Queries', 'Admin Menu text', TEXT_DOMAIN),
            'name_admin_bar' => _x('Bot Query', 'Add New on Toolbar', TEXT_DOMAIN),
            'archives' => __('Bot Query Archives', TEXT_DOMAIN),
            'attributes' => __('Bot Query Attributes', TEXT_DOMAIN),
            'parent_item_colon' => __('Parent Bot Query:', TEXT_DOMAIN),
            'all_items' => __('All Bot Queries', TEXT_DOMAIN),
            'add_new_item' => __('Add New Bot Query', TEXT_DOMAIN),
            'add_new' => __('Add New', TEXT_DOMAIN),
            'new_item' => __('New Bot Query', TEXT_DOMAIN),
            'edit_item' => __('Edit Bot Query', TEXT_DOMAIN),
            'update_item' => __('Update Bot Query', TEXT_DOMAIN),
            'view_item' => __('View Bot Query', TEXT_DOMAIN),
            'view_items' => __('View Bot Queries', TEXT_DOMAIN),
            'search_items' => __('Search Bot Query', TEXT_DOMAIN),
            'not_found' => __('Not found', TEXT_DOMAIN),
            'not_found_in_trash' => __('Not found in Trash', TEXT_DOMAIN),
            'featured_image' => __('Featured Image', TEXT_DOMAIN),
            'set_featured_image' => __('Set featured image', TEXT_DOMAIN),
            'remove_featured_image' => __('Remove featured image', TEXT_DOMAIN),
            'use_featured_image' => __('Use as featured image', TEXT_DOMAIN),
            'insert_into_item' => __('Insert into Bot Query', TEXT_DOMAIN),
            'uploaded_to_this_item' => __('Uploaded to this Bot Query', TEXT_DOMAIN),
            'items_list' => __('Bot Queries list', TEXT_DOMAIN),
            'items_list_navigation' => __('Bot Queries list navigation', TEXT_DOMAIN),
            'filter_items_list' => __('Filter Bot Queries list', TEXT_DOMAIN),
        ];

        $args = [
            'label' => __('Bot Query', TEXT_DOMAIN),
            'description' => __('', TEXT_DOMAIN),
            'labels' => $labels,
            'menu_icon' => 'dashicons-testimonial',
            'supports' => ['title'],
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

        register_post_type('chatbot-query', $args);

        $this->createSampleData();
    }

    /**
     * Create sample data in chatbot-query post type if there is no post created there already
     * @return null
     */
    public function createSampleData() {
        $chatbotQuery = get_posts([
            'post_type' => 'chatbot-query',
            'posts_per_page' => 1,
            'post_status' => ['publish', 'draft'],
        ]);

        if (count($chatbotQuery) > 0) {
            return;
        }

        $sampleData = [
            'Blurry vision',
            'Dry eyes',
            'Glares and halos around lights',
            'Dim vision/fading colours',
            'Can’t see in the distance (landscape, motorway signs)',
            'Can’t see between distance and up close (cars on the road, traffic lights)',
            'Can’t see up close (reading, phone, computer at work)',
            'Itchy, sore and red swelling around eyes',
            'Something else',
        ];

        foreach ($sampleData as $data) {
            wp_insert_post([
                'post_type' => 'chatbot-query',
                'post_title' => $data,
                'post_status' => 'publish',
            ]);
        }
    }
}

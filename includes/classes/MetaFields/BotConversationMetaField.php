<?php
namespace DigitalTechnologia\MyIclinic\MetaFields;

trait BotConversationMetaField {
    /**
     * @param object $post
     */
    public function registerConversationMetaBox(object $post) {
        add_meta_box(
            'botConversation',
            'Miscellaneous Data:',
            [$this, 'botConversationHTML'],
            ['chatbot-conversation'],
            'normal',
            'high'
        );
    }

    /**
     * @param object $post
     */
    public function botConversationHTML(object $post) {
        echo '
            <div>
				<div>
					<h3><span>Q:</span> Selected Bot Queries:</h3>
					<div style="display: flex; justify-content: flex-start; align-items: center; gap: 0.5rem;">
						' .
            $this->showBotQueries($post) .
            '
					</div>
				</div>

			   <div>
					<h3><span>Q:</span> Is there anything you would like to do that glasses/contacts prevent you from doing?</h3>
					<div style="display: flex; justify-content: flex-start; align-items: center; gap: 0.5rem;">
                        ' .
            $this->showExtraAnswers($post) .
            '
					</div>
			   </div>
            </div>
       ';
    }

    /**
     * Method showBotQueries
     *
     * List all the bot queries in html format from the post meta
     * @param  object   $post [explicite description]
     * @return string
     */
    public function showBotQueries(object $post): string {
        $botQueries = get_post_meta($post->ID, 'bot_queries');

        if (count($botQueries) < 1) {
            return '';
        }

        $botQueriesHTML = '';

        foreach ($botQueries as $query) {
            $botQueriesHTML .=
                '<strong style="border: 2px solid #33d9ff; border-radius: 2rem; padding: 0.2rem 1rem; cursor: pointer;">
                <a style="text-decoration: none; color: #000" target="_blank" href="' .
                esc_url(get_edit_post_link($query['id'])) .
                '">' .
                get_the_title($query['id']) .
                '</a></strong>
            ';
        }

        return $botQueriesHTML;
    }

    /**
     * Method showExtraAnswers
     *
     * List all the extra answers that user has answered in html format from the post meta
     * @param  object   $post [explicite description]
     * @return string
     */
    public function showExtraAnswers(object $post): string {
        $extraAnswers = get_post_meta($post->ID, 'extra_answers');

        if (count($extraAnswers) < 1) {
            return '';
        }

        $extraAnswersHTML = '';

        foreach ($extraAnswers as $query) {
            $extraAnswersHTML .=
                '<strong style="border: 2px solid #33d9ff; border-radius: 2rem; padding: 0.2rem 1rem;">' .
                esc_html($query[0]) .
                '</strong>';
        }

        return $extraAnswersHTML;
    }
}

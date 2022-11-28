import { useContext, useEffect, useState } from 'react';
import { chatDelayDuration } from '../constant';
import { AppContextInterface, AppCtx, SelectedChatQueriesType } from '../context/Context';
import { ChatTyping } from './chat-typing';

interface PropInterface {
    initialQuestions: string[];
}

/**
 * Display the chat queries options
 *
 * @param {PropInterface} { initialQuestions }
 * @return {*}  {JSX.Element}
 */
const ChatQueries = ({ initialQuestions }: PropInterface): JSX.Element => {
    const [initialQuestionsVisible, setInitialQuestionsVisible] = useState<boolean>(false);
    const [chatQueries, setChatQueries] = useState<any | null>(null);
    const appCtx: AppContextInterface | null = useContext(AppCtx);

    // Hold the components until the initialQuestions loaded
    useEffect(() => {
        const initialQuestionsDelayedTime = chatDelayDuration * initialQuestions.length;

        setTimeout(() => {
            setInitialQuestionsVisible(true);

            fetchQueries();
        }, initialQuestionsDelayedTime);
    }, []);

    /**
     * Fetch the queries from the WP data source
     */
    const fetchQueries = () => {
        fetch(`${iclinic.restUrl}chatbot-query?order=asc&per_page=20`)
            .then((response) => response.json())
            .then((data) => {
                setChatQueries(data);
            });
    };

    const selectQuery = (id: number, titleSlug: string) => {
        if (appCtx?.optionsSelected) return;

        appCtx?.setSelectedChatQueries((current: SelectedChatQueriesType[]) => {
            // If that items is not selected than push the number to the array
            let idIndex = -1;

            current?.forEach((chatQuery: SelectedChatQueriesType, index: number) => {
                if (chatQuery.id === id) return (idIndex = index);
            });

            if (idIndex === -1) {
                appCtx?.setShowFooter(true);
                appCtx.setButtonText('Options Selected');

                // If slug is 'something-else' then remove all other items from the array
                if (titleSlug === 'something-else') {
                    return [
                        {
                            id,
                            slug: titleSlug
                        }
                    ];
                }

                // If 'something-else' element is already in the array and user selects another option
                // than remove that 'something-else' element from the array
                current?.forEach((chatQuery: SelectedChatQueriesType, index: number) => {
                    if (chatQuery.slug === 'something-else') {
                        current.splice(index, 1);

                        return [
                            ...current,
                            {
                                id,
                                slug: titleSlug
                            }
                        ];
                    }
                });

                // If current array contains the 'something-else' element &
                // user adds a new element than remove that 'something else' element from the array
                return [
                    ...current,
                    {
                        id,
                        slug: titleSlug
                    }
                ];
            }

            // If number is already there in the array than remove the number from the array it the items will be un-selected
            current.splice(idIndex, 1);

            if (current.length < 1) appCtx?.setShowFooter(false);

            return [...current];
        });
    };

    return (
        <>
            {initialQuestionsVisible && (
                <div className="flex items-start justify-start gap-4">
                    <img
                        className="max-h-[3.9rem] min-h-[3.9rem] min-w-[3.9rem] max-w-[3.9rem] grow rounded-[50%] object-cover"
                        src="https://images.unsplash.com/photo-1592511949381-4ef6480a09d0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGdyaWx8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                    />
                    {!chatQueries && <ChatTyping />}

                    {chatQueries && (
                        <div className="mb-8 flex flex-wrap items-center justify-start gap-4">
                            {chatQueries?.map((chatQuery: any, index: number) => {
                                const selectedClass = appCtx?.selectedChatQueries?.filter((selectedQuery) => {
                                    return selectedQuery.id === chatQuery?.id;
                                }).length
                                    ? 'bg-green-500 text-white border-green-500'
                                    : 'border-brand hover:bg-brand hover:text-white';

                                // If options are selected than make them inactive
                                const optionsSelectedClass = appCtx?.optionsSelected
                                    ? 'pointer-events-none opacity-70'
                                    : null;

                                return (
                                    <span
                                        title={chatQuery?.title?.rendered || null}
                                        key={index}
                                        className={`${selectedClass} ${optionsSelectedClass} relative cursor-pointer rounded-primary border-2 px-4 py-4 pt-[0.7rem] text-left font-fontBold text-[1.6rem] leading-8 transition-colors`}
                                        onClick={() => selectQuery(chatQuery?.id, chatQuery.slug)}
                                    >
                                        {chatQuery?.title?.rendered || null}
                                    </span>
                                );
                            })}
                        </div>
                    )}
                </div>
            )}
        </>
    );
};

export default ChatQueries;

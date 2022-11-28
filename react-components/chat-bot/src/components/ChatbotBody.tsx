import { useContext, useEffect, useRef, useState } from 'react';
import { formQuestions, initialQuestions, optionsAfterSelectQuestion } from '../botQuestion';
import { AppContextInterface, AppCtx } from '../context/Context';
import ChatForm from './chat-form/ChatForm';
import { ChatTyping } from './chat-typing';
import ChatLeft from './ChatLeft';
import ChatQueries from './ChatQueries';
import ChatRight from './ChatRight';

const ChatbotBody = () => {
    const appCtx: AppContextInterface | null = useContext(AppCtx);
    const scrollRef = useRef<HTMLDivElement>(null);

    useEffect(() => {
        scrollRef?.current?.scrollIntoView({ behavior: 'smooth' });
    }, [appCtx?.scrollIntoView, appCtx?.optionsSelected, appCtx?.extraAnswers, appCtx?.formSubmitted]);

    return (
        <>
            {/* Chat body */}
            <div
                id="chatbot-body"
                className="mt-8 grid h-[45rem] w-full grid-cols-1 content-start gap-8 overflow-x-hidden overflow-y-scroll px-[2.5rem]"
            >
                <ChatLeft initialQuestions={initialQuestions} />
                <ChatQueries initialQuestions={initialQuestions} />

                {appCtx?.optionsSelected && <ChatLeft initialQuestions={optionsAfterSelectQuestion} />}
                {appCtx?.warnings !== undefined && appCtx.warnings.length > 0 && (
                    <ChatLeft initialQuestions={appCtx.warnings} />
                )}

                {appCtx?.extraAnswers !== undefined && appCtx.extraAnswers.length > 0 && (
                    <>
                        <ChatRight chatList={[appCtx?.extraAnswers.join(', ')]} />
                        <ChatLeft initialQuestions={formQuestions} />
                    </>
                )}

                {appCtx?.extraAnswers.length && <ChatForm />}
                {appCtx?.formSubmitted && <ChatLeft initialQuestions={['Connecting you to our specialists']} />}

                <div id="chatbody-bottom-point" ref={scrollRef}></div>
            </div>
            {/* End of chat body */}
        </>
    );
};

export default ChatbotBody;

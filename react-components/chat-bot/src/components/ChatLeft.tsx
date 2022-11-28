import { useState } from 'react';
import { chatDelayDuration } from '../constant';
import { ChatTyping } from './chat-typing';
import DelayedComponent from './DelayedComponent';

interface ChatLeftInterface {
    initialQuestions: string[];
}

const ChatLeft = ({ initialQuestions }: ChatLeftInterface): JSX.Element => {
    const [showChatAnimation, setShowChatAnimation] = useState<boolean>(true);

    return (
        <>
            {/* Continuous chat left sided*/}
            <div className="flex items-start justify-start gap-4">
                <img
                    className="max-h-[3.9rem] min-h-[3.9rem] min-w-[3.9rem] max-w-[3.9rem] grow rounded-[50%] object-cover"
                    src="https://images.unsplash.com/photo-1592511949381-4ef6480a09d0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGdyaWx8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                />
                <div className="grid grid-cols-1 justify-items-start gap-[0.7rem]">
                    {initialQuestions?.map((item, index) => {
                        const waitBeforeShow = chatDelayDuration * (index + 1);

                        return (
                            <DelayedComponent
                                waitBeforeShow={waitBeforeShow}
                                key={index}
                                index={index}
                                setShowChatAnimation={setShowChatAnimation}
                                initialQuestionsLength={initialQuestions.length}
                            >
                                <p className="rounded-tl-[1.5rem] rounded-tr-[1.5rem] rounded-br-[1.5rem] bg-skyblue px-[1.5rem] py-4 text-left font-fontMedium">
                                    {item}
                                </p>
                            </DelayedComponent>
                        );
                    })}

                    {showChatAnimation && <ChatTyping />}
                </div>
            </div>
            {/* End of continuous chat left-sided */}
        </>
    );
};

export default ChatLeft;

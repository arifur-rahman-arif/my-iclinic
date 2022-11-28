import { useEffect, useRef, useState } from 'react';
import ChatbotBody from './components/ChatbotBody';
import ChatbotHeader from './components/ChatbotHeader';
import ChatIcon from './components/ChatIcon';
import Context from './context/Context';
import ChatFooter from './components/chat-footer/ChatFooter';

const App = () => {
    const chatIcon = useRef<HTMLDivElement>(null);
    const chatBox = useRef<HTMLDivElement>(null);
    const [timer, setTimer] = useState<any>();
    const [messageSeen, setMessageSeen] = useState<boolean>(false);

    const chatBouncing = () => {
        gsap.fromTo(
            chatIcon.current,
            {
                x: 130,
                duration: 2.5,
                ease: 'elastic.out(2, 0.1)'
            },
            {
                x: 0,
                duration: 2.5,
                ease: 'elastic.out(2, 0.1)'
            }
        );
    };

    useEffect(() => {
        chatBouncing();
        const intervalTimer = setInterval(() => {
            chatBouncing();
        }, 6000);

        setTimer(intervalTimer);

        // // Open the chat box with animation
        // gsap.to(chatBox.current, {
        //     transform: 'translateY(-2rem)',
        //     delay: 0.2,
        //     duration: 0.2
        // });
    }, []);

    const openChatBox = () => {
        clearInterval(timer);

        setMessageSeen(true);

        gsap.to(chatIcon.current, {
            y: 200,
            duration: 0.2,
            ease: 'power4.out'
        });

        // Open the chat box with animation
        gsap.to(chatBox.current, {
            transform: 'translateY(-2rem)',
            delay: 0.2,
            duration: 0.2
        });
    };

    const closeChatbox = () => {
        gsap.to(chatIcon.current, {
            y: 0,
            duration: 0.2,
            ease: 'power4.in',
            delay: 0.2
        });
        // Close the chatbox
        gsap.to(chatBox.current, {
            transform: 'translateY(calc(100% + 2rem))',
            delay: 0.2,
            duration: 0.2
        });
    };

    return (
        <Context>
            <div className="fixed bottom-0 right-0 z-10 mr-12 mb-8">
                <div className="relative">
                    <div
                        ref={chatIcon}
                        onClick={openChatBox}
                        className="relative flex h-[6.5rem] w-[6.5rem] cursor-pointer items-center justify-center rounded-[50%] bg-brand p-[1.5rem] shadow-2xl transition-all"
                    >
                        <ChatIcon />$
                        {!messageSeen && (
                            <span className="absolute top-0 right-[-0.5rem] flex h-[2.1rem] w-[2.1rem] items-center justify-center rounded-[50%] bg-red-600 ">
                                <span className="translate-y-[-0.2rem] font-fontBold text-[1.8rem] text-white">1</span>
                            </span>
                        )}
                    </div>
                </div>

                {/* Chat box area */}
                <div
                    ref={chatBox}
                    className={`fixed bottom-0 right-0 mr-12 grid max-h-[67rem] w-[41rem] translate-y-[calc(100%_+_2rem)] grid-cols-1 overflow-hidden rounded-primary bg-white pb-8 drop-shadow-primary`}
                >
                    <ChatbotHeader closeChatbox={closeChatbox} />
                    <ChatbotBody />
                    <ChatFooter />
                </div>
                {/* End of chat-box area */}
            </div>
        </Context>
    );
};

export default App;

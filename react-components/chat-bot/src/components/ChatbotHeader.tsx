import CrossIcon from './CrossIcon';

interface ChatBotHeaderProps {
    closeChatbox: Function;
}

const ChatbotHeader = ({ closeChatbox }: ChatBotHeaderProps) => {
    return (
        <>
            {/* Header */}
            <div className="grid h-[6.5rem] grid-cols-2 bg-brand pl-[2.5rem]">
                <div className="relative flex h-full items-center gap-4">
                    <div className="relative h-[4rem] w-[4rem]">
                        <img
                            className="h-[4rem] w-[4rem] rounded-[50%] object-cover"
                            src="https://images.unsplash.com/photo-1592511949381-4ef6480a09d0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGdyaWx8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                        />
                        <span className="absolute bottom-0 right-0 z-10 h-4 w-4 rounded-[50%] bg-[#00fc00]"></span>
                    </div>
                    <div className="flex flex-col justify-start">
                        <strong className="font-fontBold">My-iClinic</strong>
                        <span className="font-fontLight">Online</span>
                    </div>
                </div>

                <div className="justify-self-end">
                    <div
                        onClick={() => closeChatbox()}
                        className="cursor-pointer p-8 transition-all hover:bg-[#01000012]"
                    >
                        <CrossIcon />
                    </div>
                </div>
            </div>
            {/* End of header */}
        </>
    );
};

export default ChatbotHeader;

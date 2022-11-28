interface PropInterface {
    chatList: string[];
}

/**
 * Chat-bot right side chat interface component
 *
 * @param {PropInterface} { chatList }
 * @return {*}  {JSX.Element}
 */
const ChatRight = ({ chatList }: PropInterface): JSX.Element => {
    return (
        <>
            {/* Continuous chat right sided*/}
            <div className="flex flex-row-reverse items-start justify-start gap-4">
                <img
                    className="max-h-[3.9rem] min-h-[3.9rem] min-w-[3.9rem] max-w-[3.9rem] grow rounded-[50%] object-cover"
                    src="https://images.unsplash.com/photo-1638507275848-dd38800d1d44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                />
                <div className="grid grid-cols-1 justify-items-end gap-[0.5rem]">
                    {chatList?.map((item, index) => {
                        return (
                            <p
                                key={index}
                                className="rounded-tl-[1.5rem] rounded-tr-[1.5rem] rounded-bl-[1.5rem] bg-brand px-[1.5rem] py-4 text-left font-fontBold"
                            >
                                {item}
                            </p>
                        );
                    })}
                </div>
            </div>
            {/* End of continuous chat right-sided */}
        </>
    );
};

export default ChatRight;

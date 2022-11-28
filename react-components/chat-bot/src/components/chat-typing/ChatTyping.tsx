import styles from './styles/ChatTyping.module.scss';

const ChatTyping = () => {
    return (
        <>
            {/* Continuous chat left sided*/}
            {/* <div className="mb-8 flex items-center justify-start gap-4">
                <img
                    className="max-h-[3.9rem] min-h-[3.9rem] min-w-[3.9rem] max-w-[3.9rem] grow rounded-[50%] object-cover"
                    src="https://images.unsplash.com/photo-1592511949381-4ef6480a09d0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGdyaWx8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                />
                <div
                    className={`${styles.chat} h-[12rem] grid grid-cols-3 justify-items-start gap-4 rounded-tl-[1.5rem] rounded-tr-[1.5rem] rounded-br-[1.5rem] bg-skyblue px-12 py-4`}
                >
                    <span className="block h-[1.3rem] w-[1.3rem] rounded-[50%] bg-brand"></span>
                    <span className="block h-[1.3rem] w-[1.3rem] rounded-[50%] bg-brand"></span>
                    <span className="block h-[1.3rem] w-[1.3rem] rounded-[50%] bg-brand"></span>
                </div>
            </div> */}
            <div
                className={`${styles.chat} grid w-[12rem] grid-cols-3 justify-items-start gap-4 rounded-tl-[1.5rem] rounded-tr-[1.5rem] rounded-br-[1.5rem] bg-skyblue px-12 py-4`}
            >
                <span className="block h-[1.3rem] w-[1.3rem] rounded-[50%] bg-brand"></span>
                <span className="block h-[1.3rem] w-[1.3rem] rounded-[50%] bg-brand"></span>
                <span className="block h-[1.3rem] w-[1.3rem] rounded-[50%] bg-brand"></span>
            </div>
            {/* End of continuous chat left-sided */}
        </>
    );
};

export default ChatTyping;

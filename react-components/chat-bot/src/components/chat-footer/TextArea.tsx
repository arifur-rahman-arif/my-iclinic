import { ChangeEvent, useState, KeyboardEvent, useRef, useContext } from 'react';
import { AppContextInterface, AppCtx } from '../../context/Context';

const TextArea = () => {
    const appCtx: AppContextInterface | null = useContext(AppCtx);
    const textAreaRef = useRef<HTMLTextAreaElement>(null);

    const [text, setText] = useState<string>('');

    const handleChange = (event: ChangeEvent<HTMLTextAreaElement>) => {
        const value: string = event.target.value;

        setText(value);
    };

    /**
     * Control the form when user press on enter or the ctrlKey
     *
     * @param {KeyboardEvent} event
     */
    const submitFormOnEnter = (event: KeyboardEvent) => {
        // Enter to a new line when Ctrl+Enter is pressed
        if (event.ctrlKey && event.key == 'Enter') {
            setText(text + '\r\n');
        }

        // Submit thg form when only Enter key is pressed
        if (event.code === 'Enter' && !(event.ctrlKey && event.key == 'Enter')) {
            event.preventDefault();

            if (!text) return;

            formatText();
            setText('');
            textAreaRef.current?.focus();
        }
    };

    /**
     * Format the text and submit the data into react context
     *
     * @return {*}
     */
    const formatText = () => {
        const splitTexts: string[] = text.split(',');

        if (splitTexts.length < 0) {
            // if(appCtx?.errorCount !== undefined && appCtx?.errorCount > 1) {
            //     appCtx?.setWarnings((current: string[]) => {
            //         return [...current, ...[
            //             'If you are having problems. ',
            //             'Please enter comma separated answers'
            //         ]]
            //     })

            //     return false;
            // }

            appCtx?.setWarnings((current: string[]) => {
                return [...current, ...['Unable to process you answer.', 'Please enter comma separated answers']];
            });

            return;
            // appCtx?.setErrorCount(appCtx.errorCount++)
        }

        appCtx?.setExtraAnswers(splitTexts.map((splitText: string) => splitText.trim()));
        appCtx?.setScrollIntoView(Date.now());
    };

    return (
        <form className="form mt-8 px-[2.5rem]">
            <div className="form__input-wrapper">
                <textarea
                    className="form__input !min-h-min placeholder:font-fontMedium"
                    name="name"
                    id="name"
                    placeholder="Type your message"
                    value={text}
                    onChange={handleChange}
                    onKeyDown={submitFormOnEnter}
                    ref={textAreaRef}
                />
            </div>
        </form>
    );
};

export default TextArea;

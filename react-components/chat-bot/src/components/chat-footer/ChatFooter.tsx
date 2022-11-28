import { useContext } from 'react';
import { AppContextInterface, AppCtx } from '../../context/Context';
import SubmitButton from './SubmitButton';
import TextArea from './TextArea';

const ChatFooter = () => {
    const appCtx: AppContextInterface | null = useContext(AppCtx);

    return (
        <>
            {appCtx?.showFooter && !appCtx?.optionsSelected && <SubmitButton buttonType="options-submitter" />}
            {appCtx?.showFooter && appCtx?.showFormSubmitButton && !appCtx.formSubmitted && (
                <SubmitButton buttonType="form-submitter" />
            )}
            {appCtx?.showFooter &&
                appCtx?.optionsSelected &&
                appCtx?.lastMessageDelivered &&
                !appCtx?.extraAnswers.length && <TextArea />}
            {!appCtx?.showFooter && appCtx?.optionsSelected && <div className="min-h-[2rem] w-full"></div>}
        </>
    );
};

export default ChatFooter;

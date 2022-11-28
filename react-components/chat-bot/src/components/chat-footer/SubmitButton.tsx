import { useContext } from 'react';
import { AppContextInterface, AppCtx } from '../../context/Context';

interface PropInterface {
    buttonType: 'options-submitter' | 'form-submitter';
}

const SubmitButton = ({ buttonType }: PropInterface): JSX.Element => {
    const appCtx: AppContextInterface | null = useContext(AppCtx);

    const submitOptions = () => {
        appCtx?.setOptionsSelected(true);
        appCtx?.setButtonText('Submit');
    };

    return (
        <div className="grid h-full w-full place-items-center pt-8">
            {buttonType === 'options-submitter' && (
                <button onClick={submitOptions} className="button w-full">
                    {appCtx?.buttonText}
                </button>
            )}

            {buttonType === 'form-submitter' && (
                <button className="button w-full" type="submit" form="chatbot-form">
                    {appCtx?.buttonText}
                </button>
            )}
        </div>
    );
};

export default SubmitButton;

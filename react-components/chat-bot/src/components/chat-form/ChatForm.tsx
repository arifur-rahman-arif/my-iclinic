import { ChangeEvent, FormEvent, useContext, useEffect, useState } from 'react';
import { formQuestions } from '../../botQuestion';
import { chatDelayDuration } from '../../constant';
import { AppContextInterface, AppCtx } from '../../context/Context';
import { ChatTyping } from '../chat-typing';
import PrimaryDelayComponent from '../PrimaryDelayComponent';

const ChatForm = () => {
    const appCtx: AppContextInterface | null = useContext(AppCtx);

    const [formVisible, setFormVisible] = useState<boolean>(false);
    const [name, setName] = useState<string>('');
    const [email, setEmail] = useState<string>('');
    const [contactNumber, setContactNumber] = useState<string>('');
    const [formDisabled, setFormDisabled] = useState<boolean>(false);

    // Hold the components until the initialQuestions loaded
    useEffect(() => {
        setTimeout(() => {
            setFormVisible(true);
            appCtx?.setShowFormSubmitButton(true);
        }, chatDelayDuration * (formQuestions.length + 1));
    }, []);

    /**
     * Handle the form submit & submit the form data to react context store
     *
     * @param {FormEvent<HTMLFormElement>} event
     */
    const handleSubmit = (event: FormEvent<HTMLFormElement>) => {
        event.preventDefault();

        // const botQueryData: BotQueryDataType = {
        //     selectedChatQueries: appCtx?.selectedChatQueries,
        //     extraQueryAnswers: appCtx?.extraAnswers,
        //     chatFormData: {
        //         name,
        //         email,
        //         contactNumber
        //     }
        // };

        appCtx?.setButtonText('Submitting...');
        appCtx?.setScrollIntoView(Date.now());
        setFormDisabled(true);

        fetch(`${iclinic.restUrl}chatbot-conversation?`, {
            method: 'POST',
            body: JSON.stringify({
                title: `${name}, ${email}, ${contactNumber}`,
                status: 'publish',
                meta: {
                    bot_queries: appCtx?.selectedChatQueries,
                    extra_answers: appCtx?.extraAnswers || []
                }
            }),
            headers: {
                'X-WP-NONCE': iclinic.nonce,
                'Content-Type': 'application/json'
            }
        })
            .then((response) => response.json())
            .then((data) => {
                appCtx?.setFormSubmitted(true);
            })
            .catch((error) => {
                setFormDisabled(false);
                console.error(error);
            });
    };

    return (
        <>
            <PrimaryDelayComponent waitBeforeShow={chatDelayDuration * formQuestions.length}>
                {formVisible ? (
                    <></>
                ) : (
                    <div className="flex items-start justify-start gap-4">
                        <img
                            className="max-h-[3.9rem] min-h-[3.9rem] min-w-[3.9rem] max-w-[3.9rem] grow rounded-[50%] object-cover"
                            src="https://images.unsplash.com/photo-1592511949381-4ef6480a09d0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGdyaWx8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                        />

                        <ChatTyping />
                    </div>
                )}
            </PrimaryDelayComponent>

            <PrimaryDelayComponent waitBeforeShow={chatDelayDuration * (formQuestions.length + 1)}>
                <form className="form mt-[1.5rem] flex w-full flex-col gap-8" id="chatbot-form" onSubmit={handleSubmit}>
                    <div className={`form__input-wrapper ${formDisabled && 'opacity-70'}`}>
                        <label className="form__label" htmlFor="name">
                            Name
                            <span className="input-required">*</span>
                        </label>
                        <input
                            className="form__input"
                            type="text"
                            name="name"
                            id="name"
                            value={name}
                            required
                            disabled={formDisabled}
                            onChange={(event: ChangeEvent<HTMLInputElement>) => setName(event.target.value as string)}
                        />
                    </div>

                    <div className={`form__input-wrapper ${formDisabled && 'opacity-70'}`}>
                        <label className="form__label" htmlFor="name">
                            Email
                            <span className="input-required">*</span>
                        </label>
                        <input
                            className="form__input"
                            type="email"
                            name="email"
                            id="email"
                            value={email}
                            required
                            disabled={formDisabled}
                            onChange={(event: ChangeEvent<HTMLInputElement>) => setEmail(event.target.value as string)}
                        />
                    </div>

                    <div className={`form__input-wrapper ${formDisabled && 'opacity-70'}`}>
                        <label className="form__label" htmlFor="name">
                            Contact number
                            <span className="input-required">*</span>
                        </label>
                        <input
                            className="form__input"
                            type="text"
                            name="phone"
                            id="phone"
                            value={contactNumber}
                            required
                            disabled={formDisabled}
                            onChange={(event: ChangeEvent<HTMLInputElement>) =>
                                setContactNumber(event.target.value as string)
                            }
                        />
                    </div>
                </form>
            </PrimaryDelayComponent>
        </>
    );
};

export default ChatForm;

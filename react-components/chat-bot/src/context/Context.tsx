import { useState, createContext, useEffect, Dispatch, SetStateAction } from 'react';

export type SelectedChatQueriesType = {
    id: number;
    slug: string;
};

type ChatFormDataType = {
    name: string;
    email: string;
    contactNumber: string;
};

export type BotQueryDataType = {
    selectedChatQueries: SelectedChatQueriesType[] | undefined;
    extraQueryAnswers: string[] | undefined;
    chatFormData: ChatFormDataType | undefined;
};

export interface AppContextInterface {
    selectedChatQueries: SelectedChatQueriesType[];
    setSelectedChatQueries: Dispatch<SetStateAction<SelectedChatQueriesType[]>>;
    showButton: boolean;
    setShowButton: Dispatch<SetStateAction<boolean>>;
    buttonText: string;
    setButtonText: Dispatch<SetStateAction<string>>;
    showFooter: boolean;
    setShowFooter: Dispatch<SetStateAction<boolean>>;
    optionsSelected: boolean;
    setOptionsSelected: Dispatch<SetStateAction<boolean>>;
    scrollIntoView: number | undefined;
    setScrollIntoView: Dispatch<SetStateAction<number | undefined>>;
    lastMessageDelivered: boolean;
    setLastMessageDelivered: Dispatch<SetStateAction<boolean>>;
    warnings: string[];
    setWarnings: Dispatch<SetStateAction<string[]>>;
    errorCount: number;
    setErrorCount: Dispatch<SetStateAction<number>>;
    extraAnswers: string[];
    setExtraAnswers: Dispatch<SetStateAction<string[]>>;
    showFormSubmitButton: boolean;
    setShowFormSubmitButton: Dispatch<SetStateAction<boolean>>;
    formSubmitted: boolean;
    setFormSubmitted: Dispatch<SetStateAction<boolean>>;
    // botQueryData: BotQueryDataType | undefined;
    // setBotQueryData: Dispatch<SetStateAction<BotQueryDataType | undefined>>;
}

interface PropInterface {
    children: Array<JSX.Element> | JSX.Element;
}

export const AppCtx = createContext<AppContextInterface | null>(null);

const Context = ({ children }: PropInterface): JSX.Element => {
    const [selectedChatQueries, setSelectedChatQueries] = useState<SelectedChatQueriesType[]>([]);
    const [showButton, setShowButton] = useState<boolean>(false);
    const [buttonText, setButtonText] = useState<string>('Send');
    const [showFooter, setShowFooter] = useState<boolean>(false);
    const [optionsSelected, setOptionsSelected] = useState<boolean>(false);
    const [scrollIntoView, setScrollIntoView] = useState<number | undefined>();
    const [lastMessageDelivered, setLastMessageDelivered] = useState<boolean>(false);
    const [warnings, setWarnings] = useState<string[]>([]);
    const [errorCount, setErrorCount] = useState<number>(0);
    const [extraAnswers, setExtraAnswers] = useState<string[]>([]);
    const [showFormSubmitButton, setShowFormSubmitButton] = useState<boolean>(false);
    const [formSubmitted, setFormSubmitted] = useState<boolean>(false);
    // const [botQueryData, setBotQueryData] = useState<BotQueryDataType | undefined>();

    return (
        <AppCtx.Provider
            value={{
                selectedChatQueries,
                setSelectedChatQueries,
                showButton,
                setShowButton,
                buttonText,
                setButtonText,
                showFooter,
                setShowFooter,
                optionsSelected,
                setOptionsSelected,
                scrollIntoView,
                setScrollIntoView,
                lastMessageDelivered,
                setLastMessageDelivered,
                warnings,
                setWarnings,
                errorCount,
                setErrorCount,
                extraAnswers,
                setExtraAnswers,
                showFormSubmitButton,
                setShowFormSubmitButton,
                formSubmitted,
                setFormSubmitted
                // botQueryData,
                // setBotQueryData
            }}
        >
            {children}
        </AppCtx.Provider>
    );
};

export default Context;

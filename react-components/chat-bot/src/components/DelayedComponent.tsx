import { useState, useEffect, SetStateAction, Dispatch, useContext } from 'react';
import { AppContextInterface, AppCtx } from '../context/Context';

interface PropsInterface {
    children: JSX.Element;
    index: number;
    waitBeforeShow?: number;
    setShowChatAnimation: Dispatch<SetStateAction<boolean>>;
    initialQuestionsLength: number;
}

/**
 * Delay the rendering of the components and show a chat animation in that delayed time
 *
 * @param {PropsInterface} {
 *     children,
 *     waitBeforeShow = 500,
 *     index,
 *     setShowChatAnimation,
 *     initialQuestionsLength
 * }
 * @return {*}
 */
const DelayedComponent = ({
    children,
    waitBeforeShow = 800,
    index,
    setShowChatAnimation,
    initialQuestionsLength
}: PropsInterface): any => {
    const appCtx: AppContextInterface | null = useContext(AppCtx);
    const [isShown, setIsShown] = useState(false);

    useEffect(() => {
        appCtx?.setLastMessageDelivered(false);
    }, []);

    useEffect(() => {
        const timer = setTimeout(() => {
            if (index === initialQuestionsLength - 1) {
                setShowChatAnimation(false);
                appCtx?.setLastMessageDelivered(true);
            }

            setIsShown(true);
            appCtx?.setScrollIntoView(Date.now());
        }, waitBeforeShow);

        return () => clearTimeout(timer);
    }, [waitBeforeShow]);

    return isShown ? children : null;
};

export default DelayedComponent;

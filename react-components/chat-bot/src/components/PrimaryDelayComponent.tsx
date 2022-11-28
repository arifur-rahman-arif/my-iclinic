import { useState, useEffect, useContext } from 'react';
import { AppContextInterface, AppCtx } from '../context/Context';

interface PropsInterface {
    children: JSX.Element;
    waitBeforeShow?: number;
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
const PrimaryDelayComponent = ({ children, waitBeforeShow = 800 }: PropsInterface): any => {
    const appCtx: AppContextInterface | null = useContext(AppCtx);
    const [isShown, setIsShown] = useState(false);

    useEffect(() => {
        appCtx?.setLastMessageDelivered(false);
    }, []);

    useEffect(() => {
        const timer = setTimeout(() => {
            setIsShown(true);
            appCtx?.setScrollIntoView(Date.now());
        }, waitBeforeShow);

        return () => clearTimeout(timer);
    }, [waitBeforeShow]);

    return isShown ? children : null;
};

export default PrimaryDelayComponent;

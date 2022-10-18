/**
 * Return all the parent element of a given element
 * if an selector is given than return true
 * @param {(Element | null)} node
 * @return {*}  {(Array<Element> | boolean)}
 */
export const parents = (node: Element | null, targetParent: string = ''): Array<Element> | boolean => {
    const parentElements: Array<Element> = [];

    while (node) {
        const parentNode = node?.parentNode as Element;

        if (targetParent && parentNode?.classList?.contains(targetParent)) return true;

        parentElements.push(node);
        node = node.parentNode as Element;
    }

    return parentElements || [];
};

export const getElementTopPosition = (element: HTMLElement): number => {
    return element ? element.offsetTop + getElementTopPosition(element.offsetParent as HTMLElement) : 0;
};

import App from './App';

const chatBot = document.getElementById('chatbot');

if (chatBot) {
    // @ts-ignore
    const root = ReactDOM.createRoot(chatBot as HTMLElement);

    root.render(<App />);
}

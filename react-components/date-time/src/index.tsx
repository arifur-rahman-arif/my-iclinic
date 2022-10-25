import App from './App';

const dateTimeForm = document.getElementById('date-and-time-form');

if (dateTimeForm) {
    // @ts-ignore
    const root = ReactDOM.createRoot(dateTimeForm as HTMLElement);

    root.render(<App />);
}

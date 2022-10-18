import { useState, useEffect } from 'react';
import 'react-calendar/dist/Calendar.css';
import Calendar from 'react-calendar';

export const App = () => {
    const [date, setDate] = useState<Date>(new Date());
    const [hour, setHour] = useState<string>('1');
    const [minute, setMinute] = useState<string>('00');
    const [ampmIndex, setAmpmIndex] = useState<number>(0);
    const [ampm, setAmpm] = useState<string>('AM');

    useEffect(() => {
        const today = new Date(
            new Date().toLocaleString('en-US', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: true
            })
        );

        const ampm = today.getHours() >= 12 ? 'PM' : 'AM';

        setHour(`${today.getHours() % 12 || 12}`);
        setMinute(`${today.getMinutes()}`);
        setAmpm(ampm);
    }, []);

    const changeHour = (e: any) => {
        if (e.target.value === '0') {
            setHour('00');
        } else {
            setHour(e.target.value);
        }
    };

    const changeMinute = (e: any) => {
        if (e.target.value === '0') {
            setMinute('00');
        } else if (parseInt(e.target.value) < 10) {
            setMinute('0' + e.target.value);
        } else {
            setMinute(e.target.value);
        }
    };

    const setAmPm = (e: any) => {
        if (e.target.value === '1') {
            setAmpmIndex(1);
            setAmpm('PM');
        } else if (e.target.value === '0') {
            setAmpmIndex(0);
            setAmpm('AM');
        }
    };

    const getTheDayName = (day: number): string => {
        const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        return days[day] || '';
    };

    const getTheMonthName = (date: number): string => {
        const days = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ];

        return days[date] || '';
    };

    const toggleAmPM = (): void => {
        if (ampm == 'AM') {
            setAmpm('PM');
        } else {
            setAmpm('AM');
        }
    };

    return (
        <>
            <Calendar className="calender" onChange={setDate} value={date} />

            <div className="time-select">
                <div className="time-select__range-picker">
                    <div className="alarm">
                        <div className="readout">
                            <span>{hour}</span>
                            <span>:</span>
                            <span>{minute}</span>&nbsp;
                            <span onClick={toggleAmPM} style={{ cursor: 'pointer' }}>
                                {' '}
                                {ampm}
                            </span>
                        </div>
                        <div className="sliders">
                            <input onChange={changeHour} type="range" min="1" max="12" value={hour} />
                            <input onChange={changeMinute} type="range" max="59" value={minute} />
                            <input onChange={setAmPm} type="range" max="1" value={ampmIndex} />
                        </div>
                    </div>
                </div>
            </div>

            <div className="pill pill--booking">
                <h3 className="pill__title">Your Booking</h3>
                <div className="pill__body">
                    <span className="pill__year">{date.getFullYear()}</span>
                    <span className="pill__date">
                        {getTheDayName(date.getDay())} {getTheMonthName(date.getMonth())} {date.getDate()}
                    </span>
                    <span className="pill__time">
                        {hour}:{minute} {ampm}
                    </span>
                </div>
            </div>
        </>
    );
};

export default App;

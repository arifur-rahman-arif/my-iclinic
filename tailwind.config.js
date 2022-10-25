/** @type {import('tailwindcss').Config} */

module.exports = {
    content: ['./**/*.php', './**/*.ts', './**/*.tsx'],
    autoprefixer: {},
    theme: {
        extend: {
            dropShadow: {
                primary: '0 0.4rem 2.5rem rgba(0, 0, 0, 0.15)'
            },
            boxShadow: {
                primary: '0 0.4rem 2.5rem rgba(0,0,0,0.15)'
            },
            borderRadius: {
                primary: '2.5rem'
            },
            fontFamily: {
                fontLight: "'Mulish-Light', arial, helvetica, sans-serif",
                fontBold: "'Mulish-Bold', arial, helvetica, sans-serif",
                fontMedium: "'Mulish-Medium', arial, helvetica, sans-serif",
                fontLatoLight: "'Lato-Light', arial, helvetica, sans-serif",
                fontLatoBold: "'Lato-Bold', arial, helvetica, sans-serif"
            },
            colors: {
                primary: '#384043'
            },
            backgroundColor: {}
        }
    },
    plugins: []
};

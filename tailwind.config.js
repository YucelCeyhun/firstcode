module.exports = {
    theme: {
        fontFamily: {
            'lato': ['"Lato"', 'sans-serif'],
            'roboto': ["'Roboto'", 'sans-serif'],
            'public': ["'Public Sans'", 'sans-serif'],
            'exo': ["'Exo 2'", 'sans-serif']
        },
        extend: {
            minHeight:
                (theme) => ({
                    ...theme('spacing'),
                }),
            minWidth:
                (theme) => ({
                    ...theme('spacing'),
                }),
            height: {},
            fontSize: {
                md: '0.92rem'
            }
        }
    },
    variants: {
        borderWidth: ['responsive', 'hover', 'focus']
    },
    plugins: []
}


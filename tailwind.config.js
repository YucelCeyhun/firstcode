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
            spacing: {
                '80': '20rem',
                '96': '24rem',
                '112': '28rem',
                '128': '32rem',
                '192': '48rem',
                '224': '56rem',
                '256': '64rem'
            },
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


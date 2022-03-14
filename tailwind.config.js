module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            'display': ['"hvd_peaceregular"', '"Arial"', 'ui-sans-serif', 'system-ui',],
            'sans': ['"hvd_posterregular"', 'ui-sans-serif', 'system-ui',],
            'serif': ['"opensans"', 'ui-sans-serif', 'Georgia', 'system-ui',],
            'mono': ['ui-monospace', '"Courier New"', 'monospace', 'system-ui',],
        },
        extend: {
            backgroundImage: theme => ({
                'blog': "url('/img/bg/blog.webp')",
                'podcast': "url('/img/bg/podcast.webp')",
                'lifestyle': "url('/img/bg/lifestyle.webp')",
                'workshops': "url('/img/bg/workshops.webp')",
            }),
            colors: {
                punk: {
                    pink: '#E7227E',
                    red: '#F53B18',
                    darkred: '#691039',
                    brown: '#E6B55C',
                    blue: '#5CB7E6',
                    lila: '#E566FE',
                    violet: '#BD18F5',
                    green: '#18dd81',
                    gray: '#D9C3CE',
                    lightgray: '#757575',
                    dark: '#252525',
                    darker: '#121E26',
                    light: '#EFEFEF',
                    dm: {
                        p1: '#E7227E',
                        p2: '#B51B63',
                        p3: '#751240',
                        p4: '#691039',
                        p5: '#4F0C2B',
                    },
                    lm: {
                        p1: '#EC6AA7',
                        p2: '#E7227E',
                        p3: '#F52586',
                        p4: '#CF1F71',
                        p5: '#B51B63',
                    },
                }
            },
        },
    },
    variants: {
        extend: {
            fontWeight: ['dark', 'hover', 'focus'],
            borderColor: ['dark', 'active'],
            borderWidth: ['dark', 'hover', 'focus'],
            borderRadius: ['dark', 'hover', 'focus'],
            borderStyle: ['dark', 'hover', 'focus'],
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}

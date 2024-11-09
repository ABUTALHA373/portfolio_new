/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        screens: {
            sm: '641px', // Change the width for the sm breakpoint
            md: '769px', // Change the width for the md breakpoint
            lg: '1025px', // Change the width for the lg breakpoint
            xl: '1281px', // Change the width for the xl breakpoint
            '2xl': '1537px', // Change the width for the 2xl breakpoint
        },
        container: {
            padding: '2rem',

        },
        extend: {
            fontFamily: {
                inter: ['inter', 'sans-serif'], // Add Bebas Neue here
                bebas: ['Bebas Neue', 'sans-serif'], // Add Bebas Neue here
                afcad: ['Afacad Flux', 'sans-serif'],
                tilt: ['Tilt Neon', 'sans-serif'],
            },
            colors: {
                // 'primary': '#ec4899',
                // 'secondary': '#a855f7',
                'primary': '#f43f5e', // Define the primary color
            },
        },
    },
    plugins: [],
};

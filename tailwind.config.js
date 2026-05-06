/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        // Southern Mega Steel brand palette — industrial steel + bold accent
        steel: {
          50:  '#f5f7fa',
          100: '#e4e7eb',
          200: '#cbd2d9',
          300: '#9aa5b1',
          400: '#7b8794',
          500: '#52606d',
          600: '#3e4c59',
          700: '#323f4b',
          800: '#1f2933',
          900: '#0d1117',
        },
        accent: {
          DEFAULT: '#f59e0b', // industrial amber/gold — strong, trustworthy
          dark:    '#b45309',
          light:   '#fbbf24',
        },
      },
      fontFamily: {
        sans:    ['Inter', 'system-ui', 'sans-serif'],
        display: ['Poppins', 'Inter', 'sans-serif'],
      },
      container: {
        center: true,
        padding: '1rem',
      },
    },
  },
  plugins: [],
}
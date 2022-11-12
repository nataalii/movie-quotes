/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./resources/**/*.{js,ts,jsx,tsx,blade.php}"
  ],
  theme: {
    extend: {
      colors: {
        'matterhorn': '#4E4E4E',
        'eclipse': '#3D3B3B',
      },
      
      fontFamily: {
        'sansatioin': 'sansation'
      },
      margin: {
        '20%': '20%',
        '50%': '50%',
        '23%': '23%'
      }

      
    },
  },
  plugins: [],
}

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
        'sansation': ['sansation', 'sans-serif']
      },
      margin: {
        '20%': '20%',
        '50%': '50%',
        '23%': '23%',
        '31%': '31%'
      },

      borderWidth: {
        '1px': '1px'
      },
      width: {
        '700px': '700px'
      }

      
    },

    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
    
    backgroundImage: {
      'gradient-radial': 'radial-gradient(50% 50% at 50% 50%, var(--tw-gradient-stops))',
    }

  },


}

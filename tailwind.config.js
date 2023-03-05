/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./application/views/user/*.php", "./application/views/user/_partials/*.php"],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        primary: '#09168e',
        secondary: '#1A395C',
        dark: '#818F8F',
        darken: '#3E5351',
        bgdark: '#020C1B',
        bgdarken: '#01060f',
        txtdark: '#e5e5e5',
        text: '#312f2f',
      },
      fontFamily: {
        quicksand: ["'Quicksand'", "sans-serif"],
      },
    },
    height: {
			"10v": "10vh",
			"20v": "20vh",
			"30v": "30vh",
			"40v": "40vh",
			"50v": "50vh",
			"60v": "60vh",
			"70v": "70vh",
			"80v": "80vh",
			"90v": "90vh",
			"100v": "100vh",
		},
  },
  plugins: [],
}

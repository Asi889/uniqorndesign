module.exports = {
  purge: ["./wp-content/themes/canaan/**/*.{vue,js,ts,jsx,tsx,php,svg}"],
  mode: "jit",
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        black: { DEFAULT: "#404040" },
        baseMedium: "#3C2F82",       
        primary: "#00B7F7",        
        secondary: "#00EEBC",
        extraOne: "#FF3644",
        extraTwo: "#FCB920",
        superDark: "#212121",
        blue:{
          100: "#E8F2FF",
          200: "#C3DAF8",
          300: "#8EBFFF",
          400: "#4092FF",
          500: "#005AD1",
          600: "#002352",
          "rightSideBlue": "#277EFF"
        },
        Burgundy:{
          100: "#FFF3F8",
          200: "#FDC3DC",
          300: "#FC88B8",
          400: "#FA4C95",
          500: "#D4055C",
          600: "#6A032E",
          
        },
        green:{
          100: "#F4FFF7",
          200: "#C0EECA",
          300: "#81DD95",
          400: "#42CD60",
          500: "#268E3C",
          600: "#13471E",
        },
        purple:{
          100: "#F9F2FF",
          200: "#E8C4FE",
          300: "#D18AFD",
          400: "#BB51FC",
          500: "#8803DA",
          600: "#44026D",
        },
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
};

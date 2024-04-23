const defaults = require("tailwindcss/defaultTheme");

module.exports = {
  content: require("fast-glob").sync([
    "source/**/*.html",
    "source/**/*.md",
    "source/**/*.js",
    "source/**/*.php",
    "source/**/*.vue",
  ]),
  options: {
    safelist: [/language/, /hljs/, /mce/],
  },
  theme: {
    extend: {
      fontFamily: {
        lato: ["Lato", "sans-serif"],
      },
      lineHeight: {
        normal: "1.6",
        loose: "1.75",
      },
      maxWidth: {
        "8xl": "88rem",
      },
      boxShadow: {
        search:
          "0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)",
      },
      colors: {
        cp_darkblue: {
          DEFAULT: "#1A237E",
          900: "#31398b",
          800: "#484f98",
          700: "#5f65af",
          600: "#767bb2",
          500: "#8d91bf",
          400: "#a3a7cb",
          300: "#babdd8",
          200: "#d1d3e5",
          100: "#e8e9f2",
        },
        cp_lightblue: {
          DEFAULT: "#2196F3",
          900: "#37a1f4",
          800: "#4dabf5",
          700: "#64b6f7",
          600: "#7ac0f8",
          500: "#90cbf9",
          400: "#a6d5fa",
          300: "#bce0fb",
          200: "#d3eafd",
          100: "#e9f5fe",
        },
        cp_grey: {
          DEFAULT: "#607D8B",
          900: "#708a97",
          800: "#8097a2",
          700: "#90a4ae",
          600: "#a0b1b9",
          500: "#b0bec5",
          400: "#bfcbd1",
          300: "#cfd8dc",
          200: "#dfe5e8",
          100: "#eff2f3",
        },
        cp_green: {
          DEFAULT: "#4CAF50",
          900: "#5eb762",
          800: "#70bf73",
          700: "#82c785",
          600: "#94cf96",
          500: "#a6d7a8",
          400: "#b7dfb9",
          300: "#c9e7cb",
          200: "#dbefdc",
          100: "#edf7ee",
        },
      },
      aspectRatio: {
        "3/2": "3 / 2",
      },
    },
    fontSize: {
      xs: ".8rem",
      sm: ".925rem",
      base: "1rem",
      lg: "1.125rem",
      xl: "1.25rem",
      "2xl": "1.5rem",
      "3xl": "1.75rem",
      "4xl": "2.125rem",
      "5xl": "2.625rem",
      "6xl": "10rem",
    },
  },
};

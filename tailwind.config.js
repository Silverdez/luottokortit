const plugin = require("tailwindcss/plugin")
const defaultTheme = require("tailwindcss/defaultTheme")

module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      width: {
        110: "27.5rem",
        120: "30rem",
      },
      height: {
        "1/4vh": "25vh",
        "1/2vh": "50vh",
        "3/4vh": "75vh",
        almost: "calc(-4rem + 100vh)",
      },
      minWidth: {
        "1/4": "25%",
        "1/2": "50%",
        "3/4": "75%",
        16: "16rem",
      },
      minHeight: {
        92: "92px",
        50: "50px",
        135: "135px",
        315: "315px",
        16: '16rem',
        64: "64rem",
      },
      maxWidth: {
        "70vw": "70vw",
        "80%": "80%",
        "90%": "90%",
        10: "10rem",
        16: "16rem",
        1920: "1920px",
        "5/6": "85%",
      },
      maxHeight: {
        img: "calc(.65 * 20rem)",
        "50vh": "50vh",
        "70vh": "70vh",
        "75vh": "75vh",
        "60%": "60%",
        "80%": "80%",
        "90%": "90%",
      },
      spacing: {
        4.5: "1.125rem",
        15: "3.75rem",
        17.5: "4.375rem",
        22: "8rem",
      },
      borderRadius: {
        card: '20px',
        avatar: '20px',
        cta: '',
      },
      borderWidth: {
        '3': '3px',
        '5': '5px',
        '6': '6px',
      },
      strokeWidth: {
        '3': '3',
        '4': '4',
        '5': '5',
        '6': '6',
      },
      zIndex: {
        "-1": "-1",
        1: "1",
        2: "2",
        3: "3",
        4: "4",
        5: "5",
        100: "100",
        1100: "1100",
        1101: "1101",
      },
      lineHeight: {
        2: "0.625rem",
        initial: "initial",
      },
      transitionDuration: {
        20: "20ms",
      },
      boxShadow: {
        btn: "0px 3px 1px - 2px rgba(0,0,0,0.2), 0px 2px 2px 0px rgba(0,0,0,0.14), 0px 1px 5px 0px rgba(0,0,0,0.12)",
        deepInner: "inset 0 2px 6px 0 rgb(0 0 0 / 18%)",
      },
      scale:{
        '10': '.1',
        '25': '.25',
        '35': '.35',
        '40': '.40',
        '60': '.60',
      },
      rotate:{
        '4': '4deg',
      },
      blur: {
        xs: '2px',
      },
      colors: {
        primary: '#e8ecf1',
        secondary: '#0c1d36',
        tertiary: '#f5b61f',
        quaternary: '#0b4d47',
        quinary: '#09192c',

        accent: '#66dc09',

        globalBg: '#edeff6',
        textGlobal: '',

        link: '#0b4d47',
        btnBg: '#0b4d47',
        pro: '',
        cons: '',
        CTA: '#f0c245',


        titleBase: '',
        titleAccent: '',
        titleMark: '',
        textBase: '',
        textMuted: '',
        textLighter: '',
        textAccent: '',

        headerBg: '',
        footerBg: '',
        footerBgCopyright: '',
        footerText: '',
        footerAccent: '',
        footerLink: '',

        youtube: "#ff0000",
        facebook: "#1877f2",
        twitter: "#1da1f2",
        pinterest: "#BD081C",
        discord: "#7289da",
        twitch: "#8343c8",
        vimeo: "#19B7EA",
        info: "#2196f3",
        warning: "#ff9800",
        danger: "#ff5b5b",
        success: "#4caf50",
      },
      fontSize: {
        0.4: ".4rem",
        0.5: ".5rem",
        0.6: ".6rem",
        0.7: ".7rem",
        0.8: ".8rem",
        0.9: ".9rem",
      },
      fontFamily: {
        'display': [`"Poppins"`, ...defaultTheme.fontFamily.sans],
        'serif': [...defaultTheme.fontFamily.serif],
      },
      transitionTimingFunction: {
        textBox: "cubic-bezier(0.0, 0, 0.2, 1)",
      },
      backgroundImage: () => ({
        bigWins: "url('/icons/big-win.jpg')",
        btnCTA: `linear-gradient(106deg, #01002E 0%, #01002E 100%)`,
      }),
      backgroundSize: {
        20: "1rem 1rem",
      },
      keyframes: {
        "fade-in-down": {
          "0%": {
            opacity: "0",
            transform: "translateY(-60px)",
          },
          "100%": {
            opacity: "1",
            transform: "translateY(0)",
          },
        },
        "pulse-anim-live": {
          "0%": {
            opacity: ".95",
            color: "white",
            transform: "scale(1)",
          },
          "100%": {
            opacity: "1",
            transform: "scale(1.05)",
          },
        },
        "rotate-anim-live": {
          "0%": {
            opacity: "1",
            transform: "rotate(0.45deg)",
          },
          "50%": {
            opacity: "0.85",
            transform: "rotate(-0.65deg)",
          },
          "100%": {
            opacity: "1",
            transform: "rotate(0.65deg)",
          },
        },
        "progress": {
          "0%": {
            strokeDasharray: "0 100",
          }
        },
      },
      animation: {
        "fade-in-down": "fade-in-down 0.5s ease-out",
        "pulse-anim-live": "pulse-anim-live 0.65s linear infinite alternate forwards",
        "rotate-anim-live": "rotate-anim-live 2s linear infinite alternate forwards",
        "progress": "progress 1s ease-out forwards",
      },
    },
  },
  plugins: [require("@tailwindcss/typography"), require("@tailwindcss/aspect-ratio")],
};

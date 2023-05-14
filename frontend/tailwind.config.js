/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./components/**/*.{js,ts,jsx,tsx,mdx}",
    "./app/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      colors: {
        primary: "linear-gradient(95.89deg,#35F3FF -14.02%,#D322FF 112.13%)",
        "bg-blue": "#0d0038",
      },
    },
  },
  plugins: [],
};

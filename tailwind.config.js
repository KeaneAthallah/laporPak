/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "Bricolage Grotesque Variable",
                    "Inter Variable",
                    "Inter",
                    ...defaultTheme.fontFamily.sans,
                ],
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};

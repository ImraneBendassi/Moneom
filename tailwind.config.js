// tailwind.config.js
module.exports = {
  content: [
    './resources/views/**/*.blade.php',  // Scanne les fichiers Blade
    './resources/js/**/*.js',            // Scanne les fichiers JS
    './resources/css/**/*.css',          // Scanne les fichiers CSS
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

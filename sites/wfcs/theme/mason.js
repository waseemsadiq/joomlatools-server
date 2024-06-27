const mason = require('@joomlatools/mason-tools-v1');

const templatePath = `${process.cwd()}`;

async function postcss() {
  await mason.css.process(`${templatePath}/css/input.css`, `${templatePath}/css/output.css`, {
    tailwind: {
      content: [
        '../**/*.html.php',
      ],  
      safelist: [
        /* eveything 
        { 
          pattern: /./,
          variants: ['sm', 'md', 'lg', 'xl', '2xl'],
        },
        */
        // These classes are used by MIX, let's add them to the safe list
        'lazyprogressive', 
        'bg-center', 
        'bg-cover', 
        'bg-right', 
        'object-center', 
        'object-right',
        'bg-dark-2',
      ],
      theme: {
        screens: {
          sm: "540px",
          // => @media (min-width: 576px) { ... }

          md: "720px",
          // => @media (min-width: 768px) { ... }

          lg: "960px",
          // => @media (min-width: 992px) { ... }

          xl: "1140px",
          // => @media (min-width: 1200px) { ... }

          "2xl": "1320px",
          // => @media (min-width: 1400px) { ... }
        },
        container: {
          center: true,
          padding: "16px",
        },
        extend: {
          colors: {
            black: "#212b36",
            "dark-700": "#090e34b3",
            dark: {
              DEFAULT: "#111928",
              2: "#1F2A37",
              3: "#374151",
              4: "#4B5563",
              5: "#6B7280",
              6: "#9CA3AF",
              7: "#D1D5DB",
              8: "#E5E7EB",
            },
            primary: "#3758F9",
            "blue-dark": "#1B44C8",
            secondary: "#51CC41",
            "body-color": "#637381",
            "body-secondary": "#8899A8",
            warning: "#FBBF24",
            stroke: "#DFE4EA",
            "gray-1": "#F9FAFB",
            "gray-2": "#F3F4F6",
            "gray-7": "#CED4DA",
          },
          boxShadow: {
            input: "0px 7px 20px rgba(0, 0, 0, 0.03)",
            form: "0px 1px 55px -11px rgba(0, 0, 0, 0.01)",
            pricing: "0px 0px 40px 0px rgba(0, 0, 0, 0.08)",
            "switch-1": "0px 0px 5px rgba(0, 0, 0, 0.15)",
            testimonial: "0px 10px 20px 0px rgba(92, 115, 160, 0.07)",
            "testimonial-btn": "0px 8px 15px 0px rgba(72, 72, 138, 0.08)",
            1: "0px 1px 3px 0px rgba(166, 175, 195, 0.40)",
            2: "0px 5px 12px 0px rgba(0, 0, 0, 0.10)",
          },
        },
      },
      darkMode: "class",
      plugins: [],
    },

    postcssPresetEnv: {
      stage: 2, // default is 2 (A Working Draft championed by a W3C Working Group.)
      autoprefixer: { cascade: true },
      features: {
          //'focus-within-pseudo-class': false, // Uncomment this if purge is set to false
      },
    }

  });
}

async function sync() {
  mason.browserSync({
    watch: true,
    server: {
       baseDir: `${templatePath}`
    },
    files: 'css/*.css',
  });
}

module.exports = {
  version: '1.0',
  tasks: {
    postcss,
    sync,
    watch: {
      path: ['.'],
      callback: async (path) => {
        if (path.endsWith('css/input.css')) {
          await postcss();
        }
      },
    },
  },
};

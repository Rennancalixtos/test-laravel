import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import path from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/sass/app.scss', 'resources/js/app.js'],
      refresh: true,
    }),
    tailwindcss(),
  ],

  build: {
    outDir: 'public/build',  
  },

  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources'),
    },
  },
});



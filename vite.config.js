// vite.config.js
import { defineConfig } from 'vite';
import reactRefresh from '@vitejs/plugin-react-refresh';

export default defineConfig({
  plugins: [reactRefresh()],
  esbuild: {
    loader: {
      '.js': 'jsx' // Добавьте это свойство для использования загрузчика JSX для файлов с расширением .js
    }
  }
});

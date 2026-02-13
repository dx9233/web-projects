import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import path from 'path'

export default defineConfig({
  plugins: [vue()],
  
  server: {
    port: 5174,
    host: true,
    proxy: {
      '/api': {
        target: 'http://localhost:8000',
        changeOrigin: true,
        rewrite: (path) => path.replace(/^\/api/, '/api')
      }
    }
  },
  
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './src'),
      '@packages/ui': path.resolve(__dirname, '../../packages/ui/src'),
      '@packages/config': path.resolve(__dirname, '../../packages/config/src'),
    }
  },
  
  optimizeDeps: {
    include: ['@packages/ui', '@packages/config']
  },
  
  build: {
    target: 'esnext',
    sourcemap: true
  }
})
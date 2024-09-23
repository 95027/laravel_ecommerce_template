import { viteBundler } from '@vuepress/bundler-vite'
import { defaultTheme } from '@vuepress/theme-default'
import { defineUserConfig } from 'vuepress'

export default defineUserConfig({
  bundler: viteBundler(),
  title: 'Estore',
  description: 'Laravel 11 documentation for ecommerce',
  theme: defaultTheme({
    logo: 'http://127.0.0.1:8000/assets/admin/images/logo/logo.png',
    navbar: ['/', '/get-started.html'],
  }),
});
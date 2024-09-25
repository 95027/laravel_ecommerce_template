import comp from "C:/xampp/htdocs/projects/eCommerce/docs/.vuepress/.temp/pages/index.html.vue"
const data = JSON.parse("{\"path\":\"/\",\"title\":\"Home\",\"lang\":\"en-US\",\"frontmatter\":{\"home\":true,\"title\":\"Home\",\"actions\":[{\"text\":\"Get Started\",\"link\":\"/get-started.html\",\"type\":\"primary\"},{\"text\":\"Learn More\",\"link\":\"https://laravel.com/\",\"type\":\"secondary\"}],\"footer\":\"2024 Laravel Docs. All rights reserved.\"},\"headers\":[{\"level\":2,\"title\":\"Why Laravel?\",\"slug\":\"why-laravel\",\"link\":\"#why-laravel\",\"children\":[{\"level\":3,\"title\":\"features:\",\"slug\":\"features\",\"link\":\"#features\",\"children\":[]}]}],\"git\":{\"updatedTime\":1727076374000,\"contributors\":[{\"name\":\"95027\",\"email\":\"kumarchembeti26@gmail.com\",\"commits\":2}]},\"filePathRelative\":\"README.md\"}")
export { comp, data }

if (import.meta.webpackHot) {
  import.meta.webpackHot.accept()
  if (__VUE_HMR_RUNTIME__.updatePageData) {
    __VUE_HMR_RUNTIME__.updatePageData(data)
  }
}

if (import.meta.hot) {
  import.meta.hot.accept(({ data }) => {
    __VUE_HMR_RUNTIME__.updatePageData(data)
  })
}

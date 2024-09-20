import "C:/xampp/htdocs/projects/eCommerce/node_modules/@vuepress/highlighter-helper/lib/client/styles/base.css"
import "C:/xampp/htdocs/projects/eCommerce/node_modules/@vuepress/plugin-prismjs/lib/client/styles/nord.css"
import "C:/xampp/htdocs/projects/eCommerce/node_modules/@vuepress/highlighter-helper/lib/client/styles/line-numbers.css"
import "C:/xampp/htdocs/projects/eCommerce/node_modules/@vuepress/highlighter-helper/lib/client/styles/notation-highlight.css"
import "C:/xampp/htdocs/projects/eCommerce/node_modules/@vuepress/highlighter-helper/lib/client/styles/collapsed-lines.css"
import { setupCollapsedLines } from "C:/xampp/htdocs/projects/eCommerce/node_modules/@vuepress/highlighter-helper/lib/client/composables/collapsedLines.js"

export default {
  setup() {
    setupCollapsedLines()
  }
}

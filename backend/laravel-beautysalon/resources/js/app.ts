import { createInertiaApp } from '@inertiajs/vue3'
import { createApp, h } from 'vue'
import '../css/app.css'

createInertiaApp({
  resolve: (name) => {
    const pages = import.meta.glob('./Pages/**/*.vue')
    const page = pages[`./Pages/${name}.vue`] as () => Promise<any>

    if (!page) {
      throw new Error(`Page not found: ${name}`)
    }

    return page().then(module => module.default)
  },

  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})
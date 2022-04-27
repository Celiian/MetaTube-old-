module.exports = {
  pluginOptions: {
    i18n: {
      locale: 'en',
      fallbackLocale: 'en',
      localeDir: 'wordingUtils',
      enableLegacy: false,
      runtimeOnly: false,
      compositionOnly: false,
      fullInstall: true
    }
  },
  devServer: {
    proxy: {
      '^/api/':{
        target: 'http://127.0.0.1:8080',
        changeOrigin: true,
      }
    }
  },
}

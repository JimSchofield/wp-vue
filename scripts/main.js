
function ready(fn) {
    if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading"){
      fn();
    } else {
      document.addEventListener('DOMContentLoaded', fn);
    }
  }

// Wait until DOM ready
ready(async () => {
    await import('./vue-header.js');

    // kick off $root vue
    new Vue({
        el: '#app'
    })
})
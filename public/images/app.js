let hash = '183cf1f205f' // do not change, will be replaced to real hash

window._subiz_init_2094850928430 = true
window._subiz_init_2094850928430_keep_loading = true
var tag = document.createElement('script')
tag.async = 1
tag.src = 'https://public-gcs.subiz-cdn.com/widget-v4/public/' + hash + '.app.js'
document.body.appendChild(tag)

// record which domain still use old code
var xhttp = new XMLHttpRequest()
xhttp.open('GET', 'https://api.sbz.vn/4.0/old', true)
xhttp.send()

function inlineIframe(iframe) {
var onLoad = function () {
iframe.insertAdjacentHTML('afterend', iframe.contentDocument.body.innerHTML)
iframe.parentNode.removeChild(iframe)
iframe.onload = null
}
if (iframe.contentWindow.location.href === 'about:blank' || iframe.contentDocument.readyState === 'loading') {
iframe.onload = onLoad
} else {
onLoad()
}
}
inlineIframe(document.querySelector('#HeaderIframe'))
inlineIframe(document.querySelector('#ShareIframe'))
inlineIframe(document.querySelector('#SidebarIframe'))
inlineIframe(document.querySelector('#FooterIframe'))
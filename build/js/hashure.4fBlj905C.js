/*! For license information please see hashure.4fBlj905C.js.LICENSE.txt */
!function(){const e=PRHelper.getHTML(),t=PRHelper.getHook(),a=PRHelper.getRequest(),n=PRHelper.getSetting();function s(t=null){e.isElement(t)||(t=e.getElement(".hashure-button")),r(t,""),e.setHTML(t,n.getOption("hashure.translations.connecting")),e.addClass(t,"btn-busy"),e.removeClass(t,"hashure-try-again"),e.setElementActivity(t,!1,!1),a.ajax(n.getOption("hashure.ajax.get_hashure_product_url")).addNonce().onSuccess((a=>{const n=e.getParent(t);e.fadeIn(n,{start:()=>{e.replace(a,n,!0)}})})).onError((a=>{e.replace(n.getOption("hashure.translations.try_again"),t),e.addClass(t,"hashure-try-again"),e.removeClass(t,"btn-busy"),e.setElementActivity(t,!0,!1),r(t,a)})).send({product:e.getData(t,"product")})}function r(t,a){const n=e.getParent(t);let s=e.getElement(".hashure-message-wrapper");e.isElement(s)||(s=e.createElement('<div class="hashure-message-wrapper"></div>'),e.insert(s,n,"before")),e.empty(s),a&&e.isElement(s)&&e.fadeIn(s,{start:()=>{e.replace(a,s)}})}t.on("DOMContentLoaded",(()=>s())),t.bubbling("click",(t=>{t.preventDefault(),s(e.getTarget(t,"a"))}),".hashure-try-again")}();
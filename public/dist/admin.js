(()=>{"use strict";var e={};e.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),(()=>{var t;e.g.importScripts&&(t=e.g.location+"");var a=e.g.document;if(!t&&a&&(a.currentScript&&(t=a.currentScript.src),!t)){var r=a.getElementsByTagName("script");r.length&&(t=r[r.length-1].src)}if(!t)throw new Error("Automatic publicPath is not supported in this browser");t=t.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),e.p=t})(),e.p,function(e,t={}){let a=[];const r=document.querySelector(e),n=document.createElement("div");if(n.classList.add("preview"),r){const e=document.createElement("button");e.classList.add("btn"),e.textContent="Open",t.multi&&r.setAttribute("multiple",!0),t.accept&&Array.isArray(t.accept)&&r.setAttribute("accept",t.accept.join(",")),r.insertAdjacentElement("afterend",n),r.insertAdjacentElement("afterend",e);const i=()=>r.click(),c=e=>{e.target.files&&(a=Array.from(e.target.files),n.innerHTML="",a.forEach((e=>{if(!e.type.match("image"))return;const t=new FileReader;t.onload=t=>{n.insertAdjacentHTML("afterbegin",`\n              <div class="a-uploader__image-preview-wrapper">\n                <div class="a-uploader__preview-remove" data-name="${e.name}">&times;</div>\n                <img src="${t.target.result}" class="a-uploader__image-preview" alt="${e.name}" />\n                <div class="a-uploader__preview-info">\n                  <span>${e.name}</span>\n                  <span>${function(e){if(0==e)return"0 Byte";var t=parseInt(Math.floor(Math.log(e)/Math.log(1024)));return Math.round(e/Math.pow(1024,t),2)+" "+["Bytes","KB","MB","GB","TB"][t]}(e.size)}</span>\n                </div>\n              </div>\n            `)},t.readAsDataURL(e)})))};e.addEventListener("click",i),r.addEventListener("change",c),n.addEventListener("click",(e=>{if(!e.target.dataset.name)return;const{name:t}=e.target.dataset;a=a.filter((e=>e.name!==t));const r=n.querySelector(`[data-name="${t}"`).closest(".a-uploader__image-preview-wrapper");r.classList.add("is-removing"),setTimeout((()=>r.remove()),300)}))}}("#a-uploader",{multi:!0,accept:[".png",".jpg",".jpeg",".gif"]})})();
(function(){var a=document.domain+"",b=document.URL+"";if("dantri.com.vn"==a)try{window._ADM_Channel="/"+/dantri.com.vn\/([a-zA-Z\+\-]+)/.exec(b)[1]+"/"}catch(c){}window.admTrackTimeonSite=!0;if(-1!=a.indexOf("vietnamairlines.com")||-1!=a.indexOf("googlesyndication")||-1!=a.indexOf("tiki.vn"))window.admTrackTimeonSite=!1})();
window.checkAdmdomainAds=function(a){var b=navigator.userAgent+"";if(-1!=b.indexOf("Firefox")||-1!=b.indexOf("coc_coc"))a=a.replace("lg1.logging.admicro.vn","contineljs.com");return a};
"undefined"==typeof AMCDNCheckSend&&(window.AMCDNCheckSend="send",function(){function a(g){return 0<document.cookie.length&&(c_start=document.cookie.indexOf(g+"="),-1!=c_start)?(c_start=c_start+g.length+1,c_end=document.cookie.indexOf(";",c_start),-1==c_end&&(c_end=document.cookie.length),unescape(document.cookie.substring(c_start,c_end))):""}function b(g,l,k,n,m,p){(new Date).getTime();n=""==n?"/":n;k=0==k||""==k?(new Date(+new Date+864E5)).toGMTString():(new Date(+new Date+6E4*k)).toGMTString();
g=[g+"="+escape(l)];for(var q in k={expires:k,path:n,domain:m})k[q]&&g.push(q+"="+k[q]);return p&&g.push("secure"),document.cookie=g.join(";"),!0}function c(g){var l=!1,k=document.createElement("script");document.getElementsByTagName("head")[0].appendChild(k);var n=function(){if(!l){(new Image).src=("https:"==document.location.protocol?"https:":"http:")+"//amcdn.vn/blc?lsn="+window.__admloadPageId+"&url="+encodeURIComponent(document.URL)+"&dg="+window.__admloadPageIdc+"&ui="+e;var m=!1,p=function(){"undefined"===
typeof ADM_TrackingSend||m?window.setTimeout(function(){p()},500):(m=!0,(new Image).src=("https:"==document.location.protocol?"https:":"http:")+"//amcdn.vn/blc?dg="+window.__admloadPageIdc+"&ui="+e+"&url="+encodeURIComponent("http://blockpartern"+f+document.location.pathname)+"&rd="+Math.random())};p();l=!0}};try{k.onerror=function(m){l||n()},k.onabort=function(m){l||n()},k.oncancel=function(m){l||n()}}catch(m){}try{k.src=g}catch(m){}}"undefined"==typeof window.__admloadPageId&&(window.__admloadPageId=
function(){function g(){return Math.floor(65536*(1+Math.random())).toString(16).substring(1)}return g()+g()+g()+g()+g()+g()+g()+g()}());window._admislocalStorage=function(){try{if(!("localStorage"in window&&null!==window.localStorage))return!1;try{localStorage.setItem("_admstorage",""),localStorage.removeItem("_admstorage")}catch(g){return!1}return!0}catch(g){return!1}}();window._admislocalStorage?(window.__admloadPageIdc=localStorage.__uidac,window.__admloadPageIdc||(localStorage.__uidac=__admloadPageId,
window.__admloadPageIdc=__admloadPageId)):(window.__admloadPageIdc=a("__uidac"),""==window.__admloadPageIdc&&b("__uidac",__admloadPageId,5E6,"/","."+document.domain));var d=a("__uif");d=/__uid:([0-9]+)/.exec(d);var e="";d&&2<=d.length&&(e=encodeURIComponent(d[1]));d=new Image;var f=document.location.hostname+"";if(window.admTrackTimeonSite){var h="https://amcdn.vn/ftest?lsn="+window.__admloadPageId+"&dg="+window.__admloadPageIdc+"&ui="+e+"&url="+encodeURIComponent("http://1"+f+document.location.pathname)+
"&rd="+Math.random();d.src=h;d=new Image;d.onerror=function(){(new Image).src="https://amcdn.vn/blc?lsn="+window.__admloadPageId+"&dg="+window.__admloadPageIdc+"&ui="+e+"&url="+encodeURIComponent("http://errorlg1"+f+document.location.pathname)+"&rd="+Math.random()};d.src="https://"+checkAdmdomainAds("lg1.logging.admicro.vn")+"/ftest?lsn="+window.__admloadPageId+"&dg="+window.__admloadPageIdc+"&ui="+e+"&url="+encodeURIComponent("http://2"+f+document.location.pathname)+"&rd="+Math.random()}window.admTrackTimeonSite&&
c("https://media1.admicro.vn/ads_codes/ads_code_1.ads")}());
try{var _admloadJs1=function(a,b){var c=document.createElement("script");c.type="text/javascript";c.src=a;2<=arguments.length&&(c.onload=b,c.onreadystatechange=function(){4!=c.readyState&&"complete"!=c.readyState||b()});document.getElementsByTagName("head")[0].appendChild(c)},ADM_TrackingSend$3=function(){try{window.admTrackingParam.url=window.admTrackingParam.url||document.URL}catch(b){}if("undefined"!=typeof __ADM_TrackingSend&&!0===__ADM_TrackingSend)return!1;ADM_AdsTracking.checkBrowser();window._AdmGetGa=
function(){return""};window._AdmGetGa=function(){var b="";try{var c=window.performance||window.webkitPerformance;if(c=c&&c.timing){var d=c.navigationStart;b=";"+[c.loadEventStart-d,c.domainLookupEnd-c.domainLookupStart,c.connectEnd-c.connectStart,c.responseStart-c.requestStart,c.responseEnd-c.responseStart,c.fetchStart-d,c.domInteractive-d,c.domContentLoadedEventStart-d].join(";")}return";"+ADM_AdsTracking.getCookie("_ga")+b}catch(e){}return""};try{var a=window.self!==window.top}catch(b){a=!0}window.__ifr=
a?1:0;window.__ADM_TrackingSend=!0;window.__ADMScrollcounter=0;window.__ADMScrollEnd=0;window.__ADMTouch=0;window.__ADMMouse=0;window.__ADMisActive=0;window.__ADMTimeTk=Math.floor((new Date).getTime()/1E3);try{__ADMwdVis()&&(window.__ADMisActive=1)}catch(b){}ADMTrackingsend("s");ADMTrackingsend("v");"undefined"==typeof window.admTrackingParam.ispopup&&(admaddEventListener(window,"scroll",function(){window.__ADMScrollcounter+=1;0>wPrototype.bdHeight()-(wPrototype.scrollTop()+wPrototype.wdHeight()+
100)&&(window.__ADMScrollEnd=1)}),admaddEventListener(window,"blur",function(){__ADMisActive=0}),admaddEventListener(window,"focus",function(){__ADMisActive=1}),"ontouchstart"in window&&admaddEventListener(document,"touchmove",function(b){__ADMTouch++}),admaddEventListener(document,"mousemove",function(b){__ADMMouse++}),window.setTimeout(function(){var b,c="",d={hidden:"visibilitychange",webkitHidden:"webkitvisibilitychange",mozHidden:"mozvisibilitychange",msHidden:"msvisibilitychange"};for(b in d)if(b in
document){var e=d[b];c=b;break}document.addEventListener(e,function(){__ADMisActive=document[c]?0:1;ADMTrackingsend("p")})},5E3),chkadmTrackingt=window.setTimeout(function(){window.admTrackTimeonSite&&ADM_TrackingSendChk()},2E4),"beforeunload"in window||"onbeforeunload"in window)&&(-1!=navigator.userAgent.indexOf("Firefox")?admaddEventListener(window,"unload",function(){ADMTrackingsend("e")}):admaddEventListener(window,"beforeunload",function(){ADMTrackingsend("e")}))},ADMTrackingsend=function(a){try{if(-1!=
(document.domain+"").indexOf("vib.com.vn")&&"p"==a)return!1}catch(h){}window._AdmGetGa=function(){var h="";try{var g=window.performance||window.webkitPerformance;if(g=g&&g.timing){var l=g.navigationStart;h=";"+[g.loadEventStart-l,g.domainLookupEnd-g.domainLookupStart,g.connectEnd-g.connectStart,g.responseStart-g.requestStart,g.responseEnd-g.responseStart,g.fetchStart-l,g.domInteractive-l,g.domContentLoadedEventStart-l].join(";")}return";"+ADM_AdsTracking.getCookie("_ga")+h}catch(k){}return""};var b=
"";b="https://"+checkAdmdomainAds("lg1.logging.admicro.vn")+"/_tracking1.gif?dg="+__admloadPageIdc;b+="&fl="+paramBrowser.flashVersion();b+="&je="+paramBrowser.javaEnabled;b+="&sr="+paramBrowser.screen_Resolution;b+="&sc="+paramBrowser.screen_Color;b+="&hn="+paramBrowser.hostname;b="undefined"!=typeof _Analytics_Channel&&""!=_Analytics_Channel?b+("&cat="+encodeURIComponent(decodeURIComponent(_Analytics_Channel))):"undefined"!=typeof _ADM_Channel&&""!=_ADM_Channel?b+("&cat="+encodeURIComponent(decodeURIComponent(_ADM_Channel))):
b+"&cat=";window.__ADMTrackingSendUrl=b+"&g=0";b=window.__ADMTrackingSendUrl+logposurlview+"&i="+encodeURIComponent(a+";"+__admPageloadid+";"+window.__ADMScrollcounter+";"+window.__ADMScrollEnd+";"+__ADMisActive+";"+__ADMMouse+";"+__ADMTouch+";"+(wPrototype.wdWidth()+"x"+wPrototype.wdHeight())+";"+window.__ifr+";"+("undefined"==typeof ADS_CHECKER?0:1)+";"+__admloadPageId+";"+__admloadPageIdc+_AdmGetGa())+"&rdm="+Math.random();b+="&p="+paramBrowser.zenURL.encode(paramBrowser.url());b+="&r="+(""==paramBrowser.referrer?
"":paramBrowser.zenURL.encode(paramBrowser.referrer));var c=navigator.userAgent+"",d=!1;if("s"==a){try{if(-1!=c.indexOf("Macintosh")||-1!=c.indexOf("Windows")||-1!=c.indexOf("Firefox"))d=!0}catch(h){}if(!0===d){var e=document.createElement("iframe");e.src=b+ADM_AdsTracking.getParam();e.style.width="12px";e.style.height="12px";e.style.visibility="hidden";e.style.position="absolute";e.style.left="0px";e.style.bottom="0px";e.style.border="none";e.target="admTrackmain";e.name="admIframeTracking";e.id=
"admIframeTracking";AdmonDomReady(function(){try{var h=document.createElement("div");h.style.position="absolute";h.style.bottom="0";h.style.left="0";h.style.width="1px";h.style.height="1px";h.style.overflow="hidden";h.style.visibility="hidden";document.body.appendChild(h);h.appendChild(e)}catch(g){}});a=function(h){if(-1!=h.origin.indexOf("logging.admicro.vn")&&(h=h.data,"object"==typeof h))try{"__CRT"==h[0]&&(h[0]="__create"),"__UF"==h[0]&&(h[0]="__ui"),"__C"!=h[0]&&ADM_AdsTracking.check(h[0],h[1],
"","/")}catch(g){}};window.addEventListener?window.addEventListener("message",a,!1):window.attachEvent("onmessage",a,!1)}else e=document.createElement("script"),e.type="text/javascript",e.async=!0,e.src=b,a=document.getElementsByTagName("script")[0],a.parentNode.insertBefore(e,a)}else{var f=new Image;f.src=b+ADM_AdsTracking.getParam();"v"==a&&(f.onerror=function(){try{(new Image).src=(f.src+"").replace("lg1.logging.admicro.vn","amcdn.vn")}catch(h){}})}},ADM_TrackingSendChk=function(){__ADMisActive=
__ADMwdVis()?1:0;var a=Math.floor((new Date).getTime()/1E3);if(1==__ADMisActive||120<=a-__ADMTimeTk)__ADMTimeTk=a,ADMTrackingsend("p");chkadmTrackingt=999>_admBrV?window.setTimeout(function(){window.admTrackTimeonSite&&ADM_TrackingSendChk()},2E4):window.setTimeout(function(){window.admTrackTimeonSite&&ADM_TrackingSendChk()},6E4)},admRemoveEventListener=function(a,b,c){"removeEventListener"in a?a.removeEventListener(b,c):"detachEvent "in a&&a.detachEvent("on"+b,c)},admaddEventListener=function(a,b,
c){"addEventListener"in a?a.addEventListener(b,c):"attachEvent"in a&&a.attachEvent("on"+b,c)};if("undefined"==typeof logposurlview)var logposurlview="";if("undefined"==typeof chkadmTrackingt)var chkadmTrackingt;if("undefined"==typeof __admPageloadid)var __admPageloadid=(new Date).getTime();(function(){var a=!1,b=[];if(!window.AdmonDomReady||"function"!=typeof window.AdmonDomReady){var c=function(){if(!document.body)return setTimeout(c,13);for(var d=0;d<b.length;d++)b[d]();b=[]};window.AdmonDomReady=
function(d){b.push(d);if("complete"==document.readyState)c();else if(!a){if(document.addEventListener){var e=function(){document.removeEventListener("DOMContentLoaded",e,!1);c()};document.addEventListener("DOMContentLoaded",e,!1);window.addEventListener("load",c,!1)}else if(document.attachEvent){var f=function(){"complete"===document.readyState&&(document.detachEvent("onreadystatechange",f),c())};document.attachEvent("onreadystatechange",f);window.attachEvent("onload",c);d=!1;try{d=null==window.frameElement}catch(g){}if(document.documentElement.doScroll&&
d){var h=function(){if(0!=b.length){try{document.documentElement.doScroll("left")}catch(g){setTimeout(h,1);return}c()}};h()}}a=!0}}}})();if(void 0===ADM_AdsTracking)var ADM_AdsTracking={version:"1.0.0",paramFlash:{},getFlashMovie:function(a){return-1!=navigator.appName.indexOf("Microsoft")?document.getElementById(a):document[a]},checkBrowser:function(){var a=!1;var b=navigator.appName;var c=navigator.userAgent+"",d,e=c.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);null==e&&-1==
c.indexOf("MSIE")&&-1!=c.indexOf("Trident/")?(b=-1,null!=/Trident\/.*rv:([0-9]{1,}[.0-9]{0,})/.exec(c)&&(b=RegExp.$1),e=["MSIE",b+""]):(e&&null!=(d=c.match(/version\/([\.\d]+)/i))&&(e[2]=d[1]),e=e?[e[1],e[2]]:[b,navigator.appVersion,"-?"]);b=e;"undefined"!=typeof b&&null!=b&&1<=b.length&&(c=(b[0]+"").toLowerCase(),b=b[1].split("."),b=parseInt(b[0]),("firefox"==c&&22<=b||"msie"==c&&10<=b||"safari"==c&&5<=b||"chrome"==c)&&_admislocalStorage&&(a=!0));return a},fonts:"",getFont:function(a){ADM_AdsTracking.fonts=
a},lcStorage:{timestamp:"timestamp_",get_exprises:function(a,b,c,d){a+="";b=a.indexOf(b,c);c=a.length-1;return-1!=b?(d=a.indexOf(d,b),-1==d&&(d=c),a.substring(b,d)):""},set_item:function(a,b,c){var d=(new Date).getTime(),e=this.timestamp;d=0==c||""==c?d+63072E7:d+864E5*c;var f="_azs"==a?";":",";c=this.get_exprises(b,e,0,f);b=""==c?b+(e+d.toString()+f):b.replace(c,e+d.toString());localStorage.setItem(a,b)},get_item:function(a,b){var c=localStorage.getItem(a),d=(new Date).getTime(),e=this.timestamp;
if(""==c||null==c)return"";endchar="_azs"==a?";":",";var f=this.get_exprises(c,e,0,endchar);f=f.replace(e,"");return""==f||isNaN(parseInt(f))||parseInt(f)<d?"":c.replace(e+f+endchar,"")},remove_item:function(a){localStorage.removeItem(a)},flush:function(){localStorage.clear()}},setCookie:function(a,b,c,d,e,f){(new Date).getTime();d="/";c=0==c||""==c?(new Date(+new Date+63072E7)).toGMTString():(new Date(+new Date+864E5*c)).toGMTString();a=[a+"="+escape(b)];for(var h in c={expires:c,path:d,domain:e})c[h]&&
a.push(h+"="+c[h]);return f&&a.push("secure"),document.cookie=a.join(";"),!0},getCookie:function(a){return 0<document.cookie.length&&(c_start=document.cookie.indexOf(a+"="),-1!=c_start)?(c_start=c_start+a.length+1,c_end=document.cookie.indexOf(";",c_start),-1==c_end&&(c_end=document.cookie.length),unescape(document.cookie.substring(c_start,c_end))):""},get:function(a){var b="",c="";if("__ui"==a||"__uid"==a||"__create"==a)c=a,a="__uif";if(_admislocalStorage){if("__R"==a||"__RC"==a||"__uif"==a)b=ADM_AdsTracking.getCookie(a);
if(null==b||""==b)b=ADM_AdsTracking.lcStorage.get_item(a),null!=b&&""!=b&&ADM_AdsTracking.setCookie(a,b,"")}else b=ADM_AdsTracking.getCookie(a);if(""!=c&&""!=b){a=b.split("|");for(var d=0,e=a.length;d<e;d++)if(-1!=a[d].indexOf(c+":")){b=a[d].replace(c+":","");break}}return b},set:function(a,b,c){if(_admislocalStorage){if(ADM_AdsTracking.lcStorage.set_item(a,b,c),"__R"==a||"__RC"==a||"__uif"==a)"__R"==a&&"undefined"!=typeof ADS_Location&&ADS_Location!=b&&""!=b&&"0"!=b&&(ADS_Location=parseInt(b)),"__RC"==
a&&"undefined"!=typeof ADS_City&&ADS_City!=b&&""!=b&&"0"!=b&&(ADS_City=parseInt(b)),ADM_AdsTracking.setCookie(a,b,c)}else ADM_AdsTracking.setCookie(a,b,c)},getParam:function(){if(ADM_AdsTracking.checkBrowser()){var a=ADM_AdsTracking.get("__create")+"",b=ADM_AdsTracking.get("__uid")+"";30<b.length&&(b="");""==b&&(a="");11<a.length&&""!=b&&(a=Math.floor((new Date).getTime()/1E3));return"&ce=1&lc="+ADM_AdsTracking.get("__RC")+"&cr="+a+"&ui="+b}return""},getInfoParam:function(){if(ADM_AdsTracking.checkBrowser())return"";
var a=ADM_AdsTracking.get("__uid"),b=ADM_AdsTracking.get("__create");return"&ce=1&guie=1&__uid="+a+"&__create="+b},flashcheck:function(a){for(var b in a)ADM_AdsTracking.check(b,a[b],!0)},expireAllCookies:function(a,b){var c=(new Date(0)).toUTCString();document.cookie=a+"=; expires="+c;for(var d=0,e=b.length;d<e;d++)document.cookie=a+"=; path="+b[d]+"; expires="+c},expireActiveCookies:function(a){for(var b=location.pathname.replace(/\/$/,"").split("/"),c=[],d=0,e=b.length,f;d<e;d++)f=b.slice(0,d+1).join("/"),
f=f.replace(/\.([\w]+)/gi,""),""!=f&&(c.push(f),c.push(f+"/"));0<c.length&&ADM_AdsTracking.expireAllCookies(a,c)},check:function(a,b){switch(a){case "__ui":case "__uid":case "__create":if(2==arguments.length&&"__uid"==a||"__create"==a&&""!=b){ADM_AdsTracking.paramFlash[a]=b;var c=ADM_AdsTracking.getFlashMovie("_admFlck");c&&c.setck&&c.setck(ADM_AdsTracking.paramFlash)}var d=ADM_AdsTracking.get("__uif")+"";if(""==d)d=a+":"+b;else{c=a+":"+b;d=d.split("|");for(var e=[],f=0,h=d.length;f<h;f++)-1==d[f].indexOf(a+
":")&&e.push(d[f]);e.push(c);d=e.join("|")}ADM_AdsTracking.set("__uif",d,10);break;default:d=ADM_AdsTracking.get(a),2==arguments.length&&""!=b&&"0"!=b&&"-1"!=b&&(ADM_AdsTracking.paramFlash[a]=b,(c=ADM_AdsTracking.getFlashMovie("_admFlck"))&&c.setck&&c.setck(ADM_AdsTracking.paramFlash)),d!=b&&ADM_AdsTracking.set(a,b,"")}}};if("undefined"==typeof admaddEventListener)var admaddEventListener$11=function(a,b,c){"addEventListener"in a?a.addEventListener(b,c):"attachEvent"in a&&a.attachEvent("on"+b,c)};
if("undefined"==typeof wPrototype)var wPrototype={wdHeight:function(){var a,b=document;"number"==typeof window.innerWidth?a=window.innerHeight:b.documentElement&&b.documentElement.clientHeight?a=b.documentElement.clientHeight:b.body&&b.body.clientHeight&&(a=b.body.clientHeight);return a},wdWidth:function(){var a,b=document;"number"==typeof window.innerWidth?a=window.innerWidth:b.documentElement&&b.documentElement.clientWidth?a=b.documentElement.clientWidth:b.body&&b.body.clientWidth&&(a=b.body.clientWidth);
return a},getElementTop:function(a){var b=document;if(b.getElementById)var c=b.getElementById(a);else b.all&&(c=b.all[a]);if(null!=c){yPos=c.offsetTop;for(tempEl=c.offsetParent;null!=tempEl;)yPos+=tempEl.offsetTop,tempEl=tempEl.offsetParent;return yPos}return 150},getElementWidth:function(a){return document.getElementById(a).clientWidth},getElementLeft:function(a){var b,c=document;c.getElementById?b=c.getElementById(a):c.all&&(b=c.all[a]);a=b.offsetLeft;for(b=b.offsetParent;null!=b;)a+=b.offsetLeft,
b=b.offsetParent;return a},scrollTop:function(){var a=document,b=a.body.scrollTop;0==b&&(b=window.pageYOffset?window.pageYOffset:a.body.parentElement?a.body.parentElement.scrollTop:0);return b},scrollLeft:function(){var a=document,b=window.pageXOffset?window.pageXOffset:0,c=a.documentElement?a.documentElement.scrollLeft:0;a=a.body?a.body.scrollLeft:0;b=b?b:0;c&&(!b||b>c)&&(b=c);return a&&(!b||b>a)?a:b},bdWidth:function(){var a=document;return bodyWidth=Math.max(Math.max(a.body.scrollWidth,a.documentElement.scrollWidth),
Math.max(a.body.offsetWidth,a.documentElement.offsetWidth),Math.max(a.body.clientWidth,a.documentElement.clientWidth))},bdHeight:function(){var a=document;return Math.max(Math.max(a.body.scrollHeight,a.documentElement.scrollHeight),Math.max(a.body.offsetHeight,a.documentElement.offsetHeight),Math.max(a.body.clientHeight,a.documentElement.clientHeight))}};var _ADMFlashDetect=new function(){var a=this;a.installed=!1;a.raw="";a.major=-1;a.minor=-1;a.revision=-1;a.revisionStr="";var b=[{name:"ShockwaveFlash.ShockwaveFlash.7",
version:function(d){return c(d)}},{name:"ShockwaveFlash.ShockwaveFlash.6",version:function(d){var e="6.0.r21";try{d.AllowScriptAccess="always",e=c(d)}catch(f){}return e}},{name:"ShockwaveFlash.ShockwaveFlash",version:function(d){return c(d)}}],c=function(d){var e=-1;try{e=d.GetVariable("$version")}catch(f){}return e};a.majorAtLeast=function(d){return a.major>=d};a.minorAtLeast=function(d){return a.minor>=d};a.revisionAtLeast=function(d){return a.revision>=d};a.versionAtLeast=function(d){var e=[a.major,
a.minor,a.revision],f=Math.min(e.length,arguments.length);for(i=0;i<f;i++)if(e[i]>=arguments[i]){if(!(i+1<f&&e[i]==arguments[i]))return!0}else return!1};a._ADMFlashDetect=function(){if(navigator.plugins&&0<navigator.plugins.length){var d=navigator.mimeTypes;if(d&&d["application/x-shockwave-flash"]&&d["application/x-shockwave-flash"].enabledPlugin&&d["application/x-shockwave-flash"].enabledPlugin.description){var e=d=d["application/x-shockwave-flash"].enabledPlugin.description;d=e.split(/ +/);var f=
d[2].split(/\./);d=d[3];var h=parseInt(f[0],10);var g=parseInt(f[1],10);var l=d;var k=parseInt(d.replace(/[a-zA-Z]/g,""),10)||a.revision;a.raw=e;a.major=h;a.minor=g;a.revisionStr=l;a.revision=k;a.installed=!0}}else if(-1==navigator.appVersion.indexOf("Mac")&&window.execScript)for(d=-1,f=0;f<b.length&&-1==d;f++){e=-1;try{e=new ActiveXObject(b[f].name)}catch(n){e={activeXError:!0}}e.activeXError||(a.installed=!0,d=b[f].version(e),-1!=d&&(e=d,l=e.split(","),h=parseInt(l[0].split(" ")[1],10),g=parseInt(l[1],
10),k=parseInt(l[2],10),l=l[2],a.raw=e.replace("Shockwave Flash ",""),a.major=h,a.minor=g,a.revision=k,a.revisionStr=l))}}()},paramBrowser={screen_Resolution:screen.width+"x"+screen.height,screen_Color:screen.colorDepth,hostname:document.domain.replace("www.",""),cookieEnabled:navigator.cookieEnabled?1:0,javaEnabled:navigator.javaEnabled()?1:0,referrer:document.referrer,urlLocation:document.URL,url:function(){var a=window.location!=window.parent.location?document.referrer:document.location+"",b=this.hostname;
return""==b?a:a.substring(a.indexOf(b)+b.length,a.length)},flashVersion:function(){return _ADMFlashDetect.major+"."+_ADMFlashDetect.minor+"."+_ADMFlashDetect.revisionStr},zenURL:{encode:function(a){return encodeURIComponent(a)},decode:function(a){return decodeURIComponent(a.replace(/\+/g," "))}}},_ADMBrowser={Version:function(){var a=999;try{var b=navigator.userAgent+"";-1!=navigator.appVersion.indexOf("MSIE")&&(a=parseFloat(navigator.appVersion.split("MSIE")[1]));if(-1!=b.indexOf("Trident")){var c=
/Trident\/.*rv:([0-9]{1,}[.0-9]{0,})/.exec(b);c&&2<=c.length&&(a=parseFloat(c[1]))}}catch(d){}return a}},_admBrV=_ADMBrowser.Version(),__ADMwdVis=function(){var a,b={hidden:"visibilitychange",webkitHidden:"webkitvisibilitychange",mozHidden:"mozvisibilitychange",msHidden:"msvisibilitychange"};for(a in b)if(a in document){var c=b[a];break}return function(d){d&&document.addEventListener(c,d);return!document[a]}}();"undefined"==typeof window.admcheckPushstate&&(window.admcheckPushstate=function(){window.setTimeout(function(){try{if("tiki.vn"==
document.domain+""){var a=document.URL,b=document.location.pathname,c=function(){var d=location.pathname;if(b!=d){paramBrowser.referrer=a;a=document.URL;b=d;try{ADMTrackingsend("v")}catch(e){}}setTimeout(function(){c()},1E3)};c()}}catch(d){}},1E3)},window.admcheckPushstate());var ADM_PPTKSend=ADM_PPTKSend||{};window.admTrackingParam=window.admTrackingParam||{};ADM_PPTKSend.trackingClosePopup=function(){try{paramBrowser.referrer=paramBrowser.urlLocation,paramBrowser.urlLocation=document.URL,__admPageloadid=
window.admTrackingParam.pageloadid,__admloadPageId=window.admTrackingParam.__admloadPageId,__AdmsendRandom=window.admTrackingParam.__AdmsendRandom}catch(a){}try{AdmanlaticPopup.close()}catch(a){}};ADM_PPTKSend.trackingPopup=function(){try{paramBrowser.referrer=paramBrowser.urlLocation,paramBrowser.urlLocation=document.URL,window.admTrackingParam.pageloadid=window.admTrackingParam.pageloadid||__admPageloadid,window.admTrackingParam.__admloadPageId=window.admTrackingParam.__admloadPageId||__admloadPageId,
"undefined"==typeof window.admTrackingParam.__AdmsendRandom&&(window.admTrackingParam.__AdmsendRandom="&lsn="+window.admTrackingParam.pageloadid+ADM_AdsTracking.getParam()),window.admTrackingParam.ispopup=!0,window.__ADM_TrackingSend=!1,window.__admloadPageId=function(){function a(){return Math.floor(65536*(1+Math.random())).toString(16).substring(1)}return a()+a()+a()+a()+a()+a()+a()+a()}(),__admPageloadid=(new Date).getTime(),window.__AdmsendRandom="&lsn="+__admPageloadid+ADM_AdsTracking.getParam(),
(new Image).src="https://"+checkAdmdomainAds("lg1.logging.admicro.vn")+"/ftest?dg="+__admloadPageIdc+ADM_AdsTracking.getParam()+"&url="+encodeURIComponent("http://popup"+document.location.hostname+document.location.pathname)+"&rd="+Math.random(),ADM_TrackingSend$3()}catch(a){}try{AdmanlaticPopup.open()}catch(a){}};ADM_TrackingSend$3();if("undefined"==typeof logposurlviewsend){try{var ptc="https:"==document.location.protocol?"https:":"http:",dmnnews=document.domain;if(-1==dmnnews.indexOf("googlesyndication"))try{var ele=
document.querySelector('[src*="/cpa/core/tp2_core.min.js"]');ele||_admloadJs1(ptc+"//static.contineljs.com/core/lgnews.js")}catch(a){}}catch(a){}window.logposurlviewsend="sendnews";AdmonDomReady(function(){try{var a=function(){he=b()+d;if(he>c){c=he;for(var k=[],n=[],m=0;m<f;m++)c>g[m]&&k.push(m);for(m=0;m<k.length;m++){var p=h[m].getAttributeNode("data-check-position").value;n.push(p+":"+g[m])}n=encodeURIComponent(n);logposurlview="&sl="+c+"&si="+n;k.length==f&&("undefined"!=typeof window.__ADMTrackingSendUrl&&
""!=window.__ADMTrackingSendUrl&&(img=new Image,k=window.__ADMTrackingSendUrl,k+="&p="+paramBrowser.zenURL.encode(paramBrowser.url()),k+="&r="+(""==paramBrowser.referrer?"":paramBrowser.zenURL.encode(paramBrowser.referrer)),img.src=k+logposurlview+"&i="+encodeURIComponent("p;"+__admPageloadid+";"+window.__ADMScrollcounter+";"+window.__ADMScrollEnd+";"+__ADMisActive+";"+__ADMMouse+";"+__ADMTouch+";"+(wPrototype.wdWidth()+"x"+wPrototype.wdHeight())+";"+window.__ifr+";"+("undefined"==typeof ADS_CHECKER?
0:1)+";"+__admloadPageId+";"+__admloadPageIdc)+"&rdm="+Math.random()+ADM_AdsTracking.getParam()),chkadmTrackingt||clearTimeout(chkadmTrackingt),chkadmTrackingt=window.setTimeout(function(){ADM_TrackingSendChk()},2E4))}},b=function(){var k=document.body.scrollTop;0==k&&(k=window.pageYOffset?window.pageYOffset:document.body.parentElement?document.body.parentElement.scrollTop:0);return k},c=0,d=window.innerHeight,e=-1,f=0,h=[];h=document.querySelectorAll("[data-check-position]");f=h.length;for(var g=
[],l=0;l<f;l++)g.push(h[l].offsetTop);window.addEventListener("scroll",function(){-1!=e&&clearTimeout(e);e=window.setTimeout(function(){a()},1E3)})}catch(k){}})}}catch(a){(function(){var b=0<document.cookie.length&&(c_start=document.cookie.indexOf("__uif="),-1!=c_start)?(c_start=c_start+5+1,c_end=document.cookie.indexOf(";",c_start),-1==c_end&&(c_end=document.cookie.length),unescape(document.cookie.substring(c_start,c_end))):"";var c=/__uid:([0-9]+)/.exec(b);b="";c&&2<=c.length&&(b=encodeURIComponent(c[1]));
c="https:"==document.location.protocol?"https:":"http:";(new Image).src=c+"//amcdn.vn/blc?lsn="+window.__admloadPageId+"&dg="+window.__admloadPageIdc+"&ui="+b+"&url="+encodeURIComponent("http://error3rdcdn"+document.domain+document.location.pathname)+"&rd="+Math.random()})()}
(function(){if("tiki.vn"==document.domain+"")try{var a=ADM_AdsTracking.getCookie("tiki_client_id"),b=ADM_AdsTracking.get("__uid"),c=ADM_AdsTracking.getCookie("__utm"),d=localStorage.__uidac||"",e=localStorage.productRecentlyListId||"",f=[],h=[];if(e){f=JSON.parse(e);e=0;for(var g=f.length;e<g;e++)h.push(f[e].id);var l=h.join(",");""!=l&&((new Image).src="https://lio.aiservice.vn/lg/QfiEiGq269?g="+b+"&t=100&ls="+l+"&tui=&u="+encodeURIComponent(c)+"&ts="+a+"&dmg="+d)}}catch(k){}if(!window.sendnandatk)try{window.sendnandatk=
!0,window.admTrackTimeonSite&&((new Image).src="//lg.nanda.vn/mapid?src=admicro&dguid="+__admloadPageIdc+"&3guid="+ADM_AdsTracking.get("__uid"))}catch(k){}})();

(function(){
	function _admloadJs(d,b,c){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src=d;2<=arguments.length&&(a.onload=b,a.onreadystatechange=function(){4!=a.readyState&&"complete"!=a.readyState||b()});a.onerror=function(){if("undefined"!=typeof c)try{c()}catch(e){}};document.getElementsByTagName("head")[0].appendChild(a)};

	
	var dmn=document.domain+'';
	if(dmn.indexOf('blogtamsu')!=-1 || dmn.indexOf('tiki')!=-1 || dmn.indexOf('vietnamnet')!=-1 || dmn.indexOf('cnnd.vn')!=-1){
		return '';
	}
	window.checkBenchmarkRec=window.checkBenchmarkRec||false;
	if(!window.checkBenchmarkRec){
		window.checkBenchmarkRec=true;
		_admloadJs('https://js.aiservice.vn/recbm/benchmark.js');
	}

})()
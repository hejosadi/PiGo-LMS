<?php

if (elgg_is_logged_in())
{
forward('dashboard');
}
//.$_SESSION['user']->username);


?>
<!DOCTYPE HTML>
<html class="   js"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

  
    
    <title>PiGo | e-learning System</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    
        
    
    
    <script src="mod/tweet_me/css/ga.js" async=""></script>
    <script src="mod/tweet_me/css/t1-more.js" async="" type="text/javascript" id="LR2">
      
    </script><script src="mod/tweet_me/css/t1-core.js" async="" type="text/javascript" id="LR1"></script>
    <script type="text/javascript" charset="utf-8">
      

      
      document.domain = 'twitter.com';
    
      // this will be copied to twttr.appStartTime once our JS has started up
      document.startTime = new Date().getTime();
      var twttr = {};
      twttr.versionName = 'phoenix';
      twttr.isT1 = true;
      twttr.didPingKeynote = false;
      twttr.keynoteTTFTPing = function() {
        if (!twttr.didPingKeynote && window.location.href.indexOf('keynoteTest') > 0) {
          var image = document.createElement('img');
          image.src = '/images/keynote.gif';
          twttr.didPingKeynote = true;
        }
      }
    
      window.console||function(){var a=["log","debug","info","warn","error","assert","dir","dirxml","group","groupEnd","time","timeEnd","count","trace","profile","profileEnd"];window.console={};for(var b=0;b<a.length;++b)window.console[a[b]]=function(){}}();
    
        twttr.griffin = {
          current: ["dnc2012","test","gop2012","olympics","nascar","fussball"]
        };
    
        
        twttr.griffin||(twttr.griffin={current:[]}),twttr.griffin.isEvent=function(a){if(!a)return!1;a=a.replace(/^#|\/$/g,"").toLowerCase();for(var b=0;b<twttr.griffin.current.length;b++)if(a==twttr.griffin.current[b])return a;return!1},twttr.griffin.redirectIfEvent=function(a,b){var a=twttr.griffin.isEvent(a);if(a){var c=document.referrer||"none",d=["ev_",b,"_",a,"=",c,"; path=/"].join("");return document.cookie=d,window.location.replace("/hashtag/"+a),!0}return!1},twttr.griffin.redirectOnSearch=function(a){return $.cookie("noReroute_"+a)?!1:twttr.griffin.redirectIfEvent(a,"takeover")},twttr.griffin.setNoRedirectOnSearch=function(a,b){if(!twttr.griffin.isEvent(a))return;var c=b?!0:null;$.cookie("noReroute_"+a,c,{path:"/"})};if(window.location.pathname=="/"&&window.location.hash!=""){var hash=window.location.hash.substr(1).toLowerCase();twttr.griffin.redirectIfEvent(hash,"redir")};
    
    </script>
    
    
    <script type="text/javascript">(function(){window.setTimeout=window.setTimeout,window.setInterval=window.setInterval,window.WATCH=function(a,b){typeof b=="undefined"&&(b=a,a=undefined),typeof a=="string"&&(WATCH._didExecute[a]=!0),WATCH._attempt(this,b)},WATCH._didExecute={},WATCH._reportCount=0,WATCH._reportLimit=25,WATCH._reportInterval=6e4,WATCH._active=!1,WATCH.activate=function(a){typeof a=="undefined"&&(a=!0),WATCH._active=a,extend(WATCH,WATCH._active?WATCH.actives:WATCH.inactives)},WATCH.actives={},WATCH.inactives={};var extend=function(a,b){for(var c in b)a[c]=b[c]},noop=function(){};WATCH._attempt=function(a,b){arguments.length<2&&(b=a,a=window);if(WATCH._active)try{b.apply(a)}catch(c){WATCH._triggerError(c)}else b.apply(a)},WATCH.inactives.end=noop,WATCH.actives.end=function(a){if(typeof a=="undefined")throw new Error("WATCH.end() requires a label");WATCH._didExecute[a]?WATCH._didExecute[a]=!1:WATCH._active&&WATCH._triggerError(new Error('WATCH.end("'+a+'") called without successful call to WATCH("'+a+'", fn(){...}) - a SyntaxError probably just happened')),WATCH._didExecute[a]=!1},WATCH.inactives.callback=function(a,b){return typeof b=="undefined"?a:b},WATCH.actives.callback=function(that,callback){arguments.length===1&&(callback=that,that=this),typeof callback=="string"&&(callback=function(stringVersion){return function(){eval(stringVersion)}}(callback));var watchedCallback=function(){var a=this,b=arguments,c;return WATCH._attempt(function(){c=callback.apply(a,b)}),c};return watchedCallback.isWatched=!0,watchedCallback},WATCH._onErrorCallbacks={},WATCH.inactives._addOnError=noop,WATCH.actives._addOnError=function(a){var b=WATCH._unique();return WATCH._onErrorCallbacks[b]=a,b},WATCH.inactives._removeOnError=noop,WATCH.actives._removeOnError=function(a){delete WATCH._onErrorCallbacks[a]},WATCH._lastUnique=-1,WATCH._unique=function(){return++WATCH._lastUnique},WATCH.inactives.jQuery=noop,WATCH.actives.jQuery=function(){WATCH._originalJQueryEventAdd=WATCH._originalJQueryEventAdd||jQuery.event.add,jQuery.event.add=function(){var a=Array.prototype.slice.call(arguments);return typeof a[2]=="function"?a[2]=WATCH.callback(a[2]):a&&typeof a[2]=="object"&&a[2].handler&&(a[2].handler=WATCH.callback(a[2].handler)),WATCH._originalJQueryEventAdd.apply(this,a)},WATCH._originalJQueryAjax=WATCH._originalJQueryAjax||jQuery.ajax,jQuery.ajax=function(a){return jQuery.each(["complete","error","success"],function(b,c){if(!a[c])return;a[c]=WATCH.callback(a[c])}),WATCH._originalJQueryAjax.apply(this,arguments)}},WATCH.inactives.undoJQuery=noop,WATCH.actives.undoJQuery=function(){jQuery.event.add=WATCH._originalJQueryEventAdd,jQuery.ajax=WATCH._originalJQueryAjax},WATCH._previousErrors={};var escapeDoubleQuotes=function(a){return a.toString().replace('"','\\"')},stringifyLite=function(a){var b="{",c=!1;for(var d in a){if(typeof a[d]=="undefined"||a[d]===null)continue;b+=(c?',"':'"')+escapeDoubleQuotes(d)+'":"'+escapeDoubleQuotes(a[d])+'"',c=!0}return b+"}"};WATCH._scribeError=function(a){if(WATCH._previousErrors[a.error]&&new Date-WATCH._previousErrors[a.error]<WATCH._reportInterval)return!1;if(WATCH.reportLimit<=WATCH.reportCount)return;WATCH.reportCount++;if(!document.location.hostname.match(/(^(www|api)\.)?twitter\.com$/))return;WATCH._previousErrors[a.error]=new Date,a.product_name="webclient",a.type="js_error",a.url=window.location.href,a.event_name="test";var b=document.location.hostname.match(/(^(www|api|staging\d+.local)\.)twitter\.com$/)!=null,c=b?"scribe.twitter.com":window.location.host,d=(window.location.protocol.match(/s\:$/)?"https":"http")+"://"+c;d+=b?"/":"/scribe",d+="?category=client_watch_error&log="+encodeURIComponent(stringifyLite(a))+"&ts="+(new Date).getTime(),(new Image).src=d},WATCH._triggerError=function(a){var b=!0,c={error:a};for(var d in WATCH._onErrorCallbacks)try{WATCH._onErrorCallbacks[d](c)===!1&&(b=!1)}catch(e){c.callbackFailure=!0}WATCH._scribeError(c);if(b)throw a},WATCH.inactives.natives=noop,WATCH.actives.natives=function(){window.setInterval=WATCH._watchedSetInterval,window.setTimeout=WATCH._watchedSetTimeout},WATCH.inactives.undoNatives=noop,WATCH.actives.undoNatives=function(){window.setInterval=WATCH._originalSetInterval,window.setTimeout=WATCH._originalSetTimeout},WATCH._originalSetInterval=window.setInterval,WATCH._originalSetTimeout=window.setTimeout,WATCH._watchedSetInterval=function(a,b){var c=WATCH._originalSetInterval;return c(WATCH.callback(a),b)},WATCH._watchedSetTimeout=function(a,b){var c=WATCH._originalSetTimeout;return c(WATCH.callback(a),b)},WATCH.activate(!1)})();</script>
    <script type="text/javascript">
    </script>
    
    
      <script>
  function bust () {
    document.write = "";
    window.top.location = window.self.location;
    setTimeout(function() {
      document.body.innerHTML = '';
      }, 0);
    window.self.onload = function(evt) {
      document.body.innerHTML = '';
    };
  }
  if (window.top !== window.self) { // are you trying to put self in an iframe?
    try {
      if (window.top.location.host) { // this is illegal to access unless you share a non-spoofable document domain
        // fun times
      } else {
        bust(); // chrome executes this
      }
    } catch (ex) {
      bust(); // everyone executes this
    }
  }
  </script>
    
    
        
        
    
    </script>
    
    
    <script type="text/javascript">
    </script>
    
    
     

    


        <link rel="stylesheet" href="mod/tweet_me/css/t1_core_logged_out.css" type="text/css" media="screen">



      <noscript>
      </noscript>


      <script>(function(){var a=document.getElementsByTagName("html")[0],b=window.location.hash.split("?")[0],c=b.match(/#/)&&b.replace(/#[!]?[\/]?/,"")!=="";c?a.className+=" remove-prerendered-content":(a.className+=" use-prerendered-content",a.getAttribute("data-nav-highlight-class-name")&&(a.className+=" "+a.getAttribute("data-nav-highlight-class-name")))})();</script>


  <link rel="stylesheet" href="mod/tweet_me/css/t1_more.css" type="text/css" media="screen">


    <script>var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-30775-6"],["_trackPageview"],["_setDomainName","twitter.com"]),twttr.didInsertGA=!1,twttr.insertGAScriptElement=function(){if(!twttr.didInsertGA){var a=document.getElementsByTagName("script")[0],b=document.createElement("script");b.async=!0,b.src=(document.location.protocol=="https:"?"https://ssl":"http://www")+".google-analytics.com/ga.js",a.parentNode.insertBefore(b,a),twttr.didInsertGA=!0}},twttr.trackPageView=function(a){var b=["_trackPageview"];a&&b.push(a),_gaq.push(b)};</script>

  </head><body class="t1  logged-out   front-random-image-city-balcony  ms-windows mozilla front-page"><iframe tabindex="-1" role="presentation" style="position: absolute; top: -9999px;" src="css/receiver.html"></iframe>
    <div class="route-front" id="doc">
      <div class="push-loader" id="pushStateSpinner"></div>
    
    <div class="topbar js-topbar">
      <div id="banners" class="js-banners">
        
      </div>
      <div class="global-nav" data-section-term="top_nav">
        <div class="global-nav-inner">
          <div class="container">
            
    
            
        
    
            
    
            <ul class="nav secondary-nav language-dropdown">
              <li class="dropdown js-language-dropdown">
                <a class="dropdown-toggle" href="http://www.swsocialweb.com/">
                  <small>SW Social Web | Build 018.02.2014</small>
                  
                
              </li>
            </ul>
            
            <div class="pull-right">
              <form class="form-search js-search-form" action="/search" id="global-nav-search">
            <span class="search-icon js-search-action">
              <i class="nav-search" tabindex="0"></i>
            </span>
            <label class="hidden-elements" for="search-query">Search</label>
            <input value="Search" class="search-input" id="search-query" placeholder="Search" name="q" autocomplete="off" spellcheck="false" tabindex="-1" type="text">
            <input disabled="disabled" class="search-input search-hinting-input" id="search-query-hint" autocomplete="off" spellcheck="false" type="text"><div class="dropdown-menu typeahead">
  <div class="dropdown-caret">
    <div class="caret-outer"></div>
    <div class="caret-inner"></div>
  </div>
  <div class="dropdown-inner js-typeahead-results">
  </div>
</div>
          </form>
        </div>
    
            
            <a original-title="Close all open Tweets" id="close-all-button" class="close-all-tweets js-close-all-tweets" href="#">
              <i class="nav-breaker"></i>
            </a>
          </div>
        </div>
      </div>
        <div class="alert-messages " id="message-drawer">
    </div>
</div>
    <div id="page-outer">
            <div class="front-container front-container-full-signup  " id="front-container">
            
          
            <div class="front-bg">
              <img class="front-image" src="mod/tweet_me/css/city-balcony2x.jpg">
            </div>
          
          
            <div class="front-card">
                <div class="front-welcome">
                  <div class="front-welcome-text">
                    
                    <center><h1>Centro Escolar Ana Rita Vélez de Moreira</h1></center>
            <center><h1>Aula Virtual</h1></center>
            </br>
                    <p> Powered by PiGo | e-learning System </p><p> Aulas Virtuales para Escuelas y Universidades</p>
                    
                  </div>
                </div>
          
          
          
                <div class="front-signin js-front-signin">
                  
                    
                  <form method="post" mclass="signin" action="action/login" class="signin" class="elgg-form">
<?php
$ts = time();
$token = generate_action_token($ts);
?>

<input type="hidden" name="__elgg_token" value="<?php echo $token; ?>"/>
<input type="hidden" name="__elgg_ts" value="<?php echo $ts; ?>" />

                    <div class="placeholding-input username">
                      <input class="text-input email-input" name="username" title="Username or email" autocomplete="on" tabindex="1" type="text">
                        <span class="placeholder">Escriba su Usuario</span>
                    </div>
          
                    <table class="flex-table password-signin">
                      <tbody>
                        <tr>
                          <td class="flex-table-primary">
                            <div class="placeholding-input password flex-table-form">
                              <input class="text-input flex-table-input" name="password" title="Password" tabindex="2" type="password">
                              <span class="placeholder">Escriba su Contraseña</span>
                            </div>
                          </td>
                          <td class="flex-table-secondary">
                            <button type="submit" class="submit btn primary-btn flex-table-btn js-submit" tabindex="0">
                              
                              Entrar
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
          
                    <div class="remember-forgot">
                      <label class="remember">
                        <input value="1" name="remember_me" tabindex="3" type="checkbox">
                        <span>Remember me</span>
                      </label>
                      <span class="separator">·</span>
                      <a class="forgot" href="forgotpassword">Olvido su contraseña?</a>
                    </div>
          
          
                    
                  </form>
                </div>
              
              

              <div class="front-signup js-front-signup">
                       <h2><strong>Para entrar ingrese su usuario y contraseña.</strong>  </br>
                       </br>Si tiene problemas, comuniquese con su maestro o encargado del Aula Informatica</h2>
                       <center><img src="mod/tweet_me/css/mined_pigo.jpg"></center>
                       <center><img src="http://sitiosescolares.miportal.edu.sv/12944/noticias/noticias_files/plan.jpg"></center>   

                </div>
          
          
            </div>
        
            </div>
          
            <div class="footer inline-list">
    <ul>
      <li><a href="http://www.swsocialweb.com">PiGo</a><span class="dot divider"> ·</span></li>
      
                
      <li><span class="copyright">© 2012 SW Social Web</span></li>
    </ul>
  </div>

          
          </div>
      <div id="page-container" class="wrapper"><div><!-- nothing! --></div></div>
      </div>
    </div>
    <div class="twttr-dialog-wrapper"></div>
  

    
  
  
  <script type="text/javascript">WATCH('loadrunner', function() {
      (function(a,b){function u(a){for(var b=1,c;c=arguments[b];b++)for(var d in c)a[d]=c[d];return a}function v(a){return Array.prototype.slice.call(a)}function x(a,b){for(var c=0,d;d=a[c];c++)if(b==d)return c;return-1}function y(){var a=v(arguments),b=[];for(var c=0,d=a.length;c<d;c++)a[c].length>0&&b.push(a[c].replace(/\/$/,""));return b.join("/")}function z(a,b,c){var d=b.split("/"),e=a;while(d.length>1){var f=d.shift();e=e[f]=e[f]||{}}e[d[0]]=c}function A(){}function B(a,b){a&&(this.id=this.path=this.resolvePath(a)),this.force=!!b}function C(a,b){this.id=a,this.body=b,typeof b=="undefined"&&(this.path=this.resolvePath(a))}function D(a){var b=[];for(var c=0,d;d=a[c];c++)d instanceof F?b=b.concat(D(d.deps)):d instanceof C&&b.push(d);return b}function E(a){this.deps=a,this.deps.length==0&&this.complete()}function F(a){this.deps=a}function G(){for(var a in d)if(d[a].readyState=="interactive")return m[d[a].id]}function H(a,b){var d;return!a&&c&&(d=l||G()),d?(delete m[d.scriptId],d.body=b,d.execute()):(k=d=new C(a,b),j[d.id]=d),d}function I(){var a=v(arguments),b,c;return typeof a[0]=="string"&&(b=a.shift()),c=a.shift(),H(b,c)}function J(a,b){var c=b.id||"",d=c.split("/");d.pop();var e=d.join("/");return a.replace(/^\./,e)}function K(a,b){function d(a){return C.exports[J(a,b)]}var c=[];for(var e=0,f=a.length;e<f;e++){if(a[e]=="require"){c.push(d);continue}if(a[e]=="exports"){b.exports=b.exports||{},c.push(b.exports);continue}c.push(d(a[e]))}return c}function L(){var a=v(arguments),b=[],c,d;typeof a[0]=="string"&&(c=a.shift()),w(a[0])&&(b=a.shift()),d=a.shift();var e=H(c,function(a){function f(){var c=K(v(b),e),f;typeof d=="function"?f=d.apply(e,c):f=d,typeof f=="undefined"&&(f=e.exports),a(f)}var c=[];for(var g=0,i=b.length;g<i;g++){var j=b[g];x(["require","exports"],j)==-1&&c.push(J(j,e))}c.length>0?M.apply(this,c.concat(f)):f()});return e}function M(){var a=v(arguments),b;typeof a[a.length-1]=="function"&&(b=a.pop());var c=new E(N(a));return b&&c.then(b),c}function N(a){var b=[];for(var c=0,d;d=a[c];c++)typeof d=="string"&&(d=O(d)),w(d)&&(d=new F(N(d))),b.push(d);return b}function O(a){var b,c;for(var d=0,e;e=M.matchers[d];d++){var f=e[0],g=e[1];if(b=a.match(f))return g(a)}throw new Error(a+" was not recognised by loader")}function Q(){return a.using=n,a.provide=o,a.define=p,a.loadrunner=q,P}function S(a){if(typeof R[a]!="undefined")return R[a];for(var b=0;b<M.bundles.length;b++)for(var c in M.bundles[b])if(c!=a&&x(M.bundles[b][c],a)>-1)return R[a]=c,c;return R[a]=a,a}var c=a.attachEvent&&!a.opera,d=b.getElementsByTagName("script"),e=0,f,g=b.createElement("script"),i={},j={},k,l,m={},n=a.using,o=a.provide,p=a.define,q=a.loadrunner,r={};for(var s=0,t;t=d[s];s++)if(t.src.match(/loadrunner\.js(\?|#|$)/)){f=t;break}var w=Array.isArray||function(a){return a.constructor==Array};A.prototype.then=function(b){var c=this;return this.started||(this.started=!0,this.start()),this.completed?b.apply(a,this.results):(this.callbacks=this.callbacks||[],this.callbacks.push(b)),this},A.prototype.start=function(){},A.prototype.complete=function(){if(!this.completed){this.results=v(arguments),this.completed=!0;if(this.callbacks)for(var b=0,c;c=this.callbacks[b];b++)c.apply(a,this.results)}},B.loaded=[],B.times={},B.prototype=new A,B.prototype.resolvePath=function(a){return S(a)},B.prototype.start=function(){var a=this,b,c;return(c=j[this.id])?(c.then(function(){a.complete()}),this):((b=i[this.id])?b.then(function(){a.loaded()}):!this.force&&x(B.loaded,this.id)>-1?this.loaded():this.load(),this)},B.prototype.createScriptTag=function(){var b=this,c;i[this.id]=b,(c=r[this.path])&&b.then(function(){for(var a=0,b;b=c[a];a++)b.complete.apply(b,arguments)}),this.times={start:new Date};var f=g.cloneNode(!1);this.scriptId=f.id="LR"+ ++e,f.type="text/javascript",f.async=!0,f.onerror=function(){throw new Error(b.path+" not loaded")},f.onreadystatechange=f.onload=function(c){c=a.event||c;if(c.type=="load"||x(["loaded","complete"],this.readyState)>-1)this.onreadystatechange=null,b.loaded()},f.src=this.path,l=this,d[0].parentNode.insertBefore(f,d[0]),l=null,m[f.id]=this},B.prototype.queueScript=function(){r[this.path]=r[this.path]||[],r[this.path].push(this)},B.prototype.load=function(a){return M.autoLoad||a?this.createScriptTag():this.queueScript(),this},B.prototype.loaded=function(){this.complete()},B.prototype.complete=function(){x(B.loaded,this.id)==-1&&B.loaded.push(this.id),this.times&&(B.times[this.id]=u(this.times,{end:new Date})),delete i[this.id],A.prototype.complete.apply(this,arguments)},C.exports={},C.prototype=new B,C.prototype.resolvePath=function(a){return S(a)!=a?S(a):y(M.path,a+".js")},C.prototype.start=function(){var a,b,c=this,d;this.body?this.execute():(a=C.exports[this.id])?this.exp(a):(b=j[this.id])?b.then(function(a){c.exp(a)}):(j[this.id]=this,this.load())},C.prototype.loaded=function(){var a,b,d=this;c?(b=C.exports[this.id])?this.exp(b):(a=j[this.id])&&a.then(function(a){d.exp(a)}):(a=k,k=null,a.id=a.id||this.id,a.then(function(a){d.exp(a)}))},C.prototype.complete=function(){delete j[this.id],B.prototype.complete.apply(this,arguments)},C.prototype.execute=function(){var a=this;typeof this.body=="object"?this.exp(this.body):typeof this.body=="function"&&this.body.apply(window,[function(b){a.exp(b)}])},C.prototype.exp=function(a){this.times&&u(this.times,{eval:new Date}),this.complete(this.exports=C.exports[this.id]=a||{})},E.prototype=new A,E.prototype.start=function(){function b(){var b=[];for(var c=0,d;d=a.deps[c];c++){if(!d.completed)return;d.results.length>0&&(b=b.concat(d.results))}a.complete.apply(a,b)}var a=this;for(var c=0,d;d=this.deps[c];c++)d.then(b);return this},E.prototype.load=function(){for(var a=0,b;b=this.deps[a];a++)b.load&&b.load(!0);return this},E.prototype.as=function(a){var b=this;return this.then(function(){var c=D(b.deps),d={};for(var e=0,f;f=c[e];e++)z(d,f.id,arguments[e]);a.apply(this,[d].concat(v(arguments)))})},F.prototype=new A,F.prototype.start=function(){var a=this,b=0,c=[];return function d(){var e=a.deps[b++];e?e.then(function(a){e.results.length>0&&(c=c.concat(e.results)),d()}):a.complete.apply(a,c)}(),this},F.prototype.load=function(){var a=this,b=0;return function c(){var d=a.deps[b++];d&&d.load&&d.load(!0).then(function(){c()})}(),this},L.amd={};var P=function(a){return a(M,I,P,L)};P.Script=B,P.Module=C,P.Collection=E,P.Sequence=F,P.Dependency=A,P.noConflict=Q,a.loadrunner=P,a.using=M,a.provide=I,a.define=L,M.path="",M.autoLoad=!0,M.bundles=[];var R={};M.matchers=[],M.matchers.add=function(a,b){this.unshift([a,b])},M.matchers.add(/(^script!|\.js$)/,function(a){var b=new B(a.replace(/^\$/,M.path.replace(/\/$/,"")+"/").replace(/^script!/,""),!1);return b.id=a,b}),M.matchers.add(/^[a-zA-Z0-9_\-\/]+$/,function(a){return new C(a)}),f&&(M.path=f.getAttribute("data-path")||f.src.split(/loadrunner\.js/)[0]||"",(main=f.getAttribute("data-main"))&&M.apply(a,main.split(/\s*,\s*/)).then(function(){}))})(this,document);
      loadrunner(function(a,b,c,d){function e(a){this.id=this.path=a}e.inProgress=[],e.done=[],e.prototype=new c.Dependency,e.prototype.start=function(){var a=this,b;(b=e.done[this.id])?this.complete(b.result):(b=e.inProgress[this.id])?b.then(function(){a.complete(b.result)}):(e.inProgress[this.id]=this,this.load())},e.prototype.load=function(){var a,b=this;if(window.XMLHttpRequest)a=new window.XMLHttpRequest;else try{a=new window.ActiveXObject("Microsoft.XMLHTTP")}catch(c){return new Error("XHR not found.")}a.onreadystatechange=function(){a.readyState==4&&(b.result=a.responseText,e.done[b.id]=b,delete e.inProgress[b.id],b.complete(b.result))},a.open("GET",this.path,!0),a.send(null)},a.matchers.add(/^json!/,function(a){return new e(a.substring(5))})});
      loadrunner(function(a,b,c,d){function e(a){this.id=this.path=a}e.inProgress=[],e.done=[],e.prototype=new c.Dependency,e.prototype.start=function(){var a=this,b;(b=e.done[this.id])?this.complete(b.result):(b=e.inProgress[this.id])?b.then(function(){a.complete(b.result)}):(e.inProgress[this.id]=this,this.load())},e.prototype.load=function(){var b=this;a("lib/lazyload",function(a){function c(){e.done[b.id]=b,delete e.inProgress[b.id],b.complete()}$("link[href='"+b.path+"']").length>0?c():a.css(b.path,c)})},a.matchers.add(/^css!/,function(b){var c;return b=b.replace(/^css!/,""),c=/^(https?:)?\/\//.test(b),new e(b.replace(/^\//,(!c&&a.cssPath||"").replace(/\/$/,"")+"/"))})});
      loadrunner(function(a,b,c,d){function e(a,b){for(var c=0,d;d=a[c];c++)if(b==d)return c;return-1}function f(a){var b;a.charAt(0)==">"&&(a=a.substring(1));if(b=g.inProgress[a])b.complete(),delete g.inProgress[a];g.done.push(a)}var g=function(a){this.id=a};g.inProgress=[],g.done=[],g.prototype=new c.Dependency,g.prototype.start=function(){var a,b=this;e(g.done,this.id)!=-1?this.complete():(a=g.inProgress[this.id])?a.then(function(){b.complete()}):g.inProgress[this.id]=this},a.matchers.add(/^>/,function(a){return new g(a.substring(1))}),window.signal=f});
  });</script><script>WATCH.end('loadrunner');</script>
  
      <script type="text/javascript">WATCH('javascript_logged_out', function() {
        
      function miniScribe(eName,more,cat){
      var log=[],cat=cat||'client_event',more=more||{};more.event_name=eName;for(var k in more){log.push('"'+k+'":"'+more[k]+'"');};
      (new Image()).src='//scribe.twitter.com/scribe?category='+encodeURIComponent(cat)+'&log='+encodeURIComponent('{'+log.join(',')+'}')+'&ts='+(+new Date);
      }      
        (function(){function a(a,b){var c=a.tagName?a:document.getElementById(a);return b?c.getElementsByTagName(b):c}function b(a,b,c){for(var d=a.length-1;d>=0;d--){var e=a[d].className,f=e&&e.match(b);f&&c.call(a[d],f[1])}}function c(a,b){return a.className=a.className.replace(" "+b,"")}function d(a,b){return a.className=c(a,b)+" "+b}function l(){var a=!!navigator.cookieEnabled;if(typeof navigator.cookieEnabled=="undefined"||navigator.appName=="Microsoft Internet Explorer")document.cookie="cookies_enabled",a=document.cookie.indexOf("cookies_enabled")!=-1;return a}function m(a){var b,c,d,e=document.cookie.split(";");for(b=0;b<e.length;b++){c=e[b].substr(0,e[b].indexOf("=")),d=e[b].substr(e[b].indexOf("=")+1),c=c.replace(/^\s+|\s+$/g,"");if(c==a)return unescape(d)}return null}var e=document.body,f=document.getElementById("doc"),g;location.href.match(/#!\/./)?(g=location.href.match(/#!?\/(login|download)(\/|$)/))&&d(f,"route-"+g[1]):(c(e,"user-style-twttr loading-body"),d(e,"front-page"),document.body.className.match(/front-image-nascar/)?miniScribe("web:front:::impression",{context:"olympics"}):miniScribe("web:front:::impression",{context:"front"}),window._scribedFrontImpression=!0);var i=a(f,"div"),j="hasome";b(i,/holding/,function(){var b=this,e=a(b,"input")[0],f=a(b,"span")[0];e&&f&&(f.onclick=function(){e.focus()},e.onblur=function(){e.value.length||c(b,j)},e.onkeydown=function(a){setTimeout(function(){a&&a.keyCode===8||e.value.length?d(b,j):c(b,j)},0)})}),window.setInterval(function(){b(i,/holding/,function(){var b=a(this,"input")[0];b&&b.value.length&&d(this,j)})},1111);var k={signin:"web:front:login_callout:form:login_click",signup:"web:front:signup_callout:form:signup_click",search:"web:front:main:search_field:search",language:"web:front:footer:language_selector:select"};b(i,/js-front-(signin|signup|search|language)/,function(b){var c=a(this,"form"),d=k[b];c&&c[0]&&(c[0].onsubmit=function(){a(f).className.match("route-front")||miniScribe(d)})}),l()||(document.getElementById("front-no-cookies-warn").style.display="block");var n=!!document.getElementById("remember_default_checked"),o=m("remember_checked"),p=o=="1"||o==null&&n,q,r=document.getElementsByName("remember_me");for(q=0;q<r.length;q++)r[q].checked=p})();
      });</script>
      <script type="text/javascript">WATCH.end('javascript_logged_out');</script>
  
  
  <script>WATCH('boot', function() {
   
    using.autoLoad = false;
  
  
    provide("boot/init",function(a){function c(a){for(var b in a)a.hasOwnProperty(b)&&(twttr[b]=a[b])}function d(a){twttr.bootTimings&&twttr.bootTimings.add("bootstrap_data process start"),c(a.twttr),signal(">payload"),a.boomr&&using(a.boomr.js).load().then(function(){delete BOOMR.plugins.RT,BOOMR.init({allow_ssl:!0,autorun:!1,user_ip:twttr.remoteIP,BW:{base_url:a.boomr.base_url}}),using(">setupComplete","util").as(function(b){setTimeout(BOOMR.page_ready,1e4),BOOMR.subscribe("before_beacon",function(c){if(!c.bw)return;var d=parseInt(c.bw/1024,10),e=parseInt(c.bw_err*100/c.bw,10),f=parseInt(c.lat_err*100/c.lat,10);scribble("measurement",{load_time_ms:c.t_done,bandwidth_kbytes:d,bandwidth_error_percent:e,latency_ms:c.lat,latency_error_percent:f,product:"webclient",base_url:a.boomr.base_url},"boomerang"),b.util.params().boomr&&twttr.showMessage("Bandwidth: "+b.util.addCommas(d)+" KB/s &plusmn; "+e+"%<br />Latency: "+c.lat+" ms &plusmn; "+c.lat_err,!0)})})}),a.countryCode&&(twttr.countryCode=a.countryCode);if(a.countries){twttr.countries=a.countries;if(twttr.countryCode)for(var b=0,d=twttr.countries.length;b<d;b++)twttr.countries[b].code==twttr.countryCode&&(twttr.countries[b].selected=!0)}a.pageLocaleJS?(twttr.bootTimings&&twttr.bootTimings.add("i18n fetch start"),using(a.pageLocaleJS).load().then(function(){twttr.bootTimings&&twttr.bootTimings.add("i18n fetch finish"),signal(">languageData")})):signal(">languageData"),using(">defaultViews",twttr.bundleMore,function(){a.showWelcomeBanner&&(new twttr.views.WelcomeToPhoenixBanner).render($("#banners"),"append"),a.flashNotice&&twttr.showMessage(a.flashNotice,!0)}),using(">decider",function(){twttr.decider._updateFeatures(a.deciderFeatures,!0),signal(">deciderFeaturesFromBootstrap")}),using(">ab_decider",function(){twttr.abdecider._updateExperiments(a.abBuckets,!0)}),using(">api_ready",function(){twttr.API.setConfig({postAuthenticityToken:a.postAuthenticityToken}),$("input.authenticity_token").val(a.postAuthenticityToken),twttr.decider.isAvailable("add_authenticity_token_via_js")&&$("input[name=authenticity_token]").val(a.postAuthenticityToken);var b=a.requestCacheSeedData;for(var c=0,d=b.length;c<d;++c){var e=b[c];twttr.API._requestCache.inject(e.api_request_name,e.options,e.json,1)}signal(">request_cache_seeded"),a.homeTimelineFetchSize&&(twttr.API.homeTimelineFetchSize=a.homeTimelineFetchSize)}),twttr.bootTimings&&twttr.bootTimings.add("bootstrap_data process finish")}function e(){twttr.loggedIn?(twttr.bootTimings&&twttr.bootTimings.add("initCurrentUser start"),using("boot/bootstrap_data",">request_cache_seeded",function(a){twttr.API.User.current({error:function(){window.location.reload(!0)},success:function(b){twttr.currentUser=b;for(var c in a.userProperties)twttr.currentUser.sync(c,a.userProperties[c]||!1);twttr.API.User.bind("update",function(a,b){if(twttr.currentUser.id==b.id){var c=["name","url","location","description"];for(var d=0;d<c.length;++d)twttr.currentUser.sync(c[d],b[c[d]])}}),twttr.bootTimings&&twttr.bootTimings.add("initCurrentUser finish"),signal(">allCurrentUserDataLoaded")}})})):signal(">allCurrentUserDataLoaded")}function f(a){var b=new Date;using(a).load().then(function(){var a=new Date;using("boot/bootstrap_data",function(){twttr.Profiler.logPreviousEvent("twttr.bundles fetched",b,a)})})}function g(a){function c(){b||setTimeout(function(){twttr.keynoteTTFTPing(),b=!0,a()},0)}function d(){setTimeout(c,0)}function f(){e.onresize=null,d()}var b=!1,e=document.getElementById("stream-items-id");if(!e){a();return}if(e.clientHeight>0){d();return}e.onresize=f}function i(a){for(var b in a)return!1;return!0}function j(a){function d(){clearTimeout(c),$(b).remove(),twttr.app.recalculatePadding()}function e(){b.style.display="block",setTimeout(function(){b.style.height="46px"})}if(!a)return;var b=document.getElementById("slow-load-banner");if(!b)return;var c;c=setTimeout(e,a),twttr.bundleCore&&using(twttr.bundleCore,d)}var b={add:function(a,b){b||(b=new Date),twttr.bootTimings.data.push({name:a,timestamp:b})},data:[],done:function(){twttr.bootTimings.add=twttr.bootTimings.done=$.noop,$.each(loadrunner.Script.times,function(a,b){$.each(b,function(b,c){twttr.bootTimings.data.push({name:["bundle",a,b].join(" "),timestamp:c})})}),twttr.Profiler.logDataSet("Boot",twttr.appStartTime,twttr.bootTimings.data),twttr.bootTimings=null}};a({init:function(a){if(a.renderedOnServer){var k=document.getElementsByTagName("html")[0],l=k.className.match(/highlight-global-nav-([a-z]+)/);if(a.twttr.loggedIn&&l){var m="global-nav-"+l[1];document.getElementById(m).className+=" active"}else if(k.className.match(/remove-prerendered-content/)){document.getElementById("page-outer").className=document.getElementById("page-outer").className.replace("flush-to-top","");var n=document.getElementById("page-container");n.className=n.className.replace("home-container",""),n.innerHTML="",signal(">wokeUp"),a.renderedOnServer=!1}k.className=k.className.replace("use-prerendered-content","").replace("remove-prerendered-content",""),k.getAttribute("data-nav-highlight-class-name")&&(k.className=k.className.replace(k.getAttribute("data-nav-highlight-class-name"),""),k.removeAttribute("data-nav-highlight-class-name"))}if(a.disablePhoenix){j(a.loadTimeoutInterval);return}c(a.twttr),twttr.appStartTime=document.startTime,twttr.geo=twttr.geo||{},twttr.session=twttr.session||{},twttr.session.impressionId=twttr.appStartTime+Math.random(),twttr.isLocalhost=location.hostname.match(/localhost\.twitter\.com/);if(twttr.allScribeEvents)try{twttr.allScribeEvents=JSON.parse(localStorage.twttrAllScribeEvents)||[]}catch(o){twttr.allScribeEvents=[]}twttr.bootTimings=a.profiling?b:null;for(var p=0;p<a.loadrunnerAssets.length;p++)using.bundles.push(a.loadrunnerAssets[p]);a.loadrunnerAssets.length==1&&i(a.loadrunnerAssets[0])&&(using.autoLoad=!0),j(a.loadTimeoutInterval),twttr.proto=window.location.protocol.replace(":",""),twttr.isSSL=function(){return twttr.proto==="https"},twttr.createIframe=function(a,b){var c=document.createElement("div");c.innerHTML='<iframe tabindex="-1" role="presentation" style="position:absolute;top:-9999px;" src="'+a+'"></iframe>';var d=c.firstChild,e=function(){b.apply(d,arguments)};return d.addEventListener?d.addEventListener("load",e,!1):d.attachEvent("onload",e),document.body.insertBefore(d,document.body.firstChild),d},a.inline_bootstrap_data||provide("boot/bootstrap_data",function(a){var b=[];b.push("json!/account/bootstrap_data"+window.location.search+(window.location.search?"&":"?")+"r="+Math.random()),typeof JSON=="undefined"&&b.push(twttr.bundleCore),twttr.bootTimings&&twttr.bootTimings.add("bootstrap_data fetch start"),using(b,function(b){twttr.bootTimings&&twttr.bootTimings.add("bootstrap_data fetch finish");var c=JSON.parse(b);a(c)})}),f(a.assets),using(twttr.bundleCore,function(){twttr.anywhere.remote={},using("bluejs/api",function(a){twttr.API=a,twttr.API.setConfig({cacheObjects:!0,includeEntities:!0}),twttr.extendAPI(),signal(">api_ready"),using(">request_cache_seeded",function(){e()})})}),using(a.setupDependencies,function(){twttr.bootTimings&&twttr.bootTimings.add("setup start"),jQuery.ready(),jQuery.fx.interval=50,twttr.setup(a.renderedOnServer),twttr.bootTimings&&twttr.bootTimings.add("setup finish"),signal(">setupComplete");var b=function(){using(twttr.bundleMore).load()};$.browser.msie&&parseInt($.browser.version,10)<=8?g(b):b()}),using(twttr.bundleMore,function(){signal(">allCodeLoaded")}),using("boot/bootstrap_data",d),twttr.createIframe(a.pReceiverURL,function(){var a=this;using(twttr.bundleCore,function(){twttr.anywhere.remote.server=a,twttr.anywhere.api.util.RemoteRequest.flush()})})}})});
    
    
  
  
  });</script><script>WATCH.end('boot');</script>
  
  
  
  
  
  
    <!--[if lte IE 6]>
    <script>using('bundle/ie6').load();</script>
  <![endif]-->
 
</body></html>
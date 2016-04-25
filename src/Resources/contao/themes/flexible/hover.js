/* Contao Open Source CMS, (c) 2005-2016 Leo Feyer, LGPL license */
var Theme={isWebkit:Browser.chrome||Browser.safari||navigator.userAgent.match(/(?:webkit|khtml)/i),focusInput:function(e){if(""!=e){var t=$$("#"+e+' input[class^="tl_text"],#'+e+" textarea");t&&t.length>0&&t[0].focus()}},hoverRow:function(e,t){for(var n=$(e).getChildren(),i=0;i<n.length;i++)"td"==n[i].nodeName.toLowerCase()&&n[i].setStyle("background-color",t?"#ebfdd7":"");console.info('The Theme.hoverRow() function has been deprecated in Contao 4 and will be removed in Contao 5. Assign the CSS class "hover-row" instead.')},hoverDiv:function(e,t){t||e.removeAttribute("data-visited"),$(e).setStyle("background-color",t?"#ebfdd7":""),console.info('The Theme.hoverDiv() function has been deprecated in Contao 4 and will be removed in Contao 5. Assign the CSS class "hover-div" instead.')},stopClickPropagation:function(){$$(".picker_selector").each(function(e){e.getElements("a").each(function(e){e.addEvent("click",function(e){e.stopPropagation()})})}),$$(".picker_selector,.click2edit").each(function(e){e.getElements('input[type="checkbox"]').each(function(e){e.addEvent("click",function(e){e.stopPropagation()})})})},setupCtrlClick:function(){$$(".click2edit").each(function(e){e.getElements("a").each(function(e){e.addEvent("click",function(e){e.stopPropagation()})}),Browser.Features.Touch?e.addEvent("click",function(){e.getAttribute("data-visited")?(e.getElements("a").each(function(e){e.hasClass("edit")&&(document.location.href=e.href)}),e.removeAttribute("data-visited")):e.setAttribute("data-visited","1")}):e.addEvent("click",function(t){var n=Browser.Platform.mac?t.event.metaKey:t.event.ctrlKey;n&&t.event.shiftKey?e.getElements("a").each(function(e){e.hasClass("editheader")&&(document.location.href=e.href)}):n&&e.getElements("a").each(function(e){e.hasClass("edit")&&(document.location.href=e.href)})})})},setupTextareaResizing:function(){$$(".tl_textarea").each(function(e){if(!(Browser.ie6||Browser.ie7||Browser.ie8||e.hasClass("noresize")||e.retrieve("autogrow"))){var t=new Element("div",{html:"X",styles:{position:"absolute",top:0,left:"-999em","overflow-x":"hidden"}}).setStyles(e.getStyles("font-size","font-family","width","line-height")).inject(document.body);"border-box"!=e.getStyle("-moz-box-sizing")&&"border-box"!=e.getStyle("-webkit-box-sizing")&&"border-box"!=e.getStyle("box-sizing")||t.setStyles({padding:e.getStyle("padding"),border:e.getStyle("border-left")});var n=t.clientHeight;e.addEvent("input",function(){t.set("html",this.get("value").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\n|\r\n/g,"<br>X"));var e=Math.max(n,t.getSize().y)+2;this.clientHeight!=e&&this.tween("height",e)}).set("tween",{duration:100}).setStyle("height",n+"px"),e.fireEvent("input"),e.store("autogrow",!0)}})},setupMenuToggle:function(){var e=$("burger");"none"!=e.getParent("li").getStyle("display")&&($("tl_navigation").inject($("header"),"after"),$("left").destroy(),e.addEvent("click",function(){document.body.toggleClass("show-navigation")}))}};window.addEvent("domready",function(){Theme.stopClickPropagation(),Theme.setupCtrlClick(),Theme.setupTextareaResizing(),Theme.setupMenuToggle()}),window.addEvent("ajax_change",function(){Theme.stopClickPropagation(),Theme.setupCtrlClick(),Theme.setupTextareaResizing()});
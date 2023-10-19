module.exports=function(e){function t(r){if(n[r])return n[r].exports;var i=n[r]={exports:{},id:r,loaded:!1};return e[r].call(i.exports,i,i.exports,t),i.loaded=!0,i.exports}var n={};return t.m=e,t.c=n,t.p="",t(0)}([function(e,t,n){"use strict";function r(e){return e&&e.__esModule?e:{default:e}}function i(e){var t=p.getDataByKey("novi-plugin-rd-twitterfeed");return e.ui.editor[0].title=t.editor.title,e.ui.editor[0].tooltip=t.editor.tooltip,e.ui.editor[0].header[1]=f.createElement("span",null,t.editor.header),e}var o=n(1),a=r(o),u=n(4),l=r(u),s=n(5),c=function(e){if(e&&e.__esModule)return e;var t={};if(null!=e)for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&(t[n]=e[n]);return t.default=e,t}(s),f=novi.react.React,p=novi.language,d={name:"novi-plugin-rd-twitterfeed",title:"Novi RD Twitter Feed",description:"Novi RD Twitter Feed description",version:"1.0.2",dependencies:{plugin:"1.0.0",novi:"0.8.6"},defaults:{querySelector:".twitter"},ui:{editor:[a.default],settings:f.createElement(l.default,null)},excerpt:c.validTwitterElement,onLanguageChange:i};novi.plugins.register(d)},function(e,t,n){"use strict";function r(e){return e&&e.__esModule?e:{default:e}}function i(e,t){var n=t[0];n.initUserNameValue!==n.userName&&(novi.element.setAttribute(n.element,"data-twitter-username",n.userName),novi.page.forceUpdate())}Object.defineProperty(t,"__esModule",{value:!0});var o=n(2),a=r(o),u=n(3),l=r(u),s=novi.react.React,c=novi.ui.icons,f=novi.language.getDataByKey("novi-plugin-rd-twitterfeed"),p={trigger:s.createElement(a.default,null),tooltip:f.editor.tooltip,header:[c.ICON_TWITTER,s.createElement("span",null,f.editor.header)],body:[s.createElement(l.default,null)],closeIcon:"submit",onSubmit:i,width:360,height:94,title:f.editor.title};t.default=p},function(e,t){"use strict";function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function r(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}function i(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(t,n,r){return n&&e(t.prototype,n),r&&e(t,r),t}}(),a=novi.ui.icon,u=novi.ui.icons,l=novi.react.React,s=novi.react.Component,c=function(e){function t(){return n(this,t),r(this,(t.__proto__||Object.getPrototypeOf(t)).call(this))}return i(t,e),o(t,[{key:"render",value:function(){return l.createElement(a,null,u.ICON_TWITTER)}}]),t}(s);t.default=c},function(e,t){"use strict";function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function r(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}function i(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(t,n,r){return n&&e(t.prototype,n),r&&e(t,r),t}}(),a=novi.ui.input,u=novi.react.React,l=novi.react.Component,s=novi.language,c=function(e){function t(e){n(this,t);var i=r(this,(t.__proto__||Object.getPrototypeOf(t)).call(this,e)),o=novi.element.getAttribute(e.element,"data-twitter-username");return i.state={userName:o,initUserNameValue:o,element:e.element},i._handleChange=i._handleChange.bind(i),i.messages=s.getDataByKey("novi-plugin-rd-twitterfeed"),i}return i(t,e),o(t,[{key:"render",value:function(){return u.createElement("div",{className:"twitter-plugin-wrap",style:{padding:"0 12px",display:"flex",flexDirection:"column",justifyContent:"center",height:"100%",color:"#6E778A"}},u.createElement("p",{className:"novi-label",style:{marginTop:"0"}},this.messages.editor.body.userName),u.createElement(a,{onChange:this._handleChange,value:this.state.userName}))}},{key:"_handleChange",value:function(e){var t=e.target.value;this.setState({userName:t})}}]),t}(l);t.default=c},function(e,t){"use strict";function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function r(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}function i(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}Object.defineProperty(t,"__esModule",{value:!0});var o=function(){function e(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(t,n,r){return n&&e(t.prototype,n),r&&e(t,r),t}}(),a=novi.react.React,u=novi.react.Component,l=novi.ui.input,s=novi.ui.button,c=novi.language,f=function(e){function t(e){n(this,t);var i=r(this,(t.__proto__||Object.getPrototypeOf(t)).call(this));return i.state={settings:e.settings},i.saveSettings=i.saveSettings.bind(i),i.onChange=i.onChange.bind(i),i.messages=c.getDataByKey("novi-plugin-rd-twitterfeed"),i}return i(t,e),o(t,[{key:"componentWillReceiveProps",value:function(e){this.setState({settings:e.settings})}},{key:"render",value:function(){return a.createElement("div",null,a.createElement("span",{style:{letterSpacing:"0,0462em"}},"RD Twitter Feed Plugin"),a.createElement("div",{style:{fontSize:13,color:"#6E778A",marginTop:21}},this.messages.settings.inputPlaceholder),a.createElement(l,{style:{marginTop:10,width:340},value:this.state.settings.querySelector,onChange:this.onChange}),a.createElement("div",{style:{marginTop:30}},a.createElement(s,{type:"primary",messages:{textContent:this.messages.settings.submitButton},onClick:this.saveSettings})))}},{key:"onChange",value:function(e){var t=e.target.value;this.setState({settings:{querySelector:t}})}},{key:"saveSettings",value:function(){novi.plugins.settings.update("novi-plugin-rd-twitterfeed",this.state.settings)}}]),t}(u);t.default=f},function(e,t){"use strict";function n(e){return!!e&&null!==r(e)}function r(e){return novi.element.getAttribute(e,"data-twitter-username")}Object.defineProperty(t,"__esModule",{value:!0}),t.validTwitterElement=n}]);
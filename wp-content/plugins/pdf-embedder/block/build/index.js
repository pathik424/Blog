(()=>{"use strict";var e,t={563:()=>{const e=window.wp.blocks,t=window.React,o=window.wp.i18n,r=window.wp.element,l=window.wp.blockEditor,n=window.wp.components,d=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"pdfemb/pdf-embedder-viewer","version":"4.7.0","title":"PDF Embedder","category":"embed","icon":"media-document","description":"Embed PDFs straight into your content.","keywords":["pdf","pdf embed","pdfs"],"example":{},"supports":{"html":false,"align":false},"textdomain":"pdf-embedder","editorScript":"file:./index.js","editorStyle":"file:./index.css","style":"file:./style-index.css","render":"file:./render.php"}');(0,e.registerBlockType)(d,{attributes:{pdfID:{type:"number"},url:{type:"string"},width:{type:"string",default:pdfembPluginOptions.width},height:{type:"string",default:pdfembPluginOptions.height},toolbar:{type:"string",enum:["top","bottom","both","none"],default:pdfembPluginOptions.toolbar},toolbarfixed:{type:"string",enum:["off","on"],default:pdfembPluginOptions.toolbarfixed}},edit:function(e){const{attributes:d,setAttributes:i,className:a}=e,p=(0,l.useBlockProps)(),s="<p>"+(0,o.__)("Change the rendered size of the PDF.","pdf-embedder")+"</p>",b="<p>"+(0,o.__)("Enter <code>max</code> or an integer number of pixels.","pdf-embedder")+"</p>";return(0,t.createElement)("div",{...p},(0,t.createElement)(l.InspectorControls,null,(0,t.createElement)(n.PanelBody,{title:(0,o.__)("Width & Height","pdf-embedder"),initialOpen:!0},(0,t.createElement)(r.RawHTML,null,s,b),(0,t.createElement)(n.TextControl,{label:(0,o.__)("Width","pdf-embedder"),value:d.width,onChange:e=>i({width:e})}),(0,t.createElement)(n.TextControl,{label:(0,o.__)("Height","pdf-embedder"),value:d.height,onChange:e=>i({height:e})})),(0,t.createElement)(n.PanelBody,{title:(0,o.__)("Toolbar","pdf-embedder")},(0,t.createElement)(n.SelectControl,{label:(0,o.__)("Location","pdf-embedder"),value:d.toolbar,options:[{label:(0,o.__)("Top","pdf-embedder"),value:"top"},{label:(0,o.__)("Bottom","pdf-embedder"),value:"bottom"},{label:(0,o.__)("Both","pdf-embedder"),value:"both"},{label:(0,o.__)("None","pdf-embedder"),value:"none"}],onChange:e=>i({toolbar:e}),__nextHasNoMarginBottom:!0}),(0,t.createElement)(n.SelectControl,{label:(0,o.__)("Visibility","pdf-embedder"),value:d.toolbarfixed,options:[{label:(0,o.__)("Display on hover","pdf-embedder"),value:"off"},{label:(0,o.__)("Always visible","pdf-embedder"),value:"on"}],onChange:e=>i({toolbarfixed:e}),__nextHasNoMarginBottom:!0}))),(0,t.createElement)(l.MediaUploadCheck,null,(0,t.createElement)(l.MediaUpload,{onSelect:e=>function(e){return i({url:e.url,pdfID:Number(e.id)})}(e),allowedTypes:["application/pdf"],value:d.pdfID,render:({open:e})=>(0,t.createElement)(n.Button,{onClick:e},d.url?"PDF: "+d.url:(0,o.__)("PDF: Click here to open Media library to select a PDF file to embed.","pdf-embedder"))})))}})}},o={};function r(e){var l=o[e];if(void 0!==l)return l.exports;var n=o[e]={exports:{}};return t[e](n,n.exports,r),n.exports}r.m=t,e=[],r.O=(t,o,l,n)=>{if(!o){var d=1/0;for(s=0;s<e.length;s++){for(var[o,l,n]=e[s],i=!0,a=0;a<o.length;a++)(!1&n||d>=n)&&Object.keys(r.O).every((e=>r.O[e](o[a])))?o.splice(a--,1):(i=!1,n<d&&(d=n));if(i){e.splice(s--,1);var p=l();void 0!==p&&(t=p)}}return t}n=n||0;for(var s=e.length;s>0&&e[s-1][2]>n;s--)e[s]=e[s-1];e[s]=[o,l,n]},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={826:0,431:0};r.O.j=t=>0===e[t];var t=(t,o)=>{var l,n,[d,i,a]=o,p=0;if(d.some((t=>0!==e[t]))){for(l in i)r.o(i,l)&&(r.m[l]=i[l]);if(a)var s=a(r)}for(t&&t(o);p<d.length;p++)n=d[p],r.o(e,n)&&e[n]&&e[n][0](),e[n]=0;return r.O(s)},o=globalThis.webpackChunkpdfembedder_premium=globalThis.webpackChunkpdfembedder_premium||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})();var l=r.O(void 0,[431],(()=>r(563)));l=r.O(l)})();
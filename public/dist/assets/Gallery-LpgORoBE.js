import{r as e,j as a,L as c}from"./index-DbPeGsxX.js";import{i as t}from"./instance-DfdLEVSG.js";function o(){const[i,m]=e.useState([]);return e.useEffect(()=>{t.get("/gallery").then(s=>console.log(s))},[]),a.jsx(a.Fragment,{children:a.jsxs("section",{className:"photgallery",children:[a.jsxs("div",{className:"container",children:[a.jsxs("div",{className:"titlelogo","data-aos":"fade-up","data-aos-offset":300,"data-aos-easing":"ease-in-sine",children:[a.jsx("img",{className:"gallerylogo",src:"img/fidaa-black.png",alt:"image"}),a.jsx("img",{className:"animation-shap starimg",src:"img/starshp.png",alt:"img"}),a.jsx("img",{className:"camicon-gallerytitle",src:"img/camicon-gallerytitle.png",alt:"img"})]}),a.jsx("div",{className:"row",children:i.map((s,l)=>a.jsx(c,{to:"/singleproduct",className:"col-md-4 col-sm-6 col-12",children:a.jsx("div",{className:"","data-aos":"zoom-in","data-aos-duration":300,"data-aos-delay":200,children:a.jsxs("div",{className:"gallerybox",children:[a.jsx("img",{src:s.image,alt:"image"}),a.jsx("div",{className:"boxoverlay",children:a.jsx("a",{href:"#",children:s.title})})]})})},l))})]}),a.jsx("img",{src:"img/square-lines.png",className:"sqlin1",alt:"img"}),a.jsx("img",{src:"img/square-lines.png",className:"sqlin2",alt:"img"}),a.jsx("img",{src:"img/circle-dashes.png",className:"animation-shap circle-dashes",alt:"img"})]})})}export{o as default};

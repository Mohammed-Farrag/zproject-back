import{r as n,a as j,j as s,L as h}from"./index-DbPeGsxX.js";import{u as p}from"./index.esm-Cg6BTQLn.js";import{i as N}from"./instance-DfdLEVSG.js";import{S as u}from"./Spinner-DSOVHpE1.js";function E(){const{register:r,handleSubmit:m,formState:{errors:a}}=p(),[d,i]=n.useState(!1),[o,c]=n.useState(""),t=j(),g=x=>{i(!0),N.post("/login",x).then(l=>{const e=l.data[0];e.success?(localStorage.setItem("userData",JSON.stringify({id:e.data.id,name:e.data.name,email:e.data.email,userToken:e.token})),t("/store")):c(e.message),i(!1)}).catch(l=>{i(!1),c(l)})};return s.jsx(s.Fragment,{children:s.jsx(s.Fragment,{children:s.jsx("section",{className:"photsignforms",children:s.jsx("div",{className:"container",children:d?s.jsx(u,{}):s.jsxs("div",{className:"row",children:[s.jsx("div",{className:"col-md col-sm-12 col-12",children:s.jsxs("div",{className:"signimages",children:[s.jsx("img",{className:"signimg01",src:"img/signimg01.png",alt:"image"}),s.jsx("img",{className:"signimg02",src:"img/signimg02.png",alt:"image"}),s.jsx("img",{className:"signimg03",src:"img/signimg03.png",alt:"image"})]})}),s.jsx("div",{className:"col-md col-sm-12 col-12",children:s.jsxs("div",{className:"signsforms",children:[s.jsx("div",{className:"uplogo",children:s.jsx("img",{src:"img/header-logo.png",alt:"image"})}),s.jsxs("form",{onSubmit:m(g),children:[s.jsx("div",{className:"error text-danger",children:o}),s.jsxs("div",{className:"row",children:[s.jsx("div",{className:"col-12",children:s.jsx("label",{children:"Email"})}),s.jsxs("div",{className:"col-sm col-12",children:[s.jsx("input",{...r("email",{required:"Email is required"}),type:"text",placeholder:"Email"}),s.jsx("span",{className:"text-danger",children:a.email&&s.jsx("p",{children:a.email.message})})]})]}),s.jsxs("div",{className:"row",children:[s.jsx("div",{className:"col-12",children:s.jsx("label",{children:"Password"})}),s.jsxs("div",{className:"col-12",children:[s.jsx("input",{...r("password",{required:"Password is required"}),type:"text",placeholder:"Password"}),s.jsx("span",{className:"text-danger",children:a.password&&s.jsx("p",{children:a.password.message})})]}),s.jsx("div",{className:"col-12",children:s.jsx("a",{className:"forgetlink",href:"#",children:"Forget your password?"})})]}),s.jsx("div",{className:"row",children:s.jsx("div",{className:"col-12",children:s.jsx("input",{type:"submit",name:"SEND",defaultValue:"LOGIN"})})})]}),s.jsxs("div",{className:"aftform",children:[s.jsxs("p",{children:["Already have an account? ",s.jsx(h,{to:"/signup",children:"Sign Up"})]}),s.jsx("div",{className:"forline",children:s.jsx("span",{children:"OR"})}),s.jsxs("a",{className:"orgoogle",children:[s.jsx("img",{src:"img/googleicon.png",alt:"icon"})," CONTINUE WITH GOOGLE ACCOUNT"]})]})]})})]})})})})})}export{E as default};

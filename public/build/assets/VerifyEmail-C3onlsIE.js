import{T as m,q as f,o as a,I as g,w as s,a as i,u as e,Z as p,c as y,J as _,b as o,e as n,D as h,i as v,A as b}from"./app-DT5QIk0r.js";import{_ as x}from"./GuestLayout-DnS7vyK_.js";import{P as k}from"./PrimaryButton-CuZhT54l.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const w=o("div",{class:"mb-4 text-sm text-gray-600"}," Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1),V={key:0,class:"mb-4 font-medium text-sm text-green-600"},B={class:"mt-4 flex items-center justify-between"},j={__name:"VerifyEmail",props:{status:{type:String}},setup(r){const c=r,t=m({}),d=()=>{t.post(route("verification.send"))},l=f(()=>c.status==="verification-link-sent");return(u,E)=>(a(),g(x,null,{default:s(()=>[i(e(p),{title:"Email Verification"}),w,l.value?(a(),y("div",V," A new verification link has been sent to the email address you provided during registration. ")):_("",!0),o("form",{onSubmit:b(d,["prevent"])},[o("div",B,[i(k,{class:h({"opacity-25":e(t).processing}),disabled:e(t).processing},{default:s(()=>[n(" Resend Verification Email ")]),_:1},8,["class","disabled"]),i(e(v),{href:u.route("logout"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:s(()=>[n("Log Out")]),_:1},8,["href"])])],32)]),_:1}))}};export{j as default};

wp.hooks.addFilter("woocommerce_admin_report_table","wp-cst-herfe",(e=>{if("orders"!==e.endpoint)return e;const r=PRHelper.getType();let t=PRHelper.getSetting().getOption("analytics.extra_columns"),a=[...e.headers];r.each(t,((e,r)=>{a.push({label:e,key:r,required:!1})}));const s=e.rows.map(((a,s)=>{let o=e.items.data[s],l=[...a];return r.each(t,((e,r)=>{l.push({display:o[r],value:o[r]})})),l}));return e.headers=a,e.rows=s,e}));
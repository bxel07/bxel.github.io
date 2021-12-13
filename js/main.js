$(".btnedit").click(e =>{
let textvalues = displayData(e);
   let ids = $("input[name*='id']");
   let nama = $("input[name*='name']");
   let votes = $("input[name*='vote']");
   let alasans =  $("input[name*='alasan']");
   ids.val(textvalues[0]);
   nama.val(textvalues[1]);
   votes.val(textvalues[2]);
   alasans.val(textvalues[3]);
});

function displayData(e){
    let idt = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for(const value of td){
        if(value.dataset.idt == e.target.dataset.idt){
        textvalues[idt++] = value.textContent;
    } 
}
return textvalues;
}
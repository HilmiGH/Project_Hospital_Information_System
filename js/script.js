const poliklinik_btn = document.getElementById('poliklinik_btn');
const laboratorium_btn = document.getElementById('laboratorium_btn');
const fisioterapi_btn = document.getElementById('fisioterapi_btn');

const janji_poliklinik = document.getElementById('janji_poliklinik');
const janji_laboratorium = document.getElementById('janji_laboratorium');
const janji_fisioterapi = document.getElementById('janji_fisioterapi');


function poli_show() {
    janji_poliklinik.style.display='block'
    janji_laboratorium.style.display='none'
    janji_fisioterapi.style.display='none'
};

function lab_show() {
    janji_poliklinik.style.display='none'
    janji_laboratorium.style.display='block'
    janji_fisioterapi.style.display='none'
};

function fisio_show() {
    janji_poliklinik.style.display='none'
    janji_laboratorium.style.display='none'
    janji_fisioterapi.style.display='block'
};

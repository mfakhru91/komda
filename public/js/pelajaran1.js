    var disable2 = document.getElementById("itemMateri2");
    var disable3 = document.getElementById("itemMateri3");
    var disable4 = document.getElementById("itemMateri4");
    var disable5 = document.getElementById("itemMateri5");
    var disable6 = document.getElementById("itemMateri6");
    var disable7 = document.getElementById("itemMateri7");
    var disable8 = document.getElementById("itemMateri8");
    var disable9 = document.getElementById("itemMateri9");
    var disable10 = document.getElementById("itemMateri10");
    var angka = "{{ Auth::user()->design }}";
    function disableitem(){
        if( angka < 1){
            disable2.disabled = true;
            disable3.disabled = true;
            disable4.disabled = true;
            disable5.disabled = true;
            disable6.disabled = true;
            disable7.disabled = true;
            disable8.disabled = true;
            disable9.disabled = true;
            disable10.disabled = true;
        }if(angka == 20 || angka <= 20){
            disable3.disabled = true;
            disable4.disabled = true;
            disable5.disabled = true;
            disable6.disabled = true;
            disable7.disabled = true;
            disable8.disabled = true;
            disable9.disabled = true;
            disable10.disabled = true;
        }if(angka == 30 || angka <= 30){
            disable4.disabled = true;
            disable5.disabled = true;
            disable6.disabled = true;
            disable7.disabled = true;
            disable8.disabled = true;
            disable9.disabled = true;
            disable10.disabled = true;
        }if(angka == 40 || angka <= 40){
            disable4.disabled = true;
            disable5.disabled = true;
            disable6.disabled = true;
            disable7.disabled = true;
            disable8.disabled = true;
            disable9.disabled = true;
            disable10.disabled = true;
        }
    }
    disableitem();
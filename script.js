class Gempa{
    constructor(lokasi, skala){
        this.lokasi = lokasi;
        this.skala = skala;
    }
    dampak(){
        let ket;
        if (this.skala >=0 && this.skala <=2) ket = "Tidak Terasa";
        else if (this.skala >2 && this.skala <=4) ket = "Bangunan Retak-retak";
        else if (this.skala >4 && this.skala <=6) ket = "Bangunan Roboh";
        else if (this.skala >6) ket = "Bangunan Roboh dan Berpotensi Tsunami"        
        else document.write("Anda salah input");
        
        document.write(`<tr>
                            <td>${this.lokasi}</td>
                            <td align='right'>${this.skala} SR</td>
                            <td>${ket}</td>
                        </tr>`)
    }
}   

//Ciptakan Objek
let l1 = new Gempa('Palembang', 3);
let l2 = new Gempa('Tanggerang', 4);
let l3 = new Gempa('Jambi', 5);
let l4 = new Gempa('Bengkulu', 5.4);
let l5 = new Gempa('Muko-Muko', 5.9);
let l6 = new Gempa('Bogor', 6.3);
let l7 = new Gempa('Padang', 6.3);
let l8 = new Gempa('Aceh', 6.5);
let l9 = new Gempa('Medan', 2);
let l10 = new Gempa('Bangka Belitung', 1.5);

//Mencetak
l1.dampak();
l2.dampak();
l3.dampak();
l4.dampak();
l5.dampak();
l6.dampak();
l7.dampak();
l8.dampak();
l9.dampak();
l10.dampak();

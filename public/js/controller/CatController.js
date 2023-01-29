import AdatFeldolgozModel from "../model/AdatFeldolgozModel.js";
import CatsView from "../view/CatsView.js";

class CatController {
    constructor() {
        //console.log("CatController Hali!");
        //token beállítása
        const token = $(`meta[name="csrf-token"]`).attr("content");
        //model példányosítása
        const adatFeldolgozModel = new AdatFeldolgozModel;
        //végpont változó létrehozása értékkel
        this.vegpont = "/cats";
        adatFeldolgozModel.adatBe(this.vegpont, this.macskaAdatok);
    }
    macskaAdatok(tomb) {
        const szuloelem = $("article")
        new CatsView(tomb, szuloelem);
    }
}

export default CatController
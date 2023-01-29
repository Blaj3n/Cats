import CatView from "./CatView.js";

class CatsView {
    constructor(tomb, szuloelem) {
        console.log("CatsView Hali!");
        szuloelem.html(`
        <div id="macskak">
        </div>`)
        this.divElem = szuloelem.children("div:last-child");
        tomb.forEach(adat => {
            const adatom = new CatView(adat, this.divElem);
        });
    }
}

export default CatsView
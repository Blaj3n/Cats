class CatView {
    #elem;
    constructor(elem, szuloelem) {
        console.log("CatView Hali!");
        this.#elem = elem;
        szuloelem.append(`
            <div class="macska">
                <h2>ID: ${elem.id}</h2>
                <h2>Típus: ${elem.tipus}</h2>
                <h2>Név: ${elem.nev}</h2>
                <h2>Súly: ${elem.suly}</h2>
            </div>
        `)
    }

}

export default CatView;
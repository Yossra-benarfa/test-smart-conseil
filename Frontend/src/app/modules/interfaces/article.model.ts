export class Article {
    id?: string;
    title?: string;
    image?: string;
    headerImage?: string;
    introduction?: string;
    description?: string;
    lastMod?: string;
    language?: string;
    keyWords?: string;
    state?: string;
    numVisit?: string;
    itTheme?: string;
    idUser?: string;
    idHost?: string;



    constructor() {
        this.id = '';
        this.title = '';
        this.image = '';
        this.headerImage = '';
        this.introduction = '';
        this.description = '';
        this.lastMod = '';
        this.language = '';
        this.keyWords = '';
        this.state = '';
        this.numVisit = '';
        this.itTheme = '';
        this.idUser = '';
        this.idHost = '';
    }
}
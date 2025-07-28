class Chat {
    race;
    typePoil;
    couleurPoils;
    couleurYeux;
    genre;

    constructor(race,typePoil , couleurPoils, couleurYeux, genre){
        this.race = race;
        this.typePoil = typePoil;
        this.couleurPoils = couleurPoils;
        this.couleurYeux = couleurYeux;
        this.genre = genre;
    }
    
    test(){
        console.log("je fais un test")
    }
}

let chat = new Chat('Persan', "Long", "blanc", "orange", "femelle");

chat.test();
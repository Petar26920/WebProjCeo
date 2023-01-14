function citati(){
    quotes = new Array(6);
    authors = new Array(6);
    quotes[0] = "Toliko je bilo stvari u zivoru kojih smo se bojali. A nije trebalo.";
    authors[0] = "Ivo Andric";
    quotes[1] = "Prijateljstvo se ne bira, ono biva,ko zna zbog cega, kao ljubav.";
    authors[1] = "Nesa Selimovic";
    quotes[2] = "Zdrav covek ima hiljadu zelja, a bolestan samo jednu - da ozdravi.";
    authors[2] = "Narodna izreka";
    quotes[3] = "Nemojte da hendikepirate svoju decu time sto cete im zivot uciniti suvise lakim";
    authors[3] = "Dusko Radovic";
    quotes[4] = "Cast se ne moze oduzeti, ona se moze samo izgubiti";
    authors[4] = "Cehov";
    quotes[5] = "Nema sunca bez svetlosti, ni coveka bez ljubavi";
    authors[5] = "Gete";
    index = Math.floor(Math.random()*quotes.length);
    document.getElementById("citat").innerHTML = quotes[index];
    document.getElementById("author").innerHTML = authors[index];
}
function Vreme()
{
    time = new Date();
    cas = time.getHours();
    minut = time.getMinutes();
    sekund = time.getSeconds();

    temp = ""+(cas>12?cas-12:cas);
    temp += (minut<10?":0":":")+minut;
    temp += (sekund<10?":0":":")+sekund;
    temp += (cas>=12?"P.M":"A.M");
    document.vremeForma.cifre.value = temp;
    setTimeout("Vreme()",1000);
}
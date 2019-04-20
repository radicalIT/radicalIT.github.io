function refreshDate()
{
    const dateDiv = document.getElementById("clock");
    var d = new Date();
    dateDiv.innerHTML = d.getHours() + ":" + ( (d.getMinutes()<10) ? "0" + d.getMinutes() : d.getMinutes() );
}
refreshDate();
setInterval( refreshDate, 10000 );
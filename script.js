function load(page)
{
    window.location.href = page;
}
function refreshDate()
{
    const clockDiv = document.getElementById("clock");
    var d = new Date();
    clockDiv.innerHTML = d.getHours() + ":" + ( (d.getMinutes()<10) ? "0" + d.getMinutes() : d.getMinutes() );
}
refreshDate();
setInterval( refreshDate, 10000 );
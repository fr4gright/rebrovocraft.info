var names = document.getElementsByClassName("rowName");
var days = document.getElementsByClassName("rowDay");
var weeks = document.getElementsByClassName("rowWeek");
var months = document.getElementsByClassName("rowMonth");
var totals = document.getElementsByClassName("rowTotal");
var buttons = document.getElementsByClassName("sortBtn");

function sortBy(criteria)
{
    switch(criteria)
    {
        case 'day': heavyLoop(0);
        break;
        case 'week': heavyLoop(1);
        break;
        case 'month': heavyLoop(2);
        break;
        case 'total': heavyLoop(3);
        break;
    }
}

function heavyLoop(tabToFill)
{
    for(var i = 0; i<10; i++)
    {
        names[i].innerHTML = voteTables[tabToFill][i][0];
        days[i].innerHTML = voteTables[tabToFill][i][1];
        weeks[i].innerHTML = voteTables[tabToFill][i][2];
        months[i].innerHTML = voteTables[tabToFill][i][3];
        totals[i].innerHTML = voteTables[tabToFill][i][4];
    }

    setArrow(tabToFill);
}

function setArrow(btnId)
{
    for(var b = 0; b<4; b++)
    {
        var buff = buttons[b].innerHTML;
        buff = buff.substring(0, buff.length - 1);

        if(b != btnId)
            buttons[b].innerHTML = buff + '▲';
        else
            buttons[b].innerHTML = buff + '▼';
    }
}

sortBy('day');
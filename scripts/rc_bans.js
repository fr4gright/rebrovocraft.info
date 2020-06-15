var bName = document.getElementsByClassName("rowName")[0];
var bDate = document.getElementsByClassName("rowDate")[0];
var bBby = document.getElementsByClassName("rowBannedBy")[0];
var bReason = document.getElementsByClassName("rowReason")[0];
var bExpires = document.getElementsByClassName("rowExpires")[0];
var table = document.getElementsByClassName("banTable")[0];
var row = document.getElementsByClassName("banRow")[0];

function fillTable()
{
    //var fullList = generateList();
    
    for(var i = 0; i < Object.keys(bans['users']).length; i++)
    {
        var elems = [
            bName.cloneNode(true),
            bDate.cloneNode(true), 
            bBby.cloneNode(true), 
            bReason.cloneNode(true), 
            bExpires.cloneNode(true)
        ];
        
        elems = setHtml(elems, i, bans['users']);
        
        var newRow = row.cloneNode(true);
        newRow.innerHTML = '';

        for (var j = 0; j < elems.length; j++)
        {
            newRow.appendChild(elems[j]);
        }
        
        if(i % 2 === 0)
            newRow.style.backgroundColor = "gray";
        else
            newRow.style.backgroundColor = "black";
        
        table.appendChild(newRow);
        row.innerHTML = '';
    }
}

function setHtml(elems, index, list)
{
        if(list[index]['name'])
        elems[0].innerHTML = list[index]['name'];
        else
        elems[0].innerHTML = list[index]['ip'];
        
        elems[1].innerHTML = list[index]['created'];
        elems[2].innerHTML = list[index]['source'];
        
        if(list[index]['expires'])
        elems[3].innerHTML = list[index]['expires'];
        else
        elems[3].innerHTML = 'Never'
        
        if(list[index]['reason'])
        elems[4].innerHTML = list[index]['reason'];
        else
        elems[4].innerHTML = 'Not Specified';
        
        return elems;
}

function generateList()
{
    fullList = bans['ips'];
    for(var i = 0; i < Object.keys(bans['users']).length; i++)
    {
        fullList.push(bans['users'][i]);
    }
    
    return fullList;
}

if(!goLogin)
{
    var ph = '';
    switch(isBanned())
    {
        case 'ip':
            ph = 'Username: <span style="color:green">' + userName + '</span><br>';
            ph += 'IP: <span style="color:red">' + ip + '</span><br><br>';
            ph += 'You <span style="color:red">ARE BANNED</span> from the server';
            break;
        case 'name':
            ph = 'Username: <span style="color:red">' + userName + '</span><br>';
            ph += 'IP: <span style="color:green">' + ip + '</span><br><br>';
            ph += 'You <span style="color:red">ARE BANNED</span> from the server';
            break;
        default:
            ph = 'Username: <span style="color:green">' + userName + '</span><br>';
            ph += 'IP: <span style="color:green">' + ip + '</span><br><br>';
            ph += 'You <span style="color:green">ARE NOT BANNED</span> from the server';
            break;
    }
    document.getElementById("banStats").innerHTML = ph;
}

function isBanned()
{
    for(var i = 0; i < Object.keys(bans['users']).length; i++)
    {
        if(userName === bans['users'][i]['name'])
        return 'name';
    }
        for(var j = 0; j < Object.keys(bans['ips']).length; j++)
    {
        if(ip === bans['ips'][j]['ip'])
        return 'ip';
    }
    
    return 'no';
}

fillTable();
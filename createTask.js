var r,k = 0;
var allDays = new Array();
while( k < 31 )
{
	r = k+1;
	allDays[k] = r;
	k++;

}

var allMonths = ['Month' , 'January','February','March','April','May','June','July','August','September','October','Novenmber','December',];
function addAllMonths()
{
	var i = 0;
	var newMonth = null;
	var monthName = null;
	var fromList = null;
	while( i < allMonths.length )
	{
		newMonth = document.createElement("option");
		fromList = allMonths[i];
		monthName = document.createTextNode( fromList );
		newMonth.appendChild( monthName );
		document.getElementById("userMonth").appendChild( newMonth );
		i++;
	}

}
function addAllMonthsAgain()
{
	var a = 0;
	var newMonthAgain = null;
	var monthNameAgain = null;
	var fromListAgain = null;
	while( a < allMonths.length )
	{
		newMonthAgain = document.createElement("option");
		fromListAgain = allMonths[a];
		monthNameAgain = document.createTextNode( fromListAgain );
		newMonthAgain.appendChild( monthNameAgain );
		document.getElementById("userMonthAgain").appendChild( newMonthAgain );
		a++;
	}

}
function addAllDays() 
{
	var j = 0;
	var newDay = null;
	var dayName =  null;
	var fromListDay = null;
	while( j < allDays.length )
	{
		newDay = document.createElement("option");
		fromListDay = allDays[j];
		dayName = document.createTextNode( fromListDay );
		newDay.appendChild( dayName );
		document.getElementById("userDay").appendChild( newDay );
		j++; 
	}
}
function addAllDaysAgain() 
{
	var b = 0;
	var newDayAgain = null;
	var dayNameAgain =  null;
	var fromListDayAgain = null;
	while( b < allDays.length )
	{
		newDayAgain = document.createElement("option");
		fromListDayAgain = allDays[b];
		dayNameAgain = document.createTextNode( fromListDayAgain );
		newDayAgain.appendChild( dayNameAgain );
		document.getElementById("userDayAgain").appendChild( newDayAgain );
		b++; 
	}
}

function listPopulater()
{
	addAllMonths();
	addAllDays();
	addAllMonthsAgain();
	addAllDaysAgain();
	
}

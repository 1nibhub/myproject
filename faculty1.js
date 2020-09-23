// JavaScript Document
/*
	*	Original script by: Sunil Kalariya
		*	Description:

	*	How to Use:

	
		
	*	License: Free to copy, distribute, modify, whatever you want to.
	*	Authorised Email:-  sunrisewebsolution@gmail.com
	*
*/

// Countries
var country_arr = new Array("Shweta Patel","Tushar oza", "Preeti Gajjar", "Darshna Patel");

// States
var s_a = new Array();
s_a[0]="";
s_a[1]="AJAVA";
s_a[2]="NMA";
s_a[3]="PPUD";
s_a[4]="MCAD";

//s_a[5]="Sunil|Kalariya|Sunrise WebSolution|Gandhinagar|+91 9724340826";


//*******


function populateStates( countryElementId, stateElementId ){
	
	var selectedCountryIndex = document.getElementById( countryElementId ).selectedIndex;

	var stateElement = document.getElementById( stateElementId );
	
	stateElement.length=0;	// Fixed by Julian Woods
	stateElement.options[0] = new Option('Select Subject','');
	stateElement.selectedIndex = 0;
	
	var state_arr = s_a[selectedCountryIndex].split("|");
	
	for (var i=0; i<state_arr.length; i++) {
		stateElement.options[stateElement.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function populateCountries(countryElementId, stateElementId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var countryElement = document.getElementById(countryElementId);
	countryElement.length=0;
	countryElement.options[0] = new Option('Select Faculty','-1');
	countryElement.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		countryElement.options[countryElement.length] = new Option(country_arr[i],country_arr[i]);
	}

	// Assigned all countries. Now assign event listener for the states.

	if( stateElementId ){
		countryElement.onchange = function(){
			populateStates( countryElementId, stateElementId );
		};
	}
}
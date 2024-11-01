<?php
	/*
	 * Plugin Name: States Select w\ Associated Press Values for Gravity Forms
	 * Plugin URI: http://www.maxodev.org/
	 * Description: This plugin adds an option to have Associated Press US state abbreviation values for the states select in Gravity Forms
	 * Version: 1.0.0
	 * Author: Maxamilian Demian
	 * Author URI: http://www.maxdemian.com/
	 */

	//{{{ Gravity Forms states dropdown conversion to AP values
	add_filter("gform_address_types", "states_select_usap_gforms_gform_address_types", 10, 2);

	function states_select_usap_gforms_gform_address_types($address_types, $form_id) {
		$address_types["usap"] = array(
			"label"			=> "United States Associated Press",
			"country"		=> "USAP",
			"zip_label"		=> "Zip Code",
			"state_label"	=> "State",
			"states"		=> array(
				"Ala."			=> "Alabama",
				"Alaska"		=> "Alaska",
				"Ariz."			=> "Arizona",
				"Ark."			=> "Arkansas",
				"Calif."		=> "California",
				"Colo."			=> "Colorado",
				"Conn."			=> "Connecticut",
				"Del."			=> "Delaware",
				"D.C."			=> "District of Columbia",
				"Fla."			=> "Florida",
				"Ga."			=> "Georgia",
				"Hawaii"		=> "Hawaii",
				"Idaho"			=> "Idaho",
				"Ill."			=> "Illinois",
				"Ind."			=> "Indiana",
				"Iowa"			=> "Iowa",
				"Kan."			=> "Kansas",
				"Ky."			=> "Kentucky",
				"La."			=> "Louisiana",
				"Maine"			=> "Maine",
				"Md."			=> "Maryland",
				"Mass."			=> "Massachusetts",
				"Mich."			=> "Michigan",
				"Minn."			=> "Minnesota",
				"Miss."			=> "Mississippi",
				"Mo."			=> "Missouri",
				"Mont."			=> "Montana",
				"Neb."			=> "Nebraska",
				"Nev."			=> "Nevada",
				"N.H."			=> "New Hampshire",
				"N.J."			=> "New Jersey",
				"N.M."			=> "New Mexico",
				"N.Y."			=> "New York",
				"N.C."			=> "North Carolina",
				"N.D."			=> "North Dakota",
				"Ohio"			=> "Ohio",
				"Okla."			=> "Oklahoma",
				"Ore."			=> "Oregon",
				"Pa."			=> "Pennsylvania",
				"R.I."			=> "Rhode Island",
				"S.C."			=> "South Carolina",
				"S.D."			=> "South Dakota",
				"Tenn."			=> "Tennessee",
				"Texas"			=> "Texas",
				"Utah"			=> "Utah",
				"Vt."			=> "Vermont",
				"Va."			=> "Virginia",
				"Wash."			=> "Washington",
				"W.Va."			=> "West Virginia",
				"Wis."			=> "Wisconsin",
				"Wyo."			=> "Wyoming"
			)
		);

		return $address_types;
	}
	//}}}
?>
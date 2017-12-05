<?php

	return [

		// nav
		'nav' => [
			'dashboard' => 'Dashboard',
			'participants' => [
				'menu'=>'Participants',
				'candidates'=>'Candidates of the contest',
				'register_log' => 'Online Applicants',
				'precandidate' => 'Precandidate',
			],
			'members'=> [
				'menu' => 'Subscribers',
				'list' => 'List',
				'activities'=>'Activities',
			],
			'config' => [
				'menu' => 'Configuration',
				'countries' => 'Countries',
				'membership' => 'Memberships',
				'users' => 'Administrators',
				'config' => 'Casting'
			],
		],

		// dashboard
		'dashboard' => [
			'ranking_block' => [
				'title' => 'Ranking',
				'th_candidate' => 'Candidate',
				'th_country' => 'Country',
				'th_score' => 'Score',
				'td_points' => 'Points'
			],

			'membership_block' => [
				'title' => 'Memberships',
				'th_membership' => 'Membership',
				'th_number_user' => 'Number of Administrators',

			],

			'tickets_block' => [
				'title' => 'Tickets',
				'th_client' => 'Purchased',
				'th_ticket' => 'Availables'
			],
			'casting_resume' => [
				'title_one' => 'Casting #1',
				'title_two' => 'Casting #2',
				'th_country' => 'Country',
				'th_num_applies' => 'Num Applies',
				'th_num_preselected' => 'Preselected',
				'th_num_no_preselected' => 'Not Preselected',
				'th_num_missing' => 'Missing'
			]
		],


		// candidates
		'candidates' => [
			'index' => [
				'panel_title' => 'Candidates',
				'panel_caption' => 'List of Candidates',
				'th_names' => 'Names',
				'th_code' => 'Code',
				'th_state' => 'State',
				'th_date'=>'Date',
				'th_upgrade'=>'Upgrade',
				'th_action' => 'Action',
				'th_how_you_hear'=>'How Did You Hear About Us?',
				'th_creation_date'=>'Creation Date',
				'th_number' => 'Number',
				'td_edit' => 'Edit',
				'td_delete' =>'Delete',
				'filter' => [
					'country_label' => 'Country',
					'state_label'=>'State',
					'state_date'=>'Date'
				]
			],
			'show' => [
				'panel_title' => 'Applicants',
				'miss_disqualified' => 'The lady is disqualified',
				'miss_missing' => 'The Miss miss for rating',
				'miss_preselected' => 'The Miss is Preselected',
				'miss_no_preselected' => 'The Miss is not Preselected',
				'label_name'=>'Name',
				'label_lastname'=>'Lastname',
				'label_country'=>'Country',
				'label_state'=>'State',
				'label_birthdate'=>'Birthdate',
				'label_place_of_birth'=>'Place of birth',
				'label_email'=>'Email',
				'label_phone_number'=>'Phone number',
				'label_address' => 'Address',
				'label_city' => 'City',
				'label_state_province' => 'State / Province',
				'label_measurements' => 'Measurements',
				'label_height' => 'Height',
				'label_weight' => 'Weight',
				'label_bust_measure'=>'Bust',
				'label_waist_measure'=>'Waist',
				'label_hip_measure' => 'Hip',
				'label_hair_color' => 'Hair Color',
				'label_eye_color'=>'Eye Color',
				'label_dairy_philosophy'=>'Dairy Philosophy',
				'label_why_would_you_win' => 'Why would you win',
				'label_no_preselected' => 'No Preselect',
				'label_preselected' => 'Preselect',
				'disqualify' => 'Disqualify',
				'label_qualify_candidate' => 'Qualify as a Candidate',
				'btn_cancel' => 'Cancel',
				'label_photos' => 'Photos',
				'how_hear_about_us'=>'How Did You Hear About Us?'
			],
			'create-edit' => [
				'panel_title' => 'Candidates',
				'panel_subtitle' => 'Creation of candidates',
				'panel_edit_subtitle' => 'Edition of candidates',
				'label_name'=>'Name',
				'label_lastname'=>'Lastname',
				'label_country'=>'Country',
				'label_state'=>'State',
				'label_birthdate'=>'Birthdate',
				'label_place_of_birth'=>'Place of birth',
				'label_email'=>'Email',
				'label_phone_number'=>'Phone number',
				'label_address' => 'Address',
				'label_city' => 'City',
				'label_state_province' => 'State / Province',
				'label_measurements' => 'Measurements',
				'label_height' => 'Height',
				'label_weight' => 'Weight',
				'label_bust_measure'=>'Bust',
				'label_waist_measure'=>'Waist',
				'label_hip_measure' => 'Hip',
				'label_hair_color' => 'Hair Color',
				'label_eye_color'=>'Eye Color',
				'label_dairy_philosophy'=>'Dairy Philosophy',
				'label_why_would_you_win' => 'Why would you win',
				'label_photos' => 'Photos',
				'select_default' => '--Select--',
				'btn_back' => 'Back',
				'btn_save' => 'Save',
				'disqualify' => 'Disqualify',
				'qualify' => 'Qualify',
				'flag_success_saved' => 'Candidate Created Satisfactorily',
				'flag_error_saved' => 'Candidate could not be created, try again',
				'flag_success_updated' => 'Candidate Updated Satisfactorily',
				'flag_error_updated' => 'Candidate could not be updated, try again',
				'flag_success_deleted' => 'Candidate deleted Satisfactorily',
				'flag_error_deleted' => 'Candidate could not be deleted, try again',
				'flag_disqualited' => 'The Miss has been disqualified as a candidate',
				'flag_qualited' => 'The Miss is as a candidate',
				'how_hear_about_us'=>'How Did You Hear About Us?'
			],
		],

		'applicant' => [
			'index' => [
				'tab_title_casting_1' => 'Casting 1',
				'tab_title_casting_2' => 'Casting 2',
				'panel_title' => 'Applicants',
				'panel_caption' => 'List of Applicants',
				'th_names' => 'Names',
				'th_code' => 'Code',
				'th_state' => 'State',
				'th_date'=>'Date',
				'th_upgrade'=>'Upgrade',
				'th_action' => 'Action',
				'th_how_you_hear'=>'How Did You Hear About Us?',
				'th_creation_date'=>'Creation Date',
				'th_number' => 'Number',
				'td_show' => 'Show',
				'td_delete' =>'Delete',
				'filter' => [
					'country_label' => 'Country',
					'state_label'=>'State',
					'state_date'=>'Date'
				]
			],
			'show' => [
				'panel_title' => 'Applicants',
				'miss_disqualified' => 'The lady is disqualified',
				'miss_missing' => 'The Miss miss for rating',
				'miss_preselected' => 'The Miss is Preselected',
				'miss_no_preselected' => 'The Miss is not Preselected',
				'label_name'=>'Name',
				'label_lastname'=>'Lastname',
				'label_country'=>'Country',
				'label_state'=>'State',
				'label_birthdate'=>'Birthdate',
				'label_place_of_birth'=>'Place of birth',
				'label_email'=>'Email',
				'label_phone_number'=>'Phone number',
				'label_address' => 'Address',
				'label_city' => 'City',
				'label_state_province' => 'State / Province',
				'label_measurements' => 'Measurements',
				'label_height' => 'Height',
				'label_weight' => 'Weight',
				'label_bust_measure'=>'Bust',
				'label_waist_measure'=>'Waist',
				'label_hip_measure' => 'Hip',
				'label_hair_color' => 'Hair Color',
				'label_eye_color'=>'Eye Color',
				'label_dairy_philosophy'=>'Dairy Philosophy',
				'label_why_would_you_win' => 'Why would you win',
				'label_no_preselected' => 'No Preselect',
				'label_preselected' => 'Preselect',
				'label_precandidate' => 'Qualify as Precandidate',
				'disqualify' => 'Disqualify',
				'label_qualify_missing' => 'Qualify as Missing',
				'btn_back' => 'Back',
				'label_photos' => 'Photos',
				'how_hear_about_us'=>'How Did You Hear About Us?'
			],
			'create-edit' => [
				'flag_success_saved' => 'Applicant Created Satisfactorily',
				'flag_error_saved' => 'Applicant could not be created, try again',
				'flag_success_updated' => 'Applicant Updated Satisfactorily',
				'flag_error_updated' => 'Applicant could not be updated, try again',
				'flag_success_deleted' => 'Applicant deleted Satisfactorily',
				'flag_error_deleted' => 'Applicant could not be deleted, try again',
				'flag_qualited' => 'The Miss has been qualified as a candidate',
			]
		],
		'precandidate' => [
			'index' => [
				'panel_title' => 'Precandidate',
				'panel_caption' => 'List of Precandidates',
				'th_names' => 'Names',
				'th_code' => 'Code',
				'th_state' => 'State',
				'th_date'=>'Date',
				'th_upgrade'=>'Upgrade',
				'th_action' => 'Action',
				'th_how_you_hear'=>'How Did You Hear About Us?',
				'th_creation_date'=>'Creation Date',
				'th_number' => 'Number',
				'td_show' => 'Show',
				'filter' => [
					'country_label' => 'Country',
					'state_label'=>'State',
					'state_date'=>'Date'
				]
			],
			'show' => [
				'panel_title' => 'Precandidates',
				'miss_disqualified' => 'The lady is disqualified',
				'miss_missing' => 'The Precandidate miss for rating',
				'miss_preselected' => 'The Miss is Preselected',
				'miss_no_preselected' => 'The Miss is not Preselected',
				'label_name'=>'Name',
				'label_lastname'=>'Lastname',
				'label_country'=>'Country',
				'label_state'=>'State',
				'label_birthdate'=>'Birthdate',
				'label_place_of_birth'=>'Place of birth',
				'label_email'=>'Email',
				'label_phone_number'=>'Phone number',
				'label_address' => 'Address',
				'label_city' => 'City',
				'label_state_province' => 'State / Province',
				'label_measurements' => 'Measurements',
				'label_height' => 'Height',
				'label_weight' => 'Weight',
				'label_bust_measure'=>'Bust',
				'label_waist_measure'=>'Waist',
				'label_hip_measure' => 'Hip',
				'label_hair_color' => 'Hair Color',
				'label_eye_color'=>'Eye Color',
				'label_dairy_philosophy'=>'Dairy Philosophy',
				'label_why_would_you_win' => 'Why would you win',
				'label_no_preselected' => 'No Preselect',
				'label_preselected' => 'Preselect',
				'disqualify' => 'Disqualify',
				'label_qualify_candidate' => 'Qualify as a Candidate',
				'btn_back' => 'Back',
				'label_photos' => 'Photos',
				'missing' => 'Missing',
				'how_hear_about_us'=>'How Did You Hear About Us?',
				'flag_success_updated' => 'Precandidate Updated Satisfactorily',
			]
		],

		'client' => [
			'index' => [
				'panel_title' => 'Clients',
				'panel_caption' => 'List of Clients',
				'btn_create_client' => 'Create Client',
				'th_account_type' => 'Account',
				'th_name' => 'Name',
				'th_email' => 'Email',
				'th_address' => 'Address',
				'th_last_access' => 'Last Access',
				'th_creation_date'=>'Creation Date',
				'th_upgrade'=>'Upgrade',
				'th_action'=>'Action',
				'td_edit' => 'Edit',
				'td_delete' =>'Delete',
				'td_without_confirm' => 'Without confirmation',
			],

			'create-edit' => [
				'panel_title' => 'Clients',
				'panel_subtitle' => 'Creation of clients',
				'panel_subtitle_edit' => 'Edition of clients',
				'label_email' => 'Email',
				'label_name' => 'Name',
				'label_lastname' => 'Lastname',
				'label_country' => 'Country',
				'label_city' => 'City',
				'label_address' => 'Address',
				'label_opt_select' => 'Select',
				'label_password' => 'Password',
				'label_repeat_password' => 'Repeat Password',
				'btn_cancel' => 'Cancel',
				'btn_save' => 'Save',
				'label_membership' => 'Membership',
				'label_ticket' => 'Tickets',
				'td_price' => 'Price',
				'td_free' => 'Free',
				'td_points_per_vote' => 'Points per vote',
				'td_duration' => 'Duration',
				'td_ticket'=>'Ticket',
				'td_pay_type' => 'Pay type',
				'td_state' => 'State',
				'td_action' => 'Action',
				'td_ticket_active' => 'Active',
				'td_ticket_used' => 'Used',
				'flag_success_saved' => 'Client Created Satisfactorily',
				'flag_error_saved' => 'Client could not be created, try again',
				'flag_success_updated' => 'Client Updated Satisfactorily',
				'flag_error_updated' => 'Client could not be updated, try again',
				'flag_success_deleted' => 'Client deleted Satisfactorily',
				'flag_error_deleted' => 'Client could not be deleted, try again',
			],
		],

		'activity' => [
			'index' => [
				'panel_title' => 'Activities',
				'panel_caption' => 'List of Activities',
				'th_activity' => 'Activity',
				'th_date' => 'Date'
			],
		],

		'user' => [
			'index' => [
				'panel_title' => 'Administrators',
				'panel_caption' => 'List of Administrators',
				'th_name' => 'Name',
				'th_email' => 'Email',
				'th_address' => 'Address',
				'th_last_access' => 'Last Access',
				'th_creation_date'=>'Creation Date',
				'th_action'=>'Action',
				'th_upgrade'=>'Upgrade',
				'td_edit' => 'Edit',
				'btn_create' => 'Create Administrator',
				'td_delete' => 'Delete Administrator',
			],

			'create-edit' => [
				'panel_title' => 'Administrators',
				'panel_subtitle' => 'Creation of Administrators',
				'panel_subtitle_edit' => 'Edition of Administrators',
				'label_email' => 'Email',
				'label_name' => 'Name',
				'label_lastname' => 'Lastname',
				'label_address' => 'Address',
				'label_password' => 'Password',
				'label_repeat_password' => 'Repeat Password',
				'btn_cancel' => 'Cancel',
				'btn_save' => 'Save',
				'flag_success_saved' => 'Administrator Created Satisfactorily',
				'flag_error_saved' => 'Administrator could not be created, try again',
				'flag_success_updated' => 'Administrator Updated Satisfactorily',
				'flag_error_updated' => 'Administrator could not be updated, try again',
				'flag_success_deleted' => 'Administrator deleted Satisfactorily',
				'flag_error_deleted' => 'Administrator could not be deleted, try again',
			]
		],


		'membership' => [
			'index' => [
				'panel_title' => 'Memberships',
				'panel_caption' => 'List of Memberships',
				'th_name' => 'Name',
				'th_duration' => 'Duration',
				'th_price' => 'Price',
				'th_creation_date'=>'Creation Date',
				'th_upgrade'=>'Upgrade',
				'th_action' => 'Action',
				'td_edit' => 'Edit',
				'td_delete' => 'Delete'
			],

			'create-edit' => [
				'panel_title' => 'Memberships',
				'panel_caption_create' => 'Create of Memberships',
				'panel_caption_edit' => 'Edit of Memberships',
				'label_name' => 'Name',
				'label_description' => 'Description',
				'label_duration' => 'Duration',
				'label_select' => 'Select',
				'label_price' => 'Price',
				'label_points_per_vote' => 'Points per vote',
				'btn_cancel' => 'Cancel',
				'btn_save' => 'Save',
				'label_months' => 'Month(s)',
				'label_years' => 'Year(s)',
				'flag_success_saved' => 'Membership Created Satisfactorily',
				'flag_error_saved' => 'Membership could not be created, try again',
				'flag_success_updated' => 'Membership Updated Satisfactorily',
				'flag_error_updated' => 'Membership could not be updated, try again',
				'flag_success_deleted' => 'Membership deleted Satisfactorily',
				'flag_error_deleted' => 'Membership could not be deleted, try again',
			]
		],

		'country' => [
			'index' => [
				'panel_title' => 'Countries',
				'panel_caption' => 'List of Countries',
				'th_name' => 'Name',
				'th_code' => 'Code',
				'th_lang' => 'Language',
				'th_upgrade'=>'Upgrade',
				'th_action' => 'Action',
				'td_edit' => 'Edit',
				'td_delete' => 'Delete'
			],

			'create-edit' => [
				'panel_title' => 'Countries',
				'panel_caption_create' => 'Create of Countries',
				'panel_caption_edit' => 'Edit of Countries',
				'label_name' => 'Name',
				'label_code' => 'Code',
				'label_lang' => 'Language',
				'label_email' => 'Email Contact',
				'btn_cancel' => 'Cancel',
				'btn_save' => 'Save',
				'btn_change_flag' => 'Change Flag',
				'flag_success_saved' => 'Country Created Satisfactorily',
				'flag_error_saved' => 'Country could not be created, try again',
				'flag_success_updated' => 'Country Updated Satisfactorily',
				'flag_error_updated' => 'Country could not be updated, try again',
				'flag_success_deleted' => 'Country deleted Satisfactorily',
				'flag_error_deleted' => 'Country could not be deleted, try again',
			]
		],

		'config' => [
			'index' => [
				'panel_title' => 'Casting Setting',
				'tab_general' => 'General',
				'tab_castings' => 'Casting',
				'tab_email' => 'Email',
				'flag_message_success' => 'Config Updated Satisfactorily',
				'flag_message_error' => 'Config could not be updated, try again ',
				
			],

			'tab_general_content' => [
				'label_casting' => 'Exist Casting',
				'select_casting_yes' => 'Yes',
				'select_casting_no' => 'No',
				'btn_save' => 'Save'
			],

			'tab_casting_content' => [
				'tab_caption_title' => 'List of Castings',
				'btn_create_casting' => 'Create Casting'
			],
			'modal_create_edit_casting' => [
				'title' => 'Castings',
				'start_date' => 'Start Date',
				'end_date' => 'End Date',
				'action' => 'Action',
				'lang' => 'Language',
				'available_countries' => 'Available Contries',
				'dont_exist' => 'No Data',
				'btn_action_insert' => 'Insert',
				'option_language_key_es' => 'es',
				'option_language_label_es' => 'Español',
				'option_language_key_en' => 'en',
				'option_language_label_en' => 'English',
				'btn_save' => 'Save',
				'btn_cancel' => 'Cancel',

			],
			'tab_mail' => [
				'subject' => 'Subject',
				'body' => 'Body',
				'list_variables'=> 'Available Variables'
			]

		],




	];
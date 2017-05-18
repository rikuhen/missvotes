<?php

	return [

		// nav
		'nav' => [
			'dashboard' => 'Dashboard',
			'participants' => [
				'menu'=>'Participants',
				'candidates'=>'Candidates of the contest',
				'register_log' => 'Aplication log'
			],
			'members'=> [
				'menu' => 'Members',
				'list' => 'List',
				'activities'=>'Activities',
			],
			'config' => [
				'menu' => 'Configuration',
				'users' => 'Users',
				'membership' => 'Memberships',
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
				'th_number_user' => 'Number of Users',

			],

			'tickets_block' => [
				'title' => 'Tickets',
				'th_client' => 'Client',
				'th_ticket' => 'Ticket'
			],
		],


		// misses
		'misses' => [
			'index' => [
				'panel_title' => 'Candidates',
				'panel_caption' => 'List of Candidates',
				'th_names' => 'Names',
				'th_country' => 'Country',
				'th_state' => 'State',
				'th_creation_date'=>'Creation Date',
				'th_upgrade'=>'Upgrade',
				'th_action' => 'Action',
				'td_edit' => 'Edit',
				'td_delete' =>'Delete',
				'btn_create' => 'Create Candidate',
				'td_state_active' => 'Active',
				'td_state_inactive' => 'Inactive',
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
				'select_state_active' => 'Active',
				'select_state_inactive' => 'Inactive',
				'btn_cancel' => 'Cancel',
				'btn_save' => 'Save',
				'disqualify' => 'Disqualify',
			],
		],

		'precandidate' => [
			'index' => [
				'panel_title' => 'Precandidates',
				'panel_caption' => 'List of Precandidates',
				'th_names' => 'Names',
				'th_code' => 'Code',
				'th_country' => 'Country',
				'th_state' => 'State',
				'th_creation_date'=>'Creation Date',
				'th_upgrade'=>'Upgrade',
				'th_action' => 'Action',
				'td_show' => 'Show',
				'td_delete' =>'Delete',
				'td_state_active' => 'Active',
				'td_state_inactive' => 'Inactive',
				'td_for_evaluate' => 'For evaluate',
				'td_disqualified' => 'Disqualified',
			],
			'show' => [
				'panel_title' => 'Precandidates',
				'miss_disqualified' => 'The lady is disqualified',
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
				'label_enable_erequalification' => 'Enable Prequalification',
				'disqualify' => 'Disqualify',
				'label_qualify_candidate' => 'Qualify as a Candidate',
				'btn_cancel' => 'Cancel',
			],
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


	];

<?php
add_action( 'init', function() {
	register_post_type( 'offre-demploi', array(
	'labels' => array(
		'name' => 'offres d\'emploi',
		'singular_name' => 'offre d\'emploi',
		'menu_name' => 'offre d\'emploi',
		'all_items' => 'Tout les offre d\'emploi',
		'edit_item' => 'Modifier offre d\'emploi',
		'view_item' => 'Voir offre d\'emploi',
		'view_items' => 'Voir offre d\'emploi',
		'add_new_item' => 'Ajouter offre d\'emploi',
		'add_new' => 'Ajouter offre d\'emploi',
		'new_item' => 'Nouveau offre d\'emploi',
		'parent_item_colon' => 'offre d\'emploi parent :',
		'search_items' => 'Rechercher offre d\'emploi',
		'not_found' => 'Aucun offre d\'emploi trouvé',
		'not_found_in_trash' => 'No offre d\'emploi found in Trash',
		'archives' => 'Archives des offre d\'emploi',
		'attributes' => 'Attributs des offre d\'emploi',
		'insert_into_item' => 'Insérer dans offre d\'emploi',
		'uploaded_to_this_item' => 'Téléversé sur ce offre d\'emploi',
		'filter_items_list' => 'Filtrer la liste offre d\'emploi',
		'filter_by_date' => 'Filtrer offre d\'emploi par date',
		'items_list_navigation' => 'Navigation dans la liste offre d\'emploi',
		'items_list' => 'Liste offre d\'emploi',
		'item_published' => 'offre d\'emploi publié.',
		'item_published_privately' => 'offre d\'emploi publié en privé.',
		'item_reverted_to_draft' => 'offre d\'emploi repassé en brouillon.',
		'item_scheduled' => 'offre d\'emploi planifié.',
		'item_updated' => 'offre d\'emploi mis à jour.',
		'item_link' => 'Lien offre d\'emploi',
		'item_link_description' => 'Un lien vers un offre d\'emploi.',
	),
	'public' => true,
	'show_in_rest' => true,
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'excerpt',
		3 => 'thumbnail',
	),
	'has_archive' => 'offre-demploi',
	'rewrite' => array(
		'feeds' => false,
	),
	'delete_with_user' => false,
) );
} );


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->output->enable_profiler(true);

        //$this->load->database();
        //$query = $this->db->query('select * from compte');

		// pallet_manager
		/*
        $query1 = $this->db->query('SELECT t0.username AS username_1, t0.username_canonical AS username_canonical_2, t0.email AS email_3, t0.email_canonical AS email_canonical_4, t0.enabled AS enabled_5, t0.salt AS salt_6, t0.password AS password_7, t0.last_login AS last_login_8, t0.confirmation_token AS confirmation_token_9, t0.password_requested_at AS password_requested_at_10, t0.roles AS roles_11, t0.id AS id_12, t0.nom AS nom_13 FROM compte t0 WHERE t0.id = 1 LIMIT 1');
        $query2 = $this->db->query('SELECT a0_.id AS id_0, a0_.date_depot_benne AS date_depot_benne_1, a0_.date_retour_benne AS date_retour_benne_2, a0_.date_reglement AS date_reglement_3, a0_.statut AS statut_4, p1_.id AS id_5, p1_.nom AS nom_6, p1_.adresse AS adresse_7, p1_.ville AS ville_8, p1_.code_postal AS code_postal_9, p1_.tel_portable AS tel_portable_10, p1_.tel_fixe AS tel_fixe_11, s2_.id AS id_12, s2_.nom AS nom_13, s2_.adresse AS adresse_14 FROM achat a0_ LEFT JOIN partenaire p1_ ON a0_.partenaire_id = p1_.id LEFT JOIN site s2_ ON a0_.site_id = s2_.id ORDER BY a0_.id DESC LIMIT 5');
        $query3 = $this->db->query('SELECT v0_.id AS id_0, v0_.date_vente AS date_vente_1, p1_.id AS id_2, p1_.nom AS nom_3, p1_.adresse AS adresse_4, p1_.ville AS ville_5, p1_.code_postal AS code_postal_6, p1_.tel_portable AS tel_portable_7, p1_.tel_fixe AS tel_fixe_8, s2_.id AS id_9, s2_.nom AS nom_10, s2_.adresse AS adresse_11 FROM vente v0_ LEFT JOIN partenaire p1_ ON v0_.partenaire_id = p1_.id LEFT JOIN site s2_ ON v0_.site_id = s2_.id ORDER BY v0_.id DESC LIMIT 5');
		
		*/
		
		// myperischool
		//$query1 = $this->db->query('SELECT e0_.id AS id_0, e0_.nom AS nom_1, e0_.prenom AS prenom_2, e0_.sexe AS sexe_3, e0_.date_naissance AS date_naissance_4, e0_.deleted AS deleted_5, e0_.sait_nager AS sait_nager_6, e0_.nom_image AS nom_image_7, e0_.cree_par_admin AS cree_par_admin_8, a1_.id AS id_9, a1_.numeroVoie AS numerovoie_10, a1_.complementVoie AS complementvoie_11, a1_.voie AS voie_12, a1_.batiment AS batiment_13, a1_.lieu_dit AS lieu_dit_14, v2_.id AS id_15, v2_.codePostal AS codepostal_16, v2_.libelle AS libelle_17, v3_.id AS id_18, v3_.codePostal AS codepostal_19, v3_.libelle AS libelle_20, c4_.id AS id_21, c4_.nom AS nom_22, c4_.niveau AS niveau_23, f5_.id AS id_24, f5_.autres_maladies AS autres_maladies_25, f5_.autres_recommandations AS autres_recommandations_26, f5_.autres_allergies AS autres_allergies_27, f5_.date_modification AS date_modification_28, f5_.commentaires_allergies AS commentaires_allergies_29, f5_.vaccins_a_jour AS vaccins_a_jour_30, r6_.id AS id_31, r6_.nom AS nom_32, r6_.prenom AS prenom_33, r6_.date_naissance AS date_naissance_34, r6_.profession AS profession_35, r6_.tel_fixe AS tel_fixe_36, r6_.tel_mobile AS tel_mobile_37 FROM enfant e0_ LEFT JOIN adresse a1_ ON e0_.adresse_id = a1_.id LEFT JOIN ville v2_ ON a1_.ville_id = v2_.id LEFT JOIN ville v3_ ON e0_.lieu_naissance_id = v3_.id LEFT JOIN classe c4_ ON e0_.classe_id = c4_.id LEFT JOIN fiche_medicale f5_ ON e0_.fiche_medicale_id = f5_.id LEFT JOIN enfant_responsable e7_ ON e0_.id = e7_.enfant_id LEFT JOIN responsable r6_ ON r6_.id = e7_.responsable_id WHERE e0_.deleted <> true AND e0_.ecole_id = 7 ORDER BY c4_.id ASC, e0_.nom ASC, e0_.prenom ASC;');

		//debug($query1->result_array(), false);

		$this->load->view('welcome_message');
	}
	
	public function email()
	{
		$this->load->library('email');

		$this->email->from('dev@waigeo.fr', 'Waigeo');
		$this->email->to('n.thomas@waigeo.fr');
		//$this->email->cc('another@another-example.com');
		//$this->email->bcc('them@their-example.com');
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		$result = $this->email->send();
		var_dump($result);

	}
}

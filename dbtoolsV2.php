<?php

// fonctions pour la lecture des citations dans la base sqlite



// Retourne la citation en cours ou le prochaine citation si l'intervalle de temps est dépassé
function lire_ligne($intervalle) {
	$db = new SQLite3("timestamp.db");
	$result = $db->query('SELECT * FROM timestamp');
	$row = $result->fetchArray();
//	var_dump($row);
	$rowid = $row['rowid'];
	$ts = $row['ts'];
//	var_dump($rowid, $ts, time());
	if (time()-$ts > $intervalle)
	{
		$newtime = time();
		$rowid++;
		$execstr = "INSERT INTO timestamp(ts,rowid) VALUES(".$newtime.",".$rowid.")";
//		var_dump($execstr);
		$db->exec('DELETE FROM timestamp');
		$db->exec($execstr);
		
	}
	return $rowid;

}


function reset_ligne() {
	$db = new SQLite3("timestamp.db");
	$execstr = "INSERT INTO timestamp(ts,rowid) VALUES(1,0)";
	$db->exec('DELETE FROM timestamp');
	$db->exec($execstr);

}

function lire_citation($intervalle) {

	$result = false;
	$ligne = lire_ligne($intervalle);
	$db2 = new SQLite3("ILIOS.db");
	while ($result==false) {
		$result = $db2->querysingle('SELECT * FROM Citations WHERE id='.$ligne, true);
		if ($result==false) {
			reset_ligne();
			$ligne=1;
		}
	}
	return $result['Citation'];

}

function lire_auteur_citation($intervalle) {

	$result = false;
	$ligne = lire_ligne($intervalle);
	$db2 = new SQLite3("ILIOS.db");
	while ($result==false) {
		$result = $db2->querysingle('SELECT * FROM Citations WHERE id='.$ligne, true);
		if ($result==false) {
			reset_ligne();
			$ligne=1;
		}
	}
	return $result['Auteur'];

}


function lire_lien_citation($intervalle) {

	$result = false;
	$ligne = lire_ligne($intervalle);
	$db2 = new SQLite3("ILIOS.db");
	while ($result==false) {
		$result = $db2->querysingle('SELECT * FROM Citations WHERE id='.$ligne, true);
		if ($result==false) {
			reset_ligne();
			$ligne=1;
		}
	}
	return $result['Lien'];

}





function lire_auteur_roman($intervalle) {

	$result = false;
	$ligne = lire_ligne($intervalle);
	$db2 = new SQLite3("ILIOS.db");
	while ($result==false) {
		$result = $db2->querysingle('SELECT * FROM Livres WHERE id='.$ligne, true);
		if ($result==false) {
			reset_ligne();
			$ligne=1;

		}
	}
	return $result['Auteur'];

}


function lire_titre_roman($intervalle) {

	$result = false;
	$ligne = lire_ligne($intervalle);
	$db2 = new SQLite3("ILIOS.db");
	while ($result==false) {
		$result = $db2->querysingle('SELECT * FROM Livres WHERE id='.$ligne, true);
		if ($result==false) {
			reset_ligne();
			$ligne=1;
		}
	}
	return $result['Titre'];
}

function lire_oeuvre_date_roman($intervalle) {

	$result = false;
	$ligne = lire_ligne($intervalle);
	$db2 = new SQLite3("ILIOS.db");
	while ($result==false) {
		$result = $db2->querysingle('SELECT * FROM Livres WHERE id='.$ligne, true);
		if ($result==false) {
			reset_ligne();
			$ligne=1;
		}
	}
	return $result['Phrase'];
}

function lire_texte_roman($intervalle) {

	$result = false;
	$ligne = lire_ligne($intervalle);
	$db2 = new SQLite3("ILIOS.db");
	while ($result==false) {
		$result = $db2->querysingle('SELECT * FROM Livres WHERE id='.$ligne, true);
		if ($result==false) {
			reset_ligne();
			$ligne=1;
		}
	}
	return $result['Passage'];
}


function lire_lien($intervalle) {

	$result = false;
	$ligne = lire_ligne($intervalle);
	$db2 = new SQLite3("ILIOS.db");
	while ($result==false) {
		$result = $db2->querysingle('SELECT * FROM Videos WHERE id='.$ligne, true);
		if ($result==false) {
			reset_ligne();
			$ligne=1;
		}
	}
	return $result['Lien'];
}




?>
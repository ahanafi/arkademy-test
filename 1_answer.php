<?php
/*
Tuliskan sebuah method/function untuk me-return biodata Anda, dengan ketentuan: 
	- name (String)
	- address (String)
	- hobbies (Array)
	- is_married (Boolean)
	- school (Obj) with key highSchool, and university
	- skills (Array of Obj)

	Return value harus berupa JSON

*/

function my_Biodata() {
	$biodata = array(
		'name' => 'Ahmad Hanafi',
		'address' => 'Desa Sampiran blok Plaosan RT 01 RW 01 Kec. Talun Kab. Cirebon',
		'hobbies' => [
			'Read the books', 'Typing code', "Read the Al-Qur'an", 'Watching video tutorials', 'etc'
		],
		'is_married' => FALSE,
		'school' => (object) [
			'highSchool' => 'Vocational High School of Kedawung one Cirebon',
			'university' => 'STMIK CIC Cirebon'
		],
		'skills' => [
			'HTML', 'CSS', 'PHP', 'Javascript', 'Laravel', 'Codeigniter', 'Bootstrap CSS', 'jQuery'
		]
	);

	return json_encode($biodata);
}

echo my_Biodata();


?>
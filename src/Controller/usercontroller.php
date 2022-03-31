<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\user;

if ((isset($_POST['users']))) 
	{
		$name = htmlspecialchars($_POST['nom']);
		$ref = htmlspecialchars($_POST['prenom']);
		$price_ttc = htmlspecialchars($_POST['token']);
		$price_ht = htmlspecialchars($_POST['role']);
		$amount = htmlspecialchars($_POST['created_at']);
		$notes = htmlspecialchars($_POST['update_at']);

		if (empty($_POST['nom']))
		{
			$error_messages['nom'] = 'Champ vide';
		}	

		if (empty($_POST['prenom']))
		{
			$error_messages['prenom'] = 'Champ vide';
		}	

		if (empty($_POST['token']))
		{
			$error_messages['token'] = 'Champ vide';
		}	

		if (empty($_POST['role']))
		{
			$error_messages['role'] = 'Champ vide';
		}	

		if (empty($_POST['created_at']))
		{
			$error_messages['created_at'] = 'Champ vide';
		}
		
		if (empty($_POST['update_at']))
		{
			$error_messages['update_at'] = 'Champ vide';
		}